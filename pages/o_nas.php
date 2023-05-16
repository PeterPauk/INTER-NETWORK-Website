<?php 
 $page = 'o_nas';
include '../components/head.php' 
?>


 
<body>
    <header>
    <?php 
    include '../components/navbar.php'; 
    ?>
          <script src="../js/index.js"></script>
    </header>
    

    <section class="onas">
      <h2>O Nás</h2>
      <hr>
      <div class="prečo">
        <img src="../images/vermont_based_support_team-scaled.jpg" alt="employees talking">
        <div>
          <h3>Prečo sme vlastne tu?</h3>
          <p>
            Súčasný stav sveta nás presvedčil zakročiť do diania a pokúsiť sa zmeniť osud ľudstva a kultúry. Moderná doba, ktorá potrebuje rozumné technológie na to, aby sme ako ľudstvo boli schopní urobiť pokrok, je závislá od ľudí, ktorí sú pripravený sa postaviť na čelo.
          </p>
        </div>
      </div>
    </section>

    <section class="kto-sme">
      <h2>Kto sme?</h2>
      <hr>
      <div class="kto-grid">
        <div>
          <p>Sme kolektív, ktorý sa spolu podiela na tvorbe služieb, ktorými dokážeme pomocť širšiemu okoliu. </p>
          <img src="../images/working-in-the-it-industry-1024x576.jpg" alt="people looking at monitor">
        </div>
        <div>
          <img src="../images/tech-equipment.jpg" alt="tech equipment">
          <p class="p-2">Možete rátať s obnovením vašeho zariadenia, ked si od nás vyžiadate technickú alebo odbornú pomoc.</p>
        </div>
      </div>
    </section>

    <section class="kocky">
      <div class="koc1">
        <p>Kolektív</p>
      </div>
      <div class="koc2">
        <p>Vybavenie</p>
      </div>
      <div class="koc3">
        <p>Vynaliezavosť</p>
      </div>
      <div class="koc4">
        <p>Koordinácia</p>
      </div>
    </section>

    <section class="kontakt"> 
      <h2>Chcete nás kontaktovať?</h2>
      <button><a href="../pages/kontakt.html">Ozvite sa nám!</a></button>
    </section>

    <?php include '../components/footer.php'?>
  
</body>
</html>