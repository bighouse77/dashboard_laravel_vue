<template>
  <div class="popup">
    <div class="popup-inner">
      <h4>Tem certeza disso?</h4> <br>
      <div class="btn-form">
        <button @click="popup" class="btn btn-secondary">Cancelar</button>&nbsp;&nbsp;
        <button @click="delData" type="submit" class="btn btn-danger">Apagar</button>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: "DeleteModalComponent",
  methods: {
    popup() {
      this.$emit('close');
    },
    delData(){
      this.$emit('deleteOk');
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
  font-family: 'Inter',serif;
  color: #293746;
}

.popup-inner {
  background-color: white;
  padding: 60px;

  box-shadow: 3px 2px 2px black;
  border-radius: 20px;
  font-weight: bold;
  text-align: center;
}

</style>