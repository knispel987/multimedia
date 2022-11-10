<script setup>
import Link from "../Components/LinkHalaman.vue";
</script>
<template>
  <div class="bg-white">
    <!-- sidebar -->
    <nav class="w-60 h-full fixed">
      <div class="h-full">
        <ul
          class="
            text-4xl
            focus:[&>*]:outline focus:[&>*]:outline-2
            hover:[&>*]:bg-gray-200
            [&>*]:p-2 [&>*]:w-full [&>*]:flex
            h-full
            text-white
            bg-sky-400
            overflow-auto
          "
        >
          <Link
            :href="route('halaman_depan')"
            :active="route().current('halaman_depan')"
          >
            Home
          </Link>

          <Link :href="route('materi')" :active="route().current('materi')">
            Materi
          </Link>

          <Link :href="route('credits')" :active="route().current('credits')">
            Credits
          </Link>
        </ul>
      </div>
    </nav>
    <!-- end sidebar -->

    <div class="ml-60 text-xl">
      <div class="bg-white [&>*]:px-3 pb-2">
        <!-- kepala -->
        <div class="p-2 place-items-center sticky top-0 bg-white">
          <div class="w-full">
            <div class="flex">
              <p>Logo</p>
            </div>
          </div>
        </div>
        <!-- end kepala -->

        <!-- konten -->
        <div class="bg-white">
          <slot />
        </div>
        <!-- end konten -->

        <!-- Sikil -->
        <footer class="mt-9 border-t-2 border-t-black">
          <p>Sikil</p>
        </footer>
        <!-- end Sikil -->
      </div>
    </div>
  </div>
</template>