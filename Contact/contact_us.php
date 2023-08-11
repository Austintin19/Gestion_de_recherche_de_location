<?php include '../base_header.php' ?>
<link href="contact_us.css" >
<div id="contact" class="containing">
    <h1>Contactez-nous</h1>
    <form action="#" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <input type="submit" value="Envoyer">
</div>
<?php include 'base_footer.php' ?>
