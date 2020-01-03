<!DOCTYPE html>
<html lang="en">

    @include('user.head')

<body>
<div>
  @include('user.modal')
</div>
    <div id="app">
     <div class="container-fluid">
        @include('user.topmenu')
    </div>
      
     @yield('content')
   
        @include('user.footer')
    
  </div>

</body>
</html>
