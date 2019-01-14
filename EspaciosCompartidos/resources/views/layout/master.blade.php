<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body id="page-top">

  @include('layout.nav')
  <div class="container-fluid">
    @yield('content')
  </div>

  @include('layout.footer')

  @include('layout.scripts')


</body>

</html>
