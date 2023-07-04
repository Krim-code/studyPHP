<?php 
include 'includes/autholoader.inc.php';

if(isset($_POST['log'])){
    if(empty($_POST["log"]["login"]) or empty($_POST["log"]["password"])){
        echo "Write login or password ,please";
    }
    else{
        $login = new Login($_POST["log"]["login"],$_POST["log"]["password"]);
    }
  
}


if(isset($_POST['reg'])){
    if(empty($_POST["reg"]["login"]) or empty($_POST["reg"]["password"]) or empty($_POST["reg"]["secret"])){
        echo "Write login or password ,please";
    }
    else{
        $reg = new Reg($_POST["reg"]["login"],$_POST["reg"]["password"],$_POST["reg"]["secret"]);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SecretApp</title>
   <link rel="stylesheet" href="static/css/style.css">
  
</head>
<body>
<?php if(!isset($_SESSION["logged_in"])){ ?>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method ="POST">
			<h1>Create Your Secret</h1>
			<span></span>
			<input type="text" placeholder="Login" name="reg[login]" />
			
			<input type="password" placeholder="Password" name="reg[password]" />
            <input type="text" placeholder="Your Secret" name="reg[secret]"/>
			<button>Create</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method ="POST">
			<h1>Show Secret</h1>
			<span>or use your account</span>
			<input type="text" placeholder="Login" name="log[login]"/>
			<input type="password" placeholder="Password" name="log[password]" />
			<p>Forgot your password? Your secret will never be returned :(</p>
			<button>SHOW </button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Do you want to know the secret?</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Login</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Create Your Secret!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Create</button>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
    <div>
        <h1>SECRET:</h1>
        <p style = "text-align:center;">
        <?php 
        echo $_SESSION["secret"]; 
        ?>
        </p>
        <a href='logout.php'>Click here to log out</a>
    </div>

<?php } ?>

<script src="static/js/registation_forms.js"></script>
</body>
</html>