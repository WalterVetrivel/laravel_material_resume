<div class="modal fade" id="project{{$id}}" role="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <div class="modal-header">
                <div class="modal-title">
                    <h3>{{ $project_title }}</h3>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Module</b></p>
                <p>{{ $project_subtitle }}</p>
                <p><b>Role</b></p>
                <p>{{ $role }}</p>
                <p><b>Project Description</b></p>
                <p>{{ $project_description }}</p>
                <p><b>Responsibilities</b></p>
                <ul class="list-unstyled">
                    @foreach($responsibilities as $responsibility)
                        <li><i class="fa fa-check mr-2"></i>{{ $responsibility }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
