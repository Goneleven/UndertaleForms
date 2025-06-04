<!-- Guilherme da Silva Bonifácio -->

<?php
require_once('conexao.php');

$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

//Consulta SQL para buscar os dados
$sql = "SELECT id, nome, cor, love FROM humanos";
$resultado = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Bunny - Undertale</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/siteIcone.png">
</head>

<body class="dark">

    <!-- CONSTRUÇÃO DO HEADER -->

    <header>

        <!-- LINKS DA PAGINA: -->

        <nav>
            <div class="nav-principal">
                <ul class="nav-links">
                    <li><a href="index.php" class="undertale-page-link">UNDERTALE</a></li>
                    <li><a href="forms.php" class="deltarune-page-link">FORMULÁRIO</a></li>
                    <li><a href="dados.php" class="undertale-page-link">DADOS</a></li>

                </ul>
            </div>
            <div class="botao-modo">
                <div class="selecao"></div>

            </div>
        </nav>

    </header>


    <br>

    <!-- CONSTRUÇÃO DO MAIN -->


    <main id="inicio-undertale">
        <!-- INTRODUÇÃO, Section para LINK e Fundo logo UNDERTALE -->
        <br><br>
        <section class="container4">
            <!-- Container com IMAGEM -->
            <figure class="card-sites">
                <a href="https://undertale.com/" target="_blank">
                    <img src="imagens/undertaleLogo.png" alt="">
                </a>
            </figure>
        </section>

        <!-- Inicio da página de verdaed -->

        <section class="container-especial">
            <div class="object-especial">
                <div class="texto-main">
                    <h2>
                        Registros de Humanos que cairam no SUBSOLO.
                    </h2>
                </div>
                <?php if (mysqli_num_rows($resultado) > 0): ?>
                    <table class="tabela-usuarios">
                        <tr class="tabela-cabecalho">
                            <th>ID</th>
                            <th>Humano</th>
                            <th>Cor</th>
                            <th>LOVE</th>
                            <th>Alterações</th>
                        </tr>

                        <?php while ($linha = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td><?php echo $linha['id']; ?></td>
                                <td><?php echo $linha['nome']; ?></td>
                                <td><?php echo $linha['cor']; ?></td>
                                <td><?php echo $linha['love']; ?></td>
                                <td>
                                    <a class="botao-acao editar" href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a>
                                    <a class="botao-acao excluir" href="excluir.php?id=<?php echo $linha['id']; ?>"
                                        onclick="return confirm ('Quer mesmo que esse Humano perca sua DETERMINAÇÃO?');">Excluir</a>

                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                <?php else: ?>
                    <p>Nenhum Humano encontrado no SUBSOLO...</p>
                <?php endif; ?>

            </div>
        </section>

        <section class="container2" id="screenshots-undertale">
            <!-- Container com IMAGEM -->
        </section>

        <section class="container-especial">
            <div class="object-especial">
                <div class="texto-main">
                    <h2>Meow.</h2>
                    <br>
                    <p>Esperando Algo Acontecer?</p>
                </div>

                <br>

                <br>

                <div class="undertale-game-fim" id="plataformas">
                    <figure>
                        <img src="imagens/characterTobyFox.gif" alt="">
                        <figcaption>Jogo Feito por TobyFox</figcaption>
                    </figure>
                </div>

                <br>

                <div class="texto-main">
                    <h2>UNDERTALE Disponivel em:</h2>
                </div>

                <br>

                <div>
                    <ul class="plataforma-jogo-icone">
                        <li class="icone-nintendo">
                            <figure>
                                <a href="https://www.nintendo.com/us/store/products/undertale-switch/">
                                    <img src="imagens/plataformaSwitch.png" alt="">
                                </a>
                            </figure>
                        </li>
                        <li class="icone-playstation">
                            <figure>
                                <a
                                    href="https://store.playstation.com/en-us/product/UP3893-CUSA08801_00-TFSHVCUTPS400084">
                                    <img src="imagens/plataformaPlaystation.png" alt="">
                                </a>
                            </figure>
                        </li>
                        <li class="icone-xbox">
                            <figure>
                                <a href="https://www.xbox.com/pt-BR/games/store/undertale/9PJGGX9XJXPB">
                                    <img src="imagens/plataformasXbox.png" alt="">
                                </a>
                            </figure>
                        </li>
                        <li class="icone-steam">
                            <figure>
                                <a href="https://store.steampowered.com/app/391540/Undertale/">
                                    <img src="imagens/plataformaSteamIcon.png" alt="">
                                </a>
                            </figure>
                        </li>
                    </ul>
                </div>

                <br>

                <div class="texto-main">
                    <h2>Se você completou UNDERTALE Talvez goste de:</h2>
                </div>

            </div>
        </section>

        <section class="container4">
            <!-- Container com IMAGEM -->
            <figure class="card-sites">
                <a href="https://deltarune.com/" target="_blank">
                    <img src="imagens/deltaruneLogo.png" alt="">
                </a>
            </figure>
        </section>

        <br><br><br>
    </main>


    <!-- CONSTRUÇÃO DO FOOTER -->


    <footer class="footer">
        <div class="footerInfos">
            <h2>Trabalho feito por:</h2>

            <br>

            <p>
                Guilherme da Silva Bonifácio <br>
                UNDERTALE Feito por TobyFox
            </p>

        </div>

    </footer>

</body>

<script src="javascript/script.js">
</script>

</html>