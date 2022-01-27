<meta http-equiv="Expires" content="0" /> 
<meta http-equiv="Pragma" content="no-cache" />

<script type="text/javascript">
  if(history.forward(1)){
    location.replace( history.forward(1) );
  }
</script>

<html>
<head>

<title>
</title>
<style type="text/css">
[required]{

	box-shadow: 0 0 10px 1px white;
}
invalid{

	box-shadow: 0px 0px 10px 1px red;
}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
function entrar() {
  // indicamos que se ejecuta la funcion a los 5 segundos de haberse
  // cargado la pagina
  setTimeout(clickbutton, 200);

  function clickbutton() {
    // simulamos el click del mouse en el boton del formulario
    $("#entrar").click();
  
  }
  $('#entrar').on('click',function() {
    console.log('action button clicked');
  });
}
</script>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
<body background="res1.jpg">

<center> <h1>Login</h1>
<div class="wrapper"> 
 <div id="formulariocontacto">
 <form name="primerformulario"  method="post" action="validar_login.php">
<fieldset>
Nombre Usuario: <input  type = "text"  name = "nombre" required>
<br><br>
Contraseña: <input type = "password"   name = "password" required>
<br><br>

<input type = "submit" class="btn btn-primary btn" id = "entrar" value = "Entrar"></input>
</fieldset>
</form>
</div>
</div>
</center>


</script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.4.0/annyang.min.js"></script>
    <script>
        if (annyang) {
            // Let's define our first command. First the text we expect, and then the function it should call
            var commands = {
                'entrar': function () {
                    entrar();
                },
               
               
            };
            annyang.setLanguage('es-MX');
            annyang.addCommands(commands);
            annyang.debug();
            annyang.start({ continuous: false });
        }
</script>




</body>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 

</html>