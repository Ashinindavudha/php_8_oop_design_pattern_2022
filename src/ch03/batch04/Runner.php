<?php 
namespace Ashin\ch03\batch04;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch04\ShopProduct;

class Runner {
 public static function run(){
  $product = new ShopProduct(
   "My Antonia",
   "Willa",
   "Cather",
   5.99
  );
  print "author: {$product->getProducer()}\n";
 }
}

Runner::run();