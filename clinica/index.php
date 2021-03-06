<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clínica São Luiz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://www.youtube.com/redirect?event=video_description&redir_token=QUFFLUhqbHlXMnJLa1lPVEMyZVV4SW9kRGkwOXBwUlVQQXxBQ3Jtc0tubnFCUEE4dE4xaUp3UzN0ZFZ6UXlBREtGNFg1NmpGVzVUQVA5TFdmRTJ0MVhaSHh0UkZpcTgwTmFPeVdiX2hDbzNfUktWajBkSVNvZUhvODdrcmE5RGlwdHFYa1QtdjJ1T3YzNGFXLXY4cXBNMFNmaw&q=https%3A%2F%2Ffonts.googleapis.com%2Fcss%3Ffamily%3DRoboto" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v4.1.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Clínica São Luiz</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Serviços</a></li> -->
          <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Funcionários</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          
           <?php
              if (isset($_SESSION['usuario'])){
                echo "<li><a class='nav-link scrollto' href='./perfil.php'>Minshas Consultas</a></li>";
                echo "<li><a class='nav-link scrollto' href='./agendamento.php'>Realizar Agendamento</a></li>";
                echo "<li><a class='nav-link scrollto' href='../Controller/logout.php'>Sair</a></li>";
              }else {
                echo "<li><a class='nav-link scrollto' href='cadastro.php'>Cadastre-se</a></li>
                <li><a class='nav-link scrollto' href='./login.php'>Login</a></li>";
              }
           ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Bem-vindos a Clínica São Luiz</h1>
      <h2>A sua saúde em primeiro lugar.</h2>
      <a href="#about" class="btn-get-started scrollto">Saiba Mais</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container"></div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Sobre</h3>
            <p>Somos uma instituição criada em 2020 com um propósito de ajudar pessoas a recuperar sua saúde e bem estar. Somos movidos por nosso sentimento de fraternidade e respeito ao próximo. Realizamos tanto atendimentos particulares quanto via Sistema Único de Saúde (SUS). Todo o recurso financeiro obtido é investido no atendimento, para que a maior quantidade de pessoas possa se beneficiar de nossos tratamentos de alto nível.</p>
            <p>A nossa missão é promover o bem-estar e qualidade de vida do ser humano, procurando assegurar-lhe uma vivência mais saudável e plena, bem como dedicar-se à busca do conhecimento científico e espiritual, aplicando-o em benefício dos seus assistidos.</p>
            <!-- <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Identidade própria</a></h4>
              <p class="description">Fomos criados com o intuito de ajudar a melhorar a qualidade de vida dos brasileiros.  Desenvolvemos a nossa propria filosifa de trabalho que agrada à todos.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Paciente Fiel</a></h4>
              <p class="description"></p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Tecnlogia</a></h4>
              <p class="description">Criamos a nossa propria tecnologia e exportamos nosso conhecimentos à todos.</p>
            </div> -->

            <!-- SALVAR ICONES SE CASO PRECISAR -->

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departamentos</h2>
          <p>Aqui estão todos os os atendimentos fornecidos pela Clínica São Luiz:</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Odontologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Ortopedia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nutricionista</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Otorrinolaringologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Dermatologia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Gerontologia</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiologia</h3>
                    <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                    <p>A cardiologia em si é definida como um ramo da medicina responsável por estudar, cuidar e tratar o coração e os vasos sanguíneos. Ou seja, é uma das especialidades da medicina que cuida do coração e do sistema circulatório.
                      A cardiologia é principalmente dividida em duas grandes áreas, assim como toda a medicina: a preventiva e a curativa. Clique <a href="https://clinicadacidade.com.br/o-que-e-cardiologia/">aqui</a>  para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Odontologia</h3>
                    <!-- <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p> -->
                    <p>O profissional formado em Odontologia é responsável pela saúde bucal das pessoas. Ele atua na prevenção, diagnóstico e tratamento de problemas relacionados à mordida, gengiva e dentes.

                      O dentista realiza tratamentos estéticos e também intervenções relacionada à saúde bucal. Ele está apto a identificar doenças através de exames clínicos, radiográficos e laboratoriais e, a partir do diagnóstico, propor o tratamento mais adequado e receitar medicamentos. Clique<a href="https://www.guiadacarreira.com.br/guia-das-profissoes/odontologia/#:~:text=direito%20nessa%20profissão!-,A%20carreira%20em%20Odontologia,intervenções%20relacionada%20à%20saúde%20bucal."> aqui</a>  para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ortopedia</h3>
                    <!-- <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p> -->
                    <p>A ortopedia ou traumato-ortopedia é a especialidade médica encarregada de tratar lesões, traumas e algumas deformidades que refletem no aparelho locomotor de um indivíduo, como tendões, ossos, ligamentos e articulações. Esta área também está relacionada à traumatologia, que trata contusões causadas por pancadas, como as fraturas ósseas. Clique <a href="https://www.rededorsaoluiz.com.br/especialidades/ortopedia">aqui</a> para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Nutricionista</h3>
                    <!-- <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p> -->
                    <p>De forma resumida, o nutricionista elabora planos alimentares para indivíduos ou grupos de indivíduos a partir de um diagnóstico nutricional. Clique <a href="https://www.guiadacarreira.com.br/carreira/o-que-faz-um-nutricionista/">aqui</a> para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Otorrinolaringologia</h3>
                    <!-- <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> -->
                    <p>A otorrinolaringologia é a especialidade médica responsável pelos cuidados dedicados ao nariz, ouvidos, seios da face e garganta de um indivíduo.
                      Como as três áreas são relativamente próximas uma das outras e interligadas por dutos e canais, é possível que certas condições médicas afetem uma ou mais cavidades e é de responsabilidade do médico com esse tipo de especialização realizar avaliações, diagnósticos e tratamentos para devolver ou aprimorar a qualidade de vida de um paciente. Clique <a href="https://www.rededorsaoluiz.com.br/especialidades/otorrinolaringologia">aqui</a> para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Dermatologista</h3>
                    <!-- <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> -->
                    <p>A Dermatologia é uma especialidade médica cuja área de conhecimento se concentra no diagnóstico, prevenção e tratamento de doenças e afecções relacionadas à pele, pelos, mucosas, cabelo e unhas.
                      É também especialidade indicada para atuação em procedimentos médicos estéticos, cirúrgicos, oncológicos. Clique <a href="https://www.sbd.org.br/dermatologia/sobre-a-dermatologia/o-que-e-dermatologia/">aqui </a>para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Gerontologia</h3>
                    <!-- <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p> -->
                    <p>A palavra Gerontologia deriva da língua grega e significa estudo do envelhecimento. O aluno do curso de Gerontologia estuda as mudanças ocorridas no processo de envelhecimento do ser humano e procura adaptar essas mudanças para que o idoso tenha uma vida mais tranquila nos aspectos físicos, psicológicos e biológicos. Clique <a href="">aqui</a> para saber mais.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Funcionários</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Walter Rodrigues</h4>
                <span>Odontoligista</span>
                <p>Especialiazado em Odontologia pela USP.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sara Fernandes</h4>
                <span>Nutrocionista</span>
                <p>Formada e Especialiazada em nutrição pela UFMG</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William da Silva</h4>
                <span>Cardiologista</span>
                <p>Pós doutorado em cardiologia pela UNIESE.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-8.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Davi Castro</h4>
                <span>Ortopedista</span>
                <p>Espelista em Ortopedia pela UNICAMP.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-5.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Maria Pereira</h4>
                <span>Otorrinolaringologista</span>
                <p>Especialiazada em Otorrinolaringologia pela UFRS.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-6.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Gabriel Oliveira</h4>
                <span>Dermatologista</span>
                <p>Pós-graduado em demartologia pela UNICAMP.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-7.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Luiz Gustavo de Souza</h4>
                <span>Ortopedista</span>
                <p>Doutourado em ortepedia pela USP.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Alves</h4>
                <span>Secretária</span>
                <p>Resposável pela administração dos agendamentos</p>
              </div>
            </div>
          </div>

        </div> 

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Perguntas Frequentes</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Como faço para agendar uma consulta?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Cadastre-se no nosso sistema e acesse a pagina de agendamento dentro do site.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">É seguro realizar o agendamento pela internet?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Com certeza! Por segurança, após o agendamento iremos entrar em contanto para a confirmação.
                </p>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section =======
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Depoimentos</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>End testimonial item

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Testimonials Section -->

    <!-- POSSO COLOCAR DNV SE QUISER -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Fotos</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="galelry-lightbox">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
        </div>
      </div>

      <div class="container">
        <div class="row mt-5">

        <div class="col-sm-4"></div>  
        
        <div class="col-lg-8">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização:</h4>
                <p>Rua Rui Barbosa, Itapira - São Paulo</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>contato@clinicasaoluiz.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone:</h4>
                <p>+55 (19) 99526-9560</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>Clínica São Luiz</h3>
            <p>
              Rua Rui Barbosa<br>
              Itapira, SP<br>
              Brasil <br><br>
              <strong>Celular:</strong> +55 (19) 99526-9560<br>
              <strong>Email:</strong> contato@clinicasaoluiz.com<br>
            </p>
          </div>

          <div class="col-lg-6 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li> -->
              <li><i class="bx bx-chevron-right"></i> <a href="#departments">Departamento</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contato</a></li>
            </ul>
          </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
</body>
</html>