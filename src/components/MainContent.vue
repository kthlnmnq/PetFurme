<template>
  <section class="main-content">
    <div class="main-f-pp1">
      <div class="pp-f2">
        <div class="pp-content2">
          <div class="bg3" />
          <div class="profile-info">
            <div class="pet-details">
              <div class="pet-c-p-parent">
                <img class="pet-c-p" loading="lazy" alt="" src="/pet-c-p.svg" />
                <div class="basic-info-parent">
                  <div class="basic-info">Basic Info</div>
                  <div class="paw-icon-container">
                    <div class="n-i">
                      <div class="n-i-child" />
                      <img
                        class="fa-solidpaw-icon"
                        loading="lazy"
                        alt=""
                        src="/fasolidpaw.svg"
                      />
                    </div>
                    <div class="name-container">
                      <div class="name-label">
                        <b class="name1">Name</b>
                        <div class="blacky1">Blacky</div>
                      </div>
                    </div>
                  </div>
                  <div class="n-i-parent">
                    <div class="n-i">
                      <div class="n-i-child" />
                      <img
                        class="mdidog-icon"
                        loading="lazy"
                        alt=""
                        src="/mdidog.svg"
                      />
                    </div>
                    <div class="attribute-labels-wrapper">
                      <div class="attribute-labels">
                        <b class="species">Species</b>
                        <div class="dog1">Dog</div>
                      </div>
                    </div>
                  </div>
                  <div class="n-i-parent">
                    <div class="n-i">
                      <div class="n-i-child" />
                      <img
                        class="phgender-intersex-fill-icon"
                        loading="lazy"
                        alt=""
                        src="/phgenderintersexfill.svg"
                      />
                    </div>
                    <div class="attribute-labels-wrapper">
                      <div class="attribute-labels">
                        <b class="sex">Sex</b>
                        <div class="male1">Male</div>
                      </div>
                    </div>
                  </div>
                  <div class="frame-parent35">
                    <div class="n-i-wrapper">
                      <img
                        class="n-i-icon"
                        loading="lazy"
                        alt=""
                        src="/n-i.svg"
                      />
                    </div>
                    <div class="weight-parent">
                      <b class="weight">Weight</b>
                      <div class="lbs">70 lbs</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owner-info-parent">
                <div class="owner-info1">
                  <div class="owner-details">
                    <div class="owner-icon-container">
                      <div class="n-i">
                        <div class="n-i-child" />
                        <img
                          class="mdiuser-icon"
                          loading="lazy"
                          alt=""
                          src="/mdiuser.svg"
                        />
                      </div>
                      <div class="owner-label">
                        <div class="attribute-labels">
                          <b class="species">Owner</b>
                          <div class="john-doe6">John Doe</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="edit-button">
                    <div class="edit-label">
                      <div class="edit24">Edit</div>
                    </div>
                    <img
                      class="weuiarrow-outlined-icon3"
                      alt=""
                      src="/weuiarrowoutlined.svg"
                    />
                  </div>
                </div>
                <div class="breed-container">
                  <div class="n-i4">
                    <div class="n-i-child2" />
                    <img
                      class="material-symbolsgenetics-roun-icon"
                      loading="lazy"
                      alt=""
                      src="/materialsymbolsgeneticsrounded.svg"
                    />
                  </div>
                  <div class="breed-label">
                    <div class="name-label">
                      <b class="breed">Breed</b>
                      <div class="german-shepherd1">German Shepherd</div>
                    </div>
                  </div>
                </div>
                <div class="n-i-container">
                  <div class="n-i5">
                    <div class="n-i-child" />
                    <img
                      class="bxssmile-icon"
                      loading="lazy"
                      alt=""
                      src="/bxssmile.svg"
                    />
                  </div>
                  <div class="age-container">
                    <div class="name-label">
                      <b class="age">Age</b>
                      <div class="owner-label-values">12</div>
                    </div>
                  </div>
                </div>
                <div class="breed-container">
                  <div class="n-i6">
                    <div class="n-i-child" />
                    <img
                      class="mdidog-icon"
                      loading="lazy"
                      alt=""
                      src="/icbaselinecake.svg"
                    />
                  </div>
                  <div class="frame-wrapper14">
                    <div class="name-label">
                      <b class="species">Birthdate</b>
                      <div class="john-doe6">12/21/2008</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="separator-parent">
            <div class="separator1" />
            <div class="record-buttons">
              <div class="mr-btn">
                <div class="mr-bg" />
                <div class="record-icons">
                  <img class="mr-i-icon" alt="" src="/mr-i@2x.png" />
                  <div class="record-names">
                    <b class="medical-records">Medical Records</b>
                  </div>
                </div>
                <div class="weuiarrow-outlined-wrapper">
                  <img
                    class="weuiarrow-outlined-icon4"
                    alt=""
                    src="/weuiarrowoutlined-2.svg"
                  />
                </div>
              </div>
            </div>
            <div class="record-buttons1">
              <div class="p-btn" @click="onPBtnContainerClick">
                <div class="mr-bg" />
                <div class="images-2-parent">
                  <img class="images-2-icon" alt="" src="/images-2@2x.png" />
                  <div class="prescriptions-wrapper">
                    <b class="weight">Prescriptions</b>
                  </div>
                </div>
                <div class="weuiarrow-outlined-container">
                  <img
                    class="weuiarrow-outlined-icon5"
                    alt=""
                    src="/weuiarrowoutlined-2.svg"
                  />
                </div>
              </div>
            </div>
            <div class="record-buttons1">
              <div class="lr-btn">
                <div class="mr-bg" />
                <div class="image-11-parent">
                  <img class="image-11-icon" alt="" src="/image-11@2x.png" />
                  <div class="lab-results-wrapper">
                    <b class="weight">Lab Results</b>
                  </div>
                </div>
                <div class="weuiarrow-outlined-container">
                  <img
                    class="weuiarrow-outlined-icon5"
                    alt=""
                    src="/weuiarrowoutlined-2.svg"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="reminder-details-wrapper">
            <div class="reminder-details">
              <div class="content-b" />
              <div class="reminder-content">
                <div class="rem-tag">
                  <div class="rem-tag-child" />
                  <div class="reminder1">Reminder</div>
                </div>
                <div class="reminder-actions">
                  <div class="edit-reminder">
                    <img
                      class="mdipencil-icon12"
                      alt=""
                      src="/mdipencil1.svg"
                    />
                    <div class="delete-reminder">
                      <img
                        class="phtrash-fill-icon12"
                        alt=""
                        src="/phtrashfill1.svg"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="diet-info">
                <div class="max-requires-a">
                  Max requires a specific diet due to food allergies (no chicken
                  or grains). Ensure regular check-ups for his arthritis and
                  administer his medication twice daily. Watch for any signs of
                  discomfort or changes in behavior.
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="add-icon" loading="lazy" alt="" src="/add.svg" />
      </div>
    </div>
  </section>
