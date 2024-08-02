<template>
  <div class="p-p">
    <div class="p-p-child" />
    <Navigation1 uSERMANAGEMENTTextDecoration="none" />
    <main class="header2"><HeaderContent /><MainContent /></main>
    <div class="extension6" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Navigation1 from "../components/Navigation1.vue";
import HeaderContent from "../components/HeaderContent.vue";
import MainContent from "../components/MainContent.vue";

export default defineComponent({
  name: "PP",
  components: { Navigation1, HeaderContent, MainContent },
});
</script>
<style scoped>
.p-p-child {
  height: 69px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
  z-index: 2;
}
.header2 {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-11xs);
  min-width: 1035px;
  max-width: 100%;
}
.extension6 {
  height: 1306px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
  z-index: 1;
}
.p-p {
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
  .header2 {
    min-width: 100%;
  }
}
</style>
