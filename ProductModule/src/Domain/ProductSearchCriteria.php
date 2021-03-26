<?php
namespace Module\ProcuctModule\Domain;

class ProductSearchCriteria{
    private string $name;
    private string $category;
    private int $limit;
    private int $page;
    
    
    public function __construct(string $name ='', string $category ='', int $limit = 10, int $page = 1){
            $this->name = $name;
            $this->$category = $category;
            $this->$limit = $limit;
            $this->$page = $page;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getLimit(){
        return $this->limit;
    }

    public function setLimit($limit){
        $this->limit = $limit;
    }

    public function getPage(){
        return $this->page;
    }

    public function setPage($page){
        $this->page = $page;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category = $category;
    }
    
}