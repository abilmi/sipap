

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Data Mitra Bisnis</h3>
                            </div>
                        </div>
                    </div>
                     <form class="form-horizontal">
                        <?php if($selected['PENERIMA_NAMA']=="")
                                            {
                                                echo '<form method="post" action="index.php/penerima/add_new_penerima">';
                                            }
                                            else
                                                echo '<form method="post" action="index.php/penerima/edit_selected_penerima">';
                                            ?>
                        <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="disabledInput">ID Mitra</label>
                                        <div class="col-lg-10">
                                            <input class="form-control disabled" id="penerima_kode" value="<?php echo $selected['PENERIMA_KODE']; ?>" disabled="" type="text">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Mitra</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="penerima_nama"  type="text" value="<?php echo $selected['PENERIMA_NAMA']; ?>">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="focusedInput">Alamat Mitra</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="penerima_alamat"  type="text" value="<?php echo $selected['PENERIMA_ALAMAT']; ?>">
                                        </div>
                                </div>
                                 <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="selectError">Asal Kota</label>
                                                    <div class="col-lg-10">
                                                        <select id="kota_kode" class="form-control">
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
                                                <?php if($selected['PENERIMA_NAMA']=="")
                                                        {
                                                            echo '<button href="'.site_url("/penerima/add_new_penerima").'" id="tambahPenerima" class="btn btn-primary">Tambah</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button href="'.site_url("/penerima/edit_selected_penerima" ).'" id="editPenerima" class="btn btn-mini btn-warning">Simpan</button>';
                                                        }
                                                    ?>
                        </fieldset>
                    </form>
                    <div class="bootstrap-admin-panel-content">
                                    <table class="table bootstrap-admin-table-with-actions">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mitra</th>
                                                <th>Alamat Mitra</th>
                                                <th>Kota</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                                    $no = 1;
                                                    ?>
                                                    <?php foreach ($daftar_penerima as $a) {?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $a->PENERIMA_NAMA; ?></td>
                                                <td><?php echo $a->PENERIMA_ALAMAT; ?></td>
                                                <td><?php echo $a->KOTA_NAMA; ?></td>
                                                <td class="actions">
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-primary">
                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                            Edit
                                                        </button>
                                                    </a>
                                                    <a href="#">
                                                        <button class="btn btn-sm btn-danger">
                                                            <i class="glyphicon glyphicon-trash"></i>
                                                            Delete
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                    
                </div>
            </div>
        </div>

       