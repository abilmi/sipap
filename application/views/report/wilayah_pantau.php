

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Data Wilayah Pantau Distribusi Bongkar/Muat</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <img src="asset/login/img/provinsi.png"  />
                        <img src="asset/login/img/kota.png"  />
                        <img src="asset/login/img/emkl.png"  />
                        <div class="panel with-nav-tabs panel-primary">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="index.php/wilayah_pantau/master_data_provinsi" data-toggle="tab">Provinsi</a></li>
                                        <li><a href="index.php/wilayah_pantau/master_data_kota" data-toggle="tab">Kota</a></li>
                                        <li><a href="index.php/wilayah_pantau/master_data_titik_pantau" data-toggle="tab">Titik Pantau Dermaga</a></li>
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
                                    <div class="tab-pane fade in active" >
                                        
                                        <form class="form-horizontal">
                                             <?php if($selected['PROVINSI_NAMA']=="")
                                            {
                                                echo '<form method="post" action="index.php/wilayah_pantau/add_new_provinsi">';
                                            }
                                            else
                                                echo '<form method="post" action="index.php/wilayah_pantau/edit_selected_provinsi">';
                                            ?>
                                            <fieldset>
                                                <legend>Data Provinsi Mitra</legend>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="disabledInput">ID Provinsi</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control disabled" id="provinsi_kode" value="<?php echo $selected['PROVINSI_KODE']; ?>"disabled="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Provinsi</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="provinsi_nama"  type="text" value="<?php echo $selected['PROVINSI_NAMA']; ?>">
                                                    </div>
                                                </div>
                                                <?php if($selected['PROVINSI_NAMA']=="")
                                                        {
                                                            echo '<button href="'.site_url("/wilayah_pantau/add_new_provinsi").'" id="tambahProvinsi" class="btn btn-primary">Tambah</button>';
                                                        }
                                                        else
                                                        {
                                                            echo '<button href="'.site_url("/wilayah_pantau/edit_selected_provinsi" ).'" id="editProvinsi" class="btn btn-mini btn-warning">Simpan</button>';
                                                        }
                                                    ?>
                                            </fieldset>
                                        </form>
                                        <div class="bootstrap-admin-panel-content">
                                            <table class="table bootstrap-admin-table-with-actions">
                                                <thead>
                                                    <?php
                                                    $no = 1;
                                                    ?>
                                                    <?php foreach ($daftar_provinsi as $a) {?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $a->PROVINSI_NAMA; ?></td>
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
                        </div>
                    </div>
                   
                  
                    
                </div>
            </div>
        </div>

       