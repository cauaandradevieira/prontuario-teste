<div>
    <label for="nome">nome</label>
    <input type="text" name="nome" value="{{ $perfil->nome ?? old('nome') }}">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
<a href="{{ route('perfil.index') }}" class="btn btn-danger">Cancelar</a>
</form>