<template>
  <div class="user-content-parent">
    <div class="user-content">
      <b
        class="user-management5"
        @click="onAppointmentTextClick"
        :style="uSERMANAGEMENTStyle"
        >{{ uSERMANAGEMENT }}</b
      >
    </div>
    <div class="rectangle-parent19">
      <div class="frame-child26" />
      <div class="pet-owner8" :style="petOwnerStyle">{{ petOwner }}</div>
    </div>
    <div class="sub-admin-frame">
      <div class="sub-admin4" :style="subAdminStyle">{{ subAdmin }}</div>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "FrameComponent",
  props: {
    uSERMANAGEMENT: { type: String },
    petOwner: { type: String },
    subAdmin: { type: String },
    propFontWeight: { type: String },
    propFontWeight1: { type: String },
    propDisplay: { type: String },
    propMinWidth: { type: [Object, Array, String, Number, Boolean] },
    propFontWeight2: { type: String },
    onAppointmentTextClick: { type: Function },
  },
  computed: {
    uSERMANAGEMENTStyle() {
      return {
        fontWeight: this.propFontWeight,
      };
    },
    petOwnerStyle() {
      return {
        fontWeight: this.propFontWeight1,
      };
    },
    petOwnerStyle1() {
      return {
        display: this.propDisplay,
        minWidth: this.propMinWidth,
        fontWeight: this.propFontWeight2,
      };
    },
  },
});
</script>
<style scoped>
.user-management5 {
  position: relative;
  z-index: 1;
}
.user-content {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-14xl);
}
.frame-child26 {
  height: 70px;
  width: 325px;
  position: relative;
  background-color: var(--color-lightgreen);
  display: none;
  max-width: 100%;
}
.pet-owner8 {
  position: relative;
  display: inline-block;
  min-width: 125px;
  z-index: 2;
}
.rectangle-parent19 {
  align-self: stretch;
  background-color: var(--color-lightgreen);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl) var(--padding-47xl);
  box-sizing: border-box;
  white-space: nowrap;
  max-width: 100%;
  z-index: 1;
}
.sub-admin4 {
  position: relative;
  display: inline-block;
  min-width: 129px;
  z-index: 1;
}
.sub-admin-frame {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-47xl);
}
.user-content-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-8xl-5);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}

@media screen and (max-width: 450px) {
  .user-management5 {
    font-size: var(--font-size-xl);
  }

  .rectangle-parent19 {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .sub-admin4 {
    font-size: var(--font-size-xl);
  }

  .sub-admin-frame {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }
}
</style>
