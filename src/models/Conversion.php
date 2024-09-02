<?php

namespace Lucas\ExpansaOfx\Models;

class Conversion {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($userId, $pdfFile, $ofxFile) {
        $stmt = $this->pdo->prepare("INSERT INTO conversions (user_id, pdf_file, ofx_file) VALUES (?, ?, ?)");
        return $stmt->execute([$userId, $pdfFile, $ofxFile]);
    }

    public function getConversionsByUser($userId) {
        $stmt = $this->pdo->prepare("SELECT * FROM conversions WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetchAll();
    }
}
?>
