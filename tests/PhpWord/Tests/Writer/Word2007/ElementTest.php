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
namespace PhpOffice\PhpWord\Tests\Writer\Word2007;

use PhpOffice\PhpWord\Shared\XMLWriter;

/**
 * Test class for PhpOffice\PhpWord\Writer\Word2007\Element subnamespace
 */
class ElementTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test unmatched element
     */
    public function testUnmatchedElements()
    {
        $styles = array(
            'CheckBox', 'Container', 'Footnote', 'Image', 'Link', 'ListItem', 'ListItemRun',
            'Object', 'PreserveText', 'Table', 'Text', 'TextBox', 'TextBreak', 'Title', 'TOC'
        );
        foreach ($styles as $style) {
            $objectClass = 'PhpOffice\\PhpWord\\Writer\\Word2007\\Element\\' . $style;
            $xmlWriter = new XMLWriter();
            $element = new \PhpOffice\PhpWord\Element\PageBreak();
            $object = new $objectClass($xmlWriter, $element);
            $object->write();

            $this->assertEquals('', $xmlWriter->getData());
        }
    }
}
