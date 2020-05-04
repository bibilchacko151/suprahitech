<template>
    <div class="">
  <b-navbar toggleable="lg" type="light" variant="light">
    <b-navbar-brand href="#">
         <b-button v-b-toggle.sidebar-menu>
             <font-awesome-icon icon="bars" />
        </b-button>
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
     

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-item href="#" >

        <font-awesome-icon icon="cart-plus" />
          
        </b-nav-item>
      

       
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
  <b-sidebar id="sidebar-menu" title="Sidebar" shadow>
      <div class="px-3 py-2">
        <p>
          Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
          in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
        </p>
        <b-img src="https://picsum.photos/500/500/?image=54" fluid thumbnail></b-img>
      </div>
    </b-sidebar>
</div>
</template>
<script>


export default {
    
}
</script>