<?php

/**
 * righTune Conversion for Magento 
 *
 * @package     righTune Conversion
 * @author      Tzvi Rabinovitch(http://10bit.co.il/)
 * @copyright   Copyright (c) 2013 righTune (http://www.righTune.com/)
 * @license     Open Source License (OSL)
 */
 

class RighTune_Conversion_Block_Conversion extends Mage_Core_Block_Template
{
    /**
     * Get the Conversion script
     *
     * @return string
     */
    public function getScript()
    {
        return $script;
    }
    public function isEnabled(){
        return Mage::helper('conversion')->getRighTuneConversionStoreConfig('active',true);
    }	
    public function getScriptCode(){
        return Mage::helper('conversion')->getRighTuneConversionStoreConfig('code');
    }
    public function isTrackEnabled(){
        return Mage::helper('conversion')->getRighTuneConversionStoreConfig('track',true);
    }	
	/**
     * Get the Conversion tracking script
     *
     * @return string
     */
	public function getTrackingScript()
    {
		$script="<script>";
		$script.="var _mgage = _mgage || [];";
		$script.="_mgage.push(['custom', 'magento_conversion']);";
		$script.="</script>";
	
        return $script;
    }

}
