<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('Richard Nwankwo');
$I->see('Software Engineer');
$I->see('Philadelphia, PA');
$I->seeLink('Home', '/');
$I->seeLink('About', '/about');
$I->seeLink('Contact', '/contact');
$I->seeLink('Projects', '/projects');
$I->click('About');
$I->see('About Me');
$I->see('Technologies/Frameworks I love using');
$I->click('Projects');
$I->see('Projects');
$I->click('Contact');
$I->see('Contact Me');
$I->submitForm('#contactForm', [
    'name' => 'Richard Nwankwo',
    'email' => 'richnwan@gmail.com',
    'message' => 'This is a test'
]);
$I->see('Message Sent!');
