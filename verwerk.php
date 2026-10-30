<?php include 'header.php'; ?>

<main style="max-width: 800px; margin: 40px auto; padding: 20px; text-align: center;">
    
    <?php
    // Controleer of het formulier is verzonden via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Vang het e-mailadres op en beveilig het tegen ongewenste code (XSS)
        $email = htmlspecialchars($_POST['email'] ?? '');

        // Controleer of het e-mailadres niet leeg is en geldig is
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            // 1. Maak de regel data die we willen opslaan
            $data = "E-mail: " . $email . " - Datum: " . date("d-m-Y H:i:s") . "\n";
            
            // 2. Sla de data op in aanmeldingen.txt (FILE_APPEND zorgt ervoor dat nieuwe inschrijvingen onderaan worden toegevoegd)
            file_put_contents("aanmeldingen.txt", $data, FILE_APPEND);

            // 3. Toon een nette bevestiging aan de bezoeker
            echo "<h1 style='color: #00ffcc;'>Bedankt voor je inschrijving!</h1>";
            echo "<p style='font-size: 1.1rem; margin-top: 15px;'>Het e-mailadres <strong>" . $email . "</strong> is succesvol geregistreerd voor de nieuwsbrief van LevelUp Hardware.</p>";
            
        } else {
            echo "<h1 style='color: #ff4d4d;'>Oeps, er ging iets mis!</h1>";
            echo "<p>Het opgegeven e-mailadres is niet geldig. Probeer het opnieuw.</p>";
        }

    } else {
        echo "<p>Geen formuliergegevens ontvangen.</p>";
    }
    ?>

    <!-- Knop om terug te gaan naar de homepagina -->
    <div style="margin-top: 30px;">
        <a href="index.php" style="display: inline-block; padding: 10px 20px; background-color: #00ffcc; color: #121212; text-decoration: none; font-weight: bold; border-radius: 5px; transition: background 0.2s;">
            Terug naar de homepagina
        </a>
    </div>

</main>

<?php include 'footer.php'; ?>