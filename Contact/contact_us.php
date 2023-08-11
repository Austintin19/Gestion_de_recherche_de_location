<link href="contact_us.css" rel="stylesheet">
<form action="" method="post">
    <div>
        <label for="name">Votre nom</label>
        <input type="text" name="name" id="name" required />
    </div>
    <div>
        <label for="email">Votre adresse e-mail</label>
        <input type="email" name="email" id="email" required />
    </div>
    <div>
        <label for="subject">Objet</label>
        <input type="text" name="subject" id="subject" required />
    </div>
    <div>
        <label for="message">Votre message</label>
        <textarea name="message" id="message" required></textarea>
    </div>
    <div>
        <input type="submit" value="Envoyer" />
    </div>
</form>
<?php
// Vérifie si le formulaire a été soumis
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    // Récupère les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Envoie un e-mail au propriétaire du site
    mail('contact@example.com', $subject, $message, 'From: ' . $email);

    // Affiche un message de confirmation
    echo '<p>Votre message a bien été envoyé.</p>';
} else {
    // Le formulaire n'a pas été soumis
    echo '<p>Veuillez remplir tous les champs du formulaire.</p>';
}
?>
