<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PMTO</title>

		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="css/print.css" rel="stylesheet" media="print">
        <link href="css/default.css" rel="stylesheet">
    	<link href="css/all.min.css" rel="stylesheet">
    	<script src="js/jquery.min.js"></script>
    	
	</head>
	<body style="background-color: #274D6B">
		<div class="container" align="center">
		<div class="card">
  			<div class="card-header">
  			<div class="row">
  				<div class="col-md d-flex justify-content-center">
  					<img src="images/pmto.png" class="img-responsive" alt="Image">
  				</div>
  				<div class="col-md d-flex justify-content-center">
  					<img src="images/cpd.png" class="img-responsive" alt="Image" width="180px" height="54px">
  				</div>
  			</div>
  			</div>
  		<div class="card-body">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="embed-responsive embed-responsive-16by9">
					<video id="video">
      					<source src="videos/video.mp4" type="video/mp4" />
    				</video>
				</div>
			<!--
			<video id="video" width="420" height="375">
      			<source src="videos/video.mp4" type="video/mp4" />
    		</video>
    		-->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
				<button onclick="play(); executar(this)" class="btn btn-default"><img src="images/play.png" class="img-responsive" alt="Image" width="30px" height="30px"></button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
				<form method="post" action="$PORTAL_ACTION$" id="mame" style="display: none;">
   					<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
   					<input name="accept" type="submit" value="Clique aqui para Navegar!" class="btn btn-danger">
				</form>
			</div>
		</div>
		</div>

		<div class="panel panel-default" style="padding-top: 30px;">
			<div class="panel-footer">
				<div class="footer-copyright text-center py-3">© 2019 Copyright:
    				<a href="https://teofilootoni.mg.gov.br">Prefeitura Municipal de Teófilo Otoni</a>
  				</div>
			</div>
		</div>
		
		</div>
<script>
      // declarando a variavel video
      var myVideo = document.querySelector("#video");
      // Função que executa o video
      function play(){
        if(myVideo.paused)
          myVideo.play();

       }
      function executar(v){
 		var div = document.getElementById("mame"); // Pega o objeto do elemento DIV
 		var tempo = myVideo.duration; // pega o tamanho do video

 		window.setTimeout(function() { // Inicia a contagem pelo valor da variavel (tempo)
  		div.style.display = "";  // Remove a proriedade que esta escondendo a DIV
 		}, (tempo* 1000)); 
	  }
    </script>
		
		<script src="functions.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.bundle.js"></script>
	</body>
</html>