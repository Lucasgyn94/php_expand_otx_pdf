<?php

namespace Lucas\ExpansaOfx\Controllers;

use Lucas\ExpansaOfx\Services\ConversionService;
use Lucas\ExpansaOfx\Models\Conversion;


class ConversionController {
    private $conversionService;
    private $conversionModel;

    public function __construct(ConversionService $conversionService, Conversion $conversionModel) {
        $this->conversionService = $conversionService;
        $this->conversionModel = $conversionModel;
    }

    public function convert($userId, $pdfFile) {
        $pdfPath = '/storage/uploads/' . $pdfFile['name'];
        move_uploaded_file($pdfFile['tmp_name'], $pdfPath);

        $ofxPath = $this->conversionService->convertPdfToOfx($pdfPath);

        $this->conversionModel->create($userId, $pdfPath, $ofxPath);

        header('Location: /dashboard');
    }
}
?>
