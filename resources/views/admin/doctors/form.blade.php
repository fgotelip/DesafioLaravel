<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" 
        required value="{{ old('name', $doctor->name) }}"  @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">Email</label>
        <input type="email" name="email" id="email" autofocus class="form-control" 
        required value="{{ old('email', $doctor->email) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha</label>
        <input type="password" name="password" id="password" value="{{ old('password', $doctor->password) }}" autofocus class="form-control"
         required @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="wasbornat" class="required">Data de Nascimento</label>
        <input type="date" name="wasbornat" id="wasbornat" autofocus class="form-control"
         required value="{{ old('wasbornat', $doctor->wasbornat) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="address" class="required">Endereço</label>
        <input type="text" name="address" id="address" autofocus class="form-control"
         required value="{{ old('address', $doctor->address) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="tell" class="required">Telefone</label>
        <input type="tel" name="tell" id="tell" autofocus class="form-control"
         required value="{{ old('tell', $doctor->tell) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">cpf</label>
        <input type="text" name="cpf" id="cpf" autofocus class="form-control"
         required value="{{ old('cpf', $doctor->cpf) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="workhours" class="required">Turno</label>
        <select class="form-group" name="workhours" id="workhours" required 
        value="{{ old('workhours', $doctor->workhours ?? null)}}" 
        @if (isset($view)) { !! $view !!} @endif>
            <option value="">Selecione</option>
            <option {{$doctor->workhours == "diurno" ? "selected":''}}>diurno</option>
            <option {{$doctor->workhours == "noturno" ? "selected":''}}>noturno</option>
            <option {{$doctor->workhours == "integral" ? "selected":''}}>integral</option>
        </select>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="crm" class="required">crm</label>
        <input type="number" name="crm" id="crm" autofocus class="form-control"
         required value="{{ old('crm', $doctor->crm) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="pic" class="required">Foto</label>
        <input type="file" name="pic" id="pic" autofocus class="form-control"
         required @if (isset($view)) {!! $view !!} @endif>
         <img src="{{asset('storage/paciente/' . $patient->pic)}}">
    </div>

    

    <div class="form-group col-sm-12 col-md-4 ml-15 mt-3">
        <label for="specialty_id">Especialidade</label>
        <select class="form-group" name="specialty_id" id="specialty_id" 
        @if (isset($view)) {!! $view !!} @endif>
            <option value="">Selecione</option>
            @foreach($specialties as $specialty)
                <option {{$doctor->id == $specialty->id ? "selected": ''}} 
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