<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Telephonic | Confirmation </title>
		<meta name="author" content="Pooja" />
		<meta name="description" content="Telephone promoting website" />
		<link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    </head>
  <!--PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.PHP scripts are executed on the server and is free to use and download. The default file extension for PHP files is ".php".
    A PHP script starts with < ?php and ends with ?>-->
    <body>
        <header>
        </header>
        <main>
            <div class="form-container">
            <?php   
/* In PHP, a variable starts with the $ sign, followed by the name of the variable.We do not need to define the type of variable.*/
            /*Value can be accessed from the Form.html file and is used here to declare a messsage to the user.*/
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$type=$_GET['type'];
$province=$_GET["province"];
$address=$_GET["address1"];

// Create an array to store value of cities
$prov=array( 
    1=>"Ontario",  
    2=>"Quebec",
    3=>"British Columbia",
    4=>"Sasketcahwan");
$city=array(
    $ontario=>$_GET["Ontario"],
    $quebec=>$_GET["Quebec"],
    $british=>$_GET["British"],
    $sasketcahwan=>$_GET["sasketcahwan"]    
);
// Using if else to print Province selected by user 
  
/*
            In place of GET method we can also use POST method ,both will function the same way.
            echo function can be used to print any information.Two or more statements can be concatenated using '.' .
            */
echo('<br/>Hi <b>'.$fname.' '.$lname.'</b> Thank You for ordering telephone from our website we hope you like it.<br/> Your telephone will be delivered to you soon '.$address.'. <br/>') ;
echo('<br/>Congrats, Now you will be connected to your loved ones from <b>'.$prov[$province].'</b> or from anywhere and can hear them from any part of the world......<br/>');
echo('<br/>Thanks for your orders we hope you visit again.')



?>
</div>
        </main>
    </body>
</html>

