USE [SISACT]
GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
-- =============================================
-- Author:		<Sergio Da Silva>
-- Create date: <25/03/2013>
-- Description:	<Cambiar Proveedor>
-- =============================================
CREATE PROCEDURE CambiarProveedor
	@Proveedor varchar(8)
AS 
BEGIN
	SELECT Proveedor FROM Proveedores WHERE Vigente='1' OR Proveedor=@Proveedor
END