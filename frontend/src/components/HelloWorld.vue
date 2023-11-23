<template>
  <div class="login">
    <div class="login-icon">
      <base-icon icon="twitter" />
    </div>
    <div class="login-header">
      <h2>Log in to Twitter</h2>
    </div>
    <div class="login-form">
      <div class="login-form-item">
        <label for="username"></label>
        <input
          id="username"
          v-model="userInfo.email"
          type="text"
          placeholder="email"
          required
          autocomplete="off"
        />
      </div>
      <div class="login-form-item">
        <label for="password"></label>
        <input
          id="password"
          v-model="userInfo.password"
          placeholder="Password"
          type="password"
          required
          autocomplete="off"
        />
      </div>
      <div class="login-submit" @click="login">Log in</div>
      <div class="login-footer">
        <p>
          <span>Forgot password?</span>
          <span class="dot">&#183;</span>
          <span>Sign up for Twitter</span>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import BaseIcon from "@/components/BaseIcon";
export default {
  name: "LoginView",
  components: {
    BaseIcon,
  },
  data: function () {
    return {
      userInfo: {
        username: "",
        password: "",
      },
    
      textColor: '#1DA1F2'
    };
  },
  methods: {
    login(){

    }
  },
};
</script>

<style lang="scss">
@import "@/assets/theme/colors.scss";
@import "@/assets/variables.scss";

.login {
  width: 400px;
  margin: 0 auto;
  margin-top: 20px;
  &-icon {
    width: 3rem;
    svg {
      width: 100%;
      fill: $color-blue;
    }
  }
  &-header {
    h2 {
      font-size: 2rem;
      font-weight: black;
      color: #1DA1F2;
    }
  }
  &-form {
    margin-top: 2.5rem;
    & > * {
      margin-top: 2rem;
    }
    &-item {
      position: relative;
      & + .login-form-item {
        margin-top: 2.2rem;
      }
      input {
        display: block;
        width: 100%;
        font-size: 1.2rem;
        background-color: transparent;
        color: #000000;
        font-weight: bold;
        padding: 0.8rem 4px;
        border: 1px solid rgba($color: $color-dark-gray, $alpha: 0.3);
        &:focus {
          outline: none;
        }
        &:focus,
        &:valid {
          & ~ label {
            transform: translate(0, -3rem) scale(0.85);
            left: 0px;
          }
        }
      }
      label {
        position: absolute;
        left: 5px;
        top: 50%;
        color: #1DA1F2;
        transform: translate(0, -50%);
        transition: 200ms ease;
        user-select: none;
        pointer-events: none;
        -webkit-user-select: none;
      }
    }
  }
  &-submit {
    background-color: $color-blue;
    font-weight: bold;
    text-align: center;
    border-radius: 999px;
    padding: 1rem;
    color: #fff;
    cursor: pointer;
  }
  &-footer {
    text-align: center;
    color: $color-blue;
    span {
      &.dot {
        margin: 0 8px;
      }
    }
  }
}
@media screen and (max-width: $phone) {
  .login {
    width: 80%;
  }
}
</style>
