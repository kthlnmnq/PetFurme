<template>
  <section class="oh-tab">
    <div class="oh-tab-child" />
    <div class="order-history-tab">
      <h2 class="order-history">Order History</h2>
    </div>
    <div class="tab-content">
      <div class="order-status-filter">
        <div class="status-list">
          <div class="status-container">
            <div class="status-item">
              <div class="status-name-container">
                <h3 class="all">All</h3>
              </div>
              <div class="an">
                <div class="an-child" />
                <div class="div7">24</div>
              </div>
            </div>
          </div>
          <img
            class="status-list-child"
            loading="lazy"
            alt=""
            src="/line-12.svg"
          />
        </div>
        <div class="completed-status-item">
          <div class="completed-status-name-containe">
            <h3 class="completed">Completed</h3>
          </div>
          <div class="an1">
            <div class="an-item" />
            <div class="div8">5</div>
          </div>
        </div>
        <div class="in-progress-status-item">
          <div class="completed-status-name-containe">
            <h3 class="cancelled">In progress</h3>
          </div>
          <div class="an2">
            <div class="an-inner" />
            <div class="div9">7</div>
          </div>
        </div>
      </div>
      <div class="in-progress-status-item">
        <div class="completed-status-name-containe">
          <h3 class="completed">Pending</h3>
        </div>
        <div class="an1">
          <div class="an-item" />
          <div class="div8">2</div>
        </div>
      </div>
      <div class="in-progress-status-item">
        <div class="completed-status-name-containe">
          <h3 class="cancelled">Cancelled</h3>
        </div>
        <div class="an4">
          <div class="an-inner" />
          <div class="div11">10</div>
        </div>
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "OHTab",
});
</script>
<style scoped>
.oh-tab-child {
  width: 1594px;
  height: 289px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.order-history {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  z-index: 1;
}
.order-history-tab {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-18xl);
  box-sizing: border-box;
  max-width: 100%;
}
.all {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  min-width: 44px;
  z-index: 1;
}
.status-name-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xs) 0px 0px;
}
.an-child {
  height: 51px;
  width: 57px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue-400);
  display: none;
}
.div7 {
  position: relative;
  font-weight: 600;
  display: inline-block;
  min-width: 32px;
  z-index: 1;
}
.an {
  flex: 1;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue-400);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-2xs) var(--padding-2xs) var(--padding-3xs)
    var(--padding-sm);
  z-index: 1;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
}
.status-item {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xs);
}
.status-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-6xl) 0px var(--padding-12xl);
}
.status-list-child {
  align-self: stretch;
  height: 5px;
  position: relative;
  max-width: 100%;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 2;
}
.status-list {
  width: 169px;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-14xl-5);
  color: var(--color-black);
}
.completed {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  z-index: 1;
}
.completed-status-name-containe {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
}
.an-item {
  height: 51px;
  width: 57px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-gainsboro-300);
  display: none;
}
.div8 {
  position: relative;
  font-weight: 600;
  display: inline-block;
  min-width: 16px;
  z-index: 1;
}
.an1 {
  border-radius: var(--br-3xs);
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-2xs) var(--padding-xl) var(--padding-3xs);
  z-index: 1;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
}
.completed-status-item {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-6xl) 0px 0px;
  gap: var(--gap-xs);
}
.an-inner {
  position: absolute;
  top: 0px;
  left: 0px;
  border-radius: var(--br-3xs);
  background-color: var(--color-gainsboro-300);
  width: 100%;
  height: 100%;
  display: none;
}
.div9 {
  position: absolute;
  top: 11px;
  left: 21px;
  font-weight: 600;
  display: inline-block;
  min-width: 15px;
}
.an2 {
  height: 51px;
  width: 57px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-gainsboro-300);
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
}
.in-progress-status-item {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xs);
}
.order-status-filter {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-59xl);
  max-width: 100%;
}
.cancelled {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
}
.div11 {
  position: absolute;
  top: 11px;
  left: 14px;
  font-weight: 600;
  display: inline-block;
  min-width: 29px;
}
.an4 {
  height: 51px;
  width: 57px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-gainsboro-300);
  z-index: 1;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
}
.tab-content {
  width: 1519px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 100%;
  gap: var(--gap-xl);
  font-size: var(--font-size-16xl);
  color: var(--color-darkgray-400);
}
.oh-tab {
  position: absolute;
  top: 160px;
  left: 326px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  width: 1594px;
  height: 289px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-47xl) var(--padding-3xl) var(--padding-150xl);
  box-sizing: border-box;
  gap: var(--gap-63xl);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-26xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .tab-content {
    flex-wrap: wrap;
  }

  .oh-tab {
    height: auto;
  }
}
@media screen and (max-width: 1225px) {
  .order-status-filter {
    flex-wrap: wrap;
  }
}
@media screen and (max-width: 850px) {
  .order-history {
    font-size: var(--font-size-17xl);
  }

  .all {
    font-size: var(--font-size-9xl);
  }

  .completed {
    font-size: var(--font-size-9xl);
  }

  .cancelled {
    font-size: var(--font-size-9xl);
  }
}
@media screen and (max-width: 450px) {
  .order-history {
    font-size: var(--font-size-8xl);
  }

  .all {
    font-size: var(--font-size-2xl);
  }

  .div7 {
    font-size: var(--font-size-xl);
  }

  .completed {
    font-size: var(--font-size-2xl);
  }

  .div8 {
    font-size: var(--font-size-xl);
  }

  .div9 {
    font-size: var(--font-size-xl);
  }

  .cancelled {
    font-size: var(--font-size-2xl);
  }

  .div11 {
    font-size: var(--font-size-xl);
  }
}
</style>
