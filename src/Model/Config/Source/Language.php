<?php
namespace SR\UserwayAccessibility\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Language implements OptionSourceInterface
{
    public function toOptionArray(): array
    {
        return [
            ['value' => 'en', 'label' => __('English')],
            ['value' => 'he', 'label' => __('Hebrew')],
            ['value' => 'fr', 'label' => __('French')],
            ['value' => 'de', 'label' => __('German')],
            ['value' => 'es', 'label' => __('Spanish')],
        ];
    }
}
