<?php include 'header.php'; ?>
<main>
    <h2>Contact Us</h2>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Here you can add code to save the message to a database or send an email.
        echo "<p>Thank you, $name. Your message has been sent!</p>";
    }
    ?>
</main>
<?php include 'footer.php'; ?>
