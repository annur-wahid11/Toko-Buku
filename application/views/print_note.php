<h2>Nota Transaksi</h2>
Transaksi No. : <?=$transaction->transaction_code?><br>
Admin/Kasir : <?=$transaction->fullname?><br>
Pelanggan : <?=$transaction->buyer_name?><br>
Tanggal : <?=$transaction->tgl?>

<table border="1" style="border-collapse: collapse;">
	<tr>
		<th>No</th>
		<th>Judul Buku</th>
		<th>Harga</th>
		<th>Persedian</th>
		<th>Total Harga</th>
	</tr>
	<?php $no=0; foreach ($this->trans->detail_transaction($transaction->transaction_code) as $book): $no++; ?>
	<tr>
		<th><?=$no?></th>
		<th><?=$book->book_title?></th>
		<th><?= number_format($book->price)?></th>
		<th><?=$book->amount?></th>
		<th><?= number_format(($book->price*$book->amount))?></th>
	</tr>
	<?php endforeach ?>
	<tr>
		<th colspan="4">Total</th>
		<th><?= number_format($transaction->total)?></th>
	</tr>
</table>

<script type="text/javascript">
	window.print();
	setTimeout(() => {
		location.href="<?=base_url('index.php/transaction/clearcart')?>";
	}, 2500);
</script>
