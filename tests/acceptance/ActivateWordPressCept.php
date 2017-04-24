<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Install WordPress');
$I->amOnPage('/wp-admin/setup-config.php');
$I->click(".button");
$I->fillField("dbname", "wordpress");
$I->fillField("uname", "wordpressuser");
$I->fillField("pwd", "password");
$I->fillField("dbhost", "localhost");
$I->fillField("prefix", "wp_");
$I->click('Submit');
$I->click('Run the install');
$I->fillField("weblog_title", "Custom Ray Guns Remote");
$I->fillField("user_name", "admin");
$I->fillField("pass1-text", "password");
$I->fillField("admin_email", "admin@thissite.com");
$I->click('Install WordPress');
