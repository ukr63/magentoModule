<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Vend\Bes\Model\Config\Source;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Product attribute source model for enable/disable option
 *
 * @api
 * @since 100.0.2
 */
class CustomOptions extends AbstractSource
{
    /**
     * Value of 'Use Config' option
     */
    const VALUE_USE_CONFIG = 2;

    /**
     * Retrieve all attribute options
     *
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                [
                    'label' => __('Good'),
                    'value' => 1
                ],
                [
                    'label' => __('Bad'),
                    'value' => 0
                ],
                [
                    'label' => __('Fine, Koma'),
                    'value' => 2
                ],
            ];
        }
        return $this->_options;
    }
}
