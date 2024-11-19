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
    <section id="historia"><!--Sessão-->
            <aside><!--Conteudo da Página-->
                <p>
                    THE PILSEN'S HOUSE APRESENTA:
                </p>
            </aside>
        </section>
    <section class="galeria">
            <article id="gl1">
                <h3>Belo - 23/11 as 22h</h3>
                <img class="imgFmt" src="../Imagens/Belo.jpg" alt="Belo">
                <p class="preco"> A partir de R$ 50,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
            <article id="gl2">
                <h3>Péricles - 24/11 as 21h</h3>
                <img class="imgFmt" src="../IMAGENS/pericles.jpg" alt="Pericles">
                <p class="preco"> A partir de R$ 55,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
            <article id="gl3">
                <h3>Thiaguinho - 30/11 as 22h</h3>
                <img class="imgFmt" src="../IMAGENS/thiaguinho.jpg" alt="Thiaguinho">
                <p class="preco"> A partir de R$ 60,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
            <article id="gl4">
                <h3>Sorriso Maroto - 01/12 as 21h</h3>
                <img class="imgFmt" src="../IMAGENS/sm.jpg" alt="Sorriso Maroto">
                <p class="preco"> A partir de R$ 40,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
            <article id="gl5">
                <h3>Ferrugem - 07/12 as 22h</h3>
                <img class="imgFmt" src="../IMAGENS/ferrugem.jpg" alt="Ferrugem">
                <p class="preco"> A partir de R$ 45,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
            <article id="gl6">
                <h3>Caju Pra Baixo - 08/12 as 21h</h3>
                <img class="imgFmt" src="../IMAGENS/caju.jpg" alt="Caju Pra Baixo">
                <p class="preco"> A partir de R$ 35,00 </p>
                <a href=""><button>Comprar</button></a><!--HiperLink-->
            </article>
        </section>
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