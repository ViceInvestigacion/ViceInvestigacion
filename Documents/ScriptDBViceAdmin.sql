USE [DB_VicerrectoradoInv]
GO
/****** Object:  Table [dbo].[fechaEjeBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[fechaEjeBE](
	[id_FE] [int] IDENTITY(1,1) NOT NULL,
	[actividad_FE] [varchar](150) NOT NULL,
	[fecha] [date] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_FE] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[facultadBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[facultadBE](
	[id_Facu] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Facu] [varchar](100) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Facu] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[facultadBE] ON
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (1, N'Facultad de Bromatología y Nutrición')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (2, N'Facultad de Ciencias')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (3, N'Facultad de Ciencias Económicas, Contables y Financieras')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (4, N'Facultad de Ciencias Empresariales')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (5, N'Facultad de Ciencias Sociales')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (6, N'Facultad de Derecho y Ciencias Políticas')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (7, N'Facultad de Educación')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (8, N'Facultad de Ingeniería Agraria, Industrias Alimentarias y Ambiental')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (9, N'Facultad de Ingeniería Industrial, Sistemas e Informática')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (10, N'Facultad de Ingeniería Pesquera')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (11, N'Facultad de Ingeniería Química y Metalurgia')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (12, N'Facultad de Medicina Humana')
INSERT [dbo].[facultadBE] ([id_Facu], [nombre_Facu]) VALUES (13, N'Facultad de Ingeniería Civil')
SET IDENTITY_INSERT [dbo].[facultadBE] OFF
/****** Object:  Table [dbo].[fondoGobBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[fondoGobBE](
	[id_fondoGob] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_fondoGob] [varchar](50) NULL,
	[estado_fondoGob] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_fondoGob] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[fondoGobBE] ON
INSERT [dbo].[fondoGobBE] ([id_fondoGob], [descripcion_fondoGob], [estado_fondoGob]) VALUES (1, N'FOCAM', 1)
INSERT [dbo].[fondoGobBE] ([id_fondoGob], [descripcion_fondoGob], [estado_fondoGob]) VALUES (2, N'FEDU', 1)
SET IDENTITY_INSERT [dbo].[fondoGobBE] OFF
/****** Object:  Table [dbo].[is_message]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING OFF
GO
CREATE TABLE [dbo].[is_message](
	[message_id] [int] IDENTITY(1,1) NOT NULL,
	[date] [datetime] NOT NULL,
	[name] [varchar](30) NOT NULL,
	[email] [varchar](30) NOT NULL,
	[message] [text] NOT NULL,
	[status] [varchar](10) NOT NULL,
 CONSTRAINT [PK__is_messa__0BBF6EE6E880175C] PRIMARY KEY CLUSTERED 
(
	[message_id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[is_message] ON
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (1, CAST(0x0000A98400000000 AS DateTime), N'brayan', N'rivera_genio@hotmail.com', N'help me please!!', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (3, CAST(0x0000A98A00000000 AS DateTime), N'rodrigo', N'rodri@gmail.com', N'hola mundo', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (4, CAST(0x0000A98A00000000 AS DateTime), N'rusbel', N'rusbel@hotmail.com', N'hahaha yuni noob', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (5, CAST(0x0000A98A00000000 AS DateTime), N'roberto', N'toto@yahoo.com', N'totototot', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (7, CAST(0x0000000000000000 AS DateTime), N'ANA', N'ana@hotmail.com', N'holi boli', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (8, CAST(0x0000A98A00C5F5E9 AS DateTime), N'crilin', N'crilin@gmail.com', N'ayudame prro', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (9, CAST(0x0000A98A00C607C5 AS DateTime), N'luiggi', N'lui@yahoo.com', N'adasasd', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (10, CAST(0x0000A9A500CE47CB AS DateTime), N'Romina', N'romi@gmail.com', N'holis XD', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (11, CAST(0x0000A9A500CE6F56 AS DateTime), N'Olinda', N'estel@hotmail.com', N'nice tonglish prro :v', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (12, CAST(0x0000A9A500CEA596 AS DateTime), N'Milagros', N'lamili@yahoo.com', N'send me free', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (13, CAST(0x0000A9A500CEE602 AS DateTime), N'pierina', N'ivnne@hotmail.com', N'i need your help!!', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (14, CAST(0x0000A9A500CF43C8 AS DateTime), N'Claudia', N'clau@yahoo.com', N'hahahahah :3', N'n')
SET IDENTITY_INSERT [dbo].[is_message] OFF
/****** Object:  Table [dbo].[profesionBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[profesionBE](
	[id_Prof] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Prof] [varchar](80) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Prof] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[profesionBE] ON
INSERT [dbo].[profesionBE] ([id_Prof], [nombre_Prof]) VALUES (1, N'Ingenieria de Sistemas ')
SET IDENTITY_INSERT [dbo].[profesionBE] OFF
/****** Object:  Table [dbo].[objetivoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[objetivoBE](
	[id_Objetivo] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](200) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Objetivo] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[entidadColaBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[entidadColaBE](
	[id_EntidadCola] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](45) NOT NULL,
	[descripcion] [varchar](45) NOT NULL,
	[usuReg] [int] NOT NULL,
	[fecReg] [datetime] NOT NULL,
 CONSTRAINT [PK__entidadC__702C3DC71DE57479] PRIMARY KEY CLUSTERED 
(
	[id_EntidadCola] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[comunidadAutoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[comunidadAutoBE](
	[id_CA] [int] IDENTITY(1,1) NOT NULL,
	[nombre_CA] [varchar](150) NOT NULL,
	[usuReg] [int] NOT NULL,
	[fecReg] [datetime] NOT NULL,
 CONSTRAINT [PK__comunida__0148D50034C8D9D1] PRIMARY KEY CLUSTERED 
(
	[id_CA] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[especialidadBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[especialidadBE](
	[id_Espe] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Espe] [varchar](45) NULL,
	[estado_Espe] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Espe] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[especialidadBE] ON
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (1, N'Ingeniero de Sistemas', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (2, N'Enfermera', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (3, N'Obtetriz', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (4, N'Abogado', 1)
SET IDENTITY_INSERT [dbo].[especialidadBE] OFF
/****** Object:  Table [dbo].[universidadBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[universidadBE](
	[id_Uni] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Uni] [varchar](80) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Uni] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[universidadBE] ON
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (1, N'Universidad Nacional Jose Faustino Sanchez Carrion')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (2, N'Universidad Nacional de Ingenieria')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (3, N'Universidad Nacional Federico Villareal')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (4, N'Universidad Nacional Mayor de San Marcos')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (5, N'Universidad Alas Peruanas')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (6, N'Universidad Cesar Vallejo')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (7, N'Universidad Peruana Union')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (8, N'Universidad San Pedro')
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (9, N'Universidad Nacional de Barranca')
SET IDENTITY_INSERT [dbo].[universidadBE] OFF
/****** Object:  Table [dbo].[tipoAsistenteBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[tipoAsistenteBE](
	[id_TipoAs] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_TipoAs] [varchar](50) NOT NULL,
	[estado_TipoAs] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_TipoAs] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[tipoAsistenteBE] ON
INSERT [dbo].[tipoAsistenteBE] ([id_TipoAs], [descripcion_TipoAs], [estado_TipoAs]) VALUES (1, N'GENERAL', 1)
SET IDENTITY_INSERT [dbo].[tipoAsistenteBE] OFF
/****** Object:  Table [dbo].[rolBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[rolBE](
	[id_Rol] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Rol] [varchar](100) NOT NULL,
	[estado_Rol] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Rol] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[rolBE] ON
INSERT [dbo].[rolBE] ([id_Rol], [descripcion_Rol], [estado_Rol]) VALUES (1, N'ADMINISTRADOR', 1)
SET IDENTITY_INSERT [dbo].[rolBE] OFF
/****** Object:  Table [dbo].[usuarioBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[usuarioBE](
	[id_Usu] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Usu] [varchar](45) NOT NULL,
	[clave_Usu] [varchar](45) NOT NULL,
	[estado_Usu] [int] NOT NULL,
	[usuReg_Usu] [int] NULL,
	[fecReg_Usu] [datetime] NULL,
	[fecMod_Usu] [datetime] NULL,
	[fullname] [varchar](50) NULL,
	[id_Rol_Usu] [int] NOT NULL,
 CONSTRAINT [PK__usuarioB__72D6079521B6055D] PRIMARY KEY CLUSTERED 
(
	[id_Usu] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[usuarioBE] ON
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (1, N'admin', N'admin', 1, 1, CAST(0x0000A97900000000 AS DateTime), CAST(0x0000A97900000000 AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (12, N'admin', N'admin', 1, 1, CAST(0x0000A97900000000 AS DateTime), CAST(0x0000A97900000000 AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (15, N'admin', N'admin', 1, 1, CAST(0x0000A97900000000 AS DateTime), CAST(0x0000A97900000000 AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (17, N'admin', N'admin', 1, 1, CAST(0x0000A97900000000 AS DateTime), CAST(0x0000A97900000000 AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (18, N'admin', N'admin', 1, 1, CAST(0x0000A97900000000 AS DateTime), CAST(0x0000A97900000000 AS DateTime), N'admin', 1)
SET IDENTITY_INSERT [dbo].[usuarioBE] OFF
/****** Object:  Table [dbo].[suscriptorBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[suscriptorBE](
	[id_Susc] [int] IDENTITY(1,1) NOT NULL,
	[nombres_Susc] [varchar](45) NOT NULL,
	[apellidos_Susc] [varchar](45) NOT NULL,
	[correo_Susc] [varchar](45) NOT NULL,
	[estado_Susc] [int] NOT NULL,
	[entidad_Susc] [varchar](70) NULL,
	[profesion_Susc] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Susc] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[suscriptorBE] ON
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc], [entidad_Susc], [profesion_Susc]) VALUES (13, N'Rodrigo', N'Huaranga', N'roviseis@gmail.com', 0, N'1', 1)
SET IDENTITY_INSERT [dbo].[suscriptorBE] OFF
/****** Object:  Table [dbo].[escuelaBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[escuelaBE](
	[id_Escuela] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Escuela] [varchar](100) NOT NULL,
	[facultadId_Escuela] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Escuela] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[escuelaBE] ON
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (1, N'EAP Bromatología y Nutrición', 1)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (2, N'EAP Estadística e Informática', 2)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (3, N'EAP Física', 2)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (4, N'EAP Biología', 2)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (5, N'EAP Matemática Aplicada', 2)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (6, N'EAP Ciencias Contables y Financieras', 3)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (7, N'EAP Economía y Finanzas', 3)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (8, N'EAP Administración', 4)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (9, N'EAP Negocios Internacionales', 4)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (10, N'EAP Gestión en Turismo y Hotelería', 4)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (11, N'EAP Trabajo Social', 5)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (12, N'EAP Sociología', 5)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (13, N'EAP Ciencias de la Comunicación', 5)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (14, N'EAP Derecho', 6)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (15, N'EAP Educación Inicial', 7)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (16, N'EAP Educación Primaria', 7)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (17, N'EAP Educación Secundaria', 7)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (18, N'EAP Educación Física', 7)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (19, N'EAP Educación Tecnológica', 7)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (20, N'EAP Ingeniería Agronómica', 8)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (21, N'EAP Ingeniería Ambiental', 8)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (22, N'EAP Ingeniería Industria Alimentaria', 8)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (23, N'EAP Ingeniería Zootecnia', 8)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (24, N'EAP Ingeniería Industrial', 9)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (25, N'EAP Ingeniería de Sistemas', 9)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (26, N'EAP Ingeniería Informática', 9)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (27, N'EAP Ingeniería Electrónica', 9)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (28, N'EAP Ingeniería Pesquera', 10)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (29, N'EAP Ingeniería Acuícola', 10)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (30, N'EAP Ingeniería Química', 11)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (31, N'EAP Ingeniería Metalúrgica', 11)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (32, N'EAP Medicina Humana', 12)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (33, N'EAP Enfermería', 12)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (34, N'EAP Ingeniería Civíl', 13)
SET IDENTITY_INSERT [dbo].[escuelaBE] OFF
/****** Object:  Table [dbo].[asistenteBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[asistenteBE](
	[id_Asis] [int] IDENTITY(1,1) NOT NULL,
	[dni_Asis] [varchar](8) NOT NULL,
	[nombres_Asis] [varchar](45) NOT NULL,
	[apellidos_Asis] [varchar](45) NOT NULL,
	[especialidad_Asis] [varchar](45) NOT NULL,
	[universidadProc_Asis] [int] NOT NULL,
	[fecNac_Asis] [date] NOT NULL,
	[correo_Asis] [varchar](45) NOT NULL,
	[telefono_Asis] [varchar](10) NOT NULL,
	[fecReg_Asis] [date] NOT NULL,
	[usuReg_Asis] [int] NOT NULL,
	[tipoAsis_Asis] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Asis] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[asistenteBE] ON
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (53, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (54, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis1@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (55, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis2@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (56, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis3@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (57, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis4@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (60, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(0x271F0B00 AS Date), N'roviseis5@gmail.com', N'931697515', CAST(0x023F0B00 AS Date), 1, 1)
SET IDENTITY_INSERT [dbo].[asistenteBE] OFF
/****** Object:  Table [dbo].[convocatoriaBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[convocatoriaBE](
	[id_Conv] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Conv] [varchar](255) NOT NULL,
	[imagen_Conv] [varchar](250) NOT NULL,
	[fecha_Conv] [varchar](50) NOT NULL,
	[estado_Conv] [int] NOT NULL,
	[usuReg_Conv] [int] NOT NULL,
	[fecReg_Conv] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Conv] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[convocatoriaBE] ON
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (1, N'imagen 1', N'1.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE5690 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (2, N'imagen 2', N'2.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE5690 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (3, N'imagen 3', N'3.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE5690 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (4, N'imagen 4', N'4.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE5690 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (5, N'imagen 5', N'5.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE9CE0 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (6, N'imagen 6', N'6.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE9CE0 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (7, N'imagen 7', N'7.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE9CE0 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (8, N'imagen 8', N'8.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BE9CE0 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (9, N'imagen 9', N'9.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BEE330 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (10, N'imagen 10', N'10.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BEE330 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (12, N'elephant', N'elephant.jpg', N'29/10/2018', 1, 12, CAST(0x0000A98800BFFC70 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (18, N'wwww', N'icon-41-512.png', N'30/10/2018', 1, 12, CAST(0x0000A98800000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (19, N'wwwppp', N'contenido.jpg', N'2018-10-30', 1, 12, CAST(0x0000A98800000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (20, N'rrrrrrrrrrrrrrrrrrrrrr', N'creditos-1000-euros-en-10-minutos.png', N'2018-10-31', 1, 12, CAST(0x0000A98800000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (23, N'aaaddddddddddddddddddddd', N'assessment.png', N'2018-10-31', 1, 15, CAST(0x0000000000000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (24, N'Personal CAS', N'app-developer.png', N'2018-11-19', 1, 12, CAST(0x0000000000000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (26, N'congreso para alumnos de medicina', N'U_Mobile_logo.svg.png', N'', 1, 12, CAST(0x0000000000000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (27, N'ww', N'Database-Management-Systems-DBMS-Market.jpg', N'2018-11-20', 1, 12, CAST(0x0000000000000000 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (28, N'aea', N'league-of-legends-vs-dota-2.jpg', N'2018-11-22', 1, 12, CAST(0x0000A9A000A30E89 AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (30, N'ss', N'Aboriginal camp, north of Moree, 1885.jpeg', N'2018-12-05', 1, 1, CAST(0x0000A9AD00AFFB86 AS DateTime))
SET IDENTITY_INSERT [dbo].[convocatoriaBE] OFF
/****** Object:  Table [dbo].[noticiaBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[noticiaBE](
	[id_Noticia] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Noticia] [varchar](500) NOT NULL,
	[fecha_Noticia] [varchar](150) NOT NULL,
	[estado_Noticia] [int] NULL,
	[imagen_Noticia] [varchar](250) NOT NULL,
	[usuReg_Noticia] [int] NOT NULL,
	[fecReg_Noticia] [datetime] NULL,
	[titulo_Noticia] [varchar](max) NOT NULL,
 CONSTRAINT [PK__noticiaB__FB56905B34C8D9D1] PRIMARY KEY CLUSTERED 
(
	[id_Noticia] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[noticiaBE] ON
INSERT [dbo].[noticiaBE] ([id_Noticia], [descripcion_Noticia], [fecha_Noticia], [estado_Noticia], [imagen_Noticia], [usuReg_Noticia], [fecReg_Noticia], [titulo_Noticia]) VALUES (1, N'ALERTA ALERTA UNA INUNDACION EN EL PABELLON DE INGENIERIA CIVIL DEJO LAS LLUVIAS TORRENCIALES DE ESTA NOCHE, HASTA EL MOMENTO LAS AUTORIDADES NO SE HAN HECHO PRESENTE', N'2018-12-04', 1, N'3d-touch.png', 12, CAST(0x0000A9AC00A45A23 AS DateTime), N'Inundacion en la UNJFSC')
INSERT [dbo].[noticiaBE] ([id_Noticia], [descripcion_Noticia], [fecha_Noticia], [estado_Noticia], [imagen_Noticia], [usuReg_Noticia], [fecReg_Noticia], [titulo_Noticia]) VALUES (2, N'ss', N'05-12-2018', 1, N'sss', 12, CAST(0x0000A9AD00AEE2BC AS DateTime), N'hol')
INSERT [dbo].[noticiaBE] ([id_Noticia], [descripcion_Noticia], [fecha_Noticia], [estado_Noticia], [imagen_Noticia], [usuReg_Noticia], [fecReg_Noticia], [titulo_Noticia]) VALUES (3, N'que tal ', N'2018-12-05', 1, N'Aboriginal camp, north of Moree, 1885.jpeg', 1, CAST(0x0000A9AD00AF0EAD AS DateTime), N'hola')
INSERT [dbo].[noticiaBE] ([id_Noticia], [descripcion_Noticia], [fecha_Noticia], [estado_Noticia], [imagen_Noticia], [usuReg_Noticia], [fecReg_Noticia], [titulo_Noticia]) VALUES (4, N'jjj', N'2018-12-05', 1, N'Aboriginal camp, north of Moree, 1885.jpeg', 1, CAST(0x0000A9AD00AF34B5 AS DateTime), N'jkkj')
SET IDENTITY_INSERT [dbo].[noticiaBE] OFF
/****** Object:  Table [dbo].[nosotrosBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[nosotrosBE](
	[id_Nos] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Nos] [text] NOT NULL,
	[vision_Nos] [text] NOT NULL,
	[mision_Nos] [text] NOT NULL,
	[organigrama_Nos] [varchar](250) NULL,
	[directorio_Nos] [varchar](250) NULL,
	[estado_Nos] [int] NULL,
	[usuMod_Nos] [int] NULL,
	[fecMod_Nos] [varchar](150) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Nos] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[nosotrosBE] ON
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (1, N'aea', N'ea', N'ea', N'1.jpg', N'ada', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (2, N'AJAM', N'eeeee', N'aaaaa', N'2.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (3, N'AJAM', N'eeeee', N'aaaaa', N'3.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (4, N'AJAM', N'eeeee', N'aaaaa', N'4.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (5, N'AJAM', N'eeeee', N'aaaaa', N'5.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (6, N'AJAM', N'eeeee', N'aaaaa', N'6.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (7, N'AJAM', N'eeeee', N'aaaaa', N'7.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (8, N'AJAM', N'eeeee', N'aaaaa', N'8.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (9, N'AJAM', N'eeeee', N'aaaaa', N'9.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (10, N'AJAM', N'eeeee', N'aaaaa', N'10.jpg', N'era', 1, 12, N'30/10/2018')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (11, N'Inundacion: tras las lluvias que afectaron el dia 26/11/2018 algunas aulas de la facultad de ingenieria quedaron inundadas y los alumnos hacen esfuerzos por sacar el agua con baldes hasta el momento las autoridades no se hacen presente ', N'BOLU', N'BOLU', N'aprendizaje-3.png', N'BOLU', 1, 12, N'2018-10-31')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (15, N'wawa', N'wawa', N'wawa', N'Genio_Forma_Valiente.png', N'awwa', 1, 12, N'2018-10-31')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (16, N'sa', N'sa', N'sa', N'principios.png', N'sa', 1, 15, N'2018-10-31')
INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (17, N'ee', N'ee', N'ee', N'clientes.png', N'ee', 1, 15, N'2018-10-31')
SET IDENTITY_INSERT [dbo].[nosotrosBE] OFF
/****** Object:  Table [dbo].[ponenteBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[ponenteBE](
	[id_Ponente] [int] IDENTITY(1,1) NOT NULL,
	[dni_Ponente] [varchar](15) NOT NULL,
	[nombres_Ponente] [varchar](150) NOT NULL,
	[apellidos_Ponente] [varchar](50) NOT NULL,
	[especialidad_Ponente] [int] NOT NULL,
	[univProc_Ponente] [int] NOT NULL,
	[fecNac_Ponente] [varchar](150) NOT NULL,
	[correo_Ponente] [varchar](150) NOT NULL,
	[telefono_Ponente] [varchar](150) NOT NULL,
	[usuReg_Ponente] [int] NOT NULL,
	[fecReg_Ponente] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Ponente] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[ponenteBE] ON
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (2, N'74306051', N'Luiggi', N'Rivera Santiago', 1, 1, N'1997-09-13', N'rivera_genio@hotmail.com', N'910528921', 12, CAST(0x0000A99F00000000 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (3, N'75119312', N'Rodrigo', N'Huaranga Carreño', 2, 3, N'1996-08-01', N'rovies06@hotmail.com', N'948562412', 12, CAST(0x0000A99F009FA7A3 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (4, N'72461257', N'Rusbel ', N'Nieto Rosado', 3, 5, N'1996-05-06', N'rusbi@hotmail.com', N'962956654', 12, CAST(0x0000A99F009FFFE1 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (6, N'122112', N'1212', N'12112', 3, 8, N'2018-12-04', N'asas', N'asas', 12, CAST(0x0000A9AB00D4C5D3 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (7, N'123', N'asd', N'asd', 4, 9, N'2018-12-04', N'asd', N'asd', 12, CAST(0x0000A9AB00D4E8C8 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (13, N'12', N'12', N'12', 4, 7, N'2018-12-04', N'12', N'12', 12, CAST(0x0000A9AB00D6AAEC AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (14, N'123', N'12', N'12', 4, 8, N'1944-10-04', N'12', N'12', 12, CAST(0x0000A9AB00D6CDDE AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (15, N'12', N'12', N'21', 4, 1, N'2018-12-03', N'12', N'12', 12, CAST(0x0000A9AB00D6DE46 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (16, N'12', N'12', N'12', 1, 9, N'2018-12-03', N'12', N'12', 12, CAST(0x0000A9AB00D6EC59 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (17, N'12', N'12', N'12', 1, 1, N'0012-12-05', N'12', N'12', 12, CAST(0x0000A9AB00D6FAFD AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (19, N'1111111', N'2', N'2', 4, 9, N'2018-12-03', N'2', N'2', 12, CAST(0x0000A9AB00D74887 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (20, N'12', N'12', N'12', 2, 4, N'2018-12-03', N'@asdasd', N'qwqw', 12, CAST(0x0000A9AB00D75DE3 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (22, N'12', N'1212', N'12', 2, 1, N'2018-12-04', N'1221', N'123213123', 12, CAST(0x0000A9AB00D784EE AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (26, N'12123123', N'12213213', N'112', 2, 3, N'2018-12-04', N'assa', N'123', 12, CAST(0x0000A9AC009CA549 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (27, N'12', N'12', N'1212', 1, 9, N'2018-12-04', N'12', N'12', 12, CAST(0x0000A9AC009CC1EB AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (28, N'123456789', N'Rosmery', N'Sanchez  Geronimo', 2, 3, N'1996-12-04', N'rosmery@hotmail.com', N'123456789', 12, CAST(0x0000A9AC009E9D9E AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (29, N'123456789123456', N'1', N'1', 1, 8, N'1923-08-09', N'123213', N'123', 12, CAST(0x0000A9AC009F9A1D AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (30, N'123456789123456', N'1', N'1', 2, 3, N'2018-12-05', N'21', N'12', 12, CAST(0x0000A9AC00A00AC0 AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (31, N'123456789123456', N'a', N'a', 1, 9, N'2018-12-04', N'a', N'a', 12, CAST(0x0000A9AC00A14B2F AS DateTime))
SET IDENTITY_INSERT [dbo].[ponenteBE] OFF
/****** Object:  Table [dbo].[tesisBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[tesisBE](
	[id_Tesis] [int] IDENTITY(1,1) NOT NULL,
	[titulo_Tesis] [varchar](45) NOT NULL,
	[escuela_Tesis] [int] NOT NULL,
	[fecha_Tesis] [date] NOT NULL,
	[escuelaId_Tesis] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Tesis] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[tipoEventoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[tipoEventoBE](
	[id_TipoEv] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_TipoEv] [varchar](150) NOT NULL,
	[estado_TipoEv] [int] NULL,
	[fecReg_TipoEv] [datetime] NULL,
	[usuReg_TipoEv] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_TipoEv] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[tipoEventoBE] ON
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (1, N'Congreso', 1, CAST(0x0000A98A00B29250 AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (2, N'Feria', 1, CAST(0x0000A98A00B2A2D6 AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (3, N'Ponencia', 1, CAST(0x0000A98A00B2CBB8 AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (7, N'a ', 1, CAST(0x0000A9A800AFF192 AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (1007, N'Festival ', 1, CAST(0x0000A9AB00BBC62D AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (1008, N'ss ', NULL, CAST(0x0000A9AD00B517BF AS DateTime), 1)
SET IDENTITY_INSERT [dbo].[tipoEventoBE] OFF
/****** Object:  Table [dbo].[resolucionBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[resolucionBE](
	[id_Resolucion] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Resolucion] [varchar](200) NOT NULL,
	[fecha] [varchar](150) NOT NULL,
	[archivo_Resolucion] [varchar](250) NOT NULL,
	[usuReg] [int] NOT NULL,
	[fecReg] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Resolucion] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[resolucionBE] ON
INSERT [dbo].[resolucionBE] ([id_Resolucion], [descripcion_Resolucion], [fecha], [archivo_Resolucion], [usuReg], [fecReg]) VALUES (1, N'resolucion 000213', N'27/11/2018', N'033204501-A.doc', 12, CAST(0x0000A9A500BE2486 AS DateTime))
INSERT [dbo].[resolucionBE] ([id_Resolucion], [descripcion_Resolucion], [fecha], [archivo_Resolucion], [usuReg], [fecReg]) VALUES (2, N'aaaaaaaaaaaaaaa ', N'2018-11-27', N'033204502-A.pdf', 12, CAST(0x0000A9A500BE4993 AS DateTime))
INSERT [dbo].[resolucionBE] ([id_Resolucion], [descripcion_Resolucion], [fecha], [archivo_Resolucion], [usuReg], [fecReg]) VALUES (4, N'ww', N'2018-12-05', N'30 años.docx', 1, CAST(0x0000A9AD00AF9938 AS DateTime))
SET IDENTITY_INSERT [dbo].[resolucionBE] OFF
/****** Object:  Table [dbo].[proyectoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[proyectoBE](
	[id_Proyecto] [int] IDENTITY(1,1) NOT NULL,
	[titulo_Proyecto] [varchar](200) NOT NULL,
	[descripcion_Proyecto] [varchar](200) NOT NULL,
	[presupuesto_Proyecto] [decimal](9, 2) NOT NULL,
	[enlace_Proyecto] [varchar](60) NOT NULL,
	[usuReg] [int] NULL,
	[escuelaId_Proyecto] [int] NOT NULL,
	[fecReg] [datetime] NOT NULL,
	[estado_Proyecto] [int] NOT NULL,
 CONSTRAINT [PK__proyecto__2544884C2E1BDC42] PRIMARY KEY CLUSTERED 
(
	[id_Proyecto] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[proyectoBE] ON
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (1, N'Implementacion de Plataforma Web', N'Implementacion', CAST(20000.00 AS Decimal(9, 2)), N'http://app.unjfsc.edu.pe/tramites/', 1, 1, CAST(0x0000A98800000000 AS DateTime), 1)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (2, N'IMPL', N'SS', CAST(1000.00 AS Decimal(9, 2)), N'WWW', NULL, 2, CAST(0x0000A98800000000 AS DateTime), 1)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (5, N'Mejoramiento de ', N'Mejora ', CAST(1000.00 AS Decimal(9, 2)), N'WWW', 1, 6, CAST(0x0000A98800000000 AS DateTime), 1)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (6, N'Desarollo de ', N'Desarrollo ', CAST(2000.00 AS Decimal(9, 2)), N'www', 1, 16, CAST(0x0000A98800000000 AS DateTime), 1)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (7, N'Tratamient', N'tratamiento', CAST(5000.00 AS Decimal(9, 2)), N'www', 1, 20, CAST(0x0000A98800000000 AS DateTime), 1)
SET IDENTITY_INSERT [dbo].[proyectoBE] OFF
/****** Object:  Table [dbo].[objetivoPryBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[objetivoPryBE](
	[id_ObjetivoPry] [int] IDENTITY(1,1) NOT NULL,
	[proyecto_ObjetivoPry] [int] NOT NULL,
	[objetivo_ObjetivoPry] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_ObjetivoPry] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[resultadoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[resultadoBE](
	[id_Resultado] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Resultado] [varchar](150) NOT NULL,
	[archivo_Resultado] [varchar](250) NOT NULL,
	[concurso_Resultado] [int] NOT NULL,
	[estado_Resultado] [int] NOT NULL,
	[usuReg_Resultado] [int] NOT NULL,
	[fecReg_Resultado] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Resultado] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[resultadoBE] ON
INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (6, N'yuni', N'yunza.doc', 27, 1, 12, CAST(0x0000A9A000A64658 AS DateTime))
INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (18, N'aaaaaaaaaa', N'prueba.doc', 24, 1, 12, CAST(0x0000A9A000B13875 AS DateTime))
INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (21, N'a', N'033204511-A.doc', 28, 1, 12, CAST(0x0000A9A000B2AB83 AS DateTime))
INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (24, N'ss', N'30 años.docx', 30, 1, 1, CAST(0x0000A9AD00B05B7E AS DateTime))
INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (25, N'ss', N'30 años.docx', 30, 1, 1, CAST(0x0000A9AD00B07EF0 AS DateTime))
SET IDENTITY_INSERT [dbo].[resultadoBE] OFF
/****** Object:  Table [dbo].[fondoGProyBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fondoGProyBE](
	[id_FGP] [int] IDENTITY(1,1) NOT NULL,
	[idProy] [int] NULL,
	[idFondo] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_FGP] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[fondoGProyBE] ON
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (1, 1, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (2, 2, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (3, 5, 2)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (4, 6, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (5, 7, 2)
SET IDENTITY_INSERT [dbo].[fondoGProyBE] OFF
/****** Object:  Table [dbo].[fechaProyBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fechaProyBE](
	[id_FP] [int] IDENTITY(1,1) NOT NULL,
	[proyecto_FP] [int] NOT NULL,
	[fechaEje_FP] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_FP] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[comunidadProyBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[comunidadProyBE](
	[id_CP] [int] IDENTITY(1,1) NOT NULL,
	[proyecto_CP] [int] NOT NULL,
	[comunidad_CP] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_CP] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[entidadCProyBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[entidadCProyBE](
	[id_ECP] [int] IDENTITY(1,1) NOT NULL,
	[proyecto_ECP] [int] NOT NULL,
	[entidadC_ECP] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_ECP] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[eventoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[eventoBE](
	[id_Evento] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Evento] [varchar](250) NOT NULL,
	[descripcion_Evento] [varchar](300) NOT NULL,
	[tipo_Evento] [int] NOT NULL,
	[duracion_Evento] [varchar](250) NOT NULL,
	[fecInicio_Evento] [varchar](150) NOT NULL,
	[fecFin_Evento] [varchar](150) NOT NULL,
	[horaInicio_Evento] [varchar](20) NOT NULL,
	[horaFin_Evento] [varchar](20) NOT NULL,
	[cstGSnCertificado_Evento] [decimal](5, 2) NOT NULL,
	[cstGCnCertificado_Evento] [decimal](5, 2) NOT NULL,
	[cstFCnCertificado_Evento] [decimal](5, 2) NOT NULL,
	[imagen_Evento] [varchar](250) NOT NULL,
	[usuReg_Evento] [int] NOT NULL,
	[fecReg_Evento] [datetime] NOT NULL,
	[capacidadD_Evento] [int] NULL,
	[capacidadT_Evento] [int] NULL,
 CONSTRAINT [PK__eventoBE__CFB931395FB337D6] PRIMARY KEY CLUSTERED 
(
	[id_Evento] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[eventoBE] ON
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (1, N'Congreso Nacional de Tecnologia', N'Feria para estudiantes relacionados a la tecnologia', 2, N'6 dias', N'Nov 21 2018 10:02AM', N'Nov 26 2018 12:00AM', N'8:00 AM', N'6:00 PM', CAST(80.00 AS Decimal(5, 2)), CAST(120.00 AS Decimal(5, 2)), CAST(100.00 AS Decimal(5, 2)), N'1.jpg', 12, CAST(0x0000A99F00A592FD AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (5, N'www', N'www', 2, N'21', N'2018-11-22', N'2018-11-22', N'08:00', N'21:00', CAST(12.00 AS Decimal(5, 2)), CAST(13.00 AS Decimal(5, 2)), CAST(12.00 AS Decimal(5, 2)), N'CIRCULO3.png', 12, CAST(0x0000000000000000 AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (21, N'aaaa', N'aaa', 2, N'aaa', N'2018-11-22', N'2018-11-22', N'08:00', N'14:00', CAST(12.00 AS Decimal(5, 2)), CAST(31.00 AS Decimal(5, 2)), CAST(19.00 AS Decimal(5, 2)), N'CIRCULO3.png', 12, CAST(0x0000A9A000A27801 AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (22, N'ga', N'ga', 1, N'12', N'2018-11-22', N'2018-11-22', N'02:02', N'21:00', CAST(12.00 AS Decimal(5, 2)), CAST(15.00 AS Decimal(5, 2)), CAST(14.00 AS Decimal(5, 2)), N'mobile.png', 12, CAST(0x0000A9A000B7DFEA AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (23, N'Pomencia Nacional para estudiantes de ciencia y tecnologia', N'ponencia nacional', 3, N'2 dias', N'2018-11-22', N'2018-11-24', N'08:00', N'05:00', CAST(50.00 AS Decimal(5, 2)), CAST(80.00 AS Decimal(5, 2)), CAST(70.00 AS Decimal(5, 2)), N'596f76ed4c502.jpeg', 12, CAST(0x0000A9A000B8CAA9 AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (25, N'ewqe', N'wqeweq', 2, N'15 dias', N' 2018-11-22', N' 2018-11-22 ', N'08:08', N'08:08', CAST(7.00 AS Decimal(5, 2)), CAST(7.00 AS Decimal(5, 2)), CAST(8.00 AS Decimal(5, 2)), N'copyright.png', 12, CAST(0x0000A9A000BE3C71 AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (26, N'Congreso Estudiantil ', N'congreso para alumnos de medicina', 1, N'1', N' 2018-11-28', N' 2018-11-28 ', N'08:00', N'17:00', CAST(10.00 AS Decimal(5, 2)), CAST(23.00 AS Decimal(5, 2)), CAST(20.00 AS Decimal(5, 2)), N'touch.png', 12, CAST(0x0000A9A5008DFC5B AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (29, N'CC', N'a', 7, N'a', N' 2018-12-04', N' 2018-12-06 ', N'12:12', N'11:01', CAST(12.00 AS Decimal(5, 2)), CAST(11.98 AS Decimal(5, 2)), CAST(12.00 AS Decimal(5, 2)), N'v1hhw5s1mfdd7h3o3tzg9hsl17ivigpxrdsrtga5cfmwayrxap2lji75lkjldrd.jpg', 12, CAST(0x0000A9A800B0366B AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (1029, N'FESTIVAL DE TECNOLOGIA', N'Evento par aestudiantes relacionados con la tecnologia', 1007, N'5 dias', N' 2018-12-03', N' 2018-12-08 ', N'08:00', N'17:00', CAST(80.00 AS Decimal(5, 2)), CAST(120.00 AS Decimal(5, 2)), CAST(100.00 AS Decimal(5, 2)), N'test.png', 12, CAST(0x0000A9AB00BBB4AD AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (1031, N'as', N'as', 1, N'12', N' 2018-12-05', N' 2018-11-29 ', N'01:01', N'15:04', CAST(222.00 AS Decimal(5, 2)), CAST(222.00 AS Decimal(5, 2)), CAST(222.00 AS Decimal(5, 2)), N'11411200_729545750488827_20918411980400211_o.jpg', 1, CAST(0x0000A9AD00B192A4 AS DateTime), 5, 5)
SET IDENTITY_INSERT [dbo].[eventoBE] OFF
/****** Object:  Table [dbo].[eventoAsistenteBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[eventoAsistenteBE](
	[id_EventoAsis] [int] IDENTITY(1,1) NOT NULL,
	[evento_EventoAsis] [int] NULL,
	[asistente_EventoAsis] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_EventoAsis] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[eventoAsistenteBE] ON
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (20, 1, 53)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (21, 1, 54)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (22, 1, 55)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (23, 1, 56)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (24, 1, 57)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (25, 1, 53)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (26, 1, 54)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (27, 1, 55)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (36, 1, 57)
INSERT [dbo].[eventoAsistenteBE] ([id_EventoAsis], [evento_EventoAsis], [asistente_EventoAsis]) VALUES (37, 1, 60)
SET IDENTITY_INSERT [dbo].[eventoAsistenteBE] OFF
/****** Object:  Table [dbo].[eventoDetalleBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[eventoDetalleBE](
	[id_EventoDet] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_EventoDet] [varchar](250) NOT NULL,
	[ponente_EventoDet] [int] NOT NULL,
	[evento_EventoDet] [int] NOT NULL,
	[estado_EventoDet] [int] NOT NULL,
	[fecReg_EventoDet] [datetime] NOT NULL,
	[usuReg_EventoDet] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_EventoDet] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[eventoDetalleBE] ON
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1, N'XD', 3, 23, 1, CAST(0x0000A9A800ABC132 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (2, N'congreso sss', 3, 5, 1, CAST(0x0000A9A800ABDB10 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (3, N'ponencia', 4, 21, 1, CAST(0x0000A9A800ABFE6B AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (4, N'aea', 2, 22, 1, CAST(0x0000A9A800AC1238 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (7, N'ajam', 4, 29, 0, CAST(0x0000A9A800C3CBCB AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (8, N'congresosssssss', 4, 26, 1, CAST(0x0000A9A800C3F6B1 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (9, N'matematicas', 4, 29, 1, CAST(0x0000A9A800C40DFA AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (10, N'ciencias', 2, 29, 1, CAST(0x0000A9A800C44925 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (14, N'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaahhhhhhh!!!', 2, 29, 1, CAST(0x0000A9A800D3F774 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (15, N'asasa ', 4, 23, 1, CAST(0x0000A9A800D5C6B7 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1006, N'xd ', 2, 29, 1, CAST(0x0000A9AB00B7866B AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1007, N'Festival ', 3, 1029, 1, CAST(0x0000A9AB00BBF2A8 AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1009, N'sss ', 31, 1031, 1, CAST(0x0000A9AD00B4B608 AS DateTime), 1)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1010, N'ss ', 31, 1031, 1, CAST(0x0000A9AD00B50C3B AS DateTime), 1)
SET IDENTITY_INSERT [dbo].[eventoDetalleBE] OFF
/****** Object:  Table [dbo].[pagoBE]    Script Date: 12/05/2018 11:05:12 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[pagoBE](
	[id_Pago] [int] IDENTITY(1,1) NOT NULL,
	[imagen_Pago] [varchar](max) NOT NULL,
	[eventoAsis_Pago] [int] NOT NULL,
	[estado_Pago] [int] NOT NULL,
	[usuApr_Pago] [int] NOT NULL,
	[fecha_Pago] [datetime] NOT NULL,
	[fechaApr_Pago] [date] NOT NULL,
 CONSTRAINT [PK__pagoBE__2A3B86B271D1E811] PRIMARY KEY CLUSTERED 
(
	[id_Pago] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[pagoBE] ON
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (14, N'0x00041041', 20, 1, 1, CAST(0x0000A9A800000000 AS DateTime), CAST(0x033F0B00 AS Date))
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (16, N'0x00041041', 25, 1, 1, CAST(0x0000A9A800000000 AS DateTime), CAST(0x033F0B00 AS Date))
SET IDENTITY_INSERT [dbo].[pagoBE] OFF
/****** Object:  Default [DF_comunidadAutoBE_fecReg]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[comunidadAutoBE] ADD  CONSTRAINT [DF_comunidadAutoBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
/****** Object:  Default [DF_convocatoriaBE_fecReg_Conv]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[convocatoriaBE] ADD  CONSTRAINT [DF_convocatoriaBE_fecReg_Conv]  DEFAULT (getdate()) FOR [fecReg_Conv]
GO
/****** Object:  Default [DF_entidadColaBE_fecReg]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[entidadColaBE] ADD  CONSTRAINT [DF_entidadColaBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
/****** Object:  Default [DF__especiali__descr__787EE5A0]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[especialidadBE] ADD  DEFAULT (NULL) FOR [descripcion_Espe]
GO
/****** Object:  Default [DF__especiali__estad__797309D9]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[especialidadBE] ADD  DEFAULT (NULL) FOR [estado_Espe]
GO
/****** Object:  Default [DF__eventoAsi__event__7A672E12]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoAsistenteBE] ADD  DEFAULT (NULL) FOR [evento_EventoAsis]
GO
/****** Object:  Default [DF__eventoAsi__asist__7B5B524B]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoAsistenteBE] ADD  DEFAULT (NULL) FOR [asistente_EventoAsis]
GO
/****** Object:  Default [DF_eventoBE_fecReg_Evento]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoBE] ADD  CONSTRAINT [DF_eventoBE_fecReg_Evento]  DEFAULT (getdate()) FOR [fecReg_Evento]
GO
/****** Object:  Default [DF_eventoDetalleBE_estado_EventoDet]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoDetalleBE] ADD  CONSTRAINT [DF_eventoDetalleBE_estado_EventoDet]  DEFAULT ((1)) FOR [estado_EventoDet]
GO
/****** Object:  Default [DF_eventoDetalleBE_fecReg_EventoDet]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoDetalleBE] ADD  CONSTRAINT [DF_eventoDetalleBE_fecReg_EventoDet]  DEFAULT (getdate()) FOR [fecReg_EventoDet]
GO
/****** Object:  Default [DF_is_message_date]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[is_message] ADD  CONSTRAINT [DF_is_message_date]  DEFAULT (getdate()) FOR [date]
GO
/****** Object:  Default [DF_is_message_status]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[is_message] ADD  CONSTRAINT [DF_is_message_status]  DEFAULT ('n') FOR [status]
GO
/****** Object:  Default [DF_noticiaBE_estado_Noticia]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[noticiaBE] ADD  CONSTRAINT [DF_noticiaBE_estado_Noticia]  DEFAULT ((1)) FOR [estado_Noticia]
GO
/****** Object:  Default [DF_noticiaBE_fecReg_Noticia]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[noticiaBE] ADD  CONSTRAINT [DF_noticiaBE_fecReg_Noticia]  DEFAULT (getdate()) FOR [fecReg_Noticia]
GO
/****** Object:  Default [DF_pagoBE_fecha_Pago]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[pagoBE] ADD  CONSTRAINT [DF_pagoBE_fecha_Pago]  DEFAULT (getdate()) FOR [fecha_Pago]
GO
/****** Object:  Default [DF_ponenteBE_fecReg_Ponente]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[ponenteBE] ADD  CONSTRAINT [DF_ponenteBE_fecReg_Ponente]  DEFAULT (getdate()) FOR [fecReg_Ponente]
GO
/****** Object:  Default [DF__proyectoB__usuRe__300424B4]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[proyectoBE] ADD  CONSTRAINT [DF__proyectoB__usuRe__300424B4]  DEFAULT (NULL) FOR [usuReg]
GO
/****** Object:  Default [DF_proyectoBE_fecReg]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[proyectoBE] ADD  CONSTRAINT [DF_proyectoBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
/****** Object:  Default [DF_resolucionBE_fecReg]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[resolucionBE] ADD  CONSTRAINT [DF_resolucionBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
/****** Object:  Default [DF_resultadoBE_fecReg_Resultado]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[resultadoBE] ADD  CONSTRAINT [DF_resultadoBE_fecReg_Resultado]  DEFAULT (getdate()) FOR [fecReg_Resultado]
GO
/****** Object:  Default [DF__suscripto__entid__7D439ABD]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[suscriptorBE] ADD  DEFAULT (NULL) FOR [entidad_Susc]
GO
/****** Object:  Default [DF__suscripto__profe__7E37BEF6]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[suscriptorBE] ADD  DEFAULT (NULL) FOR [profesion_Susc]
GO
/****** Object:  Default [DF__tipoEvent__descr__7F2BE32F]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [descripcion_TipoEv]
GO
/****** Object:  Default [DF__tipoEvent__estad__00200768]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [estado_TipoEv]
GO
/****** Object:  Default [DF__tipoEvent__fecRe__01142BA1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tipoEventoBE] ADD  CONSTRAINT [DF__tipoEvent__fecRe__01142BA1]  DEFAULT (getdate()) FOR [fecReg_TipoEv]
GO
/****** Object:  Default [DF__tipoEvent__usuRe__02084FDA]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [usuReg_TipoEv]
GO
/****** Object:  Default [DF__usuarioBE__usuRe__02FC7413]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[usuarioBE] ADD  DEFAULT (NULL) FOR [usuReg_Usu]
GO
/****** Object:  Default [DF_usuarioBE_fecReg_Usu]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[usuarioBE] ADD  CONSTRAINT [DF_usuarioBE_fecReg_Usu]  DEFAULT (getdate()) FOR [fecReg_Usu]
GO
/****** Object:  Check [CK__is_messag__statu__6EC0713C]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[is_message]  WITH CHECK ADD  CONSTRAINT [CK__is_messag__statu__6EC0713C] CHECK  (([status]='N' OR [status]='Y'))
GO
ALTER TABLE [dbo].[is_message] CHECK CONSTRAINT [CK__is_messag__statu__6EC0713C]
GO
/****** Object:  ForeignKey [fk_AsistenteBE_TipoAsistenteBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[asistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_AsistenteBE_TipoAsistenteBE1] FOREIGN KEY([tipoAsis_Asis])
REFERENCES [dbo].[tipoAsistenteBE] ([id_TipoAs])
GO
ALTER TABLE [dbo].[asistenteBE] CHECK CONSTRAINT [fk_AsistenteBE_TipoAsistenteBE1]
GO
/****** Object:  ForeignKey [fk_AsistenteBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[asistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_AsistenteBE_UsuarioBE1] FOREIGN KEY([usuReg_Asis])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[asistenteBE] CHECK CONSTRAINT [fk_AsistenteBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_ComunidadProyBE_ComunidadAutoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[comunidadProyBE]  WITH CHECK ADD  CONSTRAINT [fk_ComunidadProyBE_ComunidadAutoBE1] FOREIGN KEY([comunidad_CP])
REFERENCES [dbo].[comunidadAutoBE] ([id_CA])
GO
ALTER TABLE [dbo].[comunidadProyBE] CHECK CONSTRAINT [fk_ComunidadProyBE_ComunidadAutoBE1]
GO
/****** Object:  ForeignKey [fk_ComunidadProyBE_ProyectoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[comunidadProyBE]  WITH CHECK ADD  CONSTRAINT [fk_ComunidadProyBE_ProyectoBE1] FOREIGN KEY([proyecto_CP])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[comunidadProyBE] CHECK CONSTRAINT [fk_ComunidadProyBE_ProyectoBE1]
GO
/****** Object:  ForeignKey [fk_ConvocatoriaBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[convocatoriaBE]  WITH CHECK ADD  CONSTRAINT [fk_ConvocatoriaBE_UsuarioBE1] FOREIGN KEY([usuReg_Conv])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[convocatoriaBE] CHECK CONSTRAINT [fk_ConvocatoriaBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_EntidadCProyBE_EntidadColaBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[entidadCProyBE]  WITH CHECK ADD  CONSTRAINT [fk_EntidadCProyBE_EntidadColaBE1] FOREIGN KEY([entidadC_ECP])
REFERENCES [dbo].[entidadColaBE] ([id_EntidadCola])
GO
ALTER TABLE [dbo].[entidadCProyBE] CHECK CONSTRAINT [fk_EntidadCProyBE_EntidadColaBE1]
GO
/****** Object:  ForeignKey [fk_EntidadCProyBE_ProyectoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[entidadCProyBE]  WITH CHECK ADD  CONSTRAINT [fk_EntidadCProyBE_ProyectoBE1] FOREIGN KEY([proyecto_ECP])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[entidadCProyBE] CHECK CONSTRAINT [fk_EntidadCProyBE_ProyectoBE1]
GO
/****** Object:  ForeignKey [fk_EscuelaBE_FacultadBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[escuelaBE]  WITH CHECK ADD  CONSTRAINT [fk_EscuelaBE_FacultadBE1] FOREIGN KEY([facultadId_Escuela])
REFERENCES [dbo].[facultadBE] ([id_Facu])
GO
ALTER TABLE [dbo].[escuelaBE] CHECK CONSTRAINT [fk_EscuelaBE_FacultadBE1]
GO
/****** Object:  ForeignKey [fk_EventoAsitente_AsistenteBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoAsistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoAsitente_AsistenteBE1] FOREIGN KEY([asistente_EventoAsis])
REFERENCES [dbo].[asistenteBE] ([id_Asis])
GO
ALTER TABLE [dbo].[eventoAsistenteBE] CHECK CONSTRAINT [fk_EventoAsitente_AsistenteBE1]
GO
/****** Object:  ForeignKey [fk_EventoAsitente_EventoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoAsistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoAsitente_EventoBE1] FOREIGN KEY([evento_EventoAsis])
REFERENCES [dbo].[eventoBE] ([id_Evento])
GO
ALTER TABLE [dbo].[eventoAsistenteBE] CHECK CONSTRAINT [fk_EventoAsitente_EventoBE1]
GO
/****** Object:  ForeignKey [fk_EventoBE_TipoEventoBE]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoBE_TipoEventoBE] FOREIGN KEY([tipo_Evento])
REFERENCES [dbo].[tipoEventoBE] ([id_TipoEv])
GO
ALTER TABLE [dbo].[eventoBE] CHECK CONSTRAINT [fk_EventoBE_TipoEventoBE]
GO
/****** Object:  ForeignKey [fk_EventoBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoBE_UsuarioBE1] FOREIGN KEY([usuReg_Evento])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[eventoBE] CHECK CONSTRAINT [fk_EventoBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_EventoDetalleBE_EventoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_EventoBE1] FOREIGN KEY([evento_EventoDet])
REFERENCES [dbo].[eventoBE] ([id_Evento])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_EventoBE1]
GO
/****** Object:  ForeignKey [fk_EventoDetalleBE_PonenteBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_PonenteBE1] FOREIGN KEY([ponente_EventoDet])
REFERENCES [dbo].[ponenteBE] ([id_Ponente])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_PonenteBE1]
GO
/****** Object:  ForeignKey [fk_EventoDetalleBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_UsuarioBE1] FOREIGN KEY([usuReg_EventoDet])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_FechaProyBE_FechaEjeBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[fechaProyBE]  WITH CHECK ADD  CONSTRAINT [fk_FechaProyBE_FechaEjeBE1] FOREIGN KEY([fechaEje_FP])
REFERENCES [dbo].[fechaEjeBE] ([id_FE])
GO
ALTER TABLE [dbo].[fechaProyBE] CHECK CONSTRAINT [fk_FechaProyBE_FechaEjeBE1]
GO
/****** Object:  ForeignKey [fk_FechaProyBE_ProyectoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[fechaProyBE]  WITH CHECK ADD  CONSTRAINT [fk_FechaProyBE_ProyectoBE1] FOREIGN KEY([proyecto_FP])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[fechaProyBE] CHECK CONSTRAINT [fk_FechaProyBE_ProyectoBE1]
GO
/****** Object:  ForeignKey [FK__fondoGPro__idFon__151B244E]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[fondoGProyBE]  WITH CHECK ADD FOREIGN KEY([idFondo])
REFERENCES [dbo].[fondoGobBE] ([id_fondoGob])
GO
/****** Object:  ForeignKey [FK__fondoGPro__idPro__14270015]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[fondoGProyBE]  WITH CHECK ADD  CONSTRAINT [FK__fondoGPro__idPro__14270015] FOREIGN KEY([idProy])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[fondoGProyBE] CHECK CONSTRAINT [FK__fondoGPro__idPro__14270015]
GO
/****** Object:  ForeignKey [fk_NosotrosBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[nosotrosBE]  WITH CHECK ADD  CONSTRAINT [fk_NosotrosBE_UsuarioBE1] FOREIGN KEY([usuMod_Nos])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[nosotrosBE] CHECK CONSTRAINT [fk_NosotrosBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_NoticiaBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[noticiaBE]  WITH CHECK ADD  CONSTRAINT [fk_NoticiaBE_UsuarioBE1] FOREIGN KEY([usuReg_Noticia])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[noticiaBE] CHECK CONSTRAINT [fk_NoticiaBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_ObjetivoPryBE_ObjetivoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[objetivoPryBE]  WITH CHECK ADD  CONSTRAINT [fk_ObjetivoPryBE_ObjetivoBE1] FOREIGN KEY([objetivo_ObjetivoPry])
REFERENCES [dbo].[objetivoBE] ([id_Objetivo])
GO
ALTER TABLE [dbo].[objetivoPryBE] CHECK CONSTRAINT [fk_ObjetivoPryBE_ObjetivoBE1]
GO
/****** Object:  ForeignKey [fk_ObjetivoPryBE_ProyectoBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[objetivoPryBE]  WITH CHECK ADD  CONSTRAINT [fk_ObjetivoPryBE_ProyectoBE1] FOREIGN KEY([proyecto_ObjetivoPry])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[objetivoPryBE] CHECK CONSTRAINT [fk_ObjetivoPryBE_ProyectoBE1]
GO
/****** Object:  ForeignKey [fk_PagoBE_EventoAsitente1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[pagoBE]  WITH CHECK ADD  CONSTRAINT [fk_PagoBE_EventoAsitente1] FOREIGN KEY([eventoAsis_Pago])
REFERENCES [dbo].[eventoAsistenteBE] ([id_EventoAsis])
GO
ALTER TABLE [dbo].[pagoBE] CHECK CONSTRAINT [fk_PagoBE_EventoAsitente1]
GO
/****** Object:  ForeignKey [fk_PagoBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[pagoBE]  WITH CHECK ADD  CONSTRAINT [fk_PagoBE_UsuarioBE1] FOREIGN KEY([usuApr_Pago])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[pagoBE] CHECK CONSTRAINT [fk_PagoBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_PonenteBE_Especialidad1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_Especialidad1] FOREIGN KEY([especialidad_Ponente])
REFERENCES [dbo].[especialidadBE] ([id_Espe])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_Especialidad1]
GO
/****** Object:  ForeignKey [fk_PonenteBE_Universidad1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_Universidad1] FOREIGN KEY([univProc_Ponente])
REFERENCES [dbo].[universidadBE] ([id_Uni])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_Universidad1]
GO
/****** Object:  ForeignKey [fk_PonenteBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_UsuarioBE1] FOREIGN KEY([usuReg_Ponente])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_ProyectoBE_EscuelaBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[proyectoBE]  WITH CHECK ADD  CONSTRAINT [fk_ProyectoBE_EscuelaBE1] FOREIGN KEY([escuelaId_Proyecto])
REFERENCES [dbo].[escuelaBE] ([id_Escuela])
GO
ALTER TABLE [dbo].[proyectoBE] CHECK CONSTRAINT [fk_ProyectoBE_EscuelaBE1]
GO
/****** Object:  ForeignKey [fk_ProyectoBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[proyectoBE]  WITH CHECK ADD  CONSTRAINT [fk_ProyectoBE_UsuarioBE1] FOREIGN KEY([usuReg])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[proyectoBE] CHECK CONSTRAINT [fk_ProyectoBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_Resolucion_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[resolucionBE]  WITH CHECK ADD  CONSTRAINT [fk_Resolucion_UsuarioBE1] FOREIGN KEY([usuReg])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[resolucionBE] CHECK CONSTRAINT [fk_Resolucion_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_ResultadoBE_ConvocatoriaBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[resultadoBE]  WITH CHECK ADD  CONSTRAINT [fk_ResultadoBE_ConvocatoriaBE1] FOREIGN KEY([concurso_Resultado])
REFERENCES [dbo].[convocatoriaBE] ([id_Conv])
GO
ALTER TABLE [dbo].[resultadoBE] CHECK CONSTRAINT [fk_ResultadoBE_ConvocatoriaBE1]
GO
/****** Object:  ForeignKey [fk_ResultadoBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[resultadoBE]  WITH CHECK ADD  CONSTRAINT [fk_ResultadoBE_UsuarioBE1] FOREIGN KEY([usuReg_Resultado])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[resultadoBE] CHECK CONSTRAINT [fk_ResultadoBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_SuscriptorBE_ProfesionBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[suscriptorBE]  WITH CHECK ADD  CONSTRAINT [fk_SuscriptorBE_ProfesionBE1] FOREIGN KEY([profesion_Susc])
REFERENCES [dbo].[profesionBE] ([id_Prof])
GO
ALTER TABLE [dbo].[suscriptorBE] CHECK CONSTRAINT [fk_SuscriptorBE_ProfesionBE1]
GO
/****** Object:  ForeignKey [fk_TesisBE_EscuelaBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tesisBE]  WITH CHECK ADD  CONSTRAINT [fk_TesisBE_EscuelaBE1] FOREIGN KEY([escuelaId_Tesis])
REFERENCES [dbo].[escuelaBE] ([id_Escuela])
GO
ALTER TABLE [dbo].[tesisBE] CHECK CONSTRAINT [fk_TesisBE_EscuelaBE1]
GO
/****** Object:  ForeignKey [fk_TipoEventoBE_UsuarioBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[tipoEventoBE]  WITH CHECK ADD  CONSTRAINT [fk_TipoEventoBE_UsuarioBE1] FOREIGN KEY([usuReg_TipoEv])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[tipoEventoBE] CHECK CONSTRAINT [fk_TipoEventoBE_UsuarioBE1]
GO
/****** Object:  ForeignKey [fk_UsuarioBE_RolBE1]    Script Date: 12/05/2018 11:05:12 ******/
ALTER TABLE [dbo].[usuarioBE]  WITH CHECK ADD  CONSTRAINT [fk_UsuarioBE_RolBE1] FOREIGN KEY([id_Rol_Usu])
REFERENCES [dbo].[rolBE] ([id_Rol])
GO
ALTER TABLE [dbo].[usuarioBE] CHECK CONSTRAINT [fk_UsuarioBE_RolBE1]
GO
