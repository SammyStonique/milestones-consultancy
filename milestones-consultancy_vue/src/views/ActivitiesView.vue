<template>
    <div class="activities">
      <Header />
      <div class="mt-20 lg:pl-24 lg:pr-24">
        <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-12 lg:mb-12 sm:mb-8">
          <div class="font-semibold text-center lg:mb-8 sm:mb-4">
            <h2 class="sm:text-4xl text-3xl sm:mb-4">Activities Overview</h2>
          </div>
          <div class="grid grid-cols-1 gap-8 lg:grid-cols-1 lg:gap-16">
            <p class="">
              Whether you are a startup seeking strategic direction or an established enterprise looking to optimize operations, 
              Milestones Consultancy is your trusted partner for achieving sustainable success. 
              Explore our consultancies to discover how we can elevate your organization to new heights.
            </p>
            <div class="flex">
              <div class="w-1/8"></div>
              <div class="w-6/8 h-1/2">
                <video controls class="w-full h-full">
                  <source src="@/assets/videos/limuru_girls.mp4" type="video/mp4">
                  <!-- <source src="movie.ogg" type="video/ogg"> -->
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="w-1/8"></div>
            </div>
            <div class="flex">
              <div class="w-1/8"></div>
              <div class="w-6/8 h-1/2">
                <video controls class="w-full h-full">
                  <source src="@/assets/videos/kagumo.mp4" type="video/mp4">
                  <!-- <source src="movie.ogg" type="video/ogg"> -->
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="w-1/8"></div>
            </div>
            <div class="flex">
              <div class="w-1/8"></div>
              <div class="w-6/8 h-1/2">
                <video controls class="w-full h-full">
                  <source src="@/assets/videos/seme.mp4" type="video/mp4">
                  <!-- <source src="movie.ogg" type="video/ogg"> -->
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="w-1/8"></div>
            </div>
          </div>
          </div>
        </section>
      </div>
    </div>

</template>

<script>
import Header from "@/components/Header2.vue";


export default{
    components: {Header},
  
}
</script>

<style scoped>

</style>