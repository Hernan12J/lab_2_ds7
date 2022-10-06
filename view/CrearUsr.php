<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro&display=swap" rel="stylesheet">

    <title>Crear Usuario</title>

    <script>
    function ComprobarClave(){
        clave1 = document.formulario.password.value
        clave2 = document.formulario.repassword.value

        if (clave1 != clave2){
        alert("Las dos claves no son iguales...");
        return false;}
    } 

</script>
  </head>
  <body class="bg-dark">
   <section>
    <div class="col-lg-12 px-lg-5 pt-lg-4 pb-lg-3 p-4">
        <h3 class="font-weight-bold mb-4 text-center">Crear Usuario</h3>
        
        <form name="formulario" class="form-signin" method="get" action="../php/procesar.php" onSubmit="return ComprobarClave()">
        <p class="<?php if (isset ($_GET['msg'])) echo $_GET['t'];?>"> <?php if (isset ($_GET['msg'])) echo $_GET['msg'];?> </p>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label font-weight-bold">Nombre</label>
                          <input Required type="text" class="form-control bg-dark-x border-0" placeholder="Ingresa su nombre" id="nombre" name="nombre" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Apellido</label>
                          <input Required type="text" class="form-control bg-dark-x border-0" placeholder="Ingresa su apellido" id="apellido" name="apellido">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                          <input Required type="email" class="form-control bg-dark-x border-0" placeholder="Ingresa tu Email" id="email" name="email" aria-describedby="emailHelp">
                          
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                          <input Required type="password" class="form-control bg-dark-x border-0" placeholder="Ingresa tu contraseña" id="password" name="password">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Confirme su contraseña</label>
                          <input Required type="password" class="form-control bg-dark-x border-0" placeholder="Ingresa su contraseña de nuevo" id="repassword" name="repassword">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" onClick="comprobarClave()">Crear cuenta</button>
                      </form>
                      <div class="d-flex justify-content-center links">
      ¿Ya tiene cuenta? - <a href="../index.php" class="ml-2">Login</a>
    </div>

    </div>


   </section>

    <footer>
        <h5 class="text-center">Hernán Hernández 1LS-131</h5>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>