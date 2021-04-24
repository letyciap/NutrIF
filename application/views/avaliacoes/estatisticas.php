<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>

  .estrelas input{display: none}

  .estrelas label i.fa{font-size: 2.5em;margin:0em 1em 0em 1em }
  
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class = "container">
  <div class="p-3 mx-auto text-center text-danger"><h2 class="fw-bold">Estatísticas</h2></div>
  <div class="col-lg-9 col-12 mx-auto justify-content-center">
    <div class="">
      <label class="form-label h5 fw-bold text-secondary">Por favor, selecione o Campi IFRN de interesse:</label>
      <select class="form-select form-control"  required>
        <option selected></option>
        <?php foreach ($campus as $campus):?>
          <option value="<?= $campus->codcampus;?>">Instituto Federal de Educação, Ciencia e Tecnologia do Rio Grande do Norte - Campus <?= $campus->campus; ?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
</div>
    
<!--ALERGIAS-->
          
<div class="container">
  <div class="col-lg-9 col-12 py-5 mx-auto">   
    <div class="card card-cover text-secondary border-2" style="border-radius:1rem">        
      <div class="col mx-auto p-1 pb-1 px-5">
        <h3 class="pt-0 mt-3 mb-0  fw-bold text-center ">Alergias</h3>
        <p class="mt-3 text-center">Número de alunos por alergia no <b>Campus Natal Zona Norte</b></p>
      </div>

      <div class="col-10 mb-4 mx-auto row row-cols-lg-5 row-cols-2 justify-content-center">

        <div class="col text-center text-success">
          <h4 class=" display-5 fw-bold mb-0 text-center" style="color:#498221";>57</h4>
          <p style="color:#498221";>Alunos cadastrados</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">8</h4>
          <p>Ovo</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">12</h4>
          <p>Látex</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">18</h4>
          <p>Trigo</p>
        </div>

        <div class="col text-center ">
          <h4 class="display-5 fw-bold mb-0">20</h4>
          <p>Proteínas do leite de vaca</p>
        </div>

        <div class="col text-center">
          <h4 class="display-5 fw-bold mb-0">2</h4>
          <p>Castanhas</p>
        </div>

        <div class="col text-center ">
          <h4 class="display-5 fw-bold mb-0">4</h4>
          <p class="">Amendoim</p>
        </div>

        <div class="col text-center ">
          <h4 class="display-5 fw-bold mb-0">32</h4>
          <p>Corantes e outros aditivos</p>
        </div>

        <div class="col text-center ">
          <h4 class=" display-5 fw-bold mb-0">8</h4>
          <p>Não-alérgicos</p>
        </div>   

      </div>
    </div>
  </div>
</div>   

<!--OUTRAS DOENÇAS-->

<div class="container">
  <div class="col-lg-9 col-12 py-5 mx-auto">   
    <div class="card card-cover text-secondary border-2" style="border-radius:1rem">
      <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
        <h3 class="pt-0 mt-3 mb-0  fw-bold text-center ">Outras doenças</h3>
        <p class="mt-3 text-center">Número de alunos por doença no <b>Campus Natal Zona Norte</b></p>
      </div>

      <div class="col-10 mb-4 mx-auto row row-cols-lg-5 row-cols-2 justify-content-center">

        <div class="col text-center text-success">
          <h4 class="display-5 fw-bold mb-0" style="color:#498221";>57</h4>
          <p style="color:#498221";>Alunos cadastrados</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">8</h4>
          <p>Doença celiaca</p>                                
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">12</h4>
          <p>Diabetes melittus</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">20</h4>
          <p>Dislipidemias</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">2</h4>
          <p>Hipertensão</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">4</h4>
          <p>Obesidade</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">8</h4>
          <p>Intolerância à lactose</p>
        </div>                                  
      </div>
    </div>
  </div>
</div>   

<!--DIETAS-->

<div class="container">
  <div class="col-lg-9 col-12 py-5 mx-auto">   
    <div class="card card-cover text-secondary border-2" style="border-radius:1rem">
      <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
        <h3 class="pt-0 mt-3 mb-0 fw-bold text-center ">Dietas</h3>
        <p class="mt-3 text-center">Número de alunos por dietas no <b>Campus Natal Zona Norte</b></p>
      </div>

      <div class="col-10 mb-4 mx-auto row row-cols-lg-5 row-cols-2 justify-content-center">

        <div class="col text-center text-success">
          <h4 class="display-5 fw-bold mb-0" style="color:#498221";>57</h4>
          <p style="color:#498221";>Alunos cadastrados</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">20</h4>
          <p>Tradicional</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">12</h4>
          <p>Vegano</p>
        </div>

        <div class="col text-center">
          <h4 class=" display-5 fw-bold mb-0">8</h4>
          <p>Vegetariano</p>
        </div>

      </div>
    </div>
  </div>
</div>   

<!--GRÁFICO BARRA-->
         
<div class="container">
  <div class="col-lg-9 col-12 py-5 mx-auto">   
    <div class="card card-cover border-0">
      <div class="row row-cols-1 row-cols-lg-2 justify-content-center">

        <div class="d-flex mb-5 mb-lg-0">
          <div class="col col-lg-9">
          <label class="form-label display-6 fw-normal" style="font-size:1.2em; color:#6a6a6a;">Selecione a refeição: </label>
              <select class="form-select form-control"  required>
              <option selected>Lanche</option>
              <option>Almoço</option>
              <option>Jantar</option>
              </select>
          </div>
        </div> 

        <div class="d-flex flex-row-reverse ">
          <div class="col col-lg-8  ">
          <label class="col form-label h5 " style="color:#6a6a6a;">Data:</label>
          <input type="date" class="form-control">
          </div>
        </div>

      </div>
    </div>
  </div>
</div>   

<div class="container">
  <div class="col-lg-9 col-12 py-5 mx-auto">   
    <div class="card card-cover text-secondary border-2" style="border-radius:1rem">
      <div class=" d-flex flex-column py-lg-1 px-lg-5 px-0">
        <h3 class="pt-0 mt-3 py-4 fw-bold text-center ">Avaliações: lanche</h3>
        
        <div class="estrelas text-center">
          <label>
            <i class="fa mx-2 mx-lg-5"></i>
            <i class="fa mx-2 mx-lg-5"></i>
            <i class="fa mx-2 mx-lg-5"></i>
            <i class="fa mx-2 mx-lg-5"></i>
            <i class="fa mx-2 mx-lg-5"></i>
          </label>
        </div>

        <canvas class='p-lg-4 p-0' id="barChart"></canvas>             

      </div>
    </div>
  </div>
</div>  

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
      'rgb(143, 25, 19)',
      'rgb(217, 37, 28)',
      'rgb(233, 99, 92)',
      'rgb(217, 37, 28)',
      'rgb(143, 25, 19)'
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
        }

        if(radius > width/2){
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
