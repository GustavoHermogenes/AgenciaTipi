<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$ok = 0; 


if (isset($_POST['email'])) {

//Load Composer's autoloader
require 'mailer/Exception.php';
require 'mailer/PHPMailer.php';
require 'mailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'webexperience@smpsistema.com.br';                     //SMTP username
    $mail->Password   = 'Senac@agencia06';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('webexperience@smpsistema.com.br', 'Site agência tipi');
    $mail->addAddress('samueloliveirat20hl@gmail.com');     //Add a recipient

    //Content

    //dados do email

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mens = $_POST['mens'];
    
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Site agência tipi';
    $mail->Body    = "
    
    Nome: $nome <br>
    Email: $email <br>
    telefone: $tel <br>
    Mensagem: $mens 

    ";
    $mail->AltBody = " 

    Nome: $nome <br>
    Email: $email <br>
    telefone: $tel <br>
    Mensagem: $mens

";

    $mail->send();
    $ok = 1;
    // echo 'Mensagem enviada com sucesso';
} catch (Exception $e) {
    $ok = 2;
    echo "ERROOOOOOO... tente mais tarde {$mail->ErrorInfo}";
}
}

?>



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


        <section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900814!2d-46.434437023818894!3d-23.495592259180924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1687884223544!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>

        <section class="form">

            <div class="site">

                <h2>formulário de contato</h2>

                <div>

                    <form action="#" method="POST" id="formContato">

                        <div>

                            <input type="text" name="nome" placeholder="informe seu nome" id="nome">

                            <input type="email" name="email" id="email" required placeholder="informe seu email">

                            <input type="tel" name="tel" id="tel" placeholder="informe seu telefone">



                            <h3>
                            <?php

                            if($ok == 1){
                                echo $nome . ", sua mensagem foi enviada com sucesso";
                            }elseif($ok == 2){
                                echo $nome . ", erro ao enviar sua mensagem. Tente mais tarde";
                            }

                            ?>
                        </h3>
                    </div>


                        <div>

                            <textarea name="mens" id="mens" cols="30" rows="10" placeholder="informe sua mensagem"></textarea>

                            <div>
                            <input type="submit" value="enviar via e-mail">
                            <button onclick="event.preventDefault(); formWhats()">Enviar via WhatsApp</button>
                            </div>

                        </div>



                    </form>

                </div>
            </div>

        </section>

        <?php require_once('conteudo/depoimento.php'); ?>

        <?php require_once('conteudo/blog.php'); ?>

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