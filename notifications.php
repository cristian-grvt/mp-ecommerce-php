<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

file_put_contents("php://stderr", "$_POST\n");


// switch($_POST["type"]) {
//   case "payment":
//       $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
//       file_put_contents("php://stderr", "$payment\n");
//       file_put_contents("php://stderr", "$$_POST\n");
//       break;
//   case "plan":
//       $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
//       break;
//   case "subscription":
//       $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
//       break;
//   case "invoice":
//       $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
//       break;
// }

?>