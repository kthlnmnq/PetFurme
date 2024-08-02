<template>
  <div class="prescription-names" :style="prescriptionNamesStyle">
    <div class="medicine-names">
      <div class="n-i7">
        <div class="n-i-child5" />
        <img
          class="bicapsule-pill-icon"
          loading="lazy"
          alt=""
          src="/bicapsulepill.svg"
        />
      </div>
      <div class="trifexis-50-lb-wrapper" :style="frameDivStyle">
        <h2 class="trifexis-50-lb">{{ trifexis50Lb }}</h2>
      </div>
    </div>
    <div class="edit-icons" :style="editIconsStyle">
      <div class="icon-pairs">
        <img
          class="mdipencil-icon13"
          loading="lazy"
          alt=""
          src="/mdipencil1.svg"
        />
        <img
          class="mdipencil-icon13"
          loading="lazy"
          alt=""
          src="/phtrashfill1.svg"
        />
      </div>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PrescriptionNames",
  props: {
    trifexis50Lb: { type: String },
    propPosition: { type: String },
    propTop: { type: [Object, Array, String, Number, Boolean] },
    propLeft: { type: [Object, Array, String, Number, Boolean] },
    propHeight: { type: [Object, Array, String, Number, Boolean] },
    propHeight1: { type: [Object, Array, String, Number, Boolean] },
  },
  computed: {
    prescriptionNamesStyle() {
      return {
        position: this.propPosition,
        top: this.propTop,
        left: this.propLeft,
      };
    },
    frameDivStyle() {
      return {
        height: this.propHeight,
      };
    },
    editIconsStyle() {
      return {
        height: this.propHeight1,
      };
    },
  },
});
</script>
<style scoped>
.n-i-child5 {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  background-color: var(--color-whitesmoke-300);
  display: none;
}
.bicapsule-pill-icon {
  height: 60px;
  width: 60px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.n-i7 {
  border-radius: var(--br-xl);
  background-color: var(--color-whitesmoke-300);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl);
  z-index: 1;
}
.trifexis-50-lb {
  margin: 0;
  align-self: stretch;
  position: relative;
  font-size: inherit;
  line-height: 45px;
  font-weight: 600;
  font-family: inherit;
  z-index: 1;
}
.trifexis-50-lb-wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xl) 0px 0px;
  box-sizing: border-box;
  min-width: 205px;
}
.medicine-names {
  width: 453px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-19xl);
  max-width: 100%;
}
.mdipencil-icon13 {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 50px;
  z-index: 1;
}
.icon-pairs {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-3xl);
}
.edit-icons {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xl) 0px 0px;
}
.prescription-names {
  width: 1256px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 100%;
  gap: var(--gap-xl);
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .trifexis-50-lb {
    font-size: var(--font-size-13xl);
    line-height: 36px;
  }

  .medicine-names {
    flex-wrap: wrap;
  }

  .prescription-names {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 450px) {
  .trifexis-50-lb {
    font-size: var(--font-size-5xl);
    line-height: 27px;
  }

  .medicine-names {
    gap: var(--gap-lgi);
  }
}
</style>
