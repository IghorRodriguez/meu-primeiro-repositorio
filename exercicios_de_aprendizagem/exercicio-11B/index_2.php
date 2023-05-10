<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Comunidade Nerd</title>
        <link rel="stylesheet" href="css/estilos1.css">
    </head>
    <body>
        <h1 class="titulo">The Marvels Comunity</h1>
        <h2 class="subtitulo">By Ighor Rodri</h2><br><br><br>
        <p class="text">Fique por dentro de todo o universo da Marvel seja conteúdos dos quadrinhos ou UCM.</p>
        <div class="img">
            <img class="foto" src="img/igor1.jpg" rcset style="width: 250px; height: 300px;" >

            <img class=foto src="img/igor2.jpg" rcset style="width: 250px; height: 300px;">

            <img class=foto src="img/igor3.jpg" rcset style="width: 310px; height: 300px;">

            <img class=foto src="img/igor4.jpg" rcset style="width: 250px; height: 300px;">

            <img class=foto src="img/igor5.jpg" rcset style="width: 250px; height: 300px;">
        </div>

        <h3 class="inscricao">Fique por dentro de nossos conteúdos, se inscreva em nosso site e vire membro da nossa comunidade nerd !</h3><br>
        
        <div class="comunidade">

            <a id="rolar-ate-aqui"></a>

            <form action="backend/cadastrar.php" method="POST">

                <div class="campo-de-dados">
                    <label for="name">Nome:</label><br>
                    <input id="name" type="text" name="name" velue="" maxlength="30">
                </div>
                
                <div class="campo-de-dados">
                    <label for="last_name">Sobrenome:</label><br>
                    <input id="last_name" type="text" name="last_name" velue="" maxlength="15">
                </div>

                <div class="campo-de-dados">
                    <label for="email">Email:</label><br>
                    <input id="email" type="text" name="email" velue="" maxlength="30">
                </div>

                <div class="campo-de-dados">
                    <label for="telephone">Telefone:</label><br>
                    <input id="telephone" type="text" name="telephone" velue="" maxlength="30">
                </div><br>

                <div class="botao-de-confirmacao">
                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Inscrever</button><br><br>
                </div>
                <br>
                <?php if (isset($_GET['n']) && isset($_GET['ln']) && isset($_GET['em']) && isset($_GET['tl'])):?>

                <div class="campo-de-dados">
                    Obrigado pelo seu cadastro!<br><br>
                    Os dados informados são:<br><br>
                    
                    <?php echo $_GET['n'] . ' ' . $_GET['ln'] . ' ' . $_GET['em'] . ' ' . $_GET['tl']; ?>
                </div>
                <?php endif; ?>
                
                </form>
        </div>
        <br><br><br>
        <a href="index.php" class="ref">Ir para a Página Mephisto</a>


    </body>
</html>