<?php

declare(strict_types=1);

namespace App\Entity\Product\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\CoreBundle\Form\Extension\ProductTypeExtension;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeColorExtension extends AbstractTypeExtension
{
    private ProductTypeExtension $productTypeExtension;

    public function __construct(ProductTypeExtension $productTypeExtension)
    {
        $this->productTypeExtension = $productTypeExtension;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->productTypeExtension->buildForm($builder, $options);

        $builder->add('color', ChoiceType::class, [
            'empty_data' => null,
            'required' => false,
            'choices' => Product::SUPPORTED_COLORS,
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
