 <?php
  $page = 'kontakt';
  include '../components/head.php';
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
      <button><a href="../pages/zamknuta.php">Odoslať</a></button>
    </div>
    </section>

    <?php include '../components/footer.php'?>
    
    
</body>
</html>