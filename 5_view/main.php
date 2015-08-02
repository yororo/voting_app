<?php
$configurationModel = new ConfigurationModel();
$voteModel = new VoteModel($configurationModel->getSecurityLevel());
$voteController = new VoteController($voteModel);

$id = filter_input(INPUT_GET, 'id');
$rating = filter_input(INPUT_GET, 'rating');

if($id != '' && $rating != ''){
    $voteController->Vote($id, $rating);
}

?>
<body>
    <nav>
        <div class="nav-wrapper">
            <a href="./" class="brand-logo">
                <?php 
                echo $configurationModel->getSiteName();
                ?>
            </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./">HOME</a></li>
          </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s9">
                <h3>Entry</h3>
            </div>
            <div class="col s3">
                <h3>Rating</h3>
            </div>
        </div>
    </div>
    <div class="container">
<?php 

$entryListView = new EntryListView($voteModel);
echo $entryListView->output();

?>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="./0_assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./0_assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="./0_assets/js/dropdownController.js"></script>
</body>