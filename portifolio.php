<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
include("includes/MasterPage.php"); 
$MasterPage = new MasterPage();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php echo $MasterPage->getNomeEmpresa(); ?></title>

    <!--JS NewsLetter -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>	

    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <!--CSS Banners -->
    <link rel="stylesheet" href="banners/orbit-1.2.3.css">
    <link rel="stylesheet" href="banners/demo-style.css">
        
    <!--CSS Página em geral -->
    <link rel="stylesheet" href="css/frontend.css">
    <link rel="stylesheet" href="css/portifolio.css">
	  	
    <!--JS Banners -->
    <script type="text/javascript" src="banners/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="banners/jquery.orbit-1.2.3.min.js"></script>	
		
    <!--[if IE]>
         <style type="text/css">
             .timer { display: none !important; }
             div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
        </style>
    <![endif]-->
		
    <!-- Run the plugin for banners -->
    <script type="text/javascript">
            $(window).load(function() {
                    $('.featured').orbit();
            });
    </script>
        
    <script type="text/javascript">
        function ChangeBackgroungImageOfTab(id)
            {
                document.getElementById(id).style.backgroundImage = 'url("figuras/fundodescricaoportifolioOver.png")';
            }
    </script>
    
</head>

<body>

	<div class="tudo">
		<?php 
			include("includes/topo.php");
		 ?>


        <?php
		if ($MasterPage->VerificaBanners() >= 1){
		 		include("includes/banners.php"); 
				}
		 ?>
        
        <?php include("includes/breadcumps.php"); ?>
        
        <div class="divmain tituloPagina">
        	Portifólio
        </div>
        
        
        <div class="conteudo">
        
        <?php 
		//Calcula a margim, se o resto 
		$i = 1;
		$style = "35";
		
		/*while($i<=6){
			if($i % 2 == 0){
				$style = "style='margin-right:0px;margin-left:0px;'";
				}
			else{$style = "style='margin-right:29px;margin-left:16px;'";}*/
		?>
       <!--<a href="detalhes.php" style="font-weight:normal;">-->
        
            <div class="portifolio" <?php echo $style; ?>>
                
                <?php //mouse hover comentado
				
				/*onmouseover="sobreDiv<?php echo "$i";?>.style.display='none'; 
            descricaoDiv<?php echo "$i";?>.style.backgroundImage='url(imagens/fundodescricaoportifolioOver.png)';"
             
            onmouseout="sobreDiv<?php echo "$i";?>.style.display='inherit';
            descricaoDiv<?php echo "$i";?>.style.backgroundImage='url(imagens/fundodescricaoportifolio.png)';"*/
				?>
                
                
            	<!--<div class="imagemPortifolio">
                	<img src="imagens/fabrica.jpg" />
                </div>-->
               
              <!-- <div class="divSobreFoto" id="sobreDiv<?php echo "$i"; ?>">
               </div>-->
               
               <div class="descricaoPortifolio" id="descricaoDiv<?php echo "$i"; ?>">

               		<div class="tituloDescricaoPort">
                    	GRANASA GRANITOS NACIONAIS LTDA
                    </div>
                    
                    <div class="subdescricaoportifolio">
                     	Projeto de PSCIP do Complexo de Extração de Granito Santo Antônio do Grama - MG
                    </div>
                    
               </div>
               
               
               
            </div><?php //fim DIV portifolio ?>
            
            <div class="portifolio" <?php echo $style; ?>>
                               
               <div class="descricaoPortifolio" id="descricaoDiv<?php echo "$i"; ?>">

               		<div class="tituloDescricaoPort">
                    	ANGLO AMERICAN
                    </div>
                    
                    <div class="subdescricaoportifolio">
                     	Projeto de Prevenção e Combate a Incêndio – Planta Industrial – PROJETO MINAS-RIO
                    </div>
                    
               </div>
               
            </div><?php //fim DIV portifolio ?>
            
            <div class="portifolio" <?php echo $style; ?>>
                               
               <div class="descricaoPortifolio" id="descricaoDiv<?php echo "$i"; ?>">

               		<div class="tituloDescricaoPort">
                    	 LOCGUEL (Grupo ORGUEL)
                    </div>
                    
                    <div class="subdescricaoportifolio">
                     	Projeto Galpão de Armazenamento de Equipamentos e Estruturas – MG
                    </div>
                    
               </div>
               
            </div><?php //fim DIV portifolio ?>
            
            
            <div class="portifolio" <?php echo $style; ?>>
                               
               <div class="descricaoPortifolio" id="descricaoDiv<?php echo "$i"; ?>">

               		<div class="tituloDescricaoPort">
                    	STE
                    </div>
                    
                    <div class="subdescricaoportifolio">
                     	Assessoria em Projeto de Prevenção e Combate a Incêndio e Pânico – Instalações da Universidade UNIFEI – ITABIRA
                    </div>
                    
               </div>
               
            </div><?php //fim DIV portifolio ?>
            
            <div class="portifolio" <?php echo $style; ?>>
                               
               <div class="descricaoPortifolio" id="descricaoDiv<?php echo "$i"; ?>">

               		<div class="tituloDescricaoPort">
                    	CENTRAIS ELÉTRICAS DO PARÁ
                    </div>
                    
                    <div class="subdescricaoportifolio">
                     	CELPA -  Projeto de Prevenção e Combate a Incêndio Escritório de Atendimento Abaetetuba – PA
                    </div>
                    
               </div>
               
            </div><?php //fim DIV portifolio ?>
        <!-- </a>-->
            
            <?php 
			//$i++; 
			//} //fecha WHILE ?>
                   
        </div><?php //fim DIV CONTEUDO ?>
        	
        <div class="clear" style="height:55px;">
        </div>
        
        <?php // PARCEIROS ?>
        <?php include("includes/parceiros.php"); ?>
        
       <?php // RODAPÉ ?>
       <?php include("includes/rodape.php"); ?>
                
        
    </div><?php //fim DIV TUDO ?>
    <?php 
	$MasterPage->CloseMySQL();
	?>
</body>
</html>	