<?php

use Model\ProductModel;

$test = new ProductModel();
$rows = $test->count();
echo $rows;
?>
<div id=""></div>
<script>
	data = JSON.parse('<?= $rows ?>');
	console.log(data[0].count);
</script>