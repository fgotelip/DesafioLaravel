@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
    </div>
@endif


@php $id = Auth::guard('doctor')->user()->specialty_id @endphp

<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" 
        required value="{{ Auth::guard('doctor')->user()->name}}" 
        >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" autofocus class="form-control" 
        required value="{{ Auth::guard('doctor')->user()->email }}"
        >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha</label>
        <input type="password" name="password" id="password" value="{{ Auth::guard('doctor')->user()->password }}" autofocus class="form-control"
         required
        >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="wasbornat" class="required">Data de Nascimento</label>
        <input type="date" name="wasbornat" id="wasbornat" autofocus class="form-control"
         required value="{{ Auth::guard('doctor')->user()->wasbornat }}"
        >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="address" class="required">Endereço</label>
        <input type="text" name="address" id="address" autofocus class="form-control"
         required value="{{ Auth::guard('doctor')->user()->address }}"
        >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="tell" class="required">Telefone</label>
        <input type="tel" name="tell" id="tell" autofocus class="form-control"
         required value="{{ Auth::guard('doctor')->user()->tell }}"
        >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">cpf</label>
        <input type="text" name="cpf" id="cpf" autofocus class="form-control"
         required value="{{ Auth::guard('doctor')->user()->cpf }}"
        >
    </div>
    
    <div class="form-group col-sm-12 col-md-4 mt-4">
        <label for="workhours" class="required">Turno</label>
        <select  class="form-group" name="workhours" id="workhours" required >
            <option value="">Selecione</option>
            <option {{Auth::guard('doctor')->user()->workhours == "diurno" ? "selected":''}}>diurno</option>
            <option {{Auth::guard('doctor')->user()->workhours == "noturno" ? "selected":''}}>noturno</option>
            <option {{Auth::guard('doctor')->user()->workhours == "integral" ? "selected":''}}>integral</option>
        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="crm" class="required">crm</label>
        <input type="number" name="crm" id="crm" autofocus class="form-control"
         required value="{{ Auth::guard('doctor')->user()->crm }}"
        >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="pic" class="required">Foto</label>
        <input required type="file" name="pic" id="pic"  autofocus class="form-control">
         <img class="w-1/5 rounded-circle" src="{{asset('storage/medicos/' . Auth::guard('doctor')->user()->pic)}}">
    </div>

    

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="specialty_id">Especialidade</label>
        <select class="form-group" name="specialty_id" id="specialty_id" 
        >
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$specialty->id==$id ? "selected": ''}} 
                    value="{{$specialty->id}}">{{$specialty->name}}</option>
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