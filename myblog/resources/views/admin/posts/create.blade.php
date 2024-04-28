<div class="card">
    <div class="card-body">
        <form action="{{route('admin.posts.store', $tag)}}">
            <div class="form-group">
                <label for="name">Nombre: </label>
                <input class="form-control" type="text" placeholder="Ingrese el nombre del post">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="extract">Extracto: </label>
                <input class="form-control" type="text" placeholder="Ingrese el extracto del post">
                @error('extract')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body: </label>
                <input class="form-control" type="text" placeholder="Ingrese el body del post">
                @error('body')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <button class="btn btn-primary btn-sm" type="submit">Crear Post</button>
        </form>

        {{-- <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}
            @error('slug')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div> --}}
    </div>
</div>