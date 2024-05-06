<html>
<head>
  
  
    <title>Formulario de registros</title>
     <link rel="stylesheet" type="text/css" href="inicio.css"/>
     <script type="text/javascript" src="jquery.js"></script>
     
</head>
<body>
    <ul class="navbar">
   <div class="menu"><a href="index.html">LICORERIA</a></div>
    <div class="menu"><a href="index2.html">TRAGOS</a></div>
     <div class="menu"><a href="index3.html">CERVEZA</a></div>
     <div class="menu"><a href="index4.php">FORMULARIO</a></div>
    </ul>
 
    
<body>
    <h1>REGISTRATE</h1>
    <h2>Formulario de registros</h2>
        <form action="
        
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email= $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
   
    

    $servername = "localhost:3306";
    $username = "root"; 
    $password = "";
    $dbname = "licoreria";

    $conn = new mysqli($servername, $username, $password, $dbname);
    echo '<link rel="stylesheet" type="text/css" href="inicio.css">';
 
 
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

     $sql = "INSERT INTO venta (nombre, apellidos, email, contraseña, telefono,sexo) VALUES ('$nombre', '$apellidos','$email', '$contraseña', '$telefono', '$sexo')";

     if ($conn->query($sql) === TRUE) {
        echo "Se ha registrado exitosamente";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $conn->close();
    echo '<br><a href="index4.php"><button>Volver al Formulario</button></a>';
}
?>

        
        " method="post" onsubmit="return Validar();">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" value="" onblur="Validar();"><br>
            <label>Apellidos:</label><br>
            <input type="text" name="apellidos" id="apellidos" value="" onblur="Validar();"><br>
            <label>correo:</label><br>
            <input type="text" name="email" id="email" value="" onblur="Validar();"><br>
            <label>contraseña:</label><br>
            <input type="password" name="contraseña" id="contraseña" value="" onblur="Validar();"><br>
            <label>Telefono:</label><br>
            <input type="text" name="telefono" id="telefono" value="" onblur="Validar();"><br>
            

            <h4>Sexo</h4>
            <h5><input type="radio" name="sexo" value="Hombre" /> femenino</h5>
            <h5><input type="radio" name="sexo" value="Mujer" /> masculino</h5>

            <div class="seccion">
            <h4>Preferencias:</h4>
            <p><input type="radio" name="Licoreria" value="si"/>Licoreria</p>
            <p><input type="radio" name="Cerveza" value="si"/>Cerveza</p>
            <p><input type="radio" name="Tragos" value="si"/>Tragos</p>
            <p><input type="radio" name="Cigarros" value="si"/>Cigarros</p>

           
                
                <label for="lang">Revisiones</label>
                
                
                <div id="alert" class="alert"></div>
                <div id="alertRevisiones" class="alert"></div>

                <input type="submit" value="Enviar">
            </form>

               
                </script>
            
        </div> 
        </div>
    
</body>
    </body>
</html>