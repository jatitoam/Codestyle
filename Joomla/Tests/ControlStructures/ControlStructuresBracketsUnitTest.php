<?php
/**
 * Joomla! Coding Standard
 *
 * @copyright  Copyright (C) 2015 Open Source Matters, Inc. All rights reserved.
 * @license    http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License Version 2 or Later
 */

/**
 * ControlStructuresBracketsUnitTest
 *
 * @package   Joomla.CodingStandard
 * @since     1.0
 */
class Joomla_Tests_ControlStructures_ControlStructuresBracketsUnitTest extends AbstractSniffUnitTest
{
	/**
	 * Returns the lines where errors should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of errors that should occur on that line.
	 *
	 * @return array<int, int>
	 */
	public function getErrorList()
	{
		return array(
				9  => 1,
				15 => 1,
				20 => 2,
				26 => 1,
				31 => 1,
				38 => 1,
				44 => 1,
			   );
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of warnings that should occur on that line.
	 *
	 * @return array<int, int>
	 */
	public function getWarningList()
	{
		return array(5 => 1,);
	}
}
