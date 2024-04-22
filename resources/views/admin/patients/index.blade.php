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
              <button type="button" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$patient->id}}" class="p-4">
                <x-delete></x-delete>
                </button>
                <form method="post" action="{{url("pacientes/$patient->id")}}" class="p-6">
                    @csrf
                    @method('DELETE')
                <div class="modal fade" id="ModalDelete{{$patient->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5  id="exampleModalLabel">Tem certeza que deseja excluir {{$patient->name}}?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-footer">

                          <button class="btn btn-danger">Sim</button>

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      </div>
                    </div>
                </div>
              </form>
        </td>

      </tr>
  @endforeach
@endsection

@section('pagination')
  {{$patients->links()}}
@endsection

