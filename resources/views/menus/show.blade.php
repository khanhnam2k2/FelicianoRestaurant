<x-guest-layout>
    <x-hero-card namePage="Detail {{$menu->name}}" />

    <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-6">
            <img src="{{Storage::url($menu->image)}}" alt="Ảnh sản phẩm" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h1>{{$menu->name}}</h1>
            <p>{{$menu->description}}</p>
            <p>Price: {{$menu->price}}</p>
            <div class="">
                <a class="btn btn-primary" href="{{route('reservation')}}">Book Table Now</a>
            </div>
          </div>
        </div>
      </div>
</x-guest-layout>