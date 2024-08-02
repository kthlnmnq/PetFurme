<template>
  <div class="t-num-wrapper">
    <div class="t-num">
      <div class="counts-icons">
        <div class="pets-users-appointments-approv">
          <div class="tp-count">
            <div class="tp-count-child" />
            <img
              class="pet-icon6"
              loading="lazy"
              alt=""
              src="/appointment-icon.svg"
            />
            <div class="count-values">
              <div class="pets-users-values">
                <div class="pets-users">
                  <b class="tp-count1">20</b>
                </div>
                <div class="total-pets">TOTAL PETS</div>
              </div>
            </div>
          </div>
          <div class="tpe-box" @click="onTPEBOXContainerClick">
            <div class="tpe-box-child" />
            <img
              class="user-icon"
              loading="lazy"
              alt=""
              src="/user-icon@2x.png"
            />
            <div class="tpe-box-inner">
              <div class="tpo-count-parent">
                <b class="tpo-count">15</b>
                <div class="total-pet-owners-wrapper">
                  <div class="total-pet-owners">TOTAL PET OWNERS</div>
                </div>
              </div>
            </div>
          </div>
          <div class="ta-box" @click="onTABOXContainerClick">
            <div class="ta-box-child" />
            <img
              class="appointment-icon"
              loading="lazy"
              alt=""
              src="/appointment-icon1.svg"
            />
            <div class="ta-box-inner">
              <div class="frame-parent32">
                <div class="ta-count-wrapper">
                  <b class="tpo-count">15</b>
                </div>
                <div class="total-appointments">TOTAL APPOINTMENTS</div>
              </div>
            </div>
          </div>
          <div class="pa-box">
            <div class="pa-box-child" />
            <img
              class="approval-icon"
              loading="lazy"
              alt=""
              src="/appointment-icon2.svg"
            />
            <div class="pa-box-inner">
              <div class="frame-parent33">
                <div class="pa-count-wrapper">
                  <b class="tpo-count">15</b>
                </div>
                <div class="total-appointments">PENDING APPROVALS</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="products-orders">
        <div class="tpr-box">
          <div class="tpr-box-child" />
          <img class="shop-icon" loading="lazy" alt="" src="/shop-icon.svg" />
          <div class="products-orders-values">
            <div class="products-values">
              <div class="po-count-wrapper">
                <b class="tpo-count">15</b>
              </div>
              <div class="total-appointments">TOTAL PRODUCTS</div>
            </div>
          </div>
        </div>
        <div class="to-box">
          <div class="to-box-child" />
          <img
            class="appointment-icon"
            loading="lazy"
            alt=""
            src="/to-order.svg"
          />
          <div class="to-box-inner">
            <div class="products-values">
              <b class="tpo-count">15</b>
              <div class="total-pet-owners-wrapper">
                <div class="total-orders">TOTAL ORDERS</div>
              </div>
            </div>
          </div>
        </div>
        <div class="po-box">
          <div class="po-box-child" />
          <div class="pending-icon-wrapper">
            <img
              class="pending-icon"
              loading="lazy"
              alt=""
              src="/pending-icon.svg"
            />
          </div>
          <div class="frame-parent34">
            <div class="po-count-wrapper">
              <b class="tpo-count">15</b>
            </div>
            <div class="total-appointments">PENDING ORDERS</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "FrameComponent6",
  methods: {
    onTPEBOXContainerClick() {
      this.$router.push("/8-peto");
    },
    onTABOXContainerClick() {
      this.$router.push("/5-a-up");
    },
  },
});
</script>
<style scoped>
.tp-count-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-slateblue);
  display: none;
  max-width: 100%;
}
.pet-icon6 {
  height: 60px;
  width: 60px;
  position: relative;
  z-index: 1;
}
.tp-count1 {
  width: 53px;
  position: relative;
  display: inline-block;
  flex-shrink: 0;
  z-index: 1;
}
.pets-users {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-37xl) 0px var(--padding-128xl);
}
.total-pets {
  position: relative;
  font-size: var(--font-size-lg);
  font-weight: 500;
  display: inline-block;
  min-width: 109px;
  z-index: 1;
}
.pets-users-values {
  align-self: stretch;
  height: 85px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-smi);
}
.count-values {
  height: 85px;
  width: 109px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mid) 0px 0px;
  box-sizing: border-box;
}
.tp-count {
  flex: 1;
  border-radius: var(--br-3xs);
  background-color: var(--color-slateblue);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) var(--padding-sm) var(--padding-lgi-4)
    var(--padding-6xl);
  box-sizing: border-box;
  gap: var(--gap-4xs);
  min-width: 218px;
  min-height: 134px;
  max-width: 100%;
}
.tpe-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-mediumorchid);
  display: none;
  max-width: 100%;
}
.user-icon {
  height: 72px;
  width: 86px;
  position: relative;
  object-fit: cover;
  flex-shrink: 0;
  z-index: 1;
}
.tpo-count {
  position: relative;
  display: inline-block;
  min-width: 46px;
  z-index: 1;
}
.total-pet-owners {
  width: 181px;
  position: relative;
  font-weight: 500;
  display: inline-block;
  flex-shrink: 0;
  z-index: 1;
}
.total-pet-owners-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-100xl);
  font-size: var(--font-size-lg);
}
.tpo-count-parent {
  align-self: stretch;
  height: 84px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xs);
}
.tpe-box-inner {
  height: 84px;
  width: 181px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
  flex-shrink: 0;
}
.tpe-box {
  width: 335.4px;
  border-radius: var(--br-3xs);
  background-color: var(--color-mediumorchid);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) var(--padding-9xl) var(--padding-6xl-4);
  box-sizing: border-box;
  gap: var(--gap-34xl-6);
  min-height: 134px;
  max-width: 100%;
  cursor: pointer;
}
.ta-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-tomato);
  display: none;
  max-width: 100%;
}
.appointment-icon {
  height: 80px;
  width: 80px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.ta-count-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-sm);
}
.total-appointments {
  position: relative;
  font-size: var(--font-size-lg);
  font-weight: 500;
  z-index: 1;
}
.frame-parent32 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-smi);
}
.ta-box-inner {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mid) 0px 0px;
  box-sizing: border-box;
  min-width: 135px;
}
.ta-box {
  flex: 1;
  border-radius: var(--br-3xs);
  background-color: var(--color-tomato);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) var(--padding-sm) var(--padding-lgi-4)
    var(--padding-6xl);
  box-sizing: border-box;
  gap: var(--gap-4xs);
  min-width: 218px;
  max-width: 100%;
  cursor: pointer;
}
.pa-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-gold);
  display: none;
  max-width: 100%;
}
.approval-icon {
  height: 70px;
  width: 70px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.pa-count-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-128xl);
}
.frame-parent33 {
  align-self: stretch;
  height: 78px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-smi);
}
.pa-box-inner {
  height: 78px;
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mid) 0px 0px;
  box-sizing: border-box;
  min-width: 125px;
}
.pa-box {
  flex: 0.9157;
  border-radius: var(--br-3xs);
  background-color: var(--color-gold);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-mini) var(--padding-20xl) var(--padding-lgi-4)
    var(--padding-6xl);
  box-sizing: border-box;
  gap: var(--gap-4xs);
  min-width: 218px;
  min-height: 134px;
  max-width: 100%;
}
.pets-users-appointments-approv {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  gap: var(--gap-35xl-6);
  flex-shrink: 0;
  max-width: 100%;
}
.counts-icons {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-11xs);
  box-sizing: border-box;
  max-width: 100%;
}
.tpr-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-lightgreen);
  display: none;
  max-width: 100%;
}
.shop-icon {
  height: 65px;
  width: 60px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.products-values {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xs);
}
.products-orders-values {
  width: 165px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
}
.tpr-box {
  flex: 0.9361;
  border-radius: var(--br-3xs);
  background-color: var(--color-lightgreen);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-lg) var(--padding-10xl) var(--padding-6xl-4)
    var(--padding-9xl);
  box-sizing: border-box;
  min-width: 241px;
  max-width: 100%;
  gap: var(--gap-xl);
}
.to-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-hotpink);
  display: none;
  max-width: 100%;
}
.total-orders {
  width: 135px;
  position: relative;
  font-weight: 500;
  display: inline-block;
  flex-shrink: 0;
  z-index: 1;
}
.to-box-inner {
  height: 77px;
  width: 135px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-sm) 0px 0px;
  box-sizing: border-box;
}
.to-box {
  flex: 0.9395;
  border-radius: var(--br-3xs);
  background-color: var(--color-hotpink);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) var(--padding-9xl) var(--padding-6xl-4);
  box-sizing: border-box;
  gap: var(--gap-34xl-6);
  min-width: 241px;
  min-height: 134px;
  max-width: 100%;
}
.po-box-child {
  height: 134.4px;
  width: 335.4px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-sandybrown-200);
  display: none;
  max-width: 100%;
}
.pending-icon {
  width: 80px;
  height: 80px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.pending-icon-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-lgi);
}
.po-count-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
}
.frame-parent34 {
  width: 161px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-4xs);
}
.po-box {
  flex: 1;
  border-radius: var(--br-3xs);
  background-color: var(--color-sandybrown-200);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  padding: var(--padding-xs) var(--padding-lgi) var(--padding-4xl-4);
  box-sizing: border-box;
  gap: var(--gap-28xl);
  min-width: 241px;
  max-width: 100%;
}
.products-orders {
  width: 1114.4px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-35xl-1);
  flex-shrink: 0;
  max-width: 100%;
}
.t-num {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-17xl-6);
  max-width: 100%;
}
.t-num-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-24xl);
  box-sizing: border-box;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1350px) {
  .tp-count {
    min-height: auto;
  }

  .pa-box {
    min-height: auto;
  }

  .pets-users-appointments-approv {
    flex-wrap: wrap;
  }

  .to-box {
    min-height: auto;
  }

  .products-orders {
    flex-wrap: wrap;
  }

  .t-num-wrapper {
    padding-left: var(--padding-2xl);
    padding-right: var(--padding-2xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 900px) {
  .tp-count1 {
    font-size: var(--font-size-13xl);
  }

  .tpo-count {
    font-size: var(--font-size-13xl);
  }

  .pets-users-appointments-approv {
    gap: var(--gap-8xl);
  }

  .products-orders {
    gap: var(--gap-8xl);
  }

  .t-num {
    gap: var(--gap-lg);
  }
}
@media screen and (max-width: 450px) {
  .tp-count1 {
    font-size: var(--font-size-5xl);
  }

  .pets-users {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .tp-count {
    flex-wrap: wrap;
  }

  .tpo-count {
    font-size: var(--font-size-5xl);
  }

  .total-pet-owners-wrapper {
    padding-left: var(--padding-xl);
    box-sizing: border-box;
  }

  .tpe-box {
    flex-wrap: wrap;
    gap: var(--gap-8xl);
  }

  .ta-box {
    flex-wrap: wrap;
  }

  .pa-box {
    flex-wrap: wrap;
    flex: 1;
  }

  .tpr-box {
    flex-wrap: wrap;
    flex: 1;
  }

  .to-box {
    flex-wrap: wrap;
    gap: var(--gap-8xl);
    flex: 1;
  }

  .po-box {
    flex-wrap: wrap;
    gap: var(--gap-4xl);
  }
}
</style>
