CREATE SCHEMA IF NOT EXISTS controlAgricola;

--DROP SCHEMA IF EXISTS controlAgricola;

-- -----------------------------------------------------
-- Table controlAgricola.cultivo
-- -----------------------------------------------------
CREATE SEQUENCE controlAgricola.idCultivo_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idCultivo_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.cultivo 
(
	idCultivo INT NOT NULL DEFAULT nextval('controlAgricola.idCultivo_seq'::regclass),
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT cultivo_pkey PRIMARY KEY (idcultivo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cultivo
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.medida
-- -----------------------------------------------------


CREATE SEQUENCE controlAgricola.idMedida_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idMedida_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.medida 
(
	idMedida  INT NOT NULL DEFAULT nextval('controlAgricola.idMedida_seq'::regclass),
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT medida_pkey PRIMARY KEY (idMedida)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.medida
  OWNER TO postgres;



-- -----------------------------------------------------
-- Table controlAgricola.area
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idArea_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idArea_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.area 
(
	idArea INT NOT NULL DEFAULT nextval('controlAgricola.idArea_seq'::regclass),
	nombre VARCHAR(45) ,
	tamano DECIMAL(10,0) ,
	estado INT,
	CONSTRAINT area_pkey PRIMARY KEY (idArea)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.area
  OWNER TO postgres;


-- -----------------------------------------------------
-- Table controlAgricola.lote
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idLote_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idLote_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.lote 
(
	idLote INT NOT NULL DEFAULT nextval('controlAgricola.idLote_seq'::regclass),
	idArea INT,
	nombre VARCHAR(45) ,
	tamano DECIMAL ,
	estado INT,
	CONSTRAINT lote_pkey PRIMARY KEY (idLote),
	CONSTRAINT fkArea
	FOREIGN KEY (idArea)
	REFERENCES controlAgricola.area (idArea)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.lote
  OWNER TO postgres;


-- -----------------------------------------------------
-- Table controlAgricola.periodo
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idPeriodo_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idPeriodo_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.periodo 
(
	idPeriodo INT NOT NULL DEFAULT nextval('controlAgricola.idPeriodo_seq'::regclass),
	nombre VARCHAR(45),
	fechainicio TIMESTAMP,
	fechafinal TIMESTAMP,
	estado INT,
	CONSTRAINT periodo_pkey PRIMARY KEY (idPeriodo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.periodo
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cultivoLote
-- -----------------------------------------------------


CREATE SEQUENCE controlAgricola.idCultivoLote_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idCultivoLote_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.cultivoLote 
(
	idcultivoLote INT NOT NULL DEFAULT nextval('controlAgricola.idCultivoLote_seq'::regclass),
	idPeriodo INT,
	idLote INT,
	idCultivo INT,
	fecha VARCHAR(45) ,
	estado INT,
	CONSTRAINT cultivoLote_pkey PRIMARY KEY (idcultivoLote),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (idPeriodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkLote
	FOREIGN KEY (idLote)
	REFERENCES controlAgricola.lote (idLote)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivo
	FOREIGN KEY (idCultivo)
	REFERENCES controlAgricola.cultivo (idCultivo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cultivoLote
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.departamento
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idDepartamento_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idDepartamento_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.departamento 
(
	idDepartamento INT NOT NULL DEFAULT nextval('controlAgricola.idDepartamento_seq'::regclass),
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT departamento_pkey PRIMARY KEY (idDepartamento)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.departamento
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cargo
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idCargo_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idCargo_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.cargo 
(
	idCargo INT NOT NULL DEFAULT nextval('controlAgricola.idCargo_seq'::regclass),
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT cargo_pkey PRIMARY KEY (idCargo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cargo
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.empleado
-- -----------------------------------------------------

CREATE SEQUENCE controlAgricola.idEmpleado_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idEmpleado_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.empleado 
(
	idempleado  INT NOT NULL DEFAULT nextval('controlAgricola.idEmpleado_seq'::regclass),
	nombre VARCHAR(45) ,
	apellido VARCHAR(45) ,
	departamento INT,
	cargo INT,
	CONSTRAINT empleado_pkey PRIMARY KEY (idempleado),
	CONSTRAINT fkDepartamento
	FOREIGN KEY (departamento)
	REFERENCES controlAgricola.departamento (idDepartamento)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCargo
	FOREIGN KEY (cargo)
	REFERENCES controlAgricola.cargo (idCargo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.empleado
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cabeceraTarea
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cabeceraTarea 
(
	idCabeceraTarea INT ,
	periodo INT,
	fecha TIMESTAMP ,
	supervisor INT,
	idCultivoLote INT,
	estado INT,
	CONSTRAINT cabeceraTarea_pkey PRIMARY KEY (idCabeceraTarea),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (periodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivoLote
	FOREIGN KEY (idCultivoLote)
	REFERENCES controlAgricola.cultivoLote (idcultivoLote)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkSupervisor
	FOREIGN KEY (supervisor)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cabeceraTarea
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.grupoLabor
-- -----------------------------------------------------
CREATE SEQUENCE controlAgricola.idGrupoLabor_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idGrupoLabor_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.grupoLabor 
(
	idGrupoLabor  INT NOT NULL DEFAULT nextval('controlAgricola.idGrupoLabor_seq'::regclass),
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT grupoLabor_pkey PRIMARY KEY (idGrupoLabor)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.grupoLabor
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.labor
-- -----------------------------------------------------


CREATE SEQUENCE controlAgricola.idLabor_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 1
  CACHE 1;
ALTER TABLE controlAgricola.idLabor_seq
  OWNER TO postgres;

CREATE TABLE IF NOT EXISTS controlAgricola.labor 
(
	idLabor INT NOT NULL DEFAULT nextval('controlAgricola.idLabor_seq'::regclass),
	idGrupoLabor INT,
	nombre VARCHAR(45) ,
	estado INT,
	CONSTRAINT labor_pkey PRIMARY KEY (idLabor),
	CONSTRAINT fkGrupoLabor
	FOREIGN KEY (idGrupoLabor)
	REFERENCES controlAgricola.grupoLabor (idGrupoLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.labor
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.detalleTarea
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.detalleTarea 
(
	idCabeceraTarea INT ,
	idDetalleTarea INT ,
	idEmpleado INT,
	idLabor INT,
	cantidad DECIMAL ,
	tarifa DECIMAL ,
	CONSTRAINT detalleTarea_pkey PRIMARY KEY (idCabeceraTarea, idDetalleTarea),
	CONSTRAINT fkEmpleado
	FOREIGN KEY (idEmpleado)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkLabor
	FOREIGN KEY (idLabor)
	REFERENCES controlAgricola.labor (idLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCabeceraTarea
	FOREIGN KEY (idCabeceraTarea)
	REFERENCES controlAgricola.cabeceraTarea (idCabeceraTarea)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.detalleTarea
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cabeceraTarifario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cabeceraTarifario 
(
	idCabeceraTarifario INT ,
	idPeriodo INT,
	idCultivo INT,
	fecha TIMESTAMP NULL ,
	estado INT,
	CONSTRAINT cabeceraTarifario_pkey PRIMARY KEY (idCabeceraTarifario),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (idPeriodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivo
	FOREIGN KEY (idCultivo)
	REFERENCES controlAgricola.cultivo (idCultivo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cabeceraTarifario
  OWNER TO postgres;




-- -----------------------------------------------------
-- Table controlAgricola.detalleTarifario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.detalleTarifario 
(
	idCabeceraTarifario INT ,
	idDetalleTarifario INT ,
	idLabor INT,
	idMedida INT,
	valor VARCHAR(45) ,
	CONSTRAINT detalleTarifario_pkey PRIMARY KEY (idCabeceraTarifario, idDetalleTarifario),
	--constraint INDEX fkLabor_idx (idLabor ASC),
	--constraint INDEX fkMedida_idx (idMedida ASC),
	CONSTRAINT fkLabor
	FOREIGN KEY (idLabor)
	REFERENCES controlAgricola.labor (idLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkMedida
	FOREIGN KEY (idMedida)
	REFERENCES controlAgricola.medida (idMedida)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCabeceraTarifario
	FOREIGN KEY (idCabeceraTarifario)
	REFERENCES controlAgricola.cabeceraTarifario (idCabeceraTarifario)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.detalleTarifario
  OWNER TO postgres;



-- -----------------------------------------------------
-- Table controlAgricola.cabeceraSupervisionDron
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS controlAgricola.cabeceraSupervisionDron 
(
	idCabeceraDron INT NOT NULL,
	periodo INT NULL,
	fecha TIMESTAMP NULL,
	supervisor INT NULL,
	idCultivoLote INT NULL,
	estado INT NULL,
	CONSTRAINT cabeceraDron_pkey PRIMARY KEY (idCabeceraDron),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (periodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivoLote
	FOREIGN KEY (idCultivoLote)
	REFERENCES controlAgricola.cultivoLote (idcultivoLote)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkSupervisor
	FOREIGN KEY (supervisor)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cabeceraSupervisionDron
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.detalleSupervisionDron
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.detalleSupervisionDron 
(
	idCabeceraDron INT NOT NULL,
	idDetalleDron INT NOT NULL,
	idEmpleado INT NULL,
	idLabor INT NULL,
	cantidad DECIMAL NULL,
	tarifa DECIMAL NULL,
	CONSTRAINT detalleDron_pkey PRIMARY KEY (idCabeceraDron, idDetalleDron),
	CONSTRAINT fkEmpleado
	FOREIGN KEY (idEmpleado)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkLabor
	FOREIGN KEY (idLabor)
	REFERENCES controlAgricola.labor (idLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCabeceraDron
	FOREIGN KEY (idCabeceraDron)
	REFERENCES controlAgricola.cabeceraSupervisionDron (idCabeceraDron)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.detalleSupervisionDron
  OWNER TO postgres;

