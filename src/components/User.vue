<template>
  <div class="user">
    <div class="user-child" />
    <div class="user-profile-details">
      <div class="avatar-shapes-wrapper">
        <div class="avatar-shapes" />
      </div>
      <div class="user-details">
        <div class="new-user-wrapper">
          <div class="new-user">New User</div>
        </div>
        <div class="john-doe3">John Doe</div>
      </div>
      <div class="p-status-wrapper">
        <v-btn class="p-status-vbtn" color="#0dd008" variant="flat"
          >Active</v-btn
        >
      </div>
      <div class="purok-1-bagong-wrapper">
        <div class="purok-1-bagong">Purok 1 Bagong...</div>
      </div>
    </div>
    <div class="frame">
      <div class="div12">2</div>
    </div>
    <div class="wrapper1">
      <div class="purok-1-bagong">09123456789</div>
    </div>
    <v-btn class="user-item" color="#7fe18f" variant="flat" width="157"
      >View more</v-btn
    >
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "User",
});
</script>
<style scoped>
.user-child {
  height: 130px;
  width: 1593px;
  position: relative;
  background-color: var(--color-lightsteelblue-200);
  flex-shrink: 0;
  display: none;
}
.avatar-shapes {
  width: 33px;
  height: 33px;
  position: relative;
  border-radius: var(--br-3xs);
  border: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.avatar-shapes-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-7xl) 0px 0px;
}
.new-user {
  position: relative;
  display: inline-block;
  min-width: 93px;
  z-index: 1;
}
.new-user-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-2xs);
}
.john-doe3 {
  position: relative;
  font-size: var(--font-size-6xl);
  font-weight: 500;
  color: var(--color-black);
  display: inline-block;
  min-width: 115px;
  z-index: 1;
}
.user-details {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-2xs) 0px 0px;
  gap: var(--gap-10xs);
}
.p-status-vbtn {
  z-index: 1;
}
.p-status-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-smi) var(--padding-2xs) 0px 0px;
}
.purok-1-bagong {
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.purok-1-bagong-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xl) 0px 0px;
  font-size: var(--font-size-6xl);
  color: var(--color-black);
}
.user-profile-details {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-24xl) 0px 0px;
  gap: var(--gap-21xl);
  font-size: var(--font-size-xl);
  color: var(--color-red-100);
}
.div12 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 16px;
  z-index: 1;
}
.frame {
  width: 87px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xl) var(--padding-xl) 0px 0px;
  box-sizing: border-box;
}
.wrapper1 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xl) 0px 0px;
}
.user-item {
  width: 157px;
}
.user {
  align-self: stretch;
  background-color: var(--color-lightsteelblue-200);
  overflow-x: auto;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-9xl) var(--padding-49xl) var(--padding-12xl)
    var(--padding-59xl);
  gap: var(--gap-xl);
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1225px) {
  .user {
    padding-left: var(--padding-20xl);
    padding-right: var(--padding-15xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .user-profile-details {
    flex-wrap: wrap;
    gap: var(--gap-xl);
    padding-right: var(--padding-2xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 450px) {
  .new-user {
    font-size: var(--font-size-base);
  }

  .john-doe3 {
    font-size: var(--font-size-xl);
  }

  .purok-1-bagong {
    font-size: var(--font-size-xl);
  }

  .div12 {
    font-size: var(--font-size-xl);
  }
}
</style>
