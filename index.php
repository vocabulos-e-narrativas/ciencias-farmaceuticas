<?php
$message_sent = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ordemfformulario@gmail.com";
    $from = "ordemfformulario@outlook.com";
    $subject = "Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $body = "name=" . $name . "\n";
    $body .= "email=" . $email . "\n";

    $headers = "From: $from\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";



    try {
        if (mail($to, $subject, $body, $headers)) {
            $message_sent = true;
        } else {
            $message_sent = false;
        }
    } catch (Exception $e) {
        // Error occurred while sending email
        $message_sent = false;
    }
}
?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L9HJM7H5HL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-L9HJM7H5HL');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI:CF</title>
    <meta property="og:title" content="Ciências Farmacêuticas">
    <meta property="og:description" content="Um mundo inteiro numa profissão">
    <meta property="og:image" content="https://cienciasfarmaceuticas.pt/images/logo.png">
    <meta property="og:url" content="https://cienciasfarmaceuticas.pt/">
    <meta property="og:type" content="website">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
</head>

<!-- v2 -->

<body>
    <section class="header">
        <div class="container text-center pb-5 pt-3">
            <img src="./images/logo_verde.svg" alt="logo" class="logo" />
            <h1 class="f18 title text-white">
                Mestrado Integrado em <br />
                <span class="f27">Ciências Farmacêuticas</span>
            </h1>
        </div>
    </section>
    <section class="sub-header p-4 p-md-2">
        <div class="container text-center text-white">
            <h1 class="f25">Um mundo inteiro numa profissão</h1>
        </div>
    </section>
    <section class="body py-5">
        <div class="text-white">
            <h1 class="f3 text-center d-none d-md-block">
                Sejam bem-vindos ao portal sobre o <br />
                Mestrado Integrado em Ciências Farmacêuticas!
            </h1>
            <h1 class="f3 text-center d-block d-md-none px-3 py-2">
                Sejam bem-vindos ao portal sobre o Mestrado Integrado em Ciências Farmacêuticas!
            </h1>
            <div class="container pt-0 pt-md-4">
                <h3 class="text-center px-11">
                    Aqui, vais encontrar toda a informação de que precisas para a tua
                    jornada académica. Descobre mais sobre o papel fundamental do
                    farmacêutico na promoção da saúde.
                </h3>
            </div>
        </div>
        <div class="px-11 container">
            <div class="row py-5">
                <div class="col-12 col-md-3 text-center">
                    <img src="./images/icon1.png" class="w-50" />
                    <p class="text-white pt-3">
                        Impacto direto na
                        qualidade de vida e
                        no bem-estar da
                        comunidade
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="./images/icon2.png" class="w-50" />
                    <p class="text-white pt-3">
                        Diversidade
                        de oportunidades
                        profissionais em
                        várias áreas de
                        especialização
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="./images/icon3.png" class="w-50" />
                    <p class="text-white pt-3">
                        Estabilidade,
                        boa remuneração
                        e progressão na
                        carreira
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center">
                    <img src="./images/icon4.png" class="w-50" />
                    <p class="text-white pt-3">
                        Campo dinâmico,
                        em evolução constante,
                        que explora várias
                        áreas emergentes
                    </p>
                </div>
            </div>
        </div>
        <div class="px-11 container py-5">
            <div class="round p-5 text-white">
                <?php if ($message_sent) { ?>
                    <h2 class="f80 mt-2 mb-3 px-4 ">
                        Obrigado!
                    </h2>
                    <h2 class="f80 mt-2 mb-3 px-4 ">
                        Em breve, receberás conteúdos exclusivos sobre o Mestrado Integrado em Ciências Farmacêuticas.
                    </h2>
                <?php } else { ?>
                    <h2 class="f80 mt-2 mb-3 px-4 text-center">
                        Conhece em detalhe todas as oportunidades que este
                        curso te pode oferecer, e recebe em primeira-mão os
                        recursos informativos desta campanha.
                    </h2>
                    <form method="POST">
                        <div class="row">
                            <input type="text" id="name" name="name" placeholder="O teu nome" required>
                        </div>
                        <div class="row my-3">
                            <input type="text" id="email" name="email" placeholder="O teu email" required>
                        </div>
                        <div class="row">
                            <input type="submit" value="ENVIAR" name="submit" class="f95">
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
        <div class="px-11 container py-5">
            <div class="round2 p-5 text-center">
                <div class="row">
                    <h2 class="text-white f15">FICA A CONHECER A TUA NOVA CASA ACADÉMICA</h2>
                </div>
                <div class="row pb-2">
                    <h3 class="text-orange">CLICA PARA EXPLORAR</h3>
                </div>
                <div class="row mx-auto">
                    <div class="order-md-1 col-6 bg-blue-top-bottom d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.ufp.pt/inicio/estudar-e-investigar/licenciaturas/ciencias-farmaceuticas/" target="_blank">
                            <img src="./images/fernadopessoa.png" class="" />
                        </a>
                    </div>
                    <div class="order-md-2 col-6 bg-orange d-flex justify-content-center align-items-center m-1">
                        <a href="https://sigarra.up.pt/ffup/pt/web_base.gera_pagina?p_pagina=18409" target="_blank">
                            <img src="./images/uporto.png" class="" />
                        </a>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="order-md-1 order-2 col-6 bg-orange d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.ubi.pt/curso/830" target="_blank">
                            <img src="./images/beirainterior.png" class="" />
                        </a>
                    </div>
                    <div class="order-md-2 order-1 col-6 bg-blue-bottom-top d-flex justify-content-center align-items-center m-1">
                        <a href="https://apps.uc.pt/courses/PT/course/1172" target="_blank">
                            <img src="./images/coimbra.png" class="" />
                        </a>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="order-md-1 col-6 bg-blue-bottom-top d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.ff.ulisboa.pt/mestrado-integrado-em-ciencias-farmaceuticas/" target="_blank">
                            <img src="./images/u_lisboa.png" class="" />
                        </a>
                    </div>
                    <div class="order-md-2 col-6 bg-orange d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.egasmoniz.com.pt/estudar/mestrados-integrados/ciencias-farmaceuticas" target="_blank">
                            <img src="./images/egasmuniz.png" class="" />
                        </a>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="order-md-1 order-2 col-6 bg-orange d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.ulusofona.pt/lisboa/mestrados-integrados/ciencias-farmaceuticas" target="_blank">
                            <img src="./images/lusofona.png" class="" />
                        </a>
                    </div>
                    <div class="order-md-2 order-1 col-6 bg-blue-top-bottom d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.cespu.pt/ensino/ensino-universitario/cursos-iucs/detalhes-do-programa-de-estudos/?course=BO%5cCF" target="_blank">
                            <img src="./images/cespu.png" class="" />
                        </a>
                    </div>
                </div>
                <div class="row mx-auto">
                    <div class="order-md-1 col-6 bg-blue-bottom-top d-flex justify-content-center align-items-center m-1">
                        <a href="https://fct.ualg.pt/curso/1488" target="_blank">
                            <img src="./images/uAlgarve.png" class="" />
                        </a>
                    </div>
                    <div class="order-md-2 col-6 bg-orange d-flex justify-content-center align-items-center m-1">
                        <a href="https://www.uevora.pt/estudar/cursos/licenciaturas?cod=9494" target="_blank">
                            <img src="./images/evora.png" class="" />
                        </a>
                    </div>
                </div>
                <div class="row px-3 pt-3">
                    <h3 class="text-white">
                        Para informação detalhada sobre condições de candidatura visita o site da DGES
                    </h3>
                </div>
                <div class="row d-flex justify-content-center align-items-center dges">
                    <a href="https://www.dges.gov.pt/guias/indcurso.asp?curso=9494" target="_blank">
                        <img src="./images/dges.png" />
                    </a>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <h2 class="text-center text-white f25">Uma decisão</h2>
            <h2 class="text-center text-white f27 bold">múltiplas oportunidades</h2>
            <div class="d-none d-md-flex row icons py-5 justify-content-center align-items-center">
                <div class="col-2 text-center">
                    <img id="img_mundo_1" src="./images/img_mundo_1_active.svg" class="pulsing pointer" alt="" onclick="Mundo_handleClick(1)" />
                    <h3 class="mt-3 text-white">Mundo<br /> Clínico</h3>
                </div>
                <div class="col-2 text-center">
                    <img id="img_mundo_2" src="./images/img_mundo_2.svg" class="pointer" alt="" onclick="Mundo_handleClick(2)" />
                    <h3 class="mt-3 text-white">Mundo<br /> Científico</h3>
                </div>
                <div class="col-2 text-center">
                    <img id="img_mundo_3" src="./images/img_mundo_3.svg" class="pointer" alt="" onclick="Mundo_handleClick(3)" />
                    <h3 class="mt-3 text-white">Mundo<br /> Tecnológico</h3>
                </div>
                <div class="col-2 text-center">
                    <img id="img_mundo_4" src="./images/img_mundo_4.svg" class="pointer" alt="" onclick="Mundo_handleClick(4)" />
                    <h3 class="mt-3 text-white">Mundo<br /> Industrial</h3>
                </div>
                <div class="col-2 text-center">
                    <img id="img_mundo_5" src="./images/img_mundo_5.svg" class="pointer" alt="" onclick="Mundo_handleClick(5)" />
                    <h3 class="mt-3 text-white">Mundo<br /> Regulamentar</h3>
                </div>
            </div>
            <div class="d-block d-md-none row icons py-5 justify-content-center align-items-center">
                <div class="col-12 col-md-2 text-center">
                    <img id="img_mundo_1" src="./images/img_mundo_1_active.svg" />
                    <h3 class="text-white">Mundo<br /> Clínico</h3>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <img id="img_mundo_2" src="./images/img_mundo_2_active.svg" />
                    <h3 class="text-white">Mundo<br /> Científico</h3>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <img id="img_mundo_3" src="./images/img_mundo_3_active.svg" />
                    <h3 class="text-white">Mundo<br /> Tecnológico</h3>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <img id="img_mundo_4" src="./images/img_mundo_4_active.svg" />
                    <h3 class="text-white">Mundo<br /> Industrial</h3>
                </div>
                <div class="col-12 col-md-2 text-center">
                    <img id="img_mundo_5" src="./images/img_mundo_5_active.svg" />
                    <h3 class="text-white">Mundo<br /> Regulamentar</h3>
                </div>
            </div>
        </div>
        <div class="d-none d-md-block">
            <div id="content_img_mundo_1" class="container pt-2 pb-5">
                <h2 class="text-center text-white f27 bold">Mundo Clínico</h2>
                <h2 class="text-center text-white f18">Tem um papel ativo na qualidade de vida dos cidadãos</h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/01_mundo_clinico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div id="content_img_mundo_2" class="container pt-2 pb-5" style="display: none;">
                <h2 class="text-center text-white f27 bold">Mundo Científico</h2>
                <h2 class="text-center text-white f18">Navega as fronteiras do conhecimento e encontra soluções com impacto
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/02_mundo_cientifico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div id="content_img_mundo_3" class="container pt-2 pb-5" style="display: none;">
                <h2 class="text-center text-white f27 bold">Mundo Tecnológico</h2>
                <h2 class="text-center text-white f18">Explora a tecnologia mais emergente e resolve desafios da Humanidade
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/04_mundo_tecnologico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div id="content_img_mundo_4" class="container pt-2 pb-5" style="display: none;">
                <h2 class="text-center text-white f27 bold">Mundo Industrial</h2>
                <h2 class="text-center text-white f18">Desenvolve respostas competitivas para o dia-a-dia da população</h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/03_mundo_industrial.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div id="content_img_mundo_5" class="container pt-2 pb-5" style="display: none;">
                <h2 class="text-center text-white f27 bold">Mundo Regulamentar</h2>
                <h2 class="text-center text-white f18">
                    Estabelece diretrizes que garantam a segurança e decisões mais informadas em saúde
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/05_mundo_regulamentar.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="container py-5">
                <h2 class="text-center text-white f27 bold">Mundo Clínico</h2>
                <h2 class="text-center text-white f18">Tem um papel ativo na qualidade de vida dos cidadãos</h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/01_mundo_clinico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-center text-white f27 bold">Mundo Científico</h2>
                <h2 class="text-center text-white f18">Navega as fronteiras do conhecimento e encontra soluções com impacto
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/02_mundo_cientifico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-center text-white f27 bold">Mundo Industrial</h2>
                <h2 class="text-center text-white f18">Desenvolve respostas competitivas para o dia-a-dia da população</h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/03_mundo_industrial.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-center text-white f27 bold">Mundo Tecnológico</h2>
                <h2 class="text-center text-white f18">Explora a tecnologia mais emergente e resolve desafios da Humanidade
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/04_mundo_tecnologico.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <h2 class="text-center text-white f27 bold">Mundo Regulamentar</h2>
                <h2 class="text-center text-white f18">
                    Estabelece diretrizes que garantam a segurança e decisões mais informadas em saúde
                </h2>
                <div class="row icons justify-content-center align-items-center">
                    <div class="row text-center">
                        <img src="./images/05_mundo_regulamentar.png" class="mx-auto w-100-md-75" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function Mundo_handleClick(imageNumber) {
            const baseImageUrl = "./images/";
            const imageElements = [
                "1",
                "2",
                "3",
                "4",
                "5"
            ];
            const textElements = [
                "content_img_mundo_1",
                "content_img_mundo_2",
                "content_img_mundo_3",
                "content_img_mundo_4",
                "content_img_mundo_5"
            ];
            for (let i = 1; i <= imageElements.length; i++) {
                const imgElement = document.getElementById("img_mundo_" + i);
                const textElement = document.getElementById(textElements[i - 1]);
                if (i === imageNumber) {
                    imgElement.src = baseImageUrl + "img_mundo_" + i + "_active.svg";
                    textElement.style.display = 'block';
                    imgElement.classList.add('pulsing');
                } else {
                    imgElement.src = baseImageUrl + "img_mundo_" + i + ".svg";
                    textElement.style.display = 'none';
                    imgElement.classList.remove('pulsing');
                }
            }
        }
    </script>
</body>
<footer>
    <div class="container px-11 py-3 text-center">
        <img src="./images/logos universidades.png" alt="parceiros" />
    </div>
</footer>


</html>