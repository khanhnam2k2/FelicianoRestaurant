<x-app-layout>
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
          <div class="col-sm-6 col-xl-3">
              <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-chart-line fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Today Sale</p>
                      <h6 class="mb-0">$1234</h6>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl-3">
              <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa fa-chart-bar fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">Total Sale</p>
                      <h6 class="mb-0">$1234</h6>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl-3">
              <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa-solid fa-bell fa-3x text-primary"></i>
                  <div class="ms-3">
                      <a href="{{route('admin.reservation.index')}}" class="mb-2">Reservation</a>
                      <h6 class="mb-0">Have {{$reservation_today}} reserve</h6>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-xl-3">
              <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                  <i class="fa-solid fa-blog fa-3x text-primary"></i>
                  <div class="ms-3">
                      <p class="mb-2">The Post was posted</p>
                      <h6 class="mb-0">Have {{$count_blog_posted}} post</h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Sale & Revenue End -->


  <!-- Recent Sales Start -->
  <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
          <div class="d-flex align-items-center justify-content-between mb-4">
              <h6 class="mb-0">Recent Salse</h6>
              <a href="">Show All</a>
          </div>
          <div class="table-responsive">
              <table class="table text-start align-middle table-bordered table-hover mb-0">
                  <thead>
                      <tr class="text-white">
                          <th scope="col"><input class="form-check-input" type="checkbox"></th>
                          <th scope="col">Date</th>
                          <th scope="col">Invoice</th>
                          <th scope="col">Customer</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>01 Jan 2045</td>
                          <td>INV-0123</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td>Paid</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                      </tr>
                      <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>01 Jan 2045</td>
                          <td>INV-0123</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td>Paid</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                      </tr>
                      <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>01 Jan 2045</td>
                          <td>INV-0123</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td>Paid</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                      </tr>
                      <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>01 Jan 2045</td>
                          <td>INV-0123</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td>Paid</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                      </tr>
                      <tr>
                          <td><input class="form-check-input" type="checkbox"></td>
                          <td>01 Jan 2045</td>
                          <td>INV-0123</td>
                          <td>Jhon Doe</td>
                          <td>$123</td>
                          <td>Paid</td>
                          <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <!-- Recent Sales End -->


  <!-- Widgets Start -->
  <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
          
          <div class="col-sm-12 col-md-6 ">
              <div class="h-100 bg-secondary rounded p-4">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      <h6 class="mb-0">Calender</h6>
                      <a href="">Show All</a>
                  </div>
                  <div id="calender"></div>
              </div>
          </div>
          <div class="col-sm-12 col-md-6">
              <div class="h-100 bg-secondary rounded p-4">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      <h6 class="mb-0">Post was posted</h6>
                      <a href="{{route('admin.posts.index')}}">Show All</a>
                  </div>
                  <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><img src="{{Storage::url($post->image)}}" width="100px" alt=""></td>
                                <td>{{$post->created_at->format('d-m-Y')}}</td>
                                <td>{{$post->user->name == Auth::user()->name ? "You" : $post->user->name}}</td>
                                <td><a class="btn btn-sm btn-primary" href="{{route('admin.posts.show',$post->id)}}">Detail</a></td>
                            </tr>
                            @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
                  
                  
              </div>
          </div>
      </div>
  </div>
  <!-- Widgets End -->
</x-app-layout>