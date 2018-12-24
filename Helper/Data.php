<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_SocialShare
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\SocialShare\Helper;

use Mageplaza\Core\Helper\AbstractData;
use Mageplaza\SocialShare\Model\System\Config\Source\Color;

/**
 * Class Data
 * @package Mageplaza\SocialShare\Helper
 */
class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'socialshare';
    const CONFIG_FLOAT = 'socialshare/float/';
    const CONFIG_INLINE = 'socialshare/inline/';

    /*
     * //////////////////////////////////////////////////
     * General Configuration
     * /////////////////////////////////////////////////
     */

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getIconColor($storeId = null) {
        $selectColor = $this->getConfigGeneral('icon_color', $storeId);
        if($selectColor == Color::CUSTOM) {
            return $this->getConfigGeneral('custom_icon_color', $storeId);
        }
        return $selectColor;
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getButtonColor($storeId = null) {
        $selectColor = $this->getConfigGeneral('button_color', $storeId);
        if($selectColor == Color::CUSTOM) {
            return $this->getConfigGeneral('custom_button_color', $storeId);
        }
        return $selectColor;
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getBackgroundColor($storeId = null) {
        $selectColor = $this->getConfigGeneral('background_color', $storeId);
        if($selectColor == Color::CUSTOM) {
            return $this->getConfigGeneral('custom_background_color', $storeId);
        }
        return $selectColor;
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function getBorderRadius($storeId = null) {
        return $this->getConfigGeneral('border_radius', $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function isShareCounter($storeId = null) {
        return $this->getConfigGeneral('share_counter', $storeId);
    }

    /**
     * @param null $storeId
     * @return mixed
     */
    public function isThankYouPopup($storeId = null) {
        return $this->getConfigGeneral('thank_you', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isFacebook($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/facebook/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFacebookImage($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/facebook/image', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isGoogle($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/google/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getGoogleImage($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/google/image', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isPinterest($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/pinterest/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getPinterestImage($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/pinterest/image', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isLinkedIn($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/linkedIn/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getLinkedInImage($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/linkedIn/image', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isTumblr($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/tumblr/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getTumblrImage($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/tumblr/image', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isAddMoreShare($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/add_more_share/enabled', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getDisplayMenu($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/add_more_share/display_menu', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getNumberOfServices($storeId = null) {
        return $this->getConfigValue(self::CONFIG_MODULE_PATH . '/general/add_more_share/number_service', $storeId);
    }

    /*
     * //////////////////////////////////////////////////
     * Floating Configuration
     * /////////////////////////////////////////////////
     */
    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFloatApplyPages($storeId = null) {
        return $this->getConfigValue(self::CONFIG_FLOAT . 'apply_for', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFloatStyle($storeId = null) {
        return $this->getConfigValue(self::CONFIG_FLOAT . 'style', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFloatPosition($storeId = null) {
        return $this->getConfigValue(self::CONFIG_FLOAT . 'position', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFloatMarginTop($storeId = null) {
        return $this->getConfigValue(self::CONFIG_FLOAT . 'margin_top', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getFloatButtonSize($storeId = null) {
        return $this->getConfigValue(self::CONFIG_FLOAT . 'button_size', $storeId);
    }

    /*
     * //////////////////////////////////////////////////
     * Inline Configuration
     * /////////////////////////////////////////////////
     */
    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getInlineApplyPages($storeId = null) {
        return $this->getConfigValue(self::CONFIG_INLINE . 'apply_for', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getInlinePosition($storeId = null) {
        return $this->getConfigValue(self::CONFIG_INLINE . 'position', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function isShowUnderCart($storeId = null) {
        return $this->getConfigValue(self::CONFIG_INLINE . 'show_under_cart', $storeId);
    }

    /**
     * @param null $storeId
     * @return array|mixed
     */
    public function getInlineButtonSize($storeId = null) {
        return $this->getConfigValue(self::CONFIG_INLINE . 'button_size', $storeId);
    }
}