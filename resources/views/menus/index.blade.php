<x-guest-layout>
  @section('title', 'Menu - Feliciano Restaurant')

    <x-hero-card namePage="Menu" bg="images/bg_2.jpg" />
    <section class="ftco-section">
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
            <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="justify-content: space-between">
                <a class="nav-link ftco-animate active"  data-toggle="pill" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>

                    @foreach ($categories as $category)
                    <a class="nav-link ftco-animate"  data-toggle="pill" href="#{{$category->name}}" role="tab" aria-controls="{{$category->name}}" aria-selected="false">{{$category->name}}</a>
                        
                    @endforeach
	            </div>
	          </div>
	          <div class="col-md-12 tab-wrap">
	            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" >
                  <div class="row no-gutters d-flex align-items-stretch">
                      @foreach ($menus as $menu)
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
                    @foreach ($categories as $category)
                    <div class="tab-pane fade" id="{{$category->name}}" role="tabpanel" >
                        <div class="row no-gutters d-flex align-items-stretch">
                            @foreach ($category->menus as $menu)
                            <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                <div class="menus d-sm-flex ftco-animate align-items-stretch mt-4 mr-4">
                              <div class="menu-img img " style="background-image: url({{Storage::url($menu->image)}});"></div>
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
                        
                    @endforeach

	          
	            </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>  

</x-guest-layout>