<template>
  <div class="po-12" :style="pO1Style">
    <div class="po-1-child1" />
    <div class="appointment-date-wrapper1">
      <div class="appointment-date2">Appointment date</div>
    </div>
    <div class="user-items" :style="userItemsStyle">
      <div class="user-icon-wrapper">
        <div class="user-icon-wrapper-child" />
      </div>
      <img class="user-photo-icon9" loading="lazy" alt="" :src="userPhoto" />
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PO",
  props: {
    userPhoto: { type: String },
    appointmentDateTop: { type: [Object, Array, String, Number, Boolean] },
    appointmentDateHeight: { type: [Object, Array, String, Number, Boolean] },
    userPhotoIconHeight: { type: [Object, Array, String, Number, Boolean] },
  },
  computed: {
    pO1Style() {
      return {
        top: this.appointmentDateTop,
        height: this.appointmentDateHeight,
      };
    },
    userItemsStyle() {
      return {
        height: this.userPhotoIconHeight,
      };
    },
  },
});
</script>
<style scoped>
.po-1-child1 {
  width: 1407px;
  height: 340px;
  position: relative;
  box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-royalblue);
  display: none;
  max-width: 100%;
}
.appointment-date2 {
  position: relative;
  letter-spacing: 0.05em;
  font-weight: 500;
  z-index: 1;
}
.appointment-date-wrapper1 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-9xs);
}
.user-icon-wrapper-child {
  align-self: stretch;
  flex: 1;
  position: relative;
  border-top: 1px solid var(--theme-white-default);
  box-sizing: border-box;
  max-width: 100%;
  z-index: 1;
}
.user-icon-wrapper {
  align-self: stretch;
  height: 1px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-9xs);
  box-sizing: border-box;
  max-width: 100%;
}
.user-photo-icon9 {
  width: 101.1px;
  height: 100px;
  position: relative;
  border-radius: var(--br-31xl);
  object-fit: cover;
  z-index: 1;
}
.user-items {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-17xl-8);
  max-width: 100%;
}
.po-12 {
  position: absolute;
  top: 530px;
  left: 420px;
  box-shadow: 0px 5px 5px 1px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-royalblue);
  width: 1407px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-10xl) var(--padding-8xl) var(--padding-58xl)
    var(--padding-19xl);
  box-sizing: border-box;
  gap: var(--gap-47xl-2);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}

@media screen and (max-width: 450px) {
  .appointment-date2 {
    font-size: var(--font-size-xl);
  }
}
</style>
