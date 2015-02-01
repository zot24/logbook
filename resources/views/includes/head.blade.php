<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@yield('description', 'Logbook page')">
<meta name="author" content="Israel Sotomayor">
<link rel="icon" href="../../favicon.ico">

<title>@yield('title', 'Logbook')</title>

{!! HTML::style(elixir("$css")) !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    {!! HTML::script('js/html5shiv.js') !!}
    {!! HTML::script('js/respond.js') !!}
<![endif]-->
