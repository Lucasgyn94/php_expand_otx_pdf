<?php $content = 'conversion_content.php'; include('layout.php'); ?>

<h2>Conversão de PDF para OFX</h2>
<p>Submeter um arquivo PDF para conversão.</p>

<form action="/convert" method="POST" enctype="multipart/form-data">
    <input type="file" name="pdf_file" required>
    <button type="submit">Converter</button>
</form>
