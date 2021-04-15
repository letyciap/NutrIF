<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
 
    <!-- Fonte Lato -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <style>

      * {font-family: 'Lato', sans-serif}

      .botaoseta {border-radius: 0px 10px 10px 18px}

      .btn-danger {background-color: #DE4545}

      .text-danger {
        color: #DE4545!important;
        font-weight: bold;
      }

      .btn-success {
        background-color: #77C043;
        border-color: #77C043;
        border-radius: 5px;
      }

      .btn-outline-success {
        border-color: #77C043;
        color: #77C043!important;
        border-radius: 5px;
      }

      .bg-success {background-color: #81B155!important}

      .mt-footer {margin-top: 6rem}

      p, h5 {color: #6A6A6A}
        
      .border-2 {border-color: #6A6A6A}

    </style>

  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">

        <a class="navbar-brand" href="#">
        <img style="height:2rem;" src="<?= base_url()?>/assets/logo.png">
        </a>
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse " id="navbarsExample07">
          <form class="d-flex justify-content-center ms-auto my-lg-0 my-sm-3"> 
            <a  href="<?= base_url()?>login" class="btn btn-success px-4"><b>Login</b></a>
          </form>
        </div>
      </div>
    </nav>

<div class='container text-center  mt-5'>
  <h2 class="text-danger mb-3"><b>Cadastro do Usuário Realizado!</b></h2>
  <p class= "mb-5" style="font-size:20px;" >Seus dados foram salvos com sucesso em nosso sistema!</p> 
  <div class= "col-10 col-lg-4 mx-auto">
    <img class= "mb-5 img-fluid" style="height:25rem;" src="<?= base_url()?>/assets/cadastro.png" alt="">
  </div>
</div>
<div style="text-align: center;" class="text-center">
<a  href="<?= base_url()?>" class="btn btn-outline-success me-3"><b> Página Inicial</b></a> 
<a  href="<?= base_url()?>avaliacao/estatisticas" class="btn btn-outline-success me-3"><b>Estatísticas</b></a> 
</div>