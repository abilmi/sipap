<!DOCTYPE html>
<html>
    <head>
        <title>Tables | Bootstrap 3.x Admin Theme</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-theme.css">

        <!-- Bootstrap Admin Theme -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-admin-theme.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/bootstrap-admin-theme-change-size.css">

        <!-- Datatables -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/DT_bootstrap.css">

        <!-- Vendors -->
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/bootstrap-datepicker/css/datepicker.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/datepicker.fixes.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/uniform/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/css/uniform.default.fixes.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/chosen.min.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/selectize/dist/css/selectize.bootstrap3.css">
        <link rel="stylesheet" media="screen" href="asset/dashboard/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css">
    </head>
    <body class="bootstrap-admin-with-small-navbar">
       

        <!-- main / large navbar -->
        <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="asset/login/img/logonew2.png"  />
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <div class="col-md-2 bootstrap-admin-col-left">
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li>
                            <a href="about.html"><i class="glyphicon glyphicon-chevron-right"></i> Halaman Utama</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-right"></i> Komoditi</a>
                        </li>
                        <li>
                            <a href="dashboard.html"><i class="glyphicon glyphicon-chevron-right"></i> Mitra Provinsi</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="glyphicon glyphicon-chevron-right"></i> Komoditi</a>
                        </li>
                        <li class="active">
                            <a href="tables.html"><i class="glyphicon glyphicon-chevron-right"></i> Titik Pantau</a>
                        </li>
                        <li>
                            <a href="buttons-and-icons.html"><i class="glyphicon glyphicon-chevron-right"></i> Penerima</a>
                        </li>
                        <li>
                            <a href="wysiwyg-editors.html"><i class="glyphicon glyphicon-chevron-right"></i> Kelola Data Transaksi Bongkar Muat</a>
                        </li>
                        <li>
                            <a href="ui-and-interface.html"><i class="glyphicon glyphicon-chevron-right"></i> Laporan</a>
                        </li>
                       
                    </ul>
                </div>

                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h3>Laporan Transaksi Bongkar Muat Komoditi</h3>
                            </div>
                        </div>
                    </div>
                   
                   <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Form Example</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <legend>Form Components</legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="typeahead">Text input </label>
                                                <div class="col-lg-10">
                                                    <input class="form-control col-md-6" id="typeahead" autocomplete="off" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" type="text">
                                                    <p class="help-block">Start typing to activate auto complete!</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="date01">Date input</label>
                                                <div class="col-lg-10">
                                                    <input class="form-control datepicker" id="date01" value="02/16/12" type="text">
                                                    <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="optionsCheckbox">Checkbox</label>
                                                <div class="col-lg-10">
                                                    <label class="uniform">
                                                        <div id="uniform-optionsCheckbox" class="checker"><span><input class="uniform_on" id="optionsCheckbox" value="option1" type="checkbox"></span></div>
                                                        Option one is this and that—be sure to include why it's great
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select01">With Chosen plugin</label>
                                                <div class="col-lg-10">
                                                    <select id="select01" class="chzn-select chzn-done" style="width: 150px; display: none;">
                                                        <option>something</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select><div id="select01_chzn" title="" style="width: 150px;" class="chzn-container chzn-container-single"><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>something</span><div><b></b></div></a><div class="chzn-drop"><div class="chzn-search"><input autocomplete="off" type="text"></div><ul class="chzn-results"><li class="active-result result-selected" style="" data-option-array-index="0">something</li><li class="active-result" style="" data-option-array-index="1">2</li><li class="active-result" style="" data-option-array-index="2">3</li><li class="active-result" style="" data-option-array-index="3">4</li><li class="active-result" style="" data-option-array-index="4">5</li></ul></div></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="select02">With Selectize plugin</label>
                                                <div class="col-lg-10">
                                                    <select tabindex="-1" id="select02" class="selectize-select selectized" style="width: 150px; display: none;"><option value="1" selected="selected"></option></select><div style="width: 150px;" class="selectize-control selectize-select single"><div class="selectize-input items full has-options has-items"><div data-value="1" class="item">something</div><input style="width: 4px; opacity: 0; position: absolute; left: -10000px;" tabindex="" autocomplete="off" type="text"></div><div style="display: none; visibility: visible; width: 150px; top: 34px; left: 0px;" class="selectize-dropdown selectize-select single"><div class="selectize-dropdown-content"><div data-value="1" data-selectable="" class="option selected">something</div><div data-value="2" data-selectable="" class="option">2</div><div data-value="3" data-selectable="" class="option">3</div><div data-value="4" data-selectable="" class="option">4</div><div data-value="5" data-selectable="" class="option">5</div></div></div></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="fileInput">File input</label>
                                                <div class="col-lg-10">
                                                    <div id="uniform-fileInput" class="uploader"><input class="form-control uniform_on" id="fileInput" type="file"><span style="-moz-user-select: none;" class="filename">No file selected</span><span style="-moz-user-select: none;" class="action">Choose File</span></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="textarea-wysihtml5">Textarea WYSIWYG</label>
                                                <div class="col-lg-10">
                                                    <ul style="" class="wysihtml5-toolbar"><li class="dropdown"><a class="btn btn-default btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1">Normal text</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1">Heading 1</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1">Heading 2</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1">Heading 3</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4">Heading 4</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5">Heading 5</a></li><li><a unselectable="on" href="javascript:;" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6">Heading 6</a></li></ul></li><li><div class="btn-group"><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1">Bold</a><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1">Italic</a><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1">Underline</a></div></li><li><div class="btn-group"><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1"><i class="glyphicon glyphicon-list"></i></a><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1"><i class="glyphicon glyphicon-th-list"></i></a><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1"><i class="glyphicon glyphicon-indent-right"></i></a><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="Indent" title="Indent" tabindex="-1"><i class="glyphicon glyphicon-indent-left"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3 class="modal-title">Insert link</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control"><label class="checkbox"> <input class="bootstrap-wysihtml5-insert-link-target" checked="" type="checkbox">Open link in new window</label></div><div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a></div></div></div></div><a unselectable="on" href="javascript:;" class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1"><i class="glyphicon glyphicon-share"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3 class="modal-title">Insert image</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control"></div><div class="modal-footer"><a href="#" class="btn btn-default" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a></div></div></div></div><a unselectable="on" href="javascript:;" class="btn btn-default btn" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1"><i class="glyphicon glyphicon-picture"></i></a></li></ul><textarea placeholder="Enter text..." id="textarea-wysihtml5" class="form-control textarea-wysihtml5" style="width: 100%; height: 200px; display: none;"></textarea><input value="1" name="_wysihtml5_mode" type="hidden"><iframe style="background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(204, 204, 204); border-style: solid; border-width: 1px; clear: none; display: block; float: none; margin: 0px; outline: 0px none rgb(85, 85, 85); outline-offset: 0px; padding: 6px 12px; position: static; z-index: auto; vertical-align: text-bottom; text-align: start; box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.075) inset; border-radius: 4px; width: 100%; height: 200px; top: auto; left: auto; right: auto; bottom: auto;" marginheight="0" marginwidth="0" allowtransparency="true" security="restricted" class="wysihtml5-sandbox" frameborder="0" height="0" width="0"></iframe>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <div class="bootstrap-admin-panel-content">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="navbar navbar-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo">
                            <p class="left">Bootstrap 3.x Admin Theme</p>
                            <p class="right">&copy; 2013 <a href="http://www.meritoo.pl" target="_blank">Meritoo.pl</a></p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/js/bootstrap-admin-theme-change-size.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/js/DT_bootstrap.js"></script>

        <script type="text/javascript" src="asset/dashboard/vendors/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/chosen.jquery.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/selectize/dist/js/standalone/selectize.min.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3.js"></script>
        <script type="text/javascript" src="asset/dashboard/vendors/boostrap3-typeahead/bootstrap3-typeahead.min.js"></script>

        <script type="text/javascript">
            $(function() {
                $('.datepicker').datepicker();
                $('.uniform_on').uniform();
                $('.chzn-select').chosen();
                $('.selectize-select').selectize();
                $('.textarea-wysihtml5').wysihtml5({
                    stylesheets: [
                        'asset/dashboard/vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
                    ]
                });

                $('#rootwizard').bootstrapWizard({
                    'nextSelector': '.next',
                    'previousSelector': '.previous',
                    onNext: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onPrevious: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        var $percent = ($current / $total) * 100;
                        $('#rootwizard').find('.bar').css({width: $percent + '%'});
                    }
                });
                $('#rootwizard .finish').click(function() {
                    alert('Finished!, Starting over!');
                    $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
                });
            });
        </script>
    </body>
</html>
