@extends('layouts.crud')

@section('title')
  Medicos
@endsection

<div class="absolute mt-2 bg-slate-300">
  <div class="ml-2">
    <a href="{{url("dashboard")}}" class="p-4 text-black no-underline"><x-dashboard></x-dashboard></a>
    <a href="{{url("pacientes")}}" class="p-4 text-black no-underline"><x-paciente></x-paciente></a>
    <a href="{{url("medicos")}}" class="p-4 text-black no-underline"><x-medico></x-medico></a>
    <a href="{{url("especialidades")}}" class="p-4 text-black no-underline"><x-espec></x-espec></a>
    <a href="{{url("planosdesaude")}}" class="p-4 text-black no-underline"><x-plano></x-plano></a>
  </div>
</div>

@section('title2')
  Medicos
@endsection

@section('link')
  "/medicos/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Nome</x-th>
  <x-th>Email</x-th>
  <th class="text-left">Ação</th>
@endsection

@section('tbody')
  @foreach($doctors as $doctor)
      <tr>
        <th scope="row">{{$doctor->id}}</th>
        <td>{{$doctor->name}}</td>      
        <td>{{$doctor->email}}</td>
        <td>
          <div class="flex">
              <a href="{{url("medicos/$doctor->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <a href="{{url("medicos/$doctor->id/edit")}}" class="p-4 text-black"><x-edit></x-edit></a>
              <form action="{{url("medicos/$doctor->id")}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-4 text-black"><x-delete></x-delete></button>
              </form>
          </div>
        </td>
      </tr>                   
  @endforeach
@endsection

@section('pagination')
  {{$doctors->links()}}
@endsection
