<?php $this->load->view('template/header') ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Employee
                </div>
                <br>
                <div>
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td><?php echo $Nama; ?></td>
                        </tr>
                        <tr>
                            <td>Edecation</td>
                            <td><?php echo $Pendidikan; ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo $JenisKelamin; ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $Alamat; ?></td>
                        </tr>
                        <tr>
                            <td>Postal Code</td>
                            <td><?php echo $KodePos; ?></td>
                        </tr>
                        <tr>
                            <td>No Hp</td>
                            <td><?php echo $NoHp; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $Email; ?></td>
                        </tr>
                        <tr>
                            <td>Hobby</td>
                            <td><?php echo $Hobby; ?></td>
                        </tr>
                    </table>
                    <div class="text-right">
                        <tr>
                            <td></td>
                            <td><a href="<?php echo base_url('karyawan') ?>" class="btn btn-danger">Cancel</a></td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
        <!--main content end-->
        <?php $this->load->view('template/footer'); ?>