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

  .nav-link {color: #6A6A6A!important}

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

    <div class='container text-center  my-5'>
      <h2 class="text-danger"><b>Avaliações</b></h2>
    </div>

    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link h5 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><b>Lanche</b></button> 
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link h5" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><b>Almoço</b></button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link h5" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><b>Jantar</b></button>
      </li>
    </ul>

    <div class="tab-content mt-5" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <form class="container row d-flex justify-content-center">

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Alimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-alimento" name="lanche-alimento" value="" checked/>
                <label for="lanche-alimento_star-1"><i class="fa"></i></label>
                <input type="radio" id="lanche-alimento_star-1" name="lanche-alimento" value="1"/>
                <label for="lanche-alimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="lanche-alimento_star-2" name="lanche-alimento" value="2"/>
                <label for="lanche-alimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="lanche-alimento_star-3" name="lanche-alimento" value="3"/>
                <label for="lanche-alimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="lanche-alimento_star-4" name="lanche-alimento" value="4"/>
                <label for="lanche-alimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="lanche-alimento_star-5" name="lanche-alimento" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Bebida</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-bebida" name="lanche-bebida" value="" checked/>
                <label for="lanche-bebida-1"><i class="fa"></i></label>
                <input type="radio" id="lanche-bebida-1" name="lanche-bebida" value="1"/>
                <label for="lanche-bebida-2"><i class="fa"></i></label>
                <input type="radio" id="lanche-bebida-2" name="lanche-bebida" value="2"/>
                <label for="lanche-bebida-3"><i class="fa"></i></label>
                <input type="radio" id="lanche-bebida-3" name="lanche-bebida" value="3"/>
                <label for="lanche-bebida-4"><i class="fa"></i></label>
                <input type="radio" id="lanche-bebida-4" name="lanche-bebida" value="4"/>
                <label for="lanche-bebida-5"><i class="fa"></i></label>
                <input type="radio" id="lanche-bebida-5" name="lanche-bebida" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Atendimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-atendimento" name="lanche-atendimento" value="" checked/>
                <label><i class="fa"></i></label>
                <input type="radio" id="lanche-atendimento_star-1" name="lanche-atendimento" value="1"/>
                <label for="lanche-atendimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="lanche-atendimento_star-2" name="lanche-atendimento" value="2"/>
                <label for="lanche-atendimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="lanche-atendimento_star-3" name="lanche-atendimento" value="3"/>
                <label for="lanche-atendimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="lanche-atendimento_star-4" name="lanche-atendimento" value="4"/>
                <label for="lanche-atendimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="lanche-atendimento_star-5" name="lanche-atendimento" value="5"/>
              </div>
            </div>

          </div>

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col form-label">Data da refeição</label>
              <div class="col">
                <input type="date" class="form-control">
              </div>
            </div>

            <div class="col my-3">
              <label class="col form-label">Comentário</label>
              <div class="col">
                <textarea class="form-control" rows="2"></textarea>
              </div>
            </div>

          </div>

          <div class="col-12 mt-3 row justify-content-center">
            <div class="col-3">
              <a  href="<?= base_url()?>aluno" class="btn btn-outline-danger py-2 w-100"><b>Cancelar</b></a>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-success py-2 w-100">Salvar</button>
            </div>
          </div>

        </form>

      </div>

      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        <form class="container row d-flex justify-content-center">

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Alimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-alimento" name="almoco-alimento" value="" checked/>
                <label for="almoco-alimento_star-1"><i class="fa"></i></label>
                <input type="radio" id="almoco-alimento_star-1" name="almoco-alimento" value="1"/>
                <label for="almoco-alimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="almoco-alimento_star-2" name="almoco-alimento" value="2"/>
                <label for="almoco-alimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="almoco-alimento_star-3" name="almoco-alimento" value="3"/>
                <label for="almoco-alimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="almoco-alimento_star-4" name="almoco-alimento" value="4"/>
                <label for="almoco-alimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="almoco-alimento_star-5" name="almoco-alimento" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Bebida</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-bebida" name="almoco-bebida" value="" checked/>
                <label for="almoco-bebida_star-1"><i class="fa"></i></label>
                <input type="radio" id="almoco-bebida_star-1" name="almoco-bebida" value="1"/>
                <label for="almoco-bebida_star-2"><i class="fa"></i></label>
                <input type="radio" id="almoco-bebida_star-2" name="almoco-bebida" value="2"/>
                <label for="almoco-bebida_star-3"><i class="fa"></i></label>
                <input type="radio" id="almoco-bebida_star-3" name="almoco-bebida" value="3"/>
                <label for="almoco-bebida_star-4"><i class="fa"></i></label>
                <input type="radio" id="almoco-bebida_star-4" name="almoco-bebida" value="4"/>
                <label for="almoco-bebida_star-5"><i class="fa"></i></label>
                <input type="radio" id="almoco-bebida_star-5" name="almoco-bebida" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Atendimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-atendimento" name="almoco-atendimento" value="" checked/>
                <label for="almoco-atendimento_star-1"><i class="fa"></i></label>
                <input type="radio" id="almoco-atendimento_star-1" name="almoco-atendimento" value="1"/>
                <label for="almoco-atendimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="almoco-atendimento_star-2" name="almoco-atendimento" value="2"/>
                <label for="almoco-atendimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="almoco-atendimento_star-3" name="almoco-atendimento" value="3"/>
                <label for="almoco-atendimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="almoco-atendimento_star-4" name="almoco-atendimento" value="4"/>
                <label for="almoco-atendimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="almoco-atendimento_star-5" name="almoco-atendimento" value="5"/>
              </div>
            </div>

          </div>

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col form-label">Data da refeição</label>
              <div class="col">
                <input type="date" class="form-control">
              </div>
            </div>

            <div class="col my-3">
              <label class="col form-label">Comentário</label>
              <div class="col">
                <textarea class="form-control" rows="2"></textarea>
              </div>
            </div>

          </div>

          <div class="col-12 mt-3 row justify-content-center">
            <div class="col-3">
              <a  href="<?= base_url()?>aluno" class="btn btn-outline-danger py-2 w-100"><b>Cancelar</b></a>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-success py-2 w-100">Salvar</button>
            </div>
          </div>

        </form>
      </div>

      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

        <form class="container row d-flex justify-content-center">

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Alimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-alimento" name="janta-alimento" value="" checked/>
                <label for="janta-alimento_star-1"><i class="fa"></i></label>
                <input type="radio" id="janta-alimento_star-1" name="janta-alimento" value="1"/>
                <label for="janta-alimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="janta-alimento_star-2" name="janta-alimento" value="2"/>
                <label for="janta-alimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="janta-alimento_star-3" name="janta-alimento" value="3"/>
                <label for="janta-alimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="janta-alimento_star-4" name="janta-alimento" value="4"/>
                <label for="janta-alimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="janta-alimento_star-5" name="janta-alimento" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Bebida</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-bebida" name="janta-bebida" value="" checked/>
                <label for="janta-bebida_star-1"><i class="fa"></i></label>
                <input type="radio" id="janta-bebida_star-1" name="janta-bebida" value="1"/>
                <label for="janta-bebida_star-2"><i class="fa"></i></label>
                <input type="radio" id="janta-bebida_star-2" name="janta-bebida" value="2"/>
                <label for="janta-bebida_star-3"><i class="fa"></i></label>
                <input type="radio" id="janta-bebida_star-3" name="janta-bebida" value="3"/>
                <label for="janta-bebida_star-4"><i class="fa"></i></label>
                <input type="radio" id="janta-bebida_star-4" name="janta-bebida" value="4"/>
                <label for="janta-bebida_star-5"><i class="fa"></i></label>
                <input type="radio" id="janta-bebida_star-5" name="janta-bebida" value="5"/>
              </div>
            </div>

            <div class="col my-3 row">
              <label class="col-sm-6 col-form-label">Atendimento</label>
              <div class="col-sm-6 estrelas">
                <input type="radio" id="avaliacao-atendimento" name="janta-atendimento" value="" checked/>
                <label for="janta-atendimento_star-1"><i class="fa"></i></label>
                <input type="radio" id="janta-atendimento_star-1" name="janta-atendimento" value="1"/>
                <label for="janta-atendimento_star-2"><i class="fa"></i></label>
                <input type="radio" id="janta-atendimento_star-2" name="janta-atendimento" value="2"/>
                <label for="janta-atendimento_star-3"><i class="fa"></i></label>
                <input type="radio" id="janta-atendimento_star-3" name="janta-atendimento" value="3"/>
                <label for="janta-atendimento_star-4"><i class="fa"></i></label>
                <input type="radio" id="janta-atendimento_star-4" name="janta-atendimento" value="4"/>
                <label for="janta-atendimento_star-5"><i class="fa"></i></label>
                <input type="radio" id="janta-atendimento_star-5" name="janta-atendimento" value="5"/>
              </div>
            </div>

          </div>

          <div class="col-6">

            <div class="col my-3 row">
              <label class="col form-label">Data da refeição</label>
              <div class="col">
                <input type="date" class="form-control">
              </div>
            </div>

            <div class="col my-3">
              <label class="col form-label">Comentário</label>
              <div class="col">
                <textarea class="form-control" rows="2"></textarea>
              </div>
            </div>

          </div>

          <div class="col-12 mt-3 row justify-content-center">
            <div class="col-3">
              <a  href="<?= base_url()?>aluno" class="btn btn-outline-danger py-2 w-100"><b>Cancelar</b></a>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-success py-2 w-100">Salvar</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div> 
</div>