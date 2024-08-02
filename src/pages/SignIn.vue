<template>
  <div class="sign-in">
    <main class="login">
      <section class="login-page">
        <div class="login-page-child" />
        <FrameComponent2 petIcon="/pet-icon@2x.png" />
        <div class="rectangle-container">
          <div class="rectangle-div" />
          <div class="frame-parent1">
            <div class="pngtreeabstract-dot-white-pol-parent">
              <img
                class="pngtreeabstract-dot-white-pol"
                alt=""
                src="/pngtreeabstract-dot-white-polka-dot-8796915-1@2x.png"
              />
              <div class="rectangle-parent1">
                <div class="frame-child1" />
                <div class="frame-wrapper">
                  <div class="sign-up-parent">
                    <a class="sign-up" @click="onSignUpTextClick">Sign Up</a>
                    <div class="sign-in-parent">
                      <a class="sign-in1">Sign In</a>
                      <div class="vector-wrapper">
                        <img
                          class="line-icon"
                          loading="lazy"
                          alt=""
                          src="/line-9.svg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <form class="frame-form">
                  <div class="frame-child2" />
                  <div class="input-row">
                    <v-text-field
                      class="input-field-labels"
                      color="primary"
                      variant="underlined"
                      placeholder="Email"
                    />
                    <v-text-field
                      class="input-field-labels"
                      color="primary"
                      variant="underlined"
                      placeholder="Password"
                    />
                  </div>
                  <div class="sign-up-button-row-wrapper">
                    <div class="sign-up-button-row">
                      <button class="sign-up-btn" @click="onSignUpBtnClick">
                        <div class="sign-up-btn-child" />
                        <div class="log-in">Log In</div>
                      </button>
                      <div class="account-prompt">
                        <div class="dont-have-an-container">
                          <span class="dont-have-an"
                            >Don’t have an account?
                          </span>
                          <span class="terms-condition">Sign up</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="by-signing-up-you-confirm-tha-wrapper">
              <div class="by-signing-up-container">
                <span
                  >By signing up, you confirm that you have read and accepted
                  our
                </span>
                <span class="terms-condition">Terms & condition</span>
                <span> and </span>
                <span class="privacy-policy">Privacy Policy</span>
              </div>
            </div>
          </div>
          <div class="frame-wrapper1">
            <div class="or-login-with-parent">
              <div class="or-login-with">Or Login with</div>
              <div class="social-login-button-row-wrapper">
                <div class="social-login-button-row">
                  <div class="social-login-button-pair">
                    <img
                      class="logosfacebook-icon"
                      loading="lazy"
                      alt=""
                      src="/logosfacebook.svg"
                    />
                    <div class="facebook">Facebook</div>
                  </div>
                  <div class="social-login-button-pair1">
                    <img
                      class="logosfacebook-icon"
                      loading="lazy"
                      alt=""
                      src="/devicongoogle.svg"
                    />
                    <div class="google">Google</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import FrameComponent2 from "../components/FrameComponent2.vue";

