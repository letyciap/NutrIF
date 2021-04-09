<style>

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div class = "container  ">
<div class=" p-3 pb-md-3 mx-auto text-center" style="color:#DE4545;"><h2 class="display-7 fw-normal"><b>Estatísticas</b></div>
          
          <div class="row justify-content-center">

          <div class="col-lg-9 col-12">
              <label class="form-label display-7" style="font-size:1.2em; color:#6a6a6a;">Por favor, selecioine o Campi IFRN de interesse: </label>
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
   
        </div>

          
             
    <div class="row">

          <div class="col row row-cols-1 justify-content-center py-5 px-3  mx-auto">   
                <div class="card card-cover w-75  overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
                <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
                <h2 class="pt-0 mt-3 mb-0 display-7 fw-bold text-center ">Alergias</h2>
                  <canvas class="d-flex  flex-row-reverse" id="myChartAl" ></canvas>
                </div>
                </div>

          </div>
    </div>   <!---->




    <div class="col">

        <div class="col row row-cols-2 col-sm-6 mx-5 justify-content-center py-5 px-4">   
              <div class="card card-cover w-75 overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
              <div class=" d-flex flex-column p-1 pb-1 px-5 py-2 ">
                  <h3 class="pt-1 mt-3 mb-1 display-7 fw-bold text-center">Outras Doenças</h3>
                  <canvas id="myChart" style="margin-top:1em;" width="100" height="100"></canvas>
              </div>
              </div>
        </div>

        <div class="col row row-cols-2  px-5  ">
              <div class="card card-cover w-50 overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
              <div class="d-flex flex-column p-6 pb-3 ">
                <h2 class="pt-1 mt-3 mb-1 display-7 fw-bold text-center">Dietas</h2>
                <canvas id="myChartDie"></canvas>
              </div>
              </div>
        </div>

  </div>

</div>





                                            <!-- RESULTADOS-->


<div class=" p-3 pb-md-3 mx-auto text-center" style="color:#DE4545;"><h2 class="display-7 fw-normal"><b>Resultado das Avaliações</b></div>
 
<div class="container">

        <form class="container row  needs-validation" novalidate>
          
          <div class="row gx-lg-5 gy-lg-5 gy-3">

          <div class="col-lg-3 col-12 ">
              <label class="form-label">Data de nascimento </label>
              <input type="date" class="form-control" required>
              <div class="invalid-feedback">Inválido.</div>
            </div>

            

        </div>
</form>

        </div>

        <div class="container my-5">
  <div class="row" >
  <div class="col-md-12 mb-4" ><canvas id="barChart"></canvas></div>
  </div>
  </div>











                  <!--Alergias-->
<script>
Chart.defaults.global.legend.labels.usePointStyle = true;
var ctx = document.getElementById('myChartAl').getContext('2d');

var myChartAl = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [10, 20, 30, 40, 50, 60,70,80], 
      backgroundColor: [
        'rgb(119, 197, 67)',
        'rgb(222, 69, 69)',
	      'rgb(67, 180, 120)',
	      'rgb(119, 197, 67)',
	      'rgb(247, 194, 44)',
        'rgb(119, 197, 67)',
        'rgb(67, 180, 120)',
        'rgb(222, 69, 69)'
    ],

    }],
    labels: [
    'Ovo',
    'Látex',
    'Trigo',
    'Amendoim',
    'Castanhas',
    'Protéinas do leite de vaca',
    'Corantes e outros aditivos',
    'Não-alérgicos'

  ],
  hoverOffset: 4
  },
  options: {
    responsive: true,
    layout:{
    padding:70

    },
    legend: {
      position: 'right',
    
    },
  }
});

</script>


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
    padding:30

    },
    legend: {
      position: 'bottom',
      
    },
  }
});

</script>




<!--grafico de barra lanche-->

<script>

console.log(Chart.defaults.scale.ticks);
Chart.defaults.scale.ticks.beginAtZero = true;

window.onload = function() {
  var ctx = document.getElementById('barChart').getContext('2d');
  window.myHorizontalBar = new Chart(ctx, {
    type: 'horizontalBar',
    data: horizontalBarChartData,
    options: {
      responsive: true,
      legend:{
        display: false
      },
      
      scales: {
        yAxes: [{
        ticks: {
        fontColor:"#6a6a6a",
        padding: 10,
					//display: false - remove this and commenting to display: false
		},   
        }],
        xAxes: [{
        gridLines: {
		display: false,
		color: "transparent",
		zeroLineColor: "transparent"
 },
 }]
      }
 
      
    }
  });

};

