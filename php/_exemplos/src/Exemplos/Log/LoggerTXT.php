<?php
namespace Exemplos\Log;

class LoggerTXT extends Logger
{
    public function write(string $message): void
    {
        date_default_timezone_set('America/Sao_Paulo');
        $time = date("Y-m-d H:i:s");

        /**
         * Abre o arquivo com a opção "append"
         */
        $handler = fopen($this->filename, 'a');

        /**
         * Escreve um texto no arquivo
         */
        fwrite($handler, "$time :: $message\n");

        /**
         * Fecha o arquivo
         */
        fclose($handler);
    }
}
