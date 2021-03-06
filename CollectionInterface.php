<?php

namespace Psr\Cache;

/**
 * \Psr\Cache\CollectionInterface is a flexible wrapper for a series of Items.
 */
interface CollectionInterface extends \Traversable, \ArrayAccess {

    /**
     * Saves all cache items in the collection.
     *
     * Implementing Libraries MAY make use of batch operations in their underlying
     * storage engines or simply iterate over all items in the collection individually.
     *
     * @return boolean
     *   True if all items were saved successfully, or false in caser of an error.
     */
    public function save();
}
