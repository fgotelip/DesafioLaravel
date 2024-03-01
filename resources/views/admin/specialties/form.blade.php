<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" 
        required value="{{ old('name', $specialty->name) }}"  @if (isset($view)) {!! $view !!}
        @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="description" class="required">Descrição</label>
        <input type="text" name="description" id="description" autofocus class="form-control" 
        required value="{{ old('description', $specialty->description) }}" @if (isset($view)) {!! $view !!}
        @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="value" class="required">Preço</label>
        <input type="text" name="value" id="value" value="{{ old('value', $specialty->value) }}" autofocus class="form-control"
         required @if (isset($view)) {!! $view !!}
        @endif>
    </div>

   


</div>

<div class="text-center mt-20">
        @if(isset($botao))
            {!! $botao !!}
        @endif
        @if(isset($botao2))
            {!! $botao2 !!}
        @endif
    </div>