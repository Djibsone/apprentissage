<?php 

$explodRoute = explode('?', $_SERVER['REQUEST_URI']);
$route = $explodRoute[0];

if ($route === '/') {
   require './views/home.php';
} 

elseif ($route === '/signup') {
    require './views/signup.php';
}

elseif ($route === '/signin') {
    require './views/signin.php';
} 

elseif ($route === '/signout') {
    echo '<h1>Page signout</h1>';
} 

elseif ($route === '/course') {
    require './views/course.php';
} 

elseif ($route === '/scourse') {
    require './views/scourse.php';
} 

elseif ($route === '/blog') {
    require './views/blog.php';
} 

elseif ($route === '/about') {
    require './views/about.php';
} 

elseif ($route === '/contact') {
    echo '<h1>Page contact</h1>';
}

else {
    require './views/404.php';
}
