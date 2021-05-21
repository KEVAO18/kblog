<?php
    function routes($serve, $appName, $autor, $ag, $ex){
        
        $ruta = array();
        if (isset($_GET["p"])) {
            $p = $_GET["p"];
            $ruta = explode("/", $p);
        }

        switch ($ruta[0]) {

            case "home":
                include "../web/views/".$ruta[0].".php";
                home($appName, $serve, $autor);
                break;

            case "search":
                include "../web/views/".$ruta[0].".php";
                search($serve, $_POST['search']);
                break;

            case "About":
                include "../web/views/".$ruta[0].".php";
                About($ag, $ex, $serve);
                break;

            case "CM":
                include "../web/views/".$ruta[0].".php";
                CM($serve);
                break;

            case 'proyects':
                if (isset($ruta[1])) {
                    switch ($ruta[1]) {

                        case 'YEY':
                            include "../web/views/".$ruta[1].".php";
                            YEY($serve);
                            break;

                        case 'E9':
                            include "../web/views/".$ruta[1].".php";
                            E9();
                            break;

                        case 'WM':
                            include "../web/views/".$ruta[1].".php";
                            WM();
                            break;

                        case 'kblog':
                            include "../web/views/".$ruta[1].".php";
                            kblog();
                            break;

                        default:
                            ?>
                            <div class="container">
                            <div class="row py-4 text-center">
                                <div class="col-12 display-1 pt-3">404</div>
                                <div class="col-12 display-4 pb-5">Página no encontrada</div>
                            </div>
                            </div>
                            <?php

                            break;
                    }
                }else {
                    include "../web/views/".$ruta[0].".php";
                    proyects($serve);
                }
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