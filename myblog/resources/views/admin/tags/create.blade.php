<div class="modal fade" id="modalCreateTag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            {{-- Aqui estamos utilizando el paquete laravel collective para formularios,
                abrimos el form acá para poder meter el boton tipo submit dentro del div modal footer --}}
            <form action="{{route('admin.tags.store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Escriba el nombre de la etiqueta...">
                                {{-- ?Buscar como mostrar los mensajes de errores sin cerrar el modal, y cerrarlos cuando no hay errores --}}
                                {{-- @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror --}}
                            </div>
            
                            {{-- <div class="form-group">
                                {!! Form::label('slug', 'Slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}
                                @error('slug')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label for="color">Color: </label>
                                <select class="form-control" name="color" id="color">
                                    <option value=""></option>
                                </select>
                                {{-- @error('color')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary"> Crear Etiqueta</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.tags.partials.modal', [
    'modalId' => 'modalCreateTag',
    'modalLabel' => 'exampleModalLabel',
    'modalTitle' => 'Crear Etiqueta',
    'formAction' => route('admin.tags.store', $tag),
    'fieldId' => 'id',
    'fieldName' => 'name',
    'selectId' => 'color',
    'submitButton' => 'Crear etiqueta'
])

