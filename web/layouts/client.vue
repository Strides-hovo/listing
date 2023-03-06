<template>
    <div class="container mx-auto tablet:py-0 ">
      <header class="content-padding py-2.5 bg-color text-color">
        <ClientTheHeader />
        <ClientTheMenu  />
      </header>

        <div class="content content-padding py-2.5">
          <slot  />
        </div>

    </div>
</template>
