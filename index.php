<!DOCTYPE html>
<html lang="es-AR">
  <head>
    <title>BD1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Sergio Regalado Alessi"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
    <body class="bg-light">

        <!-- ==================== PANEL: TITULO PPAL. ===================== -->
        <div class="row shadow py-3 mb-2">
            <div class="col-md-12">
                <h1 class="h1 text-black text-center" style="text-shadow: 0.02em 0.02em 0.1em gray">Base de Datos desde un sistema informático</h1>
            </div>
        </div>

        <!-- ===================== PANEL: CONTENEDOR ===================== -->
        <div class="container mt-3" id="container">

            <!-- ===================== PANEL: FORMULARIO ===================== -->
            <form id="formulario">
                <div class="row justify-content-center g-3">
        
				<div class="col-md-4">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control form-control-sm" name="apellido" id="apellido" maxlength="30" required>
                </div>
				
				<div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" maxlength="30" required>
                </div>
                
                <div class="col-md-4">
                    <label for="documento_nro" class="form-label">Nro. de Documento</label>
                    <input type="number" class="form-control form-control-sm" name="documento_nro" id="documento_nro" minlength="7" maxlength="9" required>
                </div>

                <!-- ============ BOTONES ============ -->
                <div class="col-md-12">
                    <div class="row mt-3">
                    <div class="col-md-3 offset-md-1 col-lg-2 offset-lg-2 my-1"><div class="d-grid gap-2"><button type="button" class="btn btn-sm btn-outline-primary" id="btn_nuevo_cliente">Nuevo Cliente</button></div></div>
                    <div class="col-md-2 col-lg-2 my-1"><div class="d-grid gap-2"><button type="submit" class="btn btn-sm btn-dark" id="btn_guardar_cliente">Guardar</button></div></div>
                    <div class="col-md-2 col-lg-2 my-1"><div class="d-grid gap-2"><button type="button" class="btn btn-sm btn-danger" id="btn_eliminar_cliente">Eliminar</button></div></div>
                    <div class="col-md-3 col-lg-2 my-1"><div class="d-grid gap-2"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#listadoModal" id="btn_buscar_cliente">Buscar Cliente</button></div></div>
                    </div>
                </div>
                </div>
            </form>

            <!-- ==================== PANEL: LISTADO MODAL =================== -->
            <div class="modal fade" id="listadoModal" tabindex="-1" aria-labelledby="listadoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="listadoModalLabel">Listado De Clientes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- ========= BOTONES MODAL ========= -->
                        <div class="row">
                        <div class="col-md-4  my-1"><div class="d-grid gap-2"><input type="text" class="form-control form-control-sm" id="valor_lista_modal"></div></div>
                        <div class="col-md-5  my-1"><div class="d-grid gap-2">
                            <select class="form-select form-select-sm" id="filtro_tabla-modal">
                            <option value="id">ID Cliente</option>
                            <option selected value="apellido_nombre">Apellido y Nombre</option>
                            </select>
                        </div></div>
                        <div class="col-md-3  my-1"><div class="d-grid gap-2"><button type="button" class="btn btn-sm btn-primary" id="btn_filtrar_tabla_modal">Buscar</button></div></div>
                        </div>
                        <!-- ========== TABLA MODAL =========== -->
                        <div class="col-md-12 my-2">
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                <th class="col">#</th>
                                <th class="col">Apellido</th>
                                <th class="col">Nombre</th>
                                <th class="col"></th>
                                </tr>
                            </thead>
                            <tbody id="contenidoTablaModal"></tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-12">
                        <div class="col-4 offset-4 my-1"><div class="d-grid gap-2"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button></div></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======================= PANEL: FOOTER ======================= -->
        <div class="footer" id="footer">
            <footer class="my-5 pt-5 text-muted text-center text-small">
            <small>Desarrollado por Sergio Regalado Alessi</small><br>
            <p class="mb-1">&copy; 2017–2021 Todos los Derechos Reservados</p>
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>        
        <script type="text/javascript">
   
            var operacion = "insertar";
            var cliente_id_seleccionado = 0;

            $("#btn_nuevo_cliente").click( () => { resetear(); });

            $("#btn_guardar_cliente").click( (submit) => {
                submit.preventDefault();
                let mensaje = (operacion === 'insertar') ? '¿Está seguro que quiere guardar el nuevo registro?' : '¿Está seguro que quiere guardar los cambios realizados?' ;
                if (confirm(mensaje) === true){
                    let formulario = new FormData();
                    formulario.append('id', cliente_id_seleccionado);
                    formulario.append('nombre', $("#nombre").val());
                    formulario.append('apellido', $("#apellido").val());
                    formulario.append('documento_nro', $("#documento_nro").val());
                    $.ajax({
                        method: "POST",
                        dataType: 'JSON',
                        url: '/app/cliente.php/?operacion=' + operacion,
                        data: formulario,
                        contentType: false,
                        processData: false
                    }).done( (res) => {
                        cliente_id_seleccionado = res.id;
                        if (res.estado == true) {
                            operacion = ('actualizar');
                            let msjOperacion = (operacion === 'insertar') ? 'insertado' : 'actualizado';
                            alert('El cliente se ha ' + msjOperacion + ' satisfactoriamente.');
                        } 
                   });
                }
            }); 

            $("#btn_buscar_cliente").click( () => { $('#contenidoTablaModal').empty(); });

            function obtenercliente(id){
                resetear();
                $.ajax({
                    method: 'GET',
                    dataType: 'JSON',
                    url: '/cliente.php/?operacion=obtener&id=' + id
                }).done( (res) => { 
                    operacion = 'actualizar';
                    cliente_id_seleccionado = res.id;
                    $("#nombre").val(res.nombre);
                    $("#apellido").val(res.apellido);
                    $("#documento_nro").val(res.documento_nro);
                });
            }

            $("#btn_eliminar_cliente").click( (submit) => {
                if (confirm('¿Está seguro que quiere eliminar el registro?') === true){
                $.ajax({
                    method: 'GET',
                    dataType: 'JSON',
                    url: '/app/cliente.php/?operacion=eliminar&id=' + cliente_id_seleccionado
                }).done( (res) => { 
                    if (res.estado == true) {
                        resetear();                     
                        alert('El cliente se ha eliminado satisfactoriamente.');
                    }
                });
                }
            }); 
            
            function obtenercliente(id){
                resetear();
                $.ajax({
                    method: 'GET',
                    dataType: 'JSON',
                    url: '/app/cliente.php/?operacion=obtener&id=' + id
                }).done( (res) => { 
                    operacion = 'actualizar';
                    cliente_id_seleccionado = res.id;
                    $("#nombre").val(res.nombre);
                    $("#apellido").val(res.apellido);
                    $("#documento_nro").val(res.documento_nro);
                });
            }
        
            function resetear(){
                operacion = 'insertar';
                cliente_id_seleccionado = 0;
                $("#nombre").val('');
                $("#apellido").val('');
                $("#documento_nro").val('');
            }

            $('#btn_filtrar_tabla_modal').click( (e) => {
                $('#contenidoTablaModal').empty();
                let filtro = $("#filtro_tabla-modal").val(), valor = $("#valor_lista_modal").val();
                $.ajax({
                    method: 'GET',
                    dataType: 'JSON',
                    url: '/app/cliente.php/?operacion=listar&filtro=' + filtro + '&valor=' + valor,
                }).done( (res) => {
                    for (let i = 0; i < res.length; i++) {
                        $('#contenidoTablaModal').append( 
                            '<tr id="' + res[i].id + '">' +
                                '<th><p class="text-sm-center fw-light lh-1" id="filtroLista_id' + res[i].id + '">' + res[i].id + '</p></th>' +
                                '<td><p class="text-sm-center fw-light lh-1" id="filtroLista_apellido_nombre' + res[i].id + '">' + res[i].apellido + '</p></td>' +
                                '<td><p class="text-sm-center fw-light lh-1" id="filtroLista_apellido_nombre' + res[i].id + '">' + res[i].nombre + '</p></td>' +
                                '<td class="btn-group">' +
                                    '<button type="button" class="btn btn-sm btn-dark" id="filtroLista_boton' + res[i].id + '" data-bs-dismiss="modal" onclick="obtenercliente(' + res[i].id + ');">Obtener</button>' +
                                '</td>' +
                            '</tr>');
                    }
                });               
            });

        </script>
    </body>
</html>