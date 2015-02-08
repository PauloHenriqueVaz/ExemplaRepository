<?php
/**
	 * Sistema de contador de visitas
	 *
	 * Usado para fazer a contagem de visitas �nicas e pageviews di�rios do site
	 *
	 * M�todo de utiliza��o:
	 *  Apenas inclua este arquivo no come�o do seu site.
	 *
	 * @author Thiago Belem <contato@thiagobelem.net>
	 * @link http://thiagobelem.net/
 *
	 * @version 1.0
	 * @package ContadorVisitas
	 */
	 
	 //  Configura��es do Script
	 // ==============================
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
	 
	/**
	 * Registra uma visita e/ou pageview para o visitante
	 */
	 function registraVisita() {
	    global $_CV;
	 
	    $sql = "SELECT COUNT(*) FROM `".$_CV['tabela']."` WHERE `data` = CURDATE()";
	    $query = mysql_query($sql);
	    $resultado = mysql_fetch_row($query);
	 
	    // Verifica se � uma visita (do visitante)
	    $nova = (!isset($_SESSION['ContadorVisitas'])) ? true : false;
	 
	    // Verifica se j� existe registro para o dia
	    if ($resultado[0] == 0) {
	        $sql = "INSERT INTO `".$_CV['tabela']."` VALUES (NULL, CURDATE(), 1, 1)";
	    } else {
	        if ($nova == true) {
	            $sql = "UPDATE `".$_CV['tabela']."` SET `uniques` = (`uniques` + 1), `pageviews` = (`pageviews` + 1) WHERE `data` = CURDATE()";
	        } else {
	            $sql = "UPDATE `".$_CV['tabela']."` SET `pageviews` = (`pageviews` + 1) WHERE `data` = CURDATE()";
	        }
	    }
	    // Registra a visita
	    mysql_query($sql);
	 
	    // Cria uma variavel na sess�o
	    $_SESSION['ContadorVisitas'] = md5(time());
	 }
	 if ($_CV['registraAuto'] == true) {registraVisita(); 
	 }
?>