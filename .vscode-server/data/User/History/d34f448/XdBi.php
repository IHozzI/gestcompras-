<!-- Adicione esta tabela ao seu arquivo de template (tabela.html) -->
<table border="1">
  <thead>
    <tr>
      <th>Código Artigo</th>
      <th>Nome</th>
      <th>Código Família</th>
    </tr>
  </thead>
  <tbody>
    <!-- Aqui você vai iterar sobre os resultados do seu banco de dados para preencher a tabela -->
    <?php foreach ($table->getData() as $row): ?>
      <tr>
        <td><?= $row['CodigoArtigo'] ?></td>
        <td><?= $row['Nome'] ?></td>
        <td><?= $row['CodigoFamilia'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
