<div class="sidebar" data-background-color="white" data-active-color="danger">

<!--
Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->

  <div class="sidebar-wrapper">
        <div class="logo text-center">

        </div>

        <ul class="nav">
            <li class="active">
                <a href="<?php echo $this->Url->build('/pages/reports/monitor'); ?>">
                    <i class="ti-package"></i>
                    <p>MONITOR CASILLAS</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/PrimerReporte'); ?>">
                    <i class="ti-bar-chart"></i>
                    <p>PRIMER REPORTE</p>
                </a>
            </li>

            <li>
                <!-- <a href="index2.html"> -->
                <a href="<?php echo $this->Url->build('/pages/reports/SegundoReporte'); ?>">
                    <i class="ti-bar-chart"></i>
                    <p>SEGUNDO REPORTE</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/TercerReporte'); ?>">
                    <i class="ti-bar-chart"></i>
                    <p>TECER REPORTE</p>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/CuartoReporte'); ?>">
                    <i class="ti-bar-chart"></i>
                    <p>CUARTO REPORTE</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/OctavoReporte'); ?>">
                    <i class="ti-user"></i>
                    <p>ELECCI&Oacute;N PRESIDENTE </p>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/QuintoReporte'); ?>">
                    <i class="ti-pulse"></i>
                    <p>REPORTE INCIDENCIAS</p>
                </a>
            </li>

            <li>
                <a href="<?php echo $this->Url->build('/pages/reports/NovenoReporte'); ?>">
                    <i class="ti-pulse"></i>
                    <p>RESUMEN</p>
                </a>
            </li>

        </ul>
  </div>
</div>
