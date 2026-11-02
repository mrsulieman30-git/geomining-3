<template>
  <PublicLayout>
    <div class="space-y-8">
      <h1 class="text-4xl font-bold">Design Gallery</h1>

      <section>
        <h2 class="text-2xl font-semibold mb-4">Colors</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="p-4 bg-primary text-on-primary rounded-r-2">Primary</div>
          <div class="p-4 bg-surface border border-border text-text rounded-r-2">Surface</div>
          <div class="p-4 bg-surface-2 text-text rounded-r-2">Surface 2</div>
          <div class="p-4 bg-ink text-white rounded-r-2">Ink</div>
        </div>
      </section>

      <section>
        <h2 class="text-2xl font-semibold mb-4">Typography</h2>
        <div class="space-y-2">
          <h1 class="text-4xl font-bold">Heading 1</h1>
          <h2 class="text-3xl font-semibold">Heading 2</h2>
          <h3 class="text-2xl font-semibold">Heading 3</h3>
          <p class="text-base text-text">Body text - This is a sample paragraph to demonstrate the base typography settings for the application. It uses the Inter font family.</p>
          <p class="text-sm text-text-muted">Muted text - Useful for secondary information.</p>
        </div>
      </section>

      <section>
        <h2 class="text-2xl font-semibold mb-4">Components</h2>
        <div class="space-x-4">
          <UiButton variant="primary">Primary Button</UiButton>
          <UiButton variant="secondary">Secondary Button</UiButton>
          <UiButton variant="danger">Danger Button</UiButton>
        </div>
      </section>
    </div>
  </PublicLayout>
</template>

<script setup>
import PublicLayout from '@/shared/layouts/PublicLayout.vue'
import UiButton from '@/shared/components/UiButton.vue'
</script>
