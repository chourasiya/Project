<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <link rel='icon' type='image/jpe' href='images/logo.jpe'>
        <title>Intern</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/solido.css">
        <link rel="stylesheet" href="css/isotope.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/vegas/jquery.vegas.css">
        <link rel="stylesheet" href="css/popup/magnific-popup.css">
		
        <link rel="stylesheet" href="js/superslides-0.6.2/dist/stylesheets/superslides.css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style_2.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	    <script src="http://fast.fonts.net/jsapi/3dca1e78-579f-4502-8da9-3eb91453e0dc.js"></script>
        <script type="text/javascript">
        function IngredientData(f1, f2, f3, f4)
        {
        	var v1 = document.getElementById(f1).value;
        	var v2 = document.getElementById(f2).value;
        	var v3 = document.getElementById(f3).value;
        	var v4 = document.getElementById(f4).value;
            alert(v1+"\n"+v2+"\n"+v3+"\n"+v4);
        }
	    </script>
        </head>

<body>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "intern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO recipe (name) VALUES (?)");
$stmt->bind_param("s", $Recipename);

// set parameters and execute
$Recipename = $_POST["fname"];
$stmt->execute();
$pid = mysqli_insert_id($conn);

$stmt->close();
$conn->close();
?>
<!--==============================
              header
=================================-->

   <div id="logx"></div>
        <header class="header">
           <nav id="nav2" role="navigation">
                <a class="jump-menu" title="Show navigation">Show navigation</a>
                <ul>
                    
                    <li></li>
                  
                    
                  </ul>
            </nav>
            <nav class="menu">
                <ul id="nav">
                    <li></li>
                    
                </ul>
            </nav>
        </header>
<!--=====================
          Content
======================-->

<div class="hello" id="contact-us">
	<div class="container">
		<div class="col-md-4">
			<h3>Register Here <span>Intern </span>  </h3>
		</div>
		
			<div class="clearfix"> </div>
				<p>All our prestigious participant should register here. </p>
				
				<div class="say">	
					<div class="col-md-5">
						<div class="icon">
							<i class="addres"> </i>
						</div>
						<div class="icon-data1">
							<h5>address</h5>
							<p>Speechify,Delhi(www.speechify.in)</p>
						</div>
							<div class="clearfix"> </div>
						<div class="icon">
							<i class="phone"> </i>
						</div>
						<div class="icon-data1">
							<h5>PHONE NUMBER</h5>
							<p>+91-9599910440<br/>+91-9897637911</p>
							
						</div>
							<div class="clearfix"> </div>
						<div class="icon">
							<i class="mail"> </i>
						</div>
						<div class="icon-data1">
							<h5>EMAIL</h5>
							<p>speechifyapp@gmail.com</p>
						</div>
							<div class="clearfix"> </div>			
					</div>
					<div class="col-md-7">
						<form action="welcm.php" method="post">
							<div class="text-field-firstname">
								<input type="text" class="text" name="name1" value="Ingredient Name" id="fname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingredient Name';}">
							</div>
							<div class="text-field-lastname">
								<input type="text" class="text" name="name2" value="Ingredient Name" id="lname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingredient Name';}">
							</div>
							<div class="text-field-email">
								<input type="text" class="text" name="name3" value="Ingredient Name" id="ename" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingredient Name';}">
							</div>
							<div class="text-field-name">
								<input type="text" class="text" name="name4" value="Ingredient Name" id="clgname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ingredient Name';}">
								<div class="user-img"></div>
							</div>
								<input type="hidden" name="pid" value=<?php echo $pid;?> />
							<div class="button">
								<input type="submit" value="submit" onclick="IngredientData('fname', 'lname', 'ename', 'clgname')">
							</div>
						</form>
							<div class="clearfix"> </div>		
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class="bottom">
					 
				</div>
	</div>
	<center> <p> Speechify. All rights reserved </p></center>
</div>
<script src="droppart.js"></script>
       

</body>
</html>

