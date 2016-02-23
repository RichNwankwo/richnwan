<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/contact');
$messageData = [
    'name' => 'Jermaine Cole',
    'email' => 'jcole@DreamVillan.com',
    'message' => 'You made the album!'
];
$I->submitForm('#contactForm', $messageData);

$I->seeRecord ('contact', $messageData);
