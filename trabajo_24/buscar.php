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
                <p>buscar</p>
                
            </div>
        </div>
		<div class="col-12">
            <form action=""method="post" class="alinear">
                <p>que vas a buscar</p>
                <input type="text" name="buscar">
                <br>
                <input type="submit" value="por id" name="porid">
                <br>
                <input type="submit" value="por color" name="color">
                <br>
                <input type="submit" value="camisa delgada" name="delgado">
                
            </form>
            <div class='col-12'>
                <div class="resultado">
                    <?php
                        if (isset($_POST['color'])) {
                            $color = $_POST['buscar'];
                            
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname= "jaime_duarte";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            $sql = "SELECT * FROM camisas WHERE color LIKE '%$color%'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0){
                                while($row = $result -> fetch_assoc()) {
                                    echo "<div class='R1'>";
                                        echo "<p>Id</p>";
                                        echo "<input type='text' value='$row[id]' readonly>";
                                        echo "<p>color</p>";
                                        echo "<input type='text' value='$row[color]' readonly>";
                                        echo "<p>talla</p>";
                                        echo "<input type='text' value='$row[talla]' readonly>";
                                        echo "<p>precio</p>";
                                        echo "<input type='number' value='$row[precio]' readonly>";
                                        echo "<p>personaje</p>";
                                        echo "<input type='text' value='$row[personaje]' readonly>";
                                        echo "<p>fecha</p>";
                                        echo "<input type='date' value='$row[fecha]' readonly>";
                                        echo "<p>material</p>";
                                        echo "<input type='text' value='$row[material]' readonly>";
                                        echo "<p>estilo</p>";
                                        echo "<input type='text' value='$row[estilo]' readonly>";
                                        echo "<p>delgado</p>";
                                        if($row['delgado'] == 1){
                                            echo"<input type='checkbox' checked disabled>";
                                        }
                                        else{
                                            echo"<input type='checkbox' disabled>";
                                        }
                                        echo "<p>AbsorbeLaHumedad</p>";
                                        if($row['AbsorbeLaHumedad'] == 1){
                                            echo"<input type='checkbox' checked disabled>";
                                        }
                                        else{
                                            echo"<input type='checkbox' disabled>";
                                        }
                                        echo "<p>TejidoMezclado</p>";
                                        if($row['TejidoMezclado'] == 1){
                                            echo"<input type='checkbox' checked disabled>";
                                        }
                                        else{
                                            echo"<input type='checkbox' disabled>";
                                        }
                                        echo "<p>LavarAMaquina</p>";
                                        if($row['LavarAMaquina'] == 1){
                                            echo"<input type='checkbox' checked disabled>";
                                        }
                                        else{
                                            echo"<input type='checkbox' disabled>";
                                        }
                                    echo "</div>";
                                }
                            } 
                            else {
                            echo "<div class='colocar'>";
                                echo "<input  type='text' value='no se encontraron coincidencias'  readonly>";
                            echo "</div>";
                            }
                            $conn->close();
                        } 
                    
                ?>
                <?php
                    if (isset($_POST['delgado'])) {
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname= "jaime_duarte";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT * FROM camisas WHERE delgado = 1";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result -> fetch_assoc()) {
                                echo "<div class='R1'>";
                                    echo "<p>Id</p>";
                                    echo "<input type='text' value='$row[id]' readonly>";
                                    echo "<p>color</p>";
                                    echo "<input type='text' value='$row[color]' readonly>";
                                    echo "<p>talla</p>";
                                    echo "<input type='text' value='$row[talla]' readonly>";
                                    echo "<p>precio</p>";
                                    echo "<input type='number' value='$row[precio]' readonly>";
                                    echo "<p>personaje</p>";
                                    echo "<input type='text' value='$row[personaje]' readonly>";
                                    echo "<p>fecha</p>";
                                    echo "<input type='date' value='$row[fecha]' readonly>";
                                    echo "<p>material</p>";
                                    echo "<input type='text' value='$row[material]' readonly>";
                                    echo "<p>estilo</p>";
                                    echo "<input type='text' value='$row[estilo]' readonly>";
                                    echo "<p>delgado</p>";
                                    if($row['delgado'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>AbsorbeLaHumedad</p>";
                                    if($row['AbsorbeLaHumedad'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>TejidoMezclado</p>";
                                    if($row['TejidoMezclado'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>LavarAMaquina</p>";
                                    if($row['LavarAMaquina'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                echo "</div>";
                            }
                        } 
                        else {
                            echo "<div class='colocar'>";
                                echo "<input  type='text' value='no se encontraron coincidencias'  readonly>";
                            echo "</div>";
                        }
                        $conn->close();
                    } 
                    
                ?>
                <?php
                    if (isset($_POST['porid'])) {
                        $id = $_POST['buscar'];
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname= "jaime_duarte";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT * FROM camisas WHERE id LIKE '%$id%'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0){
                            while($row = $result -> fetch_assoc()) {
                                echo "<div class='R1'>";
                                    echo "<p>Id</p>";
                                    echo "<input type='text' value='$row[id]' readonly>";
                                    echo "<p>color</p>";
                                    echo "<input type='text' value='$row[color]' readonly>";
                                    echo "<p>talla</p>";
                                    echo "<input type='text' value='$row[talla]' readonly>";
                                    echo "<p>precio</p>";
                                    echo "<input type='number' value='$row[precio]' readonly>";
                                    echo "<p>personaje</p>";
                                    echo "<input type='text' value='$row[personaje]' readonly>";
                                    echo "<p>fecha</p>";
                                    echo "<input type='date' value='$row[fecha]' readonly>";
                                    echo "<p>material</p>";
                                    echo "<input type='text' value='$row[material]' readonly>";
                                    echo "<p>estilo</p>";
                                    echo "<input type='text' value='$row[estilo]' readonly>";
                                    echo "<p>delgado</p>";
                                    if($row['delgado'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>AbsorbeLaHumedad</p>";
                                    if($row['AbsorbeLaHumedad'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>TejidoMezclado</p>";
                                    if($row['TejidoMezclado'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                    echo "<p>LavarAMaquina</p>";
                                    if($row['LavarAMaquina'] == 1){
                                        echo"<input type='checkbox' checked disabled>";
                                    }
                                    else{
                                        echo"<input type='checkbox' disabled>";
                                    }
                                echo "</div>";
                            }
                        } 
                        else {
                            echo "<div class='colocar'>";
                                echo "<input  type='text' value='no se encontraron coincidencias'  readonly>";
                            echo "</div>";
                        }
                        $conn->close();
                    } 
                    
                    ?>
                </div>
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