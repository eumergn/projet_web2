<?php include 'form.php'; 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/header.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css" />

    <script src="https://kit.fontawesome.com/0704d54d24.js" crossorigin="anonymous"></script>
    <script src="assets/js/contact.js" defer></script>
    <script src="assets/js/script.js" defer></script>
</head>

<body>
<?php include 'header.php';?>
    <main>
        <h2 id="contact-title" data-lang="contactMe"><span>Contact</span>&nbsp;ME</h2>
        <section id="form_container">
            <form method="post">
                <label for="name" data-lang="formName">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name..">

                <label for="email" >Email:</label>
                <input type="email" id="email" name="email" placeholder="example@unistra.fr">

                <label for="number" data-lang="formNumber">Number:</label>
                <input type="number" id="number" name="number" maxlength="17" placeholder="+ . . . . . . . . . . .">
        
                <label for="message">Message:</label>
                <textarea id="myText" name="message" placeholder="Your message here.." rows="7"></textarea>
                <p id="result"></p>
                <button type="button" data-lang="formSubmit">Submit <i class="fas fa-paper-plane"></i></button>
            </form>
        </section>
        <button id="chargementForm" data-lang="chargementForm">Show all the forms</button>
        <div id="affichageForm"></div>
        <!--
        // L'affichage de tous les entrees du formulaire
        <section id="echo_entrees_form">
        <?php foreach ($messages as $message) : ?>
                <article>
                    <p>Name: <?php echo $message['name']; ?></p>
                    <p>Email: <?php echo $message['email']; ?></p>
                    <p>Number: <?php echo $message['number']; ?></p>
                    <p>Message: <?php echo $message['message']; ?></p>
                    <br>
                </article>
            <?php endforeach; ?>
        </section>
        -->
    </main>
    <?php include 'footer.php';?>
</body>

</html>