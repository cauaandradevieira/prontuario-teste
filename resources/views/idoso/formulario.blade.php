<div class="container shadow-lg">
    <h3 style="text-align: center;" class="fw-bold">Cadastro de idosos</h3>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nome">Nome <span class="required-field" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="nome" required>
            </div>

            <div class="form-group">
                <label for="rg">RG <span class="required-field" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="rg" maxlength="7">
            </div>

            <div class="form-group">
                <label for="cpf">CPF <span class="required-field" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="cpf" maxlength="11" required>
            </div>

            <div class="form-group">
                <label for="estado_civil">Estado Civil <span class="required-field" style="color: red;">*</span></label>
                <select class="form-control" id="estado_civil" required>
                    <option value="">Selecione</option>
                    <option value="Solteiro">Solteiro(a)</option>
                    <option value="Casado">Casado(a)</option>
                    <option value="Divorciado">Divorciado(a)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="apelido">Apelido (opcional)</label>
                <input type="text" class="form-control" id="apelido">
            </div>
        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label for="nacionalidade">Nacionalidade <span class="required-field" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="nacionalidade" required>
            </div>

            <div class="form-group">
                <label for="naturalidade">Naturalidade <span class="required-field" style="color: red;">*</span></label>
                <input type="text" class="form-control" id="naturalidade" required>
            </div>

            <div class="form-group">
                <label for="tipo_sanguineo">Tipo Sanguíneo <span class="required-field" style="color: red;">*</span></label>
                <select class="form-control" id="tipo_sanguineo" required>
                    <option value="">Selecione</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento <span class="required-field" style="color: red;">*</span></label>
                <input type="date" class="form-control" id="data_nascimento" required>
            </div>

            <div class="form-group">
                <label>Sexo <span class="required-field" style="color: red;">*</span></label>
                <div>
                    <input type="radio" id="sexo_m" name="sexo" value="M" required>
                    <label for="sexo_m">Masculino</label>

                    <input type="radio" id="sexo_f" name="sexo" value="F">
                    <label for="sexo_f">Feminino</label>
                </div>
            </div>

            <div class="form-group">
                <label for="peso">Peso Inicial (kg) <span class="required-field" style="color: red;">*</span></label>
                <input type="number" class="form-control" id="peso" step="0.01" required>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary mt-3">Enviar</button>

</div>