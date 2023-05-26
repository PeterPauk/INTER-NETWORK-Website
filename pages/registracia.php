<?php
  $page = 'regi';
  include '../components/head.php';
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

        <a href="../pages/zamknuta.php" class="regi-link">Už ste členom? Prihláste sa!</a>

        
      </form>
    </section>

    <?php include '../components/footer.php'?>
  </body>
</html>
