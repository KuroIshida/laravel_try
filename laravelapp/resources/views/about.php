this is view file
<div id="siswa">
  <h1>Data</h1>
  <?php if (!empty($siswa)): ?>
    <ul>
      <?php foreach ($siswa as $val): ?>
        <li><?php echo $val; ?></li>
      <?php endforeach; ?>
    </ul>
    <?php else: ?>
      <h3>No data</h3>
    <?php endif ?>
</div>
