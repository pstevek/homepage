<section class="resume dotted-bg" id="resume">
    <div class="container">
        <div class="row">
            <div class="center-title">
                <h1>MY RESUME</h1>
                <p>
                    My recent qualifications and professional experience is listed below
                </p>
            </div>
            <!-- resume content -->
            <div class="col-md-12 top_45">
                <!-- education -->
                <div class="resume-timeline col-md-6">
                    <div class="rounded-icon">
                        <i class="fa fa-graduation-cap"></i>
                        <span>EDUCATION</span>
                    </div>
                    <div class="resume-out">
                        @foreach(config('variables.qualifications') as $qualification)
                            <div class="resume-info">
                                <h2 class="info-title">{{ $qualification['title'] }}</h2>
                                <span class="info-date">{{ $qualification['period'] }}</span>
                                <p>{{ $qualification['description'] }}</p>
                            </div> <!-- .resume-info -->
                        @endforeach
                    </div> <!-- .resume-out end -->
                </div>

                <!-- experience -->
                <div class="resume-timeline col-md-6">
                    <div class="rounded-icon">
                        <i class="fa fa-suitcase"></i>
                        <span>EXPERIENCE</span>
                    </div>
                    <div class="resume-out">
                        @foreach(config('variables.experiences') as $experience)
                            <div class="resume-info">
                                <h2 class="info-title">{{ $experience['title'] }}</h2>
                                <span class="info-date">{{ $experience['period'] }}</span>
                                <p>{{ $experience['description'] }}</p>
                            </div> <!-- .resume-info -->
                        @endforeach
                    </div> <!-- .resume-out end -->
                </div>
            </div>
        </div>
    </div>
</section>