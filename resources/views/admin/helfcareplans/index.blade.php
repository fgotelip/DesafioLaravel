@extends('layouts.crud')

@section('title')
  Planos de Saúde
@endsection

@section('title2')
  Planos de Saúde
@endsection

@include('admin.sidebar')

@section('link')
  "/planosdesaude/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Nome</x-th>
  <x-th>Descrição</x-th>
  <th class="text-left">Ação</th>
@endsection

@section('tbody')
  @foreach($helfcareplans as $helfcareplan)
      <tr>
        <th scope="row">{{$helfcareplan->id}}</th>
        <td>{{$helfcareplan->name}}</td>
        <td>{{$helfcareplan->description}}</td>      
        <td>
          <div class="flex">
              <a href="{{url("planosdesaude/$helfcareplan->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <a href="{{url("planosdesaude/$helfcareplan->id/edit")}}" class="p-4 text-black"><x-edit></x-edit></a>
              <form action="{{url("planosdesaude/$helfcareplan->id")}}" method="post">
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
  {{$helfcareplans->links()}}
@endsection
