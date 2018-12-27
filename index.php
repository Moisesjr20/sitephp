<?php 

$get = isset($_GET['pag'])? $_GET['pag']:'';

//header, cabeçalho
require 'staff/funcao.php';

require 'pag/headerMin.php'; 
require 'pag/cabecalhoMin.php';

?>

<?php
//paginas
caminho($get);
?>
	
<?php 
//rodape
require 'pag/rodapeMin.php'; 
?>