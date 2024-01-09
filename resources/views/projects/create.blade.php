@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('projects.store')}}" method="POST">
                
            @csrf

            <div>
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>

            <div>
                <label for="bio" class="form-label">bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="bio">
            </div>

            <div>
                <label for="type_id" class="form-label">type</label>
                <select name="type_id" class="form-control" id="type_id">
                    <option>Seleziona una tipologia</option>
                    @foreach($types as $type)
                      <option @selected( old('type_id') == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                  </select>
            </div>

            <div>
                <label for="admin" class="form-label">admin</label>
                <input type="text" class="form-control" name="admin" id="admin" placeholder="admin">
            </div>

            <div>
                <input type="submit" class="btn btn-primary mt-4" value="crea">
            </div>
       </form>
    </div>
@endsection