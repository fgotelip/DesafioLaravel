@extends('layouts.crud')

@section('title')
  Suas Cirurgias
@endsection

@section('title2')
  Suas Cirurgias
@endsection

@section('doctor')
  hidden
@endsection

@section('pdf')
<a href="{{url("/pdf")}}">
           <button class="btn btn-success mt-5">Gerar Relatório</button>
          </a>
@endsection

@section('clean')
 mt-5
@endsection

<div class="p-3">
            <a href="{{url("/dashboard/medico")}}" class="no-underline text-black"><x-dashboard><x-texto>Página inicial</x-texto></x-dashboard></a>
</div>

@section('thead')
  <x-th>Id</x-th>
  <x-th>Paciente</x-th>
  <x-th>Data e Hora de Início</x-th>
  <th class="text-left">Ação</th>
@endsection



@section('tbody')

  @foreach($surgicalprocedures as $surgicalprocedure)
      <tr>
        <th scope="row">{{$surgicalprocedure->id}}</th>
        @php $id = $surgicalprocedure->patient_id @endphp
        <td> @foreach($patients as $patient)
                  @if($patient->id==$id) @php $certa=$patient @endphp @endif
            @endforeach {{$certa->name}}</td>
        <td>{{$surgicalprocedure->inicialtime}}</td>
        <td>
              <a href="{{url("procedimentocirugico/$surgicalprocedure->id")}}" class="p-4 text-black"><x-read></x-read></a>

        </td>
      </tr>


  @endforeach
@endsection

@section('pagination')
  {{$surgicalprocedures->links()}}
@endsection
