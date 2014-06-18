<?php
	//Pegando local do arquivo XML e atribuindo para  a váriavel filename
	$filename="app/etc/app/FabioSantos_EtiquetaEndereco.xml";
	//$xmlstr = file_get_contents($filename);
	//$dom = new domDocument();
	//$dom->loadXML($xmlstr);
	//$xml = simplexml_import_dom($dom);
	//$xml->global->resources->default_setup->connection->host;
	
	$xml =  simplexml_load_string($filename);
	$xml->modules->FabioSantos_EtiquetaEndereco->active = "fase";
	//unset($xml->data);
	//$xml->nome = 'Nome do livro';
	
	echo $xml->asXML();

?>