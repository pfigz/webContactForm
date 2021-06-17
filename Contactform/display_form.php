<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

?>

<?php require 'header.php' ?>

<div class="container text-center">

    <h2>Contact Form</h2>
    
        <div class="row">
            <div class="h5 col-sm text-right">Name:</div>
            <div class="col-sm text-left" id="name"><?= $name ?></div>
        </div>
        
        <div class="row">
            <div class="h5 col-sm text-right">Email:</div>
           <div class="col-sm text-left" id="email"><?= $email ?></div>
        </div>

        <div class="row">
            <div class="h5 col-sm text-right">Subject:</div>
            <div class="col-sm text-left" id="subject"><?= $subject ?></div>
        </div>

        <div class="row">
            <div class="h5 col-sm text-right">Message:</div>
            <div class="col-sm text-justify" id="message"><?= $message ?></div>
        </div>
     
        <form class="container" method="POST" id="edit_form" action="index.php">

            <div style="display: none;">
                <input name ="name" id="name" value="<?= htmlspecialchars($name); ?>">
                <input name="email" id="email" value="<?= htmlspecialchars($email); ?>">
                <input name="subject" id="subject" value="<?= htmlspecialchars($subject); ?>">
                <input name="message" id="message" value="<?= htmlspecialchars($message); ?>">
            </div>

            <div>
                <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Clear Form</a>
                <input type="submit" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" value="Edit">
            </div>

        </form>

</div>

<?php require 'footer.php' ?>
 




