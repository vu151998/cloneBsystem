<?php
namespace App\cart;
class cartService{
    public $services = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;
    public function __construct($cartService)
    {
        if($cartService){
            $this->services = $cartService->services;
            $this->totalPrice = $cartService->totalPrice;
            $this->totalQuantity = $cartService->totalQuantity;
        }
    }
    public function addCartService($service, $id){
        $newService = ['quantity' => 0, 'price' => $service->price,'serviceInfo' => $service];
        if($this->services){
            if(array_key_exists($id, $this->services)){
                $newService = $this->services[$id];
            }
        }
        $newService['quantity']++;
        $newService['price'] = $newService['quantity'] * $service->price;
        $this->services['id'] = $newService;
        $this->totalPrice += $service->price;
        $this->totalQuantity++;
    }
}
