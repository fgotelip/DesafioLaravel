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
                <option
                    value="{{$specialty->id}}">{{$specialty->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="doctor_id">Médico</label>
        <select  class="form-group" name="doctor_id" id="doctor_id">
            <option value="">Selecione</option>
            @foreach($doctors as $doctor)
                <option
                    value="{{$doctor->id}}">{{$doctor->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="inicialtime" class="required">Inicío</label>
        <input type="datetime-local" name="inicialtime" id="inicialtime" autofocus class="form-control"
        required>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="finaltime" class="required">Fim</label>
        <input type="datetime-local" name="finaltime" id="finaltime" autofocus class="form-control">
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="valor">Valor:</label>
        <input type="text" id="valor" readonly>
    </div>





    <div class="text-center mt-5">
        <input class="btn btn-primary"
        type="submit" value="Agendar">
        <a class="btn btn-secondary"
         href="/procedimentocirugico/paciente">Voltar</a>
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
