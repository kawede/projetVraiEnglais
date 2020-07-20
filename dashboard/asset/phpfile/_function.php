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
    session_start();
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=_english_cours','root','');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        function comptVisitor($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _visitor');
            $re->execute();
            $re = $re->fetchColumn();
            return (int)$re;
        }
        function comptUser($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _user');
            $re->execute();
            $re = $re->fetchColumn();
            return (int)$re;
        }
        function comptTeacher($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _teacher WHERE _actif = ?');
            $re->execute([1]);
            $re = $re->fetchColumn();
            return (int)$re;
        }
        function comptTeacherOff($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _teacher WHERE _actif = ?');
            $re->execute([0]);
            $re = $re->fetchColumn();
            return (int)$re;
        }
        function comptTopicsForNotif($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _topic WHERE _del = ?');
            $re->execute([0]);
            $re = $re->fetchColumn();
            return (int)$re;
        }
        function comptNotif($bdd){
            return comptTeacherOff($bdd)+comptTopicsForNotif($bdd);
        }
        function comptTopic($bdd){
            $re = $bdd->prepare('SELECT COUNT(*) FROM _topic WHERE _del = ?');
            $re->execute([0]);
            $re = $re->fetchColumn();
            return (int)$re;
        }
        // connecting admin
        function _connectionAdmin($email,$password,$bdd){
            $requete = $bdd->prepare('SELECT * FROM _admin WHERE _email = ? AND _password = ?');
            $requete->execute(array($email,md5($password)));
            $requete = $requete->fetch();
            if(!empty($requete)){
                $_SESSION['_kawToken'] = md5($requete['id']);
                $_SESSION['access'] = $requete;
                return 1;
            }else{
                return 0;
            }
        }
        // end connecting admin
        function CompteVisitor($bdd){
            // $visit
        }
        // init user 
        function getCurrentSession(){
            if(isset($_SESSION['access']) && !empty($_SESSION['access'])){
                // echo($_SESSION['access']['id']);
                $human = $_SESSION['access'];

                $id = md5($human['id']);
                $name1 = $human['_name'];
                $name2 = $human['_postnom'];
                $email = $human['_email'];

                return new User($id,$name1,$name2,$email);
            }
        }
        // end
        // connecting teacher
        function _connectTeacher($email,$password,$bdd){
            $requete = $bdd->prepare('SELECT * FROM _teacher WHERE _email = ? AND _password = ? AND ');
            $requete->execute(array($email,$password));
            $requete = $requete->fetch();
            if(!empty($requete)){
                $_SESSION['_kawTokenTeacher'] = md5($requete['id']);
                $_SESSION['accessTeacher'] = $requete;
                return 1;
            }else{
                return 0;
            }
        }
        // end connecting teacher
        // add teacher
        function _addTeacher($name,$postnom,$email,$telephone,$grade,$residence,$organisation,$password,$bdd){
            $req = $bdd->prepare('INSERT INTO _teacher(`_nom`,`_postnom`,`_grade`,`_email`,`_telephone`,`_organisation`,`_residence`,`_password`,`_actif`) 
            VALUES (?,?,?,?,?,?,?)');
            if($req->excute([$name,$postnom,$grade,$email,$telephone,$organisation,$residence,$password,0])){
                return 1;
            }else{
                return 0;
            }
        }
        // -----------------------------
           // Registration
           function _registration($name,$email,$phone,$password,$bdd){
            $req = $bdd->prepare('INSERT INTO _registration(`_name`,`_email`,`_phone`,`_password`) 
            VALUES (?,?,?,?)');
            if($req->excute([$_name,$_email,$_phone,$_password])){
                return 1;
            }else{
                return 0;
            }
        }
        // -----------------------------
    } catch (\Throwable $th) {

?>
    <div class="container">
        <div class="col-lg-12 col-12 d-flex justify-content-center">
           <div class="alert alert-danger text-center" style="background-color:blue;">
            <h4 class="alert-haeading" style="color: red;font-family: tahoma;"><span class="fa fa-warning"style="color: red;"></span > 500</h4>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p style="color: black; font-family: tahoma;">Une erreur vien de se produire, Lors de la tentive de connexion à la <b>Base des données</b></p>
            <p class="mb-0" style="color: black; font-family: tahoma;">Vérifiez bien votre fichier de configuration à la base de données ou Contactez l'<b>admin</b> <strong>E. Kawede</strong></p>
           </div>
        </div>
    </div>
<?php
        
    }
?>