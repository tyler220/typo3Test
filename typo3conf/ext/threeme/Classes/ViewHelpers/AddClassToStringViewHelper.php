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
 * A view helper for adding e.g. HTML + CSS in between a string.
 *
 * = Examples =
 *
 * <code title="Example">
 * <f:format.html>
 *      {threeme:addClassToString(string:'My String with |a class| in between.', needle:'|', replace:'{0: \'<span class="My-Class">\', 1:\'</span>\'}')}
 * </f:format.html>
 * </code>
 * <output>
 * My String with <span class="My-Class">a class</span> in between.
 * </output>
 */
class AddClassToStringViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Initialize view helper arguments
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('string', 'string', 'The string being searched and replaced on', true);
        $this->registerArgument('needle', 'string', 'The value being searched for', true);
        $this->registerArgument('replace', 'array', 'The replacement value that replaces found search values', true);
    }

    /**
     * Render the view helper
     *
     * @return string
     */
    public function render()
    {
#       \TYPO3\CMS\Core\Utility\DebugUtility::debug();

        $countNeedle = 0;

        // String buchstabenweise durchlaufen
        for ($i = 0; $i <= strlen($this->arguments['string']); $i++)
        {
            // needle aufspüren
            $pos = strpos($this->arguments['string'], $this->arguments['needle'], $i);

            if ($pos === $i)
            {
                // Replace open/close per Modulo definieren
                if ($countNeedle % 2)
                {
                    $replace = 1; // close
                } else {
                    $replace = 0; // open
                }

                // Gefundenen needle mit replace open/close ersetzen
                $this->arguments['string'] = substr_replace($this->arguments['string'], $this->arguments['replace'][$replace], $pos, 1);

                $countNeedle++;
            }
        }

        return $this->arguments['string'];
    }
}
