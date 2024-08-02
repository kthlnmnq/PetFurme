<template>
  <section class="appointments2">
    <div class="frame-parent15">
      <div class="rectangle-parent5">
        <div class="frame-child11" />
        <div class="upcoming-parent">
          <div class="upcoming">Upcoming</div>
          <div class="inv-choose" @click="onInvChooseClick" />
        </div>
      </div>
      <div class="white-idn-parent">
        <div class="white-idn" />
        <div class="past-parent">
          <div class="past">Past</div>
          <div class="inv-choose1" />
        </div>
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Appointments",
  methods: {
    onInvChooseClick() {
      this.$router.push("/5-a-up");
    },
  },
});
</script>
<style scoped>
.frame-child11 {
  align-self: stretch;
  width: 1440px;
  position: relative;
  border-radius: var(--br-481xl);
  background-color: var(--color-gainsboro-300);
  display: none;
  max-width: 100%;
}
.upcoming {
  position: absolute;
  top: 35px;
  left: 285px;
  z-index: 1;
}
.inv-choose {
  position: absolute;
  top: 0px;
  left: 0px;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--color-gainsboro-400);
  width: 100%;
  height: 100%;
  cursor: pointer;
  z-index: 2;
}
.upcoming-parent {
  height: 99px;
  width: 720px;
  position: relative;
  max-width: 100%;
}
.rectangle-parent5 {
  flex: 1;
  border-radius: var(--br-481xl);
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.white-idn {
  align-self: stretch;
  width: 720px;
  position: relative;
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-481xl);
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
}
.past {
  position: relative;
  font-weight: 600;
  display: inline-block;
  min-width: 65px;
  z-index: 2;
}
.inv-choose1 {
  height: 100%;
  width: 100%;
  position: absolute;
  margin: 0 !important;
  top: 99px;
  right: -720px;
  bottom: -99px;
  left: 720px;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--color-gainsboro-400);
  transform: rotate(180deg);
  transform-origin: 0 0;
  z-index: 3;
}
.past-parent {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: var(--padding-13xl) var(--padding-xl) var(--padding-12xl);
  box-sizing: border-box;
  position: relative;
  max-width: 100%;
}
.white-idn-parent {
  width: 720px;
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-481xl);
  background-color: var(--color-whitesmoke-100);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
  z-index: 1;
  margin-left: -717px;
}
.frame-parent15 {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.appointments2 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-58xl) var(--padding-52xl) var(--padding-54xl);
  box-sizing: border-box;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-11xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .upcoming {
    font-size: var(--font-size-5xl);
  }

  .past {
    font-size: var(--font-size-5xl);
  }
}
@media screen and (max-width: 450px) {
  .upcoming {
    font-size: var(--font-size-lg);
  }

  .past {
    font-size: var(--font-size-lg);
  }
}
</style>
