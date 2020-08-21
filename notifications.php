<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");


$merchant_order = null;

switch($_GET["topic"]) {
  case "payment":
      $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
      $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
      break;
  case "merchant_order":
      $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
      break;
}

?>