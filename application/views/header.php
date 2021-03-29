<!doctype html>
<html lang="en">
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
* {
  font-family: 'Lato', sans-serif;
}
.botaoseta {
  border-radius: 0px 10px 10px 10px;
}
.btn-danger {
  background-color: #DE4545;
}
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
  .bg-success {
        background-color: #81B155!important;
      }
  .mt-footer {
      margin-top: 6rem;
  }
  p, h5 {
    color: #6A6A6A;
  }
</style>

    <title>NutrIF</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
     <div class="container">
      <a class="navbar-brand" href="#">
      <img style="height:2rem;" src="<?= base_url()?>/assets/logo.png" alt="">    
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <form class="d-flex">
        <a  href="" class="btn btn-outline-success me-3"><b>Cadastro</b></a> 
        <a  href="" class="btn btn-success px-4"><b>Login</b></a>
      </form>
    </div>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>