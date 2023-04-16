<x-guest-layout>
    <x-hero-card namePage="Team" heading="Our Team" />
    
       <!-- Team Start -->
       <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                @foreach ($teams as $team)
                <x-team-card :team="$team"  />
                    
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Team End -->
</x-guest-layout>