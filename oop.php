<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aotme</title>
    <link rel="stylesheet" href="oop.css">
    <link rel="shortcut icon" href="./img/ADOTME-removebg-preview.ico" type="image/x-icon">

</head>
<body>
    
    <header>
        <img src="./img/ADOTME-removebg-preview.png" alt="Logo" class="logo" srcset="">
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        <nav class="menu" id="menu">
            <a href="pagina1.php">Página 1</a>
            <a href="pagina2.php">Página 2</a>
            <a href="pagina3.php">Página 3</a>
            <a href="pagina4.php">Página 4</a>
        </nav>
    </header>

    <script>
    function toggleMenu() {
        document.getElementById('menu').classList.toggle('show');
    }
    </script>

</body>
</html>