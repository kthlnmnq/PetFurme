<template>
  <section class="header-content1">
    <HEADER
      propAlignSelf="stretch"
      propPosition="unset"
      propTop="unset"
      propLeft="unset"
      propWidth="unset"
      propHeight="unset"
      propMinHeight="unset"
      propHeight1="unset"
    />
    <div class="back1">
      <div class="back-p1" />
      <BackToPet />
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import HEADER from "./HEADER.vue";
import BackToPet from "./BackToPet.vue";

export default defineComponent({
  name: "HeaderContent",
  components: { HEADER, BackToPet },
});
</script>
<style scoped>
.back-p1 {
  height: 138px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
}
.back1 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-26xl) var(--padding-13xl) var(--padding-18xl-6);
  box-sizing: border-box;
  max-width: 100%;
  margin-top: -2px;
}
.header-content1 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}
</style>
