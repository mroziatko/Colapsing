<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="css/style.css" type="text/css"/>
 <script type="text/javascript" src="js/captcha.js"></script>
</head>
<body>
<h1>Kérdés</h1>

<form class="contact_form" action="<?php echo $_SESSION['6_letters_code']; ?>" method="post">
    <label for='name' >Név: </label>
    <input type='text' name='name' id='name' placeholder="Pálinkás József" required /><br><br>
    
    <label for='email' >Email cím: </label>
    <input type='email' name='email' id='email' placeholder="PJ@gmail.com" required/><br><br>
    
    <label for='subject' >Tárgy: </label>
    <input type='text' name='subject' id='subject' placeholder="vacsora" required/><br><br>

    <label for='text' >Szöveg:</label><br>
    <textarea rows="4" cols="50" name='text' id='text' required></textarea> <br><br>

    <label for='message'>Írd be a szöveget a képből:</label>
    <input id="6_letters_code" name="6_letters_code" type="text" required><br><br>
    <img src="captcha_gen.php?rand=<?php echo rand(); ?>" id='captchaimg1' />
    <a href='javascript: refreshCaptcha();' style="padding:5px"><img src="images/refresh.png" style="padding-left: 0px" /></a><a href='javascript: refreshCaptcha();'>frissítés</a><br>
    <br>

    <button class="submit" type="submit">Küldés</button>
  </form>

<?php

$errors = '';

if(isset($_POST['submit']))
{
    
    
     if(empty($_SESSION['6_letters_code'] ) ||
      strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
    {

        $errors .= "\n The captcha code does not match!";
    }
    if(empty($errors)){

      $odosielatel = $_POST["email"];
      $mail_name="mroziatko";
      $mail_server="@gmail";
      $mail_domain=".com";

      $subject = $_POST["subject"];
     $headers = 'From:'.$odosielatel . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

      mail($mail_name.$mail_server.$mail_server, $subject, $_POST['text'],$headers);
    }
}
?>
<script type="text/javascript">
    function refreshCaptcha()
{
    var img = document.images['captchaimg1'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

</script>
  </body>
  </html>