<?php
    if (isset($_REQUEST['opcion'])){
        switch ($_REQUEST['opcion']){
            case 'new_evento':
                echo "Creando nuevo evento.";
                armar_form(1);
            break;
            default:
                echo "Coordinador sin opcion";
            break;
        }       
    }

    function armar_form($opcion){
        if($opcion == "1")
            echo '
                    <form role="form" method="POST" id="form_evento_nuevo" action="#">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crear nuevo evento</h4>
                </div>
                <div class="modal-body">              
                      <div class="form-group">
                        <label for="nombre_evento_nuevo">Nombre</label>
                        <input type="text" class="form-control" id="nombre_evento_nuevo" name="nombre_evento_nuevo" placeholder="Introduce el nombre" required="required">
                      </div>
                      <div class="form-group">
                        <label for="descripcion_evento_nuevo">Descripción</label>
                        <input type="text" class="form-control" id="descripcion_evento_nuevo" name="descripcion_evento_nuevo" placeholder="Introduce la descripción" required="required">
                      </div>
                      <div class="form-group">
                        <label for="fecha_evento_nuevo">Fecha</label>
                        <input type="date" class="form-control" id="fecha_evento_nuevo" name="fecha_evento_nuevo" placeholder="Introduce la fecha" required="required">
                      </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" id="aceptar_nuevo_evento" value="Aceptar" />
                    <a href="#" class="btn" id="canelar_nuevo_evento">Cancelar</a>
                </div>
            </div>
        </div>
                    </form>';
    }
?>