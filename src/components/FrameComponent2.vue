<template>
  <div class="login-page-inner1">
    <div class="frame-parent36">
      <div class="customize-your-pet-based-on-yo-wrapper">
        <h1 class="customize-your-pet-container">
          <b>Customize</b>
          <span class="your-pet-based-on-you">
            <span class="span12"> </span>
            <span>your pet based on you </span>
          </span>
          <b>preferences</b>
        </h1>
      </div>
      <img class="pet-icon7" loading="lazy" alt="" :src="petIcon" />
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "FrameComponent2",
  props: {
    petIcon: { type: String },
  },
});
</script>
<style scoped>
.span12 {
  color: var(--color-gray-500);
}
.your-pet-based-on-you {
  color: var(--theme-white-default);
}
.customize-your-pet-container {
  margin: 0;
  flex: 1;
  position: relative;
  font-size: inherit;
  letter-spacing: 0.04em;
  line-height: 70px;
  display: inline-block;
  max-width: 100%;
  z-index: 8;
  font-family: inherit;
}
.customize-your-pet-based-on-yo-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-mini);
  box-sizing: border-box;
  max-width: 100%;
}
.pet-icon7 {
  width: 430px;
  position: relative;
  max-height: 100%;
  object-fit: cover;
  max-width: 100%;
  z-index: 7;
}
.frame-parent36 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-11xs);
  max-width: 100%;
}
.login-page-inner1 {
  width: 444px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-196xl) 0px 0px;
  box-sizing: border-box;
  min-width: 444px;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-41xl);
  color: var(--color-cornflowerblue-400);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1525px) {
  .login-page-inner1 {
    flex: 1;
  }
}
@media screen and (max-width: 1225px) {
  .login-page-inner1 {
    padding-top: var(--padding-121xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .customize-your-pet-container {
    font-size: var(--font-size-29xl);
    line-height: 56px;
  }

  .login-page-inner1 {
    padding-top: var(--padding-72xl);
    box-sizing: border-box;
    min-width: 100%;
  }
}
@media screen and (max-width: 450px) {
  .customize-your-pet-container {
    font-size: var(--font-size-17xl);
    line-height: 42px;
  }
}
</style>
