<template>
  <div class="prod-info">
    <div class="rectangle-parent3">
      <div class="frame-child7" />
      <div class="home-container">
        <a class="home1">HOME</a>
      </div>
      <div class="dashboard-container">
        <a class="dashboard1" @click="onDashboardTextClick">Dashboard</a>
      </div>
      <div class="dashboard-container">
        <div class="notification1" @click="onNotificationTextClick">
          Notification
        </div>
      </div>
      <div class="dashboard-container">
        <div class="notification1" @click="onAppointmentTextClick">
          Appointment
        </div>
      </div>
      <div class="dashboard-container">
        <div class="messages1" @click="onMessagesTextClick">Messages</div>
      </div>
      <div class="user-management-container">
        <b class="user-management2">USER MANAGEMENT</b>
      </div>
      <div class="pet-owner-container">
        <div class="pet-owner5">Pet Owner</div>
      </div>
      <div class="pet-owner-container">
        <div class="sub-admin1">Sub Admin</div>
      </div>
      <div class="place-h-container">
        <div class="place-h4">Place H</div>
      </div>
      <div class="pets-order-items-parent">
        <div class="place-h-container">
          <div class="pets1" @click="onPetsTextClick">Pets</div>
        </div>
        <div class="rectangle-parent4">
          <div class="frame-child8" />
          <b class="products1">Products</b>
        </div>
        <div class="place-h-container">
          <div class="order2" @click="onOrderTextClick">Order</div>
        </div>
      </div>
      <div class="place-h-container">
        <div class="report1">Report</div>
      </div>
    </div>
    <main class="header-content-group">
      <Navbar petProfile="Product Information" propRight="-190px" />
      <section class="s-pi-c-2-wrapper">
        <div class="s-pi-c-2">
          <div class="pi-c">
            <div class="bg1" />
            <div class="product-description-container-parent">
              <div class="product-description-container">
                <h3 class="product-title">Product Title</h3>
                <v-text-field
                  class="product-title-input-container"
                  color="rgba(99, 0, 237, 0)"
                  variant="outlined"
                  placeholder="Type here"
                />
              </div>
              <div class="product-description-container">
                <h3 class="product-title">About Product</h3>
                <div class="about-product-input">
                  <div class="about-product-input-child" />
                  <div class="type-here">Type here</div>
                  <div class="input-resize-icon">
                    <img
                      class="mdiresize-bottom-right-icon"
                      loading="lazy"
                      alt=""
                      src="/mdiresizebottomright.svg"
                    />
                  </div>
                </div>
              </div>
              <footer class="images-label-container-parent">
                <div class="images-label-container">
                  <h3 class="images">Images</h3>
                </div>
                <div class="uploaded-images">
                  <div class="image-1">
                    <div class="image-1-child" />
                    <img
                      class="f9745eaac16943de9602f5c03322e2-icon"
                      alt=""
                      src="/f9745eaac16943de9602f5c03322e24dremovebgpreview-11@2x.png"
                    />
                  </div>
                  <div class="image-2">
                    <div class="image-1-child" />
                    <img
                      class="aucvwyytrt82csmlapclmm-waterma-icon"
                      alt=""
                      src="/aucvwyytrt82csmlapclmm-watermark-400removebgpreview-1@2x.png"
                    />
                  </div>
                  <div class="image-1">
                    <div class="image-1-child" />
                    <img
                      class="f9745eaac16943de9602f5c03322e2-icon"
                      alt=""
                      src="/f9745eaac16943de9602f5c03322e24dremovebgpreview-11@2x.png"
                    />
                  </div>
                  <div class="image-4">
                    <div class="image-4-child" />
                    <div class="vector-container">
                      <img class="vector-icon" alt="" src="/vector.svg" />
                    </div>
                    <div class="upload">Upload</div>
                  </div>
                </div>
              </footer>
            </div>
            <div class="type-here1">Type here</div>
            <div class="type-here2">Type here</div>
            <div class="product-description-container-parent">
              <div class="tags-input">
                <h3 class="tags">Tags</h3>
                <div class="tags-box">
                  <div class="tags-box-child" />
                  <div class="tag-1">
                    <div class="tag-1-child" />
                    <div class="bathing">Bathing</div>
                    <img class="uiltimes-icon" alt="" src="/uiltimes.svg" />
                  </div>
                  <div class="tag-2">
                    <div class="tag-2-child" />
                    <div class="odor-control">Odor Control</div>
                    <img class="uiltimes-icon" alt="" src="/uiltimes.svg" />
                  </div>
                  <div class="tag-3">
                    <div class="tag-3-child" />
                    <div class="grooming">Grooming</div>
                    <img class="uiltimes-icon" alt="" src="/uiltimes.svg" />
                  </div>
                </div>
              </div>
              <div class="category-stock-container-parent">
                <div class="category-stock-container">
                  <div class="category-stock-items">
                    <h3 class="category">Category</h3>
                    <h3 class="stock">Stock</h3>
                  </div>
                </div>
                <div class="frame-parent12">
                  <div class="group-div">
                    <div class="frame-child9" />
                    <div class="select-label-container">
                      <div class="select">Select</div>
                    </div>
                    <img
                      class="tablercaret-up-down-filled-icon"
                      alt=""
                      src="/tablercaretupdownfilled.svg"
                    />
                  </div>
                  <div class="frame-child10" />
                </div>
              </div>
              <div class="price-container-parent">
                <div class="price-container">
                  <h3 class="price">Price</h3>
                </div>
                <div class="publish-options">
                  <div class="checkbox-publish">
                    <div class="checkbox-container">
                      <div class="checkbox" />
                      <div class="checkbox-icon-container">
                        <img
                          class="mingcutecheckbox-fill-icon"
                          alt=""
                          src="/mingcutecheckboxfill.svg"
                        />
                        <div class="publish-label-container">
                          <div class="publish-on-app">Publish on app</div>
                        </div>
                      </div>
                    </div>
                    <div class="publish-btn">
                      <div class="publish-btn-child" />
                      <h3 class="publish-item">Publish Item</h3>
                    </div>
                  </div>
                  <div class="c-b">
                    <div class="c-b-child" />
                    <div class="php">PHP</div>
                    <img
                      class="tablercaret-up-down-filled-icon1"
                      alt=""
                      src="/tablercaretupdownfilled-1.svg"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="extension10" />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import Navbar from "../components/Navbar.vue";

