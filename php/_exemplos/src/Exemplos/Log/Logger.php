<?php
namespace Exemplos\Log;

abstract class Logger
{
    /**
     * Nome do arquivo de LOG
     *
     * @var string
     */
    protected string $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        file_put_contents($filename, '');
    }

    /**
     * Método write é obrigatório na classe filha
     *
     * @param string $message
     * @return void
     */
    abstract public function write(string $message): void;
}
