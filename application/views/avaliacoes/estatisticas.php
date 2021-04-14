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
<div class = "container  ">
<div class=" p-3 mx-auto text-center" style="color:#DE4545;"><h2 class=""><b>Estatísticas</b></h2></div>
          
          <div class="row justify-content-center">
          <div class="col-lg-9 col-12">
              <label class="form-label display-6 fw-normal" style="font-size:1.2em; color:#6a6a6a;">Por favor, selecioine o Campi IFRN de interesse: </label>
              <select class="form-select form-control"  required>
                <option selected>Instituto Federal de Ciencia e Tecnologia do Rio Grande do Norte - Campus Natal-Zona Norte </option>
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
                                                        <!--ALERGIAS-->
          
        <div class="row">

            <div class="col row row-cols-1 justify-content-center py-5 px-3  mx-auto">   
                <div class="card card-cover w-75  overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
                 
                  <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
                  <h3 class="pt-0 mt-3 mb-0  fw-bold text-center ">Alergias</h3>
                  <p class="mt-3 text-center">Número de alunos por alergia no <b>Campus Natal Zona Norte</b></p>
                  </div>

                        <div class="row row-cols-5 justify-content-center">

                              <div class="col d-flex align-items-start">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0">8</h4>
                                <p class="">Ovo</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0">12</h4>
                                <p class="mx-2 ">Látex</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0">18</h4>
                                <p class=" mx-2 ">Trigo</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start  ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5 ">20</h4>
                                <p class=" text-center">Proteínas do leite de vaca</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start mx-1">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-4">2</h4>
                                <p class=" ">Castanhas</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-4">4</h4>
                                <p class=" mx-2 ">Amendoim</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">32</h4>
                                <p class="text-center ">Corantes e outros aditivos</p>
                                </div>
                              </div>

                              <div class="col d-flex align-items-start mx-4 ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0  mx-5 ">8</h4>
                                <p class=" mx-3 text-center">Não-alérgicos</p>
                                </div>
                              </div>
           
                                  
                        </div>
                </div>

            </div>

        </div>   

                                                        <!--OUTRAS DOENÇAS-->

        <div class="row">

            <div class="col row row-cols-1 justify-content-center py-5 px-3  mx-auto">   
                <div class="card card-cover w-75  overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
                 
                  <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
                  <h3 class="pt-0 mt-3 mb-0  fw-bold text-center ">Outras doenças</h3>
                  <p class="mt-3 text-center">Número de alunos por doença no <b>Campus Natal Zona Norte</b></p>
                  </div>

                        <div class="row row-cols-4 justify-content-center">

                              <div class="col d-flex justify-content-center">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">8</h4>
                                <p class="text-center ">Doença celiaca</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-5">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">12</h4>
                                <p class=" text-center">Diabetes melittus</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-3 ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-3">20</h4>
                                <p class="  text-center">Dislipidemias</p>
                                </div>
                              </div>


                              <div class="col d-flex justify-content-center mx-2">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">2</h4>
                                <p class=" text-center">Hipertensão</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-4">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-4">4</h4>
                                <p class=" text-center ">Obesidade</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-3 ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0  mx-5 ">8</h4>
                                <p class=" text-center">Intolerância à lactose</p>
                                </div>
                              </div>                                  
                        </div>

                </div>
            </div>
        </div>   

                                                        <!--DIETAS-->

        <div class="row">

            <div class="col row row-cols-1 justify-content-center py-5 px-3  mx-auto">   
                <div class="card card-cover w-75  overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
                
                  <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
                    <h3 class="pt-0 mt-3 mb-0 fw-bold text-center ">Dietas</h3>
                    <p class="mt-3 text-center">Número de alunos por dietas no <b>Campus Natal Zona Norte</b></p>
                  </div>

                        <div class="row row-cols-4 justify-content-center">

                              <div class="col d-flex justify-content-center">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">20</h4>
                                <p class=" text-center ">Tradicional</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-5">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">12</h4>
                                <p class=" text-center">Vegano</p>
                                </div>
                              </div>

                              <div class="col d-flex justify-content-center mx-2 ">
                                <div>
                                <h4 class=" display-5 fw-bold mb-0 mx-5">8</h4>
                                <p class="  text-center">Vegetariano</p>
                                </div>
                              </div>

                        </div>

                </div>
            </div>
        </div>   


                                                  <!--GRÁFICO BARRA-->


        <div class="row">

              <div class="col row row-cols-1 justify-content-center py-5 px-3  mx-auto">   
                  <div class="card card-cover w-75  overflow-hidden border-2" style="border-radius:20px; color:#6a6a6a;">
                  <div class=" d-flex flex-column  p-1 pb-1 px-5 ">
                      <h3 class="pt-0 mt-3 mb-0 fw-bold text-center ">Avaliações: lanche</h3>
                      <div class="col my-4 row mx-auto ">
                        <label class="col form-label py-1 h5 ">Data</label>
                        <div class="col">
                        <input type="date" class="form-control">
                        </div>
                      </div>

                      <div class=" estrelas text-center ">
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


                      
                       <canvas id="barChart" ></canvas>
                      

                  </div>
                  </div>

              </div>
        </div>  

</div> <!--DIV CONTAINER-->



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
     
      layout:{
      padding:40
      },
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

