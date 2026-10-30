<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LevelUp Hardware - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="folder-container">
      <?php require_once 'header.php'; ?>
        <main>
            <section class="hero">
                <h1>High-end Gaming Gear</h1>
                <h2>In Breda</h2>
            </section>
            <section class="row">
                <div class="col text-col">
                    <p class="lead-text">Bij LevelUp Hardware draait alles om performance. Of je nu op zoek bent naar een nieuwe laptop die de nieuwste AAA-titels moeiteloos draait, of je huidige rig een professionele onderhoudsbeurt nodig heeft; wij staan voor je klaar.</p>
                    <p>In onze fysieke winkel combineren we de nostalgische sfeer van de jaren '80 arcades met de brute kracht van de hardware van morgen.</p>
                </div>
                <div class="col img-col">
                    <img src="img/laptop.webp" alt="Gaming Laptop">
                </div>
            </section>
            <h3>Waarom kiezen voor ons?</h3>
            <section class="row">
                <div class="col img-col border-glow">
                    <img src="img/storefront.png" alt="Winkel Breda">
                </div>
                <div class="col text-col">
                    <ul>
                        <li><strong>Curated Selectie:</strong> Wij verkopen alleen laptops waar we zelf achter staan. Geen concessies op bouwkwaliteit of koeling.</li>
                        <li><strong>Expert Onderhoud:</strong> Van het vervangen van koelpasta tot complexe hardware-upgrades; wij verlengen de levensduur van je machine.</li>
                        <li><strong>Persoonlijk advies:</strong> Geen standaard verkooppraatjes, maar eerlijk advies gebaseerd op jouw favoriete games en workflow.</li>
                    </ul>
                </div>
            </section>
        </main>
<button id="openNewsletterBtn">Schrijf je in voor de nieuwsbrief</button>
<div id="newsletterModal" class="modal">
    <div class="modal-content">
        <span id="closeModalBtn" class="close-btn">&times;</span>
        <h2>Nieuwsbrief Inschrijving</h2>
        <p>Blijf op de hoogte van de nieuwste hardware deals!</p>
        <form action="verwerk.php" method="POST">
            <input type="text" name="naam" placeholder="Je naam" required>
            <input type="email" name="email" placeholder="Je e-mailadres" required>
            <button type="submit">Inschrijven</button>
        </form>
    </div>
</div>
        <?php require_once 'footer.php'; ?>
    </div>
    <script src="javascript/script.js"></script>
</body>
</html>