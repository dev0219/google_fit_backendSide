<?php
$to = "rhs0219@hotmail.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From: r0219@hotmail.com";

// $returnValue = mail($to,$subject,$txt,$headers);

// echo($returnValue);

$confirmKey = 2;
$subject = 'Forgot password';
$message = 'Hi sir. <br>Welcome to <b>Bot.E</b>!!! <br><br><br>If you want to recover, Click <a href="http://mygetsaving.com/bote/recover.php?confirmKey='.$confirmKey.'"> here </a>';
$headers = "MIME-Version: 1.0" . "\r\n"."Content-type:text/html;charset=UTF-8" . "\r\n".'From: support@bot.e.com' . "\r\n" . 'Reply-To: support@bot.e.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
?>