USE [SISACT]
GO
/****** Object:  StoredProcedure [dbo].[InsertarProveedor]    Script Date: 03/20/2013 14:00:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE InsertarProveedor
	@Proveedor varchar(8),@Descripcion varchar(60)
AS
BEGIN
	-- SET NOCOUNT ON added to prevent extra result sets from
	-- interfering with SELECT statements.
	SET NOCOUNT ON;

    -- Insert statements for procedure here
	INSERT INTO Proveedores VALUES (@Proveedor,@Descripcion,'1')
END
