<div class="row">
    <div class="input-field col s12">
        <input type="text" name="titulo" required value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
        <label>Título</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
            <input type="text" name="descricao" required value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
        <label>Descrição</label>
    </div>
</div>

<div class="row"><div class="row">
<div class="input-field col s12">
        <input type="text" name="valor" required value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>
</div>

<div class="row">
<div class="input-field file-field">
    <div class="btn grey darken-4">
        <span>Imagem</span>
        <input type="file" name="image">
    </div>
    <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
    </div>
</div>
</div>
@if(isset($registro->image))
<div>
    <img width="150" src="{{asset($registro->image)}}">
</div>
@endif

<div class="row">
<div class="">
    <p>
        <label>
            <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == true ? 'checked' : ''}} value="true"/>
            <span>Publicar ?</span>
        </label>
    </p>
</div>
</div>
