<?php
require 'login_process.php'; // Assuming this is your login processing code

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {

    public function testLoginForm() {
        $_POST = [
            'username' => 'TestCustomer1',
            'password' => '123',
            'is_staff' => '0'
        ];

        ob_start();
        include 'login.php'; // Replace with your actual HTML file name
        $output = ob_get_clean();

        $this->assertStringContainsString('<h3>Login</h3>', $output);
        $this->assertStringContainsString('<form', $output);
        $this->assertStringContainsString('<input type="text" name="username" required>', $output);
        $this->assertStringContainsString('<input type="password" name="password" required>', $output);
        $this->assertStringContainsString('<input type="checkbox" name="is_staff">', $output);
        $this->assertStringContainsString('<input type="submit" value="Login">', $output);
        $this->assertStringContainsString('<button><a href="index.html">Go Back</a></button>', $output);
    }
}
?>
