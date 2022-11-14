<template>
  <div class="contact">
    <Header />
    <div class="w-full mb-10">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7979.632161641998!2d34.295167000000006!3d0.060707000000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x48acef74239b1123!2sAlego%20Usonga%20Constituency%20Office%2F%20CDF!5e0!3m2!1sen!2ske!4v1668438735383!5m2!1sen!2ske"
        width="100%"
        height="650"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
    <section class="bg-gray-100">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="font-semibold text-center lg:mb-16 sm:mb-8">
          <div class="text-center border-t-4 border-burgundy mb-6 m-auto w-1/4"></div>
          <h2 class="sm:text-4xl text-3xl">Contact Us</h2>
        </div>
        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
          <div
            class="rounded lg:col-span-2 lg:py-12 lg:px-4 shadow-lg shadow-gray-300 hover:border-2 hover:border-burgundy"
          >
            <p class="text-xl font-bold text-gray-700 mt-4">Address</p>
            <address class="mt-2 text-xl font-semibold not-italic mb-4">
              NGCDF Building, Siaya. 1st Floor, Door No. 1
            </address>
            <p class="text-xl font-bold text-gray-700 mt-4">Email</p>
            <p class="text-xl font-semibold">milestones14@gmail.com</p>

            <div class="mt-8">
              <p class="text-xl font-bold text-gray-700 mt-4">Phone</p>
              <p class="text-xl font-semibold">+254 720 920 491</p>
            </div>
          </div>

          <div
            class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12 hover:border-2 hover:border-burgundy"
          >
            <form action="" class="space-y-4">
              <div>
                <label class="sr-only" for="name">Name</label>
                <input
                  class="w-full rounded-lg border-gray-200 p-3 text-sm"
                  placeholder="Name"
                  type="text"
                  id="name"
                />
              </div>

              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div>
                  <label class="sr-only" for="email">Email</label>
                  <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Email address"
                    type="email"
                    id="email"
                  />
                </div>

                <div>
                  <label class="sr-only" for="phone">Phone</label>
                  <input
                    class="w-full rounded-lg border-gray-200 p-3 text-sm"
                    placeholder="Phone Number"
                    type="tel"
                    id="phone"
                  />
                </div>
              </div>

              <div>
                <label class="sr-only" for="message">Message</label>
                <textarea
                  class="w-full rounded-lg border-gray-200 p-3 text-sm"
                  placeholder="Message"
                  rows="8"
                  id="message"
                ></textarea>
              </div>

              <div class="mt-4">
                <button
                  type="submit"
                  class="inline-flex w-full items-center justify-center rounded-lg bg-burgundy px-5 py-3 text-white sm:w-auto hover:bg-transparent hover:text-burgundy border border-burgundy"
                >
                  <span class="font-medium"> Send Enquiry </span>

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ml-3 h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                  </svg>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Header from "@/components/Header2.vue";

export default {
  components: { Header },
};
</script>
