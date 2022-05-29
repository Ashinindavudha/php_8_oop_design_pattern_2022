<?php 
namespace Ashin\ch03\batch04_2;
include ("../../../vendor/autoload.php");

use Ashin\ch03\batch04_2\ShopProduct;
class Runner {
 public static function run1(){
  $product = new ShopProduct(
  "My Antonia", 
  "Willa", 
  "Cather",
   5.99
  );
  print "author: {$product->getProducer()}\n";
 }

 public static function run2(){
  $product1 = new ShopProduct("Shop Catalogue");
  print "Author: {$product1->getProducer()}\n";
 }

 public static function run3(){
  $product1 = new ShopProduct("Shop Catalogue");
  print "Author: {$product1->getProducer()}\n";
 }

 public static function run4(){
  $product1 = new ShopProduct(price: 5.99, title: "Shop Catalogue");
  print "Title : {$product1->title}\n";
  print "Price : {$product1->price}\n";
 }
}

Runner::run1();
echo "<hr>";
Runner::run2();
echo "<hr>";
Runner::run3();
echo "<hr>";
Runner::run4();