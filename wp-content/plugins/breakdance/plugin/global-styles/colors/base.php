<?php

namespace Breakdance\GlobalSettings;

use function Breakdance\Elements\c;
use function Breakdance\Elements\control;

/**
 * @return Control
 */
function COLORS_SECTION()
{
    return c(
        "colors",
        "Colors",
        [c(
            "brand",
            "Brand",
            [],
            ['type' => 'color', 'layout' => 'inline'],
            false,
            true,
            [],
        ),
            c(
                "text",
                "Text",
                [],
                ['type' => 'color', 'layout' => 'inline'],
                false,
                false,
                [],
            ), c(
                "headings",
                "Headings",
                [],
                ['type' => 'color', 'layout' => 'inline'],
                false,
                false,
                [],
            ), c(
                "links",
                "Links",
                [],
                ['type' => 'color', 'layout' => 'inline'],
                false,
                true,
                [],
            ), c(
                "background",
                "Background",
                [],
                ['type' => 'color', 'layout' => 'inline'],
                false,
                false,
                [],
            ), c(
                "palette",
                "Palette",
                [control('colors', 'Colors', ['type' => 'global_colors', 'layout' => 'vertical'])],
                ['type' => 'section', 'sectionOptions' => ['type' => 'popout']],
                false,
                false,
                [],
            )],
        ['type' => 'section'],
        false,
        false,
        [],
    );
}

/**
 * @return string
 */
function COLORS_TEMPLATE()
{
    return (string) file_get_contents(dirname(__FILE__) . '/colors.css.twig');
}
