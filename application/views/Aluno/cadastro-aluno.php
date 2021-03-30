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
  .sair-hover:hover {
    color: #B02A37!important;
  }
  .item-menu {
    color: #6A6A6A!important;
  }
  .item-menu:hover {
    color: #121212!important;
  }
  .dia,.mes,.ano {
            width:4em; 
            height: 35px;   
        }
        .mes,.ano{
            margin-left: 1em;
           
        }
        
        .col-md-4{
            margin-left: 8em;
        }
    
        .nomecomp, .altura-qs,.campus-sl, .genero-tl, .etnia-ts,.matricu,.peso-qs, .vezes-quinl,.dietas-quinl,.corpo-sl,.ultimo-mes{
          width:20em; 
        }
        .campus-sl{
          height: 35px;
        }
        .matricu, .peso-qs{
            margin-left: 4em; 
        }
        .dietas-quinl,.ultimo-mes{
          margin-left: 8em; 
        }
        .col-md-7{
            margin-left: 10em;
        }
        .menu{
            display: inline;
        }
        ul{
            list-style-type: none;
            margin-left: 50em;
        }
        li{
            display:inline;
        }
        .etnia-ts{
          margin-left: 8em;
        }
        .seg-coluna{
          margin-left: 30px;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d-flex justify-content-end navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="font-size: 1.1rem">
            <li class="nav-item mx-2"> 
          <a class="nav-link item-menu" href="#"><b>Avaliação</b></a>
            </li>
            <li class="nav-item mx-2">
          <a class="nav-link item-menu" href="#"><b>Cadastro</b></a>
            </li>
            <li class="nav-item mx-2">
          <a class="nav-link item-menu" href="#"><b>Estatísticas</b></a>
            </li>
            <li class="nav-item mx-2">
          <a class="nav-link text-danger sair-hover" href="#"><b>Sair</b></a>
            </li>
        </ul>
            </div>
        </div>
    </nav>
    <div class="container">
      <div class="py-5 text-center">
      <h2>Cadastro</h2>
      </div>

       <div class="col-md-7 col-lg-8">  
        
        <form class="needs-validation" novalidate>
            <div class="row g-3">
           
              <div class="col-sm-6">
              
                <div class="nomecomp">
                <label for="nomecom" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Inválido.
                </div>
              </div>
              
              </div>
  
              <div class="col-sm-6">
                    <div class="matricu">
                    <label for="matri" class="form-label">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Inválido.
                    </div>
                    </div> 
              </div>

              <div class="col-md-5">
                <label for="camp" class="form-label">Campus</label>
              <div>
                <select class="campus-sl" id="country" required>
                <option value=""></option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Apodi </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Caicó </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Canguaretama </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Ceará-mirim </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Currais Novos </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Ipanguaçu </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus João Câmara </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Jucurutu </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Lajes </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Macau </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Mossoró </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Natal-Central </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Natal-Cidade Alta </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Natal-Zona Leste </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Natal-Zona Norte </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Parelhas </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Pau dos Ferros </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Santa Cruz </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus São Gonsalo do Amarante </option>
                <option>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus São Paulo do Potengi </option>

              </select>
              <div class="invalid-feedback">
               Inválido.
              </div>
              </div>
             
            </div>

              <div class="col-md-4">
              <label for="state" class="form-label">Data de nascimento</label>
                <div class="data">
                        <select class="dia" id="state" required>
                        <option value=""></option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                          </select>
                          <span class="field-validation-valid day-validation" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>
                        <select class="mes" id="state" required>
                            <option value=""></option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>12</option>
                        </select>
                        <span class="field-validation-valid month-validation" data-valmsg-for="DataNascimentoAno" data-valmsg-replace="true"></span> 
                        <select class="ano" id="state" required>
                            <option value=""></option>
                            <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                          </select>
                    
                            <div class="invalid-feedback">
                           Inválido.
                            </div>         
                </div>
              </div>
           </div>
          
      
           
            <div class="row g-3"> 
             <div class="col-md-5">
                <div class="genero-tl">
                <label for="gen" class="form-label">Gênero</label>
                <select class="form-select" id="generoo" required>
                  <option value=""></option>
                  <option>Homem cisgênero </option>
                  <option>Mulher cisgênero  </option>
                  <option>Homem transgênero </option>
                  <option>Mulher transgênero </option>
                  <option>Travesti </option>
                  <option>Outro </option>
                  <option>Prefiro não responder </option>
  
                </select>
  
                <div class="invalid-feedback">
                 Inválido.
                </div>
                </div>
              

            </div>


            <div class="col-md-5">
                <div class="etnia-ts">
                <label for="country" class="form-label">Etnia</label>
                <select class="form-select" id="country" required>
                  <option value=""></option>
                  <option>Amarelo</option>
                  <option>Branco </option>
                  <option>Indígena </option>
                  <option>Pardo</option>
                  <option>Preto </option>

                </select>
                <div class="invalid-feedback">
                 Inválido.
                </div>
               </div>
            
            </div>
            
           </div>
           
           <div class="row g-3">
             <div class="col-sm-6">
                <div class="altura-qs">
                <label for="alt" class="form-label">Altura(m)</label>
                <input type="text" class="form-control" id="alturaa" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Inválido.
                </div>
                </div>
              
            </div>
  
              <div class="col-sm-6">
                  <div class="peso-qs">
                    <label for="ps" class="form-label">Peso (Km)</label>
                    <input type="text" class="form-control" id="pesoo" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Inválido.
                    </div>
                  </div>
                
              </div>

          </div>

          <div class="row g-3"> 
            <div class="col-md-5">
                <div class="vezes-quinl">
                <label for="vezesemana" class="form-label">Quantas vezes na semana costuma consumir os lanches oferecidos na escola?</label>
                <select class="form-select" id="vezes-na-semana" required>
                  <option value=""></option>
                  <option>Não consumo </option>
                  <option>Raramente </option>
                  <option>1-2 dias</option>
                  <option>3-4 dias</option>
                  <option>Todos os dias</option>
                </select>
  
                <div class="invalid-feedback">
                 Inválido.
                </div>
                </div>

            </div>


            <div class="col-md-5">
                <div class="dietas-quinl">
                <label for="di" class="form-label">Dietas</label>
                <select class="form-select" id="d-i-e-t-a-s" required>
                  <option value=""></option>
                  <option>Tradicional</option>
                  <option>Vegetariano</option>
                  <option>Vegano</option>
                  
                </select>
                <div class="invalid-feedback">
                 Inválido.
                </div>
                </div>
            </div>
           </div>


           <div class="row g-3"> 
            <div class="col-md-5">
                <div class="corpo-sl">
                <label for="cp" class="form-label">Como você se sente em relação ao seu corpo?</label>
                <select class="form-select" id="c-o-r-p-o" required>
                  <option value=""></option>
                  <option>Muito satisfeito(a)</option>
                  <option>Satisfeito(a)</option>
                  <option>Insatisfeito(a)</option>
                  <option>Muito insatisfeito(a)</option>
                  <option>Indiferente</option>
                  
                </select>
                <div class="invalid-feedback">
                 Inválido.
                </div>
                </div>
            </div>

            <div class="col-md-5">
              <div class="ultimo-mes">
                <label for="ult" class="form-label">No último mês, com que frequência você ficou com fome por não ter comida suficiente em casa?</label>
              <select class="form-select" id="ult-imo-mes" required>
                <option value=""></option>
                <option>Nunca </option>
                <option>Raramente</option>
                <option>Muitas vezes</option>
                <option>Sempre</option>
              </select>

              <div class="invalid-feedback">
               Inválido.
              </div>
              </div>

          </div>

           </div>


          <div class="aler-into">
           <div class="pri-coluna">
            <label for="ultimomes" class="form-label">Alergias e intolerâncias alimentares</label>
            <div class="não-alergia">
              <input type="checkbox" class="form-check-input" id="não-ale">
              <label class="form-check-label" for="não-ale">Não tenho alergias</label>
            </div>
            <div class="um">
              <input type="checkbox" class="form-check-input" id="ale-ovo">
              <label class="form-check-label" for="ale-ovo">Alergia ao ovo</label>
            </div>
  
            <div class="dois">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia ao amendoim</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia às castanhas</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia à soja</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia ao latex</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Hipertenção arterial (Pressão alta)</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Dislipidemias (alterações nas gosrduras do sangue)</label>
            </div>

           </div>

           <div class="col-md-4 seg-coluna">
            <div class="não-alergia">
              <input type="checkbox" class="form-check-input" id="não-ale">
              <label class="form-check-label" for="não-ale">Não tenho alergias</label>
            </div>
            <div class="um">
              <input type="checkbox" class="form-check-input" id="ale-ovo">
              <label class="form-check-label" for="ale-ovo">Alergia ao ovo</label>
            </div>
  
            <div class="dois">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia ao amendoim</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia às castanhas</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia à soja</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Alergia ao latex</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Hipertenção arterial (Pressão alta)</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Dislipidemias (alterações nas gosrduras do sangue)</label>
            </div>

           </div>

          </div>
          
          </form>
      </div>

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