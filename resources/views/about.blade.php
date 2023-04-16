<x-guest-layout>
    <x-hero-card namePage="About" />
        <!-- About Start -->
        @include('partials._about')
        <!-- About End -->

        <!-- Services Start -->
        @include('partials._services')
        <!-- Services End -->
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
        
</x-guest-layout>