<!DOCTYPE html>
<html>
  <head>
    <title>My Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
     <div class="container">

      <form class="form-horizontal">
        <h2 class="form-signin-heading">Please Add Post</h2>
          <div class="control-group">
              <label for="postTitle" class="control-label">Title</label>
              <div class="controls">
                <input type="text" placeholder="Title" id="postTitle">
              </div>
            </div>
            <div class="control-group">
              <label for="postDescription" class="control-label">Description</label>
              <div class="controls">
                 <textarea name="Description" id="postDescription"></textarea>
              </div>
            </div>
            <div class="control-group">
               <div class="controls">
                  <button class="btn btn-primary" type="submit">Post It</button>
                  <button class="btn btn-primary" type="reset">Cancel</button>
              </div>
            </div>
         
        
      </form>

    </div> <!-- /container -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>