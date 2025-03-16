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
    
endif;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Asignacion de lugares</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jacquard+24&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css" />
	</head>
    <body>
        <header>
        <img src="img/image.png" class="img-fluid enc" alt="...">
        <h1 class="titulo">Asignacion de Lugares</h1>
        <!--pre><?php print_r($final);?></pre>-->
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
                            <textarea class="form-control" name="lugares" id="lugares" rows="4"><?php echo(isset($final))?$_POST['lugares']:'' ?></textarea>
                        </div>
                        <div class="col">
                            <textarea class="form-control" name="grupos" id="lugares" rows="4"><?php echo(isset($final))?$_POST['grupos']:'' ?></textarea>
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
                    <?php
                    $i=1;
                    foreach($final as $asig):
                    ?>
                    <tr>
                    <th scope="row"><?php print $i?></th>
                    <td><?php print $asig[0] ?></td>
                    <td><?php print $asig[1] ?></td>
                    </tr>
                    <?php $i++; endforeach;?>
                </tbody>
            </table>
        </div>
    </body>
    <footer>
        <p>
            Desarrollado por: Aguilar Flores Abel
        </p>
    </footer>
</html>