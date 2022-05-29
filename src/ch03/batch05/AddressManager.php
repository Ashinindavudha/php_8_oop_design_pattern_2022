<?php
namespace Ashin\ch03\batch05;
//include ("../../../vendor/autoload.php");
class AddressManager{
private $addresses = ["209.131.36.159", "216.58.213.174"];

public function outputAddresses($resolve){
 foreach($this->addresses as $address) {
  print($address);
  if($resolve){
   print(" - " . gethostbyaddr($address) . "\n");
  } else {
   print("\n");
  }
 }
}
}