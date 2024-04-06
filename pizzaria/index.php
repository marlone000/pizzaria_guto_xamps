<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <header class="row cabecalho p-3">
            <div class="col">
                <img src="logotipo.png" alt="super pizza" class="img-fluid">
            </div>
            <div class="col text-end">
                <h1 class="text-light h2">Disk entregas<br>(19) 1234-5678</h1>
            </div>
        </header>
        <nav class="row menu ps-3 pe-3 pt-2 pb-2">
            <div class="col">
                <a href="index.php" class="me-2">Home</a>
                <a href="quem-somos.php"  class="me-2">Quem somos</a>
                <a href="contato.php"  class="me-2">Contato</a>
            </div>
        </nav>
        <main class="bg-light row pe-3 ps-3">
            <div class="row">
                <h2 class="mt-4 h1">A melhor pizza da região</h2>
                <hr>
                <?php
                  $servidor = "127.0.0.1";
                  $usuario = "root";
                  $senha = "";
                  $bd = "bd_pizza_novo";
                  $portao = "3306";

                  $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, $portao);

                  $sql = "select * from pizzas_novo order by qtd_vendas desc limit 3 ";

                  $todasAsPizzas = mysqli_query($conexao, $sql);
                  while (($umaPizza = mysqli_fetch_assoc($todasAsPizzas))){
                ?>
                <div class="col text-center">
                    <img src="<?php echo $umaPizza["foto"];?>" alt="<?php echo $umaPizza["nome"];?>" class="img-fluid">
                    <p><?php echo $umaPizza["nome"];?></p>
                </div>
                <?php
                }
                mysqli_close($conexao);
                ?>
                <hr>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Nossos sabores</h3>
                    <p class="sabores">
                        <?php
                      
                        //conexão
                        $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, $portao);
                        //criar o sql
                        $sql = "select nome from pizzas_novo";
                        //executar sql no banco
                        $todasAsPizzas = mysqli_query($conexao, $sql);
                        //laço de repetição - mostrar cada um dos dados, linha a linha 
                        while($umaPizza = mysqli_fetch_assoc($todasAsPizzas))
                        {
                            echo $umaPizza["nome"] . "<br>";
                        }
                        mysqli_close($conexao);
                        ?>
                    </p>
                </div><!-- coluna -->
                <div class="col">
                    <h3>Uma casa com história</h3>
                    <div class="row">
                        <div class="col-4">
                            <img src="historia.png" class="img-fluid" alt="historia">
                        </div>
                        <div class="col">
                            <p>Muito famosa em toda a região por sua excelência na qualidade, a nossa pizzzaria tem mais de 25 anos de história.</p>
                            <p>
                                <a href="quem-somos.php" class="link-destaque">Conheça</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- linha -->
        </main>

        <footer class="row rodape ps-3 pe-3 pt-3">
            <div class="col">
                <p class="text-light fw-lighter">Aula do Senac. Declaração dos direitos autorais.</p>
            </div>
        </footer>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>