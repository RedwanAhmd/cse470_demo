<?php
use PHPUnit\Framework\TestCase; 
require '../controller/student.php';
require '../controller/auth.php';
require '../controller/allusers.php';
require '../controller/allstudent.php';

class Tests extends TestCase
{
    public function testAddStudent()
    {
        $ad = new AddStudent();
        $result = $ad->addStudent();
        $this->assertStringContainsString("Added Student", $result);
    }
    public function testTotalStudent()
    {
        $ad = new AllStudent();
        $result = $ad->totalStudent();
        $this->assertEquals(48, $result);
    }
    public function testAllUsers()
    {
        $ad = new AllUsers();
        $result = $ad->totalUsers();
        $this->assertEquals(32, $result);
    }
    public function testLogin()
    {
        $ad = new Auth();
        $result = $ad->login('redwanahmd', 'pass123');
        $this->assertTrue($result);
    }
    public function testSignup()
    {
        $ad = new Auth();
        $result = $ad->signup('redwanahmd', 'pass123');
        $this->assertStringContainsString("Signed up!", $result);
    }
    public function testLogout()
    {
        $ad = new Auth();
        $result = $ad->logout('redwanahmd');
        $this->assertStringContainsString("Logged out!", $result);
    }
}
?>
