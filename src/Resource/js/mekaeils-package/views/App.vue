<template>
  <div id="material-kit">

      <div class="wrapper" style="margin:5em auto;">
        <div class="main main-raised">
          <div class="section">
            <laravel-user-management></laravel-user-management>
          </div>
        </div>
    </div>
  </div>
</template>


<script>
import LaravelUserManagement from "./components/LaravelUserManagement";
 
export default {
  components: {
    LaravelUserManagement
  }, 
};
</script>
