<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Newsportal</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <header name = "Access-Control-Allow-Origin" value = "*" />
    
    
    
</head>
<body>  
    <div id="app">
            <router-view></router-view>
    </div>

   <script src=" {{asset('js/app.js')}}"></script>
</body>
</html>