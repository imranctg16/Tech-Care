<template>
    <Layout/>
</template>
  
  <script>
//   import 'normalize.css'
  import Layout from '@/views/LayoutView'
  import Loading from '@/components/Loading'
  import Notification from '@/components/Notification'
  import { mapGetters } from 'vuex'
  
  export default {
    components: {
      Layout,
      Loading,
      Notification
    },
    data() {
      return {
        globalNotification: false
      }
    },
    computed: {
      ...mapGetters([
        'getLoginStatus', 
        'getLoadingStatus',
        'getActiveNotifications'
      ])
    }
  }
  </script>
  
  
  <style lang="scss">
  *{
    box-sizing: border-box;
    &::before, &::after{
      box-sizing: inherit;
    }
  }
  
  html, body, :root{
    font-size: 14px;
  }
  @import '@/assets/theme/colors.scss';
  
  body{
    background-color: $color-bg;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  }
  
  </style>
  