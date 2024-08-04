<?php

declare(strict_types=1);

namespace Dew\Acs\Tests\Oss;

use Dew\Acs\Oss\OssClient;
use Http\Mock\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * @phpstan-import-type TConfig from \Dew\Acs\AcsClient
 */
#[CoversClass(OssClient::class)]
final class OssClientTest extends TestCase
{
    public function test_url_to_download(): void
    {
        $client = $this->makeClient();
        $url = $client->urlToDownload('mybucket', 'hello.jpg');
        $this->assertStringStartsWith('https://mybucket.oss-cn-somewhere.aliyuncs.com/hello.jpg', $url);
    }

    public function test_url_to_upload(): void
    {
        $client = $this->makeClient();
        $url = $client->urlToUpload('mybucket', 'hello.jpg');
        $this->assertStringStartsWith('https://mybucket.oss-cn-somewhere.aliyuncs.com/hello.jpg', $url);
    }

    public function test_url_to_upload_headers(): void
    {
        $client = $this->makeClient();
        $url = $client->urlToUpload('mybucket', 'hello.jpg', headers: ['x-foo' => 'bar']);
        $this->assertStringContainsString('x-oss-additional-headers=host%3Bx-foo', $url);
    }

    public function test_content_length_body_empty(): void
    {
        $httpClient = new Client();
        $client = $this->makeClient(['http_client' => $httpClient]);
        $client->putObject(['bucket' => 'mybucket', 'key' => 'greeting.txt']);
        $request = $httpClient->getLastRequest();
        $this->assertSame('0', $request->getHeaderLine('Content-Length'));
    }

    /**
     * @param  TConfig|array<string, mixed>  $config
     */
    private function makeClient(array $config = []): OssClient
    {
        /** @var TConfig */
        $config = array_merge([
            'credentials' => [
                'key' => 'mykey',
                'secret' => 'mysecret',
            ],
            'region' => 'cn-somewhere',
            'endpoint' => 'oss-cn-somewhere.aliyuncs.com',
            'http_client' => new Client(),
        ], $config);

        return new OssClient($config);
    }
}
