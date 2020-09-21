<?php $this->load->view('template/headerHome') ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Transaction Success</h2>
                <h1 class="section_title">Your shipment will be processed immediately</h1>
            </div>
        </div>
        <div class="row offers_items text-center">
            <table class="table">
                <tr>
                    <td>Transaction ID</td>
                    <td><?php echo $transaksi->id_transaksi ?></td>
                </tr>
                <tr>
                    <td>Transaction Date</td>
                    <td><?php echo $transaksi->tanggal_transaksi ?></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $transaksi->alamat_rinci ?></td>
                </tr>
                <tr>
                    <td>Receiver</td>
                    <td><?php echo $transaksi->penerima ?></td>
                </tr>
                <tr>
                    <td>Telp Receiving</td>
                    <td><?php echo $transaksi->telepon_penerima ?></td>
                </tr>
                <tr>
                    <td>Goods</td>
                    <td><?php echo $transaksi->nama_barang ?></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><?php echo $transaksi->berat ?></td>
                </tr>
                <tr>
                    <td>Customer's Name</td>
                    <td><?php echo $transaksi->nama_pelanggan ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?php echo $transaksi->nama_jenis ?></td>
                </tr>
                <tr>
                    <td>Price Per Kilo</td>
                    <td><?php echo $transaksi->hargaperkilo ?></td>
                </tr>
                <tr>
                    <td></td>
                    <th><?php echo $transaksi->hargaperkilo * $transaksi->berat ?></th>
                </tr>
            </table>
        </div>
    </div>
</div>
<a href="<?php echo site_url('user/logoutTransaction') ?>" class="btn btn-info btn-block" role="button">Success</a>
</section>
<?php $this->load->view('template/footerHome') ?>