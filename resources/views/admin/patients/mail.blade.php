@extends('layouts.master')

@section('title')
    Comunicado
@endsection

@section('title2')
    Envie um email para <br>todos os pacientes
@endsection

@section('content')
    <form name="formCad" id="formCad" method="post" action="{{url('/enviandoemail')}}"
     enctype="multipart/form-data">
        @csrf
        <div class="text-center">
        <div class="form-group">
            <label for="conteudo" class="required">Conteudo</label>
            <input type="text" name="conteudo" id="conteudo" autofocus class="form-control"
            required>
        </div>
        </div>

        <div class="text-center mt-5">
        <input class="btn btn-primary"
         type="submit" value="Enviar">
        </div>
    </form>
    
@endsection