<?php
include_once "layer.php";
?>
<main>
    <div class="containerWperc containerHvh dFlexCenter fDirectionColumn py10" id="contact_section">
        <h1 class="head_title cBlack dFlexCenter contact_title mb3">CONTACT ME</h1>
        <form action="/prf/contact.php" method="post" class="dFlex fDirectionColumn">
            <label for="name" class="dBlock">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your full name">
            <label for="email" class="dBlock">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <label for="message" class="dBlock">Message</label>
            <textarea name="message" id="message" rows="5" placeholder="Enter your message"></textarea>
            <button type="submit" class="btnReset tUpr">Submit</button>
        </form>
            <?php
            require_once "config.php";
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // connect with database
                $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbDatabase);
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $sql = "INSERT INTO `users` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
                $result = mysqli_query($conn, $sql);
            }
            ?>
    </div>
</main>
<?php
include_once "endLayer.php";
?>