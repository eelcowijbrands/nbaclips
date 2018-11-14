<!DOCTYPE html>

<html>

<head>

  <script type="text/javascript" src="{{asset ('https://code.jquery.com/jquery-1.9.1.min.js') }}"></script>
  <script type="text/javascript" src="{{asset ('js/FeedEk.js') }}"></script>

  <link href="{{ ('https://ancient-fortress-19731.herokuapp.com/css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
  <link href="{{ ('https://ancient-fortress-19731.herokuapp.com/css/main.css') }}" media="all" rel="stylesheet" type="text/css" />

  <!--<link href="{{ ('/css/app.css') }}" media="all" rel="stylesheet" type="text/css" />
  <link href="{{ ('/css/main.css') }}" media="all" rel="stylesheet" type="text/css" />-->


  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'NBA Clips')</title>

</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light" bg-light style="background-color: #00BFFF;">
                <a class="navbar-brand" href="/">NBA Clips</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/about">About</a>
                    <a class="nav-item nav-link" href="/contact">Contact</a>
                  </div>
                </div>
        </nav>        
   
@yield('content')


</body>

</html>