<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/footer.css">
    <script src="assets/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/0704d54d24.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include_once 'header.php'; ?>
    <main>
        <section id="projet">
            <h2 data-lang="projet">PROJECTS</h2>
            <a href="https://git.unistra.fr/armagan" class="mygit" data-lang="mygit">My GIT <i class="fab fa-github"></i></a>
            <h3>SOKOBAN</h3>
            <p data-lang="sokoban">
                Sokoban game where the player pushes boxes around a maze, aiming to place them all onto designated storage locations
            </p>
            <img src="/assets/imgs/Sokoban.jpg" alt="Sokoban project image">

            <h3>PROG-SYS</h3>
            <p data-lang="progsys">
                It is the development of programs which are part of the operating system of a computer or which carry out its functions on Linux
            </p>
            <img src="/assets/imgs/code.jpg" alt="Programmation systeme image">
            
            <h3 data-lang="crossword">CROSS-WORD</h3>
            <p data-lang="crossword-intro">
                A program generating 3D image dual graphs using various sorting methods.
            </p>
            <img src="/assets/imgs/cword.jpg" alt="Crossword project image">

            <h3 data-lang="graph">GRAPH</h3>
            <p data-lang="graph-intro">
                A program generating 3D image dual graphs using various sorting methods.
            </p>
            <img src="/assets/imgs/graph.png" alt="Graph project image">
        </section>
    </main>
<?php include_once "footer.php";?>
</body>

</html>