<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * A complete theme set should include following files:
 *
 * Folder and file skeleton:
 *
 * REQUIRED for front:
 *
 *  + template/layout-front.phtml - complete layout template:
 *      header, footer, body, blocks, navigation
 *  + template/layout-simple.phtml - error page layout: header, footer, body
 *  + template/layout-style.phtml - content with stylesheets
 *  + template/layout-content.phtml - raw content without stylesheets
 *  + template/error.phtml - defined in var/config/config.application.php:
 *      view_manager.error_template, view_manager.error_exception_template
 *
 * OPTIONAL for front:
 *
 *  + template/page-zone.phtml - for block manipulation on a page
 *  + template/block.phtml - called by layout-front.phtml
 *  + template/error-404.phtml - defined in var/config/config.application.php:
 *      view_manager.not_found_template
 *  + template/error-denied.phtml - defined in
 *      var/config/config.application.php: view_manager.denied_template
 *
 * Stylesheet files:
 *
 * REQUIRED:
 *
 *  + asset/css/style.css - main css file
 *
 * Best practices:
 *
 *  1 It is highly recommended to use 'pi-' as prefix for all global id
 *      and class names used in themes to avoid conflicts.
 *  2 It is highly recommended to use module identity as prefix for module id
 *      and class names used in templates to avoid conflicts.
 */
return array(
    /**#@+
     * To be stored in DB
     */
    // Version
    'version'       => '1.1.0',
    // Type of layouts available in the theme
    // Potential value: 'both', 'admin', 'front', default as 'both'
    'type'          => 'front',
    /**#@-**/
    // Title of the theme
    'title'         => 'Cafeyab Theme',
    // Author information: name, email, website
    'author'        => 'Architecture:'
                     . ' Hossein Azizabadi <azizabadi@faragostaresh.com>',
    // Screenshot image, relative path in asset.
    // If no screenshot is available, static/image/screenshot.png will be used
    'screenshot'    => 'image/screenshot.png',
    // License or theme images and scripts
    'license'       => 'Creative Common License'
                     . ' http://creativecommons.org/licenses/by/3.0/',
    // Optional description
    'description'   => 'Cafeyab theme for cafeyab.com website by Pi Engine 2.4.0',
    // Parent theme from which templates can be inherited, default as 'default'
    'parent'        => '',
    // Supported browsers
    'browser'       => 'Internet Explorer: 6+; Chrome: 17+; Firefox: 10+;'
                     . ' Safari: 5.1+; Opera: 9.8+;',
);
