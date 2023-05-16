<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inter-Network</title>
    <script
      src="https://kit.fontawesome.com/0a4f5afbb3.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,100&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  
  <?php
  $page = 'regi';

  ?>


  <body>
    <header>
    <?php include '../components/navbar.php' ?>
      <script src="../js/index.js"></script>
    </header>

    <section class="regi-form">
      <h2>Staňte sa členom Inter-Network</h2>
      <form action="">
        <label for="">Meno</label>
        <input type="text" />

        <label for="">Ste</label>
        <div>
          <input type="radio" id="student" name="age" value="student" />
          <label for="">Študent</label>
        </div>

        <div>
          <input type="radio" id="adult" name="age" value="adult" />
          <label for="">Dospelý</label>
        </div>

        <div>
          <input type="radio" id="senior" name="age" value="senior" />
          <label for="">Senior</label>
        </div>

        <label for="">Telefonné čislo</label>
        <input type="text" />

        <label for="">E-mail</label>
        <input type="email" placeholder="@" />

        <label for="">Heslo</label>
        <input type="password" />

        <button>
          <a href="#">Odoslať</a>
        </button>

        <a href="zamknuta.html">Už ste členom? Prihláste sa!</a>

        
      </form>
    </section>

    <footer>
        <p>2022 Združenie Inter-Network| Všetky práva vyhradené.</p>
        <p>Vytvorené službou <span>Webnode · Cookies</span></p>
      </footer>
  </body>
</html>
