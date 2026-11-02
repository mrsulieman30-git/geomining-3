<template>
  <PublicLayout>
    <h1 class="text-4xl font-bold">Welcome to {{ $page.props.appName }}</h1>
  </PublicLayout>
</template>

<script setup>
import PublicLayout from '@/shared/layouts/PublicLayout.vue'
</script>
