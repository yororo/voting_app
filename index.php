<!DOCTYPE html>
<html>

    <?php
//    classes
    include '/2_lib/EntryClass.php';
    
//    controllers
    include '/3_controller/VoteController.php';
    
//    models 
    include '/4_model/VoteModel.php';
    include '/4_model/ConfigurationModel.php';

//    views
    include '/5_view/EntryView.php';
    include '/5_view/EntryListView.php';

//    html
    include '/1_includes/header.php';
    include '/5_view/main.php';
    include '/1_includes/footer.php';
    ?>
</html>