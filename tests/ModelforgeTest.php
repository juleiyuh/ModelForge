<?php
/**
 * Tests for ModelForge
 */

use PHPUnit\Framework\TestCase;
use Modelforge\Modelforge;

class ModelforgeTest extends TestCase {
    private Modelforge $instance;

    protected function setUp(): void {
        $this->instance = new Modelforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Modelforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
