<?php

namespace Breakdance\GlobalSettings;

use function Breakdance\GlobalSettings\WooCommerce\WOO_SECTION;
use function Breakdance\GlobalSettings\WooCommerce\WOO_TEMPLATE;
use function Breakdance\WooCommerce\Settings\isWooIntegrationEnabled;

require_once __DIR__ . "/atoms/base.php";
require_once __DIR__ . "/colors/base.php";
require_once __DIR__ . "/buttons/base.php";
require_once __DIR__ . "/typography/base.php";
require_once __DIR__ . "/forms/base.php";
require_once __DIR__ . "/containers/base.php";
require_once __DIR__ . "/other/base.php";
require_once __DIR__ . "/advanced/base.php";
require_once __DIR__ . "/woocommerce/base.php";

/**
 * @return Control[]
 */
function globalSettingsControlSections()
{
    $sections = [
        COLORS_SECTION(),
        BUTTONS_SECTION(),
        TYPOGRAPHY_SECTION(),
        FORMS_SECTION(),
        CONTAINERS_SECTION(),
        ADVANCED_SECTION(),
        OTHER_SECTION(),
    ];

    if (isWooIntegrationEnabled()) {
        $sections[] = WOO_SECTION();
    }

    return $sections;

}

/**
 * @return string
 */
function globalSettingsCssTemplate()
{

    $template =
    GLOBAL_CSS_VARS() .
    "\n" . ATOMS_TEMPLATE() .
    "\n" . OTHER_DEFAULT_CSS() .
    "\n" . COLORS_TEMPLATE() .
    "\n" . BUTTONS_TEMPLATE() .
    "\n" . TYPOGRAPHY_TEMPLATE() .
    "\n" . FORMS_TEMPLATE() .
    "\n" . CONTAINERS_TEMPLATE() .
    "\n" . ADVANCED_TEMPLATE();

    if (isWooIntegrationEnabled()) {
        $template .= "\n" . WOO_TEMPLATE();
    }

    return $template;
}

/**
 * @return string[]
 */
function globalPropertyPathsToWhitelistInFlatProps()
{
    $typographyProps = typographyPropertyPathsToWhitelistInFlatProps();
    return array_merge_recursive(
        $typographyProps,
        [
            'settings.woocommerce.other.stack_vertically_at',
            'settings.forms.submit_button.styles.size.full_width_at'
        ]
    );
}
