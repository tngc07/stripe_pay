<?php

require_once('stripe-php/init.php');

$stripe = array(
  "secret_key"      => "sk_test_kz5YtgaWKLCr6kW27puJ8APx",
  "publishable_key" => "pk_test_3UsHheh23bwq8NJI9FIOzXFa"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>