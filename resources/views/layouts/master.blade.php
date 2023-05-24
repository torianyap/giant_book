<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/js/app.js'])
</head>

<body>
  {{-- header --}}
  @include('includes.header')
  {{-- header end --}}

  {{-- navbar --}}
  @include('includes.navbar')
  {{-- navbar end --}}

  <div class="container mt-1 mb-5">
    <div class="row justify-content-center">
      {{-- spacer --}}
      <div class="col-2"></div>

      {{-- main content --}}
      <div class="col-8">
        @yield('content')
      </div>
      
      {{-- spacer --}}
      <div class="col-2"></div>
    </div>
  </div>

  {{-- footer --}}
  @include('includes.footer')
  {{-- end footer --}}
</body>

</html>
