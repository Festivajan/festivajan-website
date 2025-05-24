<?php
$host = "sql200.infinityfree.com";
$user = "if0_39063946";
$pass = "ldkQJNjkstK9D";
$db = "if0_39063946_vaderjan_form";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO vrijgezellen (naam, geboortedatum, snapchat, gsm, extra) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $_POST['naam'], $_POST['geboortedatum'], $_POST['snapchat'], $_POST['gsm'], $_POST['extra']);
$stmt->execute();
$stmt->close();
$conn->close();

echo "✅ Je bent succesvol toegevoegd aan de vrijgezellen van Vader Jan!";
?>
