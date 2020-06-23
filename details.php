<html>
<head>
	<title>Employee form</title>
</head>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style{
	width:450px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	margin-bottom: 15px;
}

.form-style h2{
	background: #2A88AD;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}

.form-style h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: 0px 0px 10px rgba(0, 0, 0, 0.13);
	margin-bottom: 15px;
}
.form-style .section{
	font: normal 20px 'Bitter', serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
</style>

<body>


<div class="form-style">
<h2>Employee Form</h2>

<div class="section"><span>1</span>
<label><h3>First name :</h3></label></div>
<div class="inner-wrap">
	<?php echo $_POST["fname"]; ?><br>
</div>

<div class="section"><span>2</span>
<label><h3>Last name :</h3></label></div>
<div class="inner-wrap">
	<?php echo $_POST["lname"]; ?><br>
</div>

<div class="section"><span>3</span>
<label><h3>Date of birth :</h3></label></div>
<div class="inner-wrap">
	<?php echo $_POST["date_"]; ?><br>
</div>

<div class="section"><span>4</span>
<label><h3>Gender :</h3></label></div>
<div class="inner-wrap">
	<?php echo $_POST["gender"]; ?><br>
</div>

<div class="section"><span>5</span>
<label><h3>Qualification :</h3></label></div>
<div class="inner-wrap">
	<?php echo $_POST["education"]; ?><br>
</div>

<div class="section"><span>6</span>
<label><h3>Address :</h3></label></div>
<br>
<div class="inner-wrap">
	<?php echo $_POST["address"]; ?><br>
</div>
</div>
</body>
</html>