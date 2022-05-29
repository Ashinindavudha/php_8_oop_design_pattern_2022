<?php 
namespace Ashin\ch03\batch04_1;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch4_1\ShopProduct;
class Runner {
 public static function run(){
  $product1 = new ShopProduct(
   "My Antonia",
   "Willa",
   "Cather",
   5.99
  );
  print "Author: {$product1->getProducer()}\n";
 }
}
Runner::run();