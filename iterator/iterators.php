<?php

class BasicIterator extends IteratorIterator
{
    public function __construct($pathToFile)
    {
        // Call the parent constructor with an SplFileObject (also Traversable) for the given path.
        parent::__construct(new SplFileObject($pathToFile, 'r'));

        // These set up the inner SplFileObject's properties to process CSV.
        /** @var SplFileObject $file */
        $file = $this->getInnerIterator();
        $file->setFlags(SplFileObject::READ_CSV);
        $file->setCsvControl(',', '"', "\\");
    }
}

class FilterRows extends FilterIterator
{
    public function accept()
    {
        $current = $this->getInnerIterator()->current();
        if (count($current) == 1) {
            return false;
        }
        return true;
    }
}

$filePath = './data.csv';
$iterator = new BasicIterator($filePath);
$iterator = new FilterRows($iterator);

foreach ($iterator as $i => $row) {
    var_dump($row);
}

function fibonacci($position = 1)
{
    $last = 0;
    $current = 1;
    $i = 0;
    yield $i => 1;
    while ($i < $position) {
        $current = $last + $current;
        $last = $current - $last;
        $i++;
        yield $current;
    }
    return;
}

foreach (fibonacci() as $number) {
    echo $number, "\n";
}