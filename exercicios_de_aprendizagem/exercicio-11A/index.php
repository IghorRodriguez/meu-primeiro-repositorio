<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fã Page</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <br>
        <h1 class="titulo">Adam Warlock</h1>
        <h2 class="subtitulo">Sua história e origem :</h2><br>
        <p class="texto">Adam Warlock foi criado artificialmente por um grupo de cientistas com o nome de Enclave. Eles procuravam a criação de um protótipo que servisse de exemplo perfeito para um exército que os servisse.</p>
        <p class="texto">Ele foi renomeado pelo geneticista como Adam (forma inglesa do nome Adão) por ser o primeiro da sua espécie. Warlock (inglês para feiticeiro ou bruxo) foi escolhido porque todos se impressionariam – e temeriam – o seu poder.</p>
        <P class="texto">Adam Warlock se tornou o primeiro super-herói da Contra-Terra. A sua jornada aparentemente messiânica levou as pessoas do planeta a o considerarem um deus e a criarem uma religião em seu nome.</P>
        <p class="texto">Se há super-herói da Marvel com uma longa lista de poderes, esse personagem é Adam Warlock. Sua estrutura óssea e músculo são mais densos que um humano, dando a ele superforça e super-resistência, além disso podemos incluir em sua lista de poderes voô,ele é capaz de lançar feitiços, controlar elevadas quantidades de energia mística, ele consegue viajar entre fendas espaciais criadas através de seu pensanmento e regeneração através da criação de um casulo.</p>
        <p class="texto"><strong>Ele é um dos membros originais dos Guardiões da Galáxia e atualmente o grupo é formado pelos seguintes heróis:</strong></p><br>

        <div class="guardioes">
            <div class="adam">
                <p class="heroi">Adam Warlock</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="star">
                <p class="heroi">Star lord</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="groot">
                <p class="heroi">Groot</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="rocket">
                <p class="heroi">Rocket Racoon</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="drax">
                <p class="heroi">Drax</p>
            </div>
        </div>
        
        <div class="guardioes">
            <div class="gamora">
                <p class="heroi">Gamora</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="mantis">
                <p class="heroi">Mantis</p>
            </div>
        </div>

        <div class="guardioes">
            <div class="nebulosa">
                <p class="heroi">Nebulosa</p>
            </div>
        </div>

        <br>
        <h3 class="inscricao">Fique por dentro de nossos conteúdos, se inscrevendo em nosso site e vire membro da nossa comunidade nerd !</h3><br>
        
        <div class="comunidade">

            <a id="rolar-ate-aqui"></a>

            <form action="backend/cadastrar.php" method="POST">

                <div class="campo-de-dados">
                    <label for="full_name">Nome completo:</label><br>
                    <input id="full_name" type="text" name="full_name" velue="" maxlength="30">
                </div>
                
                <div class="campo-de-dados">
                    <label for="username">Usuário:</label><br>
                    <input id="username" type="text" name="username" velue="" maxlength="15">
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
                <?php if (isset($_GET['n']) && isset($_GET['un']) && isset($_GET['em']) && isset($_GET['tl'])):?>
               
                <div class="campo-de-dados">
                    Obrigado pelo seu cadastro!<br><br>
                    Os dados informados são:<br><br>
                    
                    <?php echo $_GET['n'] . ' ' . $_GET['un'] . ' ' . $_GET['em'] . ' ' . $_GET['tl']; ?>
                </div>
                <?php endif; ?>
                
                </form>
        </div>
    </body>
</html>