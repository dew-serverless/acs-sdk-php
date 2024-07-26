<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Sls;

use Dew\Acs\Sls\V4Signature;
use Nyholm\Psr7\Request;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

#[CoversClass(V4Signature::class)]
final class V4SignatureTest extends TestCase
{
    public function test_date_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('x-log-date'));
    }

    public function test_content_sha256_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertNotEmpty($request->getHeaderLine('x-log-content-sha256'));
    }

    #[TestWith(['', '0'])]
    #[TestWith(['abc', '3'])]
    public function test_content_bodyrawsize_header(string $body, string $expected): void
    {
        $signer = new V4Signature();
        $request = new Request('GET', '/', [], $body);
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame($expected, $request->getHeaderLine('x-log-bodyrawsize'));
    }

    public function test_apiversion_header(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertSame('0.6.0', $request->getHeaderLine('x-log-apiversion'));
    }

    public function test_sign_request_additional_headers_missing(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringNotContainsString(',AdditionalHeaders=', $request->getHeaderLine('Authorization'));
    }

    /**
     * @param  array<string, string>  $headers
     */
    #[TestWith([['content-type' => 'application/json'], 'content-type'])]
    #[TestWith([['host' => 'example.com'], 'host'])]
    #[TestWith([['x-acs-foo' => 'bar'], 'x-acs-foo'])]
    #[TestWith([['x-log-foo' => 'bar'], 'x-log-foo'])]
    #[TestWith([['x-foo'], ''])]
    #[TestWith([[], ''])]
    public function test_signed_headers(array $headers, string $expected): void
    {
        $request = new Request('GET', '/', $headers, '');
        $signer = new V4Signature();
        $this->assertSame($expected, $signer->buildSignedHeaders($request));
    }

    public function test_signature_version(): void
    {
        $request = new Request('GET', '/', [], '');
        $signer = new V4Signature();
        $request = $signer->signRequest($request, $this->makeConfig());
        $this->assertStringStartsWith('SLS4-HMAC-SHA256', $request->getHeaderLine('Authorization'));
    }

    /**
     * @return array<string, mixed>
     */
    private function makeConfig(): array
    {
        return [
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
        ];
    }
}
