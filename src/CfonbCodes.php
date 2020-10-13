<?php

/*
 * This file is part of the CFONB Parser package.
 *
 * (c) Guillaume Sainthillier <hello@silarhi.fr>
 * (c) @fezfez <demonchaux.stephane@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Silarhi\Cfonb;

class CfonbCodes
{
    /** @var string[][] */
    public static $codes = [
        '01' => ['label' => 'Chèques payés', 'way' => 'D', 'swift_code' => 'CHK', 'swift_label' => 'Cheques', 'swift_way' => 'D'],
        '02' => ['label' => 'Remises de chèques', 'way' => 'C', 'swift_code' => 'CLR', 'swift_label' => 'Cash letters/Cheques remittance', 'swift_way' => 'C'],
        '03' => ['label' => 'Chèques impayés', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        '04' => ['label' => 'Versements espèces', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        '05' => ['label' => 'Virements reçus', 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        '06' => ['label' => 'Virements émis', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        '07' => ['label' => 'LCR/BOR domiciliés', 'way' => 'D', 'swift_code' => 'BOE', 'swift_label' => 'Bill of exchange', 'swift_way' => 'D'],
        '08' => ['label' => 'Prélèvements, TIP et Télérèglements domiciliés', 'way' => 'D', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'D'],
        '09' => ['label' => 'Prélèvements, TIP et Télérèglements émis', 'way' => 'C', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'C'],
        '10' => ['label' => 'Prélèvements, TIP et Télérèglements rejetés/impayés', 'way' => 'D/C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D/C'],
        '11' => ['label' => 'Factures cartes de paiement/DAB-GAB', 'way' => 'C/D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C/D'],
        '12' => ['label' => 'Rejet/retour de virement', 'way' => 'C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C'],
        '13' => ['label' => 'Virements de trésorerie reçus', 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        '14' => ['label' => 'Virements de trésorerie émis', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        '15' => ['label' => 'Remises de chèques sur caisse', 'way' => 'C', 'swift_code' => 'CLR', 'swift_label' => 'Cash letters/Cheques remittance', 'swift_way' => 'C'],
        '18' => ['label' => 'Autres virements reçus', 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        '21' => ['label' => 'Autres virements émis', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        '22' => ['label' => 'TIP domiciliés', 'way' => 'D', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'D'],
        '24' => ['label' => 'TIP émis', 'way' => 'C', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'C'],
        '26' => ['label' => 'TIP rejetés / impayés', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        '27' => ['label' => 'Prélèvements rejetés / impayés', 'way' => 'D/C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D/C'],
        '28' => ['label' => 'Factures cartes payées', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '29' => ['label' => 'Retrait DAB-GAB', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '30' => ['label' => 'Factures cartes remises', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        '31' => ['label' => "Remises d'effets à l'encaissement", 'way' => 'C', 'swift_code' => 'BOE', 'swift_label' => 'Bill of exchange', 'swift_way' => 'C'],
        '32' => ['label' => "Remises à l'escompte (papier commercial / chèques)", 'way' => 'C', 'swift_code' => 'BOE', 'swift_label' => 'Bill of exchange', 'swift_way' => 'C'],
        '33' => ['label' => 'Effets impayés', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        '34' => ['label' => 'Incidents sur effets', 'way' => 'C/D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C/D'],
        '35' => ['label' => "Remises de LCR/BOR à l'encaissement", 'way' => 'C', 'swift_code' => 'BOE', 'swift_label' => 'Bill of exchange', 'swift_way' => 'C'],
        '36' => ['label' => 'Remise de facture CB crédit', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '37' => ['label' => "Remises de LCR/BOR à l'escompte", 'way' => 'C', 'swift_code' => 'BOE', 'swift_label' => 'Bill of exchange', 'swift_way' => 'C'],
        '38' => ['label' => 'Facture CB impayée / rejetée', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '39' => ['label' => "Virements d'Origine Extérieur (VOE) reçus", 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        '41' => ['label' => "Transferts vers/en provenance de l'étranger", 'way' => 'D/C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D/C'],
        '42' => ['label' => 'Achats/Ventes de devises', 'way' => 'D/C', 'swift_code' => 'FEX', 'swift_label' => 'Foreign exchange', 'swift_way' => 'D/C'],
        '43' => ['label' => "Autres opérations avec l'étranger", 'way' => 'D/C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D/C'],
        '44' => ['label' => 'Virements internationaux émis', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        '45' => ['label' => 'Virements internationaux reçus', 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        '46' => ['label' => 'Achats de devises au comptant', 'way' => 'D', 'swift_code' => 'FEX', 'swift_label' => 'Foreign exchange', 'swift_way' => 'D'],
        '47' => ['label' => 'Ventes de devises au comptant', 'way' => 'C', 'swift_code' => 'FEX', 'swift_label' => 'Foreign exchange', 'swift_way' => 'C'],
        '48' => ['label' => 'Levée sur achat à terme', 'way' => 'D', 'swift_code' => 'FEX', 'swift_label' => 'Foreign exchange', 'swift_way' => 'D'],
        '49' => ['label' => 'Livraisons sur vente à terme', 'way' => 'C', 'swift_code' => 'FEX', 'swift_label' => 'Foreign exchange', 'swift_way' => 'C'],
        '51' => ['label' => 'Achats et Ventes de titres', 'way' => 'D/C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D/C'],
        '52' => ['label' => 'Diverses opérations sur titres', 'way' => 'D/C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D/C'],
        '53' => ['label' => 'Achats/Souscriptions VM/BF', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '54' => ['label' => 'Ventes de VM/BF', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '55' => ['label' => 'Solde de liquidation - BF', 'way' => 'C/D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C/D'],
        '56' => ['label' => 'Achats OPCVM', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '57' => ['label' => 'Ventes OPCVM', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '58' => ['label' => 'Achats TCN', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '59' => ['label' => 'Ventes TCN', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '61' => ['label' => 'Agios', 'way' => 'D/C', 'swift_code' => 'INT', 'swift_label' => 'Interest', 'swift_way' => 'D/C'],
        '62' => ['label' => 'Commissions et frais divers, dont intérêts compensatoires', 'way' => 'D', 'swift_code' => 'COM', 'swift_label' => 'Commission', 'swift_way' => 'D'],
        '63' => ['label' => 'Produits financiers', 'way' => 'C', 'swift_code' => 'INT', 'swift_label' => 'Interest', 'swift_way' => 'C'],
        '64' => ['label' => 'Commissions y compris taxes', 'way' => 'D', 'swift_code' => 'COM', 'swift_label' => 'Commission', 'swift_way' => 'D'],
        '65' => ['label' => 'Commissions hors taxes', 'way' => 'D', 'swift_code' => 'COM', 'swift_label' => 'Commission', 'swift_way' => 'D'],
        '66' => ['label' => 'Commissions non taxables', 'way' => 'D', 'swift_code' => 'COM', 'swift_label' => 'Commission', 'swift_way' => 'D'],
        '67' => ['label' => 'Taxes', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '68' => ['label' => "Autres opérations avec l'étranger - Débit", 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '69' => ['label' => "Autres opérations avec l'étranger - Crédit", 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        '70' => ['label' => 'Charges financières', 'way' => 'D', 'swift_code' => 'INT', 'swift_label' => 'Interets', 'swift_way' => 'D'],
        '71' => ['label' => 'Tirage de crédits', 'way' => 'C', 'swift_code' => 'LDP', 'swift_label' => 'Loan deposit', 'swift_way' => 'C'],
        '72' => ['label' => 'Echéance crédits', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '73' => ['label' => 'Emission de valeurs mobilières', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '74' => ['label' => 'Emission de titres de créances', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '75' => ['label' => 'Remboursement', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '76' => ['label' => 'Dépôt à terme', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        '77' => ['label' => 'Echéance dépôt à terme', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        '80' => ['label' => 'Achats autres TC', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '81' => ['label' => 'Ventes autres TC', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '82' => ['label' => 'Contrats', 'way' => 'C/D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C/D'],
        '83' => ['label' => 'Options', 'way' => 'C/D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C/D'],
        '84' => ['label' => 'Achats Bourses Etrangères', 'way' => 'D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'D'],
        '85' => ['label' => 'Ventes Bourses Etrangères', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '86' => ['label' => 'Opérations sur titres', 'way' => 'C/D', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C/D'],
        '87' => ['label' => 'Revenus sur titres', 'way' => 'C', 'swift_code' => 'SEC', 'swift_label' => 'Securities (used when entering a principal amount)', 'swift_way' => 'C'],
        '88' => ['label' => 'Commissions et droits de garde', 'way' => 'D', 'swift_code' => 'COM', 'swift_label' => 'Commission', 'swift_way' => 'D'],
        '89' => ['label' => 'Remboursement impôts étrangers', 'way' => 'C', 'swift_code' => 'REC', 'swift_label' => 'Tax reclaim', 'swift_way' => 'C'],
        '90' => ['label' => 'Facture Acceptée à Echéance émise', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        '91' => ['label' => 'Opérations diverses', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        '92' => ['label' => 'Centralisation de recettes', 'way' => 'C/D', 'swift_code' => 'CMI', 'swift_label' => 'Cash Management item - No detail', 'swift_way' => 'C/D'],
        '93' => ['label' => 'Centralisation de dépenses', 'way' => 'C/D', 'swift_code' => 'CMI', 'swift_label' => 'Cash Management item - No detail', 'swift_way' => 'C/D'],
        '94' => ['label' => 'Centralisation de trésorerie - Crédit', 'way' => 'C', 'swift_code' => 'CMI', 'swift_label' => 'Cash Management item - No detail', 'swift_way' => 'C'],
        '95' => ['label' => 'Centralisation de trésorerie - Débit', 'way' => 'D', 'swift_code' => 'CMI', 'swift_label' => 'Cash Management item - No detail', 'swift_way' => 'D'],
        '96' => ['label' => 'Télérèglements domiciliés', 'way' => 'D', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'D'],
        '97' => ['label' => 'Télérèglements émis', 'way' => 'C', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'C'],
        '98' => ['label' => 'Télérèglements rejetés/impayés', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        '99' => ['label' => 'Annulations et régularisations', 'way' => 'C/D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C/D'],
        'A1' => ['label' => 'Prélèvements SEPA émis', 'way' => 'C', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'C'],
        'A2' => ['label' => 'Prélèvements SEPA interentreprises émis', 'way' => 'C', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'C'],
        'A3' => ['label' => 'Prélèvements SEPA rejetés/impayés (émis par le débiteur ou sa banque)', 'way' => 'C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C'],
        'A4' => ['label' => 'Prélèvements SEPA interentreprises rejetés/impayés (émis par le débiteur ou sa banque)', 'way' => 'C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C'],
        'A5' => ['label' => 'Prélèvements SEPA interentreprises – reversements émis (par le créancier ou sa banque)', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        'A6' => ['label' => 'Prélèvements SEPA interentreprises – reversements émis (par le créancier ou sa banque)', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        'B1' => ['label' => 'Prélèvements SEPA domiciliés', 'way' => 'D', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'D'],
        'B2' => ['label' => 'Prélèvements SEPA interentreprises domiciliés', 'way' => 'D', 'swift_code' => 'DDT', 'swift_label' => 'Direct Debit Item', 'swift_way' => 'D'],
        'B3' => ['label' => 'Prélèvements SEPA rejetés/impayés reçus (par le créancier)', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        'B4' => ['label' => 'Prélèvements SEPA interentreprises rejetés/impayés reçus (par le créancier)', 'way' => 'D', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'D'],
        'B5' => ['label' => 'Prélèvements SEPA – reversements reçus (par le débiteur)', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        'B6' => ['label' => 'Prélèvements SEPA interentreprises – reversements reçus (par le débiteur)', 'way' => 'C', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'C'],
        'C1' => ['label' => 'Virement SEPA instantané émis', 'way' => 'D', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'D'],
        'C2' => ['label' => 'Virement SEPA instantané reçu', 'way' => 'C', 'swift_code' => 'TRF', 'swift_label' => 'Transfer', 'swift_way' => 'C'],
        'C3' => ['label' => 'Crédit suite à demande de retour de fonds (« recall ») d’un virement SEPA instantané émise (par le donneur d’ordre)', 'way' => 'C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C'],
        'C4' => ['label' => 'Débit suite à demande de retour de fonds (« recall ») d’un virement SEPA instantané reçue (par le bénéficiaire)', 'way' => 'D', 'swift_code' => 'MSC', 'swift_label' => 'Miscellaneous', 'swift_way' => 'D'],
        'C5' => ['label' => 'Recrédit du Donneur d’Ordre', 'way' => 'C', 'swift_code' => 'RTI', 'swift_label' => 'Returned item', 'swift_way' => 'C'],
    ];
}
