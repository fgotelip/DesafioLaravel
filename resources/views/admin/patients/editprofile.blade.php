@extends('layouts.master')

@section('title')
    Editar Dados
@endsection

@section('title2')
    Editar Dados
@endsection

@section('content')
    <form name="formEdit" id="formEdit" method="post" action="{{route('patient.update', Auth::guard('patient')->user()->id)}}"
    enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @include('admin.patients.formprofile', [ 'botao' => '<input class="btn btn-primary mt-5"
         type="submit" value="Editar">','botao2' => '<a class="btn btn-secondary mt-5"
         href="/dashboard">Voltar</a>'])
    </form>
    @php $id=Auth::guard('patient')->user()->id @endphp
    <x-deletemodal>{{url("deletar_conta/paciente/$id")}}</x-deletemodal>
@endsection
