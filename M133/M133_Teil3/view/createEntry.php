<?php 
class CreateEntry {
    
    function __construct(){
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
            echo '
                <div class="element">
                	<form>
                		<label for="blogTitle">Title of your entry</label>
                		<br>
                	    <input id="blogTitle" class="entryInput" type="text" placeholder="Give your entry a proper title." required>
                	    <br><br>
                        <label for="blogAuthor">Your Name</label>
                        <br>
                        <input id="blogAuthor" class="entryInput" type="text" placeholder="This name will be displayed." required>
                        <br><br>
                        <textarea class="blogdescription" placeholder="Describe here what you want to tell the world. Have fun and be creative!" required></textarea>
                        <br><br>
                        <label for="uploadimg">Upload a number of images to illustrate your entry</label>
                        <br>
                        <input id="uploadimg" class="entryInput" type="file" multiple="multiple" accept="image/*">
                        <br><br>
                        <button id="button02">Submit Entry</button>
                	</form>
                
                </div>
            ';
        } else {
            echo '
        <div class="element">
            <p>To create an entry, you need to <a href="login">login</a> first.
        </div>
        ';
        }
    }
}
?>