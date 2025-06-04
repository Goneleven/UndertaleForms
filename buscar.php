    <!-- Guilherme da Silva Bonifácio -->

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
                            Resultado:
                        </h2>
                    </div>

                    <br>

                    <?php
                    $pesquisar = $_POST["pesquisar"];
                    switch ($pesquisar) {
                        case 'RPG':
                            echo "<h2>O Que é RPG?</h2><br>
                            <p>Um RPG eletrônico é um gênero de jogo em que o jogador controla as ações de um ou mais personagens imersos num mundo bem definido, incorporando elementos dos RPGs tradicionais, compartilhando geralmente a mesma terminologia, ambientações e mecânicas de jogo.<br><br>
    
                            Outras similaridades com os RPGs de mesa incluem a ampla progressão de história e elementos narrativos, o desenvolvimento dos personagens do jogador, rigoroso sistema de regras, além de complexibilidade e elementos de imersão. Não existe um consenso claro sobre a definição do escopo exato do termo, especificamente variando se o foco na jogabilidade ou na história deve ser o elemento definidor.</p>
                            <br><br>";
                            break;

                        case 'UDT':
                            echo "<h2>O que é UNDERTALE?</h2><br>
                            <p>UNDERTALE é um RPG eletrônico criado pelo desenvolvedor independente norte-americano Toby Fox. Nele, o jogador pode controlar uma criança humana que caiu em uma caverna no subsolo de uma montanha, uma região grande e isolada sob a superfície da Terra, separada por uma barreira mágica.<br><br>
                        
                            Vários monstros podem ser encontrados durante sua missão para retornar à superfície, principalmente através do sistema de combate; o jogador navega pelos ataques em formato bullet hell do oponente e pode optar por pacificar ou subjugar os monstros para poupá-los em vez de assassiná-los. Essas escolhas causam mudanças no diálogo, nos personagens e na história com base nos resultados.</p>
                            <br><br>";
                            break;

                        case 'DTR':
                            echo "<h2>O que é DELTARUNE?</h2><br>
                            <p>Deltarune é um spin-off do jogo anterior de Fox, Undertale (cujo título é um anagrama para Deltarune), mas seu ambiente é o mesmo mundo de Undertale. Um terceiro capítulo está sendo planejado junto ao capítulo 4, e previsto para ser lançado em 2025, durante o lançamento do Nintendo Switch 2.</p>
                            <br><br>";
                            break;

                        default:
                            echo "<h2>OPS!</h2><br>
                            <p>Você digitou algo errado, volte e confira o que errou.</p>";
                    }
                    ?>
                    <br>
                    <a href="forms.php" class="botao-voltar">Voltar</a>



                </div>
            </section>

            <section class="container2" id="screenshots-undertale">
                <!-- Container com IMAGEM -->
            </section>

            <section class="container-especial">
                <div class="object-especial">
                    <div class="texto-main">
                        <p>Muitas pessoas amam UNDERTALE.</p>
                        <br>
                        <p>Quem sabe você não ame também.</p>

                    </div>

                    <br><br>

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