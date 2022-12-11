<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="">
        <meta name="author" content="Franciszek Borkowski">
        <link href='http://fonts.googleapis.com/css?family=Alata&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <title>Wysłano!</title>
        <link rel="shortcut icon" href="images/icons/fb.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php
                    iconv_set_encoding("internal_encoding", "UTF-8");
                    
                    //zmienne

                    $to="frankbork07@gmail.com";

                    $from=$_POST["email"];

                    $imie=ucfirst($_POST["imie"]);
                    
                    $nazwisko=ucfirst($_POST["nazwisko"]);

                    $numtel=@$_POST["numertel"];

                    $wiadomosc=ucfirst($_POST["message"]);
                
                    if($_POST["submit"]){
                        $temat=ucfirst($_POST["temat"]);

                        $message="Wiadomość z fbork.zsti.me\n\n$imie $nazwisko napisał:\n\n $wiadomosc \n\n Nr. Telefonu: $numtel";

                        function utf8mail($to,$s,$body,$from_name,$from_a = "info@x.com", $reply="info@x.com"){
                            $s= "=?utf-8?b?".base64_encode($s)."?=";
                            $headers = "MIME-Version: 1.0\r\n";
                            $headers.= "From: =?utf-8?b?".base64_encode($from_name)."?= <".$from_a.">\r\n";
                            $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
                            $headers.= "Reply-To: $reply\r\n";  
                            $headers.= "X-Mailer: PHP/" . phpversion();
                            $body=utf8_decode($body);
                            mail($to, $s, $body, $headers)or die(
                                "
                                <div class='send'>
                                    <h2 class='sendheader'>
                                        Unfortunately the message wasn't send successfully<br>
                                        <a href='../contact.html'>Try to resend it</a>
                                    </h2>
                                </div>"); 
                        }
                    }

                    utf8mail($to,$temat,$message,$imie,$from,$from);
                    
                    echo(
                        "
                        <div class='send'>
                            <img class='sendimg' src='../images/icons/paper-plane.png'>
                            <h2 class='sendheader'>
                                Thank you for sending a message $imie. I'll reach out to you as soon as possible<br>
                                <a href='../index.html'>Return to the Home Page</a>
                            </h2>
                        </div>"
                    );
            ?>
            
        </main>
    </body>
</html>