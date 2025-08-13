  const roleDropdown = document.getElementById('perfil_id');
const inputId = document.getElementById('inputs');


const isDropdownFound = () => {


    if (!roleDropdown) {
        console.log('dropdown nao encontrada');
        return false;
    }
    return true;
}


const isInputsFound = () => {
    if (!inputId) {
        console.log('input nao encontrada');
        return false;
    }
    return true;
}


const isValueInputValid = () => {
    if (roleDropdown.value === 0 || roleDropdown.value > 6) {
        console.log('valor do dropdown invalido');
        return false;
    }
    return true;
}


const inputMedico = () => {
    inputId.innerHTML = `
        <div class="mb-3">
            <label for="text" class="form-label">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm">
        </div>
    `;
}


const inputEnfermeiro = () => {
    inputId.innerHTML = `
        <div class="mb-3">
            <label for="text" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
    `;
}


const inputTecEnfermagem = () => {
    inputId.innerHTML = `
        <div class="mb-3">
            <label for="text" class="form-label">COREN</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
        </div>
    `;
}


roleDropdown.addEventListener('change', () => {


    if(!isDropdownFound()){
        return;
    }


    if(!isValueInputValid())
    {
        return;
    }


    const value = roleDropdown.value;

    if(value === '5')
    {
        inputMedico();
        return;
    }


    if(value === '4')
    {
        inputEnfermeiro();
        return;
    }


    if(value === '6')
    {
        inputTecEnfermagem();
        return;
    }


    inputId.innerHTML = '';
})