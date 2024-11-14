<?php
    namespace PHP\Modelo;
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head><!--Orientações para a Página-->
        <meta charset="UTF-8"/><!--padrão de Acentuação-->
        <title>Página Inicial</title><!--Título da aba-->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body><!--Corpo da página-->
        <header>
            <h1 class="titulo">The Pilsen's House</h1><!--TAG de Título - Título Principal -->
            <nav>
                <ul>
                    <a href="index.php"><button>Cadastro</button></a><!--Item/Tópicos-->
                    <a href="ConsultarCodigo.php"><button>Consultar Codigo</button></a><!--Item/Tópicos-->
                    <a href="cardapio.html"><button>Cardapio</button></a><!--Item/Tópicos-->
                    <a href="fotos.html"><button>Tabacaria</button></a><!--Item/Tópicos-->
                </ul><!--Colocar em tópicos-->
            </nav><!--Menu-->
        </header><!--Cabeçalho-->
        <section id="historia"><!--Sessão-->
            <aside><!--Conteudo da Página-->
                <p>
                </p>
            </aside>
        </section>
        <section class="cardapio">
            <article id="gl1">
                <h3>Lanches e Porções</h3>
                <img class="imgFmt" src="../IMAGENS/porcao.jpg" alt="Lanches e Porções">
                <p class="preco">A partir de R$ 25,00</p>
                <a href=""><button>Consultar</button></a><!--HiperLink-->
            </article>
            <article id="gl2">
                <h3>Bebidas</h3>
                <img class="imgFtd" src="../IMAGENS/bebidas.png" alt="Bebidas">
                <p class="preco">A partir de R$ 8,00</p>
                <a href=""><button>Consultar</button></a><!--HiperLink-->
            </article>
            <article id="gl3">
                <h3>Tabacaria</h3>
                <img class="imgFtd" src="../IMAGENS/nargas.jpg" alt="Tabacaria">
                <p class="preco">A partir de R$ 10,00</p>
                <a href=""><button>Consultar</button></a><!--HiperLink-->
            </article>
        </section>
        <footer>
            <h6></h6>
        </footer>
    </body>
</html>