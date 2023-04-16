<x-guest-layout>
    <section class="home-slider owl-carousel js-fullheight">
      @foreach ($slides as $slide)
      <div class="slider-item js-fullheight" style="background-image: url({{Storage::url($slide->image)}});">
          <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
                <span class="subheading">{{$slide->subheading}}</span>
              <h1 class="mb-4">{{$slide->heading}}</h1>
              <a class="btn btn-primary" href="{{route('reservation')}}">Make Your Reservation <i class="fa-solid fa-utensils"></i></a>
            </div>

          </div>
        </div>
      </div>
          
      @endforeach
  
       
      </section>
  
      {{-- <section class="ftco-section ftco-no-pt ftco-no-pb">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="featured">
                          <div class="row">
                              <div class="col-md-3">
                                  <div class="featured-menus ftco-animate">
                            <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                            <div class="text text-center">
                            <h3>Grilled Beef with potatoes</h3>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                          </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="featured-menus ftco-animate">
                            <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
                            <div class="text text-center">
                            <h3>Grilled Beef with potatoes</h3>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                          </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="featured-menus ftco-animate">
                            <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
                            <div class="text text-center">
                            <h3>Grilled Beef with potatoes</h3>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                          </div>
                              </div>
                              <div class="col-md-3">
                                  <div class="featured-menus ftco-animate">
                            <div class="menu-img img" style="background-image: url(images/breakfast-4.jpg);"></div>
                            <div class="text text-center">
                            <h3>Grilled Beef with potatoes</h3>
                                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                            </div>
                          </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section> --}}

      {{-- about --}}
      @include('partials._about')
  
      {{-- services --}}
      @include('partials._services')

  
      {{-- menus --}}
      <section class="ftco-section">
          <div class="container">
              <div class="row no-gutters justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
              <h2 class="mb-4">Our Menu</h2>
            </div>
          </div>
          <div class="row no-gutters d-flex align-items-stretch">
            @foreach ($specials->menus as $menu)
            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                <div class="menus d-sm-flex ftco-animate align-items-stretch mt-4 mr-4">
              <div class="menu-img img  " style="background-image: url({{Storage::url($menu->image)}});"></div>
              <div class="text d-flex align-items-center">
                                <div>
                      <div class="d-flex">
                        <div class="one-half">
                          <h3>{{$menu->name}}</h3>
                        </div>
                        <div class="one-forth">
                          <span class="price">${{$menu->price}}</span>
                        </div>
                      </div>
                      <p class="mb-2 text-sm">
                        Categories: 
                        @foreach ($menu->categories as $category)
                        <span class="">{{$category->name}},</span>
                        @endforeach
                    </p>

                      <p><a href="{{route('menus.show',$menu->id)}}" class="btn btn-primary">See details</a></p>
                  </div>
              </div>
            </div>
            </div>
                
            @endforeach
              
          </div>
          </div>
      </section>
      
      {{-- chef --}}
          <section class="ftco-section">
              <div class="container">
                  <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Chef</span>
              <h2 class="mb-4">Our Master Chef</h2>
            </div>
          </div>	
                  <div class="row">
                        @foreach ($teams as $team)
                        <x-team-card :team=$team/>
                        @endforeach
                      
                  
                  </div>
              </div>
          </section>
  
          
          {{-- blogs --}}
          <section class="ftco-section bg-light">
              <div class="container">
                  <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
              <h2 class="mb-4">Recent Posts</h2>
            </div>
          </div>
                  <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4 ftco-animate">
                      <div class="blog-entry">
                        <a href="{{route('post.show',$post->id)}}" class="block-20" style="background-image: url({{Storage::url($post->image)}});">
                        </a>
                        <div class="text pt-3 pb-4 px-4">
                          <div class="meta">
                            <div><a href="#">{{$post->created_at->format('d-m-Y')}}</a></div>
                            <div><a href="#">{{$post->user->name}}</a></div>
                          </div>
                          <h3 class="heading"><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></h3>
                          <p class="clearfix">
                            <a href="{{route('post.show',$post->id)}}" class="float-left read">Read more</a>
                          </p>
                        </div>
                      </div>
                    </div>
                    @endforeach
            
            
                  </div>
                  <div class="text-center">
                    <a class="btn btn-primary text-center" href="{{route('post.index')}}">Learn more</a>

                  </div>
              </div>
          </section>

</x-guest-layout>