<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    YurikoCMS
 * @author     Lorenzo Pisani - Zeelot
 * @copyright  (c) 2008-2010 Lorenzo Pisani
 * @license    http://yurikocms.com/license
 */
class Yuriko_YForm_Field_Number extends YForm_Element {

	protected $_view = 'input/text';

	public function __construct($name)
	{
		parent::__construct($name);

		$this->set_attribute('type', 'number');
	}
	
} // End Yuriko_YForm_Field_Number
