@if($errors->any())
    <div class="alert alert-danger" role="alert">
        {{ $errors->first() }}
    </div>
@endif

<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" maxlength="100" required value="{{ old('nome') }}">
</div>

<div class="form-group">
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" maxlength="20" required value="{{ old('rg') }}">
</div>

<div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="11" required value="{{ old('cpf') }}">
</div>

<div class="form-group">
    <label for="estado_civil">Estado Civil:</label>
    <select id="estado_civil" name="estado_civil" required>
        <option value="">Selecione</option>
        <option value="Solteiro" {{ old('estado_civil') == 'Solteiro' ? 'selected' : '' }}>Solteiro(a)</option>
        <option value="Casado" {{ old('estado_civil') == 'Casado' ? 'selected' : '' }}>Casado(a)</option>
        <option value="Divorciado" {{ old('estado_civil') == 'Divorciado' ? 'selected' : '' }}>Divorciado(a)</option>
        <option value="Viúvo" {{ old('estado_civil') == 'Viúvo' ? 'selected' : '' }}>Viúvo(a)</option>
        <option value="Separado" {{ old('estado_civil') == 'Separado' ? 'selected' : '' }}>Separado(a)</option>
    </select>
</div>

<div class="form-group">
    <label for="apelido">Apelido (opcional):</label>
    <input type="text" id="apelido" name="apelido" maxlength="100" value="{{ old('apelido') }}">
</div>

<div class="form-group">
    <label for="nacionalidade">Nacionalidade:</label>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="100" required
        value="{{ old('nacionalidade') }}">
</div>

<div class="form-group">
    <label for="naturalidade">Naturalidade:</label>
    <input type="text" id="naturalidade" name="naturalidade" maxlength="100" required value="{{ old('naturalidade') }}">
</div>

<div class="form-group">
    <label for="tipo_sanguineo">Tipo Sanguíneo:</label>
    <select id="tipo_sanguineo" name="tipo_sanguineo" required>
        <option value="">Selecione</option>
        <option value="A+" {{ old('tipo_sanguineo') == 'A+' ? 'selected' : '' }}>A+</option>
        <option value="A-" {{ old('tipo_sanguineo') == 'A-' ? 'selected' : '' }}>A-</option>
        <option value="B+" {{ old('tipo_sanguineo') == 'B+' ? 'selected' : '' }}>B+</option>
        <option value="B-" {{ old('tipo_sanguineo') == 'B-' ? 'selected' : '' }}>B-</option>
        <option value="AB+" {{ old('tipo_sanguineo') == 'AB+' ? 'selected' : '' }}>AB+</option>
        <option value="AB-" {{ old('tipo_sanguineo') == 'AB-' ? 'selected' : '' }}>AB-</option>
        <option value="O+" {{ old('tipo_sanguineo') == 'O+' ? 'selected' : '' }}>O+</option>
        <option value="O-" {{ old('tipo_sanguineo') == 'O-' ? 'selected' : '' }}>O-</option>
    </select>
</div>

<div class="form-group">
    <label for="data_de_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_de_nascimento" name="data_de_nascimento" required
        value="{{ old('data_de_nascimento') }}">
</div>

<div class="form-group">
    <label>Sexo:</label>
    <div>
        <input type="radio" id="sexo_m" name="sexo" value="M" required {{ old('sexo') == 'M' ? 'checked' : '' }}>
        <label for="sexo_m" style="display: inline;">Masculino</label>

        <input type="radio" id="sexo_f" name="sexo" value="F" {{ old('sexo') == 'F' ? 'checked' : '' }}>
        <label for="sexo_f" style="display: inline;">Feminino</label>
    </div>
</div>

<div class="form-group">
    <label for="peso_inicial">Peso Inicial (kg):</label>
    <input type="number" id="peso_inicial" name="peso_inicial" step="0.01" min="0" required
        value="{{ old('peso_inicial') }}">
</div>

<button type="submit">Enviar</button>