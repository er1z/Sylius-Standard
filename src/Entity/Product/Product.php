<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    const SUPPORTED_COLORS = [
        'red' => 1,
        'blue' => 2,
        'green' => 3,
    ];

    protected ?int $color = null;

    public function getColor(): ?int
    {
        return $this->color;
    }

    public function setColor(?int $color): void
    {
        $this->color = $color;
    }

    public function getColorString(): ?string
    {
        $values = array_flip(self::SUPPORTED_COLORS);

        return $values[$this->color] ?? null;
    }
}
