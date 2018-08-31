<!DOCTYPE html>
<html>
<head>
	<title>Online Ordering Shoes</title>
	<link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
<div id="header">
	<header>
	<div class="logo"><a href="">Shoes Logo</a></div>
	<nav>
	<ul>
		<li><a href="login.php">Log in</a>
		<li><a href="signout.php">Sign out</a>
		<li><a href="about.php">About</a>
		<li><a href="home.php">Home</a>
	</ul>
	</header>
	</nav>
	</div>
<form>
	   Firstname:<br>
  	<input type="text" name="firstname"><br>
  	Lastname:<br>
  	<input type="text" name="lastname"><br>
  	Birtday:<br>
  	<input type="date" name="date"><br>
  	Gender:<br>
  	<input type="radio" name="gender">Male<br>
  	<input type="radio" name="gender">Female<br>
  	<br>
  	<input type="button" value="Add">
  	<input type="button" value="Delete">
  	<input type="button" value="Edit">
 </form>
 <br>
 <table id="table" border="1" >
  <tr style="background: green; color: white">
    <th>User ID</th>
    <th>Lastname</th> 
    <th>Firstname</th>
    <th>Gender</th>
    <th>Option</th>
  </tr>
  <tr style="background: blue; color: white">
    <td>1</td>
    <td>Mang Kepweng</td> 
    <td>Mang Kanor</td>
    <td>LGBT Member</td>
    <td>Ang sakit maging ganito</td>
  </tr>
  <tr style="background: blue; color: white">
  	<td>2</td>
    <td>Banhaw</td>
    <td>Pedring</td> 
    <td>Lesbian with Extra Gay</td>
    <td>Yung tipong mahal na mahal mo siya pero option ka lang pala!</td>
  </tr>
</table>

<footer>
	Copyright&copy;2018
</footer>
</body>
</html>