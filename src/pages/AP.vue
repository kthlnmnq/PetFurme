<template>
  <div class="a-p">
    <div class="extension" />
    <div class="a-p-child" />
    <div class="po-1">
      <div class="po-1-child" />
      <div class="appointment-date-wrapper">
        <div class="appointment-date">Appointment date</div>
      </div>
      <div class="frame-parent">
        <div class="line-wrapper">
          <div class="frame-child" />
        </div>
        <img
          class="user-photo-icon"
          loading="lazy"
          alt=""
          src="/user-photo@2x.png"
        />
      </div>
    </div>
    <div class="appointment-details" />
    <img
      class="mdiclock-outline-icon"
      loading="lazy"
      alt=""
      src="/mdiclockoutline.svg"
    />
    <img
      class="phdots-three-bold-icon"
      loading="lazy"
      alt=""
      src="/phdotsthreebold@2x.png"
    />
    <div class="po-11">
      <div class="po-1-item" />
      <img class="user-photo-icon1" alt="" src="/user-photo-1@2x.png" />
      <div class="appointment-date1">Appointment date</div>
      <div class="po-1-inner" />
    </div>
    <div class="appointment-details1" />
    <img class="mdiclock-outline-icon1" alt="" src="/mdiclockoutline.svg" />
    <img class="phdots-three-bold-icon1" alt="" src="/phdotsthreebold@2x.png" />
    <div class="appointment">Appointment :</div>
    <div class="vaccination-for-pet">Vaccination for pet Cloud</div>
    <div class="border-b" />
    <div class="border-a" />
    <main class="frame-group">
      <PageHeader /><Appointments />
      <div class="first-appointment-wrapper">
        <div class="first-appointment">
          <div class="thu-jun-21">Thu Jun 21 · 8:00 - 8:30 AM</div>
          <div class="appointment-details-container">
            <div class="frame-container">
              <div class="pet-owner-parent">
                <div class="pet-owner">Pet owner :</div>
                <div class="appointment-info">
                  <div class="appointment1">Appointment :</div>
                </div>
                <div class="contact-info">
                  <div class="contact">Contact :</div>
                </div>
              </div>
              <div class="john-doe-parent">
                <div class="john-doe">John Doe</div>
                <div class="vasectomy-for-pet-sky-wrapper">
                  <div class="vasectomy-for-pet">Vasectomy for pet Sky</div>
                </div>
                <div class="vasectomy-for-pet-sky-wrapper">
                  <div class="div">09223456789</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="second-appointment">
        <div class="second-appointment-details">
          <div class="thu-jun-20">Thu Jun 20 · 7:00 - 7:30 AM</div>
          <div class="appointment-details-container">
            <div class="owner-contact-parent">
              <div class="owner-contact1">
                <div class="pet-owner1">Pet owner :</div>
                <div class="contact-details">
                  <div class="contact1">Contact :</div>
                </div>
              </div>
              <div class="jane-tho-parent">
                <div class="jane-tho">Jane Tho</div>
                <div class="owner-name">09222456789</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <FrameComponent4
      :onNotificationTextClick="onNotificationTextClick"
      propTextDecoration="unset"
    />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import PageHeader from "../components/PageHeader.vue";
import Appointments from "../components/Appointments.vue";
import FrameComponent4 from "../components/FrameComponent4.vue";

