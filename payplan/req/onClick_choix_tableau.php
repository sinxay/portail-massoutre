<?php

include  "../../include.php";


if ($_POST["choix_tableau_payplan"] && $_POST["choix_tableau_payplan"] !== "") {

    $choix_tableau_payplan = $_POST["choix_tableau_payplan"];
    // $table_reprise = "";
    // $table_achat = "";
    // $table_commission_total = "";


    switch ($choix_tableau_payplan) {
        case "collaborateurs":
            //récupérer les collaborateurs
            $collaborateurs = get_reprise_achat_pack_collaborateurs();
            $table_reprise_achat = create_table_payplan_reprise_achat($table_payplan_reprise_achat_header_row, $collaborateurs, true);
            // echo json_encode(array("table_reprise" => $table_reprise, "table_achat" => $table_achat));
            echo $table_reprise_achat;
            break;

        case "payplan":
            $payplan = get_payplan_date_facturation();
            $table_payplan = create_table_payplan($payplan, $payplan_table_header_row);
            // echo json_encode(array("table_reprise" => $table_reprise, "table_achat" => $table_achat));
            echo $table_payplan;
            break;

        case "commission":
            $datas_payplan = get_commission();
            $table_commission_total = create_table_commission($commission_table_header_row, $datas_payplan);
            // echo json_encode(array("table_commission_total" => $table_commission_total));
            echo $table_commission_total;
            break;
    }
}
