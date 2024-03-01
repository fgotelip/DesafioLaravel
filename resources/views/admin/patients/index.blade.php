@extends('layouts.crud')

@section('title')
  Pacientes
@endsection

@section('title2')
  Pacientes
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
              <form action="{{url("pacientes/$patient->id")}}" method="post">
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
  {{$patients->links()}}
@endsection
