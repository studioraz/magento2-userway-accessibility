<?php

namespace SR\UserwayAccessibility\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Retrieves configuration settings for the UserWay accessibility widget.
 */
class Config
{
    public const XML_PATH_ENABLE          = 'sruserway/general/enable';
    public const XML_PATH_ACCOUNT         = 'sruserway/general/account';
    public const XML_PATH_POSITION        = 'sruserway/general/position';
    public const XML_PATH_SIZE            = 'sruserway/general/size';
    public const XML_PATH_LANGUAGE        = 'sruserway/general/language';
    public const XML_PATH_COLOR           = 'sruserway/general/color';
    public const XML_PATH_TYPE            = 'sruserway/general/type';
    public const XML_PATH_STATEMENT_TEXT  = 'sruserway/general/statement_text';
    public const XML_PATH_STATEMENT_URL   = 'sruserway/general/statement_url';
    public const XML_PATH_MOBILE          = 'sruserway/general/mobile';
    public const XML_PATH_CUSTOM_CSS          = 'sruserway/general/custom_css';

    public function __construct(
        private ScopeConfigInterface $scopeConfig
    ) {}

    /**
     * Retrieve a config value based on path and scope.
     *
     * @param string $path
     * @param string|null $scopeType
     * @param string|null $scopeCode
     * @return string
     */
    public function getValue(
        string $path,
        ?string $scopeType = ScopeInterface::SCOPE_STORE,
        ?string $scopeCode = null
    ): string {
        return (string) $this->scopeConfig->getValue($path, $scopeType, $scopeCode);
    }

    /** @return bool */
    public function isEnabled(): bool { return $this->getValue(self::XML_PATH_ENABLE);}

    /** @return string */
    public function getAccount(): string { return $this->getValue(self::XML_PATH_ACCOUNT); }

    /** @return string */
    public function getPosition(): string { return $this->getValue(self::XML_PATH_POSITION); }

    /** @return string */
    public function getSize(): string { return $this->getValue(self::XML_PATH_SIZE); }

    /** @return string */
    public function getLanguage(): string { return $this->getValue(self::XML_PATH_LANGUAGE); }

    /** @return string */
    public function getColor(): string { return $this->getValue(self::XML_PATH_COLOR); }

    /** @return string */
    public function getType(): string { return $this->getValue(self::XML_PATH_TYPE); }

    /** @return string */
    public function getStatementText(): string { return $this->getValue(self::XML_PATH_STATEMENT_TEXT); }

    /** @return string */
    public function getStatementUrl(): string { return $this->getValue(self::XML_PATH_STATEMENT_URL); }

    /** @return string */
    public function getMobile(): string { return $this->getValue(self::XML_PATH_MOBILE); }

    public function getCustomCSS(): string { return $this->getValue(self::XML_PATH_CUSTOM_CSS); }
}
