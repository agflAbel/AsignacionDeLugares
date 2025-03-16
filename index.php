<?php
include('asignacion.class.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$a = new Asigna;
if($action):
    $lugares=$a->getArray($_POST['lugares']);
    $grupos=$a->getArray($_POST['grupos']);
    // print_r($_GET);
    // print("---------");
    // print_r($_POST);
    // print("-----------");
    $final=$a->asignar($lugares,$grupos);
    print_r($final);
endif;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Asignacion de lugares</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/miestilo.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
    <body>
        <header>

        </header>
        <div class="container">
            <form id="f" class="align-items-center" method="post" enctype="multipart/form-data" action="index.php?action=asignar">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            Lista de lugares
                        </div>
                        <div class="col">
                            Lista de Grupos
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <textarea class="form-control" name="lugares" id="lugares" rows="4"></textarea>
                        </div>
                        <div class="col">
                            <textarea class="form-control" name="grupos" id="lugares" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Asignar</button>
                        </div>
                    </div>
                </div>
                
            </form>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Lugar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <footer>

    </footer>
</html>