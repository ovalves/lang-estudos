<?php
/*
|--------------------------------------------------------------------------
| Alterando o valor de uma variável usando sua referência na memória
|--------------------------------------------------------------------------
*/
$original = '- valor original';
echo "variável {$original} \n";

// Pega a referência da variavel original e altera seu valor
$reference = &$original;
$reference = '- valor original agora tem outro valor';
echo "variável {$original} \n";
