<template>
  <div class="login1">
    <main class="login2">
      <section class="login-page1">
        <div class="login-page-item" />
        <div class="pngtreeabstract-dot-white-pol1" />
        <FrameComponent2 petIcon="/pet-icon@2x.png" />
        <div class="login-page-inner" />
        <div class="rectangle-parent2">
          <div class="frame-child6" />
          <div class="signup-container">
            <div class="signup-form-container">
              <img
                class="pngtreeabstract-dot-white-pol2"
                loading="lazy"
                alt=""
                src="/pngtreeabstract-dot-white-polka-dot-8796915-1@2x.png"
              />
              <div class="signup-form">
                <div class="signup-form-child" />
                <div class="credentials-header-wrapper">
                  <div class="credentials-header">
                    <a class="sign-up2">Sign Up</a>
                    <a class="sign-in2" @click="onSignInTextClick">Sign In</a>
                  </div>
                </div>
                <div class="input-fields">
                  <div class="input-fields-child" />
                  <div class="name-email-input">
                    <div class="name-label-email-label">
                      <div class="full-name">Full Name</div>
                    </div>
                    <div class="name-email-input-child" />
                  </div>
                  <v-text-field
                    class="name-email-input1"
                    color="primary"
                    variant="underlined"
                    placeholder="Email"
                  />
                  <div class="name-email-input2">
                    <div class="create-password-wrapper">
                      <div class="create-password">Create Password</div>
                    </div>
                    <div class="leonardo-dental-center" />
                  </div>
                  <div class="signup-button-container">
                    <v-btn
                      class="sign-up-btn1"
                      color="primary"
                      variant="flat"
                      width="353.4"
                      >Sign up</v-btn
                    >
                  </div>
                  <div class="login-link-container">
                    <div class="already-have-an-container">
                      <span>Already have an account? </span>
                      <span class="login3">Login</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="by-signing-up-you-confirm-tha-container">
              <div class="by-signing-up-container1">
                <span
                  >By signing up, you confirm that you have read and accepted
                  our
                </span>
                <span class="login3">Terms & condition</span>
                <span> and </span>
                <span class="privacy-policy1">Privacy Policy</span>
              </div>
            </div>
          </div>
          <div class="social-login-container-wrapper">
            <div class="social-login-container">
              <div class="or-login-with1">Or Login with</div>
              <div class="social-buttons-container">
                <div class="social-buttons">
                  <div class="social-button-icons">
                    <img
                      class="logosfacebook-icon1"
                      loading="lazy"
                      alt=""
                      src="/logosfacebook.svg"
                    />
                    <div class="facebook1">Facebook</div>
                  </div>
                  <div class="social-button-icons1">
                    <img
                      class="logosfacebook-icon1"
                      loading="lazy"
                      alt=""
                      src="/devicongoogle.svg"
                    />
                    <div class="google1">Google</div>
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
  name: "Login",
  components: { FrameComponent2 },
  methods: {
    onSignInTextClick() {
      this.$router.push("/2-sign-in");
    },
  },
});
</script>
<style scoped>
.login-page-item {
  align-self: stretch;
  width: 1920px;
  position: relative;
  background-color: var(--color-cornflowerblue-600);
  display: none;
  max-width: 100%;
}
.pngtreeabstract-dot-white-pol1 {
  height: 448px;
  width: 875px;
  position: relative;
  display: none;
  max-width: 100%;
  z-index: 3;
}
.login-page-inner {
  height: 3px;
  width: 83.6px;
  position: relative;
  border-top: 3px solid var(--color-cornflowerblue-400);
  box-sizing: border-box;
  display: none;
}
.frame-child6 {
  width: 1202.9px;
  height: 1080px;
  position: relative;
  border-radius: var(--br-31xl) 0px 0px var(--br-31xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.pngtreeabstract-dot-white-pol2 {
  height: 645px;
  width: 1203px;
  position: absolute;
  margin: 0 !important;
  top: -90px;
  left: calc(50% - 601.5px);
  object-fit: contain;
  z-index: 2;
}
.signup-form-child {
  align-self: stretch;
  height: 709px;
  position: relative;
  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--color-gainsboro-100);
  display: none;
}
.sign-up2 {
  text-decoration: none;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  color: inherit;
  display: inline-block;
  min-width: 116px;
  white-space: nowrap;
  z-index: 5;
}
.sign-in2 {
  text-decoration: none;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  color: var(--color-gray-100);
  display: inline-block;
  min-width: 103px;
  white-space: nowrap;
  cursor: pointer;
  z-index: 5;
}
.credentials-header {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-24xl);
}
.credentials-header-wrapper {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-51xl);
  box-sizing: border-box;
  max-width: 100%;
}
.input-fields-child {
  width: 607px;
  height: 600px;
  position: relative;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--theme-white-default);
  display: none;
  max-width: 100%;
}
.full-name {
  flex: 1;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 500;
  z-index: 6;
}
.name-label-email-label {
  width: 147.2px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-xs);
  box-sizing: border-box;
}
.name-email-input-child {
  align-self: stretch;
  height: 1px;
  position: relative;
  border-top: 1px solid var(--color-darkgray-300);
  box-sizing: border-box;
  z-index: 6;
}
.name-email-input {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px var(--padding-8xs);
  gap: var(--gap-lgi-3);
}
.name-email-input1 {
  border: none;
  background-color: transparent;
  align-self: stretch;
  font-family: var(--font-inter);
  font-weight: 500;
  font-size: var(--font-size-xl);
  color: var(--color-dodgerblue);
}
.create-password {
  flex: 1;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 500;
}
.create-password-wrapper {
  width: 238.1px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-xs);
  box-sizing: border-box;
}
.leonardo-dental-center {
  align-self: stretch;
  height: 1px;
  position: relative;
  border-top: 1px solid var(--color-darkgray-300);
  box-sizing: border-box;
}
.name-email-input2 {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px 0px 35.3px;
  gap: var(--gap-lgi-3);
}
.sign-up-btn1 {
  width: 353.4px;
  white-space: nowrap;
  max-width: 100%;
  z-index: 6;
}
.signup-button-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-end;
  padding: 0px var(--padding-50xl) 9.2px;
  box-sizing: border-box;
  max-width: 100%;
}
.login3 {
  color: var(--color-cornflowerblue-400);
}
.already-have-an-container {
  height: 50.5px;
  width: 320px;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  display: inline-block;
  flex-shrink: 0;
  z-index: 6;
}
.login-link-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: center;
  padding: 0px 0px 0px var(--padding-7xl);
  font-size: var(--font-size-base);
  color: var(--color-black);
}
.input-fields {
  align-self: stretch;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
  border-radius: var(--br-11xl);
  background-color: var(--theme-white-default);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  padding: var(--padding-37xl) var(--padding-34xl) var(--padding-26xl);
  box-sizing: border-box;
  gap: var(--gap-16xl-6);
  max-width: 100%;
  z-index: 5;
  font-size: var(--font-size-xl);
  color: var(--color-dodgerblue);
}
.signup-form {
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
  gap: var(--gap-13xl);
  max-width: 100%;
  z-index: 4;
}
.signup-form-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  position: relative;
  max-width: 100%;
}
.privacy-policy1 {
  color: var(--color-dodgerblue);
}
.by-signing-up-container1 {
  flex: 1;
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  display: inline-block;
  max-width: 100%;
  z-index: 7;
}
.by-signing-up-you-confirm-tha-container {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-lg) 0px var(--padding-lgi);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-xl);
}
.signup-container {
  align-self: stretch;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-19xl);
  max-width: 100%;
}
.or-login-with1 {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  z-index: 7;
}
.logosfacebook-icon1 {
  height: 40px;
  width: 40px;
  position: relative;
  overflow: hidden;
  flex-shrink: 0;
  min-height: 40px;
  z-index: 7;
}
.facebook1 {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 600;
  display: inline-block;
  min-width: 108px;
  z-index: 7;
}
.social-button-icons {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-mid);
}
.google1 {
  position: relative;
  letter-spacing: 0.08em;
  line-height: 40px;
  font-weight: 600;
  display: inline-block;
  min-width: 79px;
  z-index: 7;
}
.social-button-icons1 {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-3xl);
}
.social-buttons {
  align-self: stretch;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-13xl);
}
.social-buttons-container {
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
.social-login-container {
  flex: 1;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  gap: var(--gap-31xl);
  max-width: 100%;
}
.social-login-container-wrapper {
  width: 591px;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  padding: 0px var(--padding-9xl);
  box-sizing: border-box;
  max-width: 100%;
  font-size: var(--font-size-xl);
}
.rectangle-parent2 {
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
.login-page1 {
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
  color: var(--color-black);
  font-family: var(--font-inter);
}
.login2 {
  flex: 1;
  background-color: var(--theme-white-default);
  overflow: hidden;
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  justify-content: flex-start;
  max-width: 100%;
}
.login1 {
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
  .login-page1 {
    flex-wrap: wrap;
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    padding-bottom: var(--padding-xl);
    box-sizing: border-box;
  }
}
@media screen and (max-width: 1225px) {
  .rectangle-parent2 {
    padding: var(--padding-39xl) var(--padding-129xl) var(--padding-32xl)
      var(--padding-130xl);
    box-sizing: border-box;
    min-width: 100%;
  }

  .login-page1 {
    gap: var(--gap-49xl);
  }
}
@media screen and (max-width: 850px) {
  .signup-button-container {
    padding-left: var(--padding-15xl);
    padding-right: var(--padding-15xl);
    box-sizing: border-box;
  }

  .input-fields {
    gap: var(--gap-lg);
    padding: var(--padding-17xl) var(--padding-7xl) var(--padding-10xl);
    box-sizing: border-box;
  }

  .signup-form {
    gap: var(--gap-base);
  }

  .signup-container {
    gap: var(--gap-lgi);
  }

  .social-buttons {
    flex-wrap: wrap;
  }

  .social-login-container {
    flex-wrap: wrap;
    gap: var(--gap-6xl);
  }

  .rectangle-parent2 {
    gap: var(--gap-3xl);
    padding-left: var(--padding-55xl);
    padding-right: var(--padding-55xl);
    box-sizing: border-box;
  }

  .login-page1 {
    gap: var(--gap-15xl);
  }
}
@media screen and (max-width: 450px) {
  .credentials-header {
    gap: var(--gap-2xl);
  }

  .credentials-header-wrapper {
    padding-left: var(--padding-xl);
    padding-right: var(--padding-xl);
    box-sizing: border-box;
  }

  .full-name {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .create-password {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .by-signing-up-container1 {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .or-login-with1 {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .facebook1 {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .google1 {
    font-size: var(--font-size-base);
    line-height: 32px;
  }

  .social-buttons {
    gap: var(--gap-base);
  }

  .rectangle-parent2 {
    padding: var(--padding-19xl) var(--padding-xl) var(--padding-14xl);
    box-sizing: border-box;
  }
}
</style>
