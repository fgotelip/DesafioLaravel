@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
    </div>
@endif

<div class="text-center row">
            
    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="specialty_id">Procedimento</label>
        <select class="form-group" name="specialty_id" id="specialty_id" >
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$surgicalprocedure->id == $specialty->id ? "selected": ''}} 
                    value="{{$specialty->id}}">{{$specialty->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="doctor_id">Médico</label>
        <select  class="form-group" name="doctor_id" id="doctor_id">
            <option value="">Selecione</option>
            @foreach($doctors as $doctor)
                <option {{$surgicalprocedure->id == $doctor->id ? "selected": ''}} 
                    value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="inicialtime" class="required">Inicío</label>
        <input type="datetime-local" name="inicialtime" id="inicialtime" autofocus class="form-control" 
        required value="{{ old('inicialtime', $surgicalprocedure->inicialtime) }}"  @if (isset($view)) {!! $view !!}
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
        <select class="form-group" name="value" id="value">
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$surgicalprocedure->id == $specialty->id ? "selected": ''}} 
                    value="{{$specialty->value}}">{{$specialty->value}}</option>
            @endforeach

        </select>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).on('change', '#specialty_id', function(){
            $("#doctor_id").html(''); //Limpa o select de animais
            var valor = $("option:selected", this).val();
            $.ajax({
                url: `/catchdoctors/${valor}`,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    for(var i = 0; i < data.length; i++){
                        $("#doctor_id").append($("<option></option>").text(data[i].name).val(data[i].id))
                    }
                }
            });
        });
</script>