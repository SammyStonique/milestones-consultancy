<template>
  <div class="careers">
    <Header />
    <div class="mt-20 lg:pl-24 lg:pr-24">
      <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-12 lg:mb-16 sm:mb-8">
          <div class="font-semibold text-center lg:mb-16 mb-4">
            <h2 class="text-4xl lg:text-3xl">Looking For A Dream Job?</h2>
            <h1 class="italic text-gray-700 text-2xl">Join Our Amazing Team</h1>
          </div>
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div
              class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-first lg:h-100"
            >
              <img
                alt="Party"
                src="@/assets/images/careers.jpg"
                class="absolute inset-0 h-full w-full object-cover"
              />
            </div>

            <div class="lg:py-4">
              <p class="mt-4 text-gray-600 mb-4">
                There are no vacant positions at the moment. Kindly check back later.
              </p>
              <p class="text-gray-600">
                In the meantime, you can meet and interact with our amazing team and also
                subscribe to our newsletter so that you don't miss any of our vacancies
                notifications.
              </p>
              <router-link
                to="/about"
                @click="scrollToPosition(900)"
                class="mt-8 inline-flex items-center rounded border border-burgundy bg-burgundy px-8 py-3 text-white hover:bg-transparent hover:text-burgundy focus:outline-none focus:ring active:text-burgundy"
              >
                <span class="text-sm font-medium"> Meet Our Team </span>

                <svg
                  class="ml-3 h-5 w-5"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                  />
                </svg>
              </router-link>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
import Header from "@/components/Header2.vue";
export default {
  components: { Header },
  methods: {
    scrollToPosition(position) {
      window.scrollTo({ top: position, behavior: "smooth" });
    },
  },
};
</script>
