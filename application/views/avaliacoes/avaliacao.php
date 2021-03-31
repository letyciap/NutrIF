
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>

.estrelas{

  margin-left:50em;
  
}
.estrelas input{
  display: none;
}
.estrelas label i.fa{
  font-size: 2.5em
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
</style>

<div class="corpo da avaliacao">
<div class="py-5 text-center" style="color:#DE4545;"><h2 style="font-weight: bold;">Avaliações</h2></div>
<div class="estrelas">
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
</div>