export default defineComponent({
  name: "ProdInfo",
  components: { Navbar },
  methods: {
    onDashboardTextClick() {
      this.$router.push("/3-main");
    },
    onNotificationTextClick() {
      this.$router.push("/4-notif");
    },
    onAppointmentTextClick() {
      this.$router.push("/5-a-up");
    },
    onMessagesTextClick() {
      this.$router.push("/7-mes");
    },
    onPetsTextClick() {
      this.$router.push("/9-p");
    },
    onOrderTextClick() {
      this.$router.push("/14-order");
    },
  },
});
</script>
<style scoped>
.frame-child7 {
  align-self: stretch;
  height: 1080px;
  position: relative;
  background-color: var(--color-darkslategray);
  display: none;
}
.home1 {
  text-decoration: none;
  position: relative;
  font-weight: 700;
  color: inherit;
  display: inline-block;
  min-width: 77px;
  z-index: 1;
}
.home-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-21xl);
}
.dashboard1 {
  text-decoration: none;
  position: relative;
  color: inherit;
  display: inline-block;
  min-width: 129px;
  cursor: pointer;
  z-index: 1;
}
.dashboard-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-49xl);
}
.notification1 {
  position: relative;
  cursor: pointer;
  z-index: 1;
}
.messages1 {
  position: relative;
  display: inline-block;
  min-width: 121px;
  cursor: pointer;
  z-index: 1;
}
.user-management2 {
  position: relative;
  z-index: 1;
}
.user-management-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-14xl);
}
.pet-owner5 {
  position: relative;
  display: inline-block;
  min-width: 125px;
  z-index: 1;
}
.pet-owner-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-47xl);
}
.sub-admin1 {
  position: relative;
  display: inline-block;
  min-width: 129px;
  z-index: 1;
}
.place-h4 {
  position: relative;
  display: inline-block;
  min-width: 91px;
  z-index: 1;
}
.place-h-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-47xl);
}
.pets1 {
  position: relative;
  display: inline-block;
  min-width: 53px;
  cursor: pointer;
  z-index: 1;
}
.frame-child8 {
  height: 67px;
  width: 325px;
  position: relative;
  background-color: var(--color-lightgreen);
  display: none;
  max-width: 100%;
}
.products1 {
  position: relative;
  display: inline-block;
  min-width: 111px;
  z-index: 2;
}
.rectangle-parent4 {
  align-self: stretch;
  background-color: var(--color-lightgreen);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) var(--padding-47xl) var(--padding-lgi);
  box-sizing: border-box;
  max-width: 100%;
  z-index: 1;
}
.order2 {
  position: relative;
  display: inline-block;
  min-width: 68px;
  cursor: pointer;
  z-index: 1;
}
.pets-order-items-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-9xl-5);
  max-width: 100%;
}
.report1 {
  height: 36px;
  position: relative;
  display: inline-block;
  min-width: 80px;
  z-index: 1;
}
.rectangle-parent3 {
  width: 327px;
  background-color: var(--color-darkslategray);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-45xl) 0px var(--padding-34xl) var(--padding-11xs);
  box-sizing: border-box;
  gap: var(--gap-28xl-3);
  max-width: 100%;
}
.bg1 {
  width: 1268px;
  height: 1879px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl) var(--br-xl) 0px 0px;
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
  z-index: 0;
}
.product-title {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  z-index: 1;
}
.product-title-input-container {
  border: none;
  background-color: transparent;
  align-self: stretch;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  font-family: var(--font-inter);
  font-weight: 500;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
  max-width: 100%;
  z-index: 1;
}
.product-description-container {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl);
  max-width: 100%;
}
.about-product-input-child {
  width: 1115px;
  height: 332px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.type-here {
  position: relative;
  font-weight: 500;
  z-index: 2;
}
.mdiresize-bottom-right-icon {
  height: 40px;
  width: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 2;
}
.input-resize-icon {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
}
.about-product-input {
  align-self: stretch;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-15xl) var(--padding-6xs) var(--padding-6xs)
    var(--padding-11xl);
  box-sizing: border-box;
  gap: 214px;
  max-width: 100%;
  z-index: 1;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
}
.images {
  margin: 0;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  min-width: 124px;
  z-index: 1;
}
.images-label-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-12xs);
}
.image-1-child {
  height: 250px;
  width: 250px;
  position: relative;
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
}
.f9745eaac16943de9602f5c03322e2-icon {
  height: 180.8px;
  flex: 1;
  position: relative;
  max-width: 100%;
  overflow: hidden;
  object-fit: cover;
  z-index: 1;
}
.image-1 {
  flex: 1;
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-16xl) var(--padding-11xl) var(--padding-15xl-2);
  z-index: 1;
}
.aucvwyytrt82csmlapclmm-waterma-icon {
  height: 188px;
  flex: 1;
  position: relative;
  max-width: 100%;
  overflow: hidden;
  object-fit: cover;
  z-index: 1;
}
.image-2 {
  flex: 0.9368;
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-13xl) var(--padding-16xl) var(--padding-11xl)
    var(--padding-18xl);
  z-index: 1;
}
.image-4-child {
  width: 250px;
  height: 250px;
  position: relative;
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
}
.vector-icon {
  height: 64.5px;
  width: 86px;
  position: relative;
  z-index: 1;
}
.vector-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-4xs);
}
.upload {
  align-self: stretch;
  height: 36px;
  position: relative;
  font-weight: 500;
  display: inline-block;
  z-index: 1;
}
.image-4 {
  flex: 0.5474;
  box-shadow: 0px 0px 2px 2px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 72px var(--padding-54xl) var(--padding-52xl);
  gap: 6.5px;
  z-index: 1;
}
.uploaded-images {
  align-self: stretch;
  height: 23px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px;
  box-sizing: border-box;
  gap: 36px;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
}
.images-label-container-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-lgi);
  text-align: left;
  font-size: var(--font-size-16xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}
