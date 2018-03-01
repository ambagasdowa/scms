<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">CIERRE DE CASILLA</h4>
                </div>
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/casilla.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    Hora de Cierre
                                    <br>
                                    <span class="text-success"><small>18:50</small></span>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-clock-o"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/casilla.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    Había Gente en la Fila
                                    <br>
                                    <span class="text-success"><small>Casilla sin Fila</small></span>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-check"></i></btn>
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
                    <h4 class="title">FLUJO DE VOTACIÓN</h4>
                </div>
                <div class="content">
                    <ul class="list-unstyled team-members">
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    VOTANTES
                                    <br>
                                    <span class="text-success"><small>18:50</small></span>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-user-plus"></i></btn>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-3">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>Paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    PROMOVIDOS
                                    <br>
                                    <span class="text-warning"><small>2,500</small></span>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-user-plus"></i></btn>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">GRÁFICA TERCER REPORTE</h4>
                    <p class="category">Flujo de Votación</p>
                </div>
                <div class="content">
                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                    <div class="footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-warning"></i> PROMOVIDOS
                            <i class="fa fa-circle text-info"></i> VOTANTES

                        </div>
                        <hr>
                        <div class="stats">
                            <i class="ti-timer"></i> Información Actualizada
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card ">
                <div class="header">
                    <h4 class="title">REPORTE GENERAL VOTACIONES</h4>
                    <p class="category"></p>
                </div>
                <div class="content">
                    <div id="chartActivity" class="ct-chart"></div>

                    <div class="footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-warning"></i> VOTANTES
                            <i class="fa fa-circle text-info"></i> PROMOVIDOS

                        </div>
                        <hr>
                        <div class="stats">
                            <i class="ti-check"></i> Información Actualizada
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="text-center">
    <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar XLS</button>
</div>

</div>   <!-- container-fluid -->
