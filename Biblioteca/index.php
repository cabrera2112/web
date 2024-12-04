<?php include("templates/cabecera2.php"); ?>

<style>
    /* Importing fonts from Google */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    /* Reseting */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-image:url(img/cbtis.png) ;
    }

    .wrapper {
        max-width: 350px;
        min-height: 500px;
        margin: 80px auto;
        padding: 40px 30px 30px 30px;
        background-color: #9ba09e;
        border-radius: 15px;
        box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
    }

    .logo {
        width: 80px;
        margin: auto;
    }

    .logo img {
        width: 100%;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0px 0px 3px #5f5f5f,
                    0px 0px 0px 5px #ecf0f3,
                    8px 8px 15px #a7aaa7,
                    -8px -8px 15px #fff;
    }

    .wrapper .name {
        font-weight: 600;
        font-size: 1.4rem;
        letter-spacing: 1.3px;
        padding-left: 10px;
        color: #555;
    }

    .wrapper .form-field input {
        width: 100%;
        display: block;
        border: none;
        outline: none;
        background: none;
        font-size: 1.2rem;
        color: #666;
        padding: 10px 15px 10px 10px;
    }

    .wrapper .form-field {
        padding-left: 10px;
        margin-bottom: 20px;
        border-radius: 20px;
        box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
    }

    .wrapper .form-field .fas {
        color: #555;
    }

    .wrapper .btn {
        box-shadow: none;
        width: 100%;
        height: 40px;
        background-color: #03A9F4;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1,
                    -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }

    .wrapper .btn:hover {
        background-color: #039BE5;
    }

    .wrapper a {
        text-decoration: none;
        font-size: 0.8rem;
        color: #03A9F4;
    }

    .wrapper a:hover {
        color: #039BE5;
    }

    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px;
        }
    }
</style>

<div class="wrapper">
    <div class="logo">
        <img src="img/logo.png" alt="" style="width:100px; height:100px;">
    </div>
    <div class="text-center mt-4 name">
        Sistema de Biblioteca Escolar Cbtis No. 187
    </div>
    <form class="p-3 mt-3" action="index.php" method="POST">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="username" id="username" placeholder="Nombre de Usuario" required>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn mt-3">Iniciar Secion</button>
    </form>
    <div class="text-center fs-6">
       <!-- <a href="#">Forget password?</a> or <a href="#">Sign up</a> -->
    </div>
</div>
<?php include("templates/pie.php"); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'uriel' && $password === '1234') {
        echo "<script>window.location.href='menu.php';</script>";
    } else {
        echo "<script>
                alert('Usuario y/o contraseÃ±a incorrectos');
                document.getElementById('username').value = '';
                document.getElementById('password').value = '';
              </script>";
    }
}
?>