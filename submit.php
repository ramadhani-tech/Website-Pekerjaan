<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

try {
    // Membuat koneksi menggunakan PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Mengatur mode error PDO ke exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mengambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Menyimpan data ke database
    $sql = "INSERT INTO users (name, email, phone, address) VALUES (:name, :email, :phone, :address)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->execute();

    echo "Data berhasil disimpan";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Menutup koneksi
$conn = null;
?>