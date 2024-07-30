<?php

declare(strict_types=1);

namespace Dew\Acs\Tests;

use Dew\Acs\Result;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Result::class)]
final class ResultTest extends TestCase
{
    public function test_get_decoded_data(): void
    {
        $result = new Result(['value' => 'foo']);
        $this->assertSame(['value' => 'foo'], $result->getDecodedData());
    }

    public function test_array_access(): void
    {
        $result = new Result(['value' => 'foo']);
        $this->assertSame('foo', $result['value']);
    }

    public function test_array_access_chained(): void
    {
        $result = new Result(['nested' => ['value' => 'foo']]);
        $this->assertSame(['value' => 'foo'], $result['nested']);
        $this->assertSame('foo', $result['nested']['value']);
    }

    public function test_array_isset(): void
    {
        $result = new Result(['nested' => ['value' => 'foo']]);
        $this->assertTrue(isset($result['nested']));
        $this->assertTrue(isset($result['nested']['value']));
        $this->assertFalse(isset($result['value']));
    }

    public function test_property_get(): void
    {
        $result = new Result(['value' => 'foo']);
        $this->assertSame('foo', $result->value);
    }

    public function test_property_get_chained(): void
    {
        $result = new Result(['nested' => ['value' => 'foo']]);
        $this->assertIsObject($result->nested);
        $this->assertSame('foo', $result->nested->value);
    }

    public function test_set_and_get_response(): void
    {
        $response = new Response();
        $result = new Result();
        $result->setResponse($response);
        $this->assertSame($response, $result->getResponse());
    }
}