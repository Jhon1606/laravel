<div class="modal fade" id="modalEditTag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{route('admin.tags.update', $tag)}}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Etiqueta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        {{-- Aqui estamos utilizando el paquete laravel collective para formularios --}}
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="editName">Nombre</label>
                            <input type="hidden" name="id" id="editId">
                            <input class="form-control" type="text" name="name" id="editName" placeholder="Ingrese el nombre de la categoria">
                        </div>
                        <div class="form-group">
                            <label for="color">Color: </label>
                            <select class="form-control" name="color" id="editColor">
                                <option value=""></option>
                            </select>
                        </div>             
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar etiqueta</button>
            </div>
            </form>   
        </div>
    </div>
</div>