<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List of products</title>
</head>
<body>
	<h2 align="center">Products list</h2>

	<div><a href="<?php echo site_url('index.php/product/add') ?>">Add new product</a></div>

	<table border="1" cellspacing="0" cellpadding="0" width="900" align="center">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Production date</th>
			<th>Expiry date</th>
			<th>Price</th>
			<th>Currency</th>
			<th>EAN code</th>
			<th>Weight</th>
			<th>Weight unit</th>
			<!--<th>Action</th>-->
		</thead>
		<tbody>
			<?php 
				$i = 1;
				foreach ($row as $r){
					echo "<tr> 
						<td>$i</td>
						<td>$r->name</td>
						<td>$r->description</td>
						<td>$r->production_date</td>
						<td>$r->expiry_date</td>
						<td>$r->price</td>
						<td>$r->currency</td>
						<td>$r->ean_code</td>
						<td>$r->weight</td>
						<td>$r->weight_unit</td> 
						<!--<td align='center'>
							<a href='".site_url('product/edit')."/$r->id'> Update </a> |
							<a href='".site_url('product/delete')."/$r->id'> Delete </a>
						</td>-->
					<tr/>";
					$i++;
				}
			?>

		</tbody>
	</table>
</body>
</html>