<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTIONNAIRE DE TACHES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   
        <div style="text-align: center;"><a style="font-size:50px;"  href="{{ url('/') }}">GESTIONNAIRE DE TACHES</a></div>
   
    
        <div style=" width:80%; margin:auto; display: flex; justify-content:space-between; ">
            <div style="width: 20%; text-align:center;"><a style="color:white; background-color:black; padding:20px; font-weight:bold; font-size:20px; border-radius:10px;" class="nav-link" href="{{ route('tasks.index') }}">Tâches</a></div>
               
            <div style="width: 20%; text-align:center;"><a style="color:white; background-color:black; padding:20px; font-weight:bold; font-size:20px; border-radius:10px;" class="nav-link" href="{{ route('categories.index') }}">Categories</a></div>
        </div>
              
    
        @yield('content')
    </div>
</body>
</html>
