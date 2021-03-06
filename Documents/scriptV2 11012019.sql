USE [DB_VicerrectoradoInv]
GO
/****** Object:  Table [dbo].[alerta]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[alerta](
	[id_alerta] [int] IDENTITY(1,1) NOT NULL,
	[titulo] [varchar](100) NULL,
	[descripcion] [varchar](500) NULL,
	[imagen] [varchar](100) NULL,
	[estado] [tinyint] NULL,
 CONSTRAINT [PK__alerta__1227953E1CDC0365] PRIMARY KEY CLUSTERED 
(
	[id_alerta] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[asistenteBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[convocatoriaBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[entidadColaBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[entidadCProyBE]    Script Date: 11/01/2019 11:46:35 ******/
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[escuelaBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[escuelaBE](
	[id_Escuela] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Escuela] [varchar](100) NOT NULL,
	[facultadId_Escuela] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Escuela] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[especialidadBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[especialidadBE](
	[id_Espe] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Espe] [varchar](45) NULL,
	[estado_Espe] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Espe] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[eventoAsistenteBE]    Script Date: 11/01/2019 11:46:35 ******/
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[eventoBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[eventoDetalleBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[facultadBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[facultadBE](
	[id_Facu] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Facu] [varchar](100) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Facu] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[fechaEjeBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fechaEjeBE](
	[id_FE] [int] IDENTITY(1,1) NOT NULL,
	[actividad_FE] [varchar](150) NOT NULL,
	[fecha] [varchar](150) NOT NULL,
 CONSTRAINT [PK__fechaEje__0148F2E046DD6B89] PRIMARY KEY CLUSTERED 
(
	[id_FE] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[fechaProyBE]    Script Date: 11/01/2019 11:46:35 ******/
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[fondoGobBE]    Script Date: 11/01/2019 11:46:35 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[fondoGobBE](
	[id_fondoGob] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_fondoGob] [varchar](50) NULL,
	[estado_fondoGob] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_fondoGob] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[fondoGProyBE]    Script Date: 11/01/2019 11:46:35 ******/
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[is_message]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[nosotrosBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[nosotrosBE](
	[id_Nos] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Nos] [varchar](500) NOT NULL,
	[vision_Nos] [varchar](500) NOT NULL,
	[mision_Nos] [varchar](500) NOT NULL,
	[organigrama_Nos] [varchar](250) NULL,
	[directorio_Nos] [varchar](250) NULL,
	[estado_Nos] [int] NULL,
	[usuMod_Nos] [int] NULL,
	[fecMod_Nos] [varchar](150) NULL,
 CONSTRAINT [PK__nosotros__7748B0669F41B23C] PRIMARY KEY CLUSTERED 
(
	[id_Nos] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[noticiaBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[objetivoBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[objetivoBE](
	[id_Objetivo] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](200) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Objetivo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[objetivoPryBE]    Script Date: 11/01/2019 11:46:36 ******/
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[pagoBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[pagoBE](
	[id_Pago] [int] IDENTITY(1,1) NOT NULL,
	[imagen_Pago] [varchar](max) NOT NULL,
	[eventoAsis_Pago] [int] NOT NULL,
	[estado_Pago] [int] NULL,
	[usuApr_Pago] [int] NOT NULL,
	[fecha_Pago] [varchar](50) NOT NULL,
	[fechaApr_Pago] [varchar](50) NULL,
 CONSTRAINT [PK__pagoBE__2A3B86B271D1E811] PRIMARY KEY CLUSTERED 
(
	[id_Pago] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](191) NOT NULL,
	[token] [nvarchar](191) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[ponenteBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[proyectoBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[resolucionBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[resultadoBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[revistaBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[revistaBE](
	[id_revista] [int] IDENTITY(1,1) NOT NULL,
	[vol] [varchar](10) NULL,
	[num] [varchar](10) NULL,
	[anio] [varchar](10) NULL,
	[imagenRev] [varchar](100) NULL,
	[id_tipoReRevista] [int] NOT NULL,
 CONSTRAINT [PK__revistaB__901CD3282FC0D7E9] PRIMARY KEY CLUSTERED 
(
	[id_revista] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[rolBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[rolBE](
	[id_Rol] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_Rol] [varchar](100) NOT NULL,
	[estado_Rol] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Rol] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[suscriptorBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[suscriptorBE](
	[id_Susc] [int] IDENTITY(1,1) NOT NULL,
	[nombres_Susc] [varchar](45) NOT NULL,
	[apellidos_Susc] [varchar](45) NOT NULL,
	[correo_Susc] [varchar](45) NOT NULL,
	[estado_Susc] [varchar](10) NOT NULL,
 CONSTRAINT [PK__suscript__52BCB9E0BBA4845C] PRIMARY KEY CLUSTERED 
(
	[id_Susc] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[teses]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[teses](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[tesis] [nvarchar](191) NOT NULL,
	[facultad] [nvarchar](191) NOT NULL,
	[escuela] [nvarchar](191) NOT NULL,
	[fecha] [datetime] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
	[deleted_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tesisBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tipoAsistenteBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tipoAsistenteBE](
	[id_TipoAs] [int] IDENTITY(1,1) NOT NULL,
	[descripcion_TipoAs] [varchar](50) NOT NULL,
	[estado_TipoAs] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_TipoAs] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tipoEventoBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tipoRevistaBE]    Script Date: 11/01/2019 11:46:36 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tipoRevistaBE](
	[id_tipoRevista] [int] IDENTITY(1,1) NOT NULL,
	[nombre] [varchar](100) NULL,
	[imagenTipo] [varchar](100) NULL,
	[estado] [int] NULL,
 CONSTRAINT [PK__tipoRevi__7B5DD6B704630EDD] PRIMARY KEY CLUSTERED 
(
	[id_tipoRevista] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[universidadBE]    Script Date: 11/01/2019 11:46:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[universidadBE](
	[id_Uni] [int] IDENTITY(1,1) NOT NULL,
	[nombre_Uni] [varchar](80) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Uni] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 11/01/2019 11:46:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](191) NOT NULL,
	[email] [nvarchar](191) NOT NULL,
	[password] [nvarchar](191) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[usuarioBE]    Script Date: 11/01/2019 11:46:37 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
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
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[alerta] ON 

INSERT [dbo].[alerta] ([id_alerta], [titulo], [descripcion], [imagen], [estado]) VALUES (1, N'Matricula', N'Se dio inicio a las matricula regular para los estudiantes de nuestra casa de estudios', N'1.jpg', 1)
INSERT [dbo].[alerta] ([id_alerta], [titulo], [descripcion], [imagen], [estado]) VALUES (2, N'Cancela Proceso deNivelacion ', N'Por recomendacion de SUNEDU la universidad decide cancelar el proceso de nivelacion para este verano 2019, los estudiantes enfurecidos concideran hacer huelga', N'2.jpg', 1)
INSERT [dbo].[alerta] ([id_alerta], [titulo], [descripcion], [imagen], [estado]) VALUES (6, N'aaaaaaa ', N'Contadordecaracteres.com es un contador automático de caracteres y palabras en un texto. Solo colocque el cursor dentro de la caja de textos y comienze a escribir y el contador de caracteres comenzara a contar sus palabras y caracteres a medida de que usted vaya escribiendo.
También puede copiar y pegar bloques de texto de un documento que tengas ya escrito. Solo pegue el texto dentro de la caja del contador y rápidamente se mostrara la cantidad', N'bf3f8c533232b1e8322c34f9731aa9f9.png', 0)
SET IDENTITY_INSERT [dbo].[alerta] OFF
SET IDENTITY_INSERT [dbo].[asistenteBE] ON 

INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (53, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (54, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis1@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (55, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis2@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (56, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis3@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (57, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis4@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
INSERT [dbo].[asistenteBE] ([id_Asis], [dni_Asis], [nombres_Asis], [apellidos_Asis], [especialidad_Asis], [universidadProc_Asis], [fecNac_Asis], [correo_Asis], [telefono_Asis], [fecReg_Asis], [usuReg_Asis], [tipoAsis_Asis]) VALUES (60, N'75119312', N'huaranga', N'Carreño', N'Sistemas', 1, CAST(N'1996-08-01' AS Date), N'roviseis5@gmail.com', N'931697515', CAST(N'2018-11-29' AS Date), 1, 1)
SET IDENTITY_INSERT [dbo].[asistenteBE] OFF
SET IDENTITY_INSERT [dbo].[convocatoriaBE] ON 

INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (24, N'Personal CAS', N'app-developer.png', N'2018-11-19', 1, 12, CAST(N'1900-01-01T00:00:00.000' AS DateTime))
INSERT [dbo].[convocatoriaBE] ([id_Conv], [descripcion_Conv], [imagen_Conv], [fecha_Conv], [estado_Conv], [usuReg_Conv], [fecReg_Conv]) VALUES (32, N'CONCURSO FONDO FOCAM', N'M4e-App-Mi-Beca-Portada-759x500.jpg', N'2019-01-09', 1, 1, CAST(N'2019-01-04T10:02:31.907' AS DateTime))
SET IDENTITY_INSERT [dbo].[convocatoriaBE] OFF
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
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (35, N'EAP Ingenieria de Software', 9)
INSERT [dbo].[escuelaBE] ([id_Escuela], [nombre_Escuela], [facultadId_Escuela]) VALUES (53, N'EAP Enfermeria', 8)
SET IDENTITY_INSERT [dbo].[escuelaBE] OFF
SET IDENTITY_INSERT [dbo].[especialidadBE] ON 

INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (1, N'Ingeniero de Sistemas', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (2, N'Enfermera', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (3, N'Obtetriz', 1)
INSERT [dbo].[especialidadBE] ([id_Espe], [descripcion_Espe], [estado_Espe]) VALUES (4, N'Abogado', 1)
SET IDENTITY_INSERT [dbo].[especialidadBE] OFF
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
SET IDENTITY_INSERT [dbo].[eventoBE] ON 

INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (1, N'Congreso Nacional de Tecnologia', N'Feria para estudiantes relacionados a la tecnologia', 2, N'6 dias', N'2019-11-22', N'2018-11-24', N'08:00', N'05:00', CAST(80.00 AS Decimal(5, 2)), CAST(120.00 AS Decimal(5, 2)), CAST(100.00 AS Decimal(5, 2)), N'1.jpg', 12, CAST(N'2018-11-21T10:02:50.230' AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (23, N'Pomencia Nacional para estudiantes de ciencia y tecnologia', N'ponencia nacional', 3, N'2 dias', N'2018-01-26', N'2018-11-24', N'08:00', N'05:00', CAST(50.00 AS Decimal(5, 2)), CAST(80.00 AS Decimal(5, 2)), CAST(70.00 AS Decimal(5, 2)), N'analysis.png', 12, CAST(N'2018-11-22T11:12:48.350' AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (26, N'Congreso Estudiantil ', N'congreso para alumnos de medicina', 1, N'1', N'2018-02-29', N'2018-11-24', N'08:00', N'17:00', CAST(10.00 AS Decimal(5, 2)), CAST(23.00 AS Decimal(5, 2)), CAST(20.00 AS Decimal(5, 2)), N'icon-mantenimiento.png', 12, CAST(N'2018-11-27T08:36:57.263' AS DateTime), 5, 5)
INSERT [dbo].[eventoBE] ([id_Evento], [nombre_Evento], [descripcion_Evento], [tipo_Evento], [duracion_Evento], [fecInicio_Evento], [fecFin_Evento], [horaInicio_Evento], [horaFin_Evento], [cstGSnCertificado_Evento], [cstGCnCertificado_Evento], [cstFCnCertificado_Evento], [imagen_Evento], [usuReg_Evento], [fecReg_Evento], [capacidadD_Evento], [capacidadT_Evento]) VALUES (1029, N'FESTIVAL DE TECNOLOGIA', N'Evento par aestudiantes relacionados con la tecnologia', 1007, N'5 dias', N' 2018-12-03', N' 2018-12-08 ', N'08:00', N'17:00', CAST(80.00 AS Decimal(5, 2)), CAST(120.00 AS Decimal(5, 2)), CAST(100.00 AS Decimal(5, 2)), N'test.png', 12, CAST(N'2018-12-03T11:23:24.950' AS DateTime), 5, 5)
SET IDENTITY_INSERT [dbo].[eventoBE] OFF
SET IDENTITY_INSERT [dbo].[eventoDetalleBE] ON 

INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (1, N'Tecnologia y Ciencias Perù', 3, 23, 1, CAST(N'2018-11-30T10:25:20.380' AS DateTime), 12)
INSERT [dbo].[eventoDetalleBE] ([id_EventoDet], [descripcion_EventoDet], [ponente_EventoDet], [evento_EventoDet], [estado_EventoDet], [fecReg_EventoDet], [usuReg_EventoDet]) VALUES (8, N'Congreso Regional ', 4, 26, 1, CAST(N'2018-11-30T11:53:28.910' AS DateTime), 12)
SET IDENTITY_INSERT [dbo].[eventoDetalleBE] OFF
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
SET IDENTITY_INSERT [dbo].[fechaEjeBE] ON 

INSERT [dbo].[fechaEjeBE] ([id_FE], [actividad_FE], [fecha]) VALUES (1, N'Exploracion', N'2018-12-19')
INSERT [dbo].[fechaEjeBE] ([id_FE], [actividad_FE], [fecha]) VALUES (2, N'Desarrollo Conceptual', N'2018-12-19')
INSERT [dbo].[fechaEjeBE] ([id_FE], [actividad_FE], [fecha]) VALUES (3, N'Apunte Fotografico', N'2018-12-24')
INSERT [dbo].[fechaEjeBE] ([id_FE], [actividad_FE], [fecha]) VALUES (4, N'Investigacion', N'2018-12-25')
SET IDENTITY_INSERT [dbo].[fechaEjeBE] OFF
SET IDENTITY_INSERT [dbo].[fechaProyBE] ON 

INSERT [dbo].[fechaProyBE] ([id_FP], [proyecto_FP], [fechaEje_FP]) VALUES (1, 1, 1)
INSERT [dbo].[fechaProyBE] ([id_FP], [proyecto_FP], [fechaEje_FP]) VALUES (14, 9, 1)
INSERT [dbo].[fechaProyBE] ([id_FP], [proyecto_FP], [fechaEje_FP]) VALUES (15, 10, 3)
INSERT [dbo].[fechaProyBE] ([id_FP], [proyecto_FP], [fechaEje_FP]) VALUES (17, 16, 4)
INSERT [dbo].[fechaProyBE] ([id_FP], [proyecto_FP], [fechaEje_FP]) VALUES (18, 17, 4)
SET IDENTITY_INSERT [dbo].[fechaProyBE] OFF
SET IDENTITY_INSERT [dbo].[fondoGobBE] ON 

INSERT [dbo].[fondoGobBE] ([id_fondoGob], [descripcion_fondoGob], [estado_fondoGob]) VALUES (1, N'FOCAM', 1)
INSERT [dbo].[fondoGobBE] ([id_fondoGob], [descripcion_fondoGob], [estado_fondoGob]) VALUES (2, N'FEDU', 1)
SET IDENTITY_INSERT [dbo].[fondoGobBE] OFF
SET IDENTITY_INSERT [dbo].[fondoGProyBE] ON 

INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (1, 1, 2)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (8, 10, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (9, 9, 2)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (10, 1, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (11, 16, 1)
INSERT [dbo].[fondoGProyBE] ([id_FGP], [idProy], [idFondo]) VALUES (12, 17, 2)
SET IDENTITY_INSERT [dbo].[fondoGProyBE] OFF
SET IDENTITY_INSERT [dbo].[is_message] ON 

INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (1, CAST(N'2018-10-25T00:00:00.000' AS DateTime), N'brayan', N'rivera_genio@hotmail.com', N'help me please!!', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (13, CAST(N'2018-11-27T12:33:17.660' AS DateTime), N'pierina', N'ivnne@hotmail.com', N'i need your help!!', N'y')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (15, CAST(N'2019-01-04T10:49:05.963' AS DateTime), N'Edynson Pascasia Romero', N'edy@hotmail.com', N'podrian enviarme informacion acerca del evento del dia 12/02/2019', N'n')
INSERT [dbo].[is_message] ([message_id], [date], [name], [email], [message], [status]) VALUES (16, CAST(N'2019-01-04T10:54:04.947' AS DateTime), N'Alejandro Magno', N'alejMan@yahoo.com', N'Si el propietario de un bien   inmueble ubicado en el país es un persona natural no domiciliada que lo   alquila a una persona natural o jurídica domiciliada ¿Quién es el obligado a efectuar el pago del impuesto a la renta de primera categoría?', N'y')
SET IDENTITY_INSERT [dbo].[is_message] OFF
SET IDENTITY_INSERT [dbo].[migrations] ON 

INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (1, N'2014_10_12_000000_create_users_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (2, N'2014_10_12_100000_create_password_resets_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (3, N'2018_12_02_214638_create_teses_table', 1)
SET IDENTITY_INSERT [dbo].[migrations] OFF
SET IDENTITY_INSERT [dbo].[nosotrosBE] ON 

INSERT [dbo].[nosotrosBE] ([id_Nos], [descripcion_Nos], [vision_Nos], [mision_Nos], [organigrama_Nos], [directorio_Nos], [estado_Nos], [usuMod_Nos], [fecMod_Nos]) VALUES (18, N'Vicerrectorado de Investigacion Universidad Nacional Jose Faustino Sanchez Carrion', N'“Institución académica con carreras profesionales acreditadas internacionalmente por su alta calidad en investigación científica e innovación tecnológica, comprometida con el emprendimiento, la competitividad del capital humano en los ámbitos públicos y privados, con responsabilidad social y desarrollo sostenible”. ', N'“Formar profesionales líderes en ciencias, ingeniería y arquitectura, en interacción permanente con la sociedad peruana, de manera humanista, científica y tecnológica con una clara conciencia de nuestro país como realidad multicultural, con criterios de calidad, pertinencia y responsabilidad social, a fin de brindar una formación centrada en la investigación, la creación y el desarrollo de tecnologías para impulsar el desarrollo del país.”', N'Database-Management-Systems-DBMS-Market.jpg', N'Dr. José Legua Cárdenas - Vicerrector de Investigación', 1, 1, N'2019-01-03')
SET IDENTITY_INSERT [dbo].[nosotrosBE] OFF
SET IDENTITY_INSERT [dbo].[noticiaBE] ON 

INSERT [dbo].[noticiaBE] ([id_Noticia], [descripcion_Noticia], [fecha_Noticia], [estado_Noticia], [imagen_Noticia], [usuReg_Noticia], [fecReg_Noticia], [titulo_Noticia]) VALUES (1, N'Se hace de conocimiento a los interesados que se aprobó el cronograma académico general 2019 - I, en donde figuran las fechas para las actividades para el proceso de matrícula (Reactualización, matrícula regular, de ingresantes, reserva y rfectificacion); las fechas de inicio y culminación del ciclo; así como, programación de exámenes, ingreso de notas y publicación de promedios, entre otros', N'2018-12-01', 1, N'telefono-movil-jovenes-usando-dispositivos-electronicos.jpg', 12, CAST(N'2018-12-04T09:58:23.263' AS DateTime), N'INICIO DE CLASES DEL SEMESTRE 2019 - I')
SET IDENTITY_INSERT [dbo].[noticiaBE] OFF
SET IDENTITY_INSERT [dbo].[pagoBE] ON 

INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (14, N'pago1.png', 20, 1, 1, N'2018-11-30', N'2018-11-30')
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (16, N'pago2.png', 25, 1, 1, N'2018-12-25', N'2018-11-30')
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (17, N'pago3.png', 20, 2, 1, N'2019-11-20', NULL)
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (18, N'pago4.png', 20, 2, 1, N'2019-01-01', NULL)
INSERT [dbo].[pagoBE] ([id_Pago], [imagen_Pago], [eventoAsis_Pago], [estado_Pago], [usuApr_Pago], [fecha_Pago], [fechaApr_Pago]) VALUES (19, N'pago5.png', 25, 1, 1, N'2018-01-21', N'2019-01-11')
SET IDENTITY_INSERT [dbo].[pagoBE] OFF
SET IDENTITY_INSERT [dbo].[ponenteBE] ON 

INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (2, N'74306051', N'Luiggi', N'Rivera Santiago', 1, 1, N'1997-09-13', N'rivera_genio@hotmail.com', N'910528921', 12, CAST(N'2018-11-21T00:00:00.000' AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (3, N'75119312', N'Rodrigo', N'Huaranga Carreño', 2, 3, N'1996-08-01', N'rovies06@hotmail.com', N'948562412', 12, CAST(N'2018-11-21T09:41:17.130' AS DateTime))
INSERT [dbo].[ponenteBE] ([id_Ponente], [dni_Ponente], [nombres_Ponente], [apellidos_Ponente], [especialidad_Ponente], [univProc_Ponente], [fecNac_Ponente], [correo_Ponente], [telefono_Ponente], [usuReg_Ponente], [fecReg_Ponente]) VALUES (4, N'72461257', N'Rusbel ', N'Nieto Rosado', 3, 5, N'1996-05-06', N'rusbi@hotmail.com', N'962956654', 12, CAST(N'2018-11-21T09:42:32.430' AS DateTime))
SET IDENTITY_INSERT [dbo].[ponenteBE] OFF
SET IDENTITY_INSERT [dbo].[proyectoBE] ON 

INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (1, N'Implementacion de Plataforma Web', N'Implementacion', CAST(20000.00 AS Decimal(9, 2)), N'http://app.unjfsc.edu.pe/tramites/', 1, 1, CAST(N'2018-10-29T00:00:00.000' AS DateTime), 2)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (8, N'Implementacion de un Sistema Web', N'Implementacion de un Sistema Web para administrar la pagina web de vicerrectorado de investigacion UNJFSC ', CAST(50000.00 AS Decimal(9, 2)), N'http://www.unjfsc.edu.pe/investigacion.php ', 1, 8, CAST(N'2018-12-27T12:16:31.610' AS DateTime), 2)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (9, N'Implementacion de Sistema Web', N'Implementacion de un sistema web para administrar la pagina de Vicerrectorado de Investigacion ', CAST(5000.00 AS Decimal(9, 2)), N'http://www.unjfsc.edu.pe/investigacion.php ', 1, 1, CAST(N'2018-12-27T12:16:47.743' AS DateTime), 2)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (10, N'Desarrollo e Implementacion de un Sistema Web', N'Implementacion de un sistema web para la unidad de tramites de la escuela de Ing de Sistemas Hiacho 2018 ', CAST(7452.00 AS Decimal(9, 2)), N'http://www.unjfsc.edu.pe/investigacion.php ', 1, 10, CAST(N'2018-12-27T12:18:26.753' AS DateTime), 2)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (16, N'Implementacion de plataforma web', N'Implementacion de plataforma web para vicerrectorado de Investigacion ', CAST(12000.00 AS Decimal(9, 2)), N'http://www.unjfsc.edu.pe/investigacion.php  ', 1, 25, CAST(N'2019-01-04T10:28:59.657' AS DateTime), 2)
INSERT [dbo].[proyectoBE] ([id_Proyecto], [titulo_Proyecto], [descripcion_Proyecto], [presupuesto_Proyecto], [enlace_Proyecto], [usuReg], [escuelaId_Proyecto], [fecReg], [estado_Proyecto]) VALUES (17, N'Diseño y Elaboracion de un Sistema Web para el area de TI ', N'Diseño y Elaboracion de un Sistema Web para el area de TI de la empresa AMPER ', CAST(4500.00 AS Decimal(9, 2)), N'www.infobolsa.es/cotizacion/amper ', 1, 17, CAST(N'2019-01-04T11:08:19.090' AS DateTime), 0)
SET IDENTITY_INSERT [dbo].[proyectoBE] OFF
SET IDENTITY_INSERT [dbo].[resolucionBE] ON 

INSERT [dbo].[resolucionBE] ([id_Resolucion], [descripcion_Resolucion], [fecha], [archivo_Resolucion], [usuReg], [fecReg]) VALUES (1, N'resolucion 000213 ', N'2019-01-03', N'033204501-A.doc', 12, CAST(N'2018-11-27T11:32:17.300' AS DateTime))
SET IDENTITY_INSERT [dbo].[resolucionBE] OFF
SET IDENTITY_INSERT [dbo].[resultadoBE] ON 

INSERT [dbo].[resultadoBE] ([id_Resultado], [descripcion_Resultado], [archivo_Resultado], [concurso_Resultado], [estado_Resultado], [usuReg_Resultado], [fecReg_Resultado]) VALUES (26, N'acta', N'033204511-A.doc', 32, 1, 1, CAST(N'2019-01-10T23:36:23.157' AS DateTime))
SET IDENTITY_INSERT [dbo].[resultadoBE] OFF
SET IDENTITY_INSERT [dbo].[revistaBE] ON 

INSERT [dbo].[revistaBE] ([id_revista], [vol], [num], [anio], [imagenRev], [id_tipoReRevista]) VALUES (1, N'1', N'12312', N'2019-01-12', N'1.jpg', 1)
INSERT [dbo].[revistaBE] ([id_revista], [vol], [num], [anio], [imagenRev], [id_tipoReRevista]) VALUES (2, N'1', N'178123', N'2019-01-10', N'2.jpg', 2)
INSERT [dbo].[revistaBE] ([id_revista], [vol], [num], [anio], [imagenRev], [id_tipoReRevista]) VALUES (3, N'1', N'1231', N'2019-11-01', N'3.jpg', 3)
SET IDENTITY_INSERT [dbo].[revistaBE] OFF
SET IDENTITY_INSERT [dbo].[rolBE] ON 

INSERT [dbo].[rolBE] ([id_Rol], [descripcion_Rol], [estado_Rol]) VALUES (1, N'ADMINISTRADOR', 1)
SET IDENTITY_INSERT [dbo].[rolBE] OFF
SET IDENTITY_INSERT [dbo].[suscriptorBE] ON 

INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (1, N'Luiggi ', N'Rivera Santiago', N'rivera_genio@hotmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (2, N'Rodrigo', N'Huaranga Carreño', N'rovies@yahoo.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (3, N'Jhordans ', N'Nieto Rosado', N'rusbel@gmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (4, N'Ana', N'Dominguez Vilela', N'ana@hotmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (5, N'Junior', N'Prudencio Moreno', N'yuni@gmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (6, N'JianMarco', N'Castro Morales', N'jiancito@hotmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (7, N'Alexis', N'Gutierres Fuentes', N'alexis@gmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (8, N'Franco', N'Perez Samillan', N'peres@yahoo.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (9, N'Luis', N'Sanchez Geronimo', N'lucho@gmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (10, N'Victor', N'Heredia Espinoza', N'bimbox@hotmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (11, N'Edynson', N'Pascasia Romero', N'edin@gmail.com', N'n')
INSERT [dbo].[suscriptorBE] ([id_Susc], [nombres_Susc], [apellidos_Susc], [correo_Susc], [estado_Susc]) VALUES (12, N'Erick', N'Pascasia Romero ', N'ercik@hotmail.com', N'n')
SET IDENTITY_INSERT [dbo].[suscriptorBE] OFF
SET IDENTITY_INSERT [dbo].[teses] ON 

INSERT [dbo].[teses] ([id], [tesis], [facultad], [escuela], [fecha], [created_at], [updated_at], [deleted_at]) VALUES (1, N'a', N'a', N'a', CAST(N'2019-11-01T00:00:00.000' AS DateTime), CAST(N'2019-11-01T16:36:09.000' AS DateTime), CAST(N'2019-11-01T16:36:28.000' AS DateTime), NULL)
SET IDENTITY_INSERT [dbo].[teses] OFF
SET IDENTITY_INSERT [dbo].[tipoAsistenteBE] ON 

INSERT [dbo].[tipoAsistenteBE] ([id_TipoAs], [descripcion_TipoAs], [estado_TipoAs]) VALUES (1, N'GENERAL', 1)
SET IDENTITY_INSERT [dbo].[tipoAsistenteBE] OFF
SET IDENTITY_INSERT [dbo].[tipoEventoBE] ON 

INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (1, N'Congreso', 1, CAST(N'2018-10-31T10:50:09.547' AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (2, N'Feria', 1, CAST(N'2018-10-31T10:50:23.647' AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (3, N'Ponencia', 1, CAST(N'2018-10-31T10:50:58.533' AS DateTime), 12)
INSERT [dbo].[tipoEventoBE] ([id_TipoEv], [descripcion_TipoEv], [estado_TipoEv], [fecReg_TipoEv], [usuReg_TipoEv]) VALUES (1007, N'Festival ', 1, CAST(N'2018-12-03T11:23:39.883' AS DateTime), 12)
SET IDENTITY_INSERT [dbo].[tipoEventoBE] OFF
SET IDENTITY_INSERT [dbo].[tipoRevistaBE] ON 

INSERT [dbo].[tipoRevistaBE] ([id_tipoRevista], [nombre], [imagenTipo], [estado]) VALUES (1, N'BIG BANG', N'1.jpg', 1)
INSERT [dbo].[tipoRevistaBE] ([id_tipoRevista], [nombre], [imagenTipo], [estado]) VALUES (2, N'INFINITUM', N'2.jpg', 1)
INSERT [dbo].[tipoRevistaBE] ([id_tipoRevista], [nombre], [imagenTipo], [estado]) VALUES (3, N'GUARA ', N'3.jpg', 1)
SET IDENTITY_INSERT [dbo].[tipoRevistaBE] OFF
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
INSERT [dbo].[universidadBE] ([id_Uni], [nombre_Uni]) VALUES (10, N'Universidad Peruana del Norte  XD')
SET IDENTITY_INSERT [dbo].[universidadBE] OFF
SET IDENTITY_INSERT [dbo].[users] ON 

INSERT [dbo].[users] ([id], [name], [email], [password], [remember_token], [created_at], [updated_at]) VALUES (1, N'admin', N'admin@homtail.com', N'$2y$10$vgwK31zk1udeJakCRWNra.2IRNczhEnySdkyFtYsdCKS7WHhi/JQe', N'3RBDl5oo2zhFoXH3YoGq2OkxvQBCqmCJUWSzjpcmx24FZ6pTWl0SG08WI9Ir', CAST(N'2019-11-01T16:35:49.000' AS DateTime), CAST(N'2019-11-01T16:35:49.000' AS DateTime))
SET IDENTITY_INSERT [dbo].[users] OFF
SET IDENTITY_INSERT [dbo].[usuarioBE] ON 

INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (1, N'admin', N'admin', 1, 1, CAST(N'2018-10-14T00:00:00.000' AS DateTime), CAST(N'2018-10-14T00:00:00.000' AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (12, N'admin', N'admin', 1, 1, CAST(N'2018-10-14T00:00:00.000' AS DateTime), CAST(N'2018-10-14T00:00:00.000' AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (15, N'admin', N'admin', 1, 1, CAST(N'2018-10-14T00:00:00.000' AS DateTime), CAST(N'2018-10-14T00:00:00.000' AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (17, N'admin', N'admin', 1, 1, CAST(N'2018-10-14T00:00:00.000' AS DateTime), CAST(N'2018-10-14T00:00:00.000' AS DateTime), N'admin', 1)
INSERT [dbo].[usuarioBE] ([id_Usu], [nombre_Usu], [clave_Usu], [estado_Usu], [usuReg_Usu], [fecReg_Usu], [fecMod_Usu], [fullname], [id_Rol_Usu]) VALUES (18, N'admin', N'admin', 1, 1, CAST(N'2018-10-14T00:00:00.000' AS DateTime), CAST(N'2018-10-14T00:00:00.000' AS DateTime), N'admin', 1)
SET IDENTITY_INSERT [dbo].[usuarioBE] OFF
ALTER TABLE [dbo].[convocatoriaBE] ADD  CONSTRAINT [DF_convocatoriaBE_fecReg_Conv]  DEFAULT (getdate()) FOR [fecReg_Conv]
GO
ALTER TABLE [dbo].[entidadColaBE] ADD  CONSTRAINT [DF_entidadColaBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
ALTER TABLE [dbo].[especialidadBE] ADD  DEFAULT (NULL) FOR [descripcion_Espe]
GO
ALTER TABLE [dbo].[especialidadBE] ADD  DEFAULT (NULL) FOR [estado_Espe]
GO
ALTER TABLE [dbo].[eventoAsistenteBE] ADD  DEFAULT (NULL) FOR [evento_EventoAsis]
GO
ALTER TABLE [dbo].[eventoAsistenteBE] ADD  DEFAULT (NULL) FOR [asistente_EventoAsis]
GO
ALTER TABLE [dbo].[eventoBE] ADD  CONSTRAINT [DF_eventoBE_fecReg_Evento]  DEFAULT (getdate()) FOR [fecReg_Evento]
GO
ALTER TABLE [dbo].[eventoDetalleBE] ADD  CONSTRAINT [DF_eventoDetalleBE_estado_EventoDet]  DEFAULT ((1)) FOR [estado_EventoDet]
GO
ALTER TABLE [dbo].[eventoDetalleBE] ADD  CONSTRAINT [DF_eventoDetalleBE_fecReg_EventoDet]  DEFAULT (getdate()) FOR [fecReg_EventoDet]
GO
ALTER TABLE [dbo].[is_message] ADD  CONSTRAINT [DF_is_message_date]  DEFAULT (getdate()) FOR [date]
GO
ALTER TABLE [dbo].[is_message] ADD  CONSTRAINT [DF_is_message_status]  DEFAULT ('n') FOR [status]
GO
ALTER TABLE [dbo].[noticiaBE] ADD  CONSTRAINT [DF_noticiaBE_estado_Noticia]  DEFAULT ((1)) FOR [estado_Noticia]
GO
ALTER TABLE [dbo].[noticiaBE] ADD  CONSTRAINT [DF_noticiaBE_fecReg_Noticia]  DEFAULT (getdate()) FOR [fecReg_Noticia]
GO
ALTER TABLE [dbo].[pagoBE] ADD  CONSTRAINT [DF_pagoBE_estado_Pago]  DEFAULT ((2)) FOR [estado_Pago]
GO
ALTER TABLE [dbo].[pagoBE] ADD  CONSTRAINT [DF_pagoBE_fecha_Pago]  DEFAULT (getdate()) FOR [fecha_Pago]
GO
ALTER TABLE [dbo].[ponenteBE] ADD  CONSTRAINT [DF_ponenteBE_fecReg_Ponente]  DEFAULT (getdate()) FOR [fecReg_Ponente]
GO
ALTER TABLE [dbo].[proyectoBE] ADD  CONSTRAINT [DF__proyectoB__usuRe__300424B4]  DEFAULT (NULL) FOR [usuReg]
GO
ALTER TABLE [dbo].[proyectoBE] ADD  CONSTRAINT [DF_proyectoBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
ALTER TABLE [dbo].[resolucionBE] ADD  CONSTRAINT [DF_resolucionBE_fecReg]  DEFAULT (getdate()) FOR [fecReg]
GO
ALTER TABLE [dbo].[resultadoBE] ADD  CONSTRAINT [DF_resultadoBE_fecReg_Resultado]  DEFAULT (getdate()) FOR [fecReg_Resultado]
GO
ALTER TABLE [dbo].[suscriptorBE] ADD  CONSTRAINT [DF_suscriptorBE_estado_Susc]  DEFAULT ('n') FOR [estado_Susc]
GO
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [descripcion_TipoEv]
GO
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [estado_TipoEv]
GO
ALTER TABLE [dbo].[tipoEventoBE] ADD  CONSTRAINT [DF__tipoEvent__fecRe__01142BA1]  DEFAULT (getdate()) FOR [fecReg_TipoEv]
GO
ALTER TABLE [dbo].[tipoEventoBE] ADD  DEFAULT (NULL) FOR [usuReg_TipoEv]
GO
ALTER TABLE [dbo].[usuarioBE] ADD  DEFAULT (NULL) FOR [usuReg_Usu]
GO
ALTER TABLE [dbo].[usuarioBE] ADD  CONSTRAINT [DF_usuarioBE_fecReg_Usu]  DEFAULT (getdate()) FOR [fecReg_Usu]
GO
ALTER TABLE [dbo].[asistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_AsistenteBE_TipoAsistenteBE1] FOREIGN KEY([tipoAsis_Asis])
REFERENCES [dbo].[tipoAsistenteBE] ([id_TipoAs])
GO
ALTER TABLE [dbo].[asistenteBE] CHECK CONSTRAINT [fk_AsistenteBE_TipoAsistenteBE1]
GO
ALTER TABLE [dbo].[asistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_AsistenteBE_UsuarioBE1] FOREIGN KEY([usuReg_Asis])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[asistenteBE] CHECK CONSTRAINT [fk_AsistenteBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[convocatoriaBE]  WITH CHECK ADD  CONSTRAINT [fk_ConvocatoriaBE_UsuarioBE1] FOREIGN KEY([usuReg_Conv])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[convocatoriaBE] CHECK CONSTRAINT [fk_ConvocatoriaBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[entidadCProyBE]  WITH CHECK ADD  CONSTRAINT [fk_EntidadCProyBE_EntidadColaBE1] FOREIGN KEY([entidadC_ECP])
REFERENCES [dbo].[entidadColaBE] ([id_EntidadCola])
GO
ALTER TABLE [dbo].[entidadCProyBE] CHECK CONSTRAINT [fk_EntidadCProyBE_EntidadColaBE1]
GO
ALTER TABLE [dbo].[entidadCProyBE]  WITH CHECK ADD  CONSTRAINT [fk_EntidadCProyBE_ProyectoBE1] FOREIGN KEY([proyecto_ECP])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[entidadCProyBE] CHECK CONSTRAINT [fk_EntidadCProyBE_ProyectoBE1]
GO
ALTER TABLE [dbo].[escuelaBE]  WITH CHECK ADD  CONSTRAINT [fk_EscuelaBE_FacultadBE1] FOREIGN KEY([facultadId_Escuela])
REFERENCES [dbo].[facultadBE] ([id_Facu])
GO
ALTER TABLE [dbo].[escuelaBE] CHECK CONSTRAINT [fk_EscuelaBE_FacultadBE1]
GO
ALTER TABLE [dbo].[eventoAsistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoAsitente_AsistenteBE1] FOREIGN KEY([asistente_EventoAsis])
REFERENCES [dbo].[asistenteBE] ([id_Asis])
GO
ALTER TABLE [dbo].[eventoAsistenteBE] CHECK CONSTRAINT [fk_EventoAsitente_AsistenteBE1]
GO
ALTER TABLE [dbo].[eventoAsistenteBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoAsitente_EventoBE1] FOREIGN KEY([evento_EventoAsis])
REFERENCES [dbo].[eventoBE] ([id_Evento])
GO
ALTER TABLE [dbo].[eventoAsistenteBE] CHECK CONSTRAINT [fk_EventoAsitente_EventoBE1]
GO
ALTER TABLE [dbo].[eventoBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoBE_TipoEventoBE] FOREIGN KEY([tipo_Evento])
REFERENCES [dbo].[tipoEventoBE] ([id_TipoEv])
GO
ALTER TABLE [dbo].[eventoBE] CHECK CONSTRAINT [fk_EventoBE_TipoEventoBE]
GO
ALTER TABLE [dbo].[eventoBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoBE_UsuarioBE1] FOREIGN KEY([usuReg_Evento])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[eventoBE] CHECK CONSTRAINT [fk_EventoBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_EventoBE1] FOREIGN KEY([evento_EventoDet])
REFERENCES [dbo].[eventoBE] ([id_Evento])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_EventoBE1]
GO
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_PonenteBE1] FOREIGN KEY([ponente_EventoDet])
REFERENCES [dbo].[ponenteBE] ([id_Ponente])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_PonenteBE1]
GO
ALTER TABLE [dbo].[eventoDetalleBE]  WITH CHECK ADD  CONSTRAINT [fk_EventoDetalleBE_UsuarioBE1] FOREIGN KEY([usuReg_EventoDet])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[eventoDetalleBE] CHECK CONSTRAINT [fk_EventoDetalleBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[fechaProyBE]  WITH CHECK ADD  CONSTRAINT [fk_FechaProyBE_FechaEjeBE1] FOREIGN KEY([fechaEje_FP])
REFERENCES [dbo].[fechaEjeBE] ([id_FE])
GO
ALTER TABLE [dbo].[fechaProyBE] CHECK CONSTRAINT [fk_FechaProyBE_FechaEjeBE1]
GO
ALTER TABLE [dbo].[fechaProyBE]  WITH CHECK ADD  CONSTRAINT [fk_FechaProyBE_ProyectoBE1] FOREIGN KEY([proyecto_FP])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[fechaProyBE] CHECK CONSTRAINT [fk_FechaProyBE_ProyectoBE1]
GO
ALTER TABLE [dbo].[fondoGProyBE]  WITH CHECK ADD FOREIGN KEY([idFondo])
REFERENCES [dbo].[fondoGobBE] ([id_fondoGob])
GO
ALTER TABLE [dbo].[fondoGProyBE]  WITH CHECK ADD  CONSTRAINT [FK__fondoGPro__idPro__14270015] FOREIGN KEY([idProy])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[fondoGProyBE] CHECK CONSTRAINT [FK__fondoGPro__idPro__14270015]
GO
ALTER TABLE [dbo].[nosotrosBE]  WITH CHECK ADD  CONSTRAINT [fk_NosotrosBE_UsuarioBE1] FOREIGN KEY([usuMod_Nos])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[nosotrosBE] CHECK CONSTRAINT [fk_NosotrosBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[noticiaBE]  WITH CHECK ADD  CONSTRAINT [fk_NoticiaBE_UsuarioBE1] FOREIGN KEY([usuReg_Noticia])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[noticiaBE] CHECK CONSTRAINT [fk_NoticiaBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[objetivoPryBE]  WITH CHECK ADD  CONSTRAINT [fk_ObjetivoPryBE_ObjetivoBE1] FOREIGN KEY([objetivo_ObjetivoPry])
REFERENCES [dbo].[objetivoBE] ([id_Objetivo])
GO
ALTER TABLE [dbo].[objetivoPryBE] CHECK CONSTRAINT [fk_ObjetivoPryBE_ObjetivoBE1]
GO
ALTER TABLE [dbo].[objetivoPryBE]  WITH CHECK ADD  CONSTRAINT [fk_ObjetivoPryBE_ProyectoBE1] FOREIGN KEY([proyecto_ObjetivoPry])
REFERENCES [dbo].[proyectoBE] ([id_Proyecto])
GO
ALTER TABLE [dbo].[objetivoPryBE] CHECK CONSTRAINT [fk_ObjetivoPryBE_ProyectoBE1]
GO
ALTER TABLE [dbo].[pagoBE]  WITH CHECK ADD  CONSTRAINT [fk_PagoBE_EventoAsitente1] FOREIGN KEY([eventoAsis_Pago])
REFERENCES [dbo].[eventoAsistenteBE] ([id_EventoAsis])
GO
ALTER TABLE [dbo].[pagoBE] CHECK CONSTRAINT [fk_PagoBE_EventoAsitente1]
GO
ALTER TABLE [dbo].[pagoBE]  WITH CHECK ADD  CONSTRAINT [fk_PagoBE_UsuarioBE1] FOREIGN KEY([usuApr_Pago])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[pagoBE] CHECK CONSTRAINT [fk_PagoBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_Especialidad1] FOREIGN KEY([especialidad_Ponente])
REFERENCES [dbo].[especialidadBE] ([id_Espe])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_Especialidad1]
GO
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_Universidad1] FOREIGN KEY([univProc_Ponente])
REFERENCES [dbo].[universidadBE] ([id_Uni])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_Universidad1]
GO
ALTER TABLE [dbo].[ponenteBE]  WITH CHECK ADD  CONSTRAINT [fk_PonenteBE_UsuarioBE1] FOREIGN KEY([usuReg_Ponente])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[ponenteBE] CHECK CONSTRAINT [fk_PonenteBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[proyectoBE]  WITH CHECK ADD  CONSTRAINT [fk_ProyectoBE_EscuelaBE1] FOREIGN KEY([escuelaId_Proyecto])
REFERENCES [dbo].[escuelaBE] ([id_Escuela])
GO
ALTER TABLE [dbo].[proyectoBE] CHECK CONSTRAINT [fk_ProyectoBE_EscuelaBE1]
GO
ALTER TABLE [dbo].[proyectoBE]  WITH CHECK ADD  CONSTRAINT [fk_ProyectoBE_UsuarioBE1] FOREIGN KEY([usuReg])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[proyectoBE] CHECK CONSTRAINT [fk_ProyectoBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[resolucionBE]  WITH CHECK ADD  CONSTRAINT [fk_Resolucion_UsuarioBE1] FOREIGN KEY([usuReg])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[resolucionBE] CHECK CONSTRAINT [fk_Resolucion_UsuarioBE1]
GO
ALTER TABLE [dbo].[resultadoBE]  WITH CHECK ADD  CONSTRAINT [fk_ResultadoBE_ConvocatoriaBE1] FOREIGN KEY([concurso_Resultado])
REFERENCES [dbo].[convocatoriaBE] ([id_Conv])
GO
ALTER TABLE [dbo].[resultadoBE] CHECK CONSTRAINT [fk_ResultadoBE_ConvocatoriaBE1]
GO
ALTER TABLE [dbo].[resultadoBE]  WITH CHECK ADD  CONSTRAINT [fk_ResultadoBE_UsuarioBE1] FOREIGN KEY([usuReg_Resultado])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[resultadoBE] CHECK CONSTRAINT [fk_ResultadoBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[revistaBE]  WITH CHECK ADD  CONSTRAINT [FK__revistaBE__id_ti__7E02B4CC] FOREIGN KEY([id_tipoReRevista])
REFERENCES [dbo].[tipoRevistaBE] ([id_tipoRevista])
GO
ALTER TABLE [dbo].[revistaBE] CHECK CONSTRAINT [FK__revistaBE__id_ti__7E02B4CC]
GO
ALTER TABLE [dbo].[tesisBE]  WITH CHECK ADD  CONSTRAINT [fk_TesisBE_EscuelaBE1] FOREIGN KEY([escuelaId_Tesis])
REFERENCES [dbo].[escuelaBE] ([id_Escuela])
GO
ALTER TABLE [dbo].[tesisBE] CHECK CONSTRAINT [fk_TesisBE_EscuelaBE1]
GO
ALTER TABLE [dbo].[tipoEventoBE]  WITH CHECK ADD  CONSTRAINT [fk_TipoEventoBE_UsuarioBE1] FOREIGN KEY([usuReg_TipoEv])
REFERENCES [dbo].[usuarioBE] ([id_Usu])
GO
ALTER TABLE [dbo].[tipoEventoBE] CHECK CONSTRAINT [fk_TipoEventoBE_UsuarioBE1]
GO
ALTER TABLE [dbo].[usuarioBE]  WITH CHECK ADD  CONSTRAINT [fk_UsuarioBE_RolBE1] FOREIGN KEY([id_Rol_Usu])
REFERENCES [dbo].[rolBE] ([id_Rol])
GO
ALTER TABLE [dbo].[usuarioBE] CHECK CONSTRAINT [fk_UsuarioBE_RolBE1]
GO
ALTER TABLE [dbo].[is_message]  WITH CHECK ADD  CONSTRAINT [CK__is_messag__statu__6EC0713C] CHECK  (([status]='N' OR [status]='Y'))
GO
ALTER TABLE [dbo].[is_message] CHECK CONSTRAINT [CK__is_messag__statu__6EC0713C]
GO
