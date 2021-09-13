<!DOCTYPE html>
<html>
<head>
	<title>I'mTracker</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
	body{
		margin: 0;
		padding: 0;
	}
	nav{
    	background-color: #fefefe;
    }
    .box-homepage{
    	height: 500px;
    	box-shadow: 8px 5px 5px #c0c0c0;
    	position: relative;
    	word-wrap: break-word;
    	background: linear-gradient(to bottom, #33ccff 0%, #fefefe 56%);
    	border-radius: 10px;
    }
    .box-homepage img{
    	width: 100%;
    	height: 500px;
    }
    .time-quote{
    	
    }
    .time-quote img{
    	width: 200px;
    	height: 200px;
    }
    .login-form{
    	box-shadow: 8px 5px 5px #c0c0c0;
    	padding: 10px;
    }
</style>

<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">I'mTracker</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">

  <div class="row">
  		<div class="col-md-7">
  			<div class="box-homepage">

  			<div class="col-sm-7">
  				<img src="images/clock.png" title="clock image for homepage">
  			</div>
  			<div class="col-sm-5 time-quote">
  			<h1>The Way</h1>
  			<h2>we spend our</h2>
  			<h2>time</h2>
  			<h3>defines</h3>
  			<h4>who we are</h4>

  				<img src="images/time-to-work.jpg" title="image time to work">
  			</div>

  			</div>
  		</div>

  		<div class="col-md-5">

  			<form method="post" action="" class="login-form">
  				<h1>Login</h1>
  				<label>Username</label>
  				<input type="text" name="username" class="form-control">
  				<label>Password</label>
  				<input type="password" name="" class="form-control"><br>
  				<input type="submit" name="" value="Login">
  			</form>
  			
  		</div>

  </div>

</div>

</body>
</html>