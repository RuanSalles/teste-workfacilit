<?php

// $messages = [
    
//     'p_pode_falar' => 'Bom dia, pode falar {{1}}?',
//     'p_reforco_contato' => 'Olá {{1}}, gostaríamos de reforçar que estamos à sua disposição nesse canal.',
//     'p_contato_nome' => 'Oi {{1}}, tentei contato com você mas não consegui. Me avise quando puder falar por aqui.',
//     'p_tirar_duvidas' => 'Olá {{1}}, gostaria de tirar algumas dúvidas com você. Quando puder falar pode ligar para {{2}}?'
// ];
include_once "../database/conexao.php";
$messages = [];
for($i = 0; $i <= count($result); $i++) {
    array_push($messages, $result[$i]);
}


$pattern = '/{{((?:[^}]|}[^}])+)}}/';

foreach ($messages as $key => $message) {
    $callback = function($match) use ($key) { 
        return '<input data-id="' . trim($match[1]) . '">';
    };
    $entry = preg_replace_callback($pattern, $callback, $message['mensagem']);
    ?>
    <div id="<?= $key ?>">
        
            <?php echo $entry; ?>
            <button onclick="disparo('<?= $key ?>', '<?= $message['mensagem'] ?>')" class="btn btn-primary bt-3">Enviar</button>
        
    </div>
    <?php
}

?>