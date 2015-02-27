@servers(['production' => 'logbook'])

@setup
    $repo = 'git@github.com:zot24/logbook.git';
    $release_dir = '/var/www/logbook/releases';
    $app_dir = '/var/www/logbook/current';
    $release = 'release_' . date('YmdHis');
    $enviroment = isset($env) ? $env : "production";
@endsetup

@macro('deploy', ['on' => 'production'])
    fetch_repo
    run_composer
    build_public
    update_permissions
    update_symlinks
@endmacro

@task('fetch_repo')
    [ -d {{ $release_dir }} ] || mkdir {{ $release_dir }};
    cd {{ $release_dir }};
    git clone -b master --depth=1 {{ $repo }} {{ $release }};
@endtask

@task('run_composer')
    cd {{ $release_dir }}/{{ $release }};
    composer install --prefer-dist --no-scripts;
    php artisan clear-compiled --env={{ $enviroment }};
    php artisan optimize --env={{ $enviroment }};
@endtask

@task('build_public')
    cd {{ $release_dir }}/{{ $release }};
    npm install;
    bower install;
    gulp --{{ $enviroment }};
@endtask

@task('update_permissions')
    cd {{ $release_dir }};
    chgrp -R www-data {{ $release }};
    chmod -R ug+rwx {{ $release }};
@endtask

@task('update_symlinks')
    cd {{ $release_dir }}/{{ $release }};
    ln -nfs {{ $app_dir }}/../../.env .env;

    ln -nfs {{ $release_dir }}/{{ $release }} {{ $app_dir }};

    rm -r {{ $release_dir }}/{{ $release }}/storage/logs;
    cd {{ $release_dir }}/{{ $release }}/storage;
    ln -nfs {{ $app_dir }}/../../logs logs;

    sudo service php5-fpm reload;
@endtask