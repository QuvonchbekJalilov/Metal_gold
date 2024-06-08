<x-layouts.admin>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                <h3>Team Information</h3>
                <a href="{{ route('team.index') }}" class="btn btn-secondary float-right">Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Name</h5>
                        <p>{{ $team->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Title (Uzbek)</h5>
                        <p>{{ $team->title_uz }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Title (Russian)</h5>
                        <p>{{ $team->title_ru }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Title (English)</h5>
                        <p>{{ $team->title_en }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Telegram</h5>
                        <p>{{ $team->telegram }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Instagram</h5>
                        <p>{{ $team->instagram }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Facebook</h5>
                        <p>{{ $team->facebook }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Youtube</h5>
                        <p>{{ $team->youtube }}</p>
                    </div>
                    <div class="col-md-12">
                        <h5>Photo</h5>
                        <div class="team-image">
                            <img src="{{ asset('storage/' . $team->photo) }}" alt="Team Image" style="height: 90px;" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('team.edit', ['team' => $team->id]) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('team.destroy', ['team' => $team->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
