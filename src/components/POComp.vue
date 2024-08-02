<template>
  <div class="po-comp1">
    <div class="header-r3" />
    <div class="frame-parent23">
      <div class="frame-parent24">
        <v-btn color="primary" variant="plain" />
        <div class="frame-parent25">
          <div class="frame-parent26">
            <div class="search-icon-wrapper">
              <img
                class="search-icon1"
                loading="lazy"
                alt=""
                src="/search-icon-1.svg"
              />
            </div>
            <div class="search1">Search</div>
          </div>
          <div class="line-container">
            <div class="line-div" />
          </div>
        </div>
      </div>
      <div class="frame-wrapper11">
        <div class="frame-parent27">
          <div class="frame-parent28">
            <div class="image-placeholder-wrapper">
              <div class="image-placeholder" />
            </div>
            <div class="name">Name</div>
          </div>
          <div class="active-wrapper">
            <div class="active">Active</div>
          </div>
          <div class="image-placeholder-wrapper">
            <div class="address">Address</div>
          </div>
        </div>
      </div>
    </div>
    <div class="number-of-pets-wrapper">
      <div class="number-of-pets">Number of Pets</div>
    </div>
    <div class="frame-parent29">
      <div class="frame-wrapper12">
        <div class="mdifilter-parent">
          <img
            class="mdifilter-icon1"
            loading="lazy"
            alt=""
            src="/mdifilter.svg"
          />
          <div class="filter-wrapper">
            <div class="filter1">Filter</div>
          </div>
          <div class="change-icon-wrapper">
            <img
              class="change-icon2"
              loading="lazy"
              alt=""
              src="/change-icon.svg"
            />
          </div>
          <div class="recent-wrapper">
            <div class="recent1">Recent</div>
          </div>
        </div>
      </div>
      <div class="contact4">Contact</div>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "POComp",
});
</script>
<style scoped>
.header-r3 {
  height: 240px;
  width: 1593px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.search-icon1 {
  width: 26px;
  height: 26px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.search-icon-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
}
.search1 {
  position: relative;
  display: inline-block;
  min-width: 100px;
  z-index: 1;
}
.frame-parent26 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-7xs);
}
.line-div {
  height: 1px;
  flex: 1;
  position: relative;
  border-top: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.line-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-10xs);
}
.frame-parent25 {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-5xs);
  min-width: 197px;
}
.frame-parent24 {
  width: 475px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-27xl);
  max-width: 100%;
}
.image-placeholder {
  width: 33px;
  height: 33px;
  position: relative;
  border-radius: var(--br-3xs);
  border: 1px solid var(--color-darkgray-400);
  box-sizing: border-box;
  z-index: 1;
}
.image-placeholder-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-12xs) 0px 0px;
}
.name {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 84px;
  z-index: 1;
}
.frame-parent28 {
  width: 163px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-27xl);
}
.active {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 91px;
  z-index: 1;
}
.active-wrapper {
  width: 114px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-xl) 0px 0px;
  box-sizing: border-box;
}
.address {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 120px;
  z-index: 1;
}
.frame-parent27 {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 100%;
  gap: var(--gap-xl);
}
.frame-wrapper11 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-5xs);
  box-sizing: border-box;
  max-width: 100%;
  color: var(--color-black);
}
.frame-parent23 {
  width: 648px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-2xl) 0px 0px;
  box-sizing: border-box;
  gap: var(--gap-43xl);
  max-width: 100%;
  color: var(--color-darkgray-400);
}
.number-of-pets {
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.number-of-pets-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-94xl) 0px 0px;
}
.mdifilter-icon1 {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.filter1 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 73px;
  z-index: 1;
}
.filter-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs) var(--padding-7xs) 0px 0px;
}
.change-icon2 {
  width: 40px;
  height: 42.8px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.change-icon-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xs) 0px 0px;
}
.recent1 {
  align-self: stretch;
  position: relative;
  line-height: 40px;
  font-weight: 500;
  display: inline-block;
  min-width: 101px;
}
.recent-wrapper {
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
.mdifilter-parent {
  width: 345px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xl);
  max-width: 100%;
}
.frame-wrapper12 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  max-width: 100%;
}
.contact4 {
  position: relative;
  font-weight: 500;
  display: inline-block;
  min-width: 115px;
  z-index: 1;
}
.frame-parent29 {
  width: 431px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-45xl);
  max-width: 100%;
}
.po-comp1 {
  align-self: stretch;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-35xl) var(--padding-28xl) var(--padding-17xl)
    var(--padding-54xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  text-align: left;
  font-size: var(--font-size-11xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1525px) {
  .po-comp1 {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 1225px) {
  .po-comp1 {
    padding-left: var(--padding-17xl);
    padding-right: var(--padding-4xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .search1 {
    font-size: var(--font-size-5xl);
  }

  .frame-parent24 {
    gap: var(--gap-4xl);
  }

  .name {
    font-size: var(--font-size-5xl);
  }

  .active {
    font-size: var(--font-size-5xl);
  }

  .address {
    font-size: var(--font-size-5xl);
  }

  .frame-parent27 {
    flex-wrap: wrap;
  }

  .frame-parent23 {
    gap: var(--gap-12xl);
  }

  .number-of-pets {
    font-size: var(--font-size-5xl);
  }

  .filter1 {
    font-size: var(--font-size-5xl);
  }

  .recent1 {
    font-size: var(--font-size-5xl);
    line-height: 32px;
  }

  .contact4 {
    font-size: var(--font-size-5xl);
  }
}
@media screen and (max-width: 450px) {
  .search1 {
    font-size: var(--font-size-lg);
  }

  .frame-parent24 {
    flex-wrap: wrap;
  }

  .name {
    font-size: var(--font-size-lg);
  }

  .active {
    font-size: var(--font-size-lg);
  }

  .address {
    font-size: var(--font-size-lg);
  }

  .frame-parent23 {
    gap: var(--gap-mini);
  }

  .number-of-pets {
    font-size: var(--font-size-lg);
  }

  .filter1 {
    font-size: var(--font-size-lg);
  }

  .recent1 {
    font-size: var(--font-size-lg);
    line-height: 24px;
  }

  .mdifilter-parent {
    flex-wrap: wrap;
  }

  .contact4 {
    font-size: var(--font-size-lg);
  }

  .frame-parent29 {
    gap: var(--gap-13xl);
  }
}
</style>
