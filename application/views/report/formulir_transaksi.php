

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Data Master Komoditi</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel with-nav-tabs panel-primary">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1primary" data-toggle="tab">Komoditi</a></li>
                                        <!--
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#tab4primary" data-toggle="tab">Primary 4</a></li>
                                                <li><a href="#tab5primary" data-toggle="tab">Primary 5</a></li>
                                            </ul>
                                        </li>
                                    -->
                                    </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1primary">
                                        <form class="form-horizontal">
                                            <?php if($selected['KOMODITI_NAMA']=="")
                                            {
                                                echo '<form method="post" action="index.php/komoditi/add_new_komoditi">';
                                            }
                                            else
                                                echo '<form method="post" action="index.php/komoditi/edit_selected_komoditi">';
                                            ?>
                                            <fieldset>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="disabledInput">Kode Transaksi</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control disabled" id="transaksi_kode" disabled="" type="text" value="<?php echo $selected['TRANSAKSI_KODE']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="selectError">Asal Kota</label>
                                                    <div class="col-lg-10">
                                                        <select id="pelabuhan_kode" class="form-control">
                                                            <?php $c = $selected['KOTA_KODE']; ?>
                                                            <?php foreach ($daftar_kota as $a)    {?>
                                                            <?php if ($c == $a->KOTA_KODE) {?>
                                                            <option value="<?php echo $a->KOTA_KODE; ?>" selected='selected'><?php echo $a->KOTA_NAMA; ?></option>
                                                            <?php } else {?>
                                                            <option value="<?php echo $a->KOTA_KODE; ?>" ><?php echo $a->KOTA_NAMA; ?></option>
                                                            <?php }?>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>







                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Komoditi</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="komoditi_nama"  type="text" value="<?php echo $selected['KOMODITI_NAMA']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="selectError">Satuan Pengiriman Komoditi</label>
                                                    <div class="col-lg-10">
                                                        <select id="satuan" class="form-control" value="<?php echo $selected['SATUAN']; ?>" >
                                                            <option>Ton</option>
                                                            <option>M3/meter kubik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Jenis (*Khusus Kayu)</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="komoditi_jenis"  type="text" value="<?php echo $selected['KOMODITI_JENIS']; ?>" >
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Asal (*Khusus Kayu)</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="komoditi_asal"  type="text" value="<?php echo $selected['KOMODITI_ASAL']; ?>" >
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Bentuk (*Khusus Kayu)</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="komoditi_bentuk"  type="text" value="<?php echo $selected['KOMODITI_BENTUK']; ?>" >
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                 <?php if($selected['KOMODITI_NAMA']=="")
                                                        {
                                                            echo '<button href="'.site_url("/komoditi/add_new_komoditi").'" id="tambahKomoditi" class="btn btn-primary">Tambah</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button href="'.site_url("/komoditi/edit_selected_komoditi" ).'" id="editKomoditi" class="btn btn-mini btn-warning">Simpan</button>';
                                                        }
                                                    ?>
                                                </div>
                                            </fieldset>
                                        </form>

                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                  
                    
                </div>
            </div>
        </div>

       