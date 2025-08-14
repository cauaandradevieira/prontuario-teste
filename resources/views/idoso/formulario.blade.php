<!-- Modal -->
<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" maxlength="100" required>
</div>

<div class="form-group">
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" maxlength="20" required>
</div>

<div class="form-group">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" maxlength="11" required>
</div>

<div class="form-group">
    <label for="estado_civil">Estado Civil:</label>
    <select id="estado_civil" name="estado_civil" required>
        <option value="">Selecione</option>
        <option value="Solteiro">Solteiro(a)</option>
        <option value="Casado">Casado(a)</option>
        <option value="Divorciado">Divorciado(a)</option>
        <option value="Viúvo">Viúvo(a)</option>
        <option value="Separado">Separado(a)</option>
    </select>
</div>

<div class="form-group">
    <label for="apelido">Apelido (opcional):</label>
    <input type="text" id="apelido" name="apelido" maxlength="100">
</div>

<div class="form-group">
    <label for="nacionalidade">Nacionalidade:</label>
    <input type="text" id="nacionalidade" name="nacionalidade" maxlength="100" required>
</div>

<div class="form-group">
    <label for="naturalidade">Naturalidade:</label>
    <input type="text" id="naturalidade" name="naturalidade" maxlength="100" required>
</div>

<div class="form-group">
    <label for="tipo_sanguineo">Tipo Sanguíneo:</label>
    <select id="tipo_sanguineo" name="tipo_sanguineo" required>
        <option value="">Selecione</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
</div>

<div class="form-group">
    <label for="data_de_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_de_nascimento" name="data_de_nascimento" required>
</div>

<div class="form-group">
    <label>Sexo:</label>
    <div>
        <input type="radio" id="sexo_m" name="sexo" value="M" required>
        <label for="sexo_m" style="display: inline;">Masculino</label>

        <input type="radio" id="sexo_f" name="sexo" value="F">
        <label for="sexo_f" style="display: inline;">Feminino</label>
    </div>
</div>

<div class="form-group">
    <label for="peso_inicial">Peso Inicial (kg):</label>
    <input type="number" id="peso_inicial" name="peso_inicial" step="0.01" min="0" required>
</div>

<button type="submit">Enviar</button>