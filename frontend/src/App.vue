<template>
  <div id="app">
    <nav>
    
    </nav>
    <router-view />

    <notification
      v-for="(notification,i) in getActiveNotifications"
      :key="i"
      :index="i"
      :data="notification"
    />
  </div>
</template>

<script>
import Notification from '@/components/Notification'

export default {
  components: {
    Notification
  },
  data() {
    return {
      globalNotification: false
    }
  },
  computed: {
    
  }
}
</script>



<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
