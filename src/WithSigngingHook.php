<?php

declare(strict_types=1);

namespace Dew\Acs;

use Psr\Http\Message\RequestInterface;

interface WithSigngingHook
{
    public function handleSignging(RequestInterface $request): RequestInterface;
}
