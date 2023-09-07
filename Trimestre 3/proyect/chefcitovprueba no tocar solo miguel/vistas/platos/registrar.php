
<div class="fondotresrecuadros">   <!-- toca poner la clase para el css-->
    <form method="post">
        <label>Nombre del plato</label>
        <input type="text" name="nameplato" maxlength="45" required>

        <label>Id de plato</label>
        <input type="number" name="idplato" maxlength="5" required>

        <label>Valor del plato</label>
        <input type="number" name="valorplato" maxlength="9" required>

        <label>Tipo de plato</label>
        <select name="tipoplato" id="plato">
            <option value="1">Entrada</option>
            <option value="2">Plato fuerte</option>
            <option value="3">Bebida</option>
            <option value="4">Postre</option>
            <option value="5">Acompañamiento</option>
        </select>

        <label>Descripción del plato</label>
        <input type="text" name="desplato" maxlength="300" required>

        <label>Ingredientes que lleva</label>
        <input type="text" name="ingredientes">

        <input type="submit" valuer="Enviar" name="btnregistrar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
        <a class="btn btn-dark" href="admin.php">regresar al ingreso</a>
    </form>
</div>
<?php include_once("../conex/conexion.php");

    if(isset($_POST["btnregistrar"]))
    {
    $nombreplato = $_POST['nameplato'];
    $idplato = $_POST['idplato'];
    $valorplato = $_POST['valorplato'];
    $tipoplato = $_POST['tipoplato'];
    $descripcion = $_POST['desplato'];
    //$ingredientes = $_POST['ingredientes']; Ojo con este porque creo que sale a otra tabla
    mysqli_query($conn, "INSERT INTO platos(idPlatos,nombrePlatos, valorPlatos, idCategPlatos, descripcionPlatos ) VALUES('$idplato','$nombreplato','$valorplato','$tipoplato','$descripcion')");

    header("Location:admin.php");
    }
?>