
<!-- CSS stylea -->
<?= $this->Html->css('paper-bootstrap-wizard.css') ?>

<!-- JS Plugin for the Wizard  -->
<?= $this->Html->script('jquery.bootstrap.wizard', ['block' => true]); ?>
<?= $this->Html->script('paper-bootstrap-wizard', ['block' => true]); ?>
<!-- More information about jquery.validate here: http://jqueryvalidation.org/ -->
<?= $this->Html->script('jquery.validate.min', ['block' => true]); ?>
<!-- UI Kit Plugins -->
<?= $this->Html->script('ct-paper-radio', ['block' => true]); ?>
<?= $this->Html->script('bootstrap-select', ['block' => true]); ?>
<?= $this->Html->script('bootstrap-datepicker', ['block' => true]); ?>
<?= $this->Html->script('ct-paper', ['block' => true]); ?>




<div class="container-fluid">
        <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="card card-user">
                        <div class="image">
                            <img src="<?php echo $this->request->webroot?>Paper/img/background.jpg" alt="...">
                        </div>
                        <div class="content">
                            <div class="author">
                                <img class="avatar border-white" src="<?php echo $this->request->webroot?>Paper/img/faces/face-2.jpg" alt="...">
                                <h4 class="title">NOMBRE REPRESENTANTE<br>
                                    <div class="col-md-6 ">
                                            <h5><input type="text" size="3"><br><small>DISTRITO</small></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h5><input type="text" size="3"><br><small>AGRUPAMIENTO</small></h5>
                                        </div>
                                </h4>
                            </div>

                        </div>
                        <hr>
                        <div class="text-center">
                            <div class="row">
                                <h5>INFORMACIÓN DE LA CASILLA</h2>
                                <div class="col-md-6 ">
                                    <h5><input type="text" size="1"><br><small>DISTRITO</small></h5>
                                </div>
                                <div class="col-md-6">
                                    <h5><input type="text" size="1"><br><small>SECCIÓN</small></h5>
                                </div>
                                <div class="col-md-8 col-sm-offset-2">
                                        <div class="form-group">
                                            <label>TIPO</label><br>
                                            <select name="country" class="form-control">
                                                <option value="1"> BÁSICA </option>
                                                <option value="2"> CONTIGÜA </option>
                                                <option value="3"> EXTRAORDINARIA </option>
                                            </select>
                                        </div>
                                        <h5><input type="text" size="1" placeholder="No."></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8">

                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <!-- You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red" -->
                        <div class="card wizard-card" data-color="orange" id="wizard">
                        <form action="" method="">


                                <div class="wizard-header">
                                    <h3 class="wizard-title">ENVÍO DE REPORTES</h3>
                                    <p class="category">Solo podrán enviarse a la hora establecida.</p>
                                </div>
                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#location" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-package"></i>
                                                </div>
                                                PRIMER REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#type" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                SEGUNDO REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#facilities" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-hand-stop"></i>
                                                </div>
                                                TERCER REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#description" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-stats-up"></i>
                                                </div>
                                                CUARTO REPORTE
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="location">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text">INTALACIÓN DE LA CASILLA</h5>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>HORA INICIO DE INSTALACIÓN</label>
                                                    <input type="text" class="form-control" value="7:10" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="tim-title">
                                                    <h5><small>CASILLA SE INSTALÓ EN EL LUGAR INDICADO POR EL IEQROO?</small></h5>
                                                </div>

                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                                                    <i></i>SI
                                                  </label>
                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                                                    <i></i>NO
                                                  </label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>HORA INICIO DE VOTACIÓN</label>
                                                    <input type="text" class="form-control" value="7:35" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="tim-title">
                                                    <h5><small>SE TOMÓ GENTE DE LA FILA?</small></h5>
                                                </div>

                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                                                    <i></i>SI
                                                  </label>
                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                                                    <i></i>NO
                                                  </label>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                                <h5 class="text-center">REPRESENTANTES PRESENTES:</h5>
                                                    <div class="col-lg-6">
                                                            <div class="card">

                                                                <div class="content">
                                                                    <ul class="list-unstyled team-members">
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                    PROPIETARIO
                                                                                    <br>
                                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">

                                                                                    <br>
                                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                    Resultados
                                                                                    <br>
                                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="card">

                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos/VER.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                No.
                                                                                <br>
                                                                                <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                            </div>
                                                                            <div class="col-xs-2 text-right">
                                                                                <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                No.
                                                                                <br>
                                                                                <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                            </div>
                                                                            <div class="col-xs-2 text-right">
                                                                                <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>Paper/img/partidos/NAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                No.
                                                                                <br>
                                                                                <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                            </div>
                                                                            <div class="col-xs-2 text-right">
                                                                                <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-check"></i></btn>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <h5 class="text-center">ESTUVIERON LOS FUNCIONARIOS DESIGNADOS POR EL IEQROO:</h5>
                                        <div class="row">
                                            <div class="col-sm-8  col-sm-offset-2">
                                                <div class="col-sm-4 col-sm-offset-2">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Design">
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <i class="ti-user"></i>
                                                            <p><small>PRESIDENTE</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="choice" data-toggle="wizard-checkbox">
                                                        <input type="checkbox" name="jobb" value="Design">
                                                        <div class="card card-checkboxes card-hover-effect">
                                                            <i class="ti-user"></i>
                                                            <p><small>SECRETARIO</small></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-sm-offset-2">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p><small>ESTRUC 1</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p><small>ESTRUCT 2</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                                <div class="col-sm-9 col-sm-offset-1">
                                                    <div class="col-sm-3 col-sm-offset-2">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p><small>SUPLENTE 1</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="jobb" value="Design">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p><small>SUPLENTE 2</small></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                            <div class="choice" data-toggle="wizard-checkbox">
                                                                <input type="checkbox" name="jobb" value="Design">
                                                                <div class="card card-checkboxes card-hover-effect">
                                                                    <i class="ti-user"></i>
                                                                    <p><small>SUPLENTE 3</small></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>

                                        <hr/>


                                    </div>
                                    <div class="tab-pane" id="type">
                                        <h5 class="info-text">FLUJO DE VOTACIÓN </h5>
                                        <div class="row">

                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label>VOTANTES</label>
                                                        <input class="form-control valid"  aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center ">
                                                        <div class="form-group">
                                                            <label>PROMOIDOS</label>
                                                            <input class="form-control valid"  aria-invalid="false" type="text">
                                                        </div>
                                                    </div>


                                            </div>
                                    </div>
                                    <div class="tab-pane" id="facilities">
                                        <h5 class="info-text">CIERRE DE LA CASSILLA Y FLUJO DE VOTACIÓN FINAL. </h5>
                                        <div class="row">

                                                <div class="col-sm-6 ">
                                                    <div class="form-group">
                                                        <label>HORA DEL CIERRE</label>
                                                        <input class="form-control valid" value="19:10" readonly="" aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tim-title">
                                                        <h5><small>HABÍA GENTE EN LA COLA?</small></h5>
                                                    </div>

                                                      <label class="radio">
                                                        <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked="" type="radio">
                                                        <i></i>SI
                                                      </label>
                                                      <label class="radio">
                                                        <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1" type="radio">
                                                        <i></i>NO
                                                      </label>
                                                </div>

                                        </div>
                                        <div class="row">

                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label>VOTANTES</label>
                                                        <input class="form-control valid"  aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center ">
                                                        <div class="form-group">
                                                            <label>PROMOIDOS</label>
                                                            <input class="form-control valid"  aria-invalid="false" type="text">
                                                        </div>
                                                    </div>


                                            </div>
                                    </div>
                                    <div class="tab-pane" id="description">
                                        <div class="row">
                                            <h5 class="info-text"> RESULTADO DE LA ELECCIÓN. </h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/VER.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/NAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/partidos/SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        No Registrados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5">
                                                                        Votos Nulos
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>
                                                                    <div class="col-xs-2 text-right">
                                                                        <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="alert alert-info">
                                            <span>ELECCIÓN DE PRESIDENTE MUNICIPAL</span>
                                        </div>
                                        <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h4 class="title"></h4>
                                                        </div>
                                                        <div class="content">
                                                            <ul class="list-unstyled team-members">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/VER.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h4 class="title"></h4>
                                                        </div>
                                                        <div class="content">
                                                            <ul class="list-unstyled team-members">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/NAL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h4 class="title"></h4>
                                                        </div>
                                                        <div class="content">
                                                            <ul class="list-unstyled team-members">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/CID.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Resultados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            No Registrados
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Votos Nulos
                                                                            <br>
                                                                            <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-warning btn-icon"><i class="fa fa-times"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h5 class="title"><small>PARTIDOS QUE PRESENTARON INCIDENCIAS</small></h5>
                                                        </div>
                                                        <div class="content">
                                                            <ul class="list-unstyled team-members">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Incidencias
                                                                            <br>
                                                                            <span class="text-success"><small>1</small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-danger btn-icon"><i class="fa ti-pulse"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Incidencias
                                                                            <br>
                                                                            <span class="text-success"><small>3</small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-danger btn-icon"><i class="fa ti-pulse"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-xs-3">
                                                                            <div class="avatar">
                                                                                <img src="<?php echo $this->request->webroot?>Paper/img/partidos/VER.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-5">
                                                                            Incidencias
                                                                            <br>
                                                                            <span class="text-success"><small>1</small></span>
                                                                        </div>
                                                                        <div class="col-xs-2 text-right">
                                                                            <btn class="btn btn-sm btn-danger btn-icon"><i class="fa ti-pulse"></i></btn>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="text-center">
                                                                            <button type="button" class="btn btn-warning btn-fill btn-wd">Agregar Partido</button>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success btn-fill btn-wd">Generar Reporte</button>
                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Enviar' />
                                        <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Enviar' />

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->

    <div class="text-center">
    </div>
</div>
