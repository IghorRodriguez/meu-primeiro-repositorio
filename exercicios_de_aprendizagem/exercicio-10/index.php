<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>O Show do ano!</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <h1 id="caneta">O Show do Caneta Azul</h1>
        <h1 id="azul">Manuel Gomes</h1>
        <h1 id="data">31/12/2023</h1>
        <h1 id="local">Local a ser Definido</h1>
        <p class="ingresso">Garanta já o seu ingresso !</p>
        <P class="garanta">Comprando em nosso site com antecedência você garante o nosso brinde exclusivo.</P>

        <h1 class="open">Open Bar</h1>
        <h2 class="evento">Evento totalmente Open Bar</h2>

        <div class="open-bar">
            <div class="cerveja">
            <p class="bebida">Brahma</p>   
            </div>
        </div>

        <div class="open-bar">
            <div class="wisk">
            <p class="bebida">Black Label</p>
            </div>
        </div>

        <div class="open-bar">
            <div class="vodka">
            <p class="bebida">Orloff</p> 
            </div>
        </div>

        <div class="open-bar">
            <div class="energetico">
            <p class="bebida">Monster</p>    
            </div>
        </div>

        <div class="open-bar">
            <div class="agua">
            <p class="bebida">Água Mineral</p>
            </div>
        </div>

        <h1 class="inscricao">Faça já a sua inscrição em nosso site para mais informações :</h1>

        <div class="show">
            <form action="backend/cadastrar.php" method="POST">

                <div class="campo-de-dados">
                    <label for="name">Nome:</label><br>
                    <input id="name" type="text" name="name" velue="" maxlength="25">
                </div>

                <div class="campo-de-dados">
                    <label for="last_name">Sobrenome:</label><br>
                    <input id="last_name" type="text" name="last_name" velue="" maxlength="25">
                </div>

                <div class="campo-de-dados">
                    <label for="email">Email:</label><br>
                    <input id="email" type="text" name="email" velue="" maxlength="25">
                </div>

                <div class="campo-de-dados">
                    <label for="telephone">Telefone:</label><br>
                    <input id="telephone" type="text" name="telephone" velue="" maxlength="25">
                </div>

                <div class="botao-de-confirmacao">
                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Inscrever</button>
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

    </body>
</html>