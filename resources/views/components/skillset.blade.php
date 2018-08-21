<div class="skillset py-3">
    <h3>{{ $skillset_name }}</h3>
    <ul class="list-unstyled">
        @foreach($skills as $skill)
            <li><i class="fa fa-check mr-2"></i>{{ $skill }}</li>
        @endforeach
    </ul>
</div>
