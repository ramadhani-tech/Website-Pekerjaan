<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="foto/Circle-Logo.png">
    <title>Gardina Rovena</title>
    <link rel="stylesheet" href="second-style.css">
</head>
<body>
    <form id="registrationForm" action="submit.php" method="post">
        <label for="name">Username Telegram</label><br>
        <input type="text" id="name" name="name" required><br><br>      
        <label for="fullName">Nama</label><br>
        <input type="text" id="fullName" name="fullName" required><br><br>      
        <label for="password">Kata sandi</label><br>
        <input type="password" id="password" name="password" pattern="^\S{8,12}$" title="Password harus 8-12 karakter tanpa spasi" required><br><br>
        <span id="passwordError" style="color: #ff0000; display: none;">Password harus berisi 8-12 karakter tanpa spasi</span><br><br>
        <input type="submit" value="Daftar">
    </form>

    <script>
        document.getElementById('password').addEventListener('input', function(event) {
            var password = event.target.value;
            var passwordPattern = /^\S{8,12}$/;
            var passwordError = document.getElementById('passwordError');

            if (!passwordPattern.test(password)) {
                passwordError.style.display = 'inline';
            } else {
                passwordError.style.display = 'none';
            }
        });

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var passwordPattern = /^\S{8,12}$/;
            var passwordError = document.getElementById('passwordError');

            if (!passwordPattern.test(password)) {
                passwordError.style.display = 'inline';
                alert('Password harus 8-12 karakter tanpa spasi');
                event.preventDefault();
            } else {
                passwordError.style.display = 'none';
            }
        });

        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var telegramUsername = document.getElementById('name').value;

            // Simulate checking if the Telegram username exists (replace this with actual validation logic)
            var isTelegramUsernameValid = checkTelegramUsername(telegramUsername);

            if (!isTelegramUsernameValid) {
                alert('Username Telegram tidak ditemukan. Silakan perbaiki username Telegram Anda.');
                event.preventDefault();
            }
        });

        function checkTelegramUsername(username) {
            // Implement your logic to check if the Telegram username exists
            // This is a placeholder function, replace it with your actual validation logic
            return username === 'validUsername';
        }
    </script>
</body>
</html>