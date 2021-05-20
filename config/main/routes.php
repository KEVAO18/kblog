<?php
    function routes($serve, $appName){
        
        $ruta = array();
        if (isset($_GET["p"])) {
            $p = $_GET["p"];
            $ruta = explode("/", $p);
        }

        switch ($ruta[0]) {

            case "home":
                include "../web/views/".$ruta[0].".php";
                home($appName, $serve);
                break;

            case "search":
                include "../web/views/".$ruta[0].".php";
                search($serve, $_POST['search']);
                break;

            case "e403":
                include "../web/views/".$ruta[0].".php";
                e403();
                break;

            default:
                include "../web/views/e404.php";
                e404($serve);
                break;
        }
    }
?>