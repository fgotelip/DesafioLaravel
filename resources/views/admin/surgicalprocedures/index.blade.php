@extends('layouts.crud')

@section('title')
  Suas Cirurgias
@endsection

@section('title2')
  Suas Cirurgias
@endsection

<div class="p-3">
            <a href="{{url("/dashboard/paciente")}}" class="no-underline text-black"><x-dashboard><x-texto>Página inicial</x-texto></x-dashboard></a>
</div>

@section('link')
  "/procedimentocirugico/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Procedimento</x-th>
  <x-th>Data e Hora de Início</x-th>
  <th class="text-left">Ação</th>
@endsection


@section('tbody')
  @foreach($surgicalprocedures as $surgicalprocedure)
      @php $id = $surgicalprocedure->specialty_id @endphp

      <tr>
        <th scope="row">{{$surgicalprocedure->id}}</th>
        <td> @foreach($specialties as $specialty)
                  @if($specialty->id==$id) @php $certa=$specialty @endphp @endif
            @endforeach {{$certa->name}}</td>
        <td>{{$surgicalprocedure->inicialtime}}</td>
        <td>
          <div class="flex">
              <a href="{{url("procedimentocirugico/paciente/$surgicalprocedure->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <button type="button" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$surgicalprocedure->id}}" class="p-4">
                <x-delete></x-delete>
                </button>
                <form method="post" action="{{url("procedimentocirugico/$surgicalprocedure->id")}}" class="p-6">
                    @csrf
                    @method('DELETE')
                <div class="modal fade" id="ModalDelete{{$surgicalprocedure->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5  id="exampleModalLabel">Tem certeza que deseja excluir {{$surgicalprocedure->name}}?</h5>
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
  {{$surgicalprocedures->links()}}
@endsection
