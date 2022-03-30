<?php
declare(strict_types=1);


namespace Symfony\Component\Messenger\Bridge\Redis\Stamp;


use Symfony\Component\Messenger\Stamp\StampInterface;

class UniqueDelayedStamp implements StampInterface
{

    public function __construct(
        private int $delay
    ) {
    }

    public function getDelay()
    {
        return $this->delay;
    }

    public function serialize()
    {
        throw new \LogicException('The element must be removed before serialization');
    }

    public function unserialize($serialized)
    {
        throw new \LogicException('The element must be removed before serialization');
    }
}
