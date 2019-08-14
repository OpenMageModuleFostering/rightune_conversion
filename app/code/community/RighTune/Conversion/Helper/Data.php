<?php

class RighTune_Conversion_Helper_Data extends Mage_Core_Helper_Abstract
{
    
    const XML_PATH_RIGHTUNECONVERSION_SETTINGS = 'rightune_options/rightune_general/';

    /**
     * Return store config value for key
     *
     * @param   string $key
     * @return  string
     */
    public function getRighTuneConversionStoreConfig ($key, $flag=false)
    {
        $path = self::XML_PATH_RIGHTUNECONVERSION_SETTINGS . $key;
        if ($flag) {
            return Mage::getStoreConfigFlag($path);
        } else {
            return Mage::getStoreConfig($path);
        }
    }
}