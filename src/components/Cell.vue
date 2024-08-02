<template>
  <div class="cell" :style="cellStyle">
    <div class="div18" :style="divStyle">{{ dateNumber }}</div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Cell",
  props: {
    dateNumber: { type: String, default: "4" },
    propBackgroundColor: { type: String },
    propBorder: { type: String },
    propMarginLeft: { type: [Object, Array, String, Number, Boolean] },
    propWidth: { type: [Object, Array, String, Number, Boolean] },
    propColor: { type: String },
    propAlignSelf: { type: String },
    propFontWeight: { type: String },
  },
  computed: {
    cellStyle() {
      return {
        backgroundColor: this.propBackgroundColor,
        border: this.propBorder,
        marginLeft: this.propMarginLeft,
      };
    },
    divStyle() {
      return {
        width: this.propWidth,
        color: this.propColor,
        alignSelf: this.propAlignSelf,
        fontWeight: this.propFontWeight,
      };
    },
  },
});
</script>
<style scoped>
.div18 {
  width: 24px;
  height: 24px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.cell {
  flex: 1;
  background-color: var(--inactive);
  border: 1px solid var(--stroke);
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: var(--padding-lg) var(--padding-lgi);
  min-width: 63px;
  max-width: 64px;
  z-index: 6;
  margin-left: -1px;
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-darkgray-200);
  font-family: var(--font-inter);
}
</style>
