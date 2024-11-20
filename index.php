<?php
namespace PHP\Modelo;
            require_once('DAO\inserir.php');
            require_once('DAO\Conexao.php');
            use PHP\Modelo\DAO\Inserir;
            use PHP\Modelo\DAO\Conexao;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Principal</title>
        <link rel="stylesheet" type="text/css" href="estilo1.css">

    </head>
    <body>
    <a href="menu.php"><button>Voltar</button></a>
        
        <form method="POST">
        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"><br><br>

        <label>Nome: </label><br>
        <input type="text" name="nome" id="nome"><br><br>

        <label>Endereço: </label><br>
        <input type="text" name="endereco" id="endereco"><br><br>

        <label>Telefone: </label><br>
        <input type="text" name="telefone" id="telefone"><br><br>

        <button type="submit">Cadastrar
        <?php
            if(isset($_POST['codigo'],$_POST['nome'],$_POST['endereco'],$_POST['telefone'])){
                $conexao = new Conexao();//Conectando o banco
                $codigo = $_POST['codigo'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                //Chamar a classe inserir
                $inserir = new Inserir();
            }else{
                $_POST['codigo'] = 0;
                $_POST['nome'] = "";
                $_POST['endereco'] = "";
                $_POST['telefone'] = "";
            }
        ?>
        </button>
        <?php
            echo $inserir -> cadastrarPessoa($conexao, $codigo, $nome, $endereco, $telefone);
        ?>
        </form><!-- Fim do Formulário -->
        <br><br>
    </body>
</html>