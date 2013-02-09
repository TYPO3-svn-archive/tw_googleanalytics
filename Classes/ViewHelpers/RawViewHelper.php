<?php

/***************************************************************
 *  Copyright notice
 *
 *  Copyright © 2013 Dipl.-Ing. Joschi Kuphal (joschi@tollwerk.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Outputs an argument/value without any escaping. Is normally used to output
 * an ObjectAccessor which should not be escaped, but output as-is.
 *
 * PAY SPECIAL ATTENTION TO SECURITY HERE (especially Cross Site Scripting),
 * as the output is NOT SANITIZED!
 * 
 ******************************************************************************
 * NOTE: This view helper is an identical clone of the "format.raw" view helper
 * present in TYPO3 4.6 and later. It is just included to make the fluid
 * templates of this extension also work in TYPO3 4.5. For later versions you
 * could (and maybe should?) modify the templates appropriately and use the
 * original fluid view helper instead.
 * Thangs to Gaël Bude <gael.bude@shom.fr> for this hint!  
 ******************************************************************************
 *	
 * = Examples =
 *
 * <code title="Child nodes">
 * <tw:raw>{string}</tw:raw>
 * </code>
 * <output>
 * (Content of {string} without any conversion/escaping)
 * </output>
 *
 * <code title="Value attribute">
 * <tw:raw value="{string}" />
 * </code>
 * <output>
 * (Content of {string} without any conversion/escaping)
 * </output>
 *
 * <code title="Inline notation">
 * {string -> tw:raw()}
 * </code>
 * <output>
 * (Content of {string} without any conversion/escaping)
 * </output>
 *
 * @package		tw_googleanalytics
 * @copyright	Copyright © 2013 tollwerk® GmbH (http://tollwerk.de)
 * @author		Dipl.-Ing. Joschi Kuphal <joschi@tollwerk.de>
 */
class Tx_TwGoogleanalytics_ViewHelpers_RawViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Disable the escaping interceptor because otherwise the child nodes would be escaped before this view helper
	 * can decode the text's entities.
	 *
	 * @var boolean
	 */
	protected $escapingInterceptorEnabled = FALSE;

	/**
	 * Returning the raw / unescaped input value
	 * 
	 * @param mixed $value			The value to output
	 * @return string				Unescaped value
	 */
	public function render($value = NULL) {
		if ($value === NULL) {
			return $this->renderChildren();
		} else {
			return $value;
		}
	}
}

?>