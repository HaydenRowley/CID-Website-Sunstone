<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h1>Reports</h1>
        </div>
        <div class="col"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white mb-3" style="max-width: 20rem; height: 11rem;">
                <div class="card-body">
                    <h4 class="card-title text-white">Upload Report</h4>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        <span><br></span>
                        <button type="submit" name="submit" class="btn btn-primary">UPLOAD</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-dark text-white mb-3" style="max-width: 20rem; height: 11rem;">
                <div class="card-body">
                    <h4 class="card-title text-white">View Reports</h4>
                    <a href="uploads" class="btn btn-primary">Click to open a folder</a>
                </div>
            </div>
        </div>
        <div class="col">
            <span><br></span>
        </div>
    </div>
</div>

<?php
  include_once 'footer.php';
?>
