<x-mainlayout :title="'Notice Board'" :heading="'Edit Notice'">

    <div class="container">
        <h2>Edit Notice</h2>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('notices.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Notice Title</label>
                <input type="text" name="title" class="form-control" value="{{ $notice->title }}" required>
            </div>
    
            <div class="mb-3">
                <label for="file" class="form-label">Replace PDF (optional)</label>
                <input type="file" name="file" class="form-control" accept="application/pdf">
                <p>Current file: <a href="{{ route('notices.show', $notice->id) }}" target="_blank">View PDF</a></p>
            </div>
    
            <button type="submit" class="btn btn-success">Update Notice</button>
            <a href="{{ route('notices.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

</x-mainlayout>

