<?php 

$autor = "Kevin Orrego";

$appName = "Kevao";

$email = "kevao.dev@gmail.com";

$date = date("Y-m-d");

$mes = date('n');

if ($mes >= 2) {
    $n = date('Y');
    $ex = $n - 2019;
    $ag = $n - 2001;
}else{
    $nacimiento=2001;
    $n = date('Y');
    $ex = $n - 2019;
    $ag = $n - 2001 - 1;
}

$icoName = "favicon";

$keys ="K, Kevin Orrego, Blog";

//$serve = "http://localhost/proyectos/php/k";

$serve = "https://kevao-blog.herokuapp.com";

?>