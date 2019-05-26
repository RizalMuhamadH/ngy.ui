<div style="background:#ffffff;margin-top:80px;height:400px">

	<div style="left: 0;right: 0;padding:20px">
		<h2>Tracking</h2>
		<?php if ($data) { ?>
			<table style="width: 100%;" class="table table-bordered">
				<tbody>
					<tr>
						<td >No</td>
						<td>Dari</td>
						<td>Tujuan</td>
						<td>Barang</td>
						<td>Total Barang</td>
						<td>Total Berat(kg)</td>
						<td>Total Biaya</td>
						<td>Jenis Packing</td>
						<td>Tanggal Dikirim</td>
						<td>Tanggal Diterima</td>
						<td>Status</td>
						<td>Keterangan</td>
					</tr>
					<tr>
						<td><?php echo $t_no_trans; ?></td>
						<td>
							<?php echo $c_name_sender; ?><br>
							<?php echo $c_address_sender; ?><br>
							<?php echo $c_city_sender; ?>
							<?php echo " ".$c_postcode_sender; ?><br>
							<?php echo "Tlpn : ".$c_phone_sender; ?>
						</td>
						<td>
							<?php echo $c_name_receiver; ?><br>
							<?php echo $c_address_receiver; ?><br>
							<?php echo $c_city_receiver; ?>
							<?php echo " ".$c_postcode_receiver; ?><br>
							<?php echo "Tlpn : ".$c_phone_receiver; ?>
						</td>
						<td><?php echo $dt_list_products; ?></td>
						<td><center><?php echo $dt_total_items; ?></center></td>
						<td><center><?php echo $dt_total_weight; ?></center></td>
						<td><center><?php echo $dt_total_price; ?></center></td>
						<td><center><?php echo $t_date_delivery; ?></center></td>
						<td><center><?php echo $t_date_reception; ?></center></td>
						<td><?php echo $pk_name; ?></td>
						<td><?php echo $s_name; ?></td>
						<td><?php echo $t_desc; ?></td>
					</tr>
				</tbody>
			</table>
		<?php } else { ?>
			<center><b><?php echo $message; ?></b></center>
		<?php } ?>
	</div>

</div>