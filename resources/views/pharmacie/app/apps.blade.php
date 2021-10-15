
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @yield('style')
</head>
<body style=" display:flex; flex-direction:column; justify-content:space-between; height: 100vh;">
    
     <div>
     @include('pharmacie.partials.navbar')
     @yield('content')
     </div>
     <div>
     <footer style="height: 100px; background-color:#afeeee">
             <div style="display: flex; flex-direction:column; justify-content:center" >
               <div style="display: flex; justify-content:start"> <a href="{{route('pharmaciens')}}"> <span>Liste des pharmaciens</span> </a> </div>
               <div style="display: flex; justify-content:end">©Copyright:2021</div>
             </div>
         </footer>
     </div>

       
    

    
    
    
</body>
</html>
