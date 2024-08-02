<template>
  <header class="header9" :style="hEADERStyle">
    <div class="header-r7" />
    <div class="header-left">
      <div class="logo-container">
        <div class="logo-placeholder">
          <img class="menu-icon5" loading="lazy" alt="" src="/menu.svg" />
        </div>
        <h1 class="welcome-user-14">WELCOME USER 1!</h1>
      </div>
    </div>
    <div class="search-bar3">
      <div class="search-input">
        <div class="search-b-wt5" :style="sEARCHBWTStyle">
          <div class="search-bar4" />
          <img
            class="search-icon3"
            alt=""
            src="/search-icon.svg"
            :style="sEARCHICONStyle"
          />
          <div class="search-placeholder" :style="searchPlaceholderStyle">
            <a class="search3">Search</a>
          </div>
        </div>
      </div>
      <div class="user-profile6">
        <div class="user-profile7" />
        <img class="user-photo-icon11" alt="" src="/user-photo-2@2x.png" />
      </div>
    </div>
  </header>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "HEADER",
  props: {
    propAlignSelf: { type: String },
    propPosition: { type: String },
    propTop: { type: [Object, Array, String, Number, Boolean] },
    propLeft: { type: [Object, Array, String, Number, Boolean] },
    propWidth: { type: [Object, Array, String, Number, Boolean] },
    propHeight: { type: [Object, Array, String, Number, Boolean] },
    propMinHeight: { type: [Object, Array, String, Number, Boolean] },
    propHeight1: { type: [Object, Array, String, Number, Boolean] },
  },
  computed: {
    hEADERStyle() {
      return {
        alignSelf: this.propAlignSelf,
        position: this.propPosition,
        top: this.propTop,
        left: this.propLeft,
        width: this.propWidth,
      };
    },
    sEARCHBWTStyle() {
      return {
        height: this.propHeight,
      };
    },
    sEARCHICONStyle() {
      return {
        minHeight: this.propMinHeight,
      };
    },
    searchPlaceholderStyle() {
      return {
        height: this.propHeight1,
      };
    },
  },
});
</script>
<style scoped>
.header-r7 {
  height: 160px;
  width: 1593px;
  position: relative;
  background-color: var(--color-gainsboro-300);
  display: none;
  max-width: 100%;
}
.menu-icon5 {
  width: 40px;
  height: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.logo-placeholder {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) 0px 0px;
}
.welcome-user-14 {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
  display: inline-block;
  max-width: 100%;
  z-index: 1;
}
.logo-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-16xl);
  max-width: 100%;
}
.header-left {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-5xs);
  box-sizing: border-box;
  max-width: 100%;
}
.search-bar4 {
  height: 69px;
  width: 627px;
  position: relative;
  border-radius: var(--br-21xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.search-icon3 {
  height: 26px;
  width: 26px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 26px;
  z-index: 1;
}
.search3 {
  text-decoration: none;
  align-self: stretch;
  height: 27.6px;
  position: relative;
  color: inherit;
  display: inline-block;
  flex-shrink: 0;
  z-index: 1;
}
.search-placeholder {
  height: 27.6px;
  width: 103.9px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-12xs) 0px 0px;
  box-sizing: border-box;
}
.search-b-wt5 {
  align-self: stretch;
  height: 69px;
  border-radius: var(--br-21xl);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-3xl) var(--padding-14xl) var(--padding-2xl);
  box-sizing: border-box;
  gap: var(--gap-15xl-1);
  max-width: 100%;
}
.search-input {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-3xs) 0px 0px;
  box-sizing: border-box;
  min-width: 408px;
  max-width: 100%;
}
.user-profile7 {
  position: absolute;
  top: 0px;
  left: 0px;
  border-radius: 50%;
  background-color: var(--theme-white-default);
  border: 0px solid var(--color-black);
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.user-photo-icon11 {
  position: absolute;
  width: calc(100% - 2px);
  top: 1px;
  right: 1px;
  left: 1px;
  max-width: 100%;
  overflow: hidden;
  height: 90px;
  object-fit: cover;
  z-index: 2;
}
.user-profile6 {
  height: 92px;
  width: 92px;
  position: relative;
}
.search-bar3 {
  width: 767px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-29xl);
  max-width: 100%;
  font-size: var(--font-size-xl);
  color: var(--color-gainsboro-300);
}
.header9 {
  align-self: stretch;
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: space-between;
  padding: var(--padding-15xl) var(--padding-32xl) var(--padding-15xl)
    var(--padding-26xl);
  box-sizing: border-box;
  flex-shrink: 0;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 1;
  text-align: left;
  font-size: var(--font-size-41xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .header9 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 1225px) {
  .header9 {
    padding-left: var(--padding-3xl);
    padding-right: var(--padding-6xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .welcome-user-14 {
    font-size: var(--font-size-29xl);
  }

  .logo-container {
    flex-wrap: wrap;
    gap: var(--gap-mid);
  }

  .search-input {
    min-width: 100%;
  }

  .search-bar3 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 450px) {
  .welcome-user-14 {
    font-size: var(--font-size-17xl);
  }

  .search3 {
    font-size: var(--font-size-base);
  }

  .search-bar3 {
    gap: var(--gap-5xl);
  }
}
</style>
