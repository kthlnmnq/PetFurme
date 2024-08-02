<template>
  <section class="header-content">
    <HEADER
      propAlignSelf="stretch"
      propPosition="unset"
      propTop="unset"
      propLeft="unset"
      propWidth="unset"
      propHeight="unset"
    />
    <div class="back">
      <div class="back-p" />
      <div class="back-products">
        <h1 class="products2">Products</h1>
      </div>
      <button class="create" @click="onCreateClick">
        <div class="create-child" />
        <div class="icbaseline-plus-wrapper">
          <img class="icbaseline-plus-icon" alt="" src="/icbaselineplus.svg" />
        </div>
        <div class="create-new">Create new</div>
      </button>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import HEADER from "./HEADER.vue";

export default defineComponent({
  name: "HeaderContent1",
  components: { HEADER },
  methods: {
    onCreateClick() {
      this.$router.push("/13-prod-info");
    },
  },
});
</script>
<style scoped>
.back-p {
  height: 138px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
}
.products2 {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
  z-index: 4;
}
.back-products {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs) 0px 0px;
}
.create-child {
  height: 85px;
  width: 293px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue-400);
  display: none;
}
.icbaseline-plus-icon {
  width: 39.9px;
  height: 39.7px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.icbaseline-plus-wrapper {
  height: 39.7px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-3xs-8) 0px 0px;
  box-sizing: border-box;
}
.create-new {
  position: relative;
  font-size: var(--font-size-16xl);
  font-weight: 500;
  font-family: var(--font-inter);
  color: var(--theme-white-default);
  text-align: left;
  z-index: 1;
}
.create {
  cursor: pointer;
  border: none;
  padding: var(--padding-6xl) var(--padding-4xl) var(--padding-5xl)
    var(--padding-6xl);
  background-color: var(--color-cornflowerblue-400);
  height: 85px;
  border-radius: var(--br-3xs);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  box-sizing: border-box;
  gap: var(--gap-smi-7);
  z-index: 1;
}
.back {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-13xl) var(--padding-56xl) var(--padding-2xl)
    var(--padding-49xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 3;
  margin-top: -2px;
}
.header-content {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-31xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 850px) {
  .products2 {
    font-size: var(--font-size-21xl);
  }

  .create-new {
    font-size: var(--font-size-9xl);
  }

  .back {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 450px) {
  .products2 {
    font-size: var(--font-size-11xl);
  }

  .create-new {
    font-size: var(--font-size-2xl);
  }
}
</style>
