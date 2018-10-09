<?php 
  // Load Stripe's PHP library and set your secret keys
  require_once("config.php"); 
  // Create the subscription
  require_once("create-subscription.php"); 
?>
<html>
  <head>
    <style>
      .spacing {
        margin-top:20px;
      }
      .success {
        color: #fff;
        background-color: green;
      }
      .error {
        color: #fff;
        background-color: red;
      }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php if (isset($success)): ?>
      <div class='success'><?php echo $success; ?></div>
    <?php else: ?>
      <?php if (isset($error)): ?>
        <div class='error'><?php echo $error; ?></div>
      <?php endif ?>       
      
<style>
* {
    box-sizing: border-box;
}
body {
    margin:50px 0; 
    padding:0;
    text-align:center;
}

.content {
     
    margin:0 auto;
    text-align:left;
    padding:15px;
     
}

.columns {
    float: left;
    width: 33.3%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
    background-color: #111;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #eee;
    font-size: 20px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
 
<div class="content" style="width:60%;">
<h2 style="text-align:center">BTL Stripe Subscriptions</h2>
<h3 style="text-align:center">choose your plan</h3>

<div class="columns">
  <ul class="price">
    <li class="header">Basic</li>
    <li class="grey">$ 9.99 / month</li>
    <li>Access to all videos</li>
    <li>5 Support Emails</li>
    <li>1 Personalized class</li>
    <li class="grey">

        <form action="" method="POST" class="spacing">
        <input name="plan" type="hidden" value="BasicMonthly" />         
        <input name="interval" type="hidden" value="month" />         
        <input name="price" type="hidden" value="9.99" />         
        <input name="currency" type="hidden" value="usd" />         
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-image="http://placebeard.it/640/480"
          data-name="BASIC PLAN"
          data-description="Start with basic plan"
          data-panel-label="Subscribe Now"
          data-label="Let's do it!"
          data-locale="auto">
        </script>
      </form>
   

    </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Profesional</li>
    <li class="grey">$ 99.99 / year</li>
    <li>Access to all videos</li>
    <li>100 Support Emails</li>
    <li>20 Personalized classes</li>
    <li class="grey">
       <form action="" method="POST" class="spacing">
         
        <input name="plan" type="hidden" value="ProPlan" />         
        <input name="interval" type="hidden" value="year" />         
        <input name="price" type="hidden" value="99.99" />         
        <input name="currency" type="hidden" value="usd" />               
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-image="http://placebeard.it/640/480"
          data-name="Profesional PLAN"
          data-description="Start with the Pro plan"
          data-panel-label="Subscribe Now"
          data-label="I am a Pro, let's go!"
          data-locale="auto">
        </script>
      </form>
    </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#eebb0d">Premium</li>
    <li class="grey">$ 149.99 / year</li>
    <li>Unlimited Support</li>
    <li>5 personalized videos</li>
    <li>24 Personalized clases</li>
    <li class="grey">
<form action="" method="POST" class="spacing">     
        <input name="plan" type="hidden" value="Premium" />         
        <input name="interval" type="hidden" value="year" />         
        <input name="price" type="hidden" value="149.99" />         
        <input name="currency" type="hidden" value="usd" />           
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-image="http://placebeard.it/640/480"
          data-name="Premium PLAN"
          data-description="Start with Premium plan"
          data-panel-label="Subscribe Now"
          data-label="Carry on!"
          data-locale="auto">
        </script>
      </form>
    </li>
  </ul>
</div>

  <?php endif ?>  

</div>
  </body>
</html>