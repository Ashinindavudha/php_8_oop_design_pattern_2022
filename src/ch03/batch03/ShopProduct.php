<?php 
namespace Ashin\ch03\batch03;
class ShopProduct {
 public $title;
 public $producerMainName;
 
 public function set_name($title){
  $this->title = $title;
 }
 public function get_name(){
  return $this->title;
 }
}

$shop = new ShopProduct();
$shop->set_name('My Book');
echo $shop->get_name();