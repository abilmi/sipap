

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Data Mitra Pelayaran</h3>
                            </div>
                        </div>
                    </div>
                     <form class="form-horizontal">
                        <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="disabledInput">ID Pelayaran</label>
                                        <div class="col-lg-10">
                                            <input class="form-control disabled" id="disabledInput" placeholder="3" disabled="" type="text">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Mitra Pelayaran</label>
                                        <div class="col-lg-10">
                                            <input class="form-control" id="focusedInput"  type="text">
                                        </div>
                                </div>
                                
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-default">Batal</button>
                        </fieldset>
                    </form>
                    <div class="bootstrap-admin-panel-content">
                                    <table class="table bootstrap-admin-table-with-actions">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mitra Pelayaran</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                    $no = 1;
                                                    ?>
                                                    <?php foreach ($daftar_pelabuhan as $a) {?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $a->PELABUHAN_NAMA; ?></td>
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

       