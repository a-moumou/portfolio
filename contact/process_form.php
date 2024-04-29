<?php
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "root", "portfolio");

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['emailAddress'];
$message = $_POST['message'];

// Vérification du format de l'e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Envoie d'une réponse JSON avec le message d'erreur
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => "L'adresse e-mail n'est pas valide."]);
    exit; // Arrête l'exécution du script
} else {
    // Vérification si l'e-mail existe déjà dans la base de données
    $check_email_sql = "SELECT id FROM Contact WHERE email = '$email'";
    $result = $conn->query($check_email_sql);
    if ($result && $result->num_rows > 0) {
        // L'e-mail existe déjà dans la base de données, renvoyer une erreur
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => "L'adresse e-mail est déjà enregistrée."]);
        exit; // Arrête l'exécution du script
    } else {
        // Requête d'insertion dans la base de données
        $sql = "INSERT INTO Contact (name, email, message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            // Envoie d'une réponse JSON avec un message de succès
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => "Données enregistrées avec succès"]);
        } else {
            // Envoie d'une réponse JSON avec le message d'erreur
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => "Erreur lors de l'enregistrement des données: " . $conn->error]);
        }
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

