<?
	//define the receiver of the email
	
	define('TO_NAME','Rbista');
	define('TO_EMAIL','johnkirkhoughton1@gmail.com');
	define('SUBJECT','Contact from your website');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',false); // True to enable SMTP
	define('SMTP_HOST','smtp.gmail.com');
	define('SMTP_USERNAME','johnkirkhoughton1@gmail.com');
	define('SMTP_PASSWORD','Pi314159@^');

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>