<template>
  <section class="product-filter">
    <div class="p-sort">
      <div class="pp-f1">
        <div class="filter-search-category-wrapper">
          <div class="filter-search-category">
            <div class="content-search-category">
              <div class="pp-content1">
                <div class="bg2" />
              </div>
              <v-text-field
                class="search-vtextfield"
                color="primary"
                variant="outlined"
                placeholder="Search"
              />
            </div>
            <div class="category-sort">
              <v-menu class="category-vmenu" :location="ddZyLoc">
                <template v-slot:activator="{ props }">
                  <v-btn color="primary" v-bind="props" />
                </template>
                <v-list>
                  <v-list-item v-for="(item, index) in ddZyItems" :key="index">
                    <v-list-item-title>{{ item }}</v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>
              <v-menu class="sort-vmenu" :location="ddKpLoc">
                <template v-slot:activator="{ props }">
                  <v-btn color="primary" v-bind="props" />
                </template>
                <v-list>
                  <v-list-item v-for="(item, index) in ddKpItems" :key="index">
                    <v-list-item-title>{{ item }}</v-list-item-title>
                  </v-list-item>
                </v-list>
              </v-menu>
            </div>
          </div>
        </div>
        <div class="divider" />
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "ProductFilter",
  data() {
    return {
      ddZyLoc: "bottom",
      ddZyItems: [],
      ddKpLoc: "bottom",
      ddKpItems: [],
    };
  },
});
</script>
<style scoped>
.bg2 {
  position: absolute;
  top: calc(50% - 76.5px);
  left: calc(50% - 762.5px);
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl) var(--br-xl) 0px 0px;
  background-color: var(--theme-white-default);
  width: 100%;
  height: 100%;
  display: none;
}
.pp-content1 {
  height: 153px;
  width: 1525px;
  position: absolute;
  margin: 0 !important;
  top: calc(50% - 76.5px);
  right: -1012px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl) var(--br-xl) 0px 0px;
  background-color: var(--theme-white-default);
}
.search-vtextfield {
  border: none;
  background-color: transparent;
  flex: 1;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  font-family: var(--font-inter);
  font-weight: 500;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
  max-width: 100%;
  z-index: 1;
}
.content-search-category {
  width: 476px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  max-width: 100%;
}
.category-vmenu {
  flex: 1;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  min-width: 154px;
  z-index: 1;
}
.sort-vmenu {
  height: 85px;
  flex: 1;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  min-width: 154px;
  z-index: 1;
}
.category-sort {
  width: 508px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-15xl);
  max-width: 100%;
}
.filter-search-category {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 100%;
  gap: var(--gap-xl);
}
.filter-search-category-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-21xl) 0px var(--padding-15xl);
  box-sizing: border-box;
  max-width: 100%;
}
.divider {
  align-self: stretch;
  height: 2px;
  position: relative;
  filter: drop-shadow(0px 0px 1px rgba(0, 0, 0, 0.1));
  border-top: 2px solid var(--stroke);
  box-sizing: border-box;
  flex-shrink: 0;
}
.pp-f1 {
  flex: 1;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-27xl) var(--padding-3xs) var(--padding-2273xl);
  box-sizing: border-box;
  gap: var(--gap-15xl);
  max-width: 100%;
}
.p-sort {
  height: 165px;
  flex: 1;
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  flex-shrink: 0;
  max-width: 100%;
  z-index: 1;
}
.product-filter {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-lgi) 0px var(--padding-5xl);
  box-sizing: border-box;
  max-width: 100%;
  flex-shrink: 0;
}

@media screen and (max-width: 1225px) {
  .filter-search-category {
    flex-wrap: wrap;
  }

  .p-sort {
    height: auto;
  }
}
@media screen and (max-width: 850px) {
  .category-sort {
    flex-wrap: wrap;
  }
}
</style>
