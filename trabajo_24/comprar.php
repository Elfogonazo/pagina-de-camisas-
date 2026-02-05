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
                <div class="group6">
                    <div class="logo">
                        <a href="index.php"><img src="https://cdn.worldvectorlogo.com/logos/minecraft.svg" height="50" hspace="100" vspace="100"></a>
                    </div>
                    <div class="nav">
                        <ul>
                            <li><a href='mercancia.php'>mercancia</a></li>
                            <li><a href='inicio.php'>inicio de sesion</a></li>
                            <li><a href='agregar.php'>camisas</a></li>
                        </ul>					   
                    </div>
                </div>    
            </div>    
        </div>
        <div class="col-12">
            <div class="aside">
                <p>comprar</p>
            </div>
            <div class="buscar">
                <form action="" method="post" class="group2">
                    <label><p>color de camisa</p></label>
                    <input type="text" name="color" required>
                    <label><p>talla</p></label>
                        <select name="talla" id="">
                            <option value="XXS">XXS</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                        </select>
                    <label><p>Precio</p></label>
                    <input type="number" name="precio" required>
                    <label><p>personaje</p> </label>
                        <select name="personaje" id="">
                            <option value="enderman">enderman</option>
                            <option value="creeper">creeper</option>
                            <option value="cerdo">cerdo</option>
                            <option value="steve">steve</option>
                        </select>
                    <label><p>fecha de entrega estimada</p></label>
                    <input type="date" name="fecha" required>
                    <label><p>Estilo</p></label>
                    <div class="group3">
                        <p><input type="checkbox" name="nino"> niño</p>
                            
                        <p><input type="checkbox" name="hombre"> hombre</p>
                            
                        <p><input type="checkbox" name="mujer"> mujer</p>
                            
                        <p><input type="checkbox" name="unisex"> unisex</p>
                    </div>
                    <label>envio rapido</label>
                    <div class="group5">
                        <p><input type="radio" name="envio" value="si" required> si</p>
                        <p><input type="radio" name="envio" value="no"> no</p>
                    </div>
                    <label><p>puntas por pulgada</p></label>
                    <input type="number" name="ppp">
                    <br>
                    <input type="submit"name="agregar" value="agregar" >
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