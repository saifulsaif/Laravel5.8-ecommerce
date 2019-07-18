<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Laravel Ecommerce Project</title>

  @include('fontend.partials.styles')
</head>
<body>

  <div class="wrapper">

    @include('fontend.partials.nav')
    @yield('content')
    @include('fontend.partials.footer')

  </div>


  @include('fontend.partials.scripts')
  </body>
</html>
