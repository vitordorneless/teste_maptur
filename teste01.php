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
                            <button class="btn btn-default btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Teste 01</button>
                            <button class="btn btn-default btn-lg"><i class="fa fa-refresh fa-spin"></i> Teste 02</button>
                            <button class="btn btn-default btn-lg"><i class="fa fa-spinner fa-spin"></i> Teste 03</button>
                            <button class="btn btn-default btn-lg"><i class="fa fa-circle-o-notch fa-spin"></i> Teste 04</button>
                            <button class="btn btn-default btn-lg"><i class="fa fa-refresh fa-spin"></i> Teste 05</button>
                            <button class="btn btn-default btn-lg"><i class="fa fa-spinner fa-spin"></i> Teste 06</button>
                        </div>
                    </div>                    
                </div><br><br><br>  
                <div class="container">
                    <?php
                    $a = array(4, 5, 6, 5, 4, 3, 3, 3, 3, 7, 8, 9, 10, 10, 10, 10, 11, 11, 1, 1, 1, 1);
                    echo 'Array Original<br>';
                    print_r($a);
                    echo '<br>';
                    echo '<br>';
                    $arr = array_count_values($a);
                    $array_valores_unicos = $array_valores_repetidos = $novo_array = array();
                    foreach ($arr as $key => $value) {
                        if ($value > 1) {
                            for ($i = 1; $i <= $value; $i++) {
                                array_push($array_valores_repetidos, $key);
                            }
                        } else {
                            array_push($array_valores_unicos, $key);
                        }
                    }
                    sort($array_valores_unicos, SORT_NUMERIC);
                    sort($array_valores_repetidos, SORT_NUMERIC);
                    $novo_array = array_merge($array_valores_unicos, $array_valores_repetidos);

                    $i = 0;

                    foreach ($novo_array as $value) {
                        echo 'Posição ' . ++$i . ' - ' . $value . '<br>';
                    }
                    ?>
                </div>
            </div>            
        </div>
    </body>
</html>