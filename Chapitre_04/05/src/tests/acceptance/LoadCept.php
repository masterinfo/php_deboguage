<?php 
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('Arrived to website');
$I->lookForwardTo('access all website features');
$I->amOnPage('/');
$I->see('Home');
