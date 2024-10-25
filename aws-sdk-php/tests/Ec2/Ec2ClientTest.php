<?php
namespace Aws\Test\Ec2;

use Aws\Ec2\Ec2Client;
use Aws\MockHandler;
use Aws\Result;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers Aws\Ec2\Ec2Client
 */
class Ec2ClientTest extends TestCase
{
    public function testAddsCopySnapshotMiddleware()
    {
        $ec2 = new Ec2Client([
            'region'  => 'us-east-1',
            'version' => 'latest'
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertNotNull($command['PresignedUrl']);
                $this->assertSame('us-east-1', $command['DestinationRegion']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->copySnapshot([
            'SourceRegion'     => 'us-east-1',
            'SourceSnapshotId' => 'foo'
        ]);
    }

    public function testCanDisableAutoFillPerClient()
    {
        $ec2 = new Ec2Client([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => false,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertNull($command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->runScheduledInstances([
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
        ]);
    }

    public function testCanOverwriteAutoFillToken()
    {
        $ec2 = new Ec2Client([
            'region'  => 'us-east-1',
            'version' => 'latest',
            'idempotency_auto_fill' => true,
        ]);

        $mock = new MockHandler([
            function ($command, $request) {
                $this->assertSame('foo', $command['ClientToken']);
                return new Result();
            }
        ]);

        $ec2->getHandlerList()->setHandler($mock);

        $ec2->runScheduledInstances([
            'LaunchSpecification' => [
                'ImageId' => 'test-image',
            ],
            'ScheduledInstanceId' => 'test-instance-id',
            'InstanceCount' => 1,
            'ClientToken' => 'foo',
        ]);
    }

    public function testSkipEmptyListSerialization()
    {

        $ec2Client = new Ec2Client([
            'region' => 'us-east-1',
            'http_handler' => function (RequestInterface $request) {
                $testResponse = <<<EOF
<?xml version="1.0" encoding="UTF-8"?>
<DescribeFleetsResponse xmlns="http://ec2.amazonaws.com/doc/2016-11-15/">
    <requestId>TestRequestId</requestId>
    <fleetSet/>
</DescribeFleetsResponse>
EOF;
                $parameters = explode('&',  $request->getBody()->getContents());
                $this->assertNotContains('Filter=0', $parameters);

                return new Response(200, [], $testResponse);
            }
        ]);
        $ec2Client->describeFleets([
            'Filters' => []
        ]);
    }
}
