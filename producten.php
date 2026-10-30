<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>LevelUp Hardware - Producten</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="folder-container">
    <?php require_once 'header.php'; ?>
        <main>
            <section class="hero">
                <h1>Producten</h1>
                <h2>Voor de Serieuze Gamer</h2>
            </section>
            <div class="products-list">
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="img/laptop.webp" alt="Gaming Laptop X1">
                    </div>
                    <div class="product-info">
                        <h3>Gaming Laptop X1</h3>
                        <div class="product-price">$1499</div>
                        <p>Krachtige laptop met de nieuwste GPU voor ultieme gaming prestaties.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="img/pc.png" alt="Custom Gaming PC">
                    </div>
                    <div class="product-info">
                        <h3>Custom Gaming PC</h3>
                        <div class="product-price">$1999</div>
                        <p>Op maat gemaakte desktop met topkwaliteit componenten voor maximale snelheid.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="img/headset.webp" alt="Pro Gaming Headset">
                    </div>
                    <div class="product-info">
                        <h3>Pro Gaming Headset</h3>
                        <div class="product-price">$199</div>
                        <p>Comfortabele headset met surround sound voor een meeslepende game-ervaring.</p>
                    </div>
                </div>

            </div>
        </main>
       <?php require_once 'footer.php'; ?>
    </div>
</body>
</html>


<?php
$producten = [
    [
        "naam" => "LevelUp Apex Gaming Desktop",
        "categorie" => "Desktops & Laptops",
        "beschrijving" => "High-end pc met gehard glazen zijpaneel, uitstekende airflow en RGB-verlichting.",
        "specs" => "Intel Core i7 | RTX 4070 | 32GB RAM | 1TB NVMe SSD",
        "prijs" => "1599.00",
        "afbeelding" => "https://images.unsplash.com/photo-1587202372775-e229f172b9d7?w=500"
    ],
    [
        "naam" => "LevelUp Nomad Esports Laptop",
        "categorie" => "Desktops & Laptops",
        "beschrijving" => "Slanke, krachtige laptop voor onderweg en competitieve gaming.",
        "specs" => "AMD Ryzen 7 | RTX 4060 | 16GB RAM | 15.6 inch 144Hz FHD",
        "prijs" => "1299.00",
        "afbeelding" => "https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=500"
    ],

    [
        "naam" => "UltraView 34\" Curved Gaming Monitor",
        "categorie" => "Monitoren",
        "beschrijving" => "Brede ultrawide monitor voor de ultieme immersie bij race- en flight-simulators.",
        "specs" => "UWQHD (3440x1440) | 165Hz | 1ms | Curved 1500R",
        "prijs" => "449.00",
        "afbeelding" => "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500"
    ],
    [
        "naam" => "Crystal 27\" 4K OLED Monitor",
        "categorie" => "Monitoren",
        "beschrijving" => "Haarscherp beeldscherm met diepe zwarttinten voor grafisch werk en content creation.",
        "specs" => "4K UHD | OLED | 0.1ms | 120Hz | 99% DCI-P3",
        "prijs" => "699.00",
        "afbeelding" => "https://images.unsplash.com/photo-1547394765-185e1e68f34e?w=500"
    ],

    [
        "naam" => "CyberMech 60% Mechanisch Toetsenbord",
        "categorie" => "Randapparatuur",
        "beschrijving" => "Compact toetsenbord met unieke keycaps, RGB-verlichting en snelle switches.",
        "specs" => "60% Formaat | Hot-swappable Rode Switches | USB-C",
        "prijs" => "89.00",
        "afbeelding" => "https://images.unsplash.com/photo-1618384887929-16ec33fab9ef?w=500"
    ],
    [
        "naam" => "HyperGlide Draadloze Gaming Muis",
        "categorie" => "Randapparatuur",
        "beschrijving" => "Vederlichte draadloze muis ontworpen voor bliksemsnelle bewegingen.",
        "specs" => "26.000 DPI | 55 gram | 80 uur accuduur",
        "prijs" => "79.00",
        "afbeelding" => "https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=500"
    ],
    [
        "naam" => "Nova Surround Gaming Headset",
        "categorie" => "Randapparatuur",
        "beschrijving" => "Comfortabele draadloze headset met ruisonderdrukking.",
        "specs" => "7.1 Virtual Surround | Noise-cancelling mic | 30u accu",
        "prijs" => "119.00",
        "afbeelding" => "https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=500"
    ],

    [
        "naam" => "LevelUp Pro Videokaart (GPU)",
        "categorie" => "Interne Componenten",
        "beschrijving" => "Massieve grafische kaart voor extreme framerates en ray tracing.",
        "specs" => "16GB GDDR6X | DLSS 3 | Triple Fan Koeling",
        "prijs" => "1149.00",
        "afbeelding" => "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?w=500"
    ],
    [
        "naam" => "FrostFlow 360 AIO Waterkoeler",
        "categorie" => "Interne Componenten",
        "beschrijving" => "Geavanceerde CPU-koeling met ARGB-fans en digitaal scherm op de pomp.",
        "specs" => "360mm Radiator | 3x 120mm ARGB Fans | Temp Display",
        "prijs" => "159.00",
        "afbeelding" => "https://images.unsplash.com/photo-1587202372634-32705e3bf49c?w=500"
    ],

    [
        "naam" => "LevelUp XXL RGB Bureaumat",
        "categorie" => "Accessoires",
        "beschrijving" => "Extra brede bureaumat afgewerkt met instelbare RGB-randen.",
        "specs" => "900x400mm | Waterafstotend textiel | Antislip",
        "prijs" => "29.00",
        "afbeelding" => "https://images.unsplash.com/photo-1616440347437-b1c73416efc2?w=500"
    ],
    [
        "naam" => "Titan Ergonomische Gamestoel",
        "categorie" => "Accessoires",
        "beschrijving" => "Stoere, volledig verstelbare stoel voor lange gamesessies.",
        "specs" => "4D Armleuningen | Verstelbare lendensteun | Ademend kunstleder",
        "prijs" => "279.00",
        "afbeelding" => "https://images.unsplash.com/photo-1598550476439-6847785fcea6?w=500"
    ]
];