export default defineComponent({
  name: "AP",
  components: { PageHeader, Appointments, FrameComponent4 },
  methods: {
    onNotificationTextClick() {
      this.$router.push("/4-notif");
    },
  },
});
</script>
<style scoped>
.extension {
  position: absolute;
  top: 1080px;
  left: 327px;
  background-color: var(--color-whitesmoke-100);
  width: 1593px;
  height: 1847px;
  display: none;
}
.a-p-child {
  position: absolute;
  top: 160px;
  left: 327px;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  background-color: var(--theme-white-default);
  width: 1593px;
  height: 69px;
  display: none;
}
.po-1-child {
  width: 1400px;
  height: 340px;
  position: relative;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-gray-700);
  display: none;
  max-width: 100%;
}
.appointment-date {
  position: relative;
  letter-spacing: 0.05em;
  font-weight: 500;
  z-index: 1;
}
.appointment-date-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-9xs);
}
.frame-child {
  align-self: stretch;
  flex: 1;
  position: relative;
  border-top: 1px solid var(--color-gray-400);
  box-sizing: border-box;
  max-width: 100%;
  z-index: 1;
}
.line-wrapper {
  align-self: stretch;
  height: 1px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-9xs);
  box-sizing: border-box;
  max-width: 100%;
}
.user-photo-icon {
  width: 100px;
  height: 100px;
  position: relative;
  border-radius: var(--br-31xl);
  object-fit: cover;
  z-index: 1;
}
.frame-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-17xl-8);
  max-width: 100%;
}
.po-1 {
  position: absolute;
  top: 530px;
  left: 420px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-gray-700);
  width: 1400px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-10xl) var(--padding-16xl) var(--padding-58xl)
    var(--padding-19xl);
  box-sizing: border-box;
  gap: var(--gap-47xl-2);
  max-width: 100%;
}
.appointment-details {
  position: absolute;
  top: 530px;
  left: 430px;
  border-right: 10px solid var(--color-red-100);
  box-sizing: border-box;
  width: 10px;
  height: 350px;
  z-index: 2;
}
.mdiclock-outline-icon {
  position: absolute;
  top: 599px;
  left: 459px;
  width: 30px;
  height: 30px;
  overflow: hidden;
  z-index: 2;
}
.phdots-three-bold-icon {
  position: absolute;
  top: 562px;
  left: 1730px;
  width: 60px;
  height: 60px;
  overflow: hidden;
  object-fit: contain;
  z-index: 2;
}
.po-1-item {
  position: absolute;
  top: 0px;
  left: calc(50% - 700px);
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-gray-700);
  width: 100%;
  height: 100%;
  display: none;
}
.user-photo-icon1 {
  position: absolute;
  top: 163px;
  left: 38px;
  border-radius: var(--br-31xl);
  width: 100px;
  height: 100px;
  object-fit: cover;
}
.appointment-date1 {
  position: absolute;
  top: 29px;
  left: 42px;
  letter-spacing: 0.05em;
  font-weight: 500;
}
.po-1-inner {
  position: absolute;
  top: 125.2px;
  left: 42px;
  border-top: 1px solid var(--color-gray-400);
  box-sizing: border-box;
  width: 1324px;
  height: 1px;
}
.po-11 {
  position: absolute;
  top: 930px;
  left: 420px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.25);
  border-radius: 0px var(--br-3xs) var(--br-3xs) 0px;
  background-color: var(--color-gray-700);
  width: 1400px;
  height: 340px;
}
.appointment-details1 {
  position: absolute;
  top: 930px;
  left: 430px;
  border-right: 10px solid var(--color-red-100);
  box-sizing: border-box;
  width: 10px;
  height: 350px;
}
.mdiclock-outline-icon1 {
  position: absolute;
  top: 999px;
  left: 459px;
  width: 30px;
  height: 30px;
  overflow: hidden;
}
.phdots-three-bold-icon1 {
  position: absolute;
  top: 962px;
  left: 1730px;
  width: 60px;
  height: 60px;
  overflow: hidden;
  object-fit: contain;
}
.appointment {
  position: absolute;
  top: 1138px;
  left: 589px;
  font-size: var(--font-size-11xl);
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
}
.vaccination-for-pet {
  position: absolute;
  top: 1138px;
  left: 873px;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
}
.border-b {
  position: absolute;
  top: 560px;
  left: 1830px;
  background-color: var(--color-whitesmoke-100);
  width: 90px;
  height: 2367px;
  display: none;
}
.border-a {
  position: absolute;
  top: 542px;
  left: 327px;
  background-color: var(--color-whitesmoke-100);
  width: 96px;
  height: 2385px;
  display: none;
}
.thu-jun-21 {
  position: relative;
  letter-spacing: 0.05em;
  font-weight: 300;
  display: inline-block;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
  white-space: nowrap;
  max-width: 100%;
  z-index: 2;
}
.pet-owner {
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
  flex-shrink: 0;
  z-index: 2;
}
.appointment1 {
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
  flex-shrink: 0;
  z-index: 3;
}
.appointment-info {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-11xs);
  margin-top: -4px;
}
.contact {
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
  flex-shrink: 0;
  z-index: 4;
}
.contact-info {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-11xs);
  margin-top: -4px;
}
.pet-owner-parent {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  min-width: 217px;
}
.john-doe {
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  display: inline-block;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
  min-width: 123px;
  flex-shrink: 0;
  z-index: 2;
}
.vasectomy-for-pet {
  margin-top: -4px;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
  flex-shrink: 0;
  z-index: 3;
}
.vasectomy-for-pet-sky-wrapper {
  height: 46px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px;
  box-sizing: border-box;
}
.div {
  margin-top: -4px;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
  flex-shrink: 0;
  z-index: 4;
}
.john-doe-parent {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  min-width: 288px;
  font-size: var(--font-size-6xl);
}
.frame-container {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-50xl);
  max-width: 100%;
}
.appointment-details-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  max-width: 100%;
  font-size: var(--font-size-11xl);
}
.first-appointment {
  width: 663px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-44xl);
  max-width: 100%;
}
.first-appointment-wrapper {
  width: 1005px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0px var(--padding-xl) var(--padding-88xl);
  box-sizing: border-box;
  max-width: 100%;
  flex-shrink: 0;
}
.thu-jun-20 {
  position: relative;
  letter-spacing: 0.05em;
  font-weight: 300;
  display: inline-block;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
  white-space: nowrap;
  max-width: 100%;
}
.pet-owner1 {
  align-self: stretch;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
}
.contact1 {
  align-self: stretch;
  flex: 1;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #242424,
    0 1px 0 #242424,
    -1px 0 0 #242424,
    0 -1px 0 #242424;
}
.contact-details {
  width: 146px;
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-11xs);
  box-sizing: border-box;
}
.owner-contact1 {
  height: 142px;
  width: 175px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-23xl);
  min-width: 175px;
}
.jane-tho {
  width: 120px;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  display: inline-block;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
}
.owner-name {
  align-self: stretch;
  position: relative;
  letter-spacing: 0.05em;
  line-height: 50px;
  font-weight: 300;
  text-shadow:
    1px 0 0 #a7a7a7,
    0 1px 0 #a7a7a7,
    -1px 0 0 #a7a7a7,
    0 -1px 0 #a7a7a7;
}
.jane-tho-parent {
  width: 180px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-23xl);
  min-width: 180px;
  font-size: var(--font-size-6xl);
}
.owner-contact-parent {
  width: 466px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  gap: var(--gap-xl);
  max-width: 100%;
}
.second-appointment-details {
  width: 555px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-44xl);
  max-width: 100%;
}
.second-appointment {
  width: 897px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0px var(--padding-xl);
  box-sizing: border-box;
  max-width: 100%;
  flex-shrink: 0;
}
.frame-group {
  position: absolute;
  top: 0px;
  left: 327px;
  width: 1593px;
  height: 1080px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px var(--padding-227xl);
  box-sizing: border-box;
  gap: var(--gap-39xl);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-gray-400);
  font-family: var(--font-inter);
}
.a-p {
  width: 100%;
  height: 1080px;
  position: relative;
  background-color: var(--color-whitesmoke-100);
  overflow: hidden;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  font-size: var(--font-size-6xl);
  color: var(--color-gray-400);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1500px) {
  .frame-group {
    height: auto;
  }

  .a-p {
    height: auto;
    min-height: 1080;
  }
}
@media screen and (max-width: 850px) {
  .appointment {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }

  .pet-owner {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }

  .appointment1 {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }

  .contact {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }

  .pet-owner-parent {
    flex: 1;
  }

  .john-doe-parent {
    flex: 1;
  }

  .frame-container {
    flex-wrap: wrap;
  }

  .pet-owner1 {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }

  .contact1 {
    font-size: var(--font-size-5xl);
    line-height: 40px;
  }
}
@media screen and (max-width: 450px) {
  .appointment-date {
    font-size: var(--font-size-xl);
  }

  .appointment-date1 {
    font-size: var(--font-size-xl);
  }

  .appointment {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .vaccination-for-pet {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .thu-jun-21 {
    font-size: var(--font-size-xl);
  }

  .pet-owner {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .appointment1 {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .contact {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .john-doe {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .vasectomy-for-pet {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .div {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .thu-jun-20 {
    font-size: var(--font-size-xl);
  }

  .pet-owner1 {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .contact1 {
    font-size: var(--font-size-lg);
    line-height: 30px;
  }

  .owner-contact1 {
    flex: 1;
  }

  .jane-tho {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .owner-name {
    font-size: var(--font-size-xl);
    line-height: 40px;
  }

  .jane-tho-parent {
    flex: 1;
  }

  .owner-contact-parent {
    flex-wrap: wrap;
  }
}
</style>
