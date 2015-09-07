<?php 

$data['A']['X'] = 1;
$data['A']['Y'] = 2;
$data['A']['Z'] = 5;


$data['B']['X'] = 4;
$data['B']['Y'] = 5;
$data['B']['Z'] = 6;

$data['C']['X'] = 7;
$data['C']['Y'] = 8;
$data['C']['Z'] = 9;

foreach($data as $k => $v) {
	foreach($v as $ka => $va) {
		$kolom[$ka] = $ka;
	}
}
asort($kolom);

?>

<table border="2" cellpadding="10">
	<tr>
		<th>&nbsp;</th>
		<?php foreach($kolom as $kk => $vk) { ?>
		<th><?php echo $vk;?></th>
		<?php } ?>
	</tr>
	<?php 
	$jmlbaris = array(); 
	$jmlkolom = array(); $i = 0;
	?>
	
	<?php foreach($data as $kb => $vb) { ?>
	<?php $i++;?>
	<tr>
		<th><?php echo $kb;?></th>
		<?php foreach($kolom as $kk => $vk) { ?>
			<td><?php echo $isi = @$data[$kb][$kk]?:'0';?></td>
			<?php @$jmlbaris[$kb] += $isi;?>
			<?php @$jmlkolom[$kk] += $isi;?>
		<?php } ?>
		<td><?php echo $jmlbaris[$kb];?></td>
	<tr/>
	<?php } ?>
	<tr>
		<td>&nbsp;</td>
		<?php foreach($kolom as $kj => $vj) { ?>
			<td><?php echo $jmlkolom[$kj];?></td>
		<?php } ?>
	</tr>
</table>
