<?php
namespace SR\UserwayAccessibility\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Type implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            ['value' => '1', 'label' => __('Person')],
            ['value' => '2', 'label' => __('Wheelchair')],
            ['value' => '3', 'label' => __('Eye')],
            ['value' => '4', 'label' => __('Text')],
        ];
    }
}
