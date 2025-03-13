<x-mainlayout :title="'Notice Board'" :heading="'Create Notice'">

    <div class="container">
        <h2>Upload Notice</h2>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('notices.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Notice Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label for="file" class="form-label">Upload PDF</label>
                <input type="file" name="file" class="form-control" accept="application/pdf" required>
            </div>
    
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>

</x-mainlayout>

