@props(['heading' => 'Missing Something?', 'subheading' => 'Complete Your Look!'])

<section class="container mx-auto my-6">
  <div
    class="bg-primary-dark text-cream rounded p-4 flex items-center justify-between"
  >
    <div>
      <h2 class="text-xl font-semibold">{{ $heading }}</h2>
      <p class="text-gray-200 text-lg mt-2">
        {{ $subheading }}
      </p>
    </div>
    <x-button-link url="/cart">Checkout Now</x-button-link>
  </div>
</section>
