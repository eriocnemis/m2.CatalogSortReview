<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortReview\Plugin\Catalog\Block\Product\ProductList;

use Magento\Framework\Data\Collection\AbstractDb as Collection;
use Magento\Catalog\Block\Product\ProductList\Toolbar as Subject;

/**
 * Catalog toolbar plugin
 */
class ToolbarPlugin
{
    /**
     * Field sort order
     */
    const FIELD = 'review_summary.reviews_count';

    /**
     * Whether sort order are added
     *
     * @var bool
     */
    protected $isOrderAdded = false;

    /**
     * Set collection to pager
     *
     * @param Subject $subject
     * @return Subject
     */
    public function afterSetCollection(Subject $subject)
    {
        if ($subject->getCurrentOrder() == 'review') {
            $dir = strtoupper($subject->getCurrentDirection());
            $this->addSortOrder($subject->getCollection(), $dir);
        }
        return $subject;
    }

    /**
     * Add review sort order
     *
     * @param Collection $collection
     * @param string $dir
     * @return void
     */
    private function addSortOrder(Collection $collection, $dir)
    {
        if (!$collection->isLoaded() && !$this->isOrderAdded) {
            $collection->getSelect()->order(self::FIELD . ' ' . $dir);
            $this->isOrderAdded = true;
        }
    }
}
