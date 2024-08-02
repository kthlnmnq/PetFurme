<template>
  <div class="p-pp">
    <div class="p-pp-child" />
    <Navigation1
      uSERMANAGEMENTTextDecoration="unset"
      :onPetOwnerTextClick="onPetOwnerTextClick"
    />
    <main class="header4">
      <Navbar petProfile="Prescriptions" /><MainContent1 />
    </main>
    <div class="extension8" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Navigation1 from "../components/Navigation1.vue";
import Navbar from "../components/Navbar.vue";
import MainContent1 from "../components/MainContent1.vue";

export default defineComponent({
  name: "PPP",
  components: { Navigation1, Navbar, MainContent1 },
  methods: {
    onPetOwnerTextClick() {
      this.$router.push("/8-peto");
    },
  },
});
</script>
<style scoped>
.p-pp-child {
  height: 69px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
  z-index: 2;
}
.header4 {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-11xs);
  min-width: 1035px;
  max-width: 100%;
}
.extension8 {
  height: 1306px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
  z-index: 1;
}
.p-pp {
  width: 100%;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: flex-start;
  line-height: normal;
  letter-spacing: normal;
  row-gap: 20px;
}

@media screen and (max-width: 1225px) {
  .header4 {
    min-width: 100%;
  }
}
</style>
