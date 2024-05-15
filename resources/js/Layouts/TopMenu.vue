<template>
    <header class="z-10 py-4 bg-white shadow-md">
      <div class="container flex justify-between items-center px-6 mx-auto h-full text-purple-600 lg:justify-end">
        <!-- Mobile hamburger -->
        <button @click="$page.props.showingMobileMenu = !$page.props.showingMobileMenu" class="p-1 mr-5 -ml-1 rounded-md lg:hidden focus:outline-none focus:shadow-outline-purple" aria-label="Menu">
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>

        <Dropdown>
          <template #trigger>
            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" aria-label="Account" aria-haspopup="true">
              {{ $page.props.auth.user.name }} {{ $page.props.auth.user.lastname }}<i class="fa-solid fa-caret-down ms-2"></i>
            </button>
          </template>

          <template #content>
            <DropdownLink v-if="$page.props.auth.user.role_id != 3" :href="route('usuarios.index')">
              <template #icon>
                <i class="fa-solid fa-users me-2"></i>
                Usuarios
              </template>
            </DropdownLink>

            <DropdownLink :href="route('profile.edit')">
              <template #icon>
                <i class="fa-solid fa-gear me-2"></i>
                Perfil
              </template>
            </DropdownLink>

            <DropdownLink :href="route('logout')" method="post" as="button">
              <template #icon>
                <i class="fa-solid fa-right-from-bracket me-2"></i>
                Cerrar Sesión
              </template>
            </DropdownLink>
          </template>
        </Dropdown>

      </div>
    </header>
</template>

<script setup>
import Dropdown from '@/Components/Dropdown.vue'
import DropdownLink from '@/Components/DropdownLink.vue'
</script>
