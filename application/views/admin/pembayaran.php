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
                    echo "<h4>Total Belanja: Rp  " .number_format($grand_total, 0, ',', '.');
                }
                    ?>


            </div><br><br>
            <h3> Pembayaran</h3>
            <form method="post" action="<?php echo base_url('view/pembayaran') ?>">
            <div class="form-group">
                    <label>Barcode</label>
                    <input type="text" name="nama" 
                    placeholder="Code Barang" class="form-control">
                </div>

            <button type="submit" class="btn btn-sm btn-primary">Cari</button>
            <br><br>
            </form>
    <div class="container-fluid">
        <h4>STRUK BELANJA</h4>

            <table class="table table-bordered table-stiped table-hover">
            
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Sub-Total</th>
            </tr>
            
            <?php
            $no=1;
            foreach($this->cart->contents()as $itemes) :
            ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $itemes['name'] ?></td>
                <td><?php echo $itemes['qty'] ?></td>
                <td align="right">Rp <?php echo number_format($itemes['price'], 0,',','.')  ?></td>
                <td align="right">RP <?php echo number_format($itemes['subtotal'], 0,',','.') ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4"></td>
                <td align="right">RP <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
            </tr>
            </div>

                <!-- <div class="form-group">
                    <label>Nama Barang</label>
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
                </div> -->  
        </div>  
        <div class="col-md-2"></div>
    </div>
</div>