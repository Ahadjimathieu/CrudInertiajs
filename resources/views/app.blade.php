<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
     <link rel="stylesheet" href="{{Mix('/css/app.css')}}">
     <link rel="stylesheet" href="{{asset('/css/theme-1.css')}}">
     <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    @inertiaHead
  </head>
  <body>
    @inertia
    <script src="{{Mix('js/app.js')}}" defer></script>
  </body>
</html>
