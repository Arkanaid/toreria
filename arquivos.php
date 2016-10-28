<?php
 function img($pasta){

//$pasta = "";
$diretorio = "fotos_torteria/$pasta"; 
$ponteiro  = opendir($diretorio);
while ($nome_itens = readdir($ponteiro)) {
    $itens[] = $nome_itens;
}
sort($itens);
foreach ($itens as $listar) {
   if ($listar!="." && $listar!=".."){ 
                if (is_dir($listar)) { 
                        $pastas[]=$listar; 
                } else{ 
                        $arquivos[]=$listar;
                }
   }
}
/*if ($pastas != "" ) { 
foreach($pastas as $listar){
   print "<img src='pasta.png'> <a href='$diretorio/$listar'>$listar</a><br>";}
   }*/
if ($arquivos != "") {
foreach($arquivos as $listar){
   //print " - <a href='$diretorio/$listar'>$listar</a><br>";
   $dados[] = $listar;
   }
   }

  $soma = count($dados);   
  //print_r($dados);  
  shuffle($dados); 
  
  for($i=0;$i<=0;$i++){
  $dados[$i];
   return $dados[$i];
  }

} 
   
   ?>