<?php # PROCESS LOGIN ATTEMPT.

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Open database connection.
  require ( 'connect_db.php' ) ;

  # Get connection, load, and validate functions.
  require ( 'login_tools.php' ) ;

  # Check login.
  list ( $check, $data ) = validate ( $link, $_POST[ 'email' ], $_POST[ 'password' ] ) ;

  # On success set session data and display logged in page.
  if ( $check )  
  {
    # Access session.
    session_start();
    $_SESSION[ 'userID' ] = $data[ 'userID' ] ;
    $_SESSION[ 'fname' ] = $data[ 'fname' ] ;
    $_SESSION[ 'lname' ] = $data[ 'lname' ] ;
	$_SESSION[ 'username' ] = $data[ 'username' ] ;
	$_SESSION[ 'dob' ] = $data[ 'dob' ] ;
	$_SESSION[ 'email' ] = $data[ 'email' ] ;
    load ( 'feed.html' ) ;
  }
  # Or on failure set errors.
  else { $errors = $data; }

  # Close database connection.
mysqli_close( $link ) ; 
}

# Continue to display login page on failure.
include ( 'login.html' ) ;

?>