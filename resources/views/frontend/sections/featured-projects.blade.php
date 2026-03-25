<section class="featured-projects-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-subtitle">FEATURED PROJECTS</span>
            <h2 class="section-title mt-2">Explore Our Signature Properties</h2>
            <p class="section-text mx-auto project-intro-text">
                Discover elegant residences crafted for comfort, sophistication and long-term value.
            </p>
        </div>

        <div class="row g-4">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4">
                    <div class="project-card h-100">
                        <div class="project-card-img">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                class="img-fluid w-100">
                        </div>

                        <div class="project-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <h4 class="project-title mb-1">{{ $project['title'] }}</h4>
                                    <p class="project-location mb-0">{{ $project['location'] }}</p>
                                </div>
                                <span class="project-price">{{ $project['price'] }}</span>
                            </div>

                            <p class="project-description mt-3">
                                {{ $project['description'] }}
                            </p>

                            <a href="#" class="project-link">
                                Explore Project
                                <span class="ms-1">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
