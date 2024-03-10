@foreach($surgicalprocedures as $surgicalprocedure)

            @php $id1 = $surgicalprocedure->patient_id @endphp
            @foreach($patients as $patient)
                  @if($patient->id==$id1) @php $certa1=$patient @endphp @endif
            @endforeach 

            @php $date = $surgicalprocedure->inicialtime @endphp
            @php $datec = new DateTime($date) @endphp
            
              <h3 class="text-center">@if($datec->format('m') == 1 @if(isset($var) {!! $var !!}&& $a==0) {{ 'Janeiro' }} @endif</h3>
              <table class="table">
                @if($a==0)
                <thead>
                    <tr>
                    <th>Nome do Paciente</th>
                    <th>Procedimento</th>
                    <th>Data</th>
                    <th>Custo</th>
                    </tr>
                </thead>
                @php $a++ @endphp
                @endif

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