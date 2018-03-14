/**
  *
  *
  *
  */

  -- Casillas descritions
  -- incidents report ->

  create table `casillas`(
   `id` unsigned INT(11) not null auto_increment,
   `name` char(50) not null;
   `description` char(150) not null,

   `rgl_id` INT(11) NOT NULL,  -- ??
   `abo_id` INT(11) NOT NULL,  -- ??
   `cap_id` INT(11) NOT NULL,  -- ??

   `municipio` TEXT DEFAULT NULL,
   `seccion` TEXT DEFAULT NULL,
   -- `distrito` TEXT DEFAULT NULL,
   `urbana` TEXT DEFAULT NULL,
   `tipo` TEXT DEFAULT NULL,  -- basica,contigua,especial || Presidente.Senador,Diputado,Ayuntamiento ??
   `distrito` TEXT DEFAULT NULL, -- IX,X Appears two times
   `locacion` TEXT DEFAULT NULL, -- localidad
   `created` DATETIME,
   `modified` DATETIME,
   primary key (`id`),
   unique key (name)          -- avoid duplicates [optional]
  ) engine=InnoDB default charset=utf8mb4 ;

  -- CASILLAS PRINCESA jajajaja
  CREATE TABLE `casillas_presencias`(
   `id` INT(11) NOT NULL,
   `casillas_id` INT(11) NOT NULL,
   `hora_presencia` DATETIME DEFAULT NULL,
   `hora_inivotacion` DATETIME DEFAULT NULL,
   `info_validada` TINYINT(2) DEFAULT NULL
   `created` DATETIME,
   `modified` DATETIME,
   INDEX casillas_index (casillas_id), 	-- build a index  Preserve the data Homogeniux [Optional]
   FOREIGN KEY (casillas_id)		-- declare as fk
       REFERENCES casillas(id)	-- reference to a parent
       ON update cascade on delete restrict		-- set the action if casillas exists then drop the delete instruction
  );
  ALTER TABLE `casillas_presencias` COMMENT = 'INFORMACION CASILLAS';
  ALTER TABLE `casillas_presencias`
    ADD PRIMARY KEY (`id`);
  ALTER TABLE `casillas_presencias`
  MODIFY `id` unsigned INT(11) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `partidos`(
   `id` INT(11) NOT NULL,
   `nombre` TEXT DEFAULT NULL, -- coal1, coal2 ....
   `formula` TEXT DEFAULT NULL -- Coaliciones
  );
  ALTER TABLE `partidos` COMMENT = 'INFORMACION PARTIDOS';
  ALTER TABLE `partidos`
    ADD PRIMARY KEY (`id`);
  ALTER TABLE `partidos`
  MODIFY `id` unsigned INT(11) NOT NULL AUTO_INCREMENT;


  CREATE TABLE `incidencias`(  -- Catalog
  `id` INT(11) NOT NULL,
  `titulo` TEXT DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL
  `created` DATETIME,
  `modified` DATETIME
  );
  ALTER TABLE `incidencias` COMMENT = 'TIPO INCIDENCIAS';
  ALTER TABLE `incidencias`
    ADD PRIMARY KEY (`id`);
  ALTER TABLE `incidencias`
  MODIFY `id` unsigned INT(11) NOT NULL AUTO_INCREMENT;


  CREATE TABLE `partidos_incidencias`(
  `id` INT(11) NOT NULL,
  `casillas_id` INT(11) DEFAULT NULL,
  `partidos_id` INT(11) DEFAULT NULL,
  `incidencias_id` INT(11) DEFAULT NULL,
  `otra` TEXT DEFAULT NULL,
  `created` DATETIME,
  `modified` DATETIME
  );
  ALTER TABLE `partidos_incidencias` COMMENT = 'INFORMACION DE CASILLA - INCIDENCIAS';

  ALTER TABLE `partidos_incidencias`
    ADD PRIMARY KEY (`id`);

  ALTER TABLE `partidos_incidencias`
  MODIFY `id` unsigned INT(11) NOT NULL AUTO_INCREMENT;

-- ======================================= Proposal of reports =============================================== --
    create table reportes (
      `id` unsigned INT(11) not null auto_increment,
      `casillas_id` unsigned int(11) not null ,
      `instalacion`
      `inicio`
      `cierre`
    )engine=InnoDB default charset=utf8mb4;

