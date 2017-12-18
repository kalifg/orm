<?php

declare(strict_types=1);

namespace Doctrine\ORM\Cache;

final class InvalidResultCacheDriver extends \Exception implements CacheException
{
    public static function create() : self
    {
        return new self(
            "Invalid result cache driver; it must implement Doctrine\\Common\\Cache\\Cache."
        );
    }
}
