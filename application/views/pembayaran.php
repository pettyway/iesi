<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total =0;
                if($keranjang = $this->cart->contents()){
                    foreach($keranjang as $item){
                        $grand_total = $grand_total + $item ['subtotal'];
                    }   
                    echo "<h4>Total Belanja Anda: Rp  " .number_format($grand_total, 0, ',', '.');
                }
                    ?>
            </div><br><br>
            <h3> Input Pembayaran dan Pengiriman</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesan') ?>">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" 
                    placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" 
                    placeholder="Alamat Lengkap" class="form-control">
                </div>

                <div class="form-group">
                    <label>No Telpon</label>
                    <input type="text" name="no_telp" 
                    placeholder="Nomor Telpon" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>J&T</option>
                        <option>POS Indonesia</option>
                        <option>SICEPAT</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Pembayaran</label>
                    <select class="form-control">
                        <option>BCA</option>
                        <option>BNI</option>
                        <option>MANDIRI</option>
                        <option>GOPAY</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
                
            </form>
        </div>  
        <div class="col-md-2"></div>
    </div>
</div>