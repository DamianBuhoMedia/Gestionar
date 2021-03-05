<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>
-->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title-->
    <title>Gestionar</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.ico">
    <!-- CSS Stylesheet-->
    <link type="text/css" rel="stylesheet" href="{{route('/')}}/css/bootstrap/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="{{route('/')}}/css/bootstrap/bootstrap-themes.css" />
    <link type="text/css" rel="stylesheet" href="{{route('/')}}/css/style.css" />

    <!-- Styleswitch if  you don't chang theme , you can delete -->
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="{{route('/')}}/css/styleTheme1.css" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="{{route('/')}}/css/styleTheme2.css" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="{{route('/')}}/css/styleTheme3.css" />
    <link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="{{route('/')}}/css/styleTheme4.css" />

</head>
<body class="leftMenu nav-collapse">
      @yield('content')
      {{--menu lateral--}}
      @include('partials.menulat')

      <!-- Jquery Library -->
      <script type="text/javascript" src="{{route('/')}}/js/jquery.min.js"></script>
      <script type="text/javascript" src="{{route('/')}}/js/jquery.ui.min.js"></script>
      <script type="text/javascript" src="{{route('/')}}/plugins/bootstrap/bootstrap.min.js"></script>
      <!-- Modernizr Library For HTML5 And CSS3 -->
      <script type="text/javascript" src="{{route('/')}}/js/modernizr/modernizr.js"></script>
      <script type="text/javascript" src="{{route('/')}}/plugins/mmenu/jquery.mmenu.js"></script>
      <script type="text/javascript" src="{{route('/')}}/js/styleswitch.js"></script>
      <!-- Library 10+ Form plugins-->
      <script type="text/javascript" src="{{route('/')}}/plugins/form/form.js"></script>
      <!-- Datetime plugins -->
      <script type="text/javascript" src="{{route('/')}}/plugins/datetime/datetime.js"></script>
      <!-- Library Chart-->
      <script type="text/javascript" src="{{route('/')}}/plugins/chart/chart.js"></script>
      <!-- Library  5+ plugins for bootstrap -->
      <script type="text/javascript" src="{{route('/')}}/plugins/pluginsForBS/pluginsForBS.js"></script>
      <!-- Library 10+ miscellaneous plugins -->
      <script type="text/javascript" src="{{route('/')}}/plugins/miscellaneous/miscellaneous.js"></script>
      <!-- Library Themes Customize-->
      <script type="text/javascript" src="{{route('/')}}/js/caplet.custom.js"></script>

      <script type="text/javascript" src="js/scripts.js"></script>
      @yield('scripts')
</body>
</html>
