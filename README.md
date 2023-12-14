
# Studio Raz Magento 2 Module for Userway Accessibility site.

## Features
1. ...
2. ...

## Installation

1. To access Studio Raz *private* packages in Composer, configure authentication for the project:
    ```
    composer config --auth http-basic.repo.packagist.com <username> <password>
    ```
2. Set up the custom repository with the following command
    ```
    composer config repositories.private-packagist composer https://repo.packagist.com/studioraz/
    composer config repositories.packagist.org false
    ```

3. Install this module within Magento 2 using composer
    ```
    composer require studioraz/magento2-userway-accessibility
    ```

4. After this, enable the module as usual
    ```
    bin/magento mo:e SR_UserwayAccessibility &&
    bin/magento s:up
    ```
