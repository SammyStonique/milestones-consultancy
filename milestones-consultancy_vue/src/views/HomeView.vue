<template>
  <div class="home">
    <div
      class="relative lg:w-full lg:h-screen bg-[url('@/assets/images/image03.jpeg')] bg-cover bg-center lg:mb-12 sm:mb-6"
    >
      <div
        class="w-full h-full flex flex-col justify-center items-center pt-60 backdrop-blur-xs bg-black/70"
      >
        <div class="m-auto w-3/4 lg:w-1/2 lg:pt-24 sm:pt-12">
          <h3 class="lg:text-6xl text-5xl text-white text-center mb-10 lg:mb-4">
            At Milestones,
          </h3>
          <h1
            class="lg:mt-5 sm:mt-2 lg:mb-20 mb-10 text-center lg:text-5xl text-xl text-white font-semibold drop-shadow-lg"
          >
            we believe that <span class="text-burgundy">together </span>each achieves
            more.
          </h1>
          <p class="text-white lg:text-2xl text-xs text-center">
            Committed to ethical business practices
          </p>
        </div>
      </div>
    </div>
    <Header />
    <section>
      <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
          <div
            class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full scale-100 hover:scale-105 ease-in duration-500 cursor-pointer"
          >
            <img
              alt="HomePage Image"
              src="@/assets/images/image05.jpeg"
              class="absolute inset-0 h-full w-full object-cover"
            />
          </div>

          <div class="lg:py-16">
            <h2 class="text-3xl font-bold sm:text-4xl">About Us</h2>

            <p class="mt-4 text-gray-600">
              MILESTONES Development Consultancy’s main activity is supporting teams,
              departments, communities, professions or whole organizations in identifying
              their priorities, building on those priorities and then working together
              more effectively to address the underlying causes of those priority needs.
            </p>

            <router-link
              to="/about"
              @click="scrollToTop"
              class="mt-8 inline-flex items-center rounded border border-burgundy bg-burgundy px-8 py-3 text-white hover:bg-transparent hover:text-burgundy focus:outline-none focus:ring active:text-burgundy"
            >
              <span class="text-sm font-medium"> Read More </span>

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
    <section class="bg-gray-900 text-white">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-3xl font-bold sm:text-4xl">Services Overview</h2>

          <p class="mt-4 text-gray-300">
            Put quite simply, if we do not feel we are best placed to provide you with
            what you need, we will say so and save you time and money. There is nothing to
            be gained by either party if we take on a commission without the necessary
            time and skills to do a professional job.
          </p>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          <a
            class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-burgundy/10 scale-100 hover:scale-105 ease-in duration-300"
            href=""
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10 text-burgundy"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              />
            </svg>

            <h2 class="mt-4 text-xl font-bold text-white">Strategy</h2>

            <p class="mt-1 text-sm text-gray-300">
              Our strategy consultancies comprises of Development of Strategic Plans,
              Participatory Community Development and Leadership Skills, Project
              Management Skills among others.
            </p>
          </a>

          <a
            class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-burgundy/10 scale-100 hover:scale-105 ease-in duration-300"
            href=""
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10 text-burgundy"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              />
            </svg>

            <h2 class="mt-4 text-xl font-bold text-white">Leadership</h2>

            <p class="mt-1 text-sm text-gray-300">
              Our leadership consultancies comprises of Mentorship For Student’s Councils,
              Motivational Speaking, Child Rights and Child Protection, Career Options
              Guidance & Development among others.
            </p>
          </a>

          <a
            class="block rounded-xl border border-gray-800 p-8 shadow-xl transition hover:border-pink-500/10 hover:shadow-burgundy/10 scale-100 hover:scale-105 ease-in duration-300"
            href=""
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10 text-burgundy"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              />
            </svg>

            <h2 class="mt-4 text-xl font-bold text-white">Development</h2>

            <p class="mt-1 text-sm text-gray-300">
              Our development consultancies comprises of Training and Staff Development ,
              Event Organization & Logistics, Effective customer service management,
              Effective customer service management among others.
            </p>
          </a>
        </div>

        <div class="mt-12 text-center">
          <router-link
            to="/services"
            @click="scrollToTop"
            class="mt-8 inline-flex items-center rounded border border-burgundy bg-burgundy px-8 py-3 text-white hover:bg-transparent focus:outline-none focus:ring active:text-burgundy"
          >
            <span class="text-sm font-medium"> Get Started </span>

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
    </section>
    <section class="">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
          <div class="text-center border-t-4 border-burgundy mb-6 m-auto w-1/2"></div>
          <h2 class="text-2xl font-bold sm:text-4xl">Why Milestones Consultancy?</h2>

          <p class="mt-4">
            At MILESTONES, we have a strong commitment to ethical business practices and
            wish to reinforce that commitment by working with clients who respect the same
            values.
          </p>
        </div>

        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
          <a
            class="block rounded-xl p-8 shadow-xl transition hover:border-burgundy/10 hover:shadow-burgundy/20"
            href=""
          >
            <div class="m-auto w-1/4 mb-6">
              <div class="relative rounded-full w-12 h-12 bg-burgundy">
                <div class="absolute top-2 left-5">
                  <p class="text-2xl text-white">1</p>
                </div>
              </div>
            </div>
            <h2 class="mt-4 text-xl font-bold text-center">Quality Service</h2>

            <p class="mt-4 text-sm">
              We strive to provide nothing but the best for our clients. We ensure that
              our clients get top notch services.
            </p>
          </a>

          <a
            class="block rounded-xl p-8 shadow-xl transition hover:border-burgundy/10 hover:shadow-burgundy/20"
            href=""
          >
            <div class="m-auto w-1/4 mb-6">
              <div class="relative rounded-full w-12 h-12 bg-burgundy">
                <div class="absolute top-2 left-5">
                  <p class="text-2xl text-white">2</p>
                </div>
              </div>
            </div>
            <h2 class="mt-4 text-xl font-bold text-center">Affordable Prices</h2>

            <p class="mt-4 text-sm">We offer affordable prices to our clientelle.</p>
          </a>

          <a
            class="block rounded-xl p-8 shadow-xl transition hover:border-burgundy/10 hover:shadow-burgundy/20"
            href=""
          >
            <div class="m-auto w-1/4 mb-6">
              <div class="relative rounded-full w-12 h-12 bg-burgundy">
                <div class="absolute top-2 left-5">
                  <p class="text-2xl text-white">3</p>
                </div>
              </div>
            </div>
            <h2 class="mt-4 text-xl font-bold text-center">Desired Results</h2>

            <p class="mt-4 text-sm">
              Put quite simply, if we do not feel we are best placed to provide you with
              what you need, we will say so and save you time and money
            </p>
          </a>
        </div>
      </div>
    </section>

    <section class="">
      <div class="mx-auto max-w-screen-xl px-4 lg:py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
          <h2 class="text-2xl font-bold sm:text-4xl">Trusted By</h2>
        </div>
        <div class="flex mt-8 lg:mt-16">
          <div class="lg:basis-1/4 md:basis-1/4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/child_fund.png" alt="Child Fund" />
          </div>
          <div class="lg:basis-1/4 md:basis-1/4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/world_vision.png" alt="World Vision" />
          </div>
          <div class="lg:basis-1/4 md:basis-4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/care_international.jpg" alt="Care International" />
          </div>
          <div class="lg:basis-1/4 md:basis-1/4 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/tembea_youth.jpeg" alt="Tembea Youth"/>
          </div>
        </div>
        <div class="flex mt-8 mb-4 lg:mt-16">
          <div class="lg:basis-1/4 md:basis-1/4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/redcross.png" alt="Red Cross" />
          </div>
          <div class="lg:basis-1/4 md:basis-1/4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/gok.jpeg" alt="GoK" />
          </div>
          <div class="lg:basis-1/4 md:basis-1/4 px-2 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/kofi_annan.png" alt="Kofi Annan" />
          </div>
          <div class="lg:basis-1/4 md:basis-1/4 pt-2 lg:px-12 md:px-10 lg:pt-8 md:pt-8">
            <img src="@/assets/images/compassion.png" alt="Compassion" />
          </div>
        </div>
      </div>
    </section>
    <div class="lg:pl-24 lg:pr-24 pl-6 pr-6">
      <div class="text-center border-t-4 border-burgundy mb-6 m-auto w-1/4"></div>
      <h3 class="text-center font-bold text-2xl mb-4">Testimonials</h3>
      <div class="lg:w-3/4 m-auto w-full">
        <p></p>
      </div>
      <section>
        <div class="mx-auto max-w-screen-xl py-8 sm:px-6 lg:px-8">
          <div class="swiper-container1 !overflow-hidden">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <blockquote
                    class="rounded-lg bg-gray-100 p-8 hover:border-2 hover:border-burgundy cursor-pointer"
                  >
                    <div class="flex items-center">
                      <img
                        alt="Profile Pic"
                        src="@/assets/images/sam-review.jpg"
                        class="h-16 w-16 rounded-full object-cover"
                      />

                      <div class="ml-4 text-sm">
                        <p class="font-medium">Okeyo Joseph</p>
                        <p class="mt-1">Vice Principal - Siaya KMTC</p>
                      </div>
                    </div>

                    <p class="relative mt-4 text-gray-500 text-sm">
                      <span class="text-xl">&ldquo;</span>

                      Working with Milestones Consultancy was a game-changer for our business. 
                      Their team of experts demonstrated unparalleled professionalism and a deep understanding of our industry. 
                      Their strategic insights and innovative solutions have not only optimized our operations but also significantly increased our bottom line. 
                      We highly recommend Milestones Consultancy for anyone seeking top-notch consultancy services.

                      <span class="text-xl">&rdquo;</span>
                    </p>
                  </blockquote>
                </div>

                <div class="swiper-slide">
                  <blockquote
                    class="rounded-lg bg-gray-100 p-8 hover:border-2 hover:border-burgundy cursor-pointer"
                  >
                    <div class="flex items-center">
                      <img
                        alt="Profile Pic"
                        src="@/assets/images/auscar-review.jpg"
                        class="h-16 w-16 rounded-full object-cover"
                      />

                      <div class="ml-4 text-sm">
                        <p class="font-medium">Peter Mbugua</p>
                        <p class="mt-1">Lead HR Officer - Optiven Group</p>
                      </div>
                    </div>

                    <p class="relative mt-4 text-gray-500 text-sm">
                      <span class="text-xl">&ldquo;</span>

                      The team at Milestones Consultancy exceeded our expectations in every way. 
                      Their commitment to client success, attention to detail, and ability to navigate complex challenges were truly impressive. 
                      From the initial consultation to the final implementation, their expertise was evident, and the results spoke for themselves. 
                      Milestones Consultancy is our go-to partner for strategic business advice.

                      <span class="text-xl">&rdquo;</span>
                    </p>
                  </blockquote>
                </div>

                <div class="swiper-slide">
                  <blockquote
                    class="rounded-lg bg-gray-100 p-8 hover:border-2 hover:border-burgundy cursor-pointer"
                  >
                    <div class="flex items-center">
                      <img
                        alt="Profile Pic"
                        src="@/assets/images/freddy-review.jpeg"
                        class="h-16 w-16 rounded-full object-cover"
                      />

                      <div class="ml-4 text-sm">
                        <p class="font-medium">John Omondi</p>
                        <p class="mt-1">Principal - Maseno School</p>
                      </div>
                    </div>

                    <p class="relative mt-4 text-gray-500 text-sm">
                      <span class="text-xl">&ldquo;</span>

                      Milestones Consultancy played a crucial role in transforming our business strategy. 
                      Their knowledgeable team guided us through a comprehensive analysis of our processes and market dynamics. 
                      The tailored solutions they provided were instrumental in enhancing our efficiency and competitiveness. 
                      If you're looking for a consultancy that delivers results, Milestones Consultancy is the one.

                      <span class="text-xl">&rdquo;</span>
                    </p>
                  </blockquote>
                </div>

                <div class="swiper-slide">
                  <blockquote
                    class="rounded-lg bg-gray-100 p-8 hover:border-2 hover:border-burgundy cursor-pointer"
                  >
                    <div class="flex items-center">
                      <img
                        alt="Profile Pic"
                        src="@/assets/images/gracey-review.jpg"
                        class="h-16 w-16 rounded-full object-cover"
                      />

                      <div class="ml-4 text-sm">
                        <p class="font-medium">Mary Wagacha</p>
                        <p class="mt-1">C.E.0 - Ezen Partners</p>
                      </div>
                    </div>

                    <p class="relative mt-4 text-gray-500 text-sm">
                      <span class="text-xl">&ldquo;</span>

                      We engaged Milestones Consultancy to help us navigate a critical period of growth, and their impact was immediate. 
                      Their team brought a fresh perspective, identifying opportunities we hadn't considered and addressing challenges head-on. 
                      Their dedication to client success, coupled with their strategic approach, sets them apart. 
                      We are grateful for the partnership with Milestones Consultancy and confidently recommend their services to businesses seeking transformative solutions.

                      <span class="text-xl">&rdquo;</span>
                    </p>
                  </blockquote>
                </div>
              </div>

              <div class="swiper-pagination !relative !bottom-0 mt-12 text-xl"></div>
              <button
                class="prev-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white"
              >
                <span class="sr-only">Previous Slide</span>
                <svg
                  class="h-5 w-5 -rotate-180 transform"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9 5l7 7-7 7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                  />
                </svg>
              </button>
              <button
                class="next-button rounded-full border border-pink-600 p-3 text-pink-600 hover:bg-pink-600 hover:text-white"
              >
                <span class="sr-only">Next Slide</span>
                <svg
                  class="h-5 w-5"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M9 5l7 7-7 7"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
