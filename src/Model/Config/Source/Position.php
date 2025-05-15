<?php
namespace SR\UserwayAccessibility\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Position implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            ['value' => '1', 'label' => __('Top Right')],
            ['value' => '2', 'label' => __('Center Right')],
            ['value' => '3', 'label' => __('Bottom Right')],
            ['value' => '4', 'label' => __('Bottom Center')],
            ['value' => '5', 'label' => __('Bottom Left')],
            ['value' => '6', 'label' => __('Center Left')],
            ['value' => '7', 'label' => __('Top Left')],
            ['value' => '8', 'label' => __('Top Center')],
        ];
    }
}
