<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Contact Form Design</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="contact-title">
            <h1>Say Hello</h1>
            <h2>We are always ready to serve you!</h2>
        </div>

        <div class="contact-form" >

            <form id="contact-form" method="post" actions="contactform.php">

                <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                
                <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>

                <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>

                <button type="submit" name="submit">SEND MAIL</button>
                

            </form>

        </div>
        
    </body>
</html>
