<template>
  <div
    class="fixed z-30 top-0 w-full sticky-navbar bg-white border-b border-slate-300 shadow-sm shadow-slate-200"
  >
    <header aria-label="Site Header" class="border-b-0">
      <div
        class="mx-auto flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8"
      >
        <div class="flex items-center">
          <button type="button" class="p-2 sm:mr-4 lg:hidden">
            <svg
              class="h-6 w-6"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              />
            </svg>
          </button>

          <a href="#" class="flex">
            <span class="sr-only text-4xl">Logo</span>
            <span class="inline-block h-10 w-32 rounded-lg bg-gray-200"></span>
          </a>
        </div>

        <div class="flex flex-1 items-center justify-end">
          <nav
            aria-label="Site Nav"
            class="hidden lg:flex lg:gap-4 lg:text-base lg:font-bold lg:uppercase lg:tracking-wide"
          >
            <router-link
              to="/"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Home
            </router-link>
            <router-link
              to="/about"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              About
            </router-link>

            <router-link
              to="/activities"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Activities
            </router-link>

            <router-link
              to="/services"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Services
            </router-link>
            <router-link
              to="/pricing"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Pricing
            </router-link>
            <router-link
              to="/faq"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              FAQs
            </router-link>

            <router-link
              to="/contact"
              @click="scrollToTop"
              class="block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Contact
            </router-link>
          </nav>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  methods: {
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
  },
};
</script>

<style scoped>
.router-link-active {
  color: #9b0917;
}
</style>
