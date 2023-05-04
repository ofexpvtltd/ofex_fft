<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ofexpvtltd@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->mailer = 'noreply@ofex.in';
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->from_contact = $_POST['contact'];
  $contact->from_company = $_POST['company'];
  $contact->from_fleet = $_POST['fleet'];
  $contact->subject = 'Demo Requested by ' . $_POST['name'] . ' from ' . $_POST['company'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => '',
    'username' => '',
    'password' => '',
    'port' => ''
  ); */
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message($_POST['company'], 'Company');
  $contact->add_message($_POST['contact'], 'Contact Number');
  $contact->add_message($_POST['fleet'], 'Fleet Size');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
