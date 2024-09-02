<?php

namespace Lucas\ExpansaOfx\Services;

use Lucas\ExpansaOfx\Models\Conversion;

class ConversionService {
    private $conversionModel;

    public function __construct(Conversion $conversionModel) {
        $this->conversionModel = $conversionModel;
    }

    public function convertPdfToOfx($pdfPath) {
        // Lógica de conversão de PDF para OFX
        $ofxContent = "Content converted from PDF to OFX";
        $ofxPath = str_replace('.pdf', '.ofx', $pdfPath);

        file_put_contents($ofxPath, $ofxContent);

        return $ofxPath;
    }
}
?>
