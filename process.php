<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');

    // Vérifier si les champs sont remplis
    if (!empty($nom) && !empty($email)) {
        echo "Formulaire soumis avec succès !<br>";
        echo "Nom : " . $nom . "<br>";
        echo "Email : " . $email . "<br>";
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
} else {
    echo "Aucune donnée soumise.";
}
?>
