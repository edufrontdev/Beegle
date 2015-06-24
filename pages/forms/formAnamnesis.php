<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Beegle</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/master.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Project name</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li role="presentation" class="active"><a href="#">Inicio</a></li>
					<li role="presentation"><a href="#">Tour</a></li>
					<li role="presentation"><a href="#">Precios y Planes</a></li>
					<li role="presentation"><a href="#">Registrarse</a></li>
					<li role="presentation"><a href="#">Ingresar</a></li>
				</ul>
	      </div>
	    </nav>
		<div class="espacio"><br><br><br><br></div>
	    

	    <div class="container">
	      <!-- Example row of columns -->
	      <div class="col-md-12">
	      <form action="confirmacionAnamnesis.php">
	        <div class="form-group col-md-6">
	          <label for="InputNombrePaciente">Nombre Paciente</label>
	          <input type="text" class="form-control" id="InputNombrePaciente" placeholder="Nombre Paciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputRUNPaciente">RUN Paciente</label>
	          <input type="text" class="form-control" id="InputRUNPaciente" placeholder="RUN Paciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputSexoPaciente">Sexo Paciente</label>
	          <input type="text" class="form-control" id="InputSexoPaciente" placeholder="Sexo Paciente">
	        </div>
	        <div class="form-group col-md-6">
	          <label for="InputEdadPaciente">Edad Paciente</label>
	          <input type="text" class="form-control" id="InputEdadPaciente" placeholder="Edad Paciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputCursoPaciente">Curso Paciente</label>
	          <input type="text" class="form-control" id="exampleInputTelefono" placeholder="Teléfono">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputEscolaridadPaciente">Escolaridad Paciente</label>
	          <input type="text" class="form-control" id="InputEscolaridadPaciente" placeholder="EscolaridadPaciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputTrastornoAprendizaje">Trastorno Aprendizaje</label>
	          <input type="text" class="form-control" id="InputTrastornoAprendizaje" placeholder="TrastornoAprendizaje">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputNombreMadre">Nombre Madre</label>
	          <input type="text" class="form-control" id="InputNombreMadre" placeholder="NombreMadre">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputEdadMadre">Edad Madre</label>
	          <input type="text" class="form-control" id="InputEdadMadre" placeholder="EdadMadre">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputEscolaridadMadre">Escolaridad Madre</label>
	          <input type="text" class="form-control" id="InputEscolaridadMadre" placeholder="EscolaridadPaciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputNombrePadre">Nombre Padre</label>
	          <input type="text" class="form-control" id="InputNombrePadre" placeholder="NombrePadre">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputEdadPadre">Edad Padre</label>
	          <input type="text" class="form-control" id="InputEdadPadre" placeholder="EdadPadre">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputEscolaridadPadre">Escolaridad Padre</label>
	          <input type="text" class="form-control" id="InputEscolaridadPadre" placeholder="EscolaridadPaciente">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputSitActActivNormales">Actividad Normales</label>
	          <input type="text" class="form-control" id="InputSitActActivNormales" placeholder="ActivNormales">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputTranquilo">Tranquilo</label>
	          <input type="text" class="form-control" id="InputTranquilo" placeholder="Tranquilo">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputInputAmigos">Amigos</label>
	          <input type="text" class="form-control" id="InputAmigos" placeholder="Amigos">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputRelFlia">Relacion con la Familia</label>
	          <input type="text" class="form-control" id="InputRelFlia" placeholder="RelFlia">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputHabSueno">Habitos de Sueno</label>
	          <input type="text" class="form-control" id="InputHabSueno" placeholder="HabSueno">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputHabAlim">Habitos de Alimentación</label>
	          <input type="text" class="form-control" id="InputHabAlim" placeholder="HabAlim">
	        </div>
	        <div class="form-group  col-md-6">
	          <label for="InputHabEsparc">Habitos de Esparcimiento</label>
	          <input type="text" class="form-control" id="InputHabEsparc" placeholder="HabEsparc">
	        </div>
	        <div class="row">
	        	<div class="col-md-12">
	        		<button type="submit" class="btn btn-default">Submit</button>
	        	</div>
	        </div>
	      </form>
	      </div>
	      <footer>
	        <p>&copy; Company 2015</p>
	      </footer>
	    </div> <!-- /container -->


	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="../../js/bootstrap.min.js" type="text/javascript"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
</body>
</html>