.product-description-container-parent {
  width: 1115px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-16xl);
  max-width: 100%;
}
.type-here1 {
  width: 144px;
  height: 37px;
  position: absolute;
  margin: 0 !important;
  right: 409px;
  bottom: 511px;
  font-size: var(--font-size-11xl);
  font-weight: 500;
  color: var(--color-darkgray-400);
  display: inline-block;
  z-index: 2;
}
.type-here2 {
  width: 144px;
  height: 37px;
  position: absolute;
  margin: 0 !important;
  bottom: 310px;
  left: 100px;
  font-size: var(--font-size-11xl);
  font-weight: 500;
  color: var(--color-darkgray-400);
  display: inline-block;
  z-index: 3;
}
.tags {
  margin: 0;
  width: 82px;
  height: 42px;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  z-index: 1;
}
.tags-box-child {
  height: 104px;
  width: 1115px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  flex-shrink: 0;
  display: none;
}
.tag-1-child {
  height: 69px;
  width: 178px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  display: none;
}
.bathing {
  align-self: stretch;
  flex: 1;
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.uiltimes-icon {
  height: 30px;
  width: 30px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 30px;
  z-index: 1;
}
.tag-1 {
  height: 69px;
  width: 178px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl) var(--padding-mid) var(--padding-lgi)
    var(--padding-xl);
  box-sizing: border-box;
  gap: var(--gap-lgi);
  z-index: 1;
}
.tag-2-child {
  height: 69px;
  width: 241px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  display: none;
}
.odor-control {
  align-self: stretch;
  flex: 1;
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.tag-2 {
  height: 69px;
  width: 241px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl) var(--padding-mid) var(--padding-lgi)
    var(--padding-xl);
  box-sizing: border-box;
  gap: var(--gap-lgi);
  white-space: nowrap;
  z-index: 1;
}
.tag-3-child {
  height: 69px;
  width: 199px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  display: none;
}
.grooming {
  flex: 1;
  position: relative;
  font-weight: 500;
  z-index: 1;
}
.tag-3 {
  width: 199px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--color-whitesmoke-400);
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl) var(--padding-xs) var(--padding-lgi)
    var(--padding-xl);
  box-sizing: border-box;
  gap: var(--gap-lgi);
  z-index: 1;
}
.tags-box {
  align-self: stretch;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  overflow-x: auto;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lg) var(--padding-2xl) var(--padding-mid);
  gap: 19.5px;
  z-index: 1;
  font-size: var(--font-size-6xl);
  color: var(--color-darkgray-400);
}
.tags-input {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl);
}
.category {
  margin: 0;
  height: 42px;
  width: 158px;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  z-index: 1;
}
.stock {
  margin: 0;
  height: 42px;
  width: 98px;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
  display: inline-block;
  z-index: 1;
}
.category-stock-items {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  max-width: 100%;
  gap: var(--gap-xl);
}
.category-stock-container {
  width: 716px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
  max-width: 100%;
}
.frame-child9 {
  height: 104px;
  width: 585px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.select {
  align-self: stretch;
  position: relative;
  font-weight: 500;
  z-index: 2;
}
.select-label-container {
  width: 91px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-3xs) 0px 0px;
  box-sizing: border-box;
}
.tablercaret-up-down-filled-icon {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 2;
}
.group-div {
  flex: 1;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  padding: var(--padding-8xl) var(--padding-14xl) var(--padding-8xl)
    var(--padding-21xl);
  box-sizing: border-box;
  min-width: 141px;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 1;
}
.frame-child10 {
  height: 104px;
  width: 469px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  min-width: 469px;
  max-width: 100%;
  z-index: 1;
}
.frame-parent12 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-11xl);
  max-width: 100%;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
}
.category-stock-container-parent {
  width: 1084px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl);
  max-width: 100%;
}
.price {
  margin: 0;
  align-self: stretch;
  flex: 1;
  position: relative;
  font-size: inherit;
  font-weight: 600;
  font-family: inherit;
}
.price-container {
  width: 93px;
  height: 42px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-10xs);
  box-sizing: border-box;
}
.checkbox {
  align-self: stretch;
  flex: 1;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
}
.mingcutecheckbox-fill-icon {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
}
.publish-on-app {
  align-self: stretch;
  height: 37px;
  position: relative;
  font-weight: 500;
  display: inline-block;
}
.publish-label-container {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xs) 0px 0px;
}
.checkbox-icon-container {
  width: 285px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-4xl);
}
.checkbox-container {
  align-self: stretch;
  height: 194px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-21xl);
}
.publish-btn-child {
  height: 85px;
  width: 293px;
  position: relative;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue-400);
  display: none;
}
.publish-item {
  margin: 0;
  align-self: stretch;
  flex: 1;
  position: relative;
  font-size: inherit;
  font-weight: 500;
  font-family: inherit;
  z-index: 1;
}
.publish-btn {
  width: 293px;
  height: 85px;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue-400);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-3xl) var(--padding-24xl) var(--padding-2xl);
  box-sizing: border-box;
  white-space: nowrap;
  z-index: 1;
  font-size: var(--font-size-16xl);
  color: var(--theme-white-default);
}
.checkbox-publish {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-26xl);
  min-width: 380px;
  max-width: 100%;
}
.c-b-child {
  height: 104px;
  width: 284px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
}
.php {
  width: 61.7px;
  position: relative;
  font-weight: 500;
  display: inline-block;
  flex-shrink: 0;
  z-index: 1;
}
.tablercaret-up-down-filled-icon1 {
  height: 50px;
  width: 50.5px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.c-b {
  height: 104px;
  width: 284px;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-xl) var(--padding-mid) var(--padding-lgi)
    var(--padding-xl);
  box-sizing: border-box;
  gap: var(--gap-lgi);
  min-width: 284px;
  z-index: 1;
}
.publish-options {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-11xl);
  max-width: 100%;
  font-size: var(--font-size-11xl);
  color: var(--color-darkgray-400);
}
.price-container-parent {
  width: 899px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-xl);
  max-width: 100%;
}
.pi-c {
  flex: 1;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl) var(--br-xl) 0px 0px;
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-38xl) var(--padding-51xl);
  box-sizing: border-box;
  position: relative;
  gap: 262px;
  max-width: 100%;
  flex-shrink: 0;
}
.s-pi-c-2 {
  height: 772px;
  width: 1268px;
  overflow-y: auto;
  flex-shrink: 0;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.s-pi-c-2-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0px var(--padding-xl) 0px var(--padding-6xl);
  box-sizing: border-box;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-16xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}
