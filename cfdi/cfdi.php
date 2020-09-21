<?php
$xml = simplexml_load_file('TSL171218FP7_P6902_20190920.xml');
$ns = $xml->getNamespaces(true);
$xml->registerXPathNamespace('c', $ns['cfdi']);
$xml->registerXPathNamespace('t', $ns['tfd']);
foreach ($xml->xpath('//cfdi:Comprobante') as $cfdiComprobante){
	  echo "<h2> Información del comprobante fiscal V3.3 </h2>";
      echo '<p><strong>Version del comprobante:</strong> ';
      echo $cfdiComprobante['Version'].'</p>';
      echo '<p><strong>Serie del comprobante:</strong> ';
      echo $cfdiComprobante['Serie'].'</p>';
	  echo '<p><strong>Fecha del comprobante fiscal:</strong> ';
      echo $cfdiComprobante['Fecha'] .'</p>';
      echo '<p><strong>Sello:</strong> ';
      echo $cfdiComprobante['Sello'] .'</p>';
	  echo '<strong>Número de folio:</strong>';
      echo $cfdiComprobante['Folio'].'</p>';
	  echo '<p><strong>Formato de pago: </strong>';
      echo $cfdiComprobante['FormaPago'].'</p>';
	  echo '<p><strong>Subtotal:</strong> $';
      echo $cfdiComprobante['SubTotal'].'</p>';;
      echo '<p><strong>Total:</strong> $';
      echo $cfdiComprobante['Total'].'</p>';;
      echo '<p><strong>Número de certificado:</strong>';
      echo $cfdiComprobante['NoCertificado'].'</p>';
      echo '<p><strong>Tipo de comprobante:</strong> ';
      echo $cfdiComprobante['TipoDeComprobante'].'</p>';
      echo '<p><strong>Lugar de expedición:</strong>';
      echo $cfdiComprobante['LugarExpedicion'].'</p>';
      echo '<p><strong>Metodo de pago: </strong>';
      echo $cfdiComprobante['MetodoPago'].'</p>';
      echo '<p><strong>Tipo de moneda:</strong>';
      echo $cfdiComprobante['Moneda'].'</p>';
	  echo '<p><strong>Certificado:</strong> ';
      echo $cfdiComprobante['Certificado'].'</p>';
}
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Emisor') as $Emisor){
  echo "<h2> Información del emisor </h2>";
  echo '<p><strong>RFC del emisor:</strong> ';
  echo $Emisor['Rfc' ].'</p>';
  echo '<p><strong>Nombre de emisor:</strong> ';
  echo $Emisor['Nombre'].'</p>';
  echo '<p><strong> Regimen fiscal:</strong> ';
  echo $Emisor['RegimenFiscal'].'</p>';
}
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Receptor') as $Receptor){
   echo "<h2> Información del receptor</h2>";
   echo '<p><strong>Uso CFDI: </strong>';
   echo $Receptor['UsoCFDI'].'</p>';
   echo '<p><strong>Nombre del receptor:</strong>';
   echo $Receptor['Nombre'].'</p>';
   echo '<p><strong>RFC del receptor: </strong>';
   echo $Receptor['Rfc'].'</p>';
}
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Concepto') as $Concepto){
   echo "<h2>Información Concepto</h2>";  
   echo '<p><strong> Clave Prod Serv.: </strong>';
   echo $Concepto['ClaveProdServ'].'</p>';
   echo '<p><strong> Cantidad:  </strong>';
   echo $Concepto['Cantidad'].'</p>';
   echo '<p><strong>Clave unidad:</strong> ';
   echo $Concepto['ClaveUnidad'].'</p>';
   echo '<p><strong>Unidad:</strong> ';
   echo $Concepto['Unidad'].'</p>';
   echo '<p><strong>Descripcion:</strong> ';
   echo $Concepto['Descripcion'].'</p>';
   echo '<p><strong> Valor unitario:</strong>$';
   echo $Concepto['ValorUnitario'].'</p>';
   echo '<p><strong>Importe:</strong> $';
   echo $Concepto['Importe'].'</p>';

 

}
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Conceptos//cfdi:Traslado') as $Traslado){
   echo "<h2>Información Traslado</h2>";
   echo '<p><strong> Base:</strong> ';
   echo $Traslado['Base'].'</p>';
   echo '<p><strong>Impuesto:</strong> ';
   echo $Traslado['Impuesto'].'</p>';
   echo '<p><strong>Tipo factor:</strong> ';
   echo $Traslado['TipoFactor'].'</p>';
   echo '<p><strong> Tasa O Cuota:</strong> ';
   echo $Traslado['TasaOCuota'].'</p>';
   echo '<p><strong> Importe: </strong>$';
   echo $Traslado['Importe'].'</p>';
}
foreach ($xml->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $Impuestos){
   echo "<h2>Información del impuesto de traslado</h2>";	
   echo '<p><strong>Impuesto trasladado total:</strong> $';
   echo $Impuestos['TotalImpuestosTrasladados'].'</p>';   
}


foreach ($xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
   echo "<h2>Información timbre fiscal</h2>";
   echo '<p><strong>Version:</strong>';
   echo $tfd['Version'].'</p>';
   echo '<p><strong>Sello CFD:</strong>';
   echo $tfd['SelloCFD'].'</p>';
   echo '<p><strong> Numero de certificado del SAT:</strong>';
   echo $tfd['NoCertificadoSAT'].'</p>';
   echo '<p><strong> RFC proveedor certificado:</strong>';
   echo $tfd['RfcProvCertif'].'</p>';
   echo '<p><strong>UUID:</strong>';
   echo $tfd['UUID'].'</p>'; 
   echo '<p><strong> Fecha de timbrado:</strong>';
   echo $tfd['FechaTimbrado'].'</p>';
   echo '<p><strong> Sello del SAT:</strong>';
   echo $tfd['SelloSAT'].'</p>';
  
   
  
}
?>