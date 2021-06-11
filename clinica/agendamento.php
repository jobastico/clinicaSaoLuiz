<?php  
    // include_once ('');
    // require_once('');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agendamento - Clinica São Luiz</title>
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

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Clinica São Luiz</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Funcionários</a></li>  
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a class="nav-link scrollto" href="agendamento.php">Agendamento</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Agendamento</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="container">
    <form method="GET" action="." class="row g-3">

      <div class="col-md-6">
        <label for="nome" class="form-label">Nome Completo:</label>
        <input type="text" name="nome" class="form-control" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" name="cpf" class="form-control" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <label for="senha" class="form-label">Senha:</label>
        <input type="password" name="senha" class="form-control" id="inputEmail4">
      </div>
      
      <div class="col-md-6">
        <label for="telefone" class="form-label">Telefone/Celular:</label>
        <input type="number" name="telefone" class="form-control" id="inputEmail4">
      </div>
      
      <div class="col-md-6">
        <label for="rg" class="form-label">RG:</label>
        <input type="text" name="rg" class="form-control" id="inputEmail4">
      </div>

      <div class="col-md-6">
        <label for="dataNascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" name="dataNascimento" class="form-control" id="inputPassword4">
      </div>

      <div class="col-md-6">
        <label for="cep" class="form-label">CEP:</label>
        <input type="number" name="cep" class="form-control" id="cep" name="cep" value="" maxlength="9" onblur="pesquisacep(this.value);">
      </div>

      <div class="col-6">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="rua" name="rua">
      </div>

      <div class="col-6">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="bairro" name="bairro">
      </div>

      <div class="col-md-6">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="cidade" name="cidade">
      </div>

      <div class="col-md-6">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" name="estado" class="form-control" id="uf" name="uf">
      </div>

      <div class="col-12">
        <button type="submit" name="action" class="btn btn-primary">Cadastrar</button>
        <p class="pCadastro">Já tem uma conta? Clique <a href="login.html">aqui</a> para fazer o Login.</p>
      </div>
    </form>
  </div>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-6 col-md-6 footer-contact">
              <h3>Clinica São Luiz</h3>
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