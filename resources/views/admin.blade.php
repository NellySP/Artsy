@include('header')

<form method="post" action="upload" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image">
    </div>

    <div>
        <label for="price">Artist:</label>
        <input type="text" id="artist" name="artist">
    </div>

    <div>
        <label for="exhibition">Exhibition:</label>
        <input type="text" id="exhibition" name="exhibition">
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

</form>

@include('footer')