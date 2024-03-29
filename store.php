<?php

$dbh = new PDO('mysql:host=localhost;dbname=dut', 'root', '');
if (isset($_POST["ok"]) && isset($_POST['type'])) {
    $type = $_POST['type'];

    if ($type == "etudiant") {
        $nom = $_POST["nomEt"];
        $prenom = $_POST["prenom"];
        $tel = $_POST["tel"];
        $mail = $_POST["mail"];
        if ($_POST["ecole"] != "autre") {
            $ecole = $_POST["ecole"];
        } else {
            $ecole = $_POST["autreChoix"];
        }
        var_dump($_POST["ecole"]);


        $site = $_POST["site"];
        $hackathon = $_POST["type-jeux"] == 'hackathon' ? 1 : 0;
        $digitalMiss = $_POST["type-jeux"] == 'digitalMiss' ? 1 : 0;
        $theme = null;
        $missNameProject = null;
        $missDescriptionProject = null;
        $missDescriptionTeams = null;
        if ($digitalMiss == 1) {
            $missNameProject = $_POST['miss_name_project'];
            $missDescriptionProject = $_POST['miss_description_project'];
            $missDescriptionTeams = $_POST['miss_description_teams'];
        }
        if ($hackathon == 1) {
            $theme = $_POST['theme'];
        }
        $comment = $_POST["commentEtu"];

        if (isset($nom, $prenom, $tel, $mail, $site, $ecole)  && $nom !== '' && $prenom !== '' && $tel !== '' && $mail !== '' && $site !== '' && $ecole !== '') {
            //envoie des données
            $stmt = $dbh->prepare("INSERT INTO etudiant (nom, prenom, tel, mail, nom_ecole, emplacement, hackathon, theme, digitalMiss,miss_name_project,miss_description_project,miss_description_teams, commentaire)
                     VALUES (:nom, :prenom, :tel, :mail, :nom_ecole, :emplacement, :hackathon, :theme, :digitalMiss,:missNameProject,:missDescriptionProject,:missDescriptionTeams, :commentaire)");
            $stmt->execute([
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':tel' => $tel,
                ':nom_ecole' => $ecole,
                ':mail' => $mail,
                ':emplacement' => $site,
                ':hackathon' => $hackathon,
                ':theme' => $theme,
                ':digitalMiss' => $digitalMiss,
                ':missNameProject' => $missNameProject,
                ':missDescriptionProject' => $missDescriptionProject,
                ':missDescriptionTeams' => $missDescriptionTeams,
                ':commentaire' => $comment
            ]);
            $message = "Vous vous êtes inscrit avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        } else {
            header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
        }


        // Affichage d'un message avec pop-up
        //echo "<script>window.onload = function() { alert('oki'); }</script>";
    } elseif ($type == "entreprise") {
        # code...
        $nom_entreprise = $_POST['nomEntreprise'];
        $adresse = $_POST['adresseEp'];
        $nom_prenom = $_POST['nomEP'];
        $tel = $_POST['telEP'];
        $mail = $_POST['emailEP'];
        $catalogue = $_POST['pack'];
        $souscrire = $_POST['souscrire'] ?? 0;
        $rdv = $_POST['rdv'] ?? 0;
        $apport = $_POST['apport'];
        $comment = $_POST['commentEnt'];

        if (isset($nom_entreprise, $nom_prenom, $tel, $mail, $adresse)  && $nom_entreprise !== '' && $nom_prenom !== '' && $tel !== '' && $mail !== '' && $adresse !== '') {
            // var_dump($_POST['rdv']);
            //envoie des données
            $stmt = $dbh->prepare("INSERT INTO entreprise (nom_entreprise, 	adresse, nom_prenom, tel, mail, catalogue, souscrire,rdv,apport, commentaire) VALUES (:nom_entrepise, :adresse, :nom_prenom, :tel, :mail, :catalogue, :souscrire,:rdv,:apport, :commentaire)");
            $stmt->execute([
                ':nom_entrepise' => $nom_entreprise,
                ':adresse' => $adresse,
                ':nom_prenom' => $nom_prenom,
                ':tel' => $tel,
                ':mail' => $mail,
                ':catalogue' => $catalogue,
                ':souscrire' => $souscrire,
                ':rdv' => $rdv,
                ':apport' => $apport,
                ':commentaire' => $comment,
            ]);
            $message = "Entreprise enregistré avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        } else {
            header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
        }
    } elseif ($type == "autre_personne") {
        # code...
        $nomO = $_POST['nomO'];
        $prenomO = $_POST['prenomO'];
        $telO = $_POST['telO'];
        $mailO = $_POST['mailO'];
        $comment = $_POST['comment'];


        if (isset($nomO, $prenomO, $telO)  && $nomO !== '' && $prenomO !== '' && $telO !== '') {
            // var_dump($_POST['comment']);
            $stmt = $dbh->prepare("INSERT INTO autre (nom, prenom, tel, mail, commentaire) VALUES (:nom, :prenom, :tel, :mail, :commentaire)");
            $stmt->execute([
                ':nom' => $nomO,
                ':prenom' => $prenomO,
                ':tel' => $telO,
                ':mail' => $mailO,
                ':commentaire' => $comment,

            ]);
            $message = "Vous êtes enregistré avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        } else {
            header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
        }
    } elseif ($type == "universite") {

        $nom_universite = $_POST['nomUniversite'];
        $nom_ecole = $_POST['nomEcole'];
        $contact = $_POST['nomPrC'];
        $tel = $_POST['telUP'];
        $mail = $_POST['emailUP'];

        $comment = $_POST['commentU'];
        if (saveUniversite($nom_universite, $nom_ecole, "", $contact,  $tel, $mail, $comment)) {
            # code...
            $message = "Université publique enregistrées avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        }
    } elseif ($type == "privee") {
        $nom_ecole = $_POST['nomEcolePrivee'];
        $adresse = $_POST['adresseEcolePrivee'];
        $contact = $_POST['nomPrCP'];
        $tel = $_POST['telEcolePrivee'];
        $mail = $_POST['emailEcolePrivee'];

        $comment = $_POST['commentEc'];
        if (saveUniversite("", $nom_ecole, $adresse, $contact, $tel, $mail, $comment)) {
            # code...
            $message = "Ecole privée enregistré avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        }
    }
} else {
    header("Location: index.html?err=" . urlencode("Veuillez remplir le formulaire !"));
}




/**
 * Summary of saveUniversite
 * sauvegarde les données de l'université
 * @param mixed $nom_universite
 * @param mixed $nom_ecole
 * @param mixed $adresse
 * @param mixed $contact
 * @param mixed $tel
 * @param mixed $mail
 * @param mixed $comment
 * @return bool
 */
function saveUniversite($nom_universite, $nom_ecole, $adresse, $contact, $tel, $mail, $comment)
{
    if (isset($nom_ecole, $contact, $tel, $mail)  && $nom_ecole !== '' && $tel !== '' && $mail !== '' && $contact !== '') {
        $dbh = new PDO('mysql:host=localhost;dbname=dut', 'root', '');
        $stmt = $dbh->prepare("INSERT INTO universite (nom_universite,nom_ecole,adresse,contact, tel, mail , commentaire) VALUES (:nom_universite, :nom_ecole,:adresse,:contact, :tel, :mail, :commentaire)");
        $stmt->execute([
            ':nom_universite' => $nom_universite ?? '',
            ':nom_ecole' => $nom_ecole ?? "",
            ':adresse' => $adresse ?? '',
            ':contact' => $contact,
            ':tel' => $tel ?? "",
            ':mail' => $mail ?? "",
            ':commentaire' => $comment,
        ]);
        return true;
    } else {
        header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
    }
}
