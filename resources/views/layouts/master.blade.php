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
</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">
    @yield('content')
    @include('includes.navigation')
    </div>
</div>
</body>
</html>