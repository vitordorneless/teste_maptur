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
                    $s = 'aeiaaioooau';
                    $string = str_split($s);                    
                    echo '<br>';
                    $a = $e = $i = $o = $u = false;
                    $cont_a = $cont_e = $cont_i = $cont_o = $cont_u = $cont_tudo = 0;
                    foreach ($string as $value) {

                        if ($value == "a" and $a == false) {
                            ++$cont_a;
                            $a = true;                            
                        }
                        if ($value == "e" and $a == true) {
                            ++$cont_e;
                            $e = true;                            
                        }
                        if ($value == "i" and $e == true) {
                            ++$cont_i;
                            $i = true;                            
                        }
                        if ($value == "o" and $i == true) {
                            ++$cont_o;
                            $o = true;                            
                        }
                        if ($value == "u" and $o == true) {
                            ++$cont_u;
                            $u = true;                            
                        }
                    }
                    if ($cont_a > 0 && $cont_e > 0 && $cont_i > 0 && $cont_o > 0 && $cont_u > 0) {
                        echo $cont_a + $cont_e + $cont_i + $cont_o + $cont_u;
                    } else {
                        echo 0;
                    }
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