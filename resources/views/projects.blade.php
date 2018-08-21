@extends('layouts.master')
@section('content')
<!-- Start Projects -->
<section id="projects" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 section-heading">My Projects</h2>
        <div class="row">
            @for($i = 0;$i < 3;$i++)
                <div class="col-md-6">
                    @component('components.project', ['id' => $i + 1])
                        @slot('project_title')
                            Project {{ $i + 1 }}
                        @endslot
                        @slot('project_subtitle')
                            Project Subtitle
                        @endslot
                        @slot('role')
                            Role
                        @endslot
                    @endcomponent
                </div>
            @endfor
        </div>
    </div>
</section>
<!-- End Projects -->
<!-- Project Modals -->
@for($i = 0;$i < 3;$i++)
    @component('components.project_modal', ['id' => $i + 1, 'responsibilities' => ['Responsibility 1', 'Responsibility 2', 'Responsibility 3']])
        @slot('project_title')
            Project {{ $i + 1 }}
        @endslot
        @slot('project_subtitle')
            Project Subtitle
        @endslot
        @slot('role')
            Role
        @endslot
        @slot('project_description')
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptates, earum ullam consequatur porro, labore ipsam voluptatem ab eum aliquid est minima aperiam aliquam corporis? Consequatur consectetur necessitatibus nam incidunt?
        @endslot
    @endcomponent
@endfor
<!-- End Project Modals -->
@endsection
