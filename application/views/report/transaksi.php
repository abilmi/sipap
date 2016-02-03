

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Formulir Rekap Data Perdagangan Antar Pulau</h3>
                            </div>
                        </div>
                    </div>
                    <form class="form-horizontal" method="post" action="index.php/report/laporanBongkarMuat">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="selectError">Bulan</label>
                                <div class="col-lg-10">
                                    <select id="bulan" class="form-control">
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Agu</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Okt</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Des</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="selectError">Tahun</label>
                                <div class="col-lg-10">
                                    <select id="tahun" class="form-control">
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input style="font: 11pt 'Maven Pro', sans-serif;" type="submit" class="button" value="Open">
                            </div>
                        </fieldset>
                    </form>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="text-muted bootstrap-admin-box-title">Bootstrap dataTables</div>
                            </div>
                            <div class="bootstrap-admin-panel-content">
                                <div id="example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                    <table aria-describedby="example_info" class="table table-striped table-bordered dataTable" id="example">
                                        <thead>
                                            <tr role="row">
                                                <th aria-sort="ascending" style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting_asc">Komoditi</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Titik Pantau</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Tujuan</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Pelabuhan</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Penerima</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Aktivitas</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Nama Kapal</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Waktu Tiba</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Waktu Berangkat</th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Quantity    </th>
                                                <th style="width: 162px;" colspan="1" rowspan="1" aria-controls="example" tabindex="0" role="columnheader" class="sorting">Total Harga</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody aria-relevant="all" aria-live="polite" role="alert">
                                        <?php $count = 1;
                                        foreach ($report as $transaksi){
                                        ?>
                                                <tr class="gradeA <?php if($count == 1 ) echo "odd"; else echo "even"; ?>">
                                                    <td><?php echo $transaksi['Komoditi']?></td>
                                                    <td><?php echo $transaksi['TITIK_PANTAU_NAMA']?></td>
                                                    <td><?php echo $transaksi['Tujuan']?></td>
                                                    <td><?php echo $transaksi['PELABUHAN_NAMA']?></td>
                                                    <td><?php echo $transaksi['PENERIMA_NAMA']?></td>
                                                    <td><?php echo $transaksi['Aktivitas']?></td>
                                                    <td><?php echo $transaksi['NAMA_KAPAL']?></td>
                                                    <td><?php echo $transaksi['WAKTU_TIBA']?></td>
                                                    <td><?php echo $transaksi['WAKTU_BERANGKAT']?></td>
                                                    <td><?php echo $transaksi['QUANTITY']?></td>
                                                    <td><?php echo $transaksi['NILAI_HARGA']?></td>
                                                </tr>
                                        <?php if($count == 1) $count = 2; else $count = 1;
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            
        </div>
    </div>
</div>

       