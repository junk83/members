<?php header("Content-Type: text/xml") ?>
<?xml version="1.0" encoding="utf-8"?>
<members>
<?php foreach($datas as $line) : ?>
  <member>
    <id><?php echo $line['id'] ?></id>
    <name><?php echo $line['name'] ?></name>
    <email><?php echo $line['email'] ?></email>
  </member>
<?php endforeach; ?>
</members>