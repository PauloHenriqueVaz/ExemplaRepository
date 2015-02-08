<?php
	// Pega o total de visitas �nicas de hoje
	$total_unicas_hj = pegaVisitas();
	 
	// Pega o total de visitas �nicas desde o come�o do m�s
	$total_unicas_mes = pegaVisitas('uniques', 'mes');
	 
	// Pega o total de visitas �nicas desde o come�o do ano
	$total_unicas_ano = pegaVisitas('uniques', 'ano');
	 
	// Pega o total de pageviews de hoje
	$total_hj = pegaVisitas('pageviews');
	 
	// Pega o total de pageviews desde o come�o do m�s
	$total_mes = pegaVisitas('pageviews', 'mes');
	 
	// Pega o total de pageviews desde o come�o do ano
	$total_ano = pegaVisitas('pageviews', 'ano');
	
	echo "Quantidade de acessos hoje".$total_unicas_hj."<br>";
	echo "Acessos este mes: ".$total_mes."<br>";
	echo "Total de acessos".$total_ano
?>