<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Histori Transaksi</h2>
  </div>
</header>

<div class="container-fluid">
	<br>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover table-bordered" id="example" ui-options=ui-options="{
		        &quot;paging&quot;: {
		          &quot;enabled&quot;: true
		        },
		        &quot;filtering&quot;: {
		          &quot;enabled&quot;: true
		        },
		        &quot;sorting&quot;: {
		          &quot;enabled&quot;: true
		        }}">
				<thead style="background-color: #464b58; color:white;">
					<tr>
						<td>#</td>
						<td>Nama Customer</td>
						<td>Tanggal</td>
						<td>Buku</td>
						<td>Jumlah Buku</td>
						<td>Persedian</td>
						<td>Admin/Kasir</td>
					</tr></thead>
					<tbody style="background-color: white;">
					<?php $no=0; foreach ($get_history as $history) : $no++;?>

					<tr>
						<td><?=$no?></td>
						<td><?=$history->buyer_name?></td>
						<td><?=$history->tgl?></td>
						<td><?=$history->bookname?></td>
						<td><?=$history->book_qty?></td>
						<td>$<?=number_format($history->total)?></td>
						<td><?=$history->fullname?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
