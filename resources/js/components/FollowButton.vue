<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser">Follow Me Now</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },

  methods: {
      followUser() {
          alert('instide');
      }
  }
};
</script>
