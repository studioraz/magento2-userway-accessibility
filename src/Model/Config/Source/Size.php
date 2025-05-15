<?php
namespace SR\UserwayAccessibility\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Size implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            ['value' => 'small', 'label' => __('Small')],
            ['value' => 'large', 'label' => __('Large')],
        ];
    }
}