</template>
<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "MainContent",
  methods: {
    onPBtnContainerClick() {
      this.$router.push("/11-p-pp");
    },
  },
});
</script>
<style scoped>
.bg3 {
  width: 1466px;
  height: 2031px;
  position: relative;
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.pet-c-p {
  height: 400px;
  flex: 1;
  position: relative;
  max-width: 100%;
  overflow: hidden;
  min-width: 236px;
  z-index: 1;
}
.basic-info {
  position: relative;
  font-size: var(--font-size-26xl);
  font-weight: 600;
  z-index: 1;
}
.n-i-child {
  position: absolute;
  top: 0px;
  left: 0px;
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  width: 100%;
  height: 100%;
  display: none;
}
.fa-solidpaw-icon {
  position: absolute;
  top: 25px;
  left: 25px;
  width: 50px;
  height: 50px;
  overflow: hidden;
}
.n-i {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  min-width: 100px;
  z-index: 2;
}
.name1 {
  position: relative;
  display: inline-block;
  min-width: 115px;
}
.blacky1 {
  position: relative;
  color: var(--color-darkgray-400);
  display: inline-block;
  min-width: 126px;
}
.name-label {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xs);
}
.name-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-12xs);
  box-sizing: border-box;
  min-width: 126px;
}
.paw-icon-container {
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-5xl);
}
.mdidog-icon {
  position: absolute;
  top: 20px;
  left: 20px;
  width: 60px;
  height: 60px;
  overflow: hidden;
}
.species {
  position: relative;
}
.dog1 {
  position: relative;
  color: var(--color-darkgray-400);
  display: inline-block;
  min-width: 78px;
}
.attribute-labels {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-6xs);
}
.attribute-labels-wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-11xs);
  box-sizing: border-box;
  min-width: 102px;
}
.n-i-parent {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-5xl);
}
.phgender-intersex-fill-icon {
  position: absolute;
  top: 18px;
  left: 18px;
  width: 65px;
  height: 65px;
  overflow: hidden;
}
.sex {
  align-self: stretch;
  position: relative;
}
.male1 {
  position: relative;
  color: var(--color-darkgray-400);
  display: inline-block;
  min-width: 92px;
}
.n-i-icon {
  width: 100px;
  height: 100px;
  position: relative;
  z-index: 1;
}
.n-i-wrapper {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-8xs) 0px 0px;
  box-sizing: border-box;
  min-width: 100px;
}
.weight {
  align-self: stretch;
  position: relative;
  z-index: 1;
}
.lbs {
  position: relative;
  color: var(--color-darkgray-400);
  display: inline-block;
  min-width: 114px;
  z-index: 1;
}
.weight-parent {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-11xs);
  min-width: 102px;
}
.frame-parent35 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-5xl);
}
.basic-info-parent {
  width: 281px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-31xl);
  min-width: 281px;
}
.pet-c-p-parent {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-22xl);
  min-width: 445px;
  max-width: 100%;
}
.mdiuser-icon {
  position: absolute;
  top: 15px;
  left: 15px;
  width: 70px;
  height: 70px;
  overflow: hidden;
}
.john-doe6 {
  position: relative;
  color: var(--color-darkgray-400);
}
.owner-label {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-11xs);
  box-sizing: border-box;
  min-width: 118px;
}
.owner-icon-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-xs);
}
.owner-details {
  width: 294px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-77xl) 0px 0px;
  box-sizing: border-box;
  min-width: 294px;
}
.edit24 {
  position: relative;
  font-weight: 600;
  display: inline-block;
  min-width: 66px;
  z-index: 1;
}
.edit-label {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-12xs) 0px 0px;
}
.weuiarrow-outlined-icon3 {
  height: 47px;
  width: 26px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.edit-button {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-lg);
  font-size: var(--font-size-16xl);
  color: var(--color-cornflowerblue-400);
}
.owner-info1 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  gap: var(--gap-xl);
}
.n-i-child2 {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  display: none;
}
.material-symbolsgenetics-roun-icon {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 1;
}
.n-i4 {
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xl);
  z-index: 1;
}
.breed {
  position: relative;
  display: inline-block;
  min-width: 116px;
  z-index: 1;
}
.german-shepherd1 {
  position: relative;
  color: var(--color-darkgray-400);
  z-index: 1;
}
.breed-label {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-11xs);
  box-sizing: border-box;
  max-width: 100%;
}
.breed-container {
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-5xl);
  max-width: 100%;
}
.bxssmile-icon {
  position: absolute;
  height: 59.8%;
  width: 60.8%;
  top: 22%;
  right: 7.5%;
  bottom: 18.2%;
  left: 31.7%;
  max-width: 100%;
  overflow: hidden;
  max-height: 100%;
}
.n-i5 {
  height: 100px;
  flex: 1;
  position: relative;
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  z-index: 2;
}
.age {
  position: relative;
  display: inline-block;
  min-width: 79px;
}
.owner-label-values {
  position: relative;
  color: var(--color-darkgray-400);
  display: inline-block;
  min-width: 43px;
}
.age-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-11xs);
}
.n-i-container {
  width: 203px;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-5xl);
}
.n-i6 {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  background-color: var(--color-gainsboro-300);
  min-width: 100px;
  z-index: 2;
}
.frame-wrapper14 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-11xs);
  box-sizing: border-box;
  min-width: 214px;
}
.owner-info-parent {
  width: 498px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-31xl);
  min-width: 498px;
  max-width: 100%;
}
.pet-details {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-106xl);
  max-width: 100%;
}
.profile-info {
  width: 1388px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-21xl) var(--padding-7xl);
  box-sizing: border-box;
  max-width: 100%;
}
.separator1 {
  align-self: stretch;
  height: 1px;
  position: relative;
  filter: drop-shadow(0px 0px 1px rgba(0, 0, 0, 0.1));
  border-top: 1px solid var(--stroke);
  box-sizing: border-box;
  z-index: 1;
}
.mr-bg {
  height: 161px;
  width: 1424px;
  position: relative;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.mr-i-icon {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  object-fit: cover;
  flex-shrink: 0;
  z-index: 1;
}
.medical-records {
  align-self: stretch;
  height: 48px;
  position: relative;
  display: inline-block;
  z-index: 1;
}
.record-names {
  height: 48px;
  width: 326px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xl) 0px 0px;
  box-sizing: border-box;
  max-width: 100%;
  flex-shrink: 0;
}
.record-icons {
  width: 461px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-28xl);
  max-width: 100%;
  flex-shrink: 0;
}
.weuiarrow-outlined-icon4 {
  width: 31.2px;
  height: 55.4px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  object-fit: contain;
  z-index: 1;
}
.weuiarrow-outlined-wrapper {
  height: 55.4px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-lg);
  box-sizing: border-box;
}
.mr-btn {
  width: 1424px;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: space-between;
  padding: var(--padding-12xl) var(--padding-2xl) var(--padding-11xl)
    var(--padding-21xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 1;
}
.record-buttons {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-12xs) 0px var(--padding-11xs);
  box-sizing: border-box;
  max-width: 100%;
}
.images-2-icon {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  object-fit: cover;
  z-index: 1;
}
.prescriptions-wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-7xl) 0px 0px;
  box-sizing: border-box;
  min-width: 170px;
}
.images-2-parent {
  width: 408px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-27xl);
  max-width: 100%;
}
.weuiarrow-outlined-icon5 {
  width: 31.2px;
  flex: 1;
  position: relative;
  max-height: 100%;
  overflow: hidden;
  object-fit: contain;
  z-index: 1;
}
.weuiarrow-outlined-container {
  height: 73.4px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 0px var(--padding-lg);
  box-sizing: border-box;
}
.p-btn {
  flex: 1;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: space-between;
  padding: var(--padding-12xl) var(--padding-2xl) var(--padding-11xl)
    var(--padding-21xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  cursor: pointer;
  z-index: 1;
}
.record-buttons1 {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-12xs) 0px var(--padding-11xs);
  box-sizing: border-box;
  max-width: 100%;
}
.image-11-icon {
  height: 100px;
  width: 100px;
  position: relative;
  border-radius: var(--br-xl);
  object-fit: cover;
  z-index: 1;
}
.lab-results-wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-6xl) 0px 0px;
  box-sizing: border-box;
  min-width: 148px;
}
.image-11-parent {
  width: 374px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-28xl);
  max-width: 100%;
}
.lr-btn {
  flex: 1;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: row;
  align-items: flex-end;
  justify-content: space-between;
  padding: var(--padding-12xl) var(--padding-2xl) var(--padding-11xl)
    var(--padding-21xl);
  box-sizing: border-box;
  max-width: 100%;
  gap: var(--gap-xl);
  z-index: 1;
}
.separator-parent {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  gap: var(--gap-23xl-7);
  max-width: 100%;
}
.content-b {
  width: 1424px;
  height: 526px;
  position: relative;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.rem-tag-child {
  height: 73px;
  width: 235px;
  position: relative;
  border-radius: var(--br-31xl);
  background-color: var(--color-deepskyblue);
  display: none;
}
.reminder1 {
  align-self: stretch;
  flex: 1;
  position: relative;
  font-weight: 600;
  z-index: 1;
}
.rem-tag {
  height: 73px;
  width: 235px;
  border-radius: var(--br-31xl);
  background-color: var(--color-deepskyblue);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-lgi) var(--padding-29xl) var(--padding-lg);
  box-sizing: border-box;
  z-index: 3;
}
.mdipencil-icon12 {
  height: 50px;
  width: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 3;
}
.phtrash-fill-icon12 {
  width: 50px;
  height: 50px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  z-index: 3;
}
.delete-reminder {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-11xs) 0px 0px;
}
.edit-reminder {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-3xl);
}
.reminder-actions {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-9xs) 0px 0px;
}
.reminder-content {
  width: 1332px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: space-between;
  gap: var(--gap-xl);
  max-width: 100%;
}
.max-requires-a {
  flex: 1;
  position: relative;
  line-height: 240px;
  display: inline-block;
  max-width: 100%;
  z-index: 3;
}
.diet-info {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-23xl) 0px var(--padding-27xl);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
}
.reminder-details {
  flex: 1;
  box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-3xs);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-26xl) var(--padding-19xl) var(--padding-80xl);
  box-sizing: border-box;
  gap: var(--gap-50xl);
  max-width: 100%;
  z-index: 2;
}
.reminder-details-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-11xs);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-11xl);
  color: var(--theme-white-default);
}
.pp-content2 {
  position: absolute;
  top: calc(50% - 379px);
  left: calc(50% - 732.5px);
  box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.1);
  border-radius: var(--br-xl);
  background-color: var(--theme-white-default);
  width: 1466px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-30xl) var(--padding-lgi) var(--padding-28xl);
  box-sizing: border-box;
  gap: var(--gap-30xl);
  max-width: 100%;
}
.add-icon {
  position: absolute;
  top: 570px;
  left: 1288px;
  width: 150px;
  height: 150px;
  z-index: 1;
}
.pp-f2 {
  height: 782px;
  flex: 1;
  position: relative;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
  overflow-y: auto;
  max-width: 100%;
}
.main-f-pp1 {
  flex: 1;
  overflow-y: auto;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.main-content {
  width: 1571px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-24xl);
  box-sizing: border-box;
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-21xl);
  color: var(--color-black);
  font-family: var(--font-inter);
}

