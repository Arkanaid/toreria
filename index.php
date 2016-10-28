<!DOCTYPE html>

<html lang="en">

<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->

  <title>Torteria</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <link href="bootstrap/css/thumbnail-gallery.css" rel="stylesheet">



  <script src="bootstrap/js/jquery.min.js"></script>

  <script src="bootstrap/js/bootstrap.min.js"></script>

  

  

  <script src="bootstrap/js/ekko-lightbox.min.js"></script>

  <script src="bootstrap/js/jquery.maskedinput.js"></script>

  

  <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Roboto+Condensed|Ubuntu+Condensed|Vollkorn" rel="stylesheet"> 

  

  

  <style>

  

  /* latin-ext */

@font-face {

  font-family: 'Lato';

  font-style: normal;

  font-weight: 400;

  src: local('Lato Regular'), local('Lato-Regular'), url(http://fonts.gstatic.com/s/lato/v11/UyBMtLsHKBKXelqf4x7VRQ.woff2) format('woff2');

  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;

}

/* latin */

@font-face {

  font-family: 'Lato';

  font-style: normal;

  font-weight: 400;

  src: local('Lato Regular'), local('Lato-Regular'), url(http://fonts.gstatic.com/s/lato/v11/1YwB1sO8YE1Lyjf12WNiUA.woff2) format('woff2');

  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;

}

  

  

   @font-face {

    font-family: 'Glyphicons Halflings';

    src: url('bootstrap/fonts/glyphicons-halflings-regular.eot');

    src: url('bootstrap/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('bootstrap/fonts/glyphicons-halflings-regular.woff2') format('woff2'), url('bootstrap/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('bootstrap/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');

} 

  

  body {

      font: 400 15px;

      line-height: 1.8;

      color: #818181;

	  font-family: 'Lobster', cursive;

  }

  h2 {

      font-size: 24px;

      text-transform: uppercase;

      color: #303030;

      font-weight: 600;

      margin-bottom: 30px;

	  font-family: 'Lobster', cursive;

  }

  h4 {

      font-size: 19px;

      line-height: 1.375em;

      color: #303030;

      font-weight: 400;

      margin-bottom: 30px;

	  font-family: 'Lobster', cursive;

  }

  .jumbotron {

      background-color: #2A0467;

      color: #fff;

      padding: 100px 25px;

      font-family: Montserrat, sans-serif;

  }

  .container-fluid {

      padding: 60px 50px;

  }

  .bg-grey {

      background-color: #f6f6f6;

  }

  .logo-small {

      color: #2A0467;

      font-size: 50px;

  }

  .logo {

      color: #2A0467;

      font-size: 200px;

	  

  }

  .thumbnail {

      padding: 0 0 15px 0;

      border: none;

      border-radius: 0;

  }

  .thumbnail img {

      width: 100%;

      height: 100%;

      margin-bottom: 10px;

  }

  

  .navbar-header{

  margin-top: 0px;

  }

  

  .carousel-control.right, .carousel-control.left {

      background-image: none;

      color: #FFF;

  }

  .carousel-indicators li {

      border-color: #e5e5e5;

  }

  .carousel-indicators li.active {

      background-color: #e5e5e5;

  }
  
  

  .item h4 {

      font-size: 19px;

      line-height: 1.375em;

      font-weight: 400;

      font-style: italic;

      margin: 20px 0;

  }

  .item span {

      font-style: normal;

  }

  .panel {

      border: 1px solid #2A0467;

      border-radius:0 !important;

      transition: box-shadow 0.5s;

  }

  .panel:hover {

      box-shadow: 5px 0px 40px rgba(0,0,0, .2);

  }

  .panel-footer .btn:hover {

      border: 1px solid #2A0467;

      background-color: #fff !important;

      color: #2A0467;

  }

  .panel-heading {

      color: #fff !important;

      background-color: #f6f6f6 !important;

      padding: 25px;

      border-bottom: 1px solid transparent;

      border-top-left-radius: 0px;

      border-top-right-radius: 0px;

      border-bottom-left-radius: 0px;

      border-bottom-right-radius: 0px;

  }

  .panel-footer {

      background-color: white !important;

  }

  .panel-footer h3 {

      font-size: 32px;

  }

  .panel-footer h4 {

      color: #aaa;

      font-size: 14px;

  }

  .panel-footer .btn {

      margin: 15px 0;

      background-color: #2A0467;

      color: #fff;

  }

  .navbar {

      margin-bottom: 0;

      background-color: #2A0467;

      z-index: 9999;

      border: 0;

      font-size: 16px !important;

      line-height: 1.42857143 !important;

      letter-spacing: 4px;

      border-radius: 0;

	  font-family: 'Lobster', cursive;

  }

  .navbar li a, .navbar .navbar-brand {

      color: #fff !important;



	  

  }

  .navbar-nav li a:hover, .navbar-nav li.active a {

      color: #2A0467 !important;

      background-color: #FDD0CB !important;

  }

  .navbar-default .navbar-toggle {

      border-bottom: 4px solid #2A0467;

      color: #fff !important;

  }

  footer .glyphicon {

      font-size: 20px;

      margin-bottom: 20px;

      color: #2A0467;

  }

  .slideanim {visibility:hidden;}

  .slide {

      animation-name: slide;

      -webkit-animation-name: slide;

      animation-duration: 1s;

      -webkit-animation-duration: 1s;

      visibility: visible;

  }

  @keyframes slide {

    0% {

      opacity: 0;

      transform: translateY(70%);

    }

    100% {

      opacity: 1;

      transform: translateY(0%);

    }

  }

  @-webkit-keyframes slide {

    0% {

      opacity: 0;

      -webkit-transform: translateY(70%);

    }

    100% {

      opacity: 1;

      -webkit-transform: translateY(0%);

    }

  }

  @media screen and (max-width: 768px) {

    .col-sm-4 {

      text-align: center;

      margin: 25px 0;

    }

    .btn-lg {

        width: 100%;

        margin-bottom: 35px;

    }

  }

  @media screen and (max-width: 480px) {

    .logo {

        font-size: 150px;

    }

  }

  



   .thumbnail {

      padding: 0 0 15px 0;

      border: none;

      border-radius: 0;

  }

  .thumbnail img {

      width: 100%;

      height: 100%;

      margin-bottom: 10px;

  }

  

  

.hovereffect img{  

      width: 100%;

      height: 100%;

      margin-bottom: 10px;

}

  

.hovereffect {

  width: 100%;

  height: 100%;

  float: left;

  overflow: hidden;

  position: relative;

  text-align: center;

  cursor: default;

  padding: 0 0 15px 0;

  border: none;

  border-radius: 0;

	  

}



.hovereffect .overlay {

  position: absolute;

  overflow: hidden;

  width: 80%;

  height: 80%;

  left: 10%;

  top: 10%;

  border-bottom: 1px solid #FFF;

  border-top: 1px solid #FFF;

  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;

  transition: opacity 0.35s, transform 0.35s;

  -webkit-transform: scale(0,1);

  -ms-transform: scale(0,1);

  transform: scale(0,1);

}



.hovereffect:hover .overlay {

  opacity: 1;

  filter: alpha(opacity=100);

  -webkit-transform: scale(1);

  -ms-transform: scale(1);

  transform: scale(1);

}



.hovereffect img {

  display: block;

  position: relative;

  -webkit-transition: all 0.35s;

  transition: all 0.35s;

}



.hovereffect:hover img {

  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');

  filter: brightness(0.6);

  -webkit-filter: brightness(0.6);

}



.hovereffect h2 {

  text-transform: uppercase;

  text-align: center;

  position: relative;

  font-size: 17px;

  background-color: transparent;

  color: #FFF;

  padding: 1em 0;

  opacity: 0;

  filter: alpha(opacity=0);

  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;

  transition: opacity 0.35s, transform 0.35s;

  -webkit-transform: translate3d(0,-100%,0);

  transform: translate3d(0,-100%,0);

}



.hovereffect a, hovereffect p {

  color: #FFF;

  padding: 1em 0;

  opacity: 0;

  filter: alpha(opacity=0);

  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;

  transition: opacity 0.35s, transform 0.35s;

  -webkit-transform: translate3d(0,100%,0);

  transform: translate3d(0,100%,0);

}



.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {

  opacity: 1;

  filter: alpha(opacity=100);

  -webkit-transform: translate3d(0,0,0);

  transform: translate3d(0,0,0);

}


.img-responsive{
height:300px;
width:400px;

}




  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="10">



<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar" href="#myPage"><img src="images/torteria-di-lorenza-g.png" width="155px" height="100px;"/></a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav navbar-right"  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <li ><a href="#Home" >Home</a></li>

        <li><a href="#Sobre">Sobre Nós</a></li>

        <li><a href="#Produtos">Produtos</a></li>

		<li><a href="#Comentarios">Comentários</a></li>

        <li><a href="#Lojas">Lojas</a></li>

        <li><a href="#Contato">Contato</a></li>

      </ul>

    </div>

  </div>

</nav>

<br>

<div class="container" id="Home">

  <br>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->

    <ol class="carousel-indicators">

      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

      <li data-target="#myCarousel" data-slide-to="1"></li>

      <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>



    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">



      <div class="item active">

        <img src="images/slide_1.jpg" alt="Chania" width="1400px" height="345">

        <div class="carousel-caption">

          <h3>Bombas (Prestígio, Creme e Chocolate), Canudo Parisiense, Ópera, Tranche de Frutas, Nhá Benta e Alfajor</h3>



        </div>

      </div>







	  

      <div class="item">

        <img src="images/slide_2.jpg" alt="Chania" width="1400px" height="345">

        <div class="carousel-caption">

          <h3>Mousse Dois Amores, Pavê de Chocolate, Mousse de Morango e Mousse de Chocolate</h3>

        </div>

      </div>

	  

	  





    

      <div class="item">

        <img src="images/slide_3.jpg" alt="Chania" width="1400px" height="345">

        <div class="carousel-caption">

          <h3>Tarteletes (Tentação, Maçã e Caracas, Nozes, Tropical Coconut)</h3>



        </div>

      </div>



  

    </div>



    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

      <span class="sr-only">Next</span>

    </a>

  </div>

</div>





<!-- Container (About Section) -->

<div id="Sobre" class="container-fluid">

  <div class="row">

  

  <div class="col-sm-12">  <h2>SOBRE NÓS</h2></div>

  

    <div class="col-sm-8">

      <h4>Histórico



Tudo começou com o sonho e a determinação de uma família que idealizou e acreditou no sucesso do empreendimento.<br><br>

Em 1995, foi inaugurada a primeira loja da Torteria Di Lorenza no setor Sudoeste. Era um bairro novo, as ruas ainda estavam sendo asfaltadas e lá estava a família determinada a realizar o sonho de oferecer as delícias da confeitaria aos que chegavam ao Sudoeste. No ano seguinte, foi inaugurada a segunda loja, na 115 Norte.<br>

Atualmente a Torteria conta com uma Central de Produção de Alimentos – CPA e 12 (doze) lojas na cidade.</h4>

    </div>

   <div class="col-sm-4">

	 <img src="images/torteriadilorenza.jpg" class="img-thumbnail" alt="Cinque Terre" width="450">
	 
  </div>

   <div class="col-sm-12"><a href="#demo3" data-toggle="collapse"><button class="btn btn-default btn-lg">Veja +</button></a>  <br>
  <br></div>



 <div id="demo3" class="collapse">

	<div id="about" class="container-fluid">

    <div class="row">

	  <div class="col-sm-4">

	   <img src="images/torteria-di-lorenza2.jpg" class="img-thumbnail" alt="Cinque Terre" width="450">

	  </div>

		<div class="col-sm-8">

		<h4 class="alert-heading">Brasília viu, provou e aprovou.<br><br>

			A Torteria Di Lorenza e os Sorvetes Brunisa formam uma só empresa dedicada ao preparo dos mais saborosos doces, tortas, sorvetes e salgados da cidade, sempre primando pela escolha rigorosa da matéria prima e a cordialidade de seus colaboradores.<br><br>

			Os produtos são elaborados artesanalmente, sob o comando do Mestre Confeiteiro David Rodrigues, à frente da produção desde o início das atividades da empresa.<br>

			São mais de 100 variedades de tortas, além de doces, bombons, salgados, pettit fours, macarons e sorvetes de primeiríssima linha, tudo feito especialmente, com muito carinho e dedicação, para atender o desejo de sua clientela.

		 </h4>

		</div>

      </div>

	</div>

 </div>	  



  

  

  

  

  </div>

</div>

	

<div id="Produtos" class="container-fluid bg-grey">

  <div class="row text-center slideanim">

	<div class="col-lg-12">

                <h2>Produtos</h2>

    </div>

			
<?php include "arquivos.php"; ?>


<?php 
$pasta1 = "tortas_doces";
$return_value = img($pasta1); 
?>

			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta1."/".$return_value; ?>" alt="">

							<div class="overlay">

							  <h2>Tortas Doces</h2>

							  <p><a href="#" target="_blank">Compre agora!</a></p> 

							</div>

					</div>

		

			</div>	

       

	

	<?php 
$pasta2 = "tortas_de_sorvete";
$return_value = img($pasta2); 
?>		

   			<div class="col-lg-4">

      

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta2."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Tortas de Sorvete</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			

			</div>

			
	<?php 
$pasta3 = "sorvetes";
$return_value = img($pasta3); 
?>				

			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta3."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Sorvetes</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			

			</div>


	<?php 
$pasta4 = "salgados";
$return_value = img($pasta4); 
?>				

 			<div class="col-lg-4">

				<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta4."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Salgados</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			

			</div>

		<?php 
$pasta5 = "bombons";
$return_value = img($pasta5); 
?>		

			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta5."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Bombons</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			</div>

			
		<?php 
$pasta6 = "doces";
$return_value = img($pasta6); 
?>	
			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta6."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Doces</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>
					
					</div>

			</div>

			
		<?php 
$pasta7 = "lights";
$return_value = img($pasta7); 
?>	

			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta7."/".$return_value; ?>"  alt="">

					        <div class="overlay">

							  <h2>Lights</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			</div>

	<?php 
$pasta8 = "para_sua_festa";
$return_value = img($pasta8); 
?>	

			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta8."/".$return_value; ?>"  alt="">

					        <div class="overlay">

							  <h2>Para sua Festa</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			</div>			
			
		<?php 
$pasta9 = "mais_delicias";
$return_value = img($pasta9); 
?>	
			<div class="col-lg-4">

					<div class="hovereffect">

						<img class="img-responsive" src="<?php echo'fotos_torteria/'.$pasta9."/".$return_value; ?>" alt="">

					        <div class="overlay">

							  <h2>Mais Delicias</h2>

							  <p><a href="#" target="_blank">Visitar página</a></p> 

							</div>

					</div>

			</div>	

   		</div>	

</div>



  

 <div id="Comentarios" class="container-fluid text-center"> 

  <h2>Comentários de Nossos Clientes</h2>

  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel">



    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">

      <div class="item active">

        <h4>"Adoro tomar café da manhã na torteria!"<br><span style="font-style:normal;">Daniel Soares</span></h4>

      </div>

      <div class="item">

        <h4>"No final do expediente, sempre relaxo comendo uma torta e tomando um cafezinho com eles..."<br><span style="font-style:normal;">Rodrigo</span></h4>

      </div>

      <div class="item">

        <h4>"Sempre somos bem atendidos na torteria que tem um doce melhor que outro!"<br><span style="font-style:normal;">Ana e Gustavo</span></h4>

      </div>

    </div>

<br>
<br>

    <!-- Indicators -->

    <ol class="carousel-indicators" >

      <li data-target="#myCarousel2"  data-slide-to="0" class="active"></li>

      <li data-target="#myCarousel2"  data-slide-to="1"></li>

      <li data-target="#myCarousel2"  data-slide-to="2"></li>

	</ol>




    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev" style="color: #e5e5e5">

      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

      <span class="sr-only">Previous</span>

    </a>

    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next" style="color: #e5e5e5" >

      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

      <span class="sr-only">Next</span>

    </a>

  </div>

</div>



<div id="Lojas" class="container-fluid bg-grey">

   <div class="row text-center">

		<div class="col-lg-12">

                <h2>Lojas</h2>

 <ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#home" id="sd" >Sudoeste</a></li>

    <li><a data-toggle="tab" href="#menu1" id="ln">Lago Norte</a></li>

    <li><a data-toggle="tab" href="#menu2" id="an">Asa Norte</a></li>

	<li><a data-toggle="tab" href="#menu3" id="as">Asa Sul</a></li>

	<li><a data-toggle="tab" href="#menu4" id="ls">Lago Sul</a></li>

	<li><a data-toggle="tab" href="#menu5" id="ac">Águas Claras</a></li>

	<li><a data-toggle="tab" href="#menu6" id="tg">Taguatinga</a></li>

	<li><a data-toggle="tab" href="#menu7" id="cp">Central de Produção</a></li>

  </ul>



  <div class="tab-content">

  

    <div id="home" class="tab-pane fade in active">

      <p><span class="glyphicon glyphicon-map-marker"></span> CLSW 303, Bloco B &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3344-4600</p>

	</div>

	

    <div id="menu1" class="tab-pane fade">

      <p><span class="glyphicon glyphicon-map-marker"></span> Shopping Deck Norte SHIN CA 1, Bloco A &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3468-1528</p>

	</div>

	

    <div id="menu2" class="tab-pane fade">

     <p><span class="glyphicon glyphicon-map-marker"></span> CLN 109, Bloco C &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3347-0474<br>

		<span class="glyphicon glyphicon-map-marker"></span> CLN 115, Bloco D &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3349-7807<br>

		<span class="glyphicon glyphicon-map-marker"></span> CLN 213, Bloco B &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3340-1730</p>

	</div>

  

    <div id="menu3" class="tab-pane fade"> 

	 <p><span class="glyphicon glyphicon-map-marker"></span> CLS 302, Bloco B &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3226-9667<br>

		<span class="glyphicon glyphicon-map-marker"></span> CLS 304, Bloco B &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3322-7701<br>

		<span class="glyphicon glyphicon-map-marker"></span> CLS 211, Bloco C &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3245-6000</p>

    </div>

 

	

	 <div id="menu4" class="tab-pane fade">

      <p><span class="glyphicon glyphicon-map-marker"></span> QI 09, Bloco B &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3364.4283<br>

		<span class="glyphicon glyphicon-map-marker"></span> QI 11, Bloco P &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3364.5096</p>

    </div>

	

	<div id="menu5" class="tab-pane fade">

      <p><span class="glyphicon glyphicon-map-marker"></span> Av. das Castanheiras, Lote 1060 &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3435-3885</p>

    </div>

	

	<div id="menu6" class="tab-pane fade">

      <p><span class="glyphicon glyphicon-map-marker"></span> Alameda Shopping &nbsp;&nbsp; | &nbsp;&nbsp; <span class="glyphicon glyphicon-phone-alt"></span> (61) 3563.9779</p>

    </div>

  

	

	<div id="menu7" class="tab-pane fade">

      <p><span class="glyphicon glyphicon-phone-alt"></span> (61) 3361.0255</p>

    </div>

  



  

   <!-- Add Google Maps -->

<script src="bootstrap/js/googlemapsapi.js"></script> 

<script>

/*document.getElementById('ln').addEventListener('click', function(e){ e.preventDefault(); alert('Lago Norte');});

document.getElementById('an').addEventListener('click', function(e){ e.preventDefault(); alert('Asa Norte');});

document.getElementById('as').addEventListener('click', function(e){ e.preventDefault(); alert('Asa Sul');});

document.getElementById('ls').addEventListener('click', function(e){ e.preventDefault(); alert('Lago Sul');});

document.getElementById('ac').addEventListener('click', function(e){ e.preventDefault(); alert('Aguas Claras');});

document.getElementById('tg').addEventListener('click', function(e){ e.preventDefault(); alert('Taguatinga');});*/







var myCenter = new google.maps.LatLng(-15.759255,-47.890375);



var locations = [



['Shopping Deck Norte SHIN CA 1, Bloco A ', -15.7211473,-47.8842147,17],

['CLN 109, Bloco C ', -15.7591283,-47.8900309,17],

['CLN 115, Bloco D ', -15.7406034,-47.8963658,17],

['CLN 213, Bloco B ', -15.7453065,-47.8893384,17],

['CLS 302, Bloco B ', -15.7649239,-47.8773413,17],

['CLS 304, Bloco B ', -15.8069747,-47.8999018,17],

['CLSW 303, Bloco B ', -15.8010453,-47.9281725,17],

['QI 09, Bloco B ', -15.825863,-48.0243038,12],

['QI 11, Bloco P ', -15.8230591,-47.8560603,14],

['Av. das Castanheiras, Lote 1060 ', -15.8345276,-48.0191336,17]



];



function initialize() {

var mapProp = {

  center:myCenter,

  zoom:12,

  //scrollwheel:false,

  //draggable:false,

  mapTypeId:google.maps.MapTypeId.ROADMAP

  };





var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);



var marker = new google.maps.Marker({

  position:myCenter,

  title: 'My centre location marker'

  });



marker.setMap(map);

for (i = 0; i < locations.length; i++) {

//alert(locations[i][1]);

marker = new google.maps.Marker({



position: new google.maps.LatLng(locations[i][1], locations[i][2]),

map: map,

title: locations[i][0]

});





}

}



google.maps.event.addDomListener(window, 'load', initialize);





</script>

  

  	  <div id="googleMap" style="height:400px;width:100%;"></div>

			</div>

		</div>

    </div>

</div>



<!-- Container (Pricing Section) -->

<div id="Contato" class="container-fluid">

  <div class="text-center">

    <h2>Contato</h2>

    <h4>Escolha o que precisa que logo entraremos em contato.</h4>

  </div>

  <div class="row slideanim">

    <div class="col-sm-4 col-xs-12">

      <div class="panel panel-default text-center">

        <div class="panel-heading">

          <h4>Festas e Eventos</h4>

        </div>

        <div class="panel-body">

<p><strong>Solicite um Orçamento</strong></p>

        </div>

        <div class="panel-footer">

          <button data-toggle="modal" data-target="#myModal" value="Solicite um Orçamento" onclick="return F_tipo(this);" class="btn btn-lg">Solicitar Orçamento</button>

        </div>

      </div>

    </div>

    <div class="col-sm-4 col-xs-12">

      <div class="panel panel-default text-center">

        <div class="panel-heading">

          <h4>Trabalhe Conosco</h4>

        </div>

        <div class="panel-body">

          <p><strong>Envie suas informações</strong></p>



        </div>

        <div class="panel-footer">

          <button data-toggle="modal" data-target="#myModal" value="Trabalhe Conosco" onclick="return F_tipo(this);" class="btn btn-lg">Enviar Informações</button>

        </div>

      </div>

    </div>

    <div class="col-sm-4 col-xs-12">

      <div class="panel panel-default text-center">

        <div class="panel-heading">

          <h4>Contato</h4>

        </div>

        <div class="panel-body">

          <p><strong>Entre em contato!</strong></p>



        </div>

        <div class="panel-footer">

          <button data-toggle="modal" data-target="#myModal" value="Contato" onclick="return F_tipo(this);" class="btn btn-lg">Solicitar Contato</button>

        </div>

      </div>

    </div>

  </div>

</div>

<script>

function F_tipo(assunto){

var t = assunto.value;



document.getElementById("assunto").value = t;



}



function enviar(){

	document.getElementById("enviar_contato").submit();

	}



</script>



<?php

 if(isset($_REQUEST['enviaemail'])){ 

 

 /* Medida preventiva para evitar que outros domÃ­nios sejam remetente da sua mensagem. */

if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {

        $emailsender='contato@vcm.adv.br'; // Substitua essa linha pelo seu e-mail@seudominio

} else {

        $emailsender = "contato@" . $_SERVER[HTTP_HOST];

        //    Na linha acima estamos forÃ§ando que o remetente seja 'webmaster@seudominio',

        // Voce pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.

}

 

/* Verifica qual é sistema operacional do servidor para ajustar o cabeÃ§alho de forma correta.  */

if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows

else $quebra_linha = "\n"; //Se "não for Windows"

 

//Passando os dados obtidos pelo formulário para as variáveis abaixo

$nomeremetente     = $_POST['nomeremetente'];

$emailremetente    = $_POST['emailremetente'];

$telefone          = $_POST['telefone'];

$emaildestinatario = "daniel.csproject@gmail.com";

$comcopia          = "daniel.csproject@gmail.com;adv.jass@gmail.com";

$comcopiaoculta    = "daniel.csproject@gmail.com";

$assunto           = $_POST['assunto'];

$mensagem          = $_POST['mensagem'];

 

 

/* Montando a mensagem a ser enviada no corpo do e-mail. */

$mensagemHTML = '<P>Nome Cliente: <b>'.$nomeremetente.'</b></P>

E-mail Cliente: <b>'.$emailremetente.'</b> <br>

Telefone Cliente: <b>'.$telefone.'</b> <br>

Motivo do Contato: <b>'.$assunto.'</b> <br>

<p>

Mensagem: <b><i>'.$mensagem.'</i></b></p>

<hr>';

 

 

/* Montando o cabeÃƒÂ§alho da mensagem */

$headers = "MIME-Version: 1.1" .$quebra_linha;

$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;

// Perceba que a linha acima contÃ©m "text/html", sem essa linha, a mensagem nÃ£o chegarÃ¡ formatada.

$headers .= "From: " . $emailsender.$quebra_linha;

$headers .= "Cc: " . $comcopia . $quebra_linha;

$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;

$headers .= "Reply-To: " . $emailremetente . $quebra_linha;

// Note que o e-mail do remetente serÃ¡ usado no campo Reply-To (Responder Para)

 

/* Enviando a mensagem */



//Ã‰ obrigatÃ³rio o uso do parÃ¢metro -r (concatenaÃ§Ã£o do "From na linha de envio"), aqui na Locaweb:



if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix

    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "nÃ£o for Postfix"

    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );

}

 

/* Mostrando na tela as informaÃ§Ãµes enviadas por e-mail 

print "Mensagem <b>$assunto</b> enviada com sucesso!<br><br>

De: $emailsender<br>

Para: $emaildestinatario<br>

Com cÃ³pia: $comcopia<br>

Com cÃ³pia Oculta: $comcopiaoculta";

*/



?>



<script>

function F_ok(){

location.href="index.php";

}



</script>

	 

 <div id="myModalAlert" class="modal fade">

<br>

<br>

<br>

<br>

  <div class="modal-dialog">

    <div class="modal-content">

      <!-- dialog body -->

      <div class="modal-body alert alert-success">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

       <b style="font-size:22px">Sua mensagem foi enviada com sucesso!</b> <br>

	   Assim que pissível entraremos em contato.

      </div>

      <!-- dialog buttons -->

      <div class="modal-footer"><button type="button" onclick="F_ok()" class="btn btn-primary btn-lg btn-block"><b>OK</b> <span class="glyphicon glyphicon-ok"></span></button></div>

    </div>

  </div>

</div> 

	 

<script>

 $("#myModalAlert").on("show", function() {    // wire up the OK button to dismiss the modal when shown

        $("#myModal a.btn").on("click", function(e) {

            console.log("button pressed");   // just as an example...

            $("#myModalAlert").modal('hide');     // dismiss the dialog

        });

    });

    $("#myModalAlert").on("hide", function() {    // remove the event listeners when the dialog is dismissed

        $("#myModalAlert a.btn").off("click");

    });

    

    $("#myModalAlert").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden

        $("#myModalAlert").remove();

    });

    

    $("#myModalAlert").modal({                    // wire up the actual modal functionality and show the dialog

      "backdrop"  : "static",

      "keyboard"  : true,

      "show"      : true                     // ensure the modal is shown immediately

    });

    

    </script> 

	 

	  <?php } ?>



