<?php
    // mes models
    include_once('_article.model.php');
    include_once('_comment.model.php');
    include_once('_pub.model.php');
    include_once('_subComment.model.php');
    include_once('_teacher.model.php');
    include_once('_topic.model.php');
    include_once('_user.model.php');
    // end models
    try {
        $conf = new PDO('mysql:host=localhost;dbname=_english_cours','_rootingConf','@brdZero');
        $conf->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Throwable $th) {

?>
    <div class="container">
        <div class="col-lg-12 col-12 d-flex justify-content-center">
           <div class="alert alert-danger text-center">
            <h4 class="alert-haeading"><span class="fa fa-warning"></span> 500</h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>Une erreur vien de se produire, Lors de la tentive de connexion à la <b>Base des données</b></p>
            <p class="mb-0">Vérifiez bien votre fichier de configuration à la base de données ou Contactez l'<b>admin</b> <strong>E. Kawede</strong></p>
           </div>
        </div>
    </div>
<?php
        
    }
?>