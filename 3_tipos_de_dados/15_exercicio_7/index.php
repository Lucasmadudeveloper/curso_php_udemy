<?php 

  $pessoa = [
    'nome' => 'Lucas',
    'idade' => '27',
    'profissao' => 'Progamador',
    'graduacao' => 'Sistema de informação'

  ];

  $maiordeidade = 18;

  if($pessoa['idade'] >= $maiordeidade) {
    echo "A pessoa é maior de idade!";
  }
?>