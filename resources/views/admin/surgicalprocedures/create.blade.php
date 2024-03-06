@extends('layouts.master')

@section('title')
    Agendar
@endsection

@section('title2')
    Agendar
@endsection

@section('content')
    <form name="formCad" id="formCad" method="post" action="{{url('/procedimentocirugico')}}"
     enctype="multipart/form-data">
        @csrf
        @include('admin.patients.form', ['botao' => '<input class="btn btn-primary"
         type="submit" value="Agendar">','botao2' => '<a class="btn btn-secondary" 
         href="/procedimentocirugico">Voltar</a>'])
    </form>
@endsection
