<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Form Page</title>
</head>
<body>
    <main>
        <form action="/thanks.php" method="post">
            <div>
                <label for="lastname">Lastname</label>
                <input type="text" id="lastname" name="user_lastname" required>
                
            </div>

            <div>
                <label for="firstname">Firstname</label>
                <input type="text" id="firstname" name="user_firstname" required>
              
            </div>

            <div>
                <label for="email">Courriel</label>
                <input type="email" id="email" name="user_email" required>
                
            </div>

            <div>
                <label for="phone number">Contact Number</label>
                <input type="tel" id="phone" name="contact_number" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
                
            </div>

            <div class="selection">
                <select name="user_subject" id="subject" required>
                <option value="">--Please choose an option--</option>
                <option value="claim">Complain</option>
                <option value="compliment">Compliment</option>
                <option value="request">Special Request</option>
                </select>
            </div>

            <div>
                <label for="message">Message</label>
                <textarea id="message" name="user_message"></textarea>
               
            </div>

            <div>
                <input type="submit">
            </div>

        </form>
    </main>
</body>
</html>