<?php $this->load->view('template/headerHome'); ?>
<!-- Home -->

<div class="home">

    <!-- Home Slider -->

    <div class="home_slider_container">

        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <!-- Image by https://unsplash.com/@anikindimitry -->
                <div class="home_slider_background" style="background-image:url(images/logo.jpg)"></div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX"
                        data-animation-out="animate-out fadeOut">
                        <h1>SKYJET</h1>
                        <h1>EXPRESS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Search -->

<div class="search">


    <!-- Search Contents -->

    <div class="container fill_height">
        <div class="row fill_height">
            <div class="col fill_height">

                <!-- Search Tabs -->

                <div class="search_tabs_container">
                    <div
                        class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                        <div
                            class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="images/bus.png" alt=""><span>SHIPPING RATES</span>
                        </div>
                        <!-- <div
                            class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start">
                            <img src="images/bus.png" alt="">SHIPPING RATES
                        </div> -->

                    </div>
                </div>
                <?php echo form_open('CekHarga/cekHarga'); ?>
                <div class="search_panel active">
                    <table class="table">
                        <tr>
                            <td></td>
                            <td>
                                <div style="color: white;">TYPE OF DELIVERY</div>
                                <select name="jenis" class="form-control">
                                    <option value="1">EXPRESS</option>
                                    <option value="2">REGULAR</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <div style="color: white;">WEIGHT</div>
                                <input type="number" class="destination search_input" name="berat" required="required"
                                    placeholder="Kg">
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <div style="color: white;">TOTAL</div>
                                <input type="number" class="destination search_input" name="jumlah" required="required">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit"
                                    class="button search_button">Check<span></span><span></span><span></span></button>
                            </td>
                        </tr>
                    </table>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">PROMO</h2>
            </div>
        </div>
        <div class="row offers_items text-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" style="background-color: #f2c318;color:white">
                        <h3 class="card-title">Gold</h3>
                    </div>
                    <div class="card-body">
                        <h2>Rp 99999/month</h2>
                    </div>
                    <div class="card-body">
                        <h4>EXPRESS Delivery</h4>
                    </div>
                    <div class="card-body">
                        <h4>Delivery time 1 x 24 hour</h4>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo base_url('user/register/4'); ?>">Registration Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height: 100%;">
                    <div class="card-header" style="background-color: #b600ff;color:white">
                        <h3 class="card-title">Reguler</h3>
                    </div>
                    <div class="card-body">
                        <h3>Rp 10000/month</h3>
                    </div>
                    <div class="card-body">
                        <h4>Regular Delivery</h4>
                    </div>
                    <div class="card-body">
                        <h4>Delivery time 3 to 4 days</h4>
                    </div>
                    <div class="card-header">
                        <a href="<?php echo base_url('user/registerReguler'); ?>">Registration Now</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php $this->load->view('template/footerHome'); ?>