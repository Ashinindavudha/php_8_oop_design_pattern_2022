<?php 
namespace Ashin\ch03\batch01;
include("../../../vendor/autoload.php");

use Ashin\ch03\batch01\ShopProduct;

class Runner {
 public static function run(){
  $product1 = new ShopProduct();
  $product2 = new ShopProduct();

  var_dump($product1);
  var_dump($product2);
 }
}
Runner::run();