@media screen and (max-width: 1225px) {
  .owner-info-parent {
    flex: 1;
  }

  .pet-details {
    flex-wrap: wrap;
  }

  .pp-f2 {
    height: auto;
    min-height: 782;
  }

  .main-content {
    padding-left: var(--padding-2xl);
    padding-right: var(--padding-2xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 850px) {
  .basic-info {
    font-size: var(--font-size-17xl);
  }

  .name1 {
    font-size: var(--font-size-13xl);
  }

  .blacky1 {
    font-size: var(--font-size-13xl);
  }

  .species {
    font-size: var(--font-size-13xl);
  }

  .dog1 {
    font-size: var(--font-size-13xl);
  }

  .sex {
    font-size: var(--font-size-13xl);
  }

  .male1 {
    font-size: var(--font-size-13xl);
  }

  .weight {
    font-size: var(--font-size-13xl);
  }

  .lbs {
    font-size: var(--font-size-13xl);
  }

  .basic-info-parent {
    flex: 1;
  }

  .pet-c-p-parent {
    flex-wrap: wrap;
    min-width: 100%;
  }

  .john-doe6 {
    font-size: var(--font-size-13xl);
  }

  .owner-details {
    flex: 1;
  }

  .edit24 {
    font-size: var(--font-size-9xl);
  }

  .owner-info1 {
    flex-wrap: wrap;
  }

  .breed {
    font-size: var(--font-size-13xl);
  }

  .german-shepherd1 {
    font-size: var(--font-size-13xl);
  }

  .breed-container {
    flex-wrap: wrap;
  }

  .age {
    font-size: var(--font-size-13xl);
  }

  .owner-label-values {
    font-size: var(--font-size-13xl);
  }

  .n-i6 {
    flex: 1;
  }

  .frame-wrapper14 {
    flex: 1;
  }

  .owner-info-parent {
    min-width: 100%;
  }

  .medical-records {
    font-size: var(--font-size-13xl);
  }

  .record-icons {
    flex-wrap: wrap;
  }

  .mr-btn {
    flex-wrap: wrap;
  }

  .images-2-icon {
    flex: 1;
  }

  .images-2-parent {
    flex-wrap: wrap;
  }

  .p-btn {
    flex-wrap: wrap;
  }

  .lr-btn {
    flex-wrap: wrap;
  }

  .reminder1 {
    font-size: var(--font-size-5xl);
  }

  .reminder-content {
    flex-wrap: wrap;
  }

  .max-requires-a {
    font-size: var(--font-size-13xl);
    line-height: 48px;
  }
}
@media screen and (max-width: 450px) {
  .basic-info {
    font-size: var(--font-size-8xl);
  }

  .n-i {
    flex: 1;
  }

  .name1 {
    font-size: var(--font-size-5xl);
  }

  .blacky1 {
    font-size: var(--font-size-5xl);
  }

  .name-container {
    flex: 1;
  }

  .paw-icon-container {
    flex-wrap: wrap;
  }

  .species {
    font-size: var(--font-size-5xl);
  }

  .dog1 {
    font-size: var(--font-size-5xl);
  }

  .n-i-parent {
    flex-wrap: wrap;
  }

  .sex {
    font-size: var(--font-size-5xl);
  }

  .male1 {
    font-size: var(--font-size-5xl);
  }

  .n-i-icon {
    align-self: stretch;
    width: auto;
  }

  .n-i-wrapper {
    flex: 1;
  }

  .weight {
    font-size: var(--font-size-5xl);
  }

  .lbs {
    font-size: var(--font-size-5xl);
  }

  .frame-parent35 {
    flex-wrap: wrap;
  }

  .john-doe6 {
    font-size: var(--font-size-5xl);
  }

  .owner-icon-container {
    flex-wrap: wrap;
  }

  .edit24 {
    font-size: var(--font-size-2xl);
  }

  .breed {
    font-size: var(--font-size-5xl);
  }

  .german-shepherd1 {
    font-size: var(--font-size-5xl);
  }

  .age {
    font-size: var(--font-size-5xl);
  }

  .owner-label-values {
    font-size: var(--font-size-5xl);
  }

  .medical-records {
    font-size: var(--font-size-5xl);
  }

  .image-11-icon {
    flex: 1;
  }

  .image-11-parent {
    flex-wrap: wrap;
  }

  .reminder1 {
    font-size: var(--font-size-lg);
  }

  .max-requires-a {
    font-size: var(--font-size-5xl);
    line-height: 36px;
  }
}
</style>
