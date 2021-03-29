<?php
namespace Module\ProductModule\Domain;

class Product
{
    private string $name;
    private string $code;
    private float $price;
    private string $category;

    /**
     * Product constructor.
     * @param string $name
     * @param string $code
     * @param float $price
     * @param string $category
     */
    public function __construct(string $name, string $code, float $price, string $category)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
    }

    public static function fromObjToArr(Product $product): array
    {
        foreach ($product as $key => $value){
            $productArr[$key] = $value;
        }
        return $productArr;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public static function fromArrToObj(array $data): self
    {
        return new self($data['name'], $data['code'], $data['price'],$data['category'] );
    }

}