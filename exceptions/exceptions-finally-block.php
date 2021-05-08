<?php
class InvalidCCNumberException extends InvalidArgumentException
{
    public function __construct($message = 'Other Error', $code = 0, $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}

try {
    processCC(1);
} catch (InvalidCCNumberException $e) {
    /** Throw Exception */
    echo $e->getMessage() . PHP_EOL;
    echo get_class($e) . PHP_EOL;
} finally {
    echo 'finally it will be executed every time';
}

function processCC($numb = null, $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw $e;
    }
    echo 'processed';
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new InvalidCCNumberException('No CC Number');
    }
    if (is_null($zipCode)) {
        throw new InvalidCCNumberException('No ZipCode');
    }
}