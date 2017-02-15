<?php // <-- Här öppnar vi PHP-taggen.

if (isset($_POST['submit'])) { // Här kollar vi om "Skicka"-knappen är klickad och vad som ska hända efter att den är klickad.

  // Kollar ifall förnamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren.
  if (!$_POST['firstName']) {
    $error = "- Please enter your first name.";
  }

  // Kollar ifall efternamnet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['lastName']) {
    $error = "<br>- Please enter your last name.";
  }

  // Kollar ifall e-postadressen INTE är ifylld och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['email']) {
    $error .= "<br>- Please enter your email adress.";
  }

  // Kollar ifall meddelandet INTE är ifyllt och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (!$_POST['message']) {
    $error .= "<br>- Please enter your message.";
  }

  // Kollar ifall svaret är något annat än 5 och ger isåfall ett felmeddelande till användaren. "<br>" gör en ny rad på sidan.
  if (intval($_POST['human']) !== 5) {
    $error .= "<br>- Please verify your not a robot.";
  }

  // Här kollar vi ifall det finns några fel och om det finns så skriver vi ut dem åt användaren.
  if ($error) {
    $result = "Oh no! An Error! Please correct the following: $error";
  }

  // Skickar mejlet ifall alla fält är ifyllda och inga fel finns.
  else {

    // PHPs mailfunktion.
    mail(
      "jonatan.johnsson@optistud.fi", // <-- Adressen dit mejlet skickas
      "Subject line", // <-- Mejlets ämnesrad.
      "Name: " .$_POST['firstName']. // <-- Det användaren har angett som förnamn i formuläret.
      "Name: " .$_POST['lastName']. // <-- Det användaren har angett som efternamn i formuläret.
      "\r\nEmail: " .$_POST['email']. // <-- Det användaren har angett som e-postadress i formuläret. \r\n gör radbrytningar i själva mejlet.
      "\r\nMessage: " .$_POST['message'] // <-- Det användaren har angett som meddelande i formuläret. \r\n gör radbrytningar i själva mejlet.
    );

    // Texten som visas efter att mejlet skickats.
    {
      $result = "Thank you! We will be in touch shortly.";
    }
  }
}

?> <!-- Här avslutar vi PHP-taggen. -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Website</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/website.css" rel="stylesheet">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">

</head>
<body>

<?php include "navigation.php"; ?>

  <!--HERO-->
  <header class="contact">
    <div class="hero-content">
      <h1>Contact us</h1>
    </div>
  </header>

<!--Contact form-->
<form method="post">
  <?php echo $result; //prints out error to screen ?>
  <input type="text" name="firstName" placeholder="First name" value="<?php echo $_post['firstName']; ?>" autofocus >
  <input type="text" name="lastName" placeholder="Last name" value="<?php echo $_post['lastName']; ?>">

  <input type="email" name="email" placeholder="E-mail" value="<?php echo $_post['email']; ?>">

  <textarea rows="10" name="message" placeholder="Your message..."><?php echo $_post['message']; ?></textarea>

  <!-- Nytt anti-spam fält som kollar ifall användaren räknat rätt. -->
  <input type="text" name="human" placeholder="What is 3 + 2?">

  <input type="submit" class="button" name="submit" value="Send message">
</form>

  <!--FOOTER-->
  <footer>&copy; <?php echo date('l jS \of F Y H:i:s'); ?></footer>

</body>
</html>
