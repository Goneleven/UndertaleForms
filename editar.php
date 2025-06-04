<!-- Guilherme da Silva Bonifácio -->

<?php
require_once('conexao.php');

$bancoDados = new db();
$link = $bancoDados->conecta_mysql();

// Verifica se um ID foi enviado
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Busca os dados do usuário
    $sql = "SELECT * FROM humanos WHERE id = $id";
    $resultado = mysqli_query($link, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        $dados = mysqli_fetch_assoc($resultado);
    } else {
        echo "Humano não encontrado no SUBSOLO... Deve estar na superficie!";
        exit;
    }
} else {
    echo "ID não informado.";
    exit;
}

// Atualiza o usuário se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoNome = $_POST['nome'];
    $novoCor = $_POST['cor'];
    $novoLove = $_POST['love'];

    $sqlUpdate = "UPDATE humanos SET
                    nome = '$novoNome',
                    cor = '$novoCor',
                    love = '$novoLove'
                  WHERE id = $id";

    if (mysqli_query($link, $sqlUpdate)) {
        header("Location: dados.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }
}
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
                        Edite o Humano Que você criou.
                    </h2>
                </div>

                <br>

                <form method="post" action="">

                    <label for="nome">Nome</label><br>
                    <input type="text" id="nome" name="nome" class="campos" value="<?php echo $dados['nome']; ?>"
                        placeholder="Digite o Nome do Humano." required>

                    <br><br>

                    <label for="cor">Cor Favorita</label><br>
                    <input type="text" id="cor" name="cor" class="campos" value="<?php echo $dados['cor']; ?>"
                        placeholder="Qual sua cor favorita?" required>

                    <br><br>

                    <label for="number">Level of Violence</label><br>
                    <input type="number" id="love" name="love" class="campos" value="<?php echo $dados['love']; ?>"
                        placeholder="Qual o LV do Humano? (Valor númerico)" required>

                    <br><br>

                    <input type="submit" class="botao" value="Atualizar">
                    <br>
                    <a href="dados.php" class="botao-voltar">Cancelar</a>
                </form>
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