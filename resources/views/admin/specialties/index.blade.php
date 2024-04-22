@extends('layouts.crud')

@section('title')
  Especialidades
@endsection

@section('title2')
  Especialidades
@endsection

@include('admin.sidebar')

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
              <button type="button" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$specialty->id}}" class="p-4">
                <x-delete></x-delete>
                </button>
                <form method="post" action="{{url("especialidades/$specialty->id")}}" class="p-6">
                    @csrf
                    @method('DELETE')
                <div class="modal fade" id="ModalDelete{{$specialty->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5  id="exampleModalLabel">Tem certeza que deseja excluir {{$specialty->name}}?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-footer">

                          <button class="btn btn-danger">Sim</button>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                </div>
              </form>
          </div>
        </td>
      </tr>
  @endforeach
@endsection

@section('pagination')
  {{$specialties->links()}}
@endsection
