@extends('layouts.crud')

@section('title')
  Pacientes
@endsection

@section('title2')
  Pacientes
@endsection

@include('admin.sidebar')

@section('pdf')
<a href="{{url("/criaremail")}}">
           <button class="btn btn-secondary mt-5">Enviar Email</button>
          </a>
@endsection



@section('link')
  "/pacientes/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Nome</x-th>
  <x-th>Email</x-th>
  <th class="text-left">Ação</th>
@endsection

@section('tbody')
  @foreach($patients as $patient)
      <tr>
        <th scope="row">{{$patient->id}}</th>
        <td>{{$patient->name}}</td>      
        <td>{{$patient->email}}</td>
        <td>
          <div class="flex">
              <a href="{{url("pacientes/$patient->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <a href="{{url("pacientes/$patient->id/edit")}}" class="p-4 text-black"><x-edit></x-edit></a>
              <x-deletemodal>{{url("pacientes/$patient->id")}}</x-deletemodal>
        </td>
       
      </tr>                   
  @endforeach
@endsection

@section('pagination')
  {{$patients->links()}}
@endsection

