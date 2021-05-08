<?php

interface TableInterface
{
    public function save(array $data);
}

interface LogInterface
{
    public function log(string $message);
}

class Table implements TableInterface, LogInterface, Countable
{
    private int $count = 0;
    public function save(array $data)
    {
        return 'foo: ' . $data[0];
    }

    public function log(string $message)
    {
        return $message . PHP_EOL;
    }

    public function count()
    {
        $this->count++;
        return $this->count . PHP_EOL;
    }
}

echo (new Table())->save(['Armando N Junior']);
echo (new Table())->log('interfaces are awesome');
$count = new Table();
echo $count->count();
echo $count->count();
echo $count->count();
echo $count->count();
echo $count->count();
echo $count->count();