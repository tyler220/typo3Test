<?php
namespace THREEME\Threeme\ViewHelpers;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * @author André Steiling <andre.steiling@threeme.de>
 */

/**
 * A view helper to replace all occurrences of the search string with the replacement string.
 *
 * = Examples =
 *
 * <code title="Example">
 * {threeme:ReplaceString(string:'My string to replaced on.', searchFor:'string', replaceWith:'text')}"
 * </code>
 * <output>
 * My text to replaced on.
 * </output>
 */
class ReplaceStringViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Initialize view helper arguments
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('string', 'mixed', 'The string or array being searched and replaced on', true);
        $this->registerArgument('needle', 'mixed', 'The value being searched for', true);
        $this->registerArgument('replace', 'mixed', 'The replacement value that replaces found search values', true);
    }

    /**
     * Render the view helper
     *
     * @return mixed
     */
    public function render($string, $neddle, $replace) {
        return str_replace($neddle, $replace, $string);
    }
}
