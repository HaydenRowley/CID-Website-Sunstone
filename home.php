<!--Splitting the header and footer into separate documents makes things easier!-->

<!-- <img src="img/logo_CID.png" style="width: 200px; height: 200px;"> -->
<?php
  include_once 'header.php';
?>
<div class="container">
    <div class="header">
        <div class="header">
            <h1>Home Page</h1>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
        <div class="card bg-dark text-white mb-3" style="max-width: 20rem; height: 11rem;">
            <div class="card-body">
                <h4 class="card-title text-white">Create New Report</h4>
                <p class="card-text text-white">Create new reports ready to upload to the system.<br>   </p>
                <a href="https://docs.google.com/document/d/1gQhS_zlQfctPw4c7l-zHmYDdHu4A8I9os6np6oR2nQo/edit?usp=sharing" class="btn btn-primary">Click To Create Report</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-dark text-white" style="width: 18rem; height: 11rem;">
            <div class="card-body ">
                <h5 class="card-title text-white">Reports</h5>
                <p class="card-text text-white">View all reports and upload new ones.</p>
                <a href="https://drive.google.com/drive/folders/1wsKtD9d-w5AlLH8vzxfRH7AcAWdUhxOJ?usp=sharing" class="btn btn-primary">Click To View Reports</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-dark text-white" style="width: 18rem; height: 11rem;">
            <div class="card-body ">
                <h5 class="card-title text-white">Evidence Lockup</h5>
                <p class="card-text text-white">Check all evidence relating to your cases.</p>
                <a href="https://docs.google.com/spreadsheets/d/1I-8p9lTGtwaYaaRiMd5A-eBqNBnmTLVoGn6lYks1O0g/edit?usp=sharing" class="btn btn-primary">Click To View Evidence</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card bg-dark text-white" style="width: 18rem; height: 11rem;">
            <div class="card-body ">
                <h5 class="card-title text-white">Add Evidence</h5>
                <p class="card-text text-white">Add new evidence to the lock up.</p>
                <a href="https://forms.gle/q8RYNqZ2G5bAinEr6" class="btn btn-primary">Click To Add Evidence</a>
            </div>
        </div>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>