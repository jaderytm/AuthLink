<?php
/**
 * Tests for AuthLink
 */

use PHPUnit\Framework\TestCase;
use Authlink\Authlink;

class AuthlinkTest extends TestCase {
    private Authlink $instance;

    protected function setUp(): void {
        $this->instance = new Authlink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Authlink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