import Header from "@/components/Header.vue";
import { Swiper, Autoplay, Pagination, Navigation } from "swiper";
import "swiper/scss";
import "swiper/css/pagination";
import "swiper/css/navigation";

export default {
  name: "HomeView",
  data() {
    return {
      visible: false,
      newsEmail: null,
    };
  },

  components: { Header, Swiper },
  mounted() {
    Swiper.use(Autoplay, Pagination, Navigation);
    const swiper = new Swiper(".swiper-container", {
      direction: "horizontal",
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      modules: [Autoplay, Pagination, Navigation],
      autoplay: {
        delay: 8000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
        el: ".swiper-slide",
      },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
      },
      navigation: {
        nextEl: "next-button",
        prevEl: "prev-button",
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
        },
        1024: {
          slidesPerView: 3,
        },
      },
      on: {
        init() {
          this.el.addEventListener("mouseenter", () => {
            this.autoplay.stop();
          });
          this.el.addEventListener("mouseleave", () => {
            this.autoplay.start();
          });
        },
      },
    });
    swiper.autoplay.start();
    const swiper1 = new Swiper(".swiper", {
      direction: "horizontal",
      loop: true,
      speed: 700,
      modules: [Autoplay, Pagination],
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
        el: ".swiper-slide",
      },
      on: {
        init() {
          this.el.addEventListener("mouseenter", () => {
            this.autoplay.stop();
          });
          this.el.addEventListener("mouseleave", () => {
            this.autoplay.start();
          });
        },
      },
    });
    swiper1.autoplay.start();
  },
  methods: {
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
  },
};
</script>

<style scoped>
:global(.swiper-pagination-bullet) {
  height: 12px;
  width: 12px;
}

.swiper-container {
  --swiper-theme-color: #9b0917;
}
</style>
