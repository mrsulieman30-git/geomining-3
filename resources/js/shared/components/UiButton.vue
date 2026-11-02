<template>
  <button :class="['px-4 py-2 rounded-2 transition-colors duration-t-fast', variantClasses]">
    <slot />
  </button>
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: {
    type: String,
    default: 'primary'
  }
})

const variantClasses = computed(() => {
  switch (props.variant) {
    case 'secondary':
      return 'bg-surface border border-border text-text hover:bg-surface-2'
    case 'danger':
      return 'bg-danger text-white hover:bg-red-600'
    case 'primary':
    default:
      return 'bg-primary text-on-primary hover:bg-gold-600'
  }
})
</script>
