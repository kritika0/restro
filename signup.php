
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <script src="index.js"></script>
    <title>Restaurant</title>
	
</head>
<body>
     <!-- header -->
     <header>
        <a href="#" class="logo"> 
            <img src="images/logo-img.png">
        </a>
        <div id="menu-bar" class="fas fa-hamburger"></div>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="index.html#home" class="active">Home</a>
                </li>
                <li>
                    <a href="index.html#about">About</a>
                </li>
                <li>
                    <a href="index.html#menu">Menu</a>
                </li>
                <li>
                    <a href="index.html#popular">Popular</a>
                </li>
                <li>
                    <a href="index.html#gallery">Gallery</a>
                </li>
                <li class="cart">
                    
                    <a href="cart.html"><i class="fas fa-shopping-cart"></i> <span></span> </a>
                </li>
                <li >
                    <a href="login.html"><button class="btn-2">Log In

                    </button></a>    
                    
                </li>
            </ul>
        </nav>
    </header>

<div class="signup" id="signup">
	
		<form action="#" method="POST">
			<h1>SignUp </h1>
			
			<input type="text" placeholder="User Name" name="name"  required />
			<input type="email" placeholder="email" name="email" required />
			<input type="password" placeholder="Password" name="pass" id="password1" required />
			<input type="password" placeholder="Password" name="cpass" id="password2" required />
			
			
		
			<button class="btn" name="submit">Signup</button>
		</form>
        </div>
	

</div>
<!-- footer -->
<div class="footer">
    <div class="box-container">
        <div class="box">
        <h3>contact info</h3>
        <p><i class="fas fa-map-marker-alt"> delhi</i></p>
        <p><i class="fas fa-envelope"> abc@gmail.com</i></p>
        <p><i class="fas fa-phone"> 921897827</i></p>
        <p><i class="fas fa-phone"> 893278974</i></p>
    </div>
    <div class="box">
        <h3>branch location</h3>
        <a href="">india</a>
        <a href="">USA</a>
        <a href="">france</a>
        <a href="">russia</a>
    </div>
    <div class="box">
        <h3>quick links</h3>
        <a href="">home</a>
        <a href="">about</a>
        <a href="">menu</a>
        <a href="">popular</a>
        <a href="">gallery</a>
        <a href="">order</a>
    </div>
    <div class="box">
        
        <h3>follow us</h3>
        <a href="">facebook</a>
        <a href="">twitter</a>
        <a href="">instagram</a>
    </div>
    </div>
    <h1 class="credit">create by <a href="#">kritika sharma</a> all rights reserved. </h1>
</div> 
</body>
</html>