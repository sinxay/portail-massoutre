<?php

$stats_locations_table_header_row = array(
    "Agence",
    "CA TMI 2022",
    "CA TMI N-1",
    "% PROGRESS",
    "CA TOTAL N-1",
    "MARGE FINALE 2022",
    "MARGE FINALE N-1",
    "RESULTAT",
    "% DIFF",
    "USED",
    "RO",
    "RO N-1",
    "RI",
    "RI N-1",
    "DUREE",
    "REV/RA",
    "REV/JOUR",
    "NBJ",
    "NBJ N-1",
    "DIFF"
);



$agence_table_header_row = array(
    "AGENCE",
    "NUMERO",
    "ADRESSE",
    "CP",
    "MAIL",
    "CODE DISTRICT",
    "CODE VP",
    "CODE VU",
    "CODE GARE"
);

$cvo_table_header_row = array(
    "CVO",
    "NUMERO",
    "ADRESSE",
    "CP",
    "MAIL"
);



$marges_table_header_row = array(
    "Agence",
    "Marge finale 2021",
    "Marge finale 2022",
    "Résultat",
    "Salaire Chargé 2021",
    "Salaire Chargé 2022",
    "Résultat",
    "Divers 2021",
    "Divers 2022",
    "Résultat",
    "-72H 2021",
    "-72H 2022",
    "Résultat",
    "Montant primable 2021",
    "Montant primable 2022",
    "Résultat",
    "Indexation"
);

$commission_table_header_row = array(
    "Immatriculation",
    "Destination",
    "Type véhicule",
    "Type achat",
    "Categorie VU",
    "Modele",
    "Reference lot",
    "Finition",
    "Parc achat",
    "Nom acheteur",
    "Date de vente",
    "Date d'achat",
    "Prix achat net remisé",
    "Durée de stock",
    "Date premiere location",
    "Date derniere location",
    "Date stock",
    "Prix CG",
    "Prix Transport",
    "Montant Bonus Malus",
    "Commission CGA",
    "Commission achat",
    "Marge nette",
    "Vendeur",
    "Destination sortie",
    "Prix reservé",
    "Montant",
    "Client",
    "Marge financement",
    "Montant garantie",
    "Marge Pack",
    "Montant pack livraison",
    "Marges diverses",
    "Commission massoutre",
    "Montant publicité",
    "Montant revision",
    "Montant carrosserie",
    "Montant preparation",
    "Montant CT",
    "Prix transport CVO",
    "Date Facturation",
    "Options",
    "Type de com",
    "Frais Financier",
    "Marge",
    "Commission",
    "Taux com reprise",
    "Com reprise",
    "Contrôle marge negoce",
    "Contrôle date",
    "Frais remise en état",
    "Pdt complémentaire total",
    "Mois Vente"
);

$suivi_bdc_Locations_particuliers_table_header_row = array("Particuliers","BDC en cours", "BDC en cours N-1", "Variation %", "Nombre VH sur BDC mois N-1", "Variation sur total N-1", "Nombre VH facturés J-1", "Nombre VH facturé", "Variation % a date", "Nombre de VH", "Variation % sur total");
$suivi_bdc_Locations_marchands_table_header_row = array("Marchands", "Nombre VH J-1", "Nombre VH sur BDC mois en cours", "Variation %", "Nombre VH sur BDC N-1", "Variation sur total N-1", "Nombre VH facturés J-1", "Nombre VH facturé en cours", "Variation % a date", "Nombre de VH", "Variation % sur total");
$suivi_bdc_Locations_particuliersAndMarchands_table_header_row = array("Particuliers/Marchands","Nombre VH sur BDC J-1", "Nombre VH sur BDC en cours", "Variation %", "Nombre VH sur BDC N-1", "Variation sur total N-1", "Nombre VH facturés J-1", "Nombre VH facturé en cours", "Variation % a date", "Nombre de VH", "Variation % sur total");

$suivi_bdc_Negoce_particuliers_tableau_header_row = array("Particuliers", "BDC en cours", "BDC à date mois N-1", "Variation %", "BDC total M-1", "Marge en cours", "Marge à date mois N-1", "Variation %", "Marge totale N-1", "Variation à date sur mois total", "Nbre de facturé mois en cours", "Nbre facture à date N-1", "Variation %", "Nbre total factures N-1", "Marge facture mois en cours", "Marge factures mois en cours N-1", "Variation %", "Marge Totale N-1", "Variation à date N-1");
$suivi_bdc_Negoce_marchands_tableau_header_row = array("Marchands", "VH en cours", "VH à date mois N-1", "Variation %", "VH total M-1", "Marge en cours", "Marge à date mois N-1", "Variation %", "Marge totale N-1", "Variation à date sur mois total", "Nbre de facturé mois en cours", "Nbre facture à date N-1", "Variation %", "Nbre total factures N-1", "Marge facture mois en cours", "Marge factures mois en cours N-1", "Variation %", "Marge Totale N-1", "Variation à date N-1");
$suivi_bdc_Negoce_particuliersAndMarchands_tableau_header_row = array("Particuliers/Marchands", "BDC en cours", "BDC à date mois N-1", "Variation %", "BDC total M-1", "Marge en cours", "Marge à date mois N-1", "Variation %", "Marge totale N-1", "Variation à date sur mois total", "Nbre de facturé mois en cours", "Nbre facture à date N-1", "Variation %", "Nbre total factures N-1", "Marge facture mois en cours", "Marge factures mois en cours N-1", "Variation %", "Marge Totale N-1", "Variation à date N-1");

$payplan_table_header_row = array("Immatriculation", "Parc Achat", "Marge", "Acheteur", "Com Acheteur", "Repreneur Final", "Vendeur", "Com Vendeur", "Date d'Achat", "Date de Facturation");

$payplan_detail_reprise_collaborateur_table_header_row = array("Immatriculation", "Parc Achat", "Date de reprise finale");

$payplan_detail_achat_collaborateur_table_header_row = array("Immatriculation", "Parc Achat", "Date Achat");


$collaborateurs_payplan_header_row = array("Collaborateur", "Reprise");

$table_payplan_reprise_achat_header_row = array("Collaborateur", "Repreneur final", "Achat", "Achat MVC", "PACK_FIRST");


$imprimantes_table_header_row = array(
    "N° Série",
    "Agence",
    "Emplacement",
    "Prestataire",
    "Marque",
    "Modèle",
    "IP VPN",
    "IP locale"
);


$reseau_table_header_row = array(
    "Infrastructure",
    "IP Locale",
    "Passerelle",
    "Ip VPN"
);

$liste_telephonique_header_row = array(
    "Nom",
    "Prenom",
    "Ligne directe",
    "Numéro court",
    "Service",
    "Numero Service",
    "Numero court service"
);

$liste_telephonique_header_agence_row = array(
    "Service",
    "Numero Service",
    "Numero court service"
);
