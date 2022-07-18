<script setup>
import {faBars , faCaretDown, faSignOut} from '@fortawesome/free-solid-svg-icons';
import {ref} from 'vue';
import { Link } from '@inertiajs/inertia-vue3';


let user_menu_show = ref(false);

defineEmits(['changeBar'])
</script>
<template>
    <div class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle" @click="$emit('changeBar')">
                    <Fa :icon="faBars" size="2.5x"/>
                </a>
            </div>
            <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a @click="user_menu_show = !user_menu_show" class="user-profile dropdown-toggle" >
                            <img :src="$page.props.auth.user.profile ? $page.props.auth.user.profile : 'images/avatar.webp'" alt=""> &nbsp; {{$page.props.auth.user.username}} &nbsp;<Fa  :icon="faCaretDown" />
                        </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" v-if="user_menu_show">
                            <Link class="dropdown-item mb-2" :href="route('logout')" method="post">
                                <Fa :icon="faSignOut"/>&nbsp; خروج
                            </Link>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>
<style scoped>
</style>
