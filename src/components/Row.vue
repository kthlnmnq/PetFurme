<template>
  <div class="row" :style="rowStyle">
    <Cell
      :dateNumber="dateNumber"
      propBackgroundColor="unset"
      propBorder="1px solid #d5d4df"
      propMarginLeft="unset"
      propWidth="24px"
      propColor="#000"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell
      :dateNumber="dateNumber1"
      propBackgroundColor="unset"
      propBorder="1px solid #d5d4df"
      propMarginLeft="-1px"
      propWidth="24px"
      propColor="#000"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell
      :dateNumber="dateNumber2"
      propBackgroundColor="unset"
      propBorder="1px solid #d5d4df"
      propMarginLeft="-1px"
      propWidth="24px"
      propColor="#000"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell
      :dateNumber="dateNumber3"
      propBackgroundColor="#f3f3f7"
      propBorder="1px solid #d5d4df"
      propMarginLeft="-1px"
      propWidth="24px"
      propColor="#a8a8a8"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell
      :dateNumber="dateNumber4"
      propBackgroundColor="#f3f3f7"
      propBorder="1px solid #d5d4df"
      propMarginLeft="-1px"
      propWidth="24px"
      propColor="#a8a8a8"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell
      :dateNumber="dateNumber5"
      propBackgroundColor="#f3f3f7"
      propBorder="1px solid #d5d4df"
      propMarginLeft="-1px"
      propWidth="24px"
      propColor="#a8a8a8"
      propAlignSelf="unset"
      propFontWeight="unset"
    /><Cell :dateNumber="dateNumber6" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Cell from "./Cell.vue";

export default defineComponent({
  name: "Row",
  components: { Cell },
  props: {
    dateNumber: { type: String },
    dateNumber1: { type: String },
    dateNumber2: { type: String },
    dateNumber3: { type: String },
    dateNumber4: { type: String },
    dateNumber5: { type: String },
    dateNumber6: { type: String },
    propMarginTop: { type: [Object, Array, String, Number, Boolean] },
  },
  computed: {
    rowStyle() {
      return {
        marginTop: this.propMarginTop,
      };
    },
  },
});
</script>
<style scoped>
.row {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  row-gap: 20px;
  z-index: 11;
  margin-top: -1px;
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-darkgray-200);
  font-family: var(--font-inter);
}

@media screen and (max-width: 900px) {
  .row {
    flex-wrap: wrap;
  }
}
</style>
