<?php
session_start();
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51LuW0DBiZIinvGztjdd3wQxqTxihUsiNndy3tD5XeE3YKVHpa58MAmRK3LGgjsctvyCJt2ePzWOIAked77VFJF5600fCNcmujd');

$productos = [];

  
foreach ($_SESSION['carrito'] as $key => $value) {
    array_push($productos,[
        'price_data' => [
          'currency' => 'eur',
          'product_data' => [
            'name' => $value["titulo"],
          ],
          'unit_amount' =>intval( $value["precio"])*100,
        ],
        'quantity' => $value["cantidad"],
    ]);

    }

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],

  


   'line_items' => [
    
    $productos
    
    
    
    
    ],
      
  
  "billing_address_collection"=>"required",
  'mode' => 'payment',
  'success_url' => 'http://localhost/Curso%20PHP/Curso-PHP-Inicio/Pr%C3%A1cticas/Practica%20carrito/Pagorealizado.php',
  'cancel_url' => 'http://example.com/cancel',
]);

?>



<html>
  <head>
    <title>Buy cool new product</title>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <button id="checkout-button">Checkout</button>
    <script>
      var stripe = Stripe('pk_test_51LuW0DBiZIinvGztIeWx5YcsZJeAb1UpM4cwEe5N1yesXzymKgNarbWIcKSu5IolWyWLHtjmrU5Qc8IVPYjHyr6m00B02ZK7MS');
      const btn = document.getElementById("checkout-button")
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        stripe.redirectToCheckout({
          sessionId: "<?php echo $session->id; ?>"
        });
      });
    </script>
  </body>
</html>