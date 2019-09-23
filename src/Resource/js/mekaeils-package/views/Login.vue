<template>
  <div class="wrapper">
    <div class="section page-header header-filter" :style="headerStyle">
      <div class="container">
        <div class="md-layout">
          <div class="md-layout-item md-size-33 md-small-size-66 md-xsmall-size-100 md-medium-size-40 mx-auto">
            <login-card header-color="primary">
              <h4 slot="title" class="card-title">Login</h4>
              <p slot="description" class="description">sign in your account...</p>
                <md-field class="md-form-group" slot="inputs">
                  <md-icon>email</md-icon>
                  <label>Email...</label>
                  <md-input v-model="email" type="email"></md-input>
                </md-field>
                <md-field class="md-form-group" slot="inputs">
                  <md-icon>lock_outline</md-icon>
                  <label>Password...</label>
                  <md-input v-model="password"></md-input>
                </md-field>
                <md-button slot="footer" class="md-simple md-success md-lg">
                  <router-link :to="{ name: 'login' }" class="md-button md-success md-lg md-theme-default">
                      <div class="md-ripple">
                          <div class="md-button-content">
                            Sign In
                          </div> 
                      </div>
                  </router-link>

                  <br>
                  <br>

                  <hr>  
                    <router-link :to="{ name: 'index' }" class="md-success md-lg md-theme-default">
                      Home
                    </router-link>
                    |
                    <router-link :to="{ name: 'login' }" class="md-success md-lg md-theme-default">
                      Login  
                    </router-link>
                    |
                    <router-link :to="{ name: 'register' }" class="md-rose md-lg md-theme-default">
                      Register  
                    </router-link>
                </md-button>


            </login-card>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { LoginCard } from "./components/Widgets";

export default {
  components: {
    LoginCard
  },
  bodyClass: "login-page",
  data() {
    return {
      firstname: null,
      email: null,
      password: null
    };
  },
  props: {
    header: {
      type: String,
      default: require("../assets/img/profile_city.jpg")
    }
  },
  computed: {
    headerStyle() {
      return {
        backgroundImage: `url(${this.header})`
      };
    }
  }
};
</script>

<style lang="css"></style>
