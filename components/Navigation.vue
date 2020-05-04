<template>
  <div class>
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
          <b-nav-item href="#">
            <small>Add to cart</small>
            <font-awesome-icon icon="cart-plus" />
          </b-nav-item>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <b-sidebar id="sidebar-menu" aria-labelledby="sidebar-menu" no-header shadow>
      <template v-slot:default="{ hide }">
        <div class="p-3">
          <h4 id="sidebar-no-header-title" class="text-center">
            <b-img src="http://www.suprahitech.com/images/logo.gif" fluid alt="Responsive image"></b-img>
          </h4>
          <nav class=" text-center">
            <b-nav vertical>
              <b-nav-item class="border-bottom-grey" active @click="hide">Home
                  
              </b-nav-item>
              <b-nav-item href="#link-1" @click="hide">About Us</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Gem R/C</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Approvals</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Products</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Dealership</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Careers</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Contact Us</b-nav-item>
              <b-nav-item href="#link-2" @click="hide">Support</b-nav-item>
            </b-nav>
          </nav>
          <b-button variant="primary" block @click="hide">Close Sidebar</b-button>
        </div>
      </template>
    </b-sidebar>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
.border-bottom-grey{
   
}
</style>