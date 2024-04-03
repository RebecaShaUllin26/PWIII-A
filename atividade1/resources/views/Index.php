<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etec da Zona Leste</title>
    @vite('resources/css/style.css')
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section starts -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo"> <i><img src="images/ft1.png" width="70" height="75"></i>ETECZL</a>

        <nav class="navbar">
            <div id="close-navbar" class="fas fa-times"></div>
            <a href="#home">Home</a>
            <a href="#about">Sobre Nos</a>
            <a href="#services">Cursos</a>
            <a href="#services">Noticias</a>
            <a href="#packages">Contato</a>
     
        </nav>

        <a href="#book" class=""> </a>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Conheça a Etec Zona Leste: Excelência em Educação Técnica na Região da Zona Leste de São Paulo</h3>
            <p>Conheça os nossos cursos!</p>
        </div>

        <div class="video-container">
            <video src="images/WhatsApp Video 2024-03-27 at 15.13.50.mp4" id="video" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts -->

    <section class="about" id="about">

        <h1 class="heading">Sobre nós</h1>

        <div class="container">

            <div class="image-container">
                <img src="images/ft3.jpg" alt="" class="image">
                <div class="controls">
                    <span class="control-btn" data-src="images/ft3.jpg"></span>
                    <span class="control-btn" data-src="images/ft10.jpg"></span>
                    <span class="control-btn" data-src="images/ft13.jpg"></span>
                </div>
            </div>

            <div class="content">
                <span>Bem vindo(a) Etec Zona Leste</span>
                <h3>Quem somos?</h3>
                <p>A Etec Zona Leste, é um importante centro educacional que prioriza a excelência acadêmica e o desenvolvimento profissional dos alunos. Oferece uma variedade de cursos em áreas como informática, administração e eletrônica, buscando preparar os alunos para o mercado de trabalho. Além disso, destaca-se por atividades extracurriculares, como projetos de pesquisa, competições acadêmicas e eventos culturais, que complementam a formação dos estudantes.</p>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- Cursos section starts -->

    <section class="packages" id="Cursos">

        <h1 class="heading">Cursos</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/adm2.webp" alt="">
                </div>
                <div class="content">
                    <h3>Administração</h3>
                    <p>Desvendando os Segredos do Mundo Empresarial: Curso Técnico de Administração – Conectando Passado, Presente e Futuro! </p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cont.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Contabilidade</h3>
                    <p>Desvende os segredos da Contabilidade: a chave para organizar, calcular e prosperar nos negócios!</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/dss.jpeg">
                </div>
                <div class="content">
                    <h3>Desenvolvimento de sistemas AMS</h3>
                    <p>Modalidade totalmente presencial permite que, em um período de cinco anos, o estudante conclua os ensinos nos níveis Médio, Técnico (ETEC) e Superior (FATEC).</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/log.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Logistica</h3>
                    <p>Rumo à Eficiência: Explorando os Segredos da Logística com Matemática, Geografia e Física!</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/rh.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Recursos Humanos</h3>
                    <p>Gestão de Pessoas em Foco: Desbravando os Desafios do Setor de Recursos Humanos com Língua Portuguesa, Matemática e História!</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/ju.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Serviços Juridicos</h3>
                    <p>Explorando o Mundo Jurídico: Curso Técnico em Direito e Administração – Uma Jornada pelos Pilares Legais da Sociedade!</p>
                </div>
            </div>

        </div>

    </section>

    <!-- Cursos section ends -->

     <!-- noticias section starts -->

     <section class="about" id="about">

        <h1 class="heading">Noticias</h1>

        <div class="container">

            <div class="image-container">
                <img src="images/professora_ams.webp" alt="" class="image">
            </div>

            <div class="content">
                <h3>Processo Seletivo Simplificado para Professor de Ensino Médio e Técnico</h3>
                <br><span>Siga as instruções abaixo para se candidatar</span>
                <p><br>1º Acessar o site: https://urhsistemas.cps.sp.gov.br/dgsdad/selecaopublica/ETEC/PSS/Abertos.aspx 

                    <br> 2º Localizar pelo código da unidade: “211”; 
                    
                    <br> 3º Clique em “Inscreva-se”; 
                    
                    <br>  4º Ler atentamente o edital; 
                    
                    <br> 5º Preencher o formulário de inscrição e entregar o memorial circunstanciado juntamente com a documentação comprobatória;
                    
                    <br> 6º Concluir as etapas no sistema.</p>
            </div>

        </div>

    </section>

    <!-- noticias section ends -->

   
    <!-- newsletter section starts -->

    <section class="newsletter">

        <div class="content">
            <h3>Contato</h3>
            <p><br>Etec Zona Leste. Av. Águia de Haia, 2633 - Cidade A.E. Carvalho <br>CEP 03685-000 - São Paulo/SP <br> Telefone: (11) 2045-4016. Telefone: (11) 2045-4017</p> 
        </div>

    </section>

    <!-- newsletter section ends -->

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
          <div class="vw-plugin-top-wrapper"></div>
        </div>
      </div>
      <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>


</body>
</html>