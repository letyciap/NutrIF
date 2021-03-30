<style>
 .form-control,.campus-sl,.vezes,.refeicao-campus,.refeicao-dia{
    width:27em; 
  }
  
.etnia,.peso,.altura,.genero{
  width: 14.5em;
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
            <div class="py-5 text-center"><h2>Cadastro</h2></div>

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
             
                <select class="campus-sl" id="country"  required>
               
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
                    <select class="form-select" id="nia" required>
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
                    <input type="text" class="form-control" id="alturaa" placeholder="" value="" required>
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
                    <div class="refeicao-dia">
                    <label for="refeicao" class="form-label">Quais refeições você costuma realizar ao longo do dia?</label>
                    <select class="form-select" id="dia" required>
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
             
              <div class="col-sm-5">
                    <div class="refeicao-campus" style="margin-left:11.7em;">
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

              <div class="col-sm-6">
                  <label>Alergias e intolerâncias alimentares</label>
                  <div class="naoalergico">
                  <input type="checkbox" class="form-check-input" id="não-ale">
                  <label class="form-check-label" for="não-ale">Não tenho alergias</label>
                  <div class="invalid-feedback">Inválido.</div>
                  </div>
               </div>

              <div class="col-sm-6">
                  <div class="dislipi">
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
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>


            <div class="col-sm-6">
                  <div class="dislipi">
                  
                  <div class="invalid-feedback">Inválido.</div>
              </div>
            
            </div>

  

             
</main>
            
            