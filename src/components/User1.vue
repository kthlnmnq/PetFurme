<template>
  <div class="user1">
    <div class="user-inner" />
    <div class="wrapper2">
      <div class="div14">2</div>
    </div>
    <div class="wrapper3">
      <div class="purok-3-san">09223456789</div>
    </div>
    <div class="frame-parent30">
      <div class="rectangle-wrapper">
        <div class="frame-child27" />
      </div>
      <div class="jane-doe-wrapper">
        <div class="jane-doe">Jane Doe</div>
      </div>
      <div class="p-status-container">
        <v-btn class="p-status-vbtn1" color="#7fe18f" variant="flat"
          >Active</v-btn
        >
      </div>
      <div class="jane-doe-wrapper">
        <div class="purok-3-san">Purok 3 San Ro...</div>
      </div>
    </div>
    <v-btn class="vm-btn-vbtn" color="#7fe18f" variant="flat">View more</v-btn>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "User1",
});
</script>
<style scoped>
.user-inner {
  position: absolute;
  top: 0px;
  left: 0px;
  background-color: var(--color-lightsteelblue-100);
  width: 100%;
  height: 100%;
}
.div14 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 16px;
  z-index: 1;
}
.wrapper2 {
  position: absolute;
  top: 55px;
  left: 894px;
  height: 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
}
.wrapper3 {
  position: absolute;
  top: 55px;
  left: 1090px;
  height: 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
}
.frame-child27 {
  width: 33px;
  height: 33px;
  position: relative;
  border-radius: var(--br-3xs);
  border: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.rectangle-wrapper {
  height: 33px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-smi) 0px 0px;
  box-sizing: border-box;
}
.jane-doe {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 113px;
  z-index: 1;
}
.jane-doe-wrapper {
  height: 30px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
}
.p-status-vbtn1 {
  z-index: 1;
}
.p-status-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
}
.purok-3-san {
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.frame-parent30 {
  position: absolute;
  top: 41px;
  left: 78px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-5xl) 0px 0px;
  gap: var(--gap-21xl);
}
.vm-btn-vbtn {
  position: absolute;
  top: 41px;
  left: 1368px;
  white-space: nowrap;
  z-index: 1;
}
.user1 {
  align-self: stretch;
  height: 130px;
  position: relative;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .frame-parent30 {
    flex-wrap: wrap;
  }

  .user1 {
    height: auto;
    min-height: 130;
  }
}
@media screen and (max-width: 450px) {
  .div14 {
    font-size: var(--font-size-xl);
  }

  .jane-doe {
    font-size: var(--font-size-xl);
  }

  .purok-3-san {
    font-size: var(--font-size-xl);
  }
}
</style>
