<script setup>
import {faBars , faCaretSquareDown} from '@fortawesome/free-solid-svg-icons';
import {ref} from 'vue'

let user_menu_show = ref(false);
</script>
<template>
<div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle">
                    <Fa :icon="faBars" size="2.5x"/>
                </a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a @click="user_menu_show = !user_menu_show" class="user-profile dropdown-toggle" >
                    <img src="images/img.jpg" alt=""> &nbsp; علی &nbsp;<Fa  :icon="faCaretSquareDown" />
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" v-if="user_menu_show">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
</template>
<style scoped>
</style>
