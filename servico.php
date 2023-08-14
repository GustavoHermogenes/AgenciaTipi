<!DOCTYPE html> 

<!-- a tag doctype diz ao navegador que estamos escrevendo em uma linguagem html -->

<html lang="pt-Br">

<head>

    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- essa tag meta, é uma tag resonsavel por aplicar algumas definições, por exemplo, os caracteres, os softwares compatíveis ( neste caso o edge ) a escala/ largura do site entre outros -->

    <title>Agência TIPI</title>

        <!-- a tag title é uma tag usada para dar o título ao site, ou seja, o nome que ficará escrito la na aba de pesquisa -->

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" type="text/css" href="css/slick.css" />

    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css">

    <!-- a tag link é usada para importar arquivos externos por meio de um link, propriamente dito, e neste caso estão sendo usados para importar um "reset", tirando todas as formatações implementadas pelo software, para parmitir a animação realizada pelo css, e por fim a importação do link de estilo, o qual será responsavel por implementar as formatações e estilos do meu css futuramente -->


</head>

 <!-- head é a tag "cabeça" do projeto, ou seja, esta é a tag usada para iniciar o trabalho e onde fica organizado informações como tamanho, compatibilidade, idioma, titulo e etc-->

<body>
    <!-- esta tag body é a reponsável por conter todas as informações do site no quesito visual, portanto nesta tag ficará todas as outras tags, se tornando literalmente todo o corpo, do cabeçalho até o rodapé -->

    <!-- topo do site  -->

    <?php require_once('conteudo/topo.php'); ?>



    <main>

        <!-- a tag main é basicamente o mesma finalidade do header, contudo, em vez de ter somente o inicio, cabeçalho, nesta seção será contido todo o corpo do site e estruturas  com exceção do cabeçalho e do rodapé -->

        <!--corpo do projeto-->

        <?php require_once('conteudo/servico-conteudo.php'); ?>

        <?php require_once('conteudo/galeria.php'); ?>

    </main>



    <footer>

        <!-- tag fotter é basicamente a mesma coisa do header e do main, contudo nesta parta sera contido somente o rodapé, ou seja, será bem menos informação, e marcará o fim do projeto ( parte visual) -->


        <?php require_once('conteudo/rodape.php'); ?>
    


    </footer>





   
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


    <script src="js/slick.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="js/animacoes.js"></script>

    <!-- aqui sao tags responsaveis por permitir que as animacoes sejam aplicadas, portanto não tem funcinalidade visual no projeto diretamente, somente é responsavel por tornar possivel acessar as galerias JS -->


</body>


</html>