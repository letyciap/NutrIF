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

      label{color:#737373}
  
      i{color: #DE4545}

      .outra-linha{
        height:20px;
        width: 18em;
        outline:none;
        border: 0px;
        border-radius:0px;
        border-top-left-radius:3px;
        border-top-right-radius:3px;
        background:linear-gradient(90deg,#737373,#737373) left bottom/100% 1px no-repeat;
      }

    </style>

  </head>

  <body>
    
    <main class="conteudo"> 
      <div class="container">
        <div class='container text-center  mt-5'>
          <h2 class="text-danger mb-3"><b>Cadastro do Usuário</b></h2>
        </div>
        
        <div class="cadastro">

          <form method="POST" action="<?= base_url()?>aluno/cadastro/salvar" class="container row d-flex justify-content-center needs-validation">
              
            <div class="row gx-lg-5 gy-lg-5 gy-3">

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Nome completo <i>*</i></label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Matrícula  <i>*</i></label>
                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="" value="" required>
                <div class="invalid-feedback">Inválido.</div>
              </div> 

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Senha <i>*</i></label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="" value="" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Campus <i>*</i></label>
                <select class="form-select form-control"  id="codcampus" name="codcampus" required>
                  <option selected></option>
                  <?php foreach ($campus as $campus):?>
                    <option value="<?= $campus->codcampus; ?>">IFRN - Campus <?= $campus->campus; ?></option>
                  <?php endforeach;?>
                  
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Data de nascimento <i>*</i></label>
                <input type="date" id="datanascimento" name="datanascimento" class="form-control" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              
              <div class="col-lg-6 col-12 ">
                <label for="gen" class="form-label">Gênero <i>*</i></label>
                <select class="form-select form-control" id="codgenero" name="codgenero" required>
                  <option selected></option>
                  <?php foreach ($generos as $genero): ?>
                    <option value="<?= $genero->codgenero; ?>"><?= $genero->genero; ?></option>
                  <?php endforeach;?>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div> 

              <div class="col-lg-6 col-12 ">
                <label class="form-label">Etnia <i>*</i></label>
                <select class="form-select form-control" id="codeetnia" name="codeetnia" required>
                  <option selected></option>
                  <?php foreach ($etnias as $etnia): ?>
                    <option value="<?= $etnia->codetnia; ?>"> <?= $etnia->etnia; ?> </option>
                  <?php endforeach;?>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="col-lg-6 col-12 d-flex ">

                <div class="col-5 ">
                  <label for="alt" class="form-label">Altura (m)  <i>*</i></label>
                    <input type="number" class="form-control" step="0.01" id="altura" name="altura" required>          
                  <div class="invalid-feedback">Inválido.</div>
                </div> 

                <div class="col-2"></div>

                <div class="col-5 ">
                  <label class="form-label">Peso (Kg) <i>*</i></label>
                  <input type="number" class="form-control" step="0.01" id="peso" name="peso" required>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

              </div>

              <div class="col-lg-6 col-12 ">
                <label class="form-label"> Quantas vezes na semana costuma consumir os lanches oferecidos no campus? <i>*</i></label>
                <select class="form-select" id="codfreqconsumocampus" name="codfreqconsumocampus" required>
                  <option value=""></option>
                  <?php
                    $c_freqconsumocampus = 0;
                    foreach ($freqconsumocampus as $freqconsumocampus) { 
                  ?>
                  <option value="<?= $freqconsumocampus->codfreqconsumocampus; ?>"><?= $freqconsumocampus->freqconsumocampus; ?></option>
                  <?php
                      $c_freqconsumocampus++;
                    }
                  ?>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div>  

              <div class="col-lg-6 col-12 ">
                <label for="ultimo" class="form-label">No último mês, com que frequência você ficou com fome por não ter comida suficiente em casa? <i>*</i></label>
                <select class="form-select" id="codfrequenciafome" name="codfrequenciafome" required>
                  <option value=""></option>
                  <?php
                    $c_frequenciafome = 0;
                    foreach ($frequenciafome as $frequenciafome) { 
                  ?>
                  <option value="<?= $frequenciafome->codfrequenciafome; ?>"><?= $frequenciafome->frequenciafome; ?></option>
                  <?php
                      $c_frequenciafome++;
                    }
                  ?>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div> 

              <div class="col-lg-4 col-12">
                <label class="form-label">Qual é o tipo de dieta alimentar que você segue? <i>*</i></label>
                <select class="form-select" id="coddieta" name="coddieta" required>
                  <option value=""></option>

                  <?php foreach ($dietas as $dieta): ?>
                    <option value="<?= $dieta->coddieta; ?>"><?= $dieta->dieta; ?></option>
                  <?php endforeach; ?>

                  </select>
                <div class="invalid-feedback">Inválido.</div>
              </div> 
                
              <div class="col-lg-4 col-12">
                <label for="sentircorpo" class="form-label">Como você se sente em relação ao seu corpo? <i>*</i></label>
                <select class="form-select" id="codsatisfacaocorpo" name="codsatisfacaocorpo" required>
                  <option value=""></option>
                  <?php foreach ($satisfacaocorpo as $satisfacaocorpo): ?>
                    <option value="<?= $satisfacaocorpo->codsatisfacaocorpo; ?>"><?= $satisfacaocorpo->satisfacaocorpo; ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div> 

              <div class="col-lg-4 col-12">
                <label class="form-label">Data que você está respondendo este formulário: <i>*</i></label>
                <input type="date" class="form-control" id="datacadastro" name="datacadastro" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <!-- <div class="col-lg-4 col-12 py-4">
                <label for="refeicao" class="form-label">Quais refeições você costuma realizar no campus? <i>*</i></label>
                <select class="form-select" id="campuss" name="campuss" required>
                  <option value=""></option>
                  <option value="0">Café-da-manhã </option>
                  <option value="1">lanche da manhã </option>
                  <option value="2">Almoço</option>
                  <option value="3">Lanche da tarde</option>
                  <option value="4">Jantar</option>
                  <option value="5">Lanche da noite</option>
                  <option value="62">Nenhuma das anteriores</option>
                </select>
                <div class="invalid-feedback">Inválido.</div>
              </div>  -->

              <div class="col-lg-12">
                <label  class='mb-3'><b>Quais refeições você costuma realizar no campus?</b> <i>*</i></label>  
                
                <div class="mb-2 row">
                  <?php foreach ($tiporefeicao as $tiporefeicao): ?>
                    <div class="mb-2 col-lg-6 col-12">
                      <input type="checkbox" class="form-check-input" id="codtiporefeicao" name="codtiporefeicao" value="<?= $tiporefeicao->codtiporefeicao; ?>">
                      <label class="form-check-label" for="não-ale"><?= $tiporefeicao->tiporefeicao; ?></label>
                    </div>
                  <?php endforeach; ?>
                </div>
                

              </div>



              <div class="col-lg-12">
                <label  class='mb-3'><b>Alergias, intolerâncias e outras condições de saúde</b> <i>*</i></label>  

                <div class="mb-2 row">
                  <?php foreach ($alergias as $alergia): ?>
                    <div class="mb-2 col-lg-6 col-12">
                      <input type="checkbox" class="form-check-input" id="codalergia" name="codalergia" value="<?= $alergia->codalergia; ?>">
                      <label class="form-check-label" for="não-ale"><?= $alergia->alergia; ?></label>
                    </div>
                  <?php endforeach; ?>
                    <div class="mb-2 col-lg-6 col-12">
                      <input type="checkbox" class="form-check-input" id="outra-alergia" name="outra-alergia">
                      <label class="form-check-label" for="ale-outra">Outra:</label>
                      <input type="text" class="outra-linha" id="outraalergia" name="outraalergia">
                      <div class="invalid-feedback">Inválido.</div>
                    </div>

                </div>

                <!-- <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="sem-alergia" name="sem-alergia">
                  <label class="form-check-label" for="não-ale">Não tenho alergias</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="save-info" name="save-info">
                  <label class="form-check-label" for="save-info">Dislipidemias (alterações nas gosrduras do sangue)</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="alergia-ovo" name="alergia-ovo">
                  <label class="form-check-label" for="ale-ovo">Alergia ao ovo</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="alergia-trigo" name="alergia-trigo">
                  <label class="form-check-label" for="ale-trigo">Alergia ao trigo</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="alergia-amendoim" name="alergia-amendoim">
                  <label class="form-check-label" for="ale-amen">Alergia ao amendoim</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2" >
                  <input type="checkbox" class="form-check-input" id="alergia-doenca" name="alergia-doenca">
                  <label class="form-check-label" for="ale-doenca">Doenças celíaca (sensível ao glúten)</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2">
                  <input type="checkbox" class="form-check-input" id="alergia-castanha" name="alergia-castanha">
                  <label class="form-check-label" for="ale-casta">Alergia às castanhas</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div> -->

              </div>

              <!-- <div class="col-lg-4">
                <label class='mb-3'> </label>

                <div class="mb-2 mx-5" >
                  <input type="checkbox" class="form-check-input" id="alergia-diabetes" name="alergia-diabetes">
                  <label class="form-check-label" for="ale-diabet">Diabetes melittus</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5">
                  <input type="checkbox" class="form-check-input" id="alergia-soja" name="alergia-soja">
                  <label class="form-check-label" for="ale-soja">Alergia à soja</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5" >
                  <input type="checkbox" class="form-check-input" id="obesidade" name="obesidade">
                  <label class="form-check-label" for="obesi">Obesidade</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5">
                  <input type="checkbox" class="form-check-input" id="alergia-latex" name="alergia-latex">
                  <label class="form-check-label" for="ale-latex">Alergia ao látex</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5" >
                  <input type="checkbox" class="form-check-input" id="lactose" name="lactose">
                  <label class="form-check-label" for="lact">Intolerância a lactose</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5">
                  <input type="checkbox" class="form-check-input" id="hipertensao" name="hipertensao">
                  <label class="form-check-label" for="hiper">Hipertensão arterial (Pressão alta)</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5" >
                  <input type="checkbox" class="form-check-input" id="alergia-corante" name="alergia-corante">
                  <label class="form-check-label" for="ale-coran">Alergia à corantes e outros aditivos</label>
                  <div class="invalid-feedback">Inválido.</div>
                </div>

                <div class="mb-2 mx-5">
                  <input type="checkbox" class="form-check-input" id="outra-alergia" name="outra-alergia">
                  <label class="form-check-label" for="ale-outra">Outra:</label>
                  <input type="text" class="outra-linha" id="outraalergia" name="outraalergia">
                  <div class="invalid-feedback">Inválido.</div>
                </div>

              </div> -->
  
              <div class="col-12 mt-5 row justify-content-center gx-3">
                <div class="col-lg-2 col-6">
                  <a  href="<?= base_url()?>" class="btn btn-outline-danger py-2 w-100"><b>Cancelar</b></a>
                </div>
                <div class="col-lg-2 col-6">
                  <button type="submit" class="btn btn-success py-2 w-100">Salvar</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->