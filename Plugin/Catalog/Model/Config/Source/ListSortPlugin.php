<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortReview\Plugin\Catalog\Model\Config\Source;

use Magento\Catalog\Model\Config\Source\ListSort as Subject;

/**
 * Catalog list sort plugin
 */
class ListSortPlugin
{
    /**
    * Retrieve option values array
    *
    * @param Subject $subject
    * @param [] $options
    * @return []
    */
    public function afterToOptionArray(Subject $subject, $options)
    {
        $options[] = ['label' => __('Reviews'), 'value' => 'review'];

        return $options;
    }
}