.header-content-group {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-xs);
  min-width: 1035px;
  max-width: 100%;
}
.extension10 {
  height: 1847px;
  width: 1593px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  display: none;
  max-width: 100%;
  z-index: 1;
}
.prod-info {
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
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--theme-white-default);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1225px) {
  .rectangle-parent3 {
    padding-top: var(--padding-23xl);
    padding-bottom: var(--padding-15xl);
    box-sizing: border-box;
  }

  .about-product-input {
    gap: 107px;
  }

  .frame-child10 {
    flex: 1;
  }

  .frame-parent12 {
    flex-wrap: wrap;
  }

  .pi-c {
    gap: 131px;
    padding: var(--padding-18xl) var(--padding-16xl);
    box-sizing: border-box;
  }

  .header-content-group {
    min-width: 100%;
  }
}
@media screen and (max-width: 850px) {
  .product-title {
    font-size: var(--font-size-9xl);
  }

  .type-here {
    font-size: var(--font-size-5xl);
  }

  .about-product-input {
    gap: var(--gap-34xl);
  }

  .images {
    font-size: var(--font-size-9xl);
  }

  .upload {
    font-size: var(--font-size-5xl);
  }

  .uploaded-images {
    gap: var(--gap-lg);
  }

  .product-description-container-parent {
    gap: var(--gap-mid);
  }

  .type-here1 {
    font-size: var(--font-size-5xl);
  }

  .type-here2 {
    font-size: var(--font-size-5xl);
  }

  .tags {
    font-size: var(--font-size-9xl);
  }

  .category {
    font-size: var(--font-size-9xl);
  }

  .stock {
    font-size: var(--font-size-9xl);
  }

  .select {
    font-size: var(--font-size-5xl);
  }

  .frame-child10 {
    min-width: 100%;
  }

  .price {
    font-size: var(--font-size-9xl);
  }

  .publish-on-app {
    font-size: var(--font-size-5xl);
  }

  .checkbox-container {
    gap: var(--gap-xl);
  }

  .checkbox-publish {
    gap: var(--gap-3xl);
    min-width: 100%;
  }

  .php {
    font-size: var(--font-size-5xl);
  }

  .c-b {
    flex: 1;
  }

  .publish-options {
    flex-wrap: wrap;
  }

  .pi-c {
    gap: 65px;
    padding-top: var(--padding-5xl);
    padding-bottom: var(--padding-5xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 450px) {
  .home1 {
    font-size: var(--font-size-xl);
  }

  .dashboard1 {
    font-size: var(--font-size-xl);
  }

  .dashboard-container {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .notification1 {
    font-size: var(--font-size-xl);
  }

  .messages1 {
    font-size: var(--font-size-xl);
  }

  .user-management2 {
    font-size: var(--font-size-xl);
  }

  .pet-owner5 {
    font-size: var(--font-size-xl);
  }

  .pet-owner-container {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .sub-admin1 {
    font-size: var(--font-size-xl);
  }

  .place-h4 {
    font-size: var(--font-size-xl);
  }

  .pets1 {
    font-size: var(--font-size-xl);
  }

  .products1 {
    font-size: var(--font-size-xl);
  }

  .order2 {
    font-size: var(--font-size-xl);
  }

  .report1 {
    font-size: var(--font-size-xl);
  }

  .rectangle-parent3 {
    gap: var(--gap-5xl);
    padding-top: var(--padding-8xl);
    padding-bottom: var(--padding-3xl);
    box-sizing: border-box;
  }

  .product-title {
    font-size: var(--font-size-2xl);
  }

  .type-here {
    font-size: var(--font-size-lg);
  }

  .about-product-input {
    gap: var(--gap-8xl);
  }

  .images {
    font-size: var(--font-size-2xl);
  }

  .upload {
    font-size: var(--font-size-lg);
  }

  .image-4 {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .type-here1 {
    font-size: var(--font-size-lg);
  }

  .type-here2 {
    font-size: var(--font-size-lg);
  }

  .tags {
    font-size: var(--font-size-2xl);
  }

  .bathing {
    font-size: var(--font-size-xl);
  }

  .grooming {
    font-size: var(--font-size-xl);
  }

  .category {
    font-size: var(--font-size-2xl);
  }

  .stock {
    font-size: var(--font-size-2xl);
  }

  .category-stock-items {
    flex-wrap: wrap;
  }

  .select {
    font-size: var(--font-size-lg);
  }

  .group-div {
    flex-wrap: wrap;
  }

  .price {
    font-size: var(--font-size-2xl);
  }

  .publish-on-app {
    font-size: var(--font-size-lg);
  }

  .publish-btn {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .php {
    font-size: var(--font-size-lg);
  }

  .pi-c {
    gap: 33px;
  }

  .s-pi-c-2 {
    height: auto;
  }
}
</style>
