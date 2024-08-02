<template>
  <section class="appointment-view">
    <div class="appointment-tabs">
      <div class="appointment-tabs-child" />
      <v-btn class="tab-items-vbtn" color="primary" variant="flat"
        >Upcoming</v-btn
      >
      <div class="tab-items">
        <div class="past1">Past</div>
        <div class="inv-choose2" @click="onInvChooseClick" />
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "AppointmentView",
  methods: {
    onInvChooseClick() {
      this.$router.push("/");
    },
  },
});
</script>
<style scoped>
.appointment-tabs-child {
  align-self: stretch;
  width: 1440px;
  position: relative;
  border-radius: var(--br-481xl);
  background-color: var(--color-gainsboro-300);
  display: none;
  max-width: 100%;
}
.tab-items-vbtn {
  flex: 1;
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.25);
  min-width: 468px;
  max-width: 100%;
  z-index: 1;
}
.past1 {
  position: absolute;
  top: 32px;
  left: 330px;
  display: inline-block;
  min-width: 63px;
  z-index: 1;
}
.inv-choose2 {
  position: absolute;
  top: 99px;
  left: 720px;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--color-gainsboro-400);
  width: 100%;
  height: 100%;
  transform: rotate(180deg);
  transform-origin: 0 0;
  cursor: pointer;
  z-index: 4;
}
.tab-items {
  height: 99px;
  flex: 1;
  position: relative;
  min-width: 468px;
  max-width: 100%;
}
.appointment-tabs {
  flex: 1;
  border-radius: var(--br-481xl);
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
  row-gap: 20px;
}
.appointment-view {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-61xl) var(--padding-52xl) var(--padding-54xl);
  box-sizing: border-box;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-11xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .tab-items-vbtn {
    min-width: 100%;
  }

  .past1 {
    font-size: var(--font-size-5xl);
  }

  .tab-items {
    min-width: 100%;
  }
}
@media screen and (max-width: 450px) {
  .past1 {
    font-size: var(--font-size-lg);
  }
}
</style>
