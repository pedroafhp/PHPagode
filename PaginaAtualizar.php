<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!Doctype HTML>
    <head>
        <meta charset="UTF-8"/>
        <title>Página Atualizar</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">

    </head>
    <body>
    <a href="menu.php"><button>Voltar</button></a>
        <form method="POST">
        <label>Código: </label><br>
        <input type="number" name="codigo" id="codigo"><br><br>

        <label>Campo: </label>
        <select name="atualizacao">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="endereco">Endereço</option>
        </select><br><br>

        <label>Novo Dado: </label><br>
        <input type="text" name="novoDado" id="novoDado"><br><br>

        <button type="submit">
            Atualizar
        <?php
           if(isset($_POST['codigo'],$_POST['nome'],$_POST['endereco'],$_POST['telefone'])){
            $conexao = new Conexao();//Conectando o banco
            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            //Chamar a classe inserir
            $atualizar = new Atualizar();
        }else{
            $_POST['codigo'] = 0;
            $_POST['nome'] = "";
            $_POST['endereco'] = "";
            $_POST['telefone'] = "";
        }
        ?>
        </button>
        <?php
            echo $atualizar -> atualizarPessoa($conexao, $campo, $novoDado, $codigo);
        ?>
        </form><!-- Fim do Formulário -->
        <br><br>
        <a href="menu.php"><button>Voltar</button></a>
    </body>
</html>