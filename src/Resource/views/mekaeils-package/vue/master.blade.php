<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel User Management | Vue.js</title>
     
</head>

<body>
  <div id="app">
      <div id="material-kit">
        <div :class="{ 'nav-open': NavbarStore.showNavbar }">
          <router-view name="header" />
          <div>
            <router-view />
          </div>
          <router-view name="footer" />
        </div>
      </div>
  </div>
  <script src="/mekaeils-package/main.js"></script>
</body>

</html>
