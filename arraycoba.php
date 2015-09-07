<?php 

	$data['A']['Z']=1;
	$data['B']['Z']=2;
	$data['C']['Z']=3;

	
	$data['A']['X']=4;
	$data['B']['X']=5;
	$data['C']['X']=6;

	$data['A']['Y']=7;
	$data['B']['Y']=8;
	$data['C']['Y']=10;

	foreach ($data as $key => $value) {
		$baris[$key]=$key;
		foreach ($value as $key1 => $value1) {
			$kolom[$key1]=$key1;
			
		}
	}

?>

<table border="1" cellpadding="10">
	<tr>
		<th></th>
		<?php foreach ($baris as $key => $value) {?>
			<td><?php echo $key; ?></td>
		<?php } ?>
	</tr>
	
		<?php foreach ($kolom as $key2 => $value2) {?>

			<tr>
			<td><?php echo $key2; ?></td>
			<?php foreach ($baris as $key => $value) {?>
				<td>
				<?php echo $key.'-'.$key2.'-'.$data[$key][$key2];
					$simpan[$key] = $data[$key][$key2];
				?>
					
				</td>
			<?php } ?>
			
			<td><?php echo array_sum($simpan);  echo var_dump($simpan);?></td>
	</tr>
	<?php } ?>
	<tr>
	<td></td>
	<?php foreach ($baris as $key5 => $value5) {?>
	
	<td><?php echo array_sum($data[$key5]);?><?php var_dump($data[$key5]);?></td>
	<?php }?>

	</tr>
</table>

<?php

$nilai_a = 5;
$nilai_b = 7;
$nilai_c = 7;


$data = array('a','b','c');
	
foreach ($data as $key => $value) {
	$nilai = 'nilai_'.$value;
	echo $$nilai;
	$xxx[] = $$nilai;
	echo '<br>';		
}

echo array_sum($xxx);
?>




