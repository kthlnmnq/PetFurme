<template>
  <section class="page-header1">
    <header class="header8">
      <div class="header-r5" />
      <div class="header-wrapper">
        <div class="user-actions-parent">
          <div class="user-actions">
            <img class="menu-icon4" loading="lazy" alt="" src="/menu.svg" />
          </div>
          <h1 class="welcome-user-13">WELCOME USER 1!</h1>
        </div>
      </div>
      <div class="search-bar-parent">
        <div class="search-bar2">
          <v-text-field
            class="search-b-wt4"
            color="primary"
            variant="outlined"
            placeholder="Search"
          />
        </div>
        <div class="user-profile-group">
          <div class="user-profile5" />
          <img class="user-photo-icon10" alt="" src="/user-photo-2@2x.png" />
        </div>
      </div>
    </header>
    <div class="po-comp2">
      <div class="header-r6" />
      <div class="p-o-header">
        <v-btn color="primary" variant="plain">Add</v-btn>
        <div class="search-row">
          <div class="search-input-wrapper1">
            <div class="search-icon-container">
              <img class="search-icon2" alt="" src="/search-icon-1.svg" />
            </div>
            <div class="search2">Search</div>
          </div>
          <div class="divider1">
            <div class="divider-child" />
          </div>
        </div>
      </div>
      <div class="mdifilter-group">
        <img
          class="mdifilter-icon2"
          loading="lazy"
          alt=""
          src="/mdifilter.svg"
        />
        <div class="filter-label1">
          <div class="filter2">Filter</div>
        </div>
        <div class="change-view">
          <img
            class="change-icon3"
            loading="lazy"
            alt=""
            src="/change-icon.svg"
          />
        </div>
        <div class="recent-label">
          <div class="recent2">Recent</div>
        </div>
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "PageHeader",
});
</script>
<style scoped>
.header-r5 {
  height: 160px;
  width: 1593px;
  position: relative;
  background-color: var(--color-gainsboro-300);
  display: none;
  max-width: 100%;
}
.menu-icon4 {
  width: 40px;
  height: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.user-actions {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) 0px 0px;
}
.welcome-user-13 {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 700;
  font-family: inherit;
  display: inline-block;
  max-width: 100%;
  z-index: 1;
}
.user-actions-parent {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-16xl);
  max-width: 100%;
}
.header-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-5xs);
  box-sizing: border-box;
  max-width: 100%;
}
.search-b-wt4 {
  border: none;
  background-color: transparent;
  align-self: stretch;
  font-family: var(--font-inter);
  font-size: var(--font-size-xl);
  color: var(--color-gainsboro-300);
  max-width: 100%;
  z-index: 1;
}
.search-bar2 {
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
.user-profile5 {
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
.user-photo-icon10 {
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
.user-profile-group {
  height: 92px;
  width: 92px;
  position: relative;
}
.search-bar-parent {
  width: 767px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-29xl);
  max-width: 100%;
}
.header8 {
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
.header-r6 {
  height: 153px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.search-icon2 {
  width: 26px;
  height: 26px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.search-icon-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
}
.search2 {
  position: relative;
  display: inline-block;
  min-width: 100px;
  z-index: 1;
}
.search-input-wrapper1 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-7xs);
}
.divider-child {
  height: 1px;
  flex: 1;
  position: relative;
  border-top: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.divider1 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-10xs);
}
.search-row {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-5xs);
  min-width: 197px;
}
.p-o-header {
  width: 475px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-27xl);
  max-width: 100%;
}
.mdifilter-icon2 {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.filter2 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 73px;
}
.filter-label1 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs) var(--padding-7xs) 0px 0px;
}
.change-icon3 {
  width: 40px;
  height: 42.8px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.change-view {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xs) 0px 0px;
}
.recent2 {
  align-self: stretch;
  position: relative;
  line-height: 40px;
  font-weight: 500;
  display: inline-block;
  min-width: 101px;
}
.recent-label {
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
.mdifilter-group {
  width: 345px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xl);
  max-width: 100%;
  color: var(--color-black);
}
.po-comp2 {
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
}
.page-header1 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
  flex-shrink: 0;
  text-align: left;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .header8 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 1225px) {
  .po-comp2 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 850px) {
  .welcome-user-13 {
    font-size: var(--font-size-29xl);
  }

  .user-actions-parent {
    flex-wrap: wrap;
  }

  .search-bar2 {
    min-width: 100%;
  }

  .search-bar-parent {
    flex-wrap: wrap;
  }

  .search2 {
    font-size: var(--font-size-5xl);
  }

  .p-o-header {
    flex-wrap: wrap;
  }

  .filter2 {
    font-size: var(--font-size-5xl);
  }

  .recent2 {
    font-size: var(--font-size-5xl);
    line-height: 32px;
  }
}
@media screen and (max-width: 450px) {
  .welcome-user-13 {
    font-size: var(--font-size-17xl);
  }

  .search2 {
    font-size: var(--font-size-lg);
  }

  .filter2 {
    font-size: var(--font-size-lg);
  }

  .recent2 {
    font-size: var(--font-size-lg);
    line-height: 24px;
  }

  .mdifilter-group {
    flex-wrap: wrap;
  }
}
</style>
