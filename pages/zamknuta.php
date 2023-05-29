<?php
$page = 'zamk';
include '../components/head.php'
?>

<body>
    <header>
        <?php
        include '../components/navbar.php';
        ?>
        <script src="../js/index.js"></script>
    </header>

    <section class="zamk-main">
        <h2>Stránka len pre registrovaných používateľov</h2>
        <p>Táto stránka je dostupná len registrovaným používateľom. Pre zobrazenie jej obsahu sa prosím prihláste, alebo si založte nový účet.</p>
    </section>

    <section class="zamk-grid">
        <div>
            <h3>Ešte nemáte účet?</h3>
            <p>Niektoré stránky tohto webu sú dostupné len registrovaným používateľom. Vytvorte si účet ešte dnes a získajte prístup do zamknutej časti webu.</p>
            <button class="zamk-white-btn"><a href="../pages/registracia.php">Vytvoriť nový účet</a></button>
        </div>
        <div>
            
            <form action="">
            <h3>Prihlásenie</h3>
                <label for="">E-mail</label>
                <input type="email" placeholder="@" />

                <label for="">Heslo</label>
                <input type="password" />
                <button><a href="#">Prihlásiť</a></button>
                <a href="#" class="form-a">Zabudli ste heslo?</a>
            </form>
            
        </div>
    </section>
    <hr>
    <?php include '../components/footer.php'?>
</body>