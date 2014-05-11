<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2014 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */
namespace PhpOffice\PhpWord\Tests\Writer\HTML;

use PhpOffice\PhpWord\Writer\HTML;

/**
 * Test class for PhpOffice\PhpWord\Writer\HTML\Element subnamespace
 */
class ElementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test unmatched elements
     */
    public function testUnmatchedElements()
    {
        $styles = array('Container', 'Footnote', 'Image', 'Link', 'ListItem', 'Table', 'Title');
        foreach ($styles as $style) {
            $objectClass = 'PhpOffice\\PhpWord\\Writer\\HTML\\Element\\' . $style;
            $parentWriter = new HTML();
            $element = new \PhpOffice\PhpWord\Element\PageBreak();
            $object = new $objectClass($parentWriter, $element);

            $this->assertEquals('', $object->write());
        }
    }
}
