<?php

$env = parse_ini_file('.env');

// Keep your Stripe API key protected by including it as an environment variable
// or in a private script that does not publicly expose the source code.

// This is your test secret API key.
// Don't put any keys in code. See https://docs.stripe.com/keys-best-practices.
$stripeSecretKey = $env['STRIPESECRETKEY'];

// Base URL where this integration is hosted (no trailing slash).
$siteBaseUrl = 'https://www.at-school-portal.com';

// Moodle REST configuration.
$moodleDomainName = 'https://www.at-school-portal.com/moodle';
$moodleWebserviceToken = $env['TOKEN'];
$moodleRestFormat = 'json';

// Enrollment target.
$moodleCourseId = 24;
$moodleSubscriptionCourseIds = [26, 27];
$moodleStudentRoleId = 5;

// Checkout configuration.
$courseDisplayName = 'Course Enrollment';
$courseAmountOne = 500;
$courseAmountTwo = 10000;
$courseCurrency = 'jpy';
$checkoutModeOne = 'payment';
$checkoutModeTwo = 'subscription';
$endpointSecret = $env['ENDPOINTSECRET'];

// Email configuration.
$emailFromAddress = 'support@at-school-portal.com';
$emailFromName = '@School Support';
$emailUser = $env['EMAILUSER'];
$emailPassword = $env['EMAILPASSWORD'];
$emailHost = 'mail.at-school-portal.com';