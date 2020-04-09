<!DOCTYPE html>
<html lang="en">


<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

 Add padding to containers
.container {
  padding: 16px;
}

input[type=text]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


a {
  color: dodgerblue;
}
</style>
<title>Add Records Form</title>

</head>



<body>

<form action="insert.php" method="post">

	 <div class="container">
	<p>
    	<label for="id">Id :</label>
    
    <input type="text" name="id" id="firstName">

    </p>
    <p>
  
  	<label for="firstName">First Name:</label>
   
     <input type="text" name="first_name" id="lastName">

    </p>
     <p>
   
     <label for="lastName">Last Name:</label>

    <input type="text" name="last_name" id="lastName">
  
  </p>
    <p>
   
 <label for="emailAddress">Email Address:</label>

  <input type="text" name="email" id="emailAddress">
    
</p>
    
<input type="submit" value="Add Records">
    
<a href="fetch.php">fetch</a>
</div>
</form>

</body>
</html>



