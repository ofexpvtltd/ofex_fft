<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ofexpvtltd@gmail.com';
  
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  // Gather form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $company = $_POST['company'];
  $fleet = $_POST['fleet'];
  $message = $_POST['message'];

  // Submit data to Google Form
  $formData = [
    'entry.645145372' => $name,
    'entry.1653401476' => $email,
    'entry.1784894739' => $contact,
    'entry.2088655159' => $company,
    'entry.1929734809' => $fleet,
    'entry.577908006' => $message,
  ];

  $googleFormUrl = 'https://docs.google.com/forms/d/e/1FAIpQLSc4ANalXhRJoOm1Kj0xdbAx8rNbl57Uiz8-Z78muGqG2RdLBg/formResponse';

  $options = [
    'http' => [
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'method' => 'POST',
        'content' => http_build_query($formData),
    ],
  ];

  $context = stream_context_create($options);
  $result = file_get_contents($googleFormUrl, false, $context);


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
 
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message($_POST['company'], 'Company');
  $contact->add_message($_POST['contact'], 'Contact Number');
  $contact->add_message($_POST['fleet'], 'Fleet Size');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
