@extends('layouts.crud')

@section('title')
  Especialidades
@endsection

@section('title2')
  Especialidades
@endsection

@section('link')
  "/especialidades/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Nome</x-th>
  <x-th>Descrição</x-th>
  <th class="text-left">Ação</th>
@endsection

@section('tbody')
  @foreach($specialties as $specialty)
      <tr>
        <th scope="row">{{$specialty->id}}</th>
        <td>{{$specialty->name}}</td>
        <td>{{$specialty->description}}</td>      
        <td>
          <div class="flex">
              <a href="{{url("especialidades/$specialty->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <a href="{{url("especialidades/$specialty->id/edit")}}" class="p-4 text-black"><x-edit></x-edit></a>
              <form action="{{url("especialidades/$specialty->id")}}" method="post">
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
  {{$specialties->links()}}
@endsection
