<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Home Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'info@omnivodigital.com',
		'to' => 'info@omnivodigital.com'
	),
	'recaptcha2' => array(
		'private_key' => '6LccNK4UAAAAAP-DNzGQ-4_usvgxyV8nAJ6Jjy0p'
	),
	'fields' => array(
		'custom_U86478' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 4,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U86483' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U86487' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Company',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Company\' is required.'
			)
		),
		'custom_U86491' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Custom\' is required.'
			)
		),
		'g-recaptcha-response' => array(
			'order' => 6,
			'type' => 'recaptcha2',
			'label' => 'Image Verification',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Image Verification\' is required.',
				'format' => 'Incorrect reCAPTCHA 2.0 value.'
			)
		)
	)
);

process_form($form);
?>
