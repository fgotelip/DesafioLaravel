@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>
            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
        </strong>
    </div>
@endif

<div class="text-center row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome</label>
        <input type="text" name="name" id="name" autofocus class="form-control" 
        required value="{{ old('name', $helfcareplan->name) }}"  
        @if (isset($view)) {!! $view !!} @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="description" class="required">Descrição</label>
        <input type="text" name="description" id="description" autofocus class="form-control" 
        required value="{{ old('description', $helfcareplan->description) }}"
         @if (isset($view)) {!! $view !!} @endif>
    </div>
    
    <div class="form-group col-sm-12 col-md-4">
        <label for="discount" class="required">Desconto</label>
        <input type="text" name="discount" id="discount"
         value="{{ old('discount', $helfcareplan->discount) }}" autofocus class="form-control"
         required @if (isset($view)) {!! $view !!} @endif>
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