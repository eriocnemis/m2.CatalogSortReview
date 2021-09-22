<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortReview\Plugin\Catalog\Model;

use Magento\Catalog\Model\Config as Subject;

/**
 * Catalog config plugin
 */
class ConfigPlugin
{
    /**
     * Retrieve attributes used for sort by as array
     *
     * @param Subject $subject
     * @param mixed[] $options
     * @return mixed[]
     */
    public function afterGetAttributeUsedForSortByArray(Subject $subject, $options)
    {
        $options['review'] = __('Reviews');

        return $options;
    }
}
