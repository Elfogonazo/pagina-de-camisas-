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
                        <a href="index.php"><img src="https://cdn.worldvectorlogo.com/logos/minecraft.svg" height="50px"></a>
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
                <p>agregar</p>
            </div>
        </div>
        
        <div class="col-12">
                <div class="formulario">
                    <form action="" method="post" class="buscar">
                        <div class="group2">
                            <label><p>color de camisa</p></label>
                            <input type="text" name="color" required>
                            <label><p>talla</p></label>
                                <select name="talla">
                                    <option value="XXS">XXS</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                </select>
                            <label><p>Precio</p></label>
                            <input type="number" name="precio" step="any" required>
                            <label><p>personaje</p> </label>
                                <select name="personaje" id="">
                                    <option value="enderman">enderman</option>
                                    <option value="creeper">creeper</option>
                                    <option value="cerdo">cerdo</option>
                                    <option value="steve">steve</option>
                                </select>
                            <label><p>fecha de fabricacion</p></label>
                            <input type="date" name="fecha" required>
                            <label><p>detalles de producto</p></label>
                            <div class="group5">
                                <p><input type="checkbox" name="delgado"> delgado</p>
                                    
                                <p><input type="checkbox" name="AbsorbeLaHumedad"> Absorbe Humedad</p>
                                    
                                <p><input type="checkbox" name="TejidoMezclado"> Tejido Mezclado</p>
                                    
                                <p><input type="checkbox" name="LavarAMaquina"> Lavar A Maquina</p>
                            </div>
                            <label>estilo</label>
                            <div class="group5">
                                <p><input type="radio" name="estilo" value="niño" required> niño</p>
                                <p><input type="radio" name="estilo" value="hombre"> hombre</p>
                                <p><input type="radio" name="estilo" value="mujer" > mujer</p>
                                <p><input type="radio" name="estilo" value="mujer"> mujer</p>
                            </div>
                            <label><p>material</p></label>
                            <input type="text" name="material">
                            <br>
                            <input type="submit"name="agregar" value="agregar" >
                            <?php
                            if (isset($_POST['agregar'])) {
                                $color = $_POST['color'];
                                $talla = $_POST['talla'];
                                $precio = $_POST['precio'];
                                $personaje = $_POST['personaje'];
                                $fecha = $_POST['fecha'];
                                $material = $_POST['material'];
                                $estilo = $_POST['estilo'];

                                if(isset($_POST["delgado"]))
                                    $delgado = true;
                                else
                                    $delgado = false;
                                if(isset($_POST["AbsorbeLaHumedad"]))
                                    $AbsorbeLaHumedad = true;
                                else
                                    $AbsorbeLaHumedad = false;
                                if (isset($_POST["TejidoMezclado"]))
                                    $TejidoMezclado = true;
                                else
                                    $TejidoMezclado = false;
                                if(isset($_POST["LavarAMaquina"]))
                                    $LavarAMaquina = true;
                                else
                                    $LavarAMaquina = false;
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "jaime_duarte";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $sql = "INSERT INTO camisas(color, talla, precio, personaje, fecha, material,estilo , delgado, AbsorbeLaHumedad, TejidoMezclado, LavarAMaquina)
                                VALUES('$color', '$talla', '$precio', '$personaje', '$fecha', '$material','$estilo' , '$delgado', '$AbsorbeLaHumedad', '$TejidoMezclado', '$LavarAMaquina')";

                                if ($conn->query($sql) === TRUE){
                                    echo "<br>";
                                    echo "<input type='text' value='se ha registrado correctamente' readonly>";
                                } else {
                                    echo "<input type='text' value='ha ocurrido un error en el registro' readonly>";
                                }
                                $conn->close();
                            } 
                        
                        ?>
                        </div>
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
