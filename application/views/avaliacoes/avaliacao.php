<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>

  .estrelas input{display: none}

  .estrelas label i.fa{font-size: 2.5em}
  
  .estrelas label i.fa:before {
    content:'\f005';
    position:relative;
    display:block;
    color: #FC0; 
    font-size:30px
  }

  .estrelas label i.fa:after{
    content:'\f005';
    color: #FC0;
    top:0;
    opacity:0;
    position:absolute;
    display:block;
    font-size:30px;
    transition:0.5s;
    text-shadow:0 2px 5px rgba(0,0,0,0.5)
  }

  .estrelas label i.fa:hover:after,
  .estrelas label i.fa:hover ~ label:after,
  .estrelas label i.fa:checked ~ label:after{opacity:1}

  .estrelas input[type=radio]:checked ~ label i.fa:before {color: #CCC}

  i{color: #DE4545}

  .nav-item .active {
    border-bottom: 3px solid;
    background-color: #FFFFFF!important;
    color: #6A6A6A!important;
    border-color: #6A6A6A!important
  }

  .text-secondary {color: #6A6A6A!important}

  .rating>label::before {
      content: "\2605";
      position: absolute;
      opacity: 0
  }

  .rating>label:hover:before,
  .rating>label:hover~label:before {opacity: 1 !important}

  .rating>input:checked~label:before {opacity: 1}
  
  .rating:hover>input:checked~label:before {opacity: 0.4}

</style>

<div class="container d-flex justify-content-center">

  <div class="col-10">

    <div class='container text-center my-5'>
      <h2 class="text-danger"><b>Avaliações</b></h2>
    </div>

    <div class="container">
      <form class="container row d-flex justify-content-center" action='<?=base_url();?>avaliacao/salvar/' method='post'>

        <div class="col-12 text-center">
          <label for="gen" class="form-label">Escolha a refeição que deseja avaliar:</label>
          <div class="col-3 mb-4 mx-auto">
            <select class="form-select form-control" id="codtiporefeicao" name="codtiporefeicao" required>
              <option selected></option>
              <?php
                foreach ($tiporefeicao as $tiporefeicao): 
              ?>
              <option value="<?= $tiporefeicao->codtiporefeicao; ?>"><?= $tiporefeicao->codtiporefeicao; ?> - <?= $tiporefeicao->tiporefeicao; ?></option>
              <?php
                endforeach;
              ?>
            </select>
          </div>
          <div class="invalid-feedback">Inválido.</div>
        </div> 

        <!-- inputs invisiveis apenas para passar dados via post -->
        <input type="text" readonly class='d-none' value='20181041110014' name='matricula'>

        <div class="col-lg-6 col-12 mb-5">

          <div class="col me-lg-auto text-center my-3 row">
            <label class="col-lg-6 col-form-label">Alimento</label>
            <div class="col-lg-6 estrelas">
              <input type="radio" id="avaliacao-alimento" name="alimento" value="" checked/>
              <label for="alimento_star-1"><i class="fa"></i></label>
              <input type="radio" id="alimento_star-1" name="alimento" value="1"/>
              <label for="alimento_star-2"><i class="fa"></i></label>
              <input type="radio" id="alimento_star-2" name="alimento" value="2"/>
              <label for="alimento_star-3"><i class="fa"></i></label>
              <input type="radio" id="alimento_star-3" name="alimento" value="3"/>
              <label for="alimento_star-4"><i class="fa"></i></label>
              <input type="radio" id="alimento_star-4" name="alimento" value="4"/>
              <label for="alimento_star-5"><i class="fa"></i></label>
              <input type="radio" id="alimento_star-5" name="alimento" value="5"/>
            </div>
          </div>

          <div class="col me-lg-auto text-center my-3 row">
            <label class="col-lg-6 col-form-label">Bebida</label>
            <div class="col-lg-6 estrelas">
              <input type="radio" id="avaliacao-bebida" name="bebida" value="" checked/>
              <label for="bebida-1"><i class="fa"></i></label>
              <input type="radio" id="bebida-1" name="bebida" value="1"/>
              <label for="bebida-2"><i class="fa"></i></label>
              <input type="radio" id="bebida-2" name="bebida" value="2"/>
              <label for="bebida-3"><i class="fa"></i></label>
              <input type="radio" id="bebida-3" name="bebida" value="3"/>
              <label for="bebida-4"><i class="fa"></i></label>
              <input type="radio" id="bebida-4" name="bebida" value="4"/>
              <label for="bebida-5"><i class="fa"></i></label>
              <input type="radio" id="bebida-5" name="bebida" value="5"/>
            </div>
          </div>

          <div class="col me-lg-auto text-center my-3 row">
            <label class="col-lg-6 col-form-label">Atendimento</label>
            <div class="col-lg-6 estrelas">
              <input type="radio" id="avaliacao-atendimento" name="atendimento" value="" checked/>
              <label><i class="fa"></i></label>
              <input type="radio" id="atendimento_star-1" name="atendimento" value="1"/>
              <label for="atendimento_star-2"><i class="fa"></i></label>
              <input type="radio" id="atendimento_star-2" name="atendimento" value="2"/>
              <label for="atendimento_star-3"><i class="fa"></i></label>
              <input type="radio" id="atendimento_star-3" name="atendimento" value="3"/>
              <label for="atendimento_star-4"><i class="fa"></i></label>
              <input type="radio" id="atendimento_star-4" name="atendimento" value="4"/>
              <label for="atendimento_star-5"><i class="fa"></i></label>
              <input type="radio" id="atendimento_star-5" name="atendimento" value="5"/>
            </div>
          </div>

        </div>

        <div class="col-lg-6 col-12">

          <div class="col my-3 row">
            <label class="col form-label">Data da refeição</label>
            <div class="col">
              <input type="date" class="form-control" name='datarefeicao'>
            </div>
          </div>

          <div class="col my-3">
            <label class="col form-label">Comentário</label>
            <div class="col">
              <textarea class="form-control" name="comentario" rows="2"></textarea>
            </div>
          </div>

        </div>

        <div class="col-lg-12 col-12 mt-3 row justify-content-center gx-3">
          <div class="col-lg-2 col-6">
            <a  href="<?= base_url()?>aluno" class="btn btn-outline-danger py-2 w-100"><b>Cancelar</b></a>
          </div>
          <div class="col-lg-2 col-6">
            <button type="submit" class="btn btn-success py-2 w-100">Salvar</button>
          </div>
        </div>

      </form>
    </div>
  </div> 
</div>