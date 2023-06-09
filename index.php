<?php 
$page = 'home';
include './components/head.php' 
?>


<body>
  <header class="main-header">
    <?php include './components/nav_index.php' ?>

    <div class="title">
      <div>
        <h1>INTER-NETWORK</h1>
        <hr />
        <p>Tvorme lepšie podmienky</p>
      </div>
    </div>
  </header>

  <script src="./js/index.js"></script>
  <main>
    <section class="first-card">
      <div>
        <h3>Nový začiatok</h3>
        <p>
          Prechádzky svetom IT sú známe obtiažnosťou, ktoré poskytujú
          cestujúcím. Pri kontakte s komplikovanými problémami je potrebné sa
          obrátiť na pomocnú ruku. Naše služby slúžia ako kľúč od brány, ktorá
          stojí medzi Vami a funkčnými internetovými prostriedkami.
          <br /><br />
          Je dôležité vedieť čo človek chce a potom mu je možné poradiť a
          zrealizovať jeho predstavy za pomoci našich znalostí, ktoré Vám
          ponúkame.
        </p>
      </div>
      <img src="./images/technology-company.jpg" alt="">
    </section>

    <section class="services">
      <h3>Naše služby</h3>
      <hr />
      <div class="services-grid">
        <div class="services-card">
          <img src="./images/web-design-best-practices-1024x512.jpg" alt="ffe" />
          <h4>Web Design</h4>
          <p>
            Webovské stránky presne podľa Vaších požiadaviek, pokiaľ ale
            neviete čo chcete aj tu sa Vám pokusíme pomôcť naším návrhom.
          </p>
          <hr />
          <button><a href="./pages/o_nas.php">Zistiť Viac</a></button>
        </div>
        <div class="services-card">
          <img src="./images/juanjo-jaramillo-mZnx9429i94-unsplash-scaled.jpg" alt="ffe" />
          <h4>Programovanie</h4>
          <p>
            Programovanie aplikácií pod Windows v Delphi, Linux GCC. Aplikácie
            na kľúč. Pozrite si referencie v tejto oblasti.
          </p>
          <hr />
          <button><a href="./pages/o_nas.php">Zistiť Viac</a></button>
        </div>
        <div class="services-card">
          <img src="./images/what-is-web-hosting-1.jpg" alt="ffe" />
          <h4>Web Hosting</h4>
          <p>
            Hosting nie len Vašich stránok, 24 hodinový dohľad alebo
            poskytnutie server housingu, prípadne prenájom celého servera.
          </p>
          <hr />
          <button><a href="./pages/o_nas.php">Zistiť Viac</a></button>
        </div>
      </div>
    </section>

    <section class="galeria">
      <div>
        <h2>Fotogaléria</h2>
        <div class="galeria-grid">
          <img src="./images/pexels-canva-studio-3153201-scaled.jpg" alt="people" />
          <img src="./images/images.jfif" alt="people" />
          <img src="./images/istockphoto-1407354641-170667a.jpg" alt="people" />
          <img src="./images/section8-company-do-business.jpg" alt="people" />
          <img src="./images/tech-names-woman.jpg" alt="people" />
          <img src="./images/0x0.jpg" alt="people" />
        </div>
      </div>
    </section>

    <section class="kvality">
      <h2>Naše Kvality</h2>
      <hr>
      <div class="kvality-grid">
        <div>
          <div>
            <i class="fa-solid fa-magnifying-glass"></i>
            <h3>Vyhľadávanie talentu</h3>
          </div>
          <p>Do nášho kolektívu prijímame usilovných členov, ktorým poskytneme priestor pre rozvíjanie ich zručností.</p>
        </div>
        <div>
          <div>
            <i class="fa-solid fa-guitar"></i>
            <h3>Priateľský kolektív</h3>
          </div>
          <p>Príjemné prostredie, kvôli ktorému zabudnete, že ste tu vlastne prišli kvôli problému.</p>
        </div>
        <div>
          <div>
            <i class="fa-regular fa-lightbulb"></i>
            <h3>Riešenie problémov</h3>
          </div>
          <p>Vaše technické problémy s radosťou hravo vyriešime za Vás. </p>
        </div>
        <div>
          <div>
            <i class="fa-solid fa-computer"></i>
            <h3>Moderné vybavenie</h3>
          </div>
          <p>Ako jedna z málo firiem na Slovensku používame najmodernejšie prostriedky a riadime sa podľa najnovsích protokolov.</p>
        </div>
        <div>
          <div>
            <i class="fa-solid fa-chess"></i>
            <h3>Logické operácie</h3>
          </div>
          <p>Sme vycvičení na riešenie zložitejších logických problémov, nad ktorými si už nebudete musieť lámať hlavu.</p>
        </div>
        <div>
          <div>
            <i class="fa-solid fa-trophy"></i>
            <h3>Vysoké štandardy</h3>
          </div>
          <p>Ako jednotka na trhu nesieme veľmi veľkú zodpovednosť pri našej práce.</p>
        </div>

      </div>
    </section>

    <section class="novinky">
      <div>
        <h2>Novinky</h2>
        <p class="novinky-p">Tie najaktuálnejšie novinky zo sveta Inter-Network. Nedovoľte si zmeškať aktuality, ktoré sa možno aj Vás týkajú. </p>
        <hr>
      </div>
      <div class="novinky-grid">
        <div class="novinky-card">
          <img src="./images/5730267372_2a5c4b52ab_o.jpg" alt="">
          <h3><i class="fa-solid fa-lock"></i><a href="./pages/zamknuta.php">Mikročipy od Bill Gatesa spôsobujú nočné videnie?</a></h3>
          <p class="date"><em>10.12.2022</em></p>
          <p class="fx">Vedecké výskumy potvrdili, že mikročipy od značky Microsoft naozaj spôsobujú nočné videnie.</p>
        </div>
        <div class="novinky-card">
          <img src="./images/221203202608-elon-musk-file-120322.jpg" alt="">
          <h3><i class="fa-solid fa-lock"></i><a href="./pages/zamknuta.php">Elon Musk si odkúpil Siemens Healthineers?</a></h3>
          <p class="date"><em>8.12.2022</em></p>
          <p class="fx">Nemecká firma dnešným ránom získala nového majiteľa. Po zbankrotovaní Twitteru sa juhoafrický podnikateľ zameriava...</p>
        </div>
        <div class="novinky-card">
          <img src="./images/maxresdefault.jpg" alt="">
          <h3><i class="fa-solid fa-lock"></i><a href="./pages/zamknuta.php">Najvhodnejší programovací jazyk pre samonabíjaciu strážnu zbraň</a></h3>
          <p class="date"><em>18.11.2022</em></p>
          <p class="fx">Žijete v nebezpečnejších koncoch tohto štátu a potrebujete si dodať pocit bezpečia? Potrebujete len programovacie znalosti, senzor...</p>
        </div>
        <div class="novinky-card">
          <img src="./images/1659973285090.jfif" alt="">
          <h3><i class="fa-solid fa-lock"></i><a href="./pages/zamknuta.php">Nová konkurencia pre C++?</a></h3>
          <p class="date"><em>12.11.2022</em></p>
          <p class="fx">Programovací jazyk Carbon čoskoro prichádza na trh a mnoho ľudí sa pýta, či bude mať zmysel naďalej používať jazyk C++?</p>
        </div>
      </div>
    </section>

    <section class="člen">
      <div class="člen-grid">
        <div class="člen-text">
          <h2>Staňte sa členom</h2>
          <p>Potrebujeme Vás do tímu!</p>
          <p>Poskytnite vaše znalosti osobám, ktorí ich potrebujú a my Vám doručíme to, čo si zaslúžite.</p>
        </div>
        <div class="člen-btns">
          <a href="./pages/zamknuta.php"><button class="btn-1">Prihlásiť</button></a>
          <a href="./pages/registracia.php"><button class="btn-2">Registrovať</button></a>
        </div>
      </div>
    </section>

    <section class="refs">
      <h2>Referencie</h2>
      <hr>
      <div class="refs-grid">
        <div>
          <img src="./images/guy1.jpg" alt="employee">
          <p>Toto je tá najlepšia firma v ktorej som mohol mať tu česť pracovať. Vrelo odporúčam túto príležitosť!</p>
          <h3>Michal Trafený</h3>
          <h4>Bývalý zamestnanec</h4>
        </div>
        <div>
          <img src="./images/girl1.jpg" alt="employee">
          <p>Táto firma rozvinula moje a sny a dala môjmu kariérnemu životu smer. Už viem, že nechcem mať s IT nič spoločné.</p>
          <h3>Emanuela Kassai</h3>
          <h4>Rušňovodička</h4>
        </div>
        <div>
          <img src="./images/guy2.jpg" alt="employee">
          <p>Boli mi tu poskytnuté situácie, ktoré posunuli moje zručnosti o pár úrovni dopredu. Vrelo odporúčam!</p>
          <h3>Eugen Piotr</h3>
          <h4>Marketingový poradca</h4>
        </div>
      </div>
    </section>

    <?php include './components/footer.php'?>
    
  </main>
</body>

</html>