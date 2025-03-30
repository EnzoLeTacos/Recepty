<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us - Student Cooking</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
  <div id="templatemo_left_column">
    <div id="templatemo_title">COOKING<span> WEBSITE</span></div>
    <?php include('partials/header.php')  ?>
    <div id="templatemo_left_content">
      <h1>CONTACT<br />
      <span>STUDENT COOKING SUPPORT</span></h1>
      
      <p><strong>Need help with dorm cooking?</strong> Send us your questions!</p>
      
      <form action="#" method="post">
        <p>Name:<br /><input type="text" name="name" /></p>
        <p>Email:<br /><input type="text" name="email" /></p>
        <p>Message:<br /><textarea name="message" rows="5" cols="40"></textarea></p>
        <input type="submit" value="Send Message" onclick="window.location.href='thankyou.php'; return false;" />
      </form>
    </div>
  </div>
  <div id="templatemo_right_column">
    <div class="templatemo_domain">http://www.yourcompany.com</div>
    <div id="templatemo_menucolumn">
      <div class="templatemo_menu_list">
        <ul>
          <li><a href="index.php">DOMOV</a></li>
          <li><a href="recepty.php">RECEPTY</a></li>
          <li><a href="contact.php" class="current">KONTAKT</a></li>
        </ul>
      </div>
    </div>
    <div id="templatemo_right_content">
      <h2>QUICK HELP</h2>
      <p><strong>Common Questions:</strong></p>
      <ul>
        <li>How to cook without a kitchen?</li>
        <li>Cheapest protein sources</li>
        <li>Essential dorm cooking tools</li>
      </ul>
    </div>
    <?php include('partials/footer.php') ?>
  </div>
</div>
</body>
</html>