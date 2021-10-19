<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <div id= "pagina">   
    <div id= "banner">
        <title>Portal</title>

        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="stylesheet" href="style/navigation.css">
        <link rel="stylesheet" href="style/slicknav/slicknav.min.css">
        
        <nav class="menu-navigation-round">
            <a href="index.php" class="selected">Home</a>
            <a href="fatos.php">Fatos</a>
            <a href="top5.php">Top 5</a>
            <a href="curriculo.php">Currículo</a>
        </nav>
       </div>
    </head>
    <body> 
        <div id="home"></div>
        <div id="corpo">
            <h1>Informações:</h1>
                <p>
                    <b>Nome:</b> Andreza Honório <br>
                    <b>Idade:</b> 26 anos<br>
                    <b>Cidade</b>: Brasília - DF<br>
                    <b>Curso:</b> Engenharia de Software
                </p>
            <h1>Sobre mim:</h1> 
                <p>Tive que ir no saite da minha loja pra pegar ideias do que escrever aqui, acho muito difícil falar sobre mim e ainda faltiu inspiração -triste- mas pra começa, 
                sou uma mulher muito sonhadora, mas realista!Caminho com os pés no chão, com a mente focada nos meus objetivos, mas o coração nos meus sonhos. 
                <br> <br>
                Sou muito observadora e detalhista, do tipo que olha linha por linha de um código, que está dando erro (só pra ver que o problema é a falta de um ";"), mas isso 
                não é só para os códigos, é pra vida!
                <br> <br>
                Sou uma pessoa que gosta de aprender, eu tinha muito aquela ideia de que todo o conhecimento é bem vindo, mas hoje eu já não penso assim, acho que é 
                bom filtrar um pouco o que você aprende, para que os conhecimento adquiridos façam sentido pro caminho que você quer seguir, e eu tenho certeza que a IncludJr vai
                me oferecer conhecimentos, que vão agregar e muito, para a profissional que eu quero ser.
                </p>
                <p>
                  <strong>Meus hobbies: </strong>
                  Gosto de ler, principalmente livros de fantasia, ensaios  e romances infanto-juvenis, ouvir múaica ir ao cinema sozinha.
                </p>
        </div>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="style//slicknav/jquery.slicknav.min.js"></script>

        <script>
            $(function(){
                var menu = $('.menu-navigation-round');    
                menu.on('click', 'a', function(){
                    var a = $(this);
                    a.siblings().removeClass('selected');
                    a.addClass('selected');
                });
            });
        </script>
    </body>
</html>
