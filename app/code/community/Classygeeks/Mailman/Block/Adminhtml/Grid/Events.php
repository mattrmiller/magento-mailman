<?php
/**
 * Copyright 2016 Matthew R. Miller via Classy Geeks llc. All Rights Reserved
 * http://classygeeks.com
 * MIT License:
 * http://opensource.org/licenses/MIT
 */

class Classygeeks_Mailman_Block_Adminhtml_Grid_Events extends Mage_Adminhtml_Block_Widget_Grid_Container
{
	/**
	 * Construct
	 */
	public function __construct()
	{
		parent::__construct();

		// Remove add button
		$this->removeButton('add');

		// Set controller
		$this->_controller = 'adminhtml_grid_events';

		// Block group
		$this->_blockGroup = 'mailman';

		// Header text
		$this->_headerText = $this->__('Message Events');

	}

	/**
	 * Get header Css
	 * @return string
	 */
	public function getHeaderCssClass()
	{
        return 'icon-head head-sales-order';
    }
}