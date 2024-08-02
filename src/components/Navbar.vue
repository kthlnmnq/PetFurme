<template>
  <section class="navbar1">
    <header class="header7">
      <div class="header-r4" />
      <div class="menu-wrapper1">
        <div class="menu-icon2">
          <div class="menu-button">
            <img class="menu-icon3" loading="lazy" alt="" src="/menu.svg" />
          </div>
          <h1 class="welcome-user-12">WELCOME USER 1!</h1>
        </div>
      </div>
      <div class="search-wrapper">
        <div class="search-bar1">
          <v-text-field
            class="search-b-wt3"
            color="primary"
            variant="outlined"
          />
        </div>
        <div class="user-profile3">
          <div class="user-profile4" />
          <img
            class="user-photo-icon8"
            loading="lazy"
            alt=""
            src="/user-photo-2@2x.png"
          />
        </div>
      </div>
    </header>
    <div class="back2">
      <div class="back-p2" />
      <div class="back-to-pet1" @click="onBackToPetClick">
        <h2 class="pet-profile1" :style="petProfileStyle">{{ petProfile }}</h2>
        <img
          class="weuiarrow-outlined-icon7"
          loading="lazy"
          alt=""
          src="/weuiarrowoutlined1.svg"
        />
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Navbar",
  props: {
    petProfile: { type: String },
    propRight: { type: [Object, Array, String, Number, Boolean] },
  },
  methods: {
    onBackToPetClick() {
      this.$router.push("/10-p-p");
    },
  },
  computed: {
    petProfileStyle() {
      return {
        right: this.propRight,
      };
    },
  },
});
</script>
<style scoped>
.header-r4 {
  height: 160px;
  width: 1593px;
  position: relative;
  background-color: var(--color-gainsboro-300);
  display: none;
  max-width: 100%;
}
.menu-icon3 {
  width: 40px;
  height: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.menu-button {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) 0px 0px;
}
.welcome-user-12 {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
  display: inline-block;
  max-width: 100%;
  z-index: 1;
}
.menu-icon2 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-16xl);
  max-width: 100%;
}
.menu-wrapper1 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-5xs);
  box-sizing: border-box;
  max-width: 100%;
}
.search-b-wt3 {
  border: none;
  background-color: transparent;
  align-self: stretch;
  font-family: var(--font-inter);
  font-size: var(--font-size-xl);
  color: var(--color-gainsboro-300);
  max-width: 100%;
  z-index: 1;
}
.search-bar1 {
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
.user-profile4 {
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
.user-photo-icon8 {
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
.user-profile3 {
  height: 92px;
  width: 92px;
  position: relative;
}
.search-wrapper {
  width: 767px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-29xl);
  max-width: 100%;
}
.header7 {
  align-self: stretch;
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: space-between;
  padding: var(--padding-15xl) var(--padding-32xl) var(--padding-15xl)
    var(--padding-26xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 2;
  text-align: left;
  font-size: var(--font-size-41xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}
.back-p2 {
  height: 138px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
}
.pet-profile1 {
  margin: 0 !important;
  position: absolute;
  top: 3px;
  right: -60px;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
}
.weuiarrow-outlined-icon7 {
  height: 55.4px;
  width: 31.2px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.back-to-pet1 {
  width: 254px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  cursor: pointer;
  z-index: 1;
}
.back2 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-26xl) var(--padding-13xl) var(--padding-18xl-6);
  box-sizing: border-box;
  max-width: 100%;
  margin-top: -2px;
}
.navbar1 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .header7 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 1225px) {
  .header7 {
    padding-left: var(--padding-3xl);
    padding-right: var(--padding-6xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .welcome-user-12 {
    font-size: var(--font-size-29xl);
  }

  .menu-icon2 {
    flex-wrap: wrap;
    gap: var(--gap-mid);
  }

  .search-bar1 {
    min-width: 100%;
  }

  .search-wrapper {
    flex-wrap: wrap;
  }

  .pet-profile1 {
    font-size: var(--font-size-13xl);
  }
}
@media screen and (max-width: 450px) {
  .welcome-user-12 {
    font-size: var(--font-size-17xl);
  }

  .search-wrapper {
    gap: var(--gap-5xl);
  }

  .pet-profile1 {
    font-size: var(--font-size-5xl);
  }
}
</style>
