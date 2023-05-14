<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kontakt</title>
        <script src="https://kit.fontawesome.com/0a4f5afbb3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/main.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet"
        />
      </head>

  <?php
  $page = 'kontakt';

  ?>
<body>
    <header>
    <?php 
    include '../components/navbar.php'; 
    ?>
          <script src="../js/index.js"></script>
    </header>

   
    <section class="main-kontakt">
        <h2>Kontakt</h2>
        <p class="main-p">Chcete sa s nami spojiť? Tak neváhajte a kontaktujte!</p>
        <hr>
        <div>
        <p>Nábrežná, Kysucké Nové Mesto</p>
        <p><span>Email:</span><a href="#"> internetwork@gmail.com</a></p>
        <p><span>Tel:</span> 0955 555 554</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.6308014031606!2d18.787606576297428!3d49.30233657139577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714434cc795f2c5%3A0x382a67dba9c15cce!2zU3RyZWRuw6EgcHJpZW15c2VsbsOhIMWha29sYQ!5e0!3m2!1ssk!2ssk!4v1683548136906!5m2!1ssk!2ssk" width="1050" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="newsletter">
      <h2>Prístup k newsletteru</h2>
      <div>
      <label for="gg">E-mail</label>
      <input type="email" placeholder="@">
      <button><a href="#">Odoslať</a></button>
    </div>
    </section>

    <footer>
      <p>2022 Združenie Inter-Network| Všetky práva vyhradené.</p>
      <p>Vytvorené službou <span>Webnode · Cookies</span></p>
    </footer>
    
    
</body>
</html>