<?php

/*
 * This file is part of the Itkg\Core package.
 *
 * (c) Interakting - Business & Decision
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Itkg\Core;

/**
 * Cacheable interface description
 *
 */
interface CacheableInterface
{
    /**
     * Hash key getter
     *
     * @return string
     */
    public function getHashKey();

    /**
     * Get cache TTL
     *
     * @return int
     */
    public function getTtl();

    /**
     * Return if object is already loaded from cache
     *
     * @return bool
     */
    public function isLoaded();

    /**
     * Set is loaded
     *
     * @param bool $isLoaded
     */
    public function setIsLoaded($isLoaded = true);

    /**
     * Get data from entity for cache set
     *
     * @return mixed
     */
    public function getDataForCache();

    /**
     * @param $data
     * @return $this
     */
    public function setDataFromCache($data);
}
