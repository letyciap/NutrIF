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

        <a class="navbar-brand" href="<?= base_url()?>admin">
          <img style="height:2rem;" src="<?= base_url()?>/assets/logo-admin.png">
        </a>
        
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample07" style="">
          <ul class="navbar-nav ms-lg-auto text-center mb-2 mb-lg-0" style="font-size: 1.1rem">
            <!-- <li class="nav-item mx-lg-2">
              <a class="nav-link item-menu" href="<?= base_url()?>usuario/cadastro/editar"><b>Meus Dados</b></a>
            </li> -->
            <!-- <li class="nav-item mx-lg-2">
            <a class="nav-link item-menu" href="<?= base_url()?>usuario/avaliacao"><b>Avaliar</b></a>
            </li> -->

            <li class="nav-item mx-lg-2">
              <a class="nav-link item-menu fw-bold" href="<?= base_url()?>admin/estatisticas">Estatísticas</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tabelas
              </a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?=base_url()?>admin/alergias/listar">Alergias</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>admin/campus/listar">Campus</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>admin/usuarios/listar">Usuarios</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>admin/avaliacoes/listar">Avaliação</a></li>
              </ul>
            </li>
            <li class="nav-item mx-lg-2">
              <a class="nav-link text-danger sair-hover" href="<?= base_url()?>usuario/sair"><b>Sair</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>