<?php

use AssetManager\Resolver;
use AssetManager\Service\MimeResolver;

class InterfaceTestResolver implements
    Resolver\ResolverInterface,
    Resolver\AggregateResolverAwareInterface,
    Resolver\MimeResolverAwareInterface
{
    public $calledMime;
    public $calledAggregate;

    public function resolve($path)
    {
    }

    public function setAggregateResolver()
    {
        $this->calledAggregate = true;
    }

    public function setMimeResolver(MimeResolver $resolver)
    {
        $this->calledMime = true;
    }

    public function getMimeResolver()
    {
        return $this->calledMime;
    }
}
