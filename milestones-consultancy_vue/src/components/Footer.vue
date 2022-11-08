<template>
  <div class="w-full py-16 pl-24 pr-24 bg-indigo-600 text-white/75">
    <div class="flex mb-12">
      <div class="basis-5/6">
        <img src="" alt="Logo" />
      </div>
      <div class="basis-1/6 text-3xl">
        <a href="" target="_blank"
          ><i class="fa fa-instagram mr-4 hover:text-brown" aria-hidden="true"></i
        ></a>
        <a href="" target="_blank"
          ><i class="fa fa-facebook-square mr-4 hover:text-brown" aria-hidden="true"></i
        ></a>
        <a href="" target="_blank"
          ><i class="fa fa-youtube-square mr-4 hover:text-brown" aria-hidden="true"></i
        ></a>
        <a href="" target="_blank"
          ><i class="fa fa-twitter-square hover:text-brown" aria-hidden="true"></i
        ></a>
      </div>
    </div>
    <div class="flex mb-10">
      <div class="basis-2/4 pt-12 mr-8">
        <p class="text-lg">
          MILESTONES Development Consultancy’s main activity is supporting teams,
          departments, communities, professions or whole organizations in identifying
          their priorities, building on those priorities and then working together more
          effectively to address the underlying causes of those priority needs.
        </p>
      </div>
      <div class="basis-1/4">
        <h2 class="font-bold mb-6 text-lg">Menu</h2>
        <p class="mb-2 hover:text-brown">
          <router-link to="/" @click="scrollToTop">Home</router-link>
        </p>
        <p class="mb-2 hover:text-brown">
          <router-link to="/about" @click="scrollToTop">About Us</router-link>
        </p>
        <p class="mb-2 hover:text-brown">
          <router-link to="/services" @click="scrollToTop">Services</router-link>
        </p>
        <p class="mb-2 hover:text-brown">
          <router-link to="/prices" @click="scrollToTop">Prices</router-link>
        </p>
        <p class="mb-2 hover:text-brown">
          <router-link to="/guarantees" @click="scrollToTop">Guarantees</router-link>
        </p>
        <p class="mb-2 hover:text-brown">
          <router-link to="/contacts" @click="scrollToTop">Contact Us</router-link>
        </p>
      </div>
      <div class="basis-1/4">
        <h2 class="font-bold mb-6 text-lg">Address</h2>
        <p class="mb-6 hover:text-brown">NGCDF Building, Siaya. 1st Floor, Door No. 1</p>
        <h2 class="font-bold mb-6 text-lg">Phone</h2>
        <p class="mb-2 hover:text-brown">+254-720-920-491</p>
      </div>
    </div>
    <div class="w-full border-t border-footer-color pt-6"></div>
    <p>
      Essay Writing ©2022. All rights reserved. Terms of use |<router-link
        to="/ab"
        class="hover:text-brown"
      >
        Privacy Policy</router-link
      >
    </p>
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

<style>
.footer-links:hover {
  color: #b35032;
}
</style>
