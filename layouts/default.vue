<template>

    <b-container class="p-0" fluid  >
      <b-row no-gutters>
        <b-col  cols="12">
          <navigation/>
        </b-col>
      </b-row>
        <nuxt />
    </b-container>
  
 
</template>
<script>
import Navigation from '~/components/Navigation.vue';
export default {

  components:{
    Navigation
  }
  
}
</script>

<style>
</style>
