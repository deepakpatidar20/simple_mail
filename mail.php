<html>
    <head>
        <style>
            #container{
                width: auto;
                height: auto;
                background-color:pink;
            }

            #to{
                margin-left : 50px;
            }

             #from{
                margin-left : 31px;
            } 
            
            #subject{
                margin-left : 20px;
            }

             #message{
                margin-left : 10px;
            }

            label {
                margin-left :110px;

            }

            #send{
                margin-left :250px;

            }

            #heading{
                  text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <h1 id="heading">Mail Send</h1>
            <br>
        <form action="" method="POST">
        <label for="to" >To</label>
        <input type="email" placeholder="to" id="to" name="to" >
        <br>
        <br>
        <label for="from">From</label>
        <input type="email" placeholder="from" id="from" name="from">
        <br>
        <br>
        <label for="subject">subject</label>
        <input type="text" name="subject" id="subject" placeholder="subject">
        <br>
        <br>
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" cols="30" placeholder="message"></textarea>
        <br>
        <br>
        <button id="send" name="send" type="submit">Send</button>
        </form>
        <br>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
        $to =  $_POST['to'];
        $from =  $_POST['from'];
        $subject =  $_POST['subject'];
        $message =  $_POST['message'];
        $headers = [
        'From'     => $from,
        'Reply-To' => $from,
        'X-Mailer' => 'PHP/' . phpversion()
];
       if(mail($to, $subject, $message, $headers)) {
       echo "mail send";
     } else {
     echo "mail not";
     }
        }
        ?>
    </body>
</html>