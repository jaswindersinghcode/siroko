<?php
/*DHAN DHAN SANT BABA ROSHAN SINGH JI HOTI MARDAN WALE

DHAN DHAN SANT BABA TARLOCHAN SINGH JI HOTI MARDAN WALE

DHAN DHAN SANT BABA HAZARA SINGH JI HOTI MARDAN WALE

*/
namespace CodeChallenge\Domain\Model\Product;
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private int $id;
    private string $name;

    private float $price;
    public function __construct(string $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function id(): int
    {
        return $this->id;
    }
    public function getName(): int
    {
        return $this->name;
    }
    public function price(): float
    {
        return $this->price;
    }
}
