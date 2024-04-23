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
        @include('admin.surgicalprocedures.formcreate')
    </form>
@endsection
