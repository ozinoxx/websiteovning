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
  <header>
    <div class="hero-content">
      <h1>Find your <span>processor</span> now!</h1>
      <a href="about.php">Click here to find out more &raquo;</a>
    </div>
  </header>

  <!--MARKETING-->
  <section>
    <h2>What we offer</h2>
    <div class="heart">
      <i class="fa fa-unlock" aria-hidden="true"></i>
      <h3>Unlocked multipliers</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <div class="coffee">
      <i class="fa fa-thermometer-empty" aria-hidden="true"></i>
      <h3>Low temperatures</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <div class="globe">
      <i class="fa fa-credit-card" aria-hidden="true"></i>
      <h3>Cheap af</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </section>

  <!--FOOTER-->
  <footer>&copy; <?php echo date('l jS \of F Y H:i:s'); ?></footer>

</body>
</html>
