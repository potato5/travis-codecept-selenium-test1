<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See "start page" words in title | Fill in first name and last name, click Send button, and see full name');

$I->amOnPage('/');
$I->seeInTitle('start page');

$I->fillField('firstname','AAAA');
$I->fillField('lastname','BBBB');
$I->click('Send');
//$I->waitForElement("#full_name");
