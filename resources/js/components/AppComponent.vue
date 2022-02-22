<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <router-link :to="{ name: 'home' }" class="navbar-brand"
      >SPA</router-link>
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link
                class="nav-link"
                data-toggle="collapse"
                :to="{ name: 'home' }"
            >
              Home
            </router-link>
          </li>
        </ul>
    </nav>

    <div class="container mt-4">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
};
</script>
