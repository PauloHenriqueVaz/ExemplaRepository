<?php
	include "conect.php";

	$album = $_POST['album'];
	$descricao = addslashes(stripslashes($_POST['descricao']));
	//$sessao = "galeria_fotos"; //$_POST['sessao'];
	$nome = $_POST['nome'];
	// nome do diret�rio
    //$diretorio = "d:/xampp/htdocs/rancho_dourado/imagemSite/$album";
	$diretorio = "../../album/".$album;
    // cria o diret�rio com a permiss�o 0777
     if(file_exists($diretorio)){
      echo "N�o foi poss�vel criar o diret�rio.";
	}else{
	  //echo $diretorio;
	  mkdir($diretorio,0777);
	  $sqlCriaAlbum = "insert into albuns(nome,descricao, nomeSite, sessao) values('$album', '$descricao', '$nome', '$sessao')";
	  $resultCriaAlbum = mysql_query($sqlCriaAlbum,$conect); 
	  echo "Processando...<br>";		
      echo "Diret�rio criado com sucesso.";
	 echo "<br><META HTTP-EQUIV='Refresh' CONTENT='2;URL=../albuns.php'>";
	}
?>
