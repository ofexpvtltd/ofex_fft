<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ofexpvtltd@gmail.com';

      // Gather form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Submit data to Google Form
    $formData = [
      'entry.1991564936' => $name,
      'entry.1625402666' => $email,
      'entry.2036002166' => $subject,
      'entry.1808644484' => $message,
    ];

    $googleFormUrl = 'https://docs.google.com/forms/d/1FAIpQLSdARHkEaNZUw-3GIGLXO0q5Iwikqu3DWWXRKsqk6dfDFrVBKg/formResponse';

    $options = [
      'http' => [
          'header' => 'Content-Type: application/x-www-form-urlencoded',
          'method' => 'POST',
          'content' => http_build_query($formData),
      ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($googleFormUrl, false, $context);

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
  $contact->subject = $_POST['subject'];

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
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
