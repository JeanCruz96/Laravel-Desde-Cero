<!DOCTYPE html>
<html>
<head>
TITULO
<title>
   @yield('title','Aprendible')
</title>
</head>

<body>
    @yield('prueba')

   <nav>
       <li> <?php echo"<a href='".route('home')."'> Home</a>" ?></li>
       <li><?php echo"<a href='".route('about')."'> about</a>" ?></li>
       <li> <a href='contact'> contact</a></li>
       <li> <a href='portfolio'> portfolio</a></li>
   </nav>
   @yield('mensaje')
</body>
</html>
