<template>
  <div class="calendar">
    <div class="header6">
      <div class="may-2023">May 2023</div>
      <div class="chevron-parent">
        <div class="chevron">
          <img class="chevron-child" alt="" src="/frame-10.svg" />
        </div>
        <img class="chevron-icon" alt="" src="/chevron@2x.png" />
      </div>
    </div>
    <div class="days">
      <Row
        propMarginTop="unset"
        dateNumber="Mo"
        dateNumber1="Tu"
        dateNumber2="We"
        dateNumber3="Th"
        dateNumber4="Fr"
        dateNumber5="Sa"
        dateNumber6="Su"
      /><Row
        propMarginTop="-1px"
        dateNumber="1"
        dateNumber1="2"
        dateNumber2="3"
        dateNumber3="4"
        dateNumber4="5"
        dateNumber5="6"
        dateNumber6="7"
      /><Row
        propMarginTop="-1px"
        dateNumber="8"
        dateNumber1="9"
        dateNumber2="10"
        dateNumber3="11"
        dateNumber4="12"
        dateNumber5="13"
        dateNumber6="14"
      /><Row
        propMarginTop="-1px"
        dateNumber="15"
        dateNumber1="16"
        dateNumber2="17"
        dateNumber3="18"
        dateNumber4="19"
        dateNumber5="20"
        dateNumber6="21"
      /><Row
        propMarginTop="-1px"
        dateNumber="22"
        dateNumber1="23"
        dateNumber2="24"
        dateNumber3="25"
        dateNumber4="26"
        dateNumber5="27"
        dateNumber6="28"
      /><Row
        dateNumber="29"
        dateNumber1="30"
        dateNumber2="31"
        dateNumber3="1"
        dateNumber4="2"
        dateNumber5="3"
        dateNumber6="4"
      />
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Row from "./Row.vue";

export default defineComponent({
  name: "Calendar",
  components: { Row },
});
</script>
<style scoped>
.may-2023 {
  height: 29px;
  width: 121px;
  position: relative;
  font-weight: 900;
  display: inline-block;
}
.chevron-child {
  height: 14px;
  width: 14px;
  position: relative;
}
.chevron {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-base);
}
.chevron-icon {
  height: 46px;
  width: 46px;
  object-fit: contain;
  min-height: 46px;
}
.chevron-parent {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-5xs);
}
.header6 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  gap: var(--gap-xl);
}
.days {
  align-self: stretch;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-darkgray-200);
}
.calendar {
  width: 502px;
  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-base);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-11xl);
  box-sizing: border-box;
  gap: var(--gap-xs);
  min-width: 502px;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-5xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1350px) {
  .calendar {
    flex: 1;
  }
}
@media screen and (max-width: 900px) {
  .calendar {
    padding-top: var(--padding-xl);
    padding-bottom: var(--padding-xl);
    box-sizing: border-box;
    min-width: 100%;
  }
}
@media screen and (max-width: 450px) {
  .may-2023 {
    font-size: var(--font-size-lgi);
  }

  .header6 {
    flex-wrap: wrap;
  }
}
</style>
