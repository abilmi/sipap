

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
                        <div class="panel with-nav-tabs panel-primary">
                            <div class="panel-heading">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1primary" data-toggle="tab">Provinsi</a></li>
                                        <li><a href="#tab2primary" data-toggle="tab">Kota</a></li>
                                        <li><a href="#tab3primary" data-toggle="tab">Titik Pantau Dermaga</a></li>
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
                                            <fieldset>
                                                <legend>Data Provinsi Mitra</legend>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="disabledInput">ID Provinsi</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control disabled" id="disabledInput" placeholder="no ID" disabled="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Provinsi</label>
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
                                                        <th>Nama Provinsi</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Kalimantan Selatan</td>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2primary">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Data Kota Mitra</legend>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="disabledInput">ID Kota</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control disabled" id="disabledInput" placeholder="no ID" disabled="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="selectError">Provisi</label>
                                                    <div class="col-lg-10">
                                                        <select id="selectError" class="form-control">
                                                            <option>Kalimantan Selatan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Kota/Kabupaten</label>
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
                                                        <th>Nama Provinsi</th>
                                                        <th>Kota</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jawa Timur</td>
                                                        <td>Surabaya</td>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3primary">
                                        <form class="form-horizontal">
                                            <fieldset>
                                                <legend>Data Titik Pantau</legend>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="disabledInput">ID Lokasi Pantau</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control disabled" id="disabledInput" placeholder="no ID" disabled="" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="selectError">Kota</label>
                                                    <div class="col-lg-10">
                                                        <select id="selectError" class="form-control">
                                                            <option>Surabaya</option>
                                                            <option>Denpasar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Nama Dermaga</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="focusedInput"  type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="focusedInput">Alamat Dermaga</label>
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
                                                        <th>Provinsi</th>
                                                        <th>Dermaga</th>
                                                        <th>Alamat Dermaga</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Jatim</td>
                                                        <td>Tanjung Perak</td>
                                                        <td></td>
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

       