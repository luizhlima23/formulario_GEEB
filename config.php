<?php
$dbHost ='192.169.80.50' ;
$dbUsername = 'geebcristalina_cartas' ;
$dbPassword  ='12!@Cartas';
$dbName = 'geebcristalina_cartasconsoladoras' ;
$conexao = new mysqli($dbHost, $dbUsername,$dbPassword, $dbName);
if($conexao -> connect_errno){
echo "Erro" ;

}
else
{
    
    echo "conexão efetuada" ;
}

?>