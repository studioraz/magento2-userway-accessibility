# UserWay Accessibility Toolbar for Magento 2

## Overview
This Magento 2 module integrates the UserWay Accessibility Toolbar into your Magento 2 store’s frontend, enabling accessibility tools for users to adjust and enhance their browsing experience. Features include contrast adjustments, text scaling, and other accessibility aids.

## Features
- Embeds the UserWay Accessibility Toolbar on the frontend of your Magento 2 store.
- Provides end-users with adjustable accessibility settings.
- Easily enable or disable the toolbar from the admin panel.
- Customizable to match brand accessibility standards and compliance requirements.

## Requirements
- Magento 2.4.x or later.
- A UserWay account and Widget Code (available from [UserWay](https://userway.org)).

## Installation
### 1. Composer Installation
1. Navigate to your Magento root directory.
2. Install the module via Composer:

   ```bash
   composer require studioraz/magento2-userway-accessibility
   ```

3. Enable and set up the module by running the following commands:

   ```bash
   php bin/magento module:enable SR_UserwayAccessibility
   php bin/magento setup:upgrade
   php bin/magento cache:flush
   ```

4. Deploy static content if in production mode:

   ```bash
   php bin/magento setup:static-content:deploy
   ```
## Configuration
1. In the Magento Admin panel, navigate to **Stores** > **Configuration** > **SR Extensions** > **UserWay Accessibility**.
2. Set **Enable UserWay Toolbar** to "Yes."
3. Enter your **UserWay Widget Code** (obtainable from your UserWay account).
4. Customize other options as needed, then **Save Config**.

## Usage
After setup, the UserWay Accessibility Toolbar will appear on the storefront, giving users options to modify accessibility settings.

## Uninstallation
To remove the module:

1. Disable the module:

   ```bash
   php bin/magento module:disable SR_UserwayAccessibility
   ```

2. If installed via Composer, uninstall:

   ```bash
   composer remove studioraz/magento2-userway-accessibility
   ```

3. Run the following commands:

   ```bash
   php bin/magento setup:upgrade
   php bin/magento cache:flush
   ```

## Support
For issues or requests, open an issue in the repository or contact [Studio Raz](https://www.studioraz.co.il).

## License
This module is licensed under the MIT License.
