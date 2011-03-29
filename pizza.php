<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Do some SEO here and such.... -->

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!-- Space for any JavaScript and CSS linking -->

<title>Syntekz Pizza</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>	
<?php require('functions.php'); ?>
<?php require('cookies/cookies.php');?>

<body>
<!-- Add in element ID and Classes as we go for CSS -->
    <div>
    	<h1>Syntekz Pizza Online Order System</h1>
    	<form id="pizzaOrder" method="post" action="">
        	<table>
            	<tr>
                	<td><label>First Name<br /><input name="fName" type="text" value="<?php docName(fName, 'First Name')?>" /></label><br /></td>
                    <td><label>Last Name<br /><input name="lName" type="text" value="Last Name" /></label></td>
                    <td><label>Phone<br /><input name="phone" type="text" maxlength="10" value="Phone" /></label></td>
               	</tr>
                
                <tr>
                	<td><label>Address<br /><input name="address" type="text" value="Address" /></label></td>
                    <td><label>City<br /><input name="city" type="text" value="City" /></label></td>
                    <td><label>State<br /><input name="state" type="text" maxlength="2" value="State" /></label></td>
                    <td><label>Zip Code<br /><input name="zip" type="text" maxlength="5" value="Zip"/></label></td>
               	</tr>
                <tr>
                	<td><label>Name on Card<br /><input name="cName" type="text" /></label></td>
                </tr>
                <tr>
                    <td><label>Card Number<br /><input name="cNumber" type="text" /></label></td>
                </tr>
                <tr>
                	<td><label>CVM Number&nbsp; <a href="">[?]</a><br /><input name="cvm" type="text" size="3" maxlength="3" /></label></td>
                </tr>
                <tr>
                    <td><label>Expiration Date<br /><select name="exMonth">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>&nbsp;
                   	<select name="exYear">
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                   	</select></label></td>
                </tr>
                <tr>
                	<td><label>Pizza Type</label><br />
                    <select name="pizzaType">
                	  <option value="1">Deep Dish</option>
                	  <option value="2">Hand Tossed</option>
                	  <option value="3">Thin</option>
                	  <option value="4">Stuffed Crust</option>
                	  <option value="5">Calzone</option>
                	</select>
                        
                  	</td>
                    <td><label>Pizza Size<br />
                    <select name="pizzaSize">
                      <option value="1">Personal</option>
                      <option value="2">Small</option>
                      <option value="3">Medium</option>
                      <option value="4">Large</option>
                      <option value="5">Family</option>
                    </select>
                    	</label>
                  	</td>
             	</tr>
                <tr>
                	<td><label>Toppings</label><br />                	      
                	        <label><input type="checkbox" name="toppings[]" value="Cheese" id="toppings_1" />
                	        Cheese</label><br />
              	            <label><input type="checkbox" name="toppings[]" value="Pepperoni" id="toppings_2" />
                	        Pepperoni</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Sausage" id="toppings_3" />
                	        Sausage</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Hamburger" id="toppings_4" />
                	        Hamburger</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Ham" id="toppings_5" />
                	        Ham</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Bacon" id="toppings_6" />
                	        Bacon</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Chicken" id="toppings_7" />
                	        Chicken</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Anchovies" id="toppings_8" />
                	        Anchovies</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Onions" id="toppings_9" />
                	        Onions</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Green Peppers" id="toppings_10" />
                	        Green Peppers</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Mushrooms" id="toppings_11" />
                	        Mushrooms</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Jalapenos" id="toppings_12" />
                	        Jalapenos</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Pineapples" id="toppings_13" />
                	        Pineapples</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Tomatoes" id="toppings_14" />
                	        Tomatoes</label><br />
                            <label><input type="checkbox" name="toppings[]" value="Black Olives" id="toppings_15" />
                	        Black Olives</label>
                   	</td>
               	</tr>
                <tr>
                	<td><input name="send" type="submit" />&nbsp;<input name="" type="reset" /></td>
              	</tr>
            </table>
        </form>
    </div>


<!--  Error Check -->

<?php 

?>
<div class="error">
<p>
<?php	
$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$cvm = $_POST['cvm'];
	
	$formArray = array(
	$fName, $lName, $phone, $address, $city, $state, $zip
	);
formCheck($formArray);
checkNumLen($phone, 9);
checkNumLen($cvm, 3);
?>
</p>
</div>
<?php echo $fName; ?><br />
<?php echo $lName; ?><br />
<?php echo $_POST['phone']; ?><br />
<?php echo $_POST['address']; ?><br />
<?php echo $_POST['city']; ?><br />
<?php echo $_POST['state']; ?><br />
<?php echo $_POST['zip']; ?><br />
<?php echo $_POST['cName']; ?><br />
<?php echo $_POST['cNumber']; ?><br />
<?php echo $_POST['cvm']; ?><br />
<?php echo $_POST['exMonth']; ?><br />
<?php echo $_POST['exYear']; ?><br />
<?php echo $_POST['pizzaType']; ?><br />
<?php echo $_POST['pizzaSize']; ?><br />
<?php
  $toppings = $_POST['toppings'];
  if(empty($toppings))
  {
    echo("You didn't select any toppings.");
  }
  else
  {
    $N = count($toppings);
 
    echo("You selected $N toppings(s): ");
    foreach ($toppings as $t)
    {
      echo $t . ' ';
    }
  }
?>

</body>
</html>
