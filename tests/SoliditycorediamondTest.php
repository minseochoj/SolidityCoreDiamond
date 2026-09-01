<?php
/**
 * Tests for SolidityCoreDiamond
 */

use PHPUnit\Framework\TestCase;
use Soliditycorediamond\Soliditycorediamond;

class SoliditycorediamondTest extends TestCase {
    private Soliditycorediamond $instance;

    protected function setUp(): void {
        $this->instance = new Soliditycorediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditycorediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
