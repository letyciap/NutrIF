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
  border-radius: 0px 10px 10px 18px;
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
  .border-2 {
    border-color: #6A6A6A;
  }
  html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #fafafa;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.form-control:focus {
          border-color: #81B155;
          box-shadow: 0 0 0 .25rem rgba(129, 177, 85,.25);
      }
.text-gray {
    color: #6A6A6A;
  }
.text-gray:hover {
    color: #121212;
  }
</style>

    <title>NutrIF</title>
  </head>
  <body class="text-center">

  <main class="form-signin">
    <form>
        <img class="mb-3" style="height:4rem;" src="<?= base_url()?>/assets/logo.png" alt="">
         

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Matrícula</label>
        </div>
        
        <div class="form-floating">
             <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
             <label for="floatingPassword">Senha</label>
        </div>

        <button  class="mb-3 w-100 btn btn-lg btn-success" type="submit">Entrar</button>
        <a class= "text-gray" href="<?=base_url();?>aluno/cadastro" class="mt-5 mb-3">Não tenho cadastro</a>
     </form>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
  </body>
</html>