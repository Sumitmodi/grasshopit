<?php
/*
 * Author   :   Arjun Paudel
 * Email    :   hobo2rist@gmail.com
 * Date     :   9/4/14 5:20 PM
 * File     :   index.php
 * Project  :   grasshopit
 * Copyright (c) Author
 */
include "BluePay.php";

$accountID = "MERCHANT'S ACCOUNT ID HERE";
$secretKey = "MERCHANT'S SECRET KEY HERE";
$mode = "TEST";

// Merchant's Account ID
// Merchant's Secret Key
// Transaction Mode: TEST (can also be LIVE)
$payment = new BluePay(
    $accountID,
    $secretKey,
    $mode);

// First Name: Bob
// Last Name: Tester
// Address1: 123 Test St.
// Address2: Apt #500
// City: Testville
// State: IL
// Zip: 54321
// Country: USA
$payment->setCustomerInformation(
    'Bob',
    'Tester',
    '123 Test St.',
    'Apt #500',
    'Testville',
    'IL',
    '54321',
    'USA');

// Card Number: 4111111111111111
// Card Expire: 12/15
// Card CVV2: 123
$payment->setCCInformation(
    '4111111111111111',
    '1215',
    '123');

// Phone #: 877-621-2376
$payment->setPhone('877-621-2376');

// Email Address: test@bluepay.com
$payment->setEmail('test@bluepay.com');

/* RUN A $3.00 CREDIT CARD SALE */
$payment->sale('3.00');

$payment->process();

# Read response from BluePay
echo 'Status: '. $payment->getStatus() . '<br />' .
    'Message: '. $payment->getMessage() . '<br />' .
    'Transaction ID: '. $payment->getTransID() . '<br />' .
    'AVS Response: ' . $payment->getAVSResponse() . '<br />' .
    'CVS Response: ' . $payment->getCVV2Response() . '<br />' .
    'Masked Account: ' . $payment->getMaskedAccount() . '<br />' .
    'Card Type: ' . $payment->getCardType() . '<br />' .
    'Authorization Code: ' . $payment->getAuthCode() . '<br />';
?>