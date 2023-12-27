<template>
  <div class="fixed z-30 top-0 w-full sticky-navbar transition duration-300">
    <header aria-label="Site Header" class="border-b-0">
      <div
        class="mx-auto lg:flex h-16 max-w-screen-2xl items-center justify-between sm:px-6 lg:px-8"
      >
        <div class="flex items-center">
          <button
            type="button"
            @click="showDropMenu"
            class="p-2 sm:mr-4 lg:hidden"
            v-if="!showMenu"
          >
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
          <button
            class="lg:hidden p-2 sm:mr-4 text-xl"
            v-if="showMenu"
            @click="closeDropMenu"
          >
            <i class="fa fa-times text-2xl" aria-hidden="true"></i>
          </button>

          <router-link to="/" class="flex">
            <span class="sr-only text-4xl">Logo</span>
            <!-- <span class="inline-block h-10 w-32 rounded-lg bg-gray-200"></span> -->
            <img class="inline-block h-14 w-32 rounded-lg" src="@/assets/images/new-logo.jpg" alt="Logo" />
          </router-link>
        </div>

        <div class="lg:flex lg:flex-1 lg:items-center lg:justify-end sm:hidden">
          <nav
            aria-label="Site Nav"
            class="hidden lg:flex lg:gap-8 lg:text-base lg:font-bold lg:uppercase lg:tracking-wide"
          >
            <router-link
              to="/"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Home
            </router-link>

            <router-link
              to="/about"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              About
            </router-link>

            <router-link
              to="/services"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Services
            </router-link>

            <div class="dropdown">
              <router-link
                to="/activities"
                @click="scrollToTop"
                class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
              >
                Consultancies
              </router-link>
              <div class="dropdown-content absolute rounded shadow-md shadow-slate-500 bg-white w-52 h-32 pl-4 py-2 z-50">
                <router-link
                to="/activities"
                @click="scrollToTop"
                class="nav-links block h-8 border-b-4 border-transparent leading-[4rem]  hover:text-red-700"
              >
                Activities
              </router-link>
              <router-link
                to="/publications"
                @click="scrollToTop"
                class="nav-links block h-8 border-b-4 border-transparent leading-[4rem]  hover:text-red-700"
              >
                Publications
              </router-link>
              <router-link
                to="/pricing"
                @click="scrollToTop"
                class="nav-links block h-8 border-b-4 border-transparent leading-[4rem] hover:text-red-700"
                >
                  Pricing
              </router-link>
              </div>
          </div>

            <router-link
              to="/faq"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              FAQs
            </router-link>

            <router-link
              to="/careers"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Careers
            </router-link>

            <router-link
              to="/contact"
              @click="scrollToTop"
              class="nav-links block h-16 border-b-4 border-transparent leading-[4rem] hover:border-current hover:text-red-700"
            >
              Contact
            </router-link>
          </nav>
        </div>
        <div class="lg:hidden md:hidden py-4 pl-3 bg-white" v-if="showMenu">
          <nav class="">
            <p class="mb-3"><router-link to="/">Home</router-link></p>
            <p class="mb-3 text-black"><router-link to="/about">About</router-link></p>
            <p class="mb-3 text-black">
              <router-link to="/services">Services</router-link>
            </p>
            <p class="mb-3 text-black">
              <router-link to="/activities">Conultancies</router-link>
            </p>
            <p class="mb-3 text-black"><router-link to="/faq">FAQs</router-link></p>
            <p class="mb-3 text-black">
              <router-link to="/careers">Careers</router-link>
            </p>
            <p class="mb-3 text-black">
              <router-link to="/contact">Contact</router-link>
            </p>
          </nav>
        </div>
      </div>
    </header>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showMenu: false,
    };
  },
  methods: {
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
    showDropMenu() {
      this.showMenu = true;
    },
    closeDropMenu() {
      this.showMenu = false;
    },
  },
};
</script>

<style scoped>
.sticky-navbar-appear {
  background-color: white;
  border-bottom: solid gray 1px;
}
/* router-link.sticky-navbar-appear {
  color: #9b0917;
} */
.sticky-navbar-disappear {
  background-color: none;
  color: white !important;
}
.router-link-active {
  color: #9b0917 !important;
}
.nav-links {
  color: black;
}
.dropdown:hover .dropdown-content{
  display: block;
}
.dropdown-content{
  display: none;
}
</style>
