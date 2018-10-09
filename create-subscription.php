<?php 
  // Check for a POSTed stripeToken and subscription
  if (isset($_POST['stripeToken']) && isset($_POST['plan'])){
    try {
  
    
	
	$plan = \Stripe\Plan::create(array(
			  //"name" => $_POST['plan'],
			  "id" => "plan-".$_POST['plan'],
			  "interval" => $_POST['interval'],
			  "currency" => $_POST['currency'],
        "amount" => $_POST['price']*100,
        "product" => array(
          "name" => $_POST['plan']
        ),
			));

	$customer = \Stripe\Customer::create(array(
	  "email" => $_POST['stripeEmail'],
	  "source" => $_POST['stripeToken'], // The token submitted from Checkout
	));
	
	\Stripe\Subscription::create(array(
	  "customer" => 'cus_4fdAW5ftNQow1a',
	  "items" => array(
		array(
		  "plan" => "plan-".$_POST['plan'],
		),
	  ),
	));

     
      $success = "Thanks! You've subscribed to the " . $_POST['plan'] .  " plan.";
    }
    catch(\Stripe\Error\Card $e) {
      // Since it's a decline, \Stripe\Error\Card will be caught
      $body = $e->getJsonBody();
      $error  = $body['error']['message'];
    } 
    // Probably want to log all of these for later or send yourself a notification
    catch (\Stripe\Error\RateLimit $e) {
      $error = "Sorry, we weren't able to authorize your card. You have not been charged. RateLimit";
    } catch (\Stripe\Error\InvalidRequest $e) {
      $error = "Sorry, we weren't able to authorize your card. You messed up your code. Invalid Request";
    } catch (\Stripe\Error\Authentication $e) {
      $error = "Sorry, we weren't able to authorize your card. You have not been charged. Authentification";
    } catch (\Stripe\Error\ApiConnection $e) {
      $error = "Sorry, we weren't able to authorize your card. Network problem, try again.";
    } catch (\Stripe\Error\Base $e) {
      $error = "Sorry, we weren't able to authorize your card. You have not been charged. Base";
    } catch (\Stripe\Error\Api $e) {
      $error = "Sorry, stripes servers are down.";
    } catch (Exception $e) {
      $error = "Sorry, we weren't able to authorize your card. You have not been charged.";
    }
  }
?>