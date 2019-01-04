<?php 
echo "<pre>";
$total = 0;
$count = 0;
if(!empty($_FILES)){
	foreach ($_FILES as $key => $value) {
		foreach ($value['tmp_name'] as $key => $value) {
			$xml = simplexml_load_file($value);
			if(floatval($xml->NFe->infNFe->total->ICMSTot->vNF) !== floatval($xml->NFe->infNFe->pag->detPag->vPag)){
				echo '</br> $xml->NFe->infNFe->total->ICMSTot->vNF ' . $xml->NFe->infNFe->total->ICMSTot->vNF;
				echo '</br> $xml->NFe->infNFe->pag->detPag->vPag ' . $xml->NFe->infNFe->pag->detPag->vPag;
				echo '</br>' . $xml->NFe->infNFe['Id'];
			}
		}
	}
} 
echo "</pre>";
?>