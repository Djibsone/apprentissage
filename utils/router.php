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

elseif ($route === '/add-livre') {
    echo '<h1>page add livre</h1>';
} 

else {
    require './views/404.php';
}
