<header class="bg-primary-dark text-white p-4" x-data="{ open: false }">
  <div class="w-full mx-auto flex justify-between items-center">
    <a href="{{ url('/') }}"><img src="/images/g-and-s-logo.png" alt="Gold & Sage" class="max-w-[275px] pr-6" /></a>
    <nav class="hidden md:flex items-center space-x-4">
        <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link url="/products" :active="request()->is('products')">All Products</x-nav-link>
        <x-nav-link url="/products/saved" :active="request()->is('products/saved')">Saved Products</x-nav-link>
        <x-nav-link url="/login" :active="request()->is('login')">Login</x-nav-link>
        <x-nav-link url="/register" :active="request()->is('register')">Register</x-nav-link>
        <x-nav-link url="/dashboard" :active="request()->is('dashboard')" icon="gauge">Dashboard</x-nav-link>
        <x-button-link url="/products/create" icon="edit">Add Product</x-button-link>
    </nav>
    <button id="hamburger" class="text-white md:hidden flex items-center" x-on:click="open = !open">
        <i class="fa fa-bars text-2xl"></i>
    </button>
  </div>
  <!-- Mobile Menu -->
  <div
    id="mobile-menu"
    class="md:hidden bg-primary-dark text-white mt-5 pb-4 space-y-2"
    x-cloak
    x-show="open"
    @click.away="open = false"
  >
    <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
    <x-nav-link url="/products" :active="request()->is('products')" :mobile="true">All Products</x-nav-link>
    <x-nav-link url="/products/saved" :active="request()->is('products/saved')" :mobile="true">Saved Products</x-nav-link>
    <x-nav-link url="/dashboard" :active="request()->is('dashboard')" :mobile="true">Dashboard</x-nav-link>
    <x-nav-link url="/login" :active="request()->is('login')" :mobile="true">Login</x-nav-link>
    <x-nav-link url="/register" :active="request()->is('register')" :mobile="true">Register</x-nav-link>
    <x-button-link url="/products/create" icon="edit" :block="true">Add Product</x-button-link>
  </div>
</header>
