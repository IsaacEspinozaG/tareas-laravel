@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo de la Tarea</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Crear nueva Tarea</button>
    </form>
</div>
@endsection
