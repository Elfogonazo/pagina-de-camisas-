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
            <div class="aside">
                <p>Eliminar</p>
            </div>
                <form action="" method="post" class="alinear">
                    <label><p>valor</p></label>
                    <input type="text" name="valor" required>
                    <br>
                    <input type="submit" value="Por ID" name="id">
                    <input type="submit" value="Por color" name="color">
                    <?php
                    if (isset($_POST['id'])) {

                        $valor = $_POST['valor'];

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "jaime_duarte";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "DELETE FROM camisas WHERE id = $valor";

                        if ($conn->query($sql) === TRUE){
                            echo "<input class='R1' type='text' value='el registro se ha borrado exitosamente' readonly>";
                        } else {
                            echo "<input class='R1' type='text' value='ha ocurrido un error al borrar el regitro' readonly>";
                        }
                        $conn->close();
                    } 
                ?> 
                <?php
                    if (isset($_POST['color'])) {

                        $valor = $_POST['valor'];

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "jaime_duarte";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "DELETE FROM camisas WHERE color like '%$valor%'";

                        if ($conn->query($sql) === TRUE){
                            echo "<input class='R1' type='text' value='el registro se ha borrado exitosamente' readonly>";
                        } else {
                            echo "<input class='R1' type='text' value='ha ocurrido un error al borrar el regitro' readonly>";
                        }
                        $conn->close();
                    } 
                ?> 
                </form>
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