(function(global) {
	var MONTHS = [
		'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta'
	];

	var Samples = global.Samples || (global.Samples = {});

	Samples.utils = {
		// Adapted from http://indiegamr.com/generate-repeatable-random-numbers-in-js/
		srand: function(seed) {
			this._seed = seed;
		},

		rand: function(min, max) {
			var seed = this._seed;
			min = min === undefined ? 0 : min;
			max = max === undefined ? 1 : max;
			this._seed = (seed * 9301 + 49297) % 233280;
			return min + (this._seed / 233280) * (max - min);
		},

		
	};

	// DEPRECATED
	window.randomScalingFactor = function() {
		return Math.round(Samples.utils.rand(0, 100));
	};

	// INITIALIZATION

	Samples.utils.srand(Date.now());

	// Google Analytics
	/* eslint-disable */
	if (document.location.hostname.match(/^(www\.)?chartjs\.org$/)) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-28909194-3', 'auto');
		ga('send', 'pageview');
	}
	/* eslint-enable */

}(this));

// Bar chart
var color = Chart.helpers.color;
var horizontalBarChartData = {
  labels: ['Segunda','Terça', 'Quarta','Quinta','Sexta'],
  datasets: [{
        maxBarThickness: 60,
        minBarLength:20,
 
    backgroundColor: [
     'rgb(119, 197, 67)',
     'rgb(222, 69, 69)',
	  'rgb(9, 197, 85)',
	  'rgb(255, 69, 69)',
	 'rgb(247, 194, 44)'
    ],
    data: [
      randomScalingFactor(),
       randomScalingFactor(),
       randomScalingFactor(),
       randomScalingFactor(),
       randomScalingFactor()
    ] 
  }]
};

//Radius

Chart.elements.Rectangle.prototype.draw = function() {
    var ctx = this._chart.ctx;
    var vm = this._view;
    var left, right, top, bottom, signX, signY, borderSkipped, radius;
    var borderWidth = vm.borderWidth;
    var cornerRadius = 10;

    if (!vm.horizontal) {
        left = vm.x - vm.width / 2;
        right = vm.x + vm.width / 2;
        top = vm.y;
        bottom = vm.base;
        signX = 1;
        signY = bottom > top? 1: -1;
        borderSkipped = vm.borderSkipped || 'bottom';
    } else {
        left = vm.base;
        right = vm.x;
        top = vm.y - vm.height / 2;
        bottom = vm.y + vm.height / 2;
        signX = right > left? 1: -1;
        signY = 1;
        borderSkipped = vm.borderSkipped || 'left';
    }

    if (borderWidth) {
        var barSize = Math.min(Math.abs(left - right), Math.abs(top - bottom));
        borderWidth = borderWidth > barSize? barSize: borderWidth;
        var halfStroke = borderWidth / 2;
        var borderLeft = left + (borderSkipped !== 'left'? halfStroke * signX: 0);
        var borderRight = right + (borderSkipped !== 'right'? -halfStroke * signX: 0);
        var borderTop = top + (borderSkipped !== 'top'? halfStroke * signY: 0);
        var borderBottom = bottom + (borderSkipped !== 'bottom'? -halfStroke * signY: 0);
        if (borderLeft !== borderRight) {
            top = borderTop;
            bottom = borderBottom;
        }
        if (borderTop !== borderBottom) {
            left = borderLeft;
            right = borderRight;
        }
    }

    ctx.beginPath();
    ctx.fillStyle = vm.backgroundColor;
    ctx.strokeStyle = vm.borderColor;
    ctx.lineWidth = borderWidth;
    var corners = [
        [left, bottom],
        [left, top],
        [right, top],
        [right, bottom]
    ];

    var borders = ['bottom', 'left', 'top', 'right'];
    var startCorner = borders.indexOf(borderSkipped, 0);
    if (startCorner === -1) {
        startCorner = 0;
    }

    function cornerAt(index) {
        return corners[(startCorner + index) % 4];
    }

    var corner = cornerAt(0);
    ctx.moveTo(corner[0], corner[1]);

    for (var i = 1; i < 4; i++) {
        corner = cornerAt(i);
        nextCornerId = i+1;
        if(nextCornerId == 4){
            nextCornerId = 0
        }

        nextCorner = cornerAt(nextCornerId);

        width = corners[2][0] - corners[1][0];
        height = corners[0][1] - corners[1][1];
        x = corners[1][0];
        y = corners[1][1];
        
        var radius = cornerRadius;
        
        if(radius > height/2){
            radius = height/2;
        }if(radius > width/2){
            radius = width/2;
        }

        ctx.moveTo(x + radius, y);
        ctx.lineTo(x + width - radius, y);
        ctx.quadraticCurveTo(x + width, y, x + width, y + radius);
        ctx.lineTo(x + width, y + height - radius);
        ctx.quadraticCurveTo(x + width, y + height, x + width - radius, y + height);
        ctx.lineTo(x + radius, y + height);
        ctx.quadraticCurveTo(x, y + height, x, y + height - radius);
        ctx.lineTo(x, y + radius);
        ctx.quadraticCurveTo(x, y, x + radius, y);
    }

    ctx.fill();
    if (borderWidth) {
        ctx.stroke();
    }
};







</script>