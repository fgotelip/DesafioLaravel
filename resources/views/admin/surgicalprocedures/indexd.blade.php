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

@section('clean')
 mt-5
@endsection

<div class="p-3">
            <a href="{{url("/dashboard/medico")}}" class="no-underline text-black"><x-dashboard><x-texto>Página inicial</x-texto></x-dashboard></a>
</div>

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
              <a href="{{url("procedimentocirugico/$surgicalprocedure->id")}}" class="p-4 text-black"><x-read></x-read></a>
          
        </td>
      </tr>                   
  @endforeach
@endsection