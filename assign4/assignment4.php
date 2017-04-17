<!DOCTYPE HTML>
<html>
<head>
<style text="type/css">
.form{
	width:350px;
   background-color:#68C237;
	margin-left:500px;
	margin-top:50px;
	padding:10px;
	border:1px solid #abc;
	border-radius:3px;
  	box-shadow:  0px 10px 15px rgba(0, 0, 0, 0.2);
}
.form2{
	width:350px;
	background-color:#D5F254;
	margin-left:500px;
	margin-top:50px;
	padding:10px;
	border:1px solid #abc;
	border-radius:3px;
  	box-shadow:  0px 10px 15px rgba(0, 0, 0, 0.2);
}
.input input{
	width:340px;
border-radius: 4px;
	
}

.submit button{
     margin-left:250px;
	 width:100px;
	 height:30px;
	 font-size:16px;
	 color:rgb(109, 157, 219);
	 	border-radius: 4px;
	text-align:center;
	cursor:pointer;
}
.submit button:hover{
	background-color:#D5F254;
border:1px solid #fff;

font-size:16px;
color:#fff;
}
</style>


</head>
<body>
<div class="form">
<form action="" method="POST" name="myForm" >
<div class="input">
<label >Name:</label><br>
<input type="text" name="name" required>
</div>
<br>
<div class="input">
<label>Email:</label><br>
<input type="text" name="email" required>
</div>
<br>
<div class="input">
<label>Phone:</label><br>
<input type="number" name="phone" required>
</div>
<br>
<div class="input">
<label>Age:</label><br>
<input type="number" name="age" required>
</div>

<div class="submit">
<br>
<button type="button" onclick="validation();" >Submit</button>
</div>
</form>
</div>

<script type="text/javascript">

function validation(){
	
	var w = document.forms["myForm"]["name"].value;
	var x = document.forms["myForm"]["email"].value;
	
	var y = document.forms["myForm"]["phone"].value;
	
	var z = document.forms["myForm"]["age"].value;
	
	if(w==null||w=="")
	{
		 alert("Name must be filled out");
        return false;
	}
	if(x==null||x=="")
	{
		     alert("Email must be filled out");
        return false;
	}
	if(y==null||y=="")
	{
		     alert("Phone must be filled out");
        return false;
	}
	if(z==null||z=="")
	{
		     alert("Age must be filled out");
        return false;
	}
	if(w.length>20){
		  alert("Name Should not be greater than 20");
        return false;
	}
	if(y.length>11||y.length<11){
		  alert("Phone No  must be 11 in length");
        return false;
	}
	if(z>40||z<18)
	{
		alert("Only 18 to 40 aged people are allowed");
		return false;
	}
	var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
	if(!x.match(pattern))
	{
		alert("Please Enter Valid Email Address");
	}

}

</script>
<!--
<div class="form2">
      <h3 id="one"></h3>
	  <h3 id="two"></h3>
	  <h3 id="three"></h3>
	  <h3 id="four"></h3>
</div> 
-->
</body>
</html>