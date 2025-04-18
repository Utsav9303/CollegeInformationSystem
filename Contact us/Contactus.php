<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <title>KDP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@500&family=Gelasio:ital@1&display=swap" rel="stylesheet">
    <link rel="Website icon" href="..\pictures\KDP_LOGO.png">
    <script src="contact.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("hMPC64BYDOyyl1SxA");
   })();
</script>
</head>

<body>

<?php
    include('..\header.php');
    ?>
    <!-- <br><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3068.3096497966667!2d72.13513431044025!3d23.859258481612958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xe28f6043d4bb1e48!2sK+D+Polytechnic!5e0!3m2!1sen!2sin!4v1541060613888" frameborder="0" style="border:0;width:100%;padding: 10px 10% 10px; height:400px;">
    </iframe> --><br>
<div class="body">
    
    <div class="contactus">
            <form onsubmit="sendMail(); reset(); return false;">
                    <h3>Contact Us</h3>
                    <input type="text" id="name" placeholder="Your Name" required>
                    <input type="email" id="email" placeholder="Email Id" required>
                    <input type="text" id="phone" placeholder="Phone No." required>
                    <textarea id="message" rows="4" placeholder="How can we help you?"></textarea>
                    <button type="submit">Send</button>
            </form>
    </div>   
</div><br>

    <?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>