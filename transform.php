<?php

// Transform files pased as asguments
echo $argc;

// Load XML & XSLT
$xml = new DOMDocument();
$xml->load($argv[1]);

$xsl = new DOMDocument();
$xsl->load($argv[2]);


// Configure XSLT processor
$proc = new XSLTProcessor();
$proc->importStylesheet($xsl);

// Apply transform
$resultado = $proc->transformToXML($xml);

// Save result in HTML file
file_put_contents('result.html', $resultado);

echo "Transform completed. Load result.html\n";