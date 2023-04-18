<x-guest-layout>
  @section('title', 'Book Table - Feliciano Restaurant')

    <x-hero-card namePage="Book A Table" bg="images/bg_3.jpg" />

      <!-- Reservation Start -->
      <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row d-flex no-gutters">
      <div class="col-md-6 order-md-last ftco-animate makereservation">
          <div class="py-md-5 p-4">
              <div class="heading-section ftco-animate">
                <h2 class="">Make Reservation</h2>
              </div>
            <form action="{{route('reservation.store')}}" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="tel_number" class="form-control" placeholder="Phone">
                    @error('tel_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="guest_number">Guest number</label>
                      <input type="number" name="guest_number" min="1" max="20" class="form-control" placeholder="Guest number">
                      @error('guest_number')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                    </div>
                  </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Reservation Date</label>
                    <input type="datetime-local"name="res_date" class="form-control"  placeholder="Date">
                    @error('res_date')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Message</label>
                      <textarea name="message" class="w-100" rows="4"></textarea>
                      @error('message')
                      <div class="text-danger">{{ $message }}</div>
                  @enderror
                    </div>
                  </div>
               
                
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
      <div class="col-md-6 p-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1209.5715619279324!2d105.6941447805488!3d18.659713083800067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1678938150810!5m2!1svi!2s" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
    </div>
        </div>
    </section>
</x-guest-layout>