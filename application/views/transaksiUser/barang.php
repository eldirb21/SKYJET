<?php $this->load->view('template/headerHome') ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <br>
                <?php echo form_open("") ?>
                <div style="margin-left: 10%; margin-right: 40%;">
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-2 col-form-label">Goods Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang" value=""
                                placeholder="Nama Barang">
                            <?php echo form_error('nama_barang') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi_barang" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="deskripsi_barang" class="form-control" id="deskripsi_barang"
                                value="" placeholder="Deskripsi Barang">
                            <?php echo form_error('deskripsi_barang') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-sm-2 col-form-label">Weight</label>
                        <div class="col-sm-10">
                            <input type="number" name="berat" class="form-control" id="berat" value=""
                                placeholder="Berat">
                            <?php echo form_error('berat') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="col-sm-2"></label>
                        <input type="submit" class="btn btn-primary" style="margin-left: 18%;" value="Add">
                    </div>
                    <?php echo form_close(); ?>
                    </main>
                </div>
                <?php $this->load->view('template/footerHome') ?>