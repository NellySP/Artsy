@include('header')

<p>Here you can do admin stuff</p>
<p>Like add art?</p>

<!-- Add controller for this? To add to database -->

<form action="/action_page.php">
    <label for="artwork">Artwork:</label><br>
    <input type="text" id="artwork" name="artwork"><br>
    <label for="artist">Artist name:</label><br>
    <input type="text" id="artist" name="artist"><br>
    <label for="year">Year:</label><br>
    <input type="text" id="year" name="year"><br>
    <label for="exhibition">Exhibition:</label><br>
    <input type="text" id="exhibition" name="exhibition"><br><br>
    <input type="submit" value="Submit">
</form>

@include('footer')