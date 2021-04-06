<style>

h3{
  margin-top:1em;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


<div class=" p-3 pb-md-3 mx-auto text-center" style="color:#DE4545;"><h2 class="display-7 fw-normal"><b>Estatísticas</b></div>

<div class="container py-1" id="custom-cards">

  <div class="row row-cols-4 d-flex justify-content-center py-5 gx-5">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
        <div class="d-flex flex-column h-100 p-6 ">
          <h2 class="pt-1 mt-3 mb-1 display-7 fw-bold text-center">Outras Doenças</h2>
          <canvas id="myChart" width="100" height="100" style="margin-top:1em;"></canvas>
        </div>
      </div>
      </div>

      
      <div class="col">
      <div class="card card-cover h-100 overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
        <div class="d-flex flex-column h-100 p-6 ">
          <h2 class="pt-1 mt-3 mb-1 display-7 fw-bold text-center">Alergias</h2>
          <canvas id="myChartAl" width="100" height="100" style="margin-top:1em;"></canvas>
        </div>
      </div>
      </div>

      <div class="col">
      <div class="card card-cover h-100 overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
        <div class="d-flex flex-column h-100 p-6 ">
          <h2 class="pt-1 mt-3 mb-1 display-7 fw-bold text-center">Dietas</h2>
          <canvas id="myChartDie" width="100" height="100" style="margin-top:1em;"></canvas>
        </div>
      </div>
      </div>
  </div>
</div>

<div class=" p-3 pb-md-3 mx-auto text-center" style="color:#DE4545;"><h2 class="display-7 fw-normal"><b>Resultado das Avaliações</b></div>
 
  <div class="col-lg-5 col-12">
  <div class="col my-3 row">
    <label class="col form-label" style="margin-left:10em;">Data das avaliações</label>
    <div class="col" >
    <input type="date" class="form-control">
    </div>
  </div>
  </div>





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
    'Doença celiaca',
    'Hipertensão arterial',
    'Diabete Melittus'
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
      boxWidth:	40
    },
  }
});

</script>


                  <!--Alergias-->
<script>

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
    padding:20

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
    padding:20

    },
    legend: {
      position: 'bottom',
      
    },
  }
});

</script>



