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
              <button type="button" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$helfcareplan->id}}" class="p-4">
                <x-delete></x-delete>
                </button>
                <form method="post" action="{{url("planosdesaude/$helfcareplan->id")}}" class="p-6">
                    @csrf
                    @method('DELETE')
                <div class="modal fade" id="ModalDelete{{$helfcareplan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5  id="exampleModalLabel">Tem certeza que deseja excluir {{$helfcareplan->name}}?</h5>
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
  {{$helfcareplans->links()}}
@endsection
