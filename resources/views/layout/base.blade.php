<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="main-app">
    <div class="container">
      <h1 class="title">Todo App OOP</h1>

      @yield('content')

    </div>
  </div>
  
</body>

</html>

@include('js/script')