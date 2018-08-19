<?php
require_once('vendor/stripe/init.php');
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_live_pB7iUzhCEBmEbl3rwDDXFqCy");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
    'amount' => 2900,
    'currency' => 'usd',
    'description' => 'Crafthome Consulting Service',
    'source' => $token,
]);
    Echo "<html>";
    Echo "<p>Thank you for choosing us! Please allow 1 business day for the payment to process. We will contact you shortly</p>"
?>