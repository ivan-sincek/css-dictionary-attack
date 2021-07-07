<?php
include_once './api/php/general.class.php';
$inputValue = '';
$errorMessage = '';
if (isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) === 'post' && isset($_POST['pwd'])) {
    $inputValue = General::output($_POST['pwd']);
    if (strlen($_POST['pwd']) < 1) {
        $errorMessage = 'Please enter password';
    } else if (strlen($_POST['pwd']) > 50) {
        $errorMessage = 'Password is exceeding 50 characters';
    } else {
        $errorMessage = "Last submitted: {$_POST['pwd']}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CSS Dictionary</title>
		<meta name="description" content="CSS dictionary.">
		<meta name="keywords" content="HTML, CSS, dictionary">
		<meta name="author" content="Ivan Šincek">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/main.css" hreflang="en" type="text/css" media="all">
	</head>
	<body>
		<div class="front-form">
			<div class="layout">
				<header>
					<h1 class="title">CSS Dictionary</h1>
				</header>
				<form method="post" action="./index.php">
					<label for="pwd">Password</label>
					<!-- attack is only possible if the sent value is echoed back -->
					<input name="pwd" id="pwd" type="password" maxlength="50" value="<?php echo $inputValue; ?>" autofocus="autofocus">
					<p class="error"><?php echo $errorMessage; ?></p>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>
