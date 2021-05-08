<?php

trait LogTrait
{
    protected function log(string $msg)
    {
        return "Log: $msg: ";
    }
}

class Table
{
    use LogTrait;

    public function printLog()
    {
        $msg = 'My log tes...';
        return $this->log($msg) . PHP_EOL;
    }
}

echo (new Table())->printLog();

class pao
{
    private $valor;

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     *
     * @return pao
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }
}
