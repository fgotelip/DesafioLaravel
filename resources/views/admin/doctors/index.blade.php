@extends('layouts.crud')

@section('title')
  Médicos
@endsection

@section('title2')
  Médicos
@endsection

@include('admin.sidebar')

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
