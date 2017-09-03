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
 * @author André Steiling <andre@threeme.de>
 */

/**
 * A ViewHelper to find the last occurrence of a character in a string.
 *
 * = Examples =
 *
 * <code title="Example">
 * {threeme:strrchr(string:'https://vimeo.com/59565770', needle:'/')}
 * </code>
 * <output>
 * 59565770
 * </output>
 */
class StrrchrViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Initialize view helper arguments
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('string', 'string', 'The string to search in', true);
        $this->registerArgument('needle', 'mixed', 'The needle to search for', true);
        $this->registerArgument('incN', 'boolean', 'Include needle in the retrun string', false, true);
    }

    /**
     * Render the view helper
     *
     * @return string
     */
    public function render()
    {
        if ($this->arguments['incN'] == true)
        {
            return substr(strrchr($this->arguments['string'], $this->arguments['needle']), 1);
        } else {
            return strrchr($this->arguments['string'], $this->arguments['needle']);
        }
    }
}
