<?php

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;


$capabilities = DesiredCapabilities::firefox();
$serverUrl = 'http://localhost:4444';
$driver = RemoteWebDriver::create($serverUrl, $capabilities);
$driver->get('http://httpbin.org/ip');
echo $driver->getPageSource();
$driver->wait(33);

//$serverUrl = 'http://127.0.0.1:4444';

//$driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::chrome());

// Go to URL
//$driver->get('https://www.mql5.com/ru/auth_login');
//
// Find search element by its id, write 'PHP' inside and submit
//$driver->findElement(WebDriverBy::id('Login'))->sendKeys('zloadmin');
//$driver->findElement(WebDriverBy::id('Password'))->sendKeys('qYBunqjF')->submit();
//echo $driver->getCurrentURL();
//sleep(1);
//echo $driver->getCurrentURL();

// ->submit(); // submit the whole form
// Find element of 'History' item in menu by its css selector
//$historyButton = $driver->findElement(
//    WebDriverBy::cssSelector('#ca-history a')
//);
// Read text of the element and print it to output
//echo 'About to click to a button with text: ' . $historyButton->getText();

// Click the element to navigate to revision history page
//$historyButton->click();

// Make sure to always call quit() at the end to terminate the browser session
//$driver->quit();
