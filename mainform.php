
<!DOCTYPE HTML>
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

.form-style input[type="text"],
.form-style input[type="date"],
.form-style input[type="file"],
.form-style textarea,
.form-style select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
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

#btn{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}

#btn:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}


</style>


<body>


<div class="form-style">
<h2>Employee Form</h2>
<form id="form1" action="insert.php" target="_blank" method="post" enctype="multipart/form-data" >

<div class="section"><span>1</span>
<label><h3>First name :</h3></label></div>
<div class="inner-wrap">
<input type="text" name="fname" placeholder="Enter first name" required></div>
<br><br>

<div class="section"><span>2</span>
<label><h3>Last name :</h3></label></div>
<div class="inner-wrap">
<input type="text" name="lname" placeholder="Enter last name" required> </div>
<br>
<br>     
          
<div class="section"><span>3</span>
<label><h3>Date of birth :</h3></label></div>
<div class="inner-wrap">
<input type="date" name="date_" placeholder="dd-mm-yyyy" required></div>
<br>
<br> 

<div class="section"><span>4</span>
<label><h3>Gender :</h3></label></div>
<br>
<br>
<div class="inner-wrap">
<input type="radio" name="gender" value="Male">
<label for="male">Male</label>
<br>
<input type="radio" name="gender" value="Female">
<label for="female">Female</label>
<br>
<input type="radio" name="gender" value="Others">
<label for="others">Others</label>
</div>
<br>
<br>

<div class="section"><span>5</span>
<label><h3>Qualification :</h3></label></div>
<div class="inner-wrap">
<select class="form-control dropdown" id="education" name="education">
<option value="" selected="selected" disabled="disabled">-- Select one --</option>
<option value="No formal education">No formal education</option>
<option value="Primary education">Primary education</option>
<option value="Secondary education">Secondary education or high school</option>
<option value="GED">GED</option>
<option value="Vocational qualification">Vocational qualification</option>
<option value="Bachelor's degree">Bachelor's degree</option>
<option value="Master's degree">Master's degree</option>
<option value="Doctorate or higher">Doctorate or higher</option>
</select>
</div>

<br>
<br>

<div class="section"><span>6</span>
<label><h3>Address :</h3></label></div>
<br>
<div class="inner-wrap">
<textarea name="address" rows="4" cols="50"></textarea>
</div>
<br>
<br>


<div class="section"><span>7</span>
<label><h3>Add profile picture :</h3></label></div>
<br>
<br>
<div class="inner-wrap">
<input type="file" id="img" name="img"  onchange="loadFile(event)" accept="image/*">
<br>
<br>
<img id="output" name="output" width="200" />
</div>
<br>


<button id="btn">Submit</button>

</form>

</div>

</body>

<script>
	 
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
		image.name='pic';
		localStorage.setItem("i",URL.createObjectURL(event.target.files[0]));
		
	};

	
	       
</script>
</html>