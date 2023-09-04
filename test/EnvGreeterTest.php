<?php
namespace App\Test;
use App\EnvGreeter;

class EnvGreeterTest extends \PHPUnit\Framework\TestCase {
	public function testEnvFromSystem() {
		$greeter = new EnvGreeter();
		self::assertStringContainsString(
			"Hello, PhpTest",
			$greeter->greetFromEnv("TEST_VAR")
		);
	}
}
