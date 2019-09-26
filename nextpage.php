<?php

if(isset($_POST['username'],$_POST['password'])){
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  if($uname == 'admin' && $pwd == '123'){
    echo '<h3>Successfully logged in</h3>';
  
  }
  else{
    echo 'Invalid Credentials';
    exit();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cross Site Request Forgery Protection</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" id="bootstrap-css">
	<script>

	$(document).ready(function(){
	
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
		}
	
	
	};
	
	xhttp.open("GET", "csrf_token_generator.php", true);
	xhttp.send();
	
	});
</script>
	
</head>
<body>

	  <div class="overlay">
<form action="home.php" method="post">
   <div class="con">
   <header class="head-form">
      <h2>****</h2>
      <p>Cross Site Request Forgery - Synchronizer Token Pattern</p>
   </header>
   <br>
   <div class="field-set">
<p>Write something</p>
         <input class="form-input" id="txt-input" type="text" name="updatepost">
      <br>
      <div>
      <input type="hidden" name="token" value="" id="token_to_be_added">
    </div>
      <br>
      <button class="log-in" type="submit" value="updatepost">Update </button>
   </div>
  </div>
</form>
</div>

</body>
</html>