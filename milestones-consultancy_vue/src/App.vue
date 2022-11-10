<template>
  <div class="app">
    <router-view />

    <Footer />

    <!-- Back to Top -->
    <router-link to="#" @click="scrollToTop()" class="animate-bounce back-to-top"
      ><i class="fa fa-chevron-up"></i
    ></router-link>
  </div>
</template>

<script>
import Footer from "@/components/Footer2.vue";

export default {
  components: { Footer },
  methods: {
    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },
  },
};
</script>

<style scoped>
.back-to-top {
  position: fixed;
  display: none;
  background: #9b0917;
  color: #ffffff;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 1;
  font-size: 16px;
  border-radius: 4px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
  z-index: 11;
}

.back-to-top i {
  padding-top: 12px;
  color: #ffffff;
}
</style>
