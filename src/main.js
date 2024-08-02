import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";

import AP from "./pages/AP.vue";
import Prod from "./pages/Prod.vue";
import P from "./pages/P.vue";
import Order from "./pages/Order.vue";
import PetO from "./pages/PetO.vue";
import SignIn from "./pages/SignIn.vue";
import Main from "./pages/Main.vue";
import PP from "./pages/PP.vue";
import Notif from "./pages/Notif.vue";
import PPP from "./pages/PPP.vue";
import AUp from "./pages/AUp.vue";
import Login from "./pages/Login.vue";
import ProdInfo from "./pages/ProdInfo.vue";
import Mes from "./pages/Mes.vue";
import "./global.css";

const routes = [
  {
    path: "/",
    name: "AP",
    component: AP,
  },
  {
    path: "/12-prod",
    name: "Prod",
    component: Prod,
  },
  {
    path: "/9-p",
    name: "P",
    component: P,
  },
  {
    path: "/14-order",
    name: "Order",
    component: Order,
  },
  {
    path: "/8-peto",
    name: "PetO",
    component: PetO,
  },
  {
    path: "/2-sign-in",
    name: "SignIn",
    component: SignIn,
  },
  {
    path: "/3-main",
    name: "Main",
    component: Main,
  },
  {
    path: "/10-p-p",
    name: "PP",
    component: PP,
  },
  {
    path: "/4-notif",
    name: "Notif",
    component: Notif,
  },
  {
    path: "/11-p-pp",
    name: "PPP",
    component: PPP,
  },
  {
    path: "/5-a-up",
    name: "AUp",
    component: AUp,
  },
  {
    path: "/1-login",
    name: "Login",
    component: Login,
  },
  {
    path: "/13-prod-info",
    name: "ProdInfo",
    component: ProdInfo,
  },
  {
    path: "/7-mes",
    name: "Mes",
    component: Mes,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((toRoute, _, next) => {
  const metaTitle = toRoute?.meta?.title;
  const metaDesc = toRoute?.meta?.description;

  window.document.title = metaTitle || "PetFurMeTest2";
  if (metaDesc) {
    addMetaTag(metaDesc);
  }
  next();
});

const addMetaTag = (value) => {
  const element = document.querySelector(`meta[name='description']`);
  if (element) {
    element.setAttribute("content", value);
  }
};

const vuetify = createVuetify({ components, directives });

createApp(App).use(router).use(vuetify).mount("#app");

export default router;
