<div>
    <label for="name">nome</label>
    <input type="text" name="name" value="{{ $perfil->name ?? old('name') }}">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
<a href="{{ route('perfil.index') }}" class="btn btn-danger">Cancelar</a>
</form>