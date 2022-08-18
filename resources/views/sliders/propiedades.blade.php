<div class="col-xs-12 centrado">
    <h2>Detalles de los Sliders</h2>
    <hr class="divisor">
    <br>
    <button type="button" class="btn btn-primary"><a href="/sliders/mostrar">Mostrar todos</a></button>
    <button type="button" class="btn btn-primary"><a href="/usuarios/panel">Panel de control</a></button>
    <table width="200" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
            <td>
                <h3 class="Estilo22" align="center">Sliders No. <?php echo $row_Recordset['NSliders']; ?>&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <h3 class="Estilo22" align="center">Titulo: <?php echo $row_Recordset['Titulo']; ?>&nbsp;
            </td>
        </tr>
        <tr>
            <td>
                <div align="center"><img src="../sliders_save/<?php echo $row_Recordset['Imagen']; ?>" /></a>&nbsp;</div>
            </td>
        </tr>
        <tr>
            <td>
                <div align="center"><img src="../sliders_save/<?php echo $row_Recordset['Archivo']; ?>" /></a>&nbsp;</div>
            </td>
        </tr>

        <tr>
            <td>
                <h3 class="Estilo22" align="center">Publicado el: <span class="Estilo1"><?php echo $row_Recordset['FIngreso']; ?>&nbsp;</span>
            </td>
        </tr>
        <tr>
            <td>
                <h3 class="Estilo22" align="center">Finaliza el:<span class="Estilo1"> <?php echo $row_Recordset['FFinal']; ?></span>&nbsp;
            </td>
        </tr>
    </table>
</div>