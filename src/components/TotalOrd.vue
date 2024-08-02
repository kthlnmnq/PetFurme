<template>
  <section class="total-ord">
    <div class="total-ord-child" />
    <div class="ord-1">
      <div class="ord-1-child" />
      <div class="order-progress">
        <div class="inprog">
          <div class="inprog-child" />
          <img
            class="grommet-iconspower-cycle"
            loading="lazy"
            alt=""
            src="/grommeticonspowercycle.svg"
          />
          <div class="delivery-time">
            <b class="in-progress">in-progress</b>
          </div>
        </div>
        <div class="delivery-info">
          <h2 class="arriving-today">Arriving today!</h2>
          <h3 class="your-delivery-ggf9724hni7s">
            Your delivery, #GGF9724HNI7S for User#23, is arriving today!
          </h3>
        </div>
        <div class="delivery-progress-details">
          <b class="p30000">P300.00</b>
          <div class="delivery-shape">
            <div class="delivery-shape-child" />
          </div>
          <div class="july-10-2024">July 10, 2024</div>
        </div>
      </div>
      <div class="order-icon">
        <img
          class="fluentbox-16-regular-icon"
          loading="lazy"
          alt=""
          src="/fluentbox16regular.svg"
        />
      </div>
    </div>
    <div class="ord-2">
      <div class="ord-1-child" />
      <div class="inprog-parent">
        <div class="inprog1">
          <div class="inprog-item" />
          <img
            class="lucideclock-7-icon"
            loading="lazy"
            alt=""
            src="/grommeticonspowercycle1.svg"
          />
          <div class="pending-order">
            <b class="pending">pending</b>
          </div>
        </div>
        <div class="arriving-today-parent">
          <h2 class="arriving-today">Arriving today!</h2>
          <h3 class="your-delivery-ggf9724hni7s">
            Your delivery, #FUIDSNG83C for User#23, is arriving today!
          </h3>
        </div>
        <div class="p10000-parent">
          <b class="p10000">P100.00</b>
          <div class="ellipse-wrapper2">
            <div class="delivery-shape-child" />
          </div>
          <div class="july-09-2024">July 09, 2024</div>
        </div>
      </div>
      <div class="fluentbox-16-regular-wrapper">
        <img
          class="fluentbox-16-regular-icon"
          loading="lazy"
          alt=""
          src="/fluentbox16regular.svg"
        />
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "TotalOrd",
});
</script>
<style scoped>
.total-ord-child {
  align-self: stretch;
  height: 824px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
}
.ord-1-child {
  height: 391px;
  width: 1461px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.inprog-child {
  height: 67px;
  width: 268.5px;
  position: relative;
  border-radius: var(--br-31xl);
  background-color: var(--color-whitesmoke-200);
  display: none;
}
.grommet-iconspower-cycle {
  height: 45px;
  width: 45px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.in-progress {
  position: relative;
  z-index: 1;
}
.delivery-time {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
}
.inprog {
  border-radius: var(--br-31xl);
  background-color: var(--color-whitesmoke-200);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-2xs) var(--padding-xs) var(--padding-2xs)
    var(--padding-3xl);
  gap: var(--gap-2xs-8);
  z-index: 1;
  font-size: var(--font-size-11xl);
}
.arriving-today {
  margin: 0;
  width: 332.5px;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  max-width: 100%;
  z-index: 1;
}
.your-delivery-ggf9724hni7s {
  margin: 0;
  align-self: stretch;
  position: relative;
  font-size: var(--font-size-16xl);
  font-weight: 600;
  font-family: inherit;
  color: var(--color-darkgray-400);
  white-space: pre-wrap;
  z-index: 1;
}
.delivery-info {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-sm);
  max-width: 100%;
  color: var(--color-black);
}
.p30000 {
  position: relative;
  z-index: 1;
}
.delivery-shape-child {
  width: 18.6px;
  height: 18px;
  position: relative;
  border-radius: 50%;
  background-color: var(--color-darkgray-400);
  z-index: 1;
}
.delivery-shape {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) 0px 0px;
}
.july-10-2024 {
  position: relative;
  font-weight: 600;
  color: var(--color-black);
  z-index: 1;
}
.delivery-progress-details {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-21xl-5);
  max-width: 100%;
}
.order-progress {
  width: 959.3px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl-5);
  max-width: 100%;
}
.fluentbox-16-regular-icon {
  width: 200px;
  height: 200px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.order-icon {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-30xl) 0px 0px;
}
.ord-1 {
  align-self: stretch;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-28xl) var(--padding-54xl) var(--padding-21xl)
    var(--padding-39xl);
  box-sizing: border-box;
  max-width: 100%;
  flex-shrink: 0;
  gap: var(--gap-xl);
  z-index: 1;
}
.inprog-item {
  position: absolute;
  height: 100%;
  top: 0px;
  bottom: 0px;
  left: 0px;
  border-radius: var(--br-31xl);
  background-color: var(--color-whitesmoke-200);
  width: 222px;
}
.lucideclock-7-icon {
  position: absolute;
  top: 11px;
  left: 22.5px;
  width: 45px;
  height: 45px;
  overflow: hidden;
  z-index: 1;
}
.pending {
  align-self: stretch;
  position: relative;
  z-index: 1;
}
.pending-order {
  position: absolute;
  top: 16px;
  left: 78.5px;
  width: 177.6px;
  height: 36px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
  box-sizing: border-box;
}
.inprog1 {
  width: 256.1px;
  height: 67px;
  position: relative;
  flex-shrink: 0;
  z-index: 1;
  font-size: var(--font-size-11xl);
}
.arriving-today-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-sm);
  max-width: 100%;
  flex-shrink: 0;
  color: var(--color-black);
}
.p10000 {
  height: 48px;
  width: 166px;
  position: relative;
  display: inline-block;
  z-index: 1;
}
.ellipse-wrapper2 {
  height: 18px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) 0px 0px;
  box-sizing: border-box;
}
.july-09-2024 {
  height: 48px;
  width: 268px;
  position: relative;
  font-weight: 600;
  color: var(--color-black);
  display: inline-block;
  z-index: 1;
}
.p10000-parent {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-7xs) 0px 0px;
  box-sizing: border-box;
  gap: var(--gap-21xl-5);
  max-width: 100%;
  flex-shrink: 0;
  color: var(--color-lightgreen);
}
.inprog-parent {
  height: 100px;
  width: 959.3px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl-5);
  max-width: 100%;
}
.fluentbox-16-regular-wrapper {
  height: 51px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-30xl) 0px 0px;
  box-sizing: border-box;
}
.ord-2 {
  align-self: stretch;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-28xl) var(--padding-54xl) var(--padding-21xl)
    var(--padding-39xl);
  box-sizing: border-box;
  min-height: 391px;
  max-width: 100%;
  flex-shrink: 0;
  gap: var(--gap-xl);
  z-index: 1;
  color: var(--color-sandybrown-300);
}
.total-ord {
  position: absolute;
  top: 506px;
  left: 388px;
  width: 1470px;
  height: 574px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) var(--padding-9xs) var(--padding-7xs)
    var(--padding-8xs);
  box-sizing: border-box;
  gap: var(--gap-12xl);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-lightgreen);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .ord-1 {
    flex-wrap: wrap;
  }

  .ord-2 {
    flex-wrap: wrap;
  }

  .total-ord {
    height: auto;
  }
}
@media screen and (max-width: 850px) {
  .in-progress {
    font-size: var(--font-size-5xl);
  }

  .arriving-today {
    font-size: var(--font-size-13xl);
  }

  .your-delivery-ggf9724hni7s {
    font-size: var(--font-size-9xl);
  }

  .p30000 {
    font-size: var(--font-size-13xl);
  }

  .july-10-2024 {
    font-size: var(--font-size-13xl);
  }

  .delivery-progress-details {
    flex-wrap: wrap;
  }

  .pending {
    font-size: var(--font-size-5xl);
  }

  .p10000 {
    font-size: var(--font-size-13xl);
  }

  .july-09-2024 {
    font-size: var(--font-size-13xl);
  }

  .p10000-parent {
    flex-wrap: wrap;
  }

  .inprog-parent {
    height: auto;
  }
}
@media screen and (max-width: 450px) {
  .in-progress {
    font-size: var(--font-size-lg);
  }

  .inprog {
    flex-wrap: wrap;
  }

  .arriving-today {
    font-size: var(--font-size-5xl);
  }

  .your-delivery-ggf9724hni7s {
    font-size: var(--font-size-2xl);
  }

  .p30000 {
    font-size: var(--font-size-5xl);
  }

  .july-10-2024 {
    font-size: var(--font-size-5xl);
  }

  .pending {
    font-size: var(--font-size-lg);
  }

  .p10000 {
    font-size: var(--font-size-5xl);
  }

  .july-09-2024 {
    font-size: var(--font-size-5xl);
  }
}
</style>
