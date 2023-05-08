<?php

$dbh = new PDO('mysql:host=localhost;dbname=dut', 'root', '');
if (isset($_POST["ok"])){
    $type = $_POST['type'];
    if ($type == "etudiant"){
        $nom = $_POST["nomEt"];
        $prenom = $_POST["prenom"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        $ecole= $_POST["ecole"];
        $site = $_POST["site"];
        $jeux = $_POST["type-jeux"];

        //envoie des données
        $stmt = $dbh->prepare("INSERT INTO etudiant (nom, prenom, tel, mail, nom_ecole, emplacement, jeux) VALUES (:nom, :prenom, :tel, :mail, :nom_ecole, :emplacement, :jeux)");
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':tel' => $tel,
            ':nom_ecole' => $ecole,
            ':mail' => $mail,
            ':emplacement' => $site,
            ':jeux' => $jeux,
        ]);
        echo "<p>Données enregistrées avec succès.</p>";
    }elseif ($type == "entreprise") {
        # code...
        $nom_entrepise = $_POST['nomEntreprise'];
        $adresse = $_POST['adresseEp'];
        $nom_prenom = $_POST['nomEP'];
        $tel = $_POST['telEP'];
        $mail = $_POST['emailEP'];
        $catalogue = $_POST['pack'];
        $souscrire = $_POST['souscrire']?? 0;
        $rdv = $_POST['rdv']?? 0;
        $apport = $_POST['apport'];

        // var_dump($_POST['rdv']);
        //envoie des données
        $stmt = $dbh->prepare("INSERT INTO entreprise (nom_entreprise, 	adresse, nom_prenom, tel, mail, catalogue, souscrire,rdv,apport) VALUES (:nom_entrepise, :adresse, :nom_prenom, :tel, :mail, :catalogue, :souscrire,:rdv,:apport)");
        $stmt->execute([
            ':nom_entrepise' => $nom_entrepise,
            ':adresse' => $adresse,
            ':nom_prenom' => $nom_prenom,
            ':tel' => $tel,
            ':mail' => $mail,
            ':catalogue' => $catalogue,
            ':souscrire' => $souscrire,
            ':rdv' => $rdv,
            ':apport' => $apport,
        ]);
        
    }elseif ($type == "universite") {
        var_dump($_POST);
       
        if ($_POST['universite-type']=="publique") {
            # code...
            $nom_universite= $_POST['nomUniversite'];
            $nom_ecole=$_POST['nomEcole'];
            $tel=$_POST['telUP'];
            $mail=$_POST['emailUP'];
            $participer=$_POST['choix1'];
            $raison=$_POST['raison'];
            $reserver=$_POST['reserver1'];
            $periode_meilleur=$_POST['periode'];
            $autre_raison = $_POST['autre'];
            if (saveUniversite($nom_universite, $nom_ecole, "", $tel, $mail, $participer, $raison, $reserver, $periode_meilleur, $autre_raison)) {
                # code...
                echo "<p>Université enregistrées avec succès.</p>";
            }
        }elseif ($_POST['universite-type'] == "privee") {
            $nom_ecole = $_POST['nomEcolePrivee'];
            $adresse= $_POST['adresseEcolePrivee'];
            $tel = $_POST['telEcolePrivee'];
            $mail = $_POST['emailEcolePrivee'];
            $participer = $_POST['choix2'];
            $raison = $_POST['raisonEcolePrivee'];
            $reserver = $_POST['reserver2'];
            $periode_meilleur = $_POST['periodeEcolePrivee'];
            $autre_raison = $_POST['autreEcolePrivee'];
            if (saveUniversite("", $nom_ecole,$adresse,$tel, $mail, $participer, $raison, $reserver, $periode_meilleur, $autre_raison)) {
                # code...
                echo "<p>Ecole privée enregistrées avec succès.</p>";
            }
        }
        # code...
    }

}

/**
 * Summary of saveUniversite
 * sauvegarde les données de l'université
 * @param mixed $nom_universite
 * @param mixed $nom_ecole
 * @param mixed $adresse
 * @param mixed $tel
 * @param mixed $mail
 * @param mixed $participer
 * @param mixed $raison
 * @param mixed $reserver
 * @param mixed $periode_meilleur
 * @param mixed $autre_raison
 * @return bool
 */
function saveUniversite($nom_universite,$nom_ecole,$adresse,$tel,$mail,$participer,$raison,$reserver,$periode_meilleur,$autre_raison)
{
    $dbh = new PDO('mysql:host=localhost;dbname=dut', 'root', '');
    $stmt = $dbh->prepare("INSERT INTO universite (nom_universite,nom_ecole,adresse,tel, mail, participer, raison, reserver, periode_meilleur,autre_raison) VALUES (:nom_universite, :nom_ecole,:adresse, :tel, :mail, :participer, :raison,:reserver,:periode_meilleur,:autre_raison)");
    $stmt->execute([
        ':nom_universite' => $nom_universite??'',
        ':nom_ecole' => $nom_ecole??"",
        ':adresse'=>$adresse??'',
        ':tel' => $tel ?? "",
        ':mail' => $mail ?? "",
        ':participer' => $participer ?? 0,
        ':raison' => $raison ?? "",
        ':reserver' => $reserver ?? 0,
        ':periode_meilleur' => $periode_meilleur ?? "",
        ':autre_raison' => $autre_raison ?? "",
    ]);
    return true;
}
