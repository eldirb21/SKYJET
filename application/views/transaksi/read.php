<?php $this->load->view('template/header') ?>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Transaction
                </div>
                <div class="panel-heading">
                    <a href="<?php echo base_url('Transaction/barang') ?>" class="btn btn-primary mb-3">Tambah</a>
                </div>
                <br>

                <!-- File Header -->
                <table id="example" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <!-- Sesuaikan Column Table -->
                            <th>ID</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Receiver</th>
                            <th>Telephone</th>
                            <th>Goods</th>
                            <th>Weight/Kg</th>
                            <th>Customer</th>
                            <th>Type</th>
                            <th>Price/kg</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $g_total  = 0; ?>
                        <?php foreach ($transaksi as $key => $value) : ?>
                        <tr>
                            <!-- Sesuaikan Column Table -->
                            <td><?php echo $value->id_transaksi ?></td>
                            <td><?php echo $value->tanggal_transaksi ?></td>
                            <td><?php echo $value->alamat_rinci ?></td>
                            <td><?php echo $value->penerima ?></td>
                            <td><?php echo $value->telepon_penerima ?></td>
                            <td><?php echo $value->nama_barang ?></td>
                            <td><?php echo $value->berat ?></td>
                            <td><?php echo $value->nama_pelanggan ?></td>
                            <td><?php echo $value->nama_jenis ?></td>
                            <td><?php echo $value->hargaperkilo ?></td>
                            <td><?php echo $value->berat * $value->hargaperkilo ?></td>
                            <?php $g_total += $value->berat * $value->hargaperkilo; ?>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10"></td>
                            <td><?php echo $g_total; ?></td>
                        </tr>
                    </tfoot>
                </table>
                <!-- File Footer -->
                </main>
                <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'csv', 'excel', 'pdf', 'print', 'colvis']
                    });
                });
                </script>
                <?php $this->load->view('template/footer') ?>