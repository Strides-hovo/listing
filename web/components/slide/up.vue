<template>
  <Transition name="slide-up">
        <slot />
  </Transition>
</template>

<style scoped>

.slide-up-enter-active,
.slide-up-leave-active {
  transition: all 0.4s ease-out;
}
.slide-up-enter-from,
.slide-up-leave-to {
  transform: translateY(-100%);
  opacity: 0;
}

</style>