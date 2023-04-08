<?php 

$explodRoute = explode('?', $_SERVER['REQUEST_URI']);
$route = $explodRoute[0];

if ($route === '/') {
   echo 'accueil';
} 

elseif ($route === '/register') {
    echo '<h1>page register</h1>';
}

elseif ($route === '/login') {
    echo '<h1>page login</h1>';
} 

elseif ($route === '/logout') {
    echo '<h1>page logout</h1>';
} 

elseif ($route === '/add-student') {
    echo '<h1>page add students</h1>';
} 

elseif ($route === '/add-course') {
    echo '<h1>page add courses</h1>';
} 

elseif ($route === '/add-livre') {
    echo '<h1>page add livre</h1>';
} 

else {
    echo '404';
}
