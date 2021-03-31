
<style>
  label{
    color:#737373;
  }
 .form-control,.vezes,.refeicao-campus,.refeicao-dia{
    width:27em; 
  }
  
.peso,.genero,{
  width: 14.5em;
}

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
input ,.dia,.mes,.ano{
  height:2.3em; 
  border: 1.5px solid #CECECE;
  border-radius: 5px;
}
select,.form-select{
  height:2.3em; 
  border: 1.5px solid #CECECE;
  border-radius: 5px;

  <!-- setinha -->
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url("../assets/seta.png") no-repeat center right 5px #FFF ;
    background-size: 1em;

}

.dia,.mes,.ano {
width:4em;   
}
.mes,.ano{
margin-left: 1em;
}

</style> 
    <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <main class="conteudo"> 
            <div class="container">
            <div class="py-5 text-center" style="color:#DE4545;"><h2>Cadastro do Usuário</h2></div>

            <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
              
                <div class="nomecomp">
                <label for="nomecom" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                <div class="invalid-feedback">Inválido.</div>
                </div>
              
              </div>
  
              <div class="col-sm-6">
                    <div class="matricu" style="margin-left:6em;">
                    <label for="matri" class="form-label">Matrícula</label>
                    <input type="text" class="form-control" id="matricula" placeholder="" value="" required>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-6">
              
                <div class="senha">
                <label for="sen" class="form-label">Senha</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                <div class="invalid-feedback">Inválido.</div>
                </div>
              
              </div>

              <div class="col-md-5">
              <div class="selecionecamp" style="margin-left:6em;">
              <label for="camp" class="form-label">Campus</label>
             
                <select class="form-select" id="country"  required style=" width:27em; ">
               
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
              <div class="invalid-feedback">Inválido.</div>
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
                      
                        <select class="ano" id="state" required>
                            <option value=""></option>
                            <option>1970</option>
                            <option>1971</option>
                            <option>1972</option>
                            <option>1973</option>
                            <option>1974</option>
                            <option>1975</option>
                            <option>1976</option>
                            <option>1977</option>
                            <option>1978</option>
                            <option>1979</option>
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
                    
                            <div class="invalid-feedback">Inválido.</div>         
                </div>
              </div>

              <div class="col-sm-5">
                    <div class="genero" style="margin-left:17.7em;">
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
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-5">
                    <div class="etnia">
                    <label for="etn" class="form-label">Etnia</label>
                    <select class="form-select" id="nia" required style="width:14.5em;">
                  <option value=""></option>
                  <option>Amarelo</option>
                  <option>Branco </option>
                  <option>Indígena </option>
                  <option>Pardo</option>
                  <option>Preto </option>
                  </select>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-5" style="margin-left:11.7em;">
                    <div class="altura">
                    <label for="alt" class="form-label">Altura (m)</label>
                    <input type="text" class="form-control" id="alturaa" placeholder="" value="" required style="width:14.5em;">
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-5">
                    <div class="peso">
                    <label for="pe" class="form-label">Peso (Kg)</label>
                    <input type="text" class="form-control" id="pesoo" placeholder="" value="" required>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-5">
                    <div class="vezes" style="margin-left:11.7em;">
                    <label for="ve" class="form-label"> Quantas vezes na semana costuma consumir os lanches oferecidos no campus?</label>
                    <select class="form-select" id="zes" required>
                  <option value=""></option>
                  <option>Não consumo </option>
                  <option>Raramente </option>
                  <option>1-2 dias</option>
                  <option>3-4 dias</option>
                  <option>Todos os dias</option>
                  </select>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div>

              <div class="col-sm-5">
                    <div class="ultimomes">
                    <label for="ultimo" class="form-label"style="width:25em;">No último mês, com que frequência você ficou com fome por não ter comida suficiente em casa?</label>
                    <select class="form-select" required style="width:14.7em;">
                  <option value=""></option>
                  <option>Nunca</option>
                  <option>Raramente</option>
                  <option>Muitas vezes</option>
                  <option>Sempre</option>
                  </select>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div> 
             
              <div class="col-sm-5">
                    <div class="refeicao-campus" style="margin-left:11.5em;">
                    <label for="refeicao" class="form-label">Quais refeições você costuma realizar no campus?</label>
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
              </div>
            
              <label>Alergias, intolerâncias e outras condições de saúde</label>
              
              <div class="col-sm-6">
                  
                  <div class="naoalergico">
                  <input type="checkbox" class="form-check-input" id="não-ale">
                  <label class="form-check-label" for="não-ale">Não tenho alergias</label>
                  <div class="invalid-feedback">Inválido.</div>
                  </div>
               </div>

              <div class="col-sm-6">
                  <div class="dislipi" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="save-info">
                  <label class="form-check-label" for="save-info">Dislipidemias (alterações nas gosrduras do sangue)</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>
           
            <div class="col-sm-6">
                  <div class="ovo">
                  <input type="checkbox" class="form-check-input" id="ale-ovo">
                  <label class="form-check-label" for="ale-ovo">Alergia ao ovo</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>

            <div class="col-sm-6">
                  <div class="trigo" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="ale-trigo">
                  <label class="form-check-label" for="ale-trigo">Alergia ao trigo</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="amendoim">
                  <input type="checkbox" class="form-check-input" id="ale-amen">
                  <label class="form-check-label" for="ale-amen">Alergia ao amendoim</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="doenca" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="ale-doenca">
                  <label class="form-check-label" for="ale-doenca">Doenças celíaca</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="castanhas">
                  <input type="checkbox" class="form-check-input" id="ale-casta">
                  <label class="form-check-label" for="ale-casta">Alergia às castanhas</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="diabete" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="ale-diabet">
                  <label class="form-check-label" for="ale-diabet">Diabetes melittus</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="soja">
                  <input type="checkbox" class="form-check-input" id="ale-soja">
                  <label class="form-check-label" for="ale-soja">Alergia à soja</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>

            <div class="col-sm-6">
                  <div class="obesidade" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="obesi">
                  <label class="form-check-label" for="obesi">Obesidade</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>
            <div class="col-sm-6">
                  <div class="latex">
                  <input type="checkbox" class="form-check-input" id="ale-latex">
                  <label class="form-check-label" for="ale-latex">Alergia ao látex</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>
            <div class="col-sm-6">
                  <div class="lactose" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="lact">
                  <label class="form-check-label" for="lact">Intolerância a lactose</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>
            <div class="col-sm-6">
                  <div class="hipertensao">
                  <input type="checkbox" class="form-check-input" id="hiper">
                  <label class="form-check-label" for="hiper">Hipertensão arterial (Pressão alta)</label>
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>
            <div class="col-sm-6">
                  <div class="corantes" style="margin-left:6em;">
                  <input type="checkbox" class="form-check-input" id="ale-coran">
                  <label class="form-check-label" for="ale-coran">Alergia à corantes e outros aditivos</label>
                  <div class="invalid-feedback">Inválido.</div>
                  </div>
            
            </div>
         

            <div class="col-sm-6" style="margin-left:41.4em;">
                  <div class="outra">
                  <input type="checkbox" class="form-check-input" id="ale-outra">
                  <label class="form-check-label" for="ale-outra">Outra:</label>
                  <input type="text" class="outra-linha" id="nome" placeholder="" value="" required>
                  <div class="invalid-feedback">Inválido.</div>
                  </div>
            
            </div> 
          
            <div class="col-sm-5">
                    <div class="dieta" style="">
                    <label for="diet" class="form-label">Dietas</label>
                    <select class="form-select" id="d-i-e-t-a" required style="width:27em;">
                  <option value=""></option>
                  <option>Tradicional (inclui carnes e outros produtos de origem animal, além de outros tipos de alimentos)</option>
                  <option>Vegetariano (ovolactovegetariano ou vegetariano estrito)</option>
                  <option>Vegano (sem consumo de produtos de origem animal)</option>
                  </select>
                    <div class="invalid-feedback">Inválido.</div>
                    </div> 
              </div> 
 
            <div class="col-sm-5">
                    <div class="corpo" style="margin-left:12em;">
                    <label for="sentircorpo" class="form-label">Como você se sente em relação ao seu corpo?</label>
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
              </div> 

              <div class="col-sm-6">
                <label for="datre" class="form-label" >Data da resposta do cadastro</label>
                <div class="dataresp">                  
                <input class="dia" data-val="true" data-val-length="Dia do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O dia deve estar entre 1 e 31." data-val-range-max="31" data-val-range-min="1" data-val-required="O campo Dia é obrigatório" type="text" value="" />
                <input class="mes" data-val="true" data-val-length="Mês do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O mês deve estar entre 1 e 12." data-val-range-max="12" data-val-range-min="1" data-val-required="O campo Mês é obrigatório" type="text" value="" />
                <input class="ano" data-val="true"  data-val-length="Ano do Nascimento não pode exceder 4 caracteres" data-val-length-max="4" data-val-required="O campo Ano é obrigatório" id="DataNascimentoAno" name="DataNascimentoAno"  size="4" type="text" value="" />
                    <div class="invalid-feedback">Inválido.</div>
                </div> 
              </div>
</main>
            
            