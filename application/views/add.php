<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add product</title>
	<meta name="robots" content="index,follow" />
	<meta name="description" content="Login" />
	<meta http-equiv="Content-type" content="text/html; charset=iso8859-1" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style type="text/css">
		p { margin: 0; padding: 0; }
		input.textbox { width: 120px;color: #777;height: 18px;padding: 2px;border: 1px solid #E5E5E5;vertical-align: top; }
		input.button { width: auto;height: 22px;padding: 2px 5px;vertical-align: top; }
	</style>
	<script type="application/javascript">
		$(document).ready(function() {
			$('#submit').click(function() {
				var form_data = {
					name : $('.name').val(),
					description : $('.description').val(),
					production_date : $('.production_date').val(),
					expiry_date : $('.expiry_date').val(),
					price : $('.price').val(),
					currency : $('.currency').val(),
					ean_code : $('.ean_code').val(),
					weight : $('.weight').val(),
					weight_unit : $('.weight_unit').val(),
					ajax : '1'
				};
				$.ajax({
					url: "<?php echo site_url('index.php/product/ajax_check'); ?>",
					type: 'POST',
					async : false,
					data: form_data,
					success: function(msg) {
						$('#message').html(msg);
					}
				});
				return false;
			});
		});
	</script>
</head>
<body>

	<h2 align="center">Products list</h2>

	<div><a href="<?php echo site_url('index.php/product/index') ?>">Back to product list</a></div>

	<?php echo form_open('login'); ?>

		<div id="message"></div>
		<table border="0" cellspacing="0" cellpadding="0" width="500" align="center">
			<tr>
				<td><label for'name'>Name:</label></td>
				<td><?=form_input(array('name'=>'name','value'=>'','class'=>'name textbox','style'=>'width:150px;'))?></td>
			</tr>
			<tr>
				<td><label for'description'>Description:</label></td>
				<td><?=form_textarea(array('name'=>'description','value'=>'','class'=>'description textbox'))?></td>
			</tr>
			<tr>
				<td><label for'production_date'>Production date:</label></td>
				<td><?=form_input(array('name'=>'production_date','value'=>'','class'=>'production_date textbox'))?></td>
			</tr>
			<tr>
				<td><label for'expiry_date'>Expiry date:</label></td>
				<td><?=form_input(array('name'=>'expiry_date','value'=>'','class'=>'expiry_date textbox'))?></td>
			</tr>
			<tr>
				<td><label for'price'>Price:</label></td>
				<td><?=form_input(array('name'=>'price','value'=>'','class'=>'price textbox'))?></td>
			</tr>
			<tr>
				<td><label for'currency'>Currency:</label></td>
				<td><?=form_input(array('name'=>'currency','value'=>'','class'=>'currency textbox'))?></td>
			</tr>
			<tr>
				<td><label for'ean_code'>EAN code:</label></td>
				<td><?=form_input(array('name'=>'ean_code','value'=>'','class'=>'ean_code textbox'))?></td>
			</tr>
			<tr>
				<td><label for'weight'>Weight:</label></td>
				<td><?=form_input(array('name'=>'weight','value'=>'','class'=>'weight textbox'))?></td>
			</tr>
			<tr>
				<td><label for'weight_unit'>Weight unit:</label></td>
				<td><?=form_input(array('name'=>'weight_unit','value'=>'','class'=>'weight_unit textbox'))?></td>
			</tr>
			<tr>
				<td></td>
				<td><?='<br />'.form_submit('submit','Submit','id="submit"')?></td>
			</tr>
		</table>
	<?=form_close("\n")?>
</body>
</html>