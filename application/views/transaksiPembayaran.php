<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url('assets/front/images/logo_sedekah_sore.jpg'); ?>" rel="shortcut icon">
    <?php $this->load->view('layout/meta'); ?>
	<title>Pembayaran - Sedekah Sore</title>
	<?php $this->load->view('layout/css'); ?>
</head>
<body>

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">Pembayaran Tiket</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div>
                <div class="alert alert-info" role="alert">
                    <a>Terima kasih atas donasinya <b>Sedekah Sore</b></a> 
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="alert alert-success">
                            <h4><b>Tata cara pembayaran :</b></h4>
                            <li>Mohon Melakukan pembayaran sesuai <b> Nominal Donasi </b> yang tercantum list disamping (transfer bank)</li>
                            <li>Setelah melakukan Transfer, konfirmasi segera setelah pembayaran dengan mencantumkan bukti <b> Foto & Kode Transaksi </b>melalui whatsapp</li>
                            <li>Whatsapp : 0815 1963 9102</li>
                            <br>
                            <h4><b>Daftar Rekening Bank :</b></h4>
                            <li>BSM       :  492 1018 147    (Sedekah Sore)</li>
                            <br>
                            <li>MUAMALAT  :  701 0055 055    (Sedekah Sore)</li>
                            <br>
                            <li>MANDIRI   :  900 001 2683 430 (Sedekah Sore)</li>
                            <br>
                            <li>BCA      :  5200 242 400    (Sedekah Sore)</li>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="alert alert-warning" role="alert">
                        <?php 
                                foreach($tmpTransaksi as $rows) {
                            ?>
                                
                                <li>
                                    Nama : <b><?php echo $rows->nama_donatur; ?></b>
                                </li>
                                <br>
                                <li>
                                    Nominal Donasi : <b><?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></b>
                                </li>
                                <br>
                                <li>
                                    Kode Transaksi : <b><?php echo $rows->kode_transaksi; ?></b>
                                </li>   
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>

<?php $this->load->view('layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/front/js/simple.money.format.js'); ?>"></script>
<script>
    $('.format').simpleMoneyFormat();
</script>
</body>
</html>