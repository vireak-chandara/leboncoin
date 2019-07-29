<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;


final class ContactTest extends TestCase
{
    private $contact;

    public function testPalindrome()
    {
        $this->contact = new \App\Controllers\ContactController();
        $this->assertTrue($this->contact->apiClient('palindrome', ['name' => 'mamam']));
    }



}
