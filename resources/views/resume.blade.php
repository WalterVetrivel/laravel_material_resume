@extends('layouts.master')

@section('content')
<!-- Landing -->
<section id="landing" class="py-5">
    <div class="container">
        <h1 class="mb-5">Hi! I'm &lt;Name&gt;.<br>I'm a professional &lt;Job Title&gt;.</h1>
        <div class="d-md-flex">
            <a href="#resume" class="btn btn-secondary btn-lg m-3">View my resume <i class="fa fa-angle-double-right"></i></a>
            <a href="{{ route('projects') }}" class="btn btn-danger btn-lg m-3">View my projects <i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</section>
<!-- End Landing -->
<!-- Start Resume -->
<section id="resume" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 section-heading">My Resume</h2>
        <div class="card about-card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="category-heading mb-5">About Me</h2>
                    </div>
                    <div class="col-md-9 main pl-md-5">
                        <p><i class="fa fa-user mr-3"></i>Name</p>
                        <p><i class="fa fa-wrench mr-3"></i>Job Title</p>
                        <p><i class="fa fa-briefcase mr-3"></i>Experience</p>
                        <p><i class="fa fa-graduation-cap mr-3"></i>Qualification</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card skills-card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="category-heading mb-5">My Skills</h2>
                    </div>
                    <div class="col-md-9 main pl-md-5">
                        @for($i = 0;$i < 5;$i++)
                            @component('components.skillset', ['skills' => ['Skill 1', 'Skill 2']])
                                @slot('skillset_name')
                                    Skillset {{ $i + 1 }}
                                @endslot
                            @endcomponent
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="card work-card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="category-heading mb-5">Work Exprience</h2>
                    </div>
                    <div class="col-md-9 main pl-md-5">
                        @for($i = 0;$i < 3;$i++)
                            @component('components.work')
                                @slot('position')
                                    Position {{$i + 1}}
                                @endslot
                                @slot('company')
                                    Company Name
                                @endslot
                                @slot('duration')
                                    2 years
                                @endslot
                            @endcomponent
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="card education-card">
            <div class="card-body p-5">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="category-heading mb-5">Education</h2>
                    </div>
                    <div class="col-md-9 main pl-md-5">
                        @for($i = 0;$i < 3;$i++)
                            @component('components.education')
                                @slot('qualification')
                                    Qualification {{$i + 1}}
                                @endslot
                                @slot('year')
                                    2018
                                @endslot
                                @slot('institution')
                                    Institution Name
                                @endslot
                            @endcomponent
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Resume -->
@endsection
