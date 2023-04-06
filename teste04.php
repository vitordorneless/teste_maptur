<!DOCTYPE html>
<html>
    <head>
        <title>Teste Vítor Dorneles</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="teste01.php" class="btn btn-default btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Teste 01</a>
                            <a href="teste02.php" class="btn btn-default btn-lg"><i class="fa fa-refresh fa-spin"></i> Teste 02</a>
                            <a href="teste03.php" class="btn btn-default btn-lg"><i class="fa fa-spinner fa-spin"></i> Teste 03</a>
                            <a href="teste04.php" class="btn btn-default btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Teste 04</a>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="container">
                    <?php
                    $lista = array(
                        1 => 0,
                        2 => 0,
                        3 => 0,
                        4 => 0,
                        5 => 0);

                    $matriz = array(
                        1 => array(1, 2, 10),
                        2 => array(2, 4, 5),
                        3 => array(3, 5, 12)
                    );
                    $cont = $cont2 = $cont3 = $cont4 = $cont5 = 1;
                    echo '<br>';
                    foreach ($lista as $key => $value) {
                        if ($key == $matriz[1][0] or $key == $matriz[1][1]) {
                            $lista[$cont] = bcadd($matriz[1][2], $value);
                        }                        
                        ++$cont;
                    }
                    print_r($lista);
                    echo '<br>';
                    
                    foreach ($lista as $key => $value) {                        
                        if ($key == $matriz[2][0] or $key == $matriz[2][1]) {
                            $lista[$cont2] = bcadd($matriz[2][2], $value);
                        }
                        ++$cont2;
                    }
                    print_r($lista);
                    echo '<br>';
                    
                    foreach ($lista as $key => $value) {                        
                        if ($key == $matriz[3][0] or $key == $matriz[3][1]) {
                            $lista[$cont3] = bcadd($matriz[3][2], $value);
                        }
                        ++$cont3;
                    }
                    print_r($lista);
                    echo '<br>';
                    
                    foreach ($lista as $key => $value) {                        
                        if ($key == $matriz[3][0] or $key == $matriz[3][1]) {
                            $lista[$cont4] = bcadd($matriz[4][2], $value);
                        }
                        ++$cont4;
                    }
                    print_r($lista);
                    echo '<br>';
                    
                    foreach ($lista as $key => $value) {                        
                        if ($key == $matriz[3][0] or $key == $matriz[3][1]) {
                            $lista[$cont5] = bcadd($matriz[5][2], $value);
                        }
                        ++$cont5;
                    }
                    print_r($lista);
                    echo '<br>';
                    ?>
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="index.html" class="btn btn-primary btn-lg">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>