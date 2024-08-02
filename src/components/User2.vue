<template>
  <div class="user2">
    <div class="user-child1" />
    <div class="frame-parent31">
      <div class="rectangle-frame">
        <div class="frame-child28" />
      </div>
      <div class="jan-thou-wrapper">
        <div class="jan-thou">Jan Thou</div>
      </div>
      <div class="p-status-frame">
        <v-btn class="p-status-vbtn2" color="#7fe18f" variant="flat"
          >Active</v-btn
        >
      </div>
      <div class="purok-12-biring-wrapper">
        <div class="purok-12-biring">Purok 12 Biring...</div>
      </div>
    </div>
    <div class="wrapper4">
      <div class="div16">2</div>
    </div>
    <div class="purok-12-biring-wrapper">
      <div class="purok-12-biring">09222456789</div>
    </div>
    <v-btn class="vm-btn-vbtn1" color="#7fe18f" variant="flat">View more</v-btn>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "User2",
});
</script>
<style scoped>
.user-child1 {
  height: 130px;
  width: 1593px;
  position: relative;
  background-color: var(--color-lightsteelblue-200);
  flex-shrink: 0;
  display: none;
}
.frame-child28 {
  width: 33px;
  height: 33px;
  position: relative;
  border-radius: var(--br-3xs);
  border: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.rectangle-frame {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-smi) 0px 0px;
}
.jan-thou {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 112px;
  z-index: 1;
}
.jan-thou-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) var(--padding-sm) 0px 0px;
}
.p-status-vbtn2 {
  z-index: 1;
}
.p-status-frame {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-2xs) 0px 0px;
}
.purok-12-biring {
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.purok-12-biring-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
}
.frame-parent31 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-34xl) 0px 0px;
  gap: var(--gap-21xl);
}
.div16 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 16px;
  z-index: 1;
}
.wrapper4 {
  width: 90px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) var(--padding-xl) 0px 0px;
  box-sizing: border-box;
}
.vm-btn-vbtn1 {
  white-space: nowrap;
  z-index: 1;
}
.user2 {
  align-self: stretch;
  background-color: var(--color-lightsteelblue-200);
  overflow-x: auto;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-22xl) var(--padding-49xl) var(--padding-12xl)
    var(--padding-59xl);
  gap: var(--gap-xl);
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1225px) {
  .user2 {
    padding-left: var(--padding-20xl);
    padding-right: var(--padding-15xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .frame-parent31 {
    flex-wrap: wrap;
    gap: var(--gap-xl);
    padding-right: var(--padding-7xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 450px) {
  .jan-thou {
    font-size: var(--font-size-xl);
  }

  .purok-12-biring {
    font-size: var(--font-size-xl);
  }

  .div16 {
    font-size: var(--font-size-xl);
  }
}
</style>