$gegroepeerdeProducten = [];
foreach ($producten as $product) {
    $gegroepeerdeProducten[$product['categorie']][] = $product;
}
?>

<main style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <h1 style="text-align: center;">LevelUp Hardware Catalogus</h1>
    <p style="text-align: center; margin-bottom: 40px;">Bekijk ons volledige assortiment, netjes ingedeeld per categorie.</p>

    <?php foreach ($gegroepeerdeProducten as $categorieNaam => $catProducten): ?>
        
        <div style="margin-bottom: 50px;">
            <h2 style="border-bottom: 2px solid #00ffcc; padding-bottom: 10px; margin-bottom: 20px; color: #00ffcc;">
                <?php echo $categorieNaam; ?>
            </h2>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                
                <?php foreach ($catProducten as $product): ?>
                    <div class="product-card" style="border: 1px solid #333; border-radius: 8px; padding: 15px; display: flex; flex-direction: column; justify-content: space-between; background-color: #1a1a1a;">
                        
                        <div>
                            <img src="<?php echo $product['afbeelding']; ?>" alt="<?php echo $product['naam']; ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 5px;">
                            <h3 style="margin: 15px 0 5px 0;"><?php echo $product['naam']; ?></h3>
                            <p style="font-size: 0.9rem; color: #ccc;"><?php echo $product['beschrijving']; ?></p>
                            <p style="font-size: 0.8rem; color: #888; background: #111; padding: 8px; border-radius: 4px; margin-top: 10px;">
                                <strong>Specs:</strong> <?php echo $product['specs']; ?>
                            </p>
                        </div>
                        <div style="margin-top: 15px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 1.2rem; font-weight: bold; color: #00ffcc;">
                                € <?php echo number_format($product['prijs'], 2, ',', '.'); ?>
                            </span>
                            <button style="padding: 8px 12px; background-color: #00ffcc; border: none; font-weight: bold; cursor: pointer; border-radius: 4px;">Bestel</button>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    <?php endforeach; ?>

</main>
