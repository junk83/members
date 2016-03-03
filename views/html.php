<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <table border=1>
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メールアドレス</th>
      </tr>
      <?php foreach($datas as $line) : ?>
      <tr>
        <td><?php echo $line['id'] ?></td>
        <td><?php echo $line['name'] ?></td>
        <td><?php echo $line['email'] ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>