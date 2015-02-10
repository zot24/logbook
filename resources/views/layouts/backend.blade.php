<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head', ['css' => 'css/backend.css'])
</head>
<body>
    @include('layouts.partials.backend.nav')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Dashboard</h1>
                @yield('content')
            </div>
        </div>
    </div>
    @include('includes.footer', ['js' => 'js/backend.js'])
</body>
</html>