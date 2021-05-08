<?php
try {
    processCC();
} catch (Exception $e) {
    /** Throw Exception */
    echo $e->getMessage() . PHP_EOL;
    /** Nested exceptions */
    echo $e->getPrevious()->getMessage();
}

function processCC($numb = null, $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw new Exception('Invalid Inputs', null, $e);
    }
    echo 'processed';
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new Exception('No CC Number' . PHP_EOL);
    }
}