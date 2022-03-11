@include('header')

<form method="post" action="upload" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title"><br>
    </div>

    <div>
        <label for="image">Image:</label><br>
        <input type="text" id="image" name="image"><br>
    </div>

    <div>
        <label for="price">Artist:</label><br>
        <input type="text" id="artist" name="artist"><br>
    </div>

    <div>
        <label for="exhibition">Exhibition:</label><br>
        <input type="text" id="exhibition" name="exhibition"><br><br>
    </div>

    <div>
        <label for="exhibition_id">Exhibition id:</label><br>
        <input type="text" id="exhibition_id" name="exhibition_id"><br><br>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

</form>

@include('footer')