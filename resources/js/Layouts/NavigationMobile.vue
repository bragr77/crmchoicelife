<template>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0">
    <div v-show="$page.props.showingMobileMenu" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
  </transition>
  <transition
      enter-active-class="transition ease-in-out duration-150"
      enter-from-class="opacity-0 transform -translate-x-20"
      enter-to-class="opacity-100"
      leave-active-class="transition ease-in-out duration-150"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0 transform -translate-x-20">
    <aside v-show="$page.props.showingMobileMenu" class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white lg:hidden">
      <div class="py-4 text-gray-500 dark:text-gray-400">
        <Link class="row subrayado ml-6 text-lg font-bold text-gray-800" :href="route('dashboard.index')">
         <div class="row">
            <img class="logo-dashboard ms-4" src="/images/logo.png" alt="">
            Choicelife
          </div>
        </Link>
        <ul class="mt-6">
          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('dashboard.index')" :active="route().current('dashboard.index')">
              <template #icon>
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
              </template>
              Dashboard
            </ResponsiveNavLink>
          </li>

          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('clientes.index')" :active="route().current('clientes.index')">
              <template #icon>
                <i class="fa-solid fa-address-card"></i>
              </template>
              Clientes Activos
            </ResponsiveNavLink>
          </li>

          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('clientinactivo.index')" :active="route().current('clientinactivo.index')">
              <template #icon>
                <i class="fa-solid fa-address-card"></i>
              </template>
              Clientes Inactivos
            </ResponsiveNavLink>
          </li>

          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('conyugues.index')" :active="route().current('conyugues.index')">
              <template #icon>
                <i class="fa-solid fa-restroom"></i>
              </template>
              Buscar Conyugues
            </ResponsiveNavLink>
          </li>

          <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('dependientes.index')" :active="route().current('dependientes.index')">
              <template #icon>
                <i class="fa-solid fa-children"></i>
              </template>
              Buscar Dependientes
            </ResponsiveNavLink>
          </li>

          <!-- <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('agentes.index')" :active="route().current('agentes.index')">
              <template #icon>
                <i class="fa-solid fa-user-tie"></i>
              </template>
              Agentes
            </ResponsiveNavLink>
          </li> -->

          <!-- <li class="relative px-6 py-3">
            <ResponsiveNavLink :href="route('about')" :active="route().current('about')">
              <template #icon>
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                      d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                </svg>
              </template>
              About us
            </ResponsiveNavLink>
          </li> -->

          <li v-if="$page.props.auth.user.role_id != 3" class="relative px-6 py-3">
          <button @click="showingTwoLevelMenu = !showingTwoLevelMenu"
              class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
              aria-haspopup="true">
                <span class="inline-flex items-center">
                    <!-- <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                         stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg> -->
                    <i class="fa-solid fa-print"></i>
                    <span class="ml-4">Reportes</span>
                </span>
            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
          </button>
            <ul v-show="showingTwoLevelMenu" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                aria-label="submenu">
              <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                <i class="fa-solid fa-file-excel me-2"></i>
                <a class="subrayado w-full" :href="route('excel.report')">Clientes Excel</a>
              </li>
            </ul>
        </li>
        </ul>
      </div>
    </aside>
  </transition>
</template>

<script setup>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue'

let showingTwoLevelMenu = ref(false)
</script>
