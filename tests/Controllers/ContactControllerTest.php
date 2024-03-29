<?php

use PHPUnit\Framework\TestCase;

final class ContactControllerTest extends TestCase
{
    protected $contact;
    private $data;

    protected function setUp()
    {
        $this->contact = new App\Controllers\ContactController;
        $this->data = [
            'nom' => 'chandara',
            'prenom' => 'vireak',
            'email' => 'vireak.chandara@gmail.com'
        ];
    }

    public function testPalindrome()
    {
        $this->assertEquals(true, $this->contact->apiClient('palindrome', ['name' => 'mamam'])->response);
    }

    public function testNotPalindrome()
    {
        $this->assertEquals(false, $this->contact->apiClient('palindrome', ['name' => 'maman'])->response);
    }

    public function testEmail()
    {
        $this->assertEquals(true, $this->contact->apiClient('email', ['email' => 'vireak.chandara@gmail.com'])->response);
    }

    public function testNotEmail()
    {
        $this->assertEquals(false, $this->contact->apiClient('email', ['email' => 'vireak.chandara@gmail'])->response);
    }

    public function testSanitize()
    {
        $sanitize = $this->contact->sanitize($this->data);
        $this->assertInternalType('array', $sanitize);
    }

}
