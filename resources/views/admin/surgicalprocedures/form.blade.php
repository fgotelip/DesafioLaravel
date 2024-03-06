@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
    </div>
@endif

<div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="specialty_id">Procedimento</label>
        <select class="form-group" name="specialty_id" id="specialty_id" 
        @if (isset($view)) {!! $view !!} @endif>
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$surgicalprocedure->id == $specialty->id ? "selected": ''}} 
                    value="{{$specialty->id}}">{{$specialty->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="doctor_id">Médico</label>
        <select class="form-group" name="doctor_id" id="doctor_id" 
        @if (isset($view)) {!! $view !!} @endif>
            <option value="">Selecione</option>
            @foreach($doctors as $doctor)
                <option {{$surgicalprocedure->id == $doctor->id ? "selected": ''}} 
                    value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach

        </select>
    </div>


<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="inialtime" class="required">Inicío</label>
        <input type="datetime-local" name="inialtime" id="inialtime" autofocus class="form-control" 
        required value="{{ old('inialtime', $surgicalprocedure->inialtime) }}"  @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="finaltime" class="required">Fim</label>
        <input type="datetime-local" name="finaltime" id="finaltime" autofocus class="form-control" 
        required value="{{ old('finaltime', $surgicalprocedure->finaltime) }}"  @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="value">Valor</label>
        <select class="form-group" name="value" id="value" 
        @if (isset($view)) {!! $view !!} @endif>
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$surgicalprocedure->id == $specialty->id ? "selected": ''}} 
                    value="{{$specialty->value}}">{{$specialty->value}}</option>
            @endforeach

        </select>
    </div>

    

    <div class="text-center">
        @if(isset($botao))
            {!! $botao !!}
        @endif
        @if(isset($botao2))
            {!! $botao2 !!}
        @endif
    </div>


</div>