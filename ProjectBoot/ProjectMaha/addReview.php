
<form method="post" enctype="multipart/form-data" action="processReview.php">
<h3>Add Review</h3>
<p>Movie Category<br/>
    <select category="category">
        <option>Action</option>
        <option>Comedy</option>
        <option>Horror</option>
        <option>Romance</option>
    </select>
</p>    
<p>Movie Title<br/>
<input type="text" title="title" />
</p>
<p>Movie Rating<br/>
<input type="text" rating="rating" />
</p>
<p>Movie Review<br/>
<input type="text" review="review" />
</p>
<input type="submit">
<input type="reset">
</form>