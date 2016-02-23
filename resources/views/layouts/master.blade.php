<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="./embed/bootstrap/superhero/bootstrap.min.css" />
    <link rel="stylesheet" href="./embed/bootstrap/fonts/font-awesome.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather" />
    <script type="text/javascript" src="/js/vue.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row-fluid" id="pjax-container">
    @yield('content')
    @include('includes.navigation')
    </div>
</div>
</body>
<script>
    $(document).pjax('a.pjaxMain', '#pjax-container',{ fragment: '#pjax-container'});
</script>
<script  type="text/javascript" src="/js/contactValidation.js"></script>
</html>