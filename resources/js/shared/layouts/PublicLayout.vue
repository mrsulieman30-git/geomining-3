<template>
  <div class="min-h-screen bg-bg text-text">
    <header class="p-4 border-b border-border bg-surface sticky top-0 z-50">
      <nav class="flex justify-between items-center max-w-7xl mx-auto">
        <div class="font-bold text-xl">{{ $page.props.appName }}</div>
        <div class="space-x-4">
          <Link href="/">Home</Link>
          <a href="/design">Design Gallery</a>
        </div>
      </nav>
    </header>
    <main class="max-w-7xl mx-auto p-4">
      <slot />
    </main>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
