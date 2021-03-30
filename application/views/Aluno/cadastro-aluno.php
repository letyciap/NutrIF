<style>
  .form-control,.campus-sl{
    width:30em; 
  }
  .campus-sl{
    height:2.3em;  
  }
select{
  border: 1.5px solid #CECECE;
  border-radius: 5px;
  
}
select {
  -webkit-appearance: none;
  -moz-appearance:    none;
  appearance:         none;
  width: 100%;
}

.select {
  ...
  background-image: #e9e9e9 url('NutrIF/assets/seta.png') 95.5% 50% no-repeat;
  ...
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
                    <div class="matricu" style="margin-left:3em;">
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
              <div class="selecionecamp" style="margin-left:3em;">
              <label for="camp" class="form-label">Campus</label>
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
              <div class="invalid-feedback">Inválido.</div>
              </div>
             
            </div>


             

             
</main>
            
            