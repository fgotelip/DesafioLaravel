@extends('layouts.crud')

@section('title')
  Suas Cirurgias
@endsection

@section('title2')
  Suas Cirurgias
@endsection

<div class="p-3">
            <a href="{{url("/dashboard")}}" class="no-underline text-black"><x-dashboard><x-texto>Página inicial</x-texto></x-dashboard></a>
</div>

@section('link')
  "/procedimentocirugico/create"
@endsection

@section('thead')
  <x-th>Id</x-th>
  <x-th>Procedimento</x-th>
  <x-th>Data e Hora</x-th>
  <th class="text-left">Ação</th>
@endsection

@section('tbody')
  @foreach($surgicalprocedures as $surgicalprocedure)
      <tr>
        <th scope="row">{{$surgicalprocedure->id}}</th>
        <td>{{$surgicalprocedure->inicialtime}}</td>
        <td>{{$surgicalprocedure->finaltime}}</td>      
        <td>
          <div class="flex">
              <a href="{{url("procedimentocirugico/$surgicalprocedure->id")}}" class="p-4 text-black"><x-read></x-read></a>
              <form action="{{url("procedimentocirugico/$surgicalprocedure->id")}}" method="post">
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
  {{$surgicalprocedures->links()}}
@endsection
