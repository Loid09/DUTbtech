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

        if (isset($nom, $prenom, $tel, $mail, $site, $ecole)  && $nom !== '' && $prenom !== '' && $tel !== '' && $mail !== '' && $site !== '' && $ecole !== '') {
            //envoie des données
            $stmt = $dbh->prepare("INSERT INTO etudiant (nom, prenom, tel, mail, nom_ecole, emplacement, hackathon, theme, digitalMiss,miss_name_project,miss_description_project,miss_description_teams)
                     VALUES (:nom, :prenom, :tel, :mail, :nom_ecole, :emplacement, :hackathon, :theme, :digitalMiss,:missNameProject,:missDescriptionProject,:missDescriptionTeams)");
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
                ':missDescriptionTeams' => $missDescriptionTeams
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

        if (isset($nom_entreprise, $nom_prenom, $tel, $mail, $adresse)  && $nom_entreprise !== '' && $nom_prenom !== '' && $tel !== '' && $mail !== '' && $adresse !== '') {
            // var_dump($_POST['rdv']);
            //envoie des données
            $stmt = $dbh->prepare("INSERT INTO entreprise (nom_entreprise, 	adresse, nom_prenom, tel, mail, catalogue, souscrire,rdv,apport) VALUES (:nom_entrepise, :adresse, :nom_prenom, :tel, :mail, :catalogue, :souscrire,:rdv,:apport)");
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
            ]);
            $message = "Entreprise enregistré avec succès.";

            header("Location: index.html?message=" . urlencode($message));
            exit();
        } else {
            header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
        }
    } elseif ($type == "universite") {
        var_dump($_POST['choix1']);

        if ($_POST['universite-type'] == "publique") {
            # code...
            $nom_universite = $_POST['nomUniversite'];
            $nom_ecole = $_POST['nomEcole'];
            $tel = $_POST['telUP'];
            $mail = $_POST['emailUP'];
            $participer = $_POST['choix1'];
            $gaming = $_POST['gaming1'];
            switch ($_POST['raison']) {
                case 'raison1':
                    # code...
                    $raison = "Délai court pour organisation à l'interne";
                    break;
                case 'raison2':
                    # code...
                    $raison = "Période non propice pour cause de préparation aux examens de fin de semestre";
                    break;
                case 'raison3':
                    # code...
                    $raison = "autre raison";
                    break;

                default:
                    # code...
                    break;
            }

            $reserver = $_POST['reserver1'];
            $periode_meilleur = $_POST['periode'];
            $autre_raison = $_POST['autre'];
            if (saveUniversite($nom_universite, $nom_ecole, "", $tel, $mail, $participer, $gaming, $raison, $reserver, $periode_meilleur, $autre_raison)) {
                # code...
                $message = "Université enregistrées avec succès.";

                header("Location: index.html?message=" . urlencode($message));
                exit();
            }
        } elseif ($_POST['universite-type'] == "privee") {
            $nom_ecole = $_POST['nomEcolePrivee'];
            $adresse = $_POST['adresseEcolePrivee'];
            $tel = $_POST['telEcolePrivee'];
            $mail = $_POST['emailEcolePrivee'];
            $participer = $_POST['choix2'];
            $gaming = $_POST['gaming2'];
            // $raison = $_POST['raisonEcolePrivee'];
            switch ($_POST['raisonEcolePrivee']) {
                case 'raison1':
                    # code...
                    $raison = "Délai court pour organisation à l'interne";
                    break;
                case 'raison2':
                    # code...
                    $raison = "Période non propice pour cause de préparation aux examens de fin de semestre";
                    break;
                case 'raison3':
                    # code...
                    $raison = "autre raison";
                    break;

                default:
                    # code...
                    break;
            }
            $reserver = $_POST['reserver2'];
            $periode_meilleur = $_POST['periodeEcolePrivee'];
            $autre_raison = $_POST['autreEcolePrivee'];
            if (saveUniversite("", $nom_ecole, $adresse, $tel, $mail, $participer, $gaming, $raison, $reserver, $periode_meilleur, $autre_raison)) {
                # code...
                $message = "Ecole privée enregistré avec succès.";

                header("Location: index.html?message=" . urlencode($message));
                exit();
            }
        }
        # code...
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
 * @param mixed $tel
 * @param mixed $mail
 * @param mixed $participer
 * @param mixed $gaming
 * @param mixed $raison
 * @param mixed $reserver
 * @param mixed $periode_meilleur
 * @param mixed $autre_raison
 * @return bool
 */
function saveUniversite($nom_universite, $nom_ecole, $adresse, $tel, $mail, $participer, $gaming, $raison, $reserver, $periode_meilleur, $autre_raison)
{
    if (isset($nom_ecole, $tel, $mail)  && $nom_ecole !== '' && $tel !== '' && $mail !== '') {
        $dbh = new PDO('mysql:host=localhost;dbname=dut', 'root', '');
        $stmt = $dbh->prepare("INSERT INTO universite (nom_universite,nom_ecole,adresse,tel, mail, participer, gaming, raison, reserver, periode_meilleur,autre_raison) VALUES (:nom_universite, :nom_ecole,:adresse, :tel, :mail, :participer, :gaming, :raison,:reserver,:periode_meilleur,:autre_raison)");
        $stmt->execute([
            ':nom_universite' => $nom_universite ?? '',
            ':nom_ecole' => $nom_ecole ?? "",
            ':adresse' => $adresse ?? '',
            ':tel' => $tel ?? "",
            ':mail' => $mail ?? "",
            ':participer' => $participer ?? 0,
            ':gaming' => $gaming ?? 0,
            ':raison' => $raison ?? "",
            ':reserver' => $reserver ?? 0,
            ':periode_meilleur' => $periode_meilleur ?? "",
            ':autre_raison' => $autre_raison ?? "",
        ]);
        return true;
    } else {
        header("Location: index.html?err=" . urlencode("Veuillez remplir tous les champs !"));
    }
}
