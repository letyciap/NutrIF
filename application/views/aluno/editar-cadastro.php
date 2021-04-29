<style>
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
    background:
    linear-gradient(90deg,#737373,#737373) left bottom/100% 1px no-repeat;
  }
</style> 

<main class="conteudo"> 
  <div class="container">
    <div class='container text-center  mt-5'>
      <h2 class="text-danger mb-3"><b>Editar meus dados</b></h2>
    </div>
    
    <div class="cadastro">
      <form method="POST" action="<?= base_url()?>usuario/editar" class="container row d-flex justify-content-center needs-validation">  
        <div class="row gx-lg-5 gy-lg-5 gy-3">

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Nome completo <i>*</i></label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="" value="<?= $usuario->usuario?>">
          </div>

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Matrícula  <i>*</i></label>
            <input type="text" class="form-control" id="matricula" name="matricula" placeholder="" value="<?= $usuario->matricula?>">
          </div> 

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Senha <i>*</i></label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="" value="">
          </div>

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Campus <i>*</i></label>
            <select class="form-select form-control"  id="codcampus" name="codcampus" required>
              <option value='<?= $campus[$usuario->codcampus]->codcampus?>'>IFRN - Campus <?= $campus[$usuario->codcampus]->campus;?></option>
              <?php foreach ($campus as $campus):?>
              <option value="<?= $campus->codcampus; ?>">IFRN - Campus <?= $campus->campus; ?></option>
              <?php endforeach;?>
            </select>
          </div>

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Data de nascimento <i>*</i></label>
            <input type="date" id="datanascimento" name="datanascimento" class="form-control" value='<?= $usuario->datanascimento?>'>
          </div>
          
          <div class="col-lg-6 col-12 ">
            <label for="gen" class="form-label">Gênero <i>*</i></label>
            <select class="form-select form-control" id="codgenero" name="codgenero">
              <option value='<?= $usuario->codgenero?>'> <?= $generos[$usuario->codgenero]->genero;?></option>
              <?php foreach ($generos as $genero): ?>
              <option value="<?= $genero->codgenero; ?>"><?= $genero->genero; ?></option>
              <?php endforeach;?>
            </select>
          </div> 

          <div class="col-lg-6 col-12 ">
            <label class="form-label">Etnia <i>*</i></label>
            <select class="form-select form-control" id="codeetnia" name="codeetnia" required>
              <option value="<?= $usuario->codeetnia;?>"><?= $etnias[$usuario->codeetnia]->etnia;?></option>
              <?php foreach ($etnias as $etnia): ?>
              <option value="<?= $etnia->codetnia; ?>"> <?= $etnia->etnia; ?> </option>
              <?php endforeach;?>
            </select>
          </div>

          <div class="col-lg-6 col-12 d-flex ">

            <div class="col-5 ">
              <label for="alt" class="form-label">Altura (m)  <i>*</i></label>
              <input type="text" class="form-control" step="0.01" value='<?= $usuario->altura;?>' id="altura" name="altura" required>          
            </div> 

            <div class="col-2"></div>

            <div class="col-5 ">
              <label class="form-label">Peso (Kg) <i>*</i></label>
              <input type="number" class="form-control" step="0.01" id="peso" name="peso"  value='<?= $usuario->peso;?>' required>
            </div>

          </div>

          <div class="col-lg-6 col-12 ">
            <label class="form-label"> Quantas vezes na semana você costuma consumir os lanches oferecidos no campus? <i>*</i></label>
            <select class="form-select" id="codfreqconsumocampus" name="codfreqconsumocampus" required>
              <option value="<?= $usuario->codfreqconsumocampus;?>"><?= $freqconsumocampus[$usuario->codfreqconsumocampus]->freqconsumocampus;?></option>
              <?php foreach ($freqconsumocampus as $freqconsumocampus):?>
              <option value="<?= $freqconsumocampus->codfreqconsumocampus;?>"><?= $freqconsumocampus->freqconsumocampus; ?></option>
              <?php endforeach;?>
            </select>
          </div>  

          <div class="col-lg-6 col-12 ">
            <label for="ultimo" class="form-label">No último mês, com que frequência você ficou com fome por não ter comida suficiente em casa? <i>*</i></label>
            <select class="form-select" id="codfrequenciafome" name="codfrequenciafome" required>
              <option value="<?= $usuario->codfrequenciafome;?>"><?= $frequenciafome[$usuario->codfrequenciafome]->frequenciafome;?></option>
              <?php foreach ($frequenciafome as $frequenciafome):?>
              <option value="<?= $frequenciafome->codfrequenciafome; ?>"><?= $frequenciafome->frequenciafome; ?></option>
              <?php endforeach;?>
            </select>
          </div> 

          <div class="col-lg-4 col-12">
            <label class="form-label">Qual é o tipo de dieta alimentar que você segue? <i>*</i></label>
            <select class="form-select" id="coddieta" name="coddieta" required>
              <option value="<?= $usuario->coddieta;?>"><?= $dietas[$usuario->coddieta]->dieta;?></option>

              <?php foreach ($dietas as $dieta): ?>
                <option value="<?= $dieta->coddieta; ?>"><?= $dieta->dieta; ?></option>
              <?php endforeach; ?>

              </select>
          </div> 
            
          <div class="col-lg-4 col-12">
            <label for="sentircorpo" class="form-label">Como você se sente em relação ao seu corpo? <i>*</i></label>
            <select class="form-select" id="codsatisfacaocorpo" name="codsatisfacaocorpo" required>
              <option value="<?= $usuario->codsatisfacaocorpo;?>"><?= $satisfacaocorpo[$usuario->codsatisfacaocorpo]->satisfacaocorpo;?></option>
              <?php foreach ($satisfacaocorpo as $satisfacaocorpo): ?>
                <option value="<?= $satisfacaocorpo->codsatisfacaocorpo; ?>"><?= $satisfacaocorpo->satisfacaocorpo; ?></option>
              <?php endforeach; ?>
            </select>
          </div> 

          <div class="col-lg-4 col-12">
            <label class="form-label">Data que você está respondendo este formulário: <i>*</i></label>
            <input type="date" class="form-control" id="datacadastro" name="datacadastro" value='<?= $usuario->datacadastro;?>' required>
          </div>

          <div class="col-lg-12">
            <label  class='mb-3'><b>Quais refeições você costuma realizar no campus?</b> <i>*</i></label>  
            
            <div class="mb-2 row">
              <?php foreach ($tiporefeicao as $tiporefeicao): ?>

                <div class="mb-2 col-lg-6 col-12">
                  <input type="checkbox" class="form-check-input" id="codtiporefeicao<?= $tiporefeicao->codtiporefeicao;?>" name="codtiporefeicao<?= $tiporefeicao->codtiporefeicao;?>" value="<?= $tiporefeicao->codtiporefeicao;?>">
                  <label class="form-check-label" for="não-ale"><?= $tiporefeicao->tiporefeicao; ?></label>
                </div>

                <?php foreach ($tiporefeicaousuario as $t):?>
                <script>
                  var tiporefeicao = document.getElementById("codtiporefeicao<?= $tiporefeicao->codtiporefeicao;?>").value;
                  var tiporefeicaocheck = <?= $t->codtiporefeicao;?>;

                  if(tiporefeicao == tiporefeicaocheck) {
                    document.getElementById("codtiporefeicao<?= $tiporefeicao->codtiporefeicao;?>").checked = true;
                  }
                </script>
                <?php endforeach;?>

              <?php endforeach;?>
            </div>
          </div>

          <div class="col-lg-12">
            <label  class='mb-3'><b>Alergias, intolerâncias e outras condições de saúde</b> <i>*</i></label>  

            <div class="mb-2 row">
              <?php foreach ($alergias as $alergia): ?>

                <div class="mb-2 col-lg-6 col-12">
                  <input type="checkbox" class="form-check-input" id="codalergia<?= $alergia->codalergia;?>" name="codalergia<?= $alergia->codalergia;?>" value="<?= $alergia->codalergia;?>">
                  <label class="form-check-label" for="não-ale"><?= $alergia->alergia; ?></label>
                </div>

                <?php foreach ($alergiasusuario as $alergiausuario):?>
                  <script>
                    var alergia = document.getElementById("codalergia<?= $alergia->codalergia;?>").value;
                    var alergiacheck = <?= $alergiausuario->codalergia;?>;

                    if(alergia == alergiacheck) {
                      document.getElementById("codalergia<?= $alergia->codalergia;?>").checked = true;
                    }
                  </script>
                <?php endforeach;?>

              <?php endforeach;?>
                <div class="mb-2 col-lg-6 col-12">
                  <input type="checkbox" class="form-check-input" id="outra-alergia" name="outra-alergia">
                  <label class="form-check-label" for="ale-outra">Outra:</label>
                  <input type="text" class="outra-linha" id="outraalergia" name="outraalergia">
                </div>

            </div>
          </div>

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