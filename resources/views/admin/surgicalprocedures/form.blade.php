<div class="text-center row">
            
            @if(Auth::guard('doctor')->user()->specialty_id)
            @php $id = Auth::guard('doctor')->user()->specialty_id @endphp
            @else
            @php $id = $surgicalprocedure->specialty_id @endphp
            @endif
            @foreach($specialties as $specialty)
                  @if($specialty->id==$id) @php $certa=$specialty @endphp @endif
            @endforeach 

            @php $id1 = $surgicalprocedure->doctor_id @endphp
            @foreach($doctors as $doctor)
                  @if($doctor->id==$id1) @php $certa1=$doctor @endphp @endif
            @endforeach 

    <div class="form-group col-sm-12 col-md-4 ml-15">
        <label for="specialty_id">Procedimento</label>
        <input type="text" name="specialty_id" id="specialty_id" autofocus class="form-control" 
        required value="{{$certa->name}}" readonly>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15">
        <label for="doctor_id">Médico</label>
        <input type="text" name="doctor_id" id="doctor_id" autofocus class="form-control" 
        required value="{{$certa1->name}}" readonly>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="inicialtime" class="required">Inicío</label>
        <input type="datetime-local" name="inicialtime" id="inicialtime" autofocus class="form-control" 
        required value="{{ old('inicialtime', $surgicalprocedure->inicialtime) }}" readonly>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="finaltime" class="required">Fim</label>
        <input type="datetime-local" name="finaltime" id="finaltime" autofocus class="form-control" 
        required value="{{ old('finaltime', $surgicalprocedure->finaltime) }}" readonly>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 ">
        <label for="value">Valor</label>
        <input type="number" name="value" id="value" autofocus class="form-control" 
        required value="{{ old('value', $surgicalprocedure->value) }}" readonly>
    </div>

   

    

    <div class="text-center mt-5">
        @if(isset($botao))
            {!! $botao !!}
        @endif
        @if(isset($botao2))
            {!! $botao2 !!}
        @endif
    </div>


</div>