<script setup>
import {faClipboardCheck,faChevronDown} from '@fortawesome/free-solid-svg-icons'
import {ref} from 'vue'
import SlideUpDown from './SlideUpDownComponent.vue'
import {right_bar} from '../Store/lists'
import { Link } from '@inertiajs/inertia-vue3';

let isDropped = ref(false);

const active = (index) => {
    right_bar.active = (right_bar.active == index)? -1 : index;
    right_bar.dropped = (right_bar.dropped == index)? -1 : index;
};
</script>
<template>
    <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><Fa :icon="faClipboardCheck"/> <span>مدیریت کارها</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img :src="$page.props.auth.user.profile ? $page.props.auth.user.profile : route('home') + '/images/avatar.webp'" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span> خوش آمدید،</span>
                <h2> {{$page.props.auth.user.username}} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>عمومی</h3>
                    <ul class="nav side-menu">
                        <li v-for="(item, index) in right_bar.list" :class="(right_bar.active == index) ? 'active' : null" :key="index">
                            <a @click="active(index)">
                                <div class="flex gap-2">
                                    <Fa :icon="item.icon"/>
                                    <span>{{item.title}}</span>
                                </div>
                                <Fa :icon="faChevronDown"/>
                            </a>
                        <SlideUpDown>
                            <ul class="nav child_menu" v-show="right_bar.dropped == index">
                                <li v-for="anchor in item.list" :class="{ 'current-page': route().current() === anchor.route }">
                                    <Link :href="route(anchor.route)" >{{anchor.name}}</Link>
                                </li>
                            </ul>
                        </SlideUpDown>
                        </li>
                    </ul>
                </div>
                <div class="menu_section">
                    <h3>در آینده نزدیک</h3>
                    <!-- <ul class="nav side-menu">
                        <li v-for="(item, index) in right_bar.list" :class="(right_bar.active == index) ? 'active' : null" :key="index">
                            <a @click="active(index)">
                                <div class="flex gap-2">
                                    <Fa :icon="item.icon"/>
                                    <span>{{item.title}}</span>
                                </div>
                                <Fa :icon="faChevronDown"/>
                            </a>
                        <SlideUpDown>
                            <ul class="nav child_menu" v-show="right_bar.dropped == index">
                                <li v-for="anchor in item.list">
                                    <a :href="anchor.route">{{anchor.name}}</a>
                                </li>
                            </ul>
                        </SlideUpDown>
                        </li>
                    </ul> -->
                </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>
</template>
<style scoped>
</style>
