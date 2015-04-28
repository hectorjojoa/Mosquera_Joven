<?php
    if (isset($_REQUEST['opcion'])){
        switch ($_REQUEST['opcion']){
            case 'new_evento':
                echo "Creando nuevo evento.";
                armar_form("new_evento");
            break;
            case 'new_periodo_academico':
                echo "Creando nuevo periodo_academico.";
                armar_form("new_periodo_academico");
            break;
            default:
                echo "Coordinador sin opcion";
            break;
        }       
    }

    function armar_form($opcion){
        if($opcion == "new_evento")
        {
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
                        <a href="#" class="btn" id="cancelar_nuevo_evento">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>';
        }else if($opcion == "new_periodo_academico")
        {
            echo '
        <form role="form" method="POST" id="form_periodo_academico_nuevo" action="#">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Crear nuevo periodo academico</h4>
                    </div>
                    <div class="modal-body">
                        <b>¿Seguro que desea crear el siguiente periodo academico ahora?</b>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" id="aceptar_nuevo_periodo_academico" value="Aceptar" />
                        <a href="#" class="btn" id="cancelar_nuevo_periodo_academico">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>';
        }
    }
?>