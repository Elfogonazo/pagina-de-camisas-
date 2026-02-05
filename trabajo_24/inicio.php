<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
        <title>minecraft</title>
		<link rel="stylesheet" href="css/registro.css">
        <script src="js/javascript.js"></script>
    </head>
    <body>
        <div class="col-12">
            <form action="" method='post' class='acceso'>
            <img src="https://cdn.worldvectorlogo.com/logos/minecraft.svg" height="50" hspace="100" vspace="100"></a>
                <div class="forma">                    
                    <label>usuario</label>
                    <br>
                    <input type="text" name="usuario">
                    <br>
                    <label>contraseña</label>
                    <br>
                    <input type="password" name="contraseña">
                    <br>
                    <input type="submit" name='login' value='iniciar sesion'>
                </div>    
            </form>	
        </div>
    </body>
</html>
<?php
    if(isset($_POST['login'])){
        header('location: index.php');
    }
?>
<?php
    if(isset($_POST['login2'])){
        $contraseña = $_POST['contraseña'];
        $usuario = $_POST['usuario'];
        if($contraseña == '123' && $usuario == 'admin'){
            header('location: index.php');
        }
    }
?>