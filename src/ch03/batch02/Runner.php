<?php 
namespace Ashin\ch03\batch02;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch02\ShopProduct;

class Runner {
 public static function run() {
  $product1 = new ShopProduct();
  print $product1->title . "\n";
 }

 public static function run2(){
  $product1 = new ShopProduct();
  $product2 = new ShopProduct();
  $product1->title = "My Book";
  $product2->title = "Catch 22";
  
  print $product1->title . "\n";
  print $product2->title . "\n";
 }

 public static function run3() {
  $product1 = new ShopProduct();
  $product1->arbitraryAddition = "Four House";

  print $product1->arbitraryAddition . "\n";
 }
 public static function run4() {
  $product1 = new ShopProduct();
  $product1->title = "The Lord The Ring";
  $product1->producerMainName = "Tolkien";
  $product1->producerFirstName = "J.R.R.";
  $product1->price = 20;

    print "author: {$product1->producerFirstName} "
            . "{$product1->producerMainName}\n";
 }

 public static function run5(){
  $product1 = new ShopProduct();
  $product1->productFirstName = "နေ့သစ်များဆီသို့";
  $product1->producerMainName = "ချစ်ဦးညို";
   print "author: {$product1->productFirstName} \n "
            . "{$product1->producerMainName}\n";
        //print_r($product1);
 }

 public static function run6()
    {
        $product1 = new ShopProduct();
/* listing 03.11 */
        $product1->producerFirstName = "Shirley";
        $product1->producerSecondName = "Jackson";
/* /listing 03.11 */
        print "author: {$product1->producerFirstName} "
            . "{$product1->producerMainName}\n";
    }
}
Runner::run();
echo "<hr>";
Runner::run2();
echo "<hr>";
Runner::run3(); 
echo "<hr>"; 
Runner::run4();
echo "<hr>"; 
Runner::run5();
echo "<hr>"; 
Runner::run6();