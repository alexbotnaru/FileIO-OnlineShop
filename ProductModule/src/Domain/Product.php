<?php
namespace Module\ProcuctModule;

class Product {
    private string $name;
    private string $code;
    private float $price;
    private string $category;

        public function __construct(string $name, string $code, int $price, string $category){
            $this->name = $name;
            $this->$code = $code;
            $this->$price = $price;
            $this->$category = $category;

        }

        public function getName(){
            return $this->name;
        }
    
        public function setName($name){
            $this->name = $name;
            return $this;
        }
    
        public function getCode(){
            return $this->code;
        }
    
        public function setCode($code){
            $this->code = $code;

            return $this;
        }
    
        public function getPrice(){
            return $this->price;
        }
    
        public function setPrice($price){
            $this->price = $price;

            return $this;
        }
    
        public function getCategory(){
            return $this->category;
        }
    
        public function setCategory($category){
            $this->category = $category;

            return $this;
            
        }

}