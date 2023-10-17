<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="contaniner">
        <a class="navbar-brand" href="{{url('/')}}">
         ADIDAS   
        </a>
        <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target=#navbar-SupportedCondent>
        <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedCondent"> 

        <!--left side of navbar-->  
        <ul class="navbar-nav me-auto"></ul> 

        <!--right side of navbar-->
        <ul class="navbar-nav ms-auto"></ul>
         <!--Authentification links-->  
         @guest
         @if(Route:has('login'))
         <li class="nav-item">
            <a class="nav-link" href="{(route('login')}">{{(_'login')}} </a>
         </li>
         @endif
         @else

         <li class="nav-item dropdown">
         <a id="navbardropdown" class="nav-link dropdown-toggle" href='#' role="button" data-bs
         {{Auth:user()->}} 
         </a>

         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbardropdown">
            <a class="dropdown-item" href="{{route('logout')}}"
            onclick="event.preventDefault();
             document.getElementById('logout-logout-form').submit();">
             </a>
         <form id="logout-logout-form"  action="{{route('logout')}}" method="post" class="d-none"
         @csrf 
        </form>
        </li> 
          

         </div>
        


</body>
</html>