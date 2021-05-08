<?php
try {
    processCC();
} catch (Exception $e) {
    /** Throw Exception */
    echo $e->getMessage() . PHP_EOL;
    echo get_class($e) . PHP_EOL;

    /** Nested exceptions */
    echo $e->getPrevious()->getMessage();
    echo get_class($e->getPrevious()) . PHP_EOL;
}

function processCC($numb = null, $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw new BadFunctionCallException('Invalid Inputs', null, $e);
    }
    echo 'processed';
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new InvalidArgumentException('No CC Number' . PHP_EOL);
    }
}