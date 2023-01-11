<template>
    <div class="popup">
        <div class="popup-inner">
            <h3>Cadastro de Professores</h3>
            <div class="form">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome completo</label>
                      <input type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp" placeholder="Digite seu nome completo...">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="exemplo@exemplo.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Website</label>
                        <input type="text" class="form-control" id="exampleInputText" placeholder="www.exemplo.com.br">
                      </div>

                    <div class="btn-form">
                        <button @click="popup" class="btn btn-danger">Cancelar</button>&nbsp;&nbsp;
                        <button type="submit" class="insert btn btn-success">Cadastrar</button>
                    </div>
                  </form>
            </div>

            
        
        </div>
    </div>
</template>

<script>
export default {
    name: 'CadastroPopupComponent',
    methods: {
        popup() {
            this.$emit('close');
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap');
.popup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 99;
    background-color: rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Inter';
    color: #293746;
    
}

.popup-inner {
    background-color: white;
    padding: 32px;
    width: 800px;
    box-shadow: 3px 2px 2px black;
    
}

.popup-inner h3 {
    font-weight: bold;
}

.form {
    margin-top: 50px;
    font-weight: bold;
}

.btn-form {
    margin-top: 40px;
    display: flex;
    justify-content: right;
}
</style>