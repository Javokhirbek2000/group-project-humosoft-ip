@extends('layouts.admin')

@section('content')
  @switch($slug)
    @case("banners")
      @include('pages.admin.banners')
    @break
    @case("collections")
      @include('pages.admin.collections')
    @break
    @case("products")
      @include('pages.admin.products')
    @break
    @default
      @include('pages.admin.banners')

  @endswitch
@endsection
