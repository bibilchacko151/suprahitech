<template>

    <b-container class="p-0" fluid  >
      <b-row no-gutters>
        <b-col  cols="12" >
          <navigation/>
        </b-col>
      </b-row>
        <nuxt />
      <b-container id="footer" fluid class="p-0">
        <b-row >   
            <BFooter/>
        </b-row>
    </b-container> 
    </b-container>
  
 
</template>
<script>
import Navigation from '~/components/Navigation.vue';
import BFooter from '~/components/BFooter.vue';
export default {

  components:{
    Navigation,BFooter
  }
  
}
</script>

<style>
#footer{
  position: sticky;
  background-color: #f5f5f5;
}
</style>
