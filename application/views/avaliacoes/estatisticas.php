<style>
.col-lg-4{
  border: 2px solid #6a6a6a;
  border-radius: 20px;
  height: 20em;
  width: 15em;
}

h3{
  margin-top:1em;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<div class="container py-6" id="custom-cards">

  <div class="row row-cols-3 align-items-stretch py-5 border-2">
  <div class="col">
      <div class="card card-cover" >
        <div class="d-flex flex-column p-4 text-center">
          <h2 class="display-7 lh-1 fw-bold" style="color:#6A6A6A">Dietas</h2>
          <canvas id="myChartDie" width="100" height="100"></canvas>
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover" >
        <div class="d-flex flex-column p-4 text-center">
          <h2 class="display-7 lh-1 fw-bold" style="color:#6A6A6A">Dietas</h2>
          <canvas id="myChartDie" width="100" height="100"></canvas>
          
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover" >
        <div class="d-flex flex-column p-4 text-center">
          <h2 class="display-7 lh-1 fw-bold" style="color:#6A6A6A">Dietas</h2>
          <canvas id="myChartDie" width="100" height="100"></canvas>
          
        </div>
      </div>
    </div>
  </div>
</div>
























 <!-- <div class="py-5 text-center" style="color:#DE4545;font-weight: bold;"><h2><b>Estatísticas</b></h2></div> 
 
  <div class="container py-5" id="featured-3"> 
  <div class="row g-5 py-5">
    <div class="feature col-md-3">
    <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Outras Doenças</h3>
        <canvas id="myChart" width="100" height="100" style="margin-top:1em;"></canvas>
    </div>
  </div>
  

  <div class="row g-5 py-5">
    <div class="feature col-md-3">
    <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Alergias</h3>
        <canvas id="myChartAl" width="100" height="100"></canvas>
    </div>
  </div>
  

  
  <div class="row g-5 py-5">
    <div class="feature col-md-3">
    <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Dietas</h3>
        <canvas id="myChartDie" width="100" height="100"></canvas>
    </div>
  </div>
  

  </div>-->



<!--
  <div class="row">
        <div class="col-lg-4" >
        <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Outras Doenças</h3>
        <canvas id="myChart" width="100" height="100" style="margin-top:1em;"></canvas>
  </div>

  <div class="col-lg-4"style="margin-left:10em;" >
        <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Alergias</h3>
        <canvas id="myChartAl" width="100" height="100"></canvas>
        
  </div>

  <div class="col-lg-4" style="margin-left:10em;">
        <h3 style="text-align:center;color:#6A6A6A;font-weight: bold;">Dietas</h3>
        <canvas id="myChartDie" width="100" height="100"></canvas>
  </div>
  </div> -->

  <div class="pb-md-3 mx-auto text-center" style="margin-top:2em;">
    <h2 class="display-7 fw-normal" style="color:#DE4545;"><b>Resultado das Avaliações<b></h2>
  </div>
 
  <div class="col-lg-5 col-12">
  <div class="col my-3 row">
    <label class="col form-label" style="margin-left:10em;">Data das avaliações</label>
    <div class="col" >
    <input type="date" class="form-control">
    </div>
  </div>
  </div>-->





</div>

                  <!--Outras Doenças-->

<script>
Chart.defaults.global.legend.labels.usePointStyle = true;
var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [40, 30, 20,10], 
      backgroundColor: [
      'rgb(255, 171, 15)',
      'rgb(36,122,253)',
      'rgb(70, 254, 159)',
      'rgb(254, 70, 165)'
    ],

    }],
    labels: [
    'Obesidade',
    'Doença celíaca',
    'Hipertensão arterial',
    'Diabete Melittus'
  ],
  hoverOffset: 4
  },
  options: {
    responsive: true,
    
    legend: {
      position: 'bottom',
      
    },
  }
});

</script>


                  <!--Alergias-->
<script>
Chart.defaults.global.legend.labels.usePointStyle = true;
var ctx = document.getElementById('myChartAl').getContext('2d');

var myChartAl = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [10, 20, 30,40], 
      backgroundColor: [
      'rgb(1, 123, 146)',
      'rgb(255,107,181)',
      'rgb(179, 111, 246)',
      'rgb(96,1, 146)'
    ],

    }],
    labels: [
    'Maríscos',
    'Aditivos',
    'Amendoim',
    'Trigo'
  ],
  hoverOffset: 4
  },
  options: {
    responsive: true,
    layout:{
    padding:10

    },
    legend: {
      position: 'bottom',
      align:'start'
    },
  }
});

</script>

                  <!--Dietas-->
<script>
Chart.defaults.global.legend.labels.usePointStyle = true;
var ctx = document.getElementById('myChartDie').getContext('2d');

var myChartDie = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [20, 30,40], 
      backgroundColor: [
      'rgb(252, 130, 74)',
      'rgb(176,1,73)',
      'rgb(12, 23, 147)'
      
    ],

    }],
    labels: [
    'Onívora',
    'Vegana',
    'Vegetariana'
  ],
  hoverOffset: 4
  },
  options: {
    responsive: true,
    layout:{
    padding:10

    },
    legend: {
      position: 'bottom',
      
    },
  }
});

</script>



