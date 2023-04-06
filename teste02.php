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
                    (int) $a = 5;
                    echo $a . ' Valor para gerar Fibonacci<br>';
                    $fibonacci = $gera_array = array();
                    (int) $posicao_01 = (int) $posicao_02 = (int) $contaposicao = (int) $contaposicaoforeach = (int) $index = (int) $nova_posicao = (int) $proxima_posicao_01 = 0;

                    for ($i = 0; $i < $a; ++$i) {
                        array_push($gera_array, $i);
                    }

                    foreach ($gera_array as $value) {

                        ++$contaposicao;

                        if ($contaposicao == 1) {
                            $posicao_01 = $nova_posicao > 0 ? $proxima_posicao_01 : $value;
                            array_push($fibonacci, $posicao_01);
                        }

                        if ($contaposicao == 2) {
                            $posicao_02 = $value;
                            array_push($fibonacci, $posicao_02);
                            array_push($fibonacci, bcadd($posicao_01, $posicao_02, 0));
                            $nova_posicao = bcadd($posicao_01, $posicao_02, 0);
                            $proxima_posicao_01 = bcadd($posicao_02, $nova_posicao, 0);
                            $contaposicao = $posicao_01 = $posicao_02 = 0;
                        }
                    }

                    foreach ($fibonacci as $value) {
                        ++$contaposicaoforeach;
                        echo $value . ' <br>';
                        if ($contaposicaoforeach == $a)
                            break;
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