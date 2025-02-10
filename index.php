<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de la Moyenne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Simulateur de BTS SIO</h1>
    <form action="" method="post">
        <h2>Epreuve E1 Culture et communication</h2>
        <label for="E1A">Culture générale et expression (Coefficient 2)</label>
        <div>
            <button type="button" onclick="decrement('E1A')">-</button>
            <input type="number" id="E1A" name="E1A" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E1A']) ? $_POST['E1A'] : ''; ?>">
            <button type="button" onclick="increment('E1A')">+</button>
        </div>

        <label for="E1B">Expression et communication en langue anglaise (Coefficient 2)</label>
        <div>
            <button type="button" onclick="decrement('E1B')">-</button>
            <input type="number" id="E1B" name="E1B" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E1B']) ? $_POST['E1B'] : ''; ?>">
            <button type="button" onclick="increment('E1B')">+</button>
        </div>

        <h2>Epreuve E2</h2>
        <label for="E2">Mathématique (Coefficient 3)</label>
        <div>
            <button type="button" onclick="decrement('E2')">-</button>
            <input type="number" id="E2" name="E2" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E2']) ? $_POST['E2'] : ''; ?>">
            <button type="button" onclick="increment('E2')">+</button>
        </div>

        <h2>Epreuve E3</h2>
        <label for="E3">Culture économique, juridique et managériale (Coefficient 3)</label>
        <div>
            <button type="button" onclick="decrement('E3')">-</button>
            <input type="number" id="E3" name="E3" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E3']) ? $_POST['E3'] : ''; ?>">
            <button type="button" onclick="increment('E3')">+</button>
        </div>

        <h2>Epreuve E4</h2>
        <label for="E4">Support et mise à disposition de services info (Portfolio) (Coefficient 4)</label>
        <div>
            <button type="button" onclick="decrement('E4')">-</button>
            <input type="number" id="E4" name="E4" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E4']) ? $_POST['E4'] : ''; ?>">
            <button type="button" onclick="increment('E4')">+</button>
        </div>

        <h2>Epreuve E5</h2>
        <label for="E5">Conception et développement d'applications (AP) (Coefficient 4)</label>
        <div>
            <button type="button" onclick="decrement('E5')">-</button>
            <input type="number" id="E5" name="E5" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E5']) ? $_POST['E5'] : ''; ?>">
            <button type="button" onclick="increment('E5')">+</button>
        </div>

        <h2>Epreuve E6</h2>
        <label for="E6">Cybersécurité des services info (Coefficient 4)</label>
        <div>
            <button type="button" onclick="decrement('E6')">-</button>
            <input type="number" id="E6" name="E6" step="0.1" required min="0" max="20" value="<?php echo isset($_POST['E6']) ? $_POST['E6'] : ''; ?>">
            <button type="button" onclick="increment('E6')">+</button>
        </div>

        <h2>Epreuves facultatives</h2>
        <label for="EF1">EF1 : Langue vivante 2</label>
        <div>
            <button type="button" onclick="decrement('EF1')">-</button>
            <input type="number" id="EF1" name="EF1" step="0.1" min="0" max="20" value="<?php echo isset($_POST['EF1']) ? $_POST['EF1'] : ''; ?>">
            <button type="button" onclick="increment('EF1')">+</button>
        </div>

        <label for="EF2">EF2 : Mathématiques approfondies</label>
        <div>
            <button type="button" onclick="decrement('EF2')">-</button>
            <input type="number" id="EF2" name="EF2" step="0.1" min="0" max="20" value="<?php echo isset($_POST['EF2']) ? $_POST['EF2'] : ''; ?>">
            <button type="button" onclick="increment('EF2')">+</button>
        </div>

        <label for="EF3">EF3 : Parcours de certification</label>
        <div>
            <button type="button" onclick="decrement('EF3')">-</button>
            <input type="number" id="EF3" name="EF3" step="0.1" min="0" max="20" value="<?php echo isset($_POST['EF3']) ? $_POST['EF3'] : ''; ?>">
            <button type="button" onclick="increment('EF3')">+</button>
        </div>

        <button type="submit">Calculer la moyenne</button>
    </form>

    <script>
        // Fonction pour incrémenter la valeur de l'input
        function increment(id) {
            var input = document.getElementById(id);
            var currentValue = parseFloat(input.value);
            if (currentValue < 20) {  // Limite la valeur maximale à 20
                input.value = (currentValue + 1).toFixed(1);
            }
        }

        // Fonction pour décrémenter la valeur de l'input
        function decrement(id) {
            var input = document.getElementById(id);
            var currentValue = parseFloat(input.value);
            if (currentValue > 0) {  // Limite la valeur minimale à 0
                input.value = (currentValue - 1).toFixed(1);
            }
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $notes = [
            "E1A" => ["note" => (float) $_POST["E1A"], "coef" => 2],
            "E1B" => ["note" => (float) $_POST["E1B"], "coef" => 2],
            "E2" => ["note" => (float) $_POST["E2"], "coef" => 3],
            "E3" => ["note" => (float) $_POST["E3"], "coef" => 3],
            "E4" => ["note" => (float) $_POST["E4"], "coef" => 4],
            "E5" => ["note" => (float) $_POST["E5"], "coef" => 4],
            "E6" => ["note" => (float) $_POST["E6"], "coef" => 4]
        ];
    
        $ef1_note = isset($_POST["EF1"]) ? (float) $_POST["EF1"] : 0;
        $ef2_note = isset($_POST["EF2"]) ? (float) $_POST["EF2"] : 0;
        $ef3_note = isset($_POST["EF3"]) ? (float) $_POST["EF3"] : 0;
    
        $somme_notes = 0;
        $somme_coefficients = 0;
        
        foreach ($notes as $epreuve => $data) {
            $moyenne_epreuve = $data["note"] * $data["coef"];
            $somme_notes += $moyenne_epreuve;
            $somme_coefficients += $data["coef"];
        }
    
        // Les épreuves facultatives n'ont pas de coefficient mais ajoutent un bonus
        if ($ef1_note > 10) {
            $somme_notes += ($ef1_note - 10) * 0.1; // Bonus pour EF1
        }
        if ($ef2_note > 10) {
            $somme_notes += ($ef2_note - 10) * 0.1; // Bonus pour EF2
        }
        if ($ef3_note > 10) {
            $somme_notes += ($ef3_note - 10) * 0.1; // Bonus pour EF3
        }
    
        if ($somme_coefficients > 0) {
            $moyenne_generale = $somme_notes / $somme_coefficients;
    
            echo "<h2>Moyenne générale : " . number_format($moyenne_generale, 2) . "</h2>";
    
            if ($moyenne_generale >= 10) {
                echo "<h2 style='color: green;'>Félicitations, vous avez obtenu votre BTS !</h2>";
            } else {
                echo "<h2 style='color: red;'>Désolé, vous n'avez pas obtenu votre BTS.</h2>";
            }
        } else {
            echo "<p>Aucune note saisie.</p>";
        }
    }    
    ?>
</body>
</html>
