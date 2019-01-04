<?php 
echo "<pre>";
$total = 0;
$count = 0;
if(!empty($_FILES)){
	foreach ($_FILES as $key => $value) {
		foreach ($value['tmp_name'] as $key => $value) {
			$xml = simplexml_load_file($value);
			echo $xml->NFe->infNFe->total->ICMSTot->vNF . ' / ';
			$total += floatval($xml->NFe->infNFe->total->ICMSTot->vNF);
			$count += 1;
		}
	}
} 
echo "</pre>";

echo 'Esse é o total: ' . number_format($total, 2) . ' contador: ' . $count;
?>