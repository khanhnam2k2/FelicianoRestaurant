<x-guest-layout>
  @section('title', 'Reservation List - Feliciano Restaurant')

    <x-hero-card namePage="Reseravtion List" bg="images/bg_3.jpg" />
<section class="ftco-section bg-light">
    <div class="container">
        <div class=" text-center heading-section ftco-animate ">
            <span class="subheading">Booking</span>
          <h2 class="mb-4">My Table Order</h2>
        </div>
        <table class="table " style="height:100vh">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Reservation Date</th>
                <th scope="col">Guest Number</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $key => $reservation)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$reservation->res_date}}</td>
                    <td>{{$reservation->guest_number}}</td>
                    <td><span class="text-primary">{{$reservation->status}} </span>table order</td>
                    <td> <form class=""
                        method="POST"
                        action="{{route('reservation.delete',$reservation->id)}}"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                    </form></td>
                  </tr>
                @endforeach
             
              
            </tbody>
          </table>
    </div>
</section>
</x-guest-layout>