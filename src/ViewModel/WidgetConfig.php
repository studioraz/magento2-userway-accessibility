<?php
namespace SR\UserwayAccessibility\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use SR\UserwayAccessibility\Model\Config;

/**
 * ViewModel for passing UserWay configuration to the frontend block.
 */
class WidgetConfig implements ArgumentInterface
{
    public function __construct(
        private Config $config
    ) {}

    /**
     * Get the UserWay account ID.
     *
     * @return string
     */
    public function getAccount(): string
    {
        return $this->config->getAccount();
    }

    /**
     * Get the widget position.
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->config->getPosition();
    }

    /**
     * Get the widget size.
     *
     * @return string
     */
    public function getSize(): string
    {
        return $this->config->getSize();
    }

    /**
     * Get the language code.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->config->getLanguage();
    }

    /**
     * Get the icon color (hex value).
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->config->getColor();
    }

    /**
     * Get the icon type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->config->getType();
    }

    /**
     * Get the accessibility statement text.
     *
     * @return string
     */
    public function getStatementText(): string
    {
        return $this->config->getStatementText();
    }

    /**
     * Get the URL to the accessibility statement.
     *
     * @return string
     */
    public function getStatementUrl(): string
    {
        return $this->config->getStatementUrl();
    }

    /**
     * Determine if the widget is enabled on mobile.
     *
     * @return string
     */
    public function getMobile(): string
    {
        return $this->config->getMobile();
    }

    public function getCustomCSS() : string
    {
        return $this->config->getCustomCSS();
    }
}