<!-- Modal -->

  <div class="modal fade" id="myModal" role="dialog">

    <div class="modal-dialog">

 

      <!-- Modal content-->

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal"></button>

          <h4><span class="glyphicon glyphicon-envelope"></span> Contato</h4>

        </div>

        <div class="modal-body">

          <form role="form" action="index.php?enviaemail" method="post" id="enviar_contato">

		  

		  	 <div class="form-group">

              <label for="assunto"><span class="glyphicon glyphicon-list-alt"></span>Tipo Solicitação</label>

              <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Tipo do Projeto">

            </div>

		  

		  

		    <div class="form-group">

              <label for="nomeremetente"><span class="glyphicon glyphicon-user"></span>Nome</label>

              <input type="text" class="form-control" id="nomeremetente" name="nomeremetente" placeholder="Nome">

            </div>

			

		<script>

				$(document).ready(function() {

				  $("#telefone").inputmask({

					mask: ["(99) 9999-9999", "(99) 99999-9999", ],

					keepStatic: true

				  });

				});

        </script>

		

			 <div class="form-group">

              <label for="emailremetente"><span class="glyphicon glyphicon-phone"></span> Telefone para Contato</label>

              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">

            </div>

			

            <div class="form-group">

              <label for="emailremetente"><span class="glyphicon glyphicon-envelope"></span> E-mal para Contato</label>

              <input type="text" class="form-control" id="emailremetente" name="emailremetente" placeholder="E-mail">

            </div>

			

				  

            <div class="form-group">

             <label for="mensagem"><span class="glyphicon glyphicon-pencil"></span> Descreva sua solicitação</label>           

			 <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Descreva sua solicitação" rows="5"></textarea><br>

			</div>

			

              <button type="submit" onClick="enviar()" class="btn btn-primary btn-lg btn-block">Enviar 

                <span class="glyphicon glyphicon-ok"></span>

              </button>

          </form>

        </div>

        <div class="modal-footer">

          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">

            <span class="glyphicon glyphicon-remove"></span>Cancelar

          </button>

          <p>Precisa de <a href="#">Ajuda?</a></p>

        </div>

      </div>

    </div>

  </div>



<footer class="container-fluid text-center bg-grey">

  <a href="#myPage" title="To Top">

    <span class="glyphicon glyphicon-chevron-up"></span>

  </a>

  <p>© Torteria Di Lorenza 2016</a></p>

</footer>



<script>

$(document).ready(function(){

  // Add smooth scrolling to all links in navbar + footer link

  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior

    if (this.hash !== "") {

      // Prevent default anchor click behavior

      event.preventDefault();



      // Store hash

      var hash = this.hash;



      // Using jQuery's animate() method to add smooth page scroll

      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area

      $('html, body').animate({

        scrollTop: $(hash).offset().top

      }, 900, function(){

   

        // Add hash (#) to URL when done scrolling (default click behavior)

        window.location.hash = hash;

      });

    } // End if

  });

  

  $(window).scroll(function() {

    $(".slideanim").each(function(){

      var pos = $(this).offset().top;



      var winTop = $(window).scrollTop();

        if (pos < winTop + 600) {

          $(this).addClass("slide");

        }

    });

  });

})

</script>



</body>

</html>

