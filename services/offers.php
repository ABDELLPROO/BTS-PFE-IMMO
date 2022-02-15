<?php 

class OffersService {
  function __construct() {
    $this->offers = array();
  }

  function addOffer(string $offer) {
    $this->offers[] = $offer;

    return [
      'status' => 'success',
      'data' => [
        'id' => count($this->offers) - 1,
        'offer' => $offer
      ]
    ];
  }
}

?>