<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style3.css"/>
    <title>Page de connexion</title>
</head>
<body>
    <header>
      <div id="menu-bar">
			<div id="menu" onclick="onClickMenu()">
				<div id="bar1" class="bar"></div>
				<div id="bar2" class="bar"></div>
				<div id="bar3" class="bar"></div>
      </div>
        <ul class="nav" id="nav">
          <li><a href="./index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="./narcos2.php">Nouveauté</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
        </div>
        </div>
        <div class="recherche">
        <input type="search" name="Search" placeholder="Search">
      </div>
  </header>
  <div class="menu-bg" id="menu-bg"></div>
    <script src="./JS/script.js"></script>
    <div class="login-box">
    <img src="./image/avatar.jpg" class="avatar">
       <h1>Narcos N'cook</h1>
       <?php echo @$error; ?>
         <form action="" method="POST">
             <p>Nom d'utilsateur</p>
             <input type="text" name="email" placeholder="Enter username">
             <p>Mot de passe</p>
             <input type="password" name="mdp" placeholder="Enter password">
             <input type="password" name="mdp2" placeholder="Enter password">
             <input type="submit" name="submit" value="Envoyer">
             <a href="#">Forget password / <a href ="./account.php">Creat an account</a>
         </form>
    </div>
</body>
</html>