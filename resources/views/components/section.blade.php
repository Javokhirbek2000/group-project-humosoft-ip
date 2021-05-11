<section id="featured-collections" {{ $attributes->merge(['class' => 'section']) }}>
  <div class="container">
    <div class="title d-flex justify-content-center align-items-center mb-5">
      <h2 class="text-center p-4 shadow bg-white rounded">{{ $attributes['title'] }}</h2>
    </div>
    {{ $slot }}
  </div>
</section>
