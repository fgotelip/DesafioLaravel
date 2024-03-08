@extends('layouts.master')

@section('title')
    Relatório de Cirurgias
@endsection

@section('pdf')
      @php setlocale(LC_TIME, 'pt_BR.utf-8') @endphp

    <header class="bg-blue-500 py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-white text-2xl font-bold">Relatório de Cirurgias</h1>
        </div>
    </header>

    <!-- Corpo -->
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-bold mb-4">Nome: {{Auth::guard('doctor')->user()->name}}<br>Data e hora da emissão: {{date("d-m-Y H:i:s")}}</h2>
        @foreach($surgicalprocedures as $surgicalprocedure)
            @php $date = $surgicalprocedure->inicialtime @endphp
            @php $datec = new DateTime($date) @endphp
              <h3 class="text-center">@if($datec->format('m') == 1) {{ 'Janeiro' }} @endif
              @if($datec->format('m') == 2) {{ 'Fevereiro' }} @endif
              @if($datec->format('m') == 3) {{ 'Março' }} @endif
              @if($datec->format('m') == 4) {{ 'Abril' }} @endif
              @if($datec->format('m') == 5) {{ 'Maio' }} @endif
              @if($datec->format('m') == 6) {{ 'Junho' }} @endif
              @if($datec->format('m') == 7) {{ 'Julho' }} @endif
              @if($datec->format('m') == 8) {{ 'Agosto' }} @endif
              @if($datec->format('m') == 9) {{ 'Setembro' }} @endif
              @if($datec->format('m') == 10) {{ 'Outubro' }} @endif
              @if($datec->format('m') == 11) {{ 'Novembro' }} @endif
              @if($datec->format('m') == 12) {{ 'Dezembro' }} @endif</h3>
              <br>
        @endforeach
    
@endsection