export default defineComponent({
  name: "SignIn",
  components: { FrameComponent2 },
  methods: {
    onSignUpTextClick() {
      this.$router.push("/1-login");
    },
    onSignUpBtnClick() {
      this.$router.push("/3-main");
    },
  },
});
</script>
<style scoped>
.login-page-child {
  align-self: stretch;
  width: 1920px;
  position: relative;
  background-color: var(--color-cornflowerblue-600);
  display: none;
  max-width: 100%;
}
.rectangle-div {
  width: 1202.9px;
  height: 1080px;
  position: relative;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.pngtreeabstract-dot-white-pol {
  height: 645px;
  width: 1203px;
  position: absolute;
  margin: 0 !important;
  top: -90px;
  left: calc(50% - 601.5px);
  object-fit: contain;
  z-index: 2;
}
.frame-child1 {
  align-self: stretch;
  height: 709px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--color-gainsboro-100);
  display: none;
  z-index: 1;
}
.sign-up {
  text-decoration: none;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  color: inherit;
  display: inline-block;
  min-width: 116px;
  white-space: nowrap;
  cursor: pointer;
  z-index: 4;
}
.sign-in1 {
  text-decoration: none;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  color: inherit;
  display: inline-block;
  min-width: 103px;
  z-index: 4;
}
.line-icon {
  height: 3px;
  width: 80.6px;
  position: relative;
  z-index: 4;
}
.vector-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-smi) 0px var(--padding-4xs);
}
.sign-in-parent {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 30.4px;
  color: var(--color-black);
}
.sign-up-parent {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-24xl);
}
.frame-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-51xl);
  box-sizing: border-box;
  max-width: 100%;
}
.frame-child2 {
  width: 607px;
  height: 600px;
  position: relative;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.input-field-labels {
  border: none;
  background-color: transparent;
  align-self: stretch;
  font-family: var(--font-inter);
  font-weight: 500;
  font-size: var(--font-size-xl);
  color: var(--color-dodgerblue);
}
.input-row {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-22xl);
}
.sign-up-btn-child {
  height: 75.7px;
  width: 353.4px;
  position: relative;
  border-radius: var(--br-5xs);
  background-color: var(--color-cornflowerblue-400);
  display: none;
  max-width: 100%;
}
.log-in {
  position: relative;
  font-size: var(--font-size-xl);
  letter-spacing: 0.08em;
  line-height: 40px;
  font-family: var(--font-inter);
  color: var(--theme-white-default);
  text-align: left;
  display: inline-block;
  min-width: 68px;
  z-index: 1;
}
.sign-up-btn {
  cursor: pointer;
  border: none;
  padding: var(--padding-lg) 135px 17.7px;
  background-color: var(--color-cornflowerblue-400);
  align-self: stretch;
  border-radius: var(--br-5xs);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  box-sizing: border-box;
  flex-shrink: 0;
  white-space: nowrap;
  max-width: 100%;
  z-index: 5;
}
.dont-have-an {
  color: var(--color-black);
}
.dont-have-an-container {
  position: relative;
  font-size: var(--font-size-base);
  letter-spacing: 0.08em;
  line-height: 40px;
  font-family: var(--font-inter);
  text-align: left;
  flex-shrink: 0;
  z-index: 5;
}
.account-prompt {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-22xl) 0px var(--padding-15xl);
}
.sign-up-button-row {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: 44.8px;
  max-width: 100%;
}
.sign-up-button-row-wrapper {
  width: 488px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px 67px;
  box-sizing: border-box;
  max-width: 100%;
}
.frame-form {
  margin: 0;
  align-self: stretch;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 126px var(--padding-35xl) 55.5px var(--padding-34xl);
  box-sizing: border-box;
  gap: 96.4px;
  max-width: 100%;
  z-index: 4;
  margin-top: -1.4px;
}
.rectangle-parent1 {
  flex: 1;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--color-gainsboro-100);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-18xl) 0px 0px;
  box-sizing: border-box;
  max-width: 100%;
  z-index: 3;
}
.pngtreeabstract-dot-white-pol-parent {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  max-width: 100%;
}
.terms-condition {
  color: var(--color-cornflowerblue-400);
}
.privacy-policy {
  color: var(--color-dodgerblue);
}
.by-signing-up-container {
  flex: 1;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  display: inline-block;
  max-width: 100%;
  z-index: 6;
}
.by-signing-up-you-confirm-tha-wrapper {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-lg) 0px var(--padding-lgi);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-xl);
  color: var(--color-black);
}
.frame-parent1 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-19xl);
  max-width: 100%;
}
.or-login-with {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  z-index: 6;
}
.logosfacebook-icon {
  height: 40px;
  width: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 40px;
  z-index: 6;
}
.facebook {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 600;
  display: inline-block;
  min-width: 108px;
  z-index: 6;
}
.social-login-button-pair {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-mid);
}
.google {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 600;
  display: inline-block;
  min-width: 79px;
  z-index: 6;
}
.social-login-button-pair1 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-3xl);
}
.social-login-button-row {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-13xl);
}
.social-login-button-row-wrapper {
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-12xs) 0px 0px;
  box-sizing: border-box;
  min-width: 220px;
  max-width: 100%;
  color: var(--color-cornflowerblue-400);
}
.or-login-with-parent {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-31xl);
  max-width: 100%;
}
.frame-wrapper1 {
  width: 591px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-9xl);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-xl);
  color: var(--color-black);
}
.rectangle-container {
  flex: 1;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-71xl) var(--padding-278xl) var(--padding-59xl)
    var(--padding-279xl);
  box-sizing: border-box;
  gap: var(--gap-25xl);
  min-width: 782px;
  max-width: 100%;
  z-index: 1;
}
.login-page {
  flex: 1;
  background-color: var(--color-cornflowerblue-600);
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 0px var(--padding-118xl);
  box-sizing: border-box;
  gap: var(--gap-117xl);
  max-width: 100%;
  text-align: left;
  font-size: var(--font-size-8xl);
  color: var(--color-gray-100);
  font-family: var(--font-inter);
}
.login {
  flex: 1;
  background-color: var(--theme-white-default);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.sign-in {
  width: 100%;
  position: relative;
  background-color: var(--color-cornflowerblue-400);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  line-height: normal;
  letter-spacing: normal;
}

@media screen and (max-width: 1525px) {
  .login-page {
    flex-wrap: wrap;
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    padding-bottom: var(--padding-xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 1225px) {
  .rectangle-container {
    padding: var(--padding-39xl) var(--padding-129xl) var(--padding-32xl)
      var(--padding-130xl);
    box-sizing: border-box;
    min-width: 100%;
  }

  .login-page {
    gap: var(--gap-49xl);
  }
}
@media screen and (max-width: 850px) {
  .input-row {
    gap: var(--gap-xl);
  }

  .sign-up-button-row-wrapper {
    padding-left: var(--padding-14xl);
    padding-right: var(--padding-14xl);
    box-sizing: border-box;
  }

  .frame-form {
    gap: var(--gap-29xl);
    padding-left: var(--padding-7xl);
    padding-right: var(--padding-8xl);
    padding-bottom: var(--padding-17xl);
    box-sizing: border-box;
  }

  .frame-parent1 {
    gap: var(--gap-lgi);
  }

  .social-login-button-row {
    flex-wrap: wrap;
  }

  .or-login-with-parent {
    flex-wrap: wrap;
    gap: var(--gap-6xl);
  }

  .rectangle-container {
    gap: var(--gap-3xl);
    padding-left: var(--padding-55xl);
    padding-right: var(--padding-55xl);
    box-sizing: border-box;
  }

  .login-page {
    gap: var(--gap-15xl);
  }
}
@media screen and (max-width: 450px) {
  .sign-up {
    font-size: var(--font-size-3xl);
    line-height: 32px;
  }

  .sign-in1 {
    font-size: var(--font-size-3xl);
    line-height: 32px;
  }

  .sign-up-parent {
    flex-wrap: wrap;
    gap: var(--gap-2xl);
  }

  .frame-wrapper {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .sign-up-btn {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .sign-up-button-row {
    gap: var(--gap-3xl);
  }

  .frame-form {
    gap: var(--gap-5xl);
  }

  .by-signing-up-container {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .or-login-with {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .facebook {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .google {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .social-login-button-row {
    gap: var(--gap-base);
  }

  .rectangle-container {
    padding: var(--padding-19xl) var(--padding-xl) var(--padding-14xl);
    box-sizing: border-box;
  }
}
</style>
