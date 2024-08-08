<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Tablestore\Fixtures;

use Dew\Acs\Signatures\SignsRequest;
use Psr\Http\Message\RequestInterface;

final class NullSignature implements SignsRequest
{
    /**
     * @param  array<string, mixed>  $config
     */
    public function signRequest(RequestInterface $request, array $config): RequestInterface
    {
        return $request;
    }
}
