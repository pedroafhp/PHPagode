<?php 
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Compra de Ingressos</title>

    </head>
    <body>
        <form method="POST">
        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"><br><br>

        <button type="submit">
            Efetuar Compra

        <?php
            //Conexão com o banco
            $conexao = new Conexao();

            //Coletar o código
            $codigo = $_POST['codigo'];

            //Chamar o consultar
            $consultar = new Consultar();
        ?>
        </button>
        <?php
            echo $consultar -> consultarIndividual($conexao, $codigo);
        ?>
        </form><!-- Fim do Formulário -->
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>