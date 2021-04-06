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
      <h2 class="text-danger mb-3"><b>Edite seus dados</b></h2>
    </div>
    
      <div class="cadastro">

        <form class="container row d-flex justify-content-center needs-validation" novalidate>
          
          <div class="row gx-lg-5 gy-lg-5 gy-3">

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Nome completo <i>*</i></label>
              <input type="text" class="form-control" id="nome" placeholder="" value="" required>
              <div class="invalid-feedback">Inválido.</div>
            </div>

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Matrícula  <i>*</i></label>
              <input type="text" class="form-control" id="matricula" placeholder="" value="" required>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Senha <i>*</i></label>
              <input type="password" class="form-control" id="senha" placeholder="" value="" required>
              <div class="invalid-feedback">Inválido.</div>
            </div>

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Campus <i>*</i></label>
              <select class="form-select form-control"  required>
                <option selected></option>
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
              <div class="invalid-feedback">Inválido.</div>
            </div>

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Data de nascimento <i>*</i></label>
              <input type="date" class="form-control" required>
              <div class="invalid-feedback">Inválido.</div>
            </div>

            
            <div class="col-lg-6 col-12 ">
              <label for="gen" class="form-label">Gênero <i>*</i></label>
              <select class="form-select form-control" id="genero" required>
                <option selected></option>
                <option>Feminino </option>
                <option>Masculino</option>
                <option>Outro </option>
                <option>Prefiro não responder </option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-6 col-12 ">
              <label class="form-label">Etnia <i>*</i></label>
              <select class="form-select form-control" id="etnia" required>
                <option selected></option>
                <option>Amarelo</option>
                <option>Branco </option>
                <option>Indígena </option>
                <option>Pardo</option>
                <option>Preto </option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div>

            <div class="col-lg-6 col-12 d-flex ">

              <div class="col-5 ">
                <label for="alt" class="form-label">Altura (m)  <i>*</i></label>
                  <input type="number" class="form-control" id="altura" required>          
                <div class="invalid-feedback">Inválido.</div>
              </div> 

              <div class="col-2"></div>

              <div class="col-5 ">
                <label class="form-label">Peso (Kg) <i>*</i></label>
                <input type="number" class="form-control" id="peso" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

            </div>

            <div class="col-lg-4 col-12 ">
              <label class="form-label"> Quantas vezes na semana costuma consumir os lanches oferecidos no campus? <i>*</i></label>
              <select class="form-select" required>
                <option value=""></option>
                <option>Não consumo </option>
                <option>Raramente </option>
                <option>1-2 dias</option>
                <option>3-4 dias</option>
                <option>Todos os dias</option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div>  

            <div class="col-lg-4 col-12 ">
              <label for="ultimo" class="form-label">No último mês, com que frequência você ficou com fome por não ter comida suficiente em casa? <i>*</i></label>
              <select class="form-select" required>
                <option value=""></option>
                <option>Nunca</option>
                <option>Raramente</option>
                <option>Muitas vezes</option>
                <option>Sempre</option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-4 col-12 ">
              <label for="refeicao" class="form-label">Quais refeições você costuma realizar no campus? <i>*</i></label>
              <select class="form-select" id="campuss" required>
                <option value=""></option>
                <option>Café-da-manhã </option>
                <option>lanche da manhã </option>
                <option>Almoço</option>
                <option>Lanche da tarde</option>
                <option>Jantar</option>
                <option>Nenhuma das anteriores</option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-6">
              <label  class='mb-3'>Alergias, intolerâncias e outras condições de saúde <i>*</i></label>  

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="não-ale">
                <label class="form-check-label" for="não-ale">Não tenho alergias</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Dislipidemias (alterações nas gosrduras do sangue)</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-ovo">
                <label class="form-check-label" for="ale-ovo">Alergia ao ovo</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-trigo">
                <label class="form-check-label" for="ale-trigo">Alergia ao trigo</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-amen">
                <label class="form-check-label" for="ale-amen">Alergia ao amendoim</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2" >
                <input type="checkbox" class="form-check-input" id="ale-doenca">
                <label class="form-check-label" for="ale-doenca">Doenças celíaca (sensível ao glúten)</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-casta">
                <label class="form-check-label" for="ale-casta">Alergia às castanhas</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

            </div>

            <div class="col-lg-6">
              <label class='mb-3'> </label>

              <div class="mb-2" >
                <input type="checkbox" class="form-check-input" id="ale-diabet">
                <label class="form-check-label" for="ale-diabet">Diabetes melittus ()</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-soja">
                <label class="form-check-label" for="ale-soja">Alergia à soja</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2" >
                <input type="checkbox" class="form-check-input" id="obesi">
                <label class="form-check-label" for="obesi">Obesidade</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-latex">
                <label class="form-check-label" for="ale-latex">Alergia ao látex</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2" >
                <input type="checkbox" class="form-check-input" id="lact">
                <label class="form-check-label" for="lact">Intolerância a lactose</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="hiper">
                <label class="form-check-label" for="hiper">Hipertensão arterial (Pressão alta)</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2" >
                <input type="checkbox" class="form-check-input" id="ale-coran">
                <label class="form-check-label" for="ale-coran">Alergia à corantes e outros aditivos</label>
                <div class="invalid-feedback">Inválido.</div>
              </div>

              <div class="mb-2">
                <input type="checkbox" class="form-check-input" id="ale-outra">
                <label class="form-check-label" for="ale-outra">Outra:</label>
                <input type="text" class="outra-linha" id="nome" required>
                <div class="invalid-feedback">Inválido.</div>
              </div>

            </div>
          
          
            <div class="col-lg-4 col-12">
              <label class="form-label">Dietas <i>*</i></label>
              <select class="form-select" id="d-i-e-t-a" required>
                <option value=""></option>
                <option>Tradicional (inclui carnes e outros produtos de origem animal, além de outros tipos de alimentos)</option>
                <option>Vegetariano (ovolactovegetariano ou vegetariano estrito)</option>
                <option>Vegano (sem consumo de produtos de origem animal)</option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-4 col-12">
              <label for="sentircorpo" class="form-label">Como você se sente em relação ao seu corpo? <i>*</i></label>
              <select class="form-select" required>
                <option value=""></option>
                <option>Muito satisfeito(a) </option>
                <option>Satisfeito(a)</option>
                <option>Insatisfeito(a)</option>
                <option>Muito insatisfeito(a)</option>
                <option>Indiferente</option>
              </select>
              <div class="invalid-feedback">Inválido.</div>
            </div> 

            <div class="col-lg-4 col-12 ">
              <label class="form-label">Data da resposta do cadastro <i>*</i></label>
              <input type="date" class="form-control" required>
              <div class="invalid-feedback">Inválido.</div>
            </div>

          </div> 

          <div class="col-12 mt-5 row justify-content-center gx-3">
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
</main>