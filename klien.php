<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="foto/Circle-Logo.png">
    <title>Gardina Rovena</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Nomor Telepon:</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>
        
        <label for="address">Alamat:</label><br>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>