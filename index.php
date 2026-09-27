<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-Akademik</title>
</head>
<body>
    <H1>Selamat Datang di SI-Akademik</H1>
    <!!-- <p>Ini adalah bagian Form Pencarian (GET).</p> 
    <fieldset>
        <legend>Form Pencarian</legend>
        <form method="GET">
            <input type="text" name="q" placeholder="Cari...">
            <button type="submit">Cari</button>
        </form>
    </fieldset>

    <?php
    if (isset($_GET['q'])) {
        $query = $_GET['q'];
        echo "<p>Hasil pencarian untuk: " . htmlspecialchars($query) . "</p>";
    }
    ?>

    <br>
    <br>
    
    <!!-- <p>Ini adalah bagian Form Login sederhana (POST).</p>
    <fieldset></fieldset>
        <legend>Form Login</legend>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </fieldset>

    <?php
    if (isset($_POST['login'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = $_POST['password'];

            // Validasi contoh statis
            if ($username === "admin" && $password === "12345") {
                echo "<p style='color: green;'>Login berhasil! Selamat datang, " . $username . ".</p>";
            } else {
                echo "<p style='color: red;'>Login gagal! Username atau password salah.</p>";
            }

    }
    ?>

</body>
</html>