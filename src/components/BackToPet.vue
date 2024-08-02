<template>
  <div class="back-to-pet" @click="onBackToPetClick">
    <img
      class="weuiarrow-outlined-icon2"
      loading="lazy"
      alt=""
      src="/weuiarrowoutlined1.svg"
    />
    <div class="back-label">
      <b class="pet-profile">Pet Profile</b>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "BackToPet",
  methods: {
    onBackToPetClick() {
      this.$router.push("/9-p");
    },
  },
});
</script>
<style scoped>
.weuiarrow-outlined-icon2 {
  height: 55.4px;
  width: 31.2px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.pet-profile {
  position: relative;
}
.back-label {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-10xs) 0px 0px;
}
.back-to-pet {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl-8);
  cursor: pointer;
  z-index: 1;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .pet-profile {
    font-size: var(--font-size-13xl);
  }
}
@media screen and (max-width: 450px) {
  .pet-profile {
    font-size: var(--font-size-5xl);
  }
}
</style>