-- ======================================= Proposal of reports =============================================== --



  CREATE TABLE `reporte_primero`(
  `id` INT(11) NOT NULL,
  `casillas_id` INT(11) NOT NULL,
  `hora_instalacion` DATETIME DEFAULT NULL,
  `hora_inivotacion` DATETIME DEFAULT NULL,   -- repeated in  casillas_presencias
  `lugar_indi_ieqro` TINYINT(2) DEFAULT NULL,
  `toma_gente_fila` TINYINT(2) DEFAULT NULL,
  `pres_pan` TINYINT(2) DEFAULT NULL,
  `pres_pri` TINYINT(2) DEFAULT NULL,
  `pres_prd` TINYINT(2) DEFAULT NULL,
  `pres_pve` TINYINT(2) DEFAULT NULL,
  `pres_pt` TINYINT(2) DEFAULT NULL,
  `pres_mc` TINYINT(2) DEFAULT NULL,
  `pres_panal` TINYINT(2) DEFAULT NULL,
  `pres_morena` TINYINT(2) DEFAULT NULL,
  `pres_pes` TINYINT(2) DEFAULT NULL,
  `pres_presidente` TINYINT(2) DEFAULT NULL,
  `pres_secretario` TINYINT(2) DEFAULT NULL,
  `pres_escrutador_1` TINYINT(2) DEFAULT NULL,
  `pres_escrutador_2` TINYINT(2) DEFAULT NULL,
  `pres_suplente_1` TINYINT(2) DEFAULT NULL,
  `pres_suplente_2` TINYINT(2) DEFAULT NULL,
  `pres_suplente_3` TINYINT(2) DEFAULT NULL,
  `info_validada` TINYINT(2) DEFAULT NULL
  );
  ALTER TABLE `reporte_primero` COMMENT = 'INFORMACION DE CASILLA - REPORTE I';
  ALTER TABLE `reporte_primero`
    ADD PRIMARY KEY (`id`);
  ALTER TABLE `reporte_primero`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `reporte_segundo_tercero`(
  `id` INT(11) NOT NULL,
  `casillas_id` INT(11) NOT NULL,
  `votantes_segundo` INT(11) DEFAULT NULL,
  `promovidos_segundo` INT(11) DEFAULT NULL,
  `hr_voto_segundo` DATETIME DEFAULT NULL,

  `votantes_tercero` INT(11) DEFAULT NULL,
  `promovidos_tercero` INT(11) DEFAULT NULL,
  `hr_voto_tercero` DATETIME DEFAULT NULL,
  `info_validada` TINYINT(2) DEFAULT NULL
  );
  ALTER TABLE `reporte_segundo_tercero` COMMENT = 'INFORMACION DE CASILLA - REPORTE II y III';

  ALTER TABLE `reporte_segundo_tercero`
    ADD PRIMARY KEY (`id`);

  ALTER TABLE `reporte_segundo_tercero`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `reporte_cierre`(
  `id`  INT(11) NOT NULL,
  `casillas_id` INT(11) NOT NULL,
  `hr_cierre` DATETIME DEFAULT NULL,
  `habia_gente_fila` TINYINT(2) DEFAULT NULL,
  `votantes` INT(11) DEFAULT NULL,
  `promovidos` INT(11) DEFAULT NULL,
  `info_validada` TINYINT(2) DEFAULT NULL
  );
  ALTER TABLE `reporte_cierre` COMMENT = 'INFORMACION DE CASILLA - REPORTE I';

  ALTER TABLE `reporte_cierre`
    ADD PRIMARY KEY (`id`);

  ALTER TABLE `reporte_cierre`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `resultados_finales`(
  `id` INT(11) NOT NULL,
  `casillas_id` INT(11) NOT NULL,
  `res_pan` INT(11) DEFAULT NULL,
  `res_pri` INT(11) DEFAULT NULL,
  `res_prd` INT(11) DEFAULT NULL,
  `res_pve` INT(11) DEFAULT NULL,
  `res_pt` INT(11) DEFAULT NULL,
  `res_mc` INT(11) DEFAULT NULL,
  `res_panal` INT(11) DEFAULT NULL,
  `res_morena` INT(11) DEFAULT NULL,
  `res_pes` INT(11) DEFAULT NULL,
  `coa_pan_prd_mc` INT(11) DEFAULT NULL,
  `for_pan_prd` INT(11) DEFAULT NULL,
  `for_pan_mc` INT(11) DEFAULT NULL,
  `for_prd_mc` INT(11) DEFAULT NULL,

  `coa_pri_pve_panal` INT(11) DEFAULT NULL,
  `for_pri_pve` INT(11) DEFAULT NULL,
  `for_pri_panal` INT(11) DEFAULT NULL,
  `for_pve_panal` INT(11) DEFAULT NULL,

  `no_registrados` INT(11) DEFAULT NULL,
  `votos_nulos` INT(11) DEFAULT NULL,
  `info_validada` TINYINT(2) DEFAULT NULL
  );
  ALTER TABLE `resultados_finales` COMMENT = 'INFORMACION VOTACIONES - RESULTADOS FINALES';

  ALTER TABLE `resultados_finales`
    ADD PRIMARY KEY (`id`);

  ALTER TABLE `resultados_finales`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;

  DESC `casillas`;
  DESC `casillas_presencia`;
  DESC `partidos`;
  DESC `incidencias`;
  DESC `partidos_incidencias`;
  DESC `reporte_primero`;
  DESC `reporte_segundo_tercero`;
  DESC `reporte_cierre`;
  DESC `resultados_finales`;
