<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title>MINECRAFT</title>
		<link rel="stylesheet" href="css/agregar.css">
        <script src="js/javascript.js"></script>
    </head>
    <body>
        <div class="col-12">
            <div class="header">
        <div class="group4">
                <div class="logo">
                    <a href="index.php"><img src="https://cdn.worldvectorlogo.com/logos/minecraft.svg" height="50" hspace="100" vspace="100"></a>
                </div>
                <div class="nav">
                    <ul>
                        <li><a href='agregar.php'>agregar</a></li>
                        <li><a href='eliminar.php'>eliminar</a></li>
                        <li><a href='actualizar.php'>actualizar</a></li>
                        <li><a href='buscar.php'>buscar</a></li>
                        <li><a href='instalar.php'>instalar</a></li>
                    </ul>					   
                    </div>
                </div>    
            </div>   
        </div>
        <div class="col-12">
            <div class="aside"><p>instalacion</p></div>
        </div>
        <div class="col-12">
            <form action="" method='post' class="alinear">
                <input type="submit" name='prueba' value='prueba MySQL'>
                <br>
                <input type="submit" name='crear_db' value='crear base de datos'>
                <br>
                <input type="submit" name='borrar_db' value='borrar base de datos'>
                <br>
                <input type="submit" name='crear_tabla' value='crear tabla'>
                <br>
                <input type="submit" name='eliminar_tabla' value='eliminar tabla'>
                <br><br>
            </form>
            <div class="alinear">
                <?php
                if (isset($_POST['prueba'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";

                $conn = new MySQLi($servername, $username, $password);

                if ($conn->connect_error) {
                    die("conexion fallida " . $conn->connect_error);
                }
                echo "<input class='colocar' type='text' value='la conexion existe'  readonly>";
                $conn->close();
                }
		    ?> 
            <?php
                if (isset($_POST['crear_db'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jaime_duarte";

                $conn = new mysqli($servername, $username, $password);

                if ($conn->connect_error) {
                    die("conection failed: " . $conn->connect_error);
                }

                $sql = "CREATE DATABASE $dbname";
                
                if ($conn->query($sql) === TRUE){
                    echo "<input class='colocar' type='text' value='la base de datos ha sido creada correctamente'  readonly>";
                } else {
                    echo "<input class='colocar' type='text' value='ha ocurrido un error al crear la base de datos'  readonly>";
                }
                $conn->close();
                }
		    ?>
            <?php
                if (isset($_POST['borrar_db'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jaime_duarte";

                $conn = new mysqli($servername, $username, $password);

                $sql = "DROP DATABASE $dbname";

                if ($conn->query($sql) === TRUE){
                    echo "<input class='colocar' type='text' value='la base de datos ha sido borrada correctamente'  readonly>";
                } else {
                    echo "<input class='colocar' type='text' value='ha ocurrido un error al borrar la base de datos'  readonly>";
                }
                $conn->close();
                }
		    ?>
            <?php
                if (isset($_POST['crear_tabla'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jaime_duarte";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "CREATE TABLE camisas(
                    id INT NOT NULL AUTO_INCREMENT,
                    color VARCHAR(255) NOT NULL,
                    talla VARCHAR(255) NOT NULL,
                    precio FLOAT NOT NULL,
                    personaje VARCHAR(255) NOT NULL,
                    fecha DATE NOT NULL,
                    material VARCHAR(255) NOT NULL,
                    estilo VARCHAR(255) NOT NULL,
                    delgado BOOLEAN NOT NULL,
                    AbsorbeLaHumedad BOOLEAN NOT NULL,
                    TejidoMezclado BOOLEAN NOT NULL,
                    LavarAMaquina BOOLEAN NOT NULL,
                    PRIMARY KEY(id))";

                if ($conn->query($sql) === TRUE){
                    echo "<input class='colocar' type='text' value='la tabla ha sido creada satisfactoriamente'  readonly>";
                } else {
                    echo "<input class='colocar' type='text' value='ha ocurrido un error al crear la tabla'  readonly>";
                }
                $conn->close();
                }
		    ?>
            <?php
                if (isset($_POST['eliminar_tabla'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "jaime_duarte";

                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "DROP TABLE camisas";

                if ($conn->query($sql) === TRUE){
                    echo "<input class='colocar' type='text' value='la tabla ha sido borrada correctamente'  readonly>";
                } else {
                    echo "<input class='colocar' type='text' value='ha ocurrido un error al borrar la tabla'  readonly>";
                }
                $conn->close();
                }
		    ?>
        </div>
        

            
        </div>
		<div class="col-12">
            <div class="footer">
                <p>sigue a minecraft en</p>
                <div class="f3">
                    <img src="img/s1.png" alt="">
                    <img src="img/s2.png" alt="">
                    <img src="img/s3.png" alt="">
                    <img src="img/s4.png" alt="">
                </div>
                <div> 
                    <p>El juego multiplataforma está disponible en Xbox One, Playstation 4, Nintendo Switch, iOS, Android y Windows 10.</p> 
                    <p>El juego multijugador requiere una cuenta de Microsoft. Es necesario Xbox Live Gold para el juego multijugador en línea en Xbox One.</p> 
                    <p>Se requiere una suscripción a PlayStation Plus para el juego multijugador en Playstation 4.</p> 
                    <p>Es necesaria una suscripción a Nintendo Switch Online para el juego multijugador en línea en Nintendo Switch.</p>
                </div>
            
            </div>
        </div>			
    </body>
</html>