<?php


//  Quick function to loop through regexs and compare to what is in _POST
//  
//  $regs    ->   associative array of regular expressions
//  $ferrors ->   error messages to display to the users asociative array



function validatePost( $regs , $ferrors )
{
	$errors = array();
	foreach( $regs as $k => $v )
	{
		if(!ereg( $v , $_POST[$k] ) )
		{
			$errors[$k] = $ferrors[$k];
		}
	}
	return $errors;
}

// has the post been submitted?
if( count( $_POST ) )
{
	// yes it has been submitted so lets validate
	$regs['lName']  = "^[[:alpha:]\ -]+$";  // require a alpha
	$regs['fName'] = "^[[:alpha:]\ -]+$";  // require a alpha
	$regs['email']      = "^..*\@..*$";         // VERY simple email check
	                                            // Use google to find better
												

	// Ok here are the error message to display when it is bad
	$ferrors['last_name']  = "Last name required";
	$ferrors['first_name'] = "First name required";
	$ferrors['email']      = "Email name required";

	$errors = validatePost( $regs , $ferrors );

	// Do we have errors?
	if( count( $errors ) == 0 )
	{
		echo 'It\'s all good';
	}
}
?>
