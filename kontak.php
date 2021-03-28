<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form Design</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="contact-title">
            <h1>Say Hello</h1>
            <h2>We are always ready to serve you!</h2>
        </div>

        <div class="contact-form" >

            <form id="contact-form" method="post" actions="contact-form-handler.php">

                <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                
                <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

                <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

                <input type="submit" class="form-control submit" value="SEND MESSAGE" >
                

            </form>

        </div>
    </body>
</html>