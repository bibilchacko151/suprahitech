<template>

   <b-col cols="4" offset="4" >
      <div  class="text-center" >
         <div>
            
            
           <small class="d-sm-none d-none d-md-none d-lg-block d-sm-block d-md-block">
            <u>  
              <font-awesome-icon prefix="fab" :icon="['fas','copyright']" /> {{year}} 
             Supra Hi-tech Electro Equipments Pvt. Ltd
             </u>
            </small>
         </div>
             <div>
                <b-link class="social facebook" href="#">
                         <font-awesome-icon prefix="fab" :icon="['fab','facebook']" />
                </b-link>
                 <b-link href="#">
                         <font-awesome-icon class="social" prefix="fab" :icon="['fab','linkedin']" />
                </b-link>
                <b-link class="social whatsapp" href="#">
                         <font-awesome-icon prefix="fab" :icon="['fab','whatsapp']" />
                </b-link>
             </div>
      </div>
   </b-col> 

</template>
<style scoped>
.social{
   font-size: medium;
}
 .whatsapp{
    color:green;
 }
 .facebook{
    color:#3b5998;
 }
</style>
<script>
export default {

   data(){
      
        return { year:new Date().getFullYear() };
      
   }
}
</script>
