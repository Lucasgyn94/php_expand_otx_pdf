<?php $content = 'dashboard_content.php'; include('layout.php'); ?>

<h2>Dashboard</h2>
<p>Bem-vindo ao painel de administração.</p>

<h3>Submeter PDF para conversão:</h3>
<form action="/convert" method="POST" enctype="multipart/form-data">
    <input type="file" name="pdf_file" required>
    <button type="submit">Convert to OFX</button>
</form>

<h3>Conversões recentes do usuário:/h3>
