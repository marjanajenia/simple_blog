<!DOCTYPE html>
<html lang="en">
<head>
  @include('backend.includes.css')
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      @include('backend.includes.sidebar')

      <!-- Main Content -->
      @yield('content')
    </div>
  </div>
 @include('backend.includes.script')
</body>
</html>
