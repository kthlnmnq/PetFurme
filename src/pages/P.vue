<template>
  <div class="p">
    <div class="p-child" />
    <Navigation1 :onPetOwnerTextClick="onPetOwnerTextClick" />
    <main class="header">
      <HEADER
        propAlignSelf="stretch"
        propPosition="unset"
        propTop="unset"
        propLeft="unset"
        propWidth="unset"
        propHeight="unset"
      />
      <section class="po-comp">
        <div class="header-r" />
        <div class="add-recent">
          <v-btn color="primary" variant="plain" />
          <div class="search-filter">
            <div class="search-input-wrapper">
              <div class="filter-search">
                <img class="search-icon" alt="" src="/search-icon-1.svg" />
              </div>
              <div class="search">Search</div>
            </div>
            <div class="separator">
              <div class="separator-child" />
            </div>
          </div>
        </div>
        <div class="filter-options">
          <img
            class="mdifilter-icon"
            loading="lazy"
            alt=""
            src="/mdifilter.svg"
          />
          <div class="filter-label">
            <div class="filter">Filter</div>
          </div>
          <div class="recent-filter">
            <img
              class="change-icon"
              loading="lazy"
              alt=""
              src="/change-icon.svg"
            />
          </div>
          <div class="recent-filter-label">
            <div class="recent">Recent</div>
          </div>
        </div>
      </section>
      <PETLS />
    </main>
    <div class="extension2" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Navigation1 from "../components/Navigation1.vue";
import HEADER from "../components/HEADER.vue";
import PETLS from "../components/PETLS.vue";

export default defineComponent({
  name: "P",
  components: { Navigation1, HEADER, PETLS },
  methods: {
    onPetOwnerTextClick() {
      this.$router.push("/8-peto");
    },
  },
});
</script>
<style scoped>
.p-child {
  height: 69px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
  z-index: 2;
}
.header-r {
  height: 153px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.search-icon {
  width: 26px;
  height: 26px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.filter-search {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
}
.search {
  position: relative;
  display: inline-block;
  min-width: 100px;
  z-index: 1;
}
.search-input-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-7xs);
}
.separator-child {
  height: 1px;
  flex: 1;
  position: relative;
  border-top: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.separator {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-10xs);
}
.search-filter {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-5xs);
  min-width: 197px;
}
.add-recent {
  width: 475px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-27xl);
  max-width: 100%;
}
.mdifilter-icon {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.filter {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 73px;
  z-index: 1;
}
.filter-label {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs) var(--padding-7xs) 0px 0px;
}
.change-icon {
  width: 40px;
  height: 42.8px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.recent-filter {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xs) 0px 0px;
}
.recent {
  align-self: stretch;
  position: relative;
  line-height: 40px;
  font-weight: 500;
  display: inline-block;
  min-width: 101px;
}
.recent-filter-label {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs-1) 0px 0px;
  box-sizing: border-box;
  min-width: 66px;
  text-align: center;
}
.filter-options {
  width: 345px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xl);
  max-width: 100%;
  color: var(--color-black);
}
.po-comp {
  align-self: stretch;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-35xl) var(--padding-28xl) var(--padding-29xl)
    var(--padding-54xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  text-align: left;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
  font-family: var(--font-inter);
}
.header {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 0.5px;
  min-width: 1035px;
  max-width: 100%;
}
.extension2 {
  height: 1847px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
  z-index: 1;
}
.p {
  width: 100%;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: flex-start;
  justify-content: flex-start;
  line-height: normal;
  letter-spacing: normal;
  row-gap: 20px;
}

@media screen and (max-width: 1225px) {
  .po-comp {
    flex-wrap: wrap;
    padding-left: var(--padding-17xl);
    padding-right: var(--padding-4xl);
    box-sizing: border-box;
  }

  .header {
    min-width: 100%;
  }
}
@media screen and (max-width: 850px) {
  .search {
    font-size: var(--font-size-5xl);
  }

  .add-recent {
    gap: var(--gap-4xl);
  }

  .filter {
    font-size: var(--font-size-5xl);
  }

  .recent {
    font-size: var(--font-size-5xl);
    line-height: 32px;
  }
}
@media screen and (max-width: 450px) {
  .search {
    font-size: var(--font-size-lg);
  }

  .add-recent {
    flex-wrap: wrap;
  }

  .filter {
    font-size: var(--font-size-lg);
  }

  .recent {
    font-size: var(--font-size-lg);
    line-height: 24px;
  }

  .filter-options {
    flex-wrap: wrap;
  }
}
</style>
