import Vue from "vue";
import Router from "vue-router";
import MaterialKit from "./views/Index.vue";
import Index from "./views/App.vue";
import Landing from "./views/Landing.vue";
import Login from "./views/Login.vue";
import Register from "./views/Register.vue";
import Profile from "./views/Profile.vue";
import MainNavbar from "./layout/MainNavbar.vue";
import MainFooter from "./layout/MainFooter.vue";

Vue.use(Router);

// 2. Define some routes
const routes = [
  {
    path: "/",
    name: "index",
    components: { default: Index, header: MainNavbar, footer: MainFooter },
    props: {
      header: { colorOnScroll: 400 },
      footer: { backgroundColor: "black" }
    }
  },
  {
    path: "/material-kit",
    name: "materialKit",
    components: { default: MaterialKit, header: MainNavbar, footer: MainFooter },
    props: {
      header: { colorOnScroll: 400 },
      footer: { backgroundColor: "black" }
    }
  },
  {
    path: "/landing",
    name: "landing",
    components: { default: Landing, header: MainNavbar, footer: MainFooter },
    props: {
      header: { colorOnScroll: 400 },
      footer: { backgroundColor: "black" }
    }
  },
  {
    path: "/users/login",
    name: "login",
    components: { default: Login, header: MainNavbar, footer: MainFooter },
    props: {
      header: { colorOnScroll: 400 }
    }
  },
  {
    path: "/users/register",
    name: "register",
    components: { default: Register, header: MainNavbar, footer: MainFooter },
  },
  {
    path: "/profile",
    name: "profile",
    components: { default: Profile, header: MainNavbar, footer: MainFooter },
    props: {
      header: { colorOnScroll: 400 },
      footer: { backgroundColor: "black" }
    }
  }
];

// 3. Create the router instance and pass the `routes` option
export default new Router({
  routes : routes,
  scrollBehavior: to => {
    if (to.hash) {
      return { selector: to.hash };
    } else {
      return { x: 0, y: 0 };
    }
  }
});

