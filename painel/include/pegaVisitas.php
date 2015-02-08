<?php
	/**
	 * Fun��o que retorna o total de visitas
	 *
	 * @param string $tipo - O tipo de visitas a se pegar: (uniques|pageviews)
	 * @param string $periodo - O per�odo das visitas: (hoje|mes|ano)
	 *
	 * @return int - Total de visitas do tipo no per�odo
	 */
	 $_CV['registraAuto'] = true;       // Registra as visitas automaticamente?
	 
	 $_CV['conectaMySQL'] = true;       // Abre uma conex�o com o servidor MySQL?
	 $_CV['iniciaSessao'] = true;       // Inicia a sess�o com um session_start()?
	 
	 $_CV['servidor'] = 'localhost';    // Servidor MySQL
	 $_CV['usuario'] = 'root';          // Usu�rio MySQL
	 $_CV['senha'] = '';                // Senha MySQL
	 $_CV['banco'] = 'casametais';            // Banco de dados MySQL
	 
	 $_CV['tabela'] = 'visitas';        // Nome da tabela onde os dados s�o salvos
	 // ==============================
	 
	 // ======================================
	 //   ~ N�o edite a partir deste ponto ~
	 // ======================================
	 
	 // Verifica se precisa fazer a conex�o com o MySQL
	 if ($_CV['conectaMySQL'] == true) {
	    $_CV['link'] = mysql_connect($_CV['servidor'], $_CV['usuario'], $_CV['senha']) or die("MySQL: N�o foi poss�vel conectar-se ao servidor [".$_CV['servidor']."].");
	    mysql_select_db($_CV['banco'], $_CV['link']) or die("MySQL: N�o foi poss�vel conectar-se ao banco de dados [".$_CV['banco']."].");
	 }
	 
	 // Verifica se precisa iniciar a sess�o
	 if ($_CV['iniciaSessao'] == true) {
	    session_start();
	 }
	 function pegaVisitas($tipo = 'uniques', $periodo = 'hoje') {
	    global $_CV;
	 
	    switch($tipo) {
	        default:
	        case 'uniques':
	            $campo = 'uniques';
	            break;
	        case 'pageviews':
	            $campo = 'pageviews';
	            break;
	    }
	 
	    switch($periodo) {
	        default:
	        case 'hoje':
	            $busca = "`data` = CURDATE()";
	            break;
	        case 'mes':
	            $busca = "`data` BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND LAST_DAY(CURDATE())";
	            break;
	        case 'ano':
	            $busca = "`data` BETWEEN DATE_FORMAT(CURDATE(), '%Y-01-01') AND DATE_FORMAT(CURDATE(), '%Y-12-31')";
	            break;
	    }
	 
	    // Faz a consulta no MySQL em fun��o dos argumentos
	    $sql = "SELECT SUM(`".$campo."`) FROM `".$_CV['tabela']."` WHERE ".$busca;
	    $query = mysql_query($sql);
	    $resultado = mysql_fetch_row($query);
	 
	    // Retorna o valor encontrado ou zero
	    return (!empty($resultado)) ? (int)$resultado[0] : 0;
	 }
	 
	 
	 ?>