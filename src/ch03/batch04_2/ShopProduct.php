<?php 
namespace Ashin\ch03\batch04_2;

class ShopProduct {
 public function __construct(
        public $title,
        public $producerFirstName = "",
        public $producerMainName = "",
        public $price = 0
    ) {
    }

    // ...
/* /listing 03.19 */
    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}