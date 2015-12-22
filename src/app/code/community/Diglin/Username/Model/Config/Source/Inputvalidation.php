<?php
/**
 * Diglin GmbH
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php

 *
 * @category    Diglin
 * @package     Diglin_Username
 * @copyright   Copyright (c) 2008-2015 Diglin GmbH - Switzerland (http://www.diglin.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Diglin_Username_Model_Config_Source_InputValidation
{
    public function toOptionArray()
    {
        $helper = Mage::helper('username');
        
        return array(
            array('value'=>'default', 'label'=> $helper->__('Default (letters, digits and _- characters)')),
            array('value'=>'alphanumeric', 'label'=> $helper->__('Letters and digits')),
            array('value'=>'alpha', 'label'=> $helper->__('Letters only')),
            array('value'=>'numeric', 'label'=> $helper->__('Digits only')),
            array('value'=>'custom', 'label'=> $helper->__('Custom (PCRE Regex)')),
        );
    }
}
