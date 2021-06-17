<?php 

$name = "";
$email = "";
$subject = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
}

?>

<?php require 'header.php' ?>

        <div class="container">
            <h2>Contact Form</h2>
            <div class="contact">

                <form method="POST" action="display_form.php" class="form" id="formContact">

                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input class="form-control" name ="name" type="text" id="name" placeholder="Enter your name" value="<?= htmlspecialchars($name); ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input class="form-control" name="email" type="email" id="email" placeholder="Enter your email" value="<?= htmlspecialchars($email); ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="form-group" class="input-group-prepend">
                            <label class="input-group-text" for="subject">Subject</label>
                        </div>
                        <select class="custom-select" name="subject" id="subject">
                            <option  value="Query">Query</option>
                            <option  value="Feedback">Feedback</option>
                            <option  value="Complaint">Complaint</option>
                            <option  value="Other">Other</option>
                            <option  value="<?= $subject ?>" selected="selected"><?= $subject ?></option>
                        </select>
                    </div>

                    <div class="form-group" id="form-message">
                        <label for="message">Message</label>
                        <textarea class="form-control summernote required" name="message" id="summernote" placeholder="Your message"><?= htmlspecialchars($message); ?></textarea>
                    </div>

                    <input type="submit" value="Submit">

                </form>
        
            </div>
        </div>

<?php require 'footer.php' ?>