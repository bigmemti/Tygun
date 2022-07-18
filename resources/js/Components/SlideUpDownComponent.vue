<script setup>
import {ref} from 'vue'

let enterInterval = ref(null);
let leaveInterval = ref(null);

const beforeEnter = (el) => {
      el.style.height = 0;
      el.style.overflow = "hidden";
    };

const enter = (el, done) => {
      const increaseHeight = () => {
        if (el.clientHeight < el.scrollHeight) {
          const height = `${parseInt(el.style.height) + 5}px`;
          el.style.height = height;
        } else {
          clearInterval(enterInterval);
          done();
        }
      };
      enterInterval = setInterval(increaseHeight, 10);
    };

const enterCancelled = (el) => {
      clearInterval(enterInterval);
    };

const leave = (el, done) => {
      const decreaseHeight = () => {
        if (el.clientHeight > 0) {
          const height = `${parseInt(el.style.height) - 5}px`;
          el.style.height = height;
        } else {
          clearInterval(leaveInterval);
          done();
        }
      };
      leaveInterval = setInterval(decreaseHeight, 10);
    }

const leaveCancelled = (el) => {
      clearInterval(leaveInterval);
    };

</script>
<template>
    <transition @before-enter="beforeEnter" @enter="enter" @enter-cancelled="enterCancelled"
        @leave="leave" @level-cancelled="leaveCancelled" :css="false">
            <slot></slot>
    </transition>
</template>
<style scoped>
</style>
