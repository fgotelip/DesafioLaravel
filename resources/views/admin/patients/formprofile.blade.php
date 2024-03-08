@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
        </strong>
    </div>
@endif


<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" 
        required value="{{ Auth::guard('patient')->user()->name }}" 
       >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" autofocus class="form-control" 
        required value="{{ Auth::guard('patient')->user()->email }}"
       >
    </div>
    
    <div class="form-group col-sm-12 col-md-4" @if(isset($full)) {!! $full !!} @endif>
        <label for="password" class="required">Senha</label>
        <input type="password" name="password" id="password" autofocus class="form-control" value="{{ Auth::guard('patient')->user()->password }}"
         required>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="wasbornat" class="required">Data de Nascimento</label>
        <input type="date" name="wasbornat" id="wasbornat" autofocus class="form-control"
         required value="{{ Auth::guard('patient')->user()->wasbornat }}"
       >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="address" class="required">Endereço</label>
        <input type="text" name="address" id="address" autofocus class="form-control"
         required value="{{ Auth::guard('patient')->user()->address }}"
       >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="tell" class="required">Telefone</label>
        <input type="tel" name="tell" id="tell" autofocus class="form-control"
         required value="{{ Auth::guard('patient')->user()->tell }}"
       >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">CPF</label>
        <input type="text" name="cpf" id="cpf" autofocus class="form-control"
         required value="{{ Auth::guard('patient')->user()->cpf }}"
       >
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="typeofblood" class="required">Tipo Sanguíneo</label>
        <input type="text" name="typeofblood" id="typeofblood" autofocus class="form-control"
         required value="{{ Auth::guard('patient')->user()->typeofblood }}"
       >
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="pic" class="required">Foto</label>
        <input type="file" name="pic" id="pic" autofocus class="form-control"
         value="{{asset('storage/paciente/' . Auth::guard('patient')->user()->pic)}}"
       required>
        <img class="w-1/5 rounded-circle" src="{{asset('storage/paciente/' . Auth::guard('patient')->user()->pic)}}">
    </div>

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="helfcareplan_id">Plano de Saúde</label>
        <select class="form-group" name="helfcareplan_id" id="helfcareplan_id" 
       >
            <option value="">Selecione</option>
            @foreach($helfcareplans as $helfcareplan)
                <option {{Auth::guard('patient')->user()->id == $helfcareplan->id ? "selected": ''}} 
                    value="{{$helfcareplan->id}}">{{$helfcareplan->name}}</option>
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