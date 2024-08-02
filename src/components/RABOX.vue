<template>
  <div class="ra-box">
    <div class="ra-box-child" />
    <div class="activity-items">
      <h2 class="new-pet-added-container">
        <span>New user registered: </span>
        <span class="max">John Doe</span>
      </h2>
    </div>
    <div class="activity-items1">
      <h2 class="new-pet-added-container">
        <span>New pet added:</span>
        <span class="max"> Max </span>
        <span>(Golden Retriever)</span>
      </h2>
    </div>
    <div class="activity-items2">
      <h2 class="new-pet-added-container">
        <span>Appointment scheduled for </span>
        <span class="max">Fluffy</span>
      </h2>
    </div>
    <div class="new-product">
      <h2 class="added-new-product-container">
        <span>Added new product: '</span>
        <span class="max">Cat Toy</span>
        <span> -</span>
        <span class="max"> Feather Wand</span>
        <span>'.</span>
      </h2>
      <div class="shipped-order">
        <h2 class="new-pet-added-container">
          <span>Order #1234 shipped to </span>
          <span class="max">John Doe</span>
          <span>.</span>
        </h2>
      </div>
    </div>
    <div class="activity-items3">
      <h2 class="new-pet-added-container">
        Inventory updated for 'Dog Treats'.
      </h2>
    </div>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "RABOX",
});
</script>
<style scoped>
.ra-box-child {
  width: 915px;
  height: 579px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.activity-items {
  width: 379px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.max {
  color: var(--color-cornflowerblue-400);
}
.new-pet-added-container {
  margin: 0;
  height: 30px;
  flex: 1;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  max-width: 100%;
  z-index: 1;
}
.activity-items1 {
  width: 482px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.activity-items2 {
  width: 413px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.added-new-product-container {
  margin: 0;
  align-self: stretch;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  z-index: 1;
}
.shipped-order {
  width: 425px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.new-product {
  width: 552px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xl);
  max-width: 100%;
}
.activity-items3 {
  width: 428px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.ra-box {
  width: 915px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-40xl-7) var(--padding-40xl) var(--padding-45xl);
  box-sizing: border-box;
  gap: var(--gap-36xl-1);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 900px) {
  .ra-box {
    gap: var(--gap-9xl);
    padding: var(--padding-20xl) var(--padding-10xl) var(--padding-23xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 450px) {
  .new-pet-added-container {
    font-size: var(--font-size-xl);
  }

  .added-new-product-container {
    font-size: var(--font-size-xl);
  }
}
</style>
