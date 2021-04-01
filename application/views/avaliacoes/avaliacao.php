
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>

.estrelas input{
  display: none;
}
.estrelas label i.fa{
  font-size: 2.5em;
}
.estrelas label i.fa:before {
  content:'\f005';
  position:relative;
  display:block;
  color: #FC0; 
  font-size:30px;
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
  text-shadow:0 2px 5px rgba(0,0,0,0.5);
 
}
.estrelas label i.fa:hover:after,
.estrelas label i.fa:hover ~ label:after,
.estrelas label i.fa:checked ~ label:after{
  opacity:1;
 
}

.estrelas input[type=radio]:checked ~ label i.fa:before {
  color: #CCC;
}

.opcao-lanche{
  border-radius: 3px;
  border-bottom: 4px solid #6A6A6A;
  padding: 0px 10px;
}

.opcao-almoco,.opcao-lanche,.opcao-jantar{
  color: #6A6A6A!important;
  position:relative;
  left:33%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  margin: 10px 40px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.dia-refei,.mes-refei,.ano-refei{
  height:2.3em; 
  border: 1.5px solid #CECECE;
  border-radius: 5px;
}
.dia-refei,.mes-refei,.ano-refei{
width:4em;   
}
.dia-refei,.mes-refei,.ano-refei{
margin-left: 1em;
}
.estrelas,.estrelas2,.estrelas3 {
  margin-left:50em;

}
.btn-cancelar {
        border-color: #77C043;
        border-radius: 5px;
        color:#DE4545;  
        border: 2px solid #f44336;
        padding: 7px 45px;
      }

.btn-cancelar:hover {
  background-color: #f44336;
  color: white;
  
}

.btn-salvar{
        background-color: #4CAF50;
        border-color: #77C043;
        color: #FFFF!important;
        border-radius: 5px;
        border: none;
        padding: 10px 55px;
      }

.btn-salvar:hover {
  background-color: #198754;
}

.btn-salvar,.btn-cancelar{
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 40px;
  transition-duration: 0.4s;
  cursor: pointer;

}
i{
  color: #DE4545;
}
</style>

  <div class="corpo da avaliacao">
  
            <div class="opcoes-avaliacao">
              <h2 class="py-5 text-center" style="font-weight: bold;color:#DE4545;">Avaliações</h2>
              <form class="d-flex">
              <a  href="" class="opcao-lanche"><b>Lanche</b></a> 
              <a  href="" class="opcao-almoco"><b>Almoço</b></a>
              <a  href="" class="opcao-jantar"><b>Jantar</b></a>
             </form>
            </div>
 
            <div class="data-refeicao" style="margin:2em 0em 0em 8em;"> 
                <label for="datrefei" class="form-label" >Data da resposta do cadastro  <i>*</i></label>                
                <input class="dia-refei" data-val="true" data-val-length="Dia do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O dia deve estar entre 1 e 31." data-val-range-max="31" data-val-range-min="1" data-val-required="O campo Dia é obrigatório" type="text" value="" />
                <input class="mes-refei" data-val="true" data-val-length="Mês do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O mês deve estar entre 1 e 12." data-val-range-max="12" data-val-range-min="1" data-val-required="O campo Mês é obrigatório" type="text" value="" />
                <input class="ano-refei" data-val="true"  data-val-length="Ano do Nascimento não pode exceder 4 caracteres" data-val-length-max="4" data-val-required="O campo Ano é obrigatório" id="DataNascimentoAno" name="DataNascimentoAno"  size="4" type="text" value="" />
                <div class="invalid-feedback">Inválido.</div>
            </div>

            
              <div class="estrelas" >
              <label class="comida" for="" style="">Alimento</label>
              <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
              <label for="cm_star-1"><i class="fa"></i></label>
              <input type="radio" id="cm_star-1" name="fb" value="1"/>
              <label for="cm_star-2"><i class="fa"></i></label>
              <input type="radio" id="cm_star-2" name="fb" value="2"/>
              <label for="cm_star-3"><i class="fa"></i></label>
              <input type="radio" id="cm_star-3" name="fb" value="3"/>
              <label for="cm_star-4"><i class="fa"></i></label>
              <input type="radio" id="cm_star-4" name="fb" value="4"/>
              <label for="cm_star-5"><i class="fa"></i></label>
              <input type="radio" id="cm_star-5" name="fb" value="5"/>
            </div>
            

            <div class="col-sm-6">
                <div class="comentario" style="margin-left:8em;">
                <label for="comen" class="form-label">Comentários</label>
                <input type="text" class="form-control" id="comen-tario" placeholder="" value="" required style="width:28.9em;height:4em;">
                <div class="invalid-feedback">Inválido.</div>
                </div> 
              </div>

              <div class="botoes" style="text-align:center;margin:6em 0em 0em 29em;">   
              <div class="botoes2">
              <form class="d-flex">
              <a  href="" class="btn-cancelar"><b>Cancelar</b></a> 
              <a  href="" class="btn-salvar"><b>Salvar</b></a>
             </form>
              </div>
            </div>

</div>