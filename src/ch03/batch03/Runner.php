<?php
namespace Ashin\ch03\batch03;
include("../../../vendor/autoload.php");

use Ashin\ch03\batch03\ShopProduct;
class Runner {
 public static function run(){
  $shop = new ShopProduct();
  $shop->set_name('My Book');
  echo $shop->get_name();
 }
} 
Runner::run();