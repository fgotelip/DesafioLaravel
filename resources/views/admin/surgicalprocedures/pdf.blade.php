@extends('layouts.master')

@section('title')
    Relatório de Cirurgias
@endsection

@section('pdf')
            @foreach($surgicalprocedures as $surgicalprocedure)
                @php $id = $surgicalprocedure->specialty_id @endphp
                @foreach($specialties as $specialty)
                    @if($specialty->id==$id) @php $certa=$specialty @endphp @endif
                @endforeach 
            @endforeach

    <header class="bg-blue-500 py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-white text-2xl font-bold">Relatório de Cirurgias</h1>
        </div>
    </header>

    <!-- Corpo -->
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-xl font-bold mb-4">Nome: {{Auth::guard('doctor')->user()->name}}<br>Data e hora da emissão: {{date("d-m-Y H:i:s")}}</h2>
        @php $a=0; $b=0; $c=0; $d=0; $e=0; $f=0; $g=0; $h=0; $i=0; $j=0; $k=0; $l=0; @endphp
        @foreach($surgicalprocedures as $surgicalprocedure)

            @php $id1 = $surgicalprocedure->patient_id @endphp
            @foreach($patients as $patient)
                  @if($patient->id==$id1) @php $certa1=$patient @endphp @endif
            @endforeach 

            

            @php $date = $surgicalprocedure->inicialtime @endphp
            @php $datec = new DateTime($date) @endphp
            
              <h3 class="text-center">@if($datec->format('m') == 1 && $a==0) {{ 'Janeiro' }} @endif
              @if($datec->format('m') == 2 && $b==0) {{ 'Fevereiro' }} @endif
              @if($datec->format('m') == 3 && $c==0) {{ 'Março' }} @endif
              @if($datec->format('m') == 4 && $d==0) {{ 'Abril' }} @endif
              @if($datec->format('m') == 5 && $e==0) {{ 'Maio' }} @endif
              @if($datec->format('m') == 6 && $f==0) {{ 'Junho' }} @endif
              @if($datec->format('m') == 7 && $g==0) {{ 'Julho' }} @endif
              @if($datec->format('m') == 8 && $h==0) {{ 'Agosto' }} @endif
              @if($datec->format('m') == 9 && $i==0) {{ 'Setembro' }} @endif
              @if($datec->format('m') == 10 && $j==0) {{ 'Outubro' }} @endif
              @if($datec->format('m') == 11 && $k==0) {{ 'Novembro' }} @endif
              @if($datec->format('m') == 12 && $l==0) {{ 'Dezembro' }} @endif</h3>
              <table class="table">
                <thead>
                    <tr>
                    <th>Nome do Paciente</th>
                    <th>Procedimento</th>
                    <th>Data</th>
                    <th>Custo</th>
                    </tr>
                </thead>
            

                <tbody>
                    <tr>
                    <td>{{$certa1->name}}</td>
                    <td>{{$certa->name}}</td>
                    <td>{{$date}}</td>
                    <td>{{$certa->value}}</td>
                    </tr>
                </tbody>
              </table>
             

        @endforeach
    
@endsection


