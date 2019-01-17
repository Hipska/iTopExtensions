<?php
// Copyright (C) 2010-2014 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Localized data
 *
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Menu:TechnicalRequestManagement' => 'Meldingen',
	'Menu:TechnicalRequestManagement+' => 'Meldingen',
	'Menu:TechnicalRequestManagementProvider' => 'Helpdesk leverancier',
	'Menu:TechnicalRequestManagementProvider+' => 'Helpdesk leverancier',
	'Menu:TechnicalRequest:Provider' => 'Open meldingen overgebracht naar leverancier',
	'Menu:TechnicalRequest:Provider+' => 'Open meldingen overgebracht naar leverancier',
	'Menu:TechnicalRequest:Overview' => 'Overzicht',
	'Menu:TechnicalRequest:Overview+' => 'Meldingenoverzicht',
	'Menu:NewTechnicalRequest' => 'Nieuwe melding',
	'Menu:NewTechnicalRequest+' => 'Maak een nieuwe melding aan',
	'Menu:SearchTechnicalRequests' => 'Zoek naar meldingen',
	'Menu:SearchTechnicalRequests+' => 'Zoek naar meldingen',
	'Menu:TechnicalRequest:Shortcuts' => 'Snelkoppelingen',
	'Menu:TechnicalRequest:Shortcuts+' => '',
	'Menu:TechnicalRequest:MyRequests' => 'Meldingen toegewezen aan mij',
	'Menu:TechnicalRequest:MyRequests+' => 'Meldingen toegewezen aan mij (als behandelaar)',
	'Menu:TechnicalRequest:MySupportRequests' => 'Meldingen van mij',
	'Menu:TechnicalRequest:MySupportRequests+' => 'Meldingen van mij',
	'Menu:TechnicalRequest:EscalatedRequests' => 'Dringende meldingen',
	'Menu:TechnicalRequest:EscalatedRequests+' => 'Dringende meldingen',
	'Menu:TechnicalRequest:OpenRequests' => 'Alle openstaande meldingen',
	'Menu:TechnicalRequest:OpenRequests+' => 'Alle openstaande meldingen',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Meldingen toegewezen aan mij',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Meldingen van de afgelopen 14 dagen (per type)',
	'UI-RequestManagementOverview-Last-14-days' => 'Meldingen van de afgelopen 14 dagen (per dag)',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open meldingen per status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open meldingen per medewerker',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open meldingen per type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open meldingen per organisatie',
	'Class:TechnicalRequest:KnownErrorList' => 'Bekende fouten',
));

// Dictionnary conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: TechnicalRequest
//

Dict::Add('NL NL', 'Dutch', 'Nederlands', array(
	'Class:TechnicalRequest' => 'Gebruikersmeldingen',
	'Class:TechnicalRequest+' => '',
	'Class:TechnicalRequest/Attribute:status' => 'Status',
	'Class:TechnicalRequest/Attribute:status+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:new' => 'Nieuw',
	'Class:TechnicalRequest/Attribute:status/Value:new+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_tto' => 'Geëscalleerd TTO',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:assigned' => 'Toegewezen',
	'Class:TechnicalRequest/Attribute:status/Value:assigned+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_ttr' => 'Geëscaleerd TTR',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:waiting_for_approval' => 'Wacht op goedkeuring',
	'Class:TechnicalRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:approved' => 'Goedgekeurd',
	'Class:TechnicalRequest/Attribute:status/Value:approved+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:rejected' => 'Afgewezen',
	'Class:TechnicalRequest/Attribute:status/Value:rejected+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:pending' => 'Wachtend',
	'Class:TechnicalRequest/Attribute:status/Value:pending+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:resolved' => 'Opgelost',
	'Class:TechnicalRequest/Attribute:status/Value:resolved+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:closed' => 'Gesloten',
	'Class:TechnicalRequest/Attribute:status/Value:closed+' => '',
	'Class:TechnicalRequest/Attribute:request_type' => 'Type verzoek',
	'Class:TechnicalRequest/Attribute:request_type+' => '',
	'Class:TechnicalRequest/Attribute:request_type/Value:service_request' => 'Vraag om hulp',
	'Class:TechnicalRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:TechnicalRequest/Attribute:impact' => 'Impact',
	'Class:TechnicalRequest/Attribute:impact+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:1' => 'Een afdeling',
	'Class:TechnicalRequest/Attribute:impact/Value:1+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:2' => 'Een dienst',
	'Class:TechnicalRequest/Attribute:impact/Value:2+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:3' => 'Een persoon',
	'Class:TechnicalRequest/Attribute:impact/Value:3+' => '',
	'Class:TechnicalRequest/Attribute:priority' => 'Prioriteit',
	'Class:TechnicalRequest/Attribute:priority+' => '',
	'Class:TechnicalRequest/Attribute:priority/Value:1' => 'kritiek',
	'Class:TechnicalRequest/Attribute:priority/Value:1+' => 'kritisch',
	'Class:TechnicalRequest/Attribute:priority/Value:2' => 'hoog',
	'Class:TechnicalRequest/Attribute:priority/Value:2+' => 'hoog',
	'Class:TechnicalRequest/Attribute:priority/Value:3' => 'gemiddeld',
	'Class:TechnicalRequest/Attribute:priority/Value:3+' => 'normaal',
	'Class:TechnicalRequest/Attribute:priority/Value:4' => 'laag',
	'Class:TechnicalRequest/Attribute:priority/Value:4+' => 'laag',
	'Class:TechnicalRequest/Attribute:urgency' => 'Urgentie',
	'Class:TechnicalRequest/Attribute:urgency+' => '',
	'Class:TechnicalRequest/Attribute:urgency/Value:1' => 'kritiek',
	'Class:TechnicalRequest/Attribute:urgency/Value:1+' => 'kritisch',
	'Class:TechnicalRequest/Attribute:urgency/Value:2' => 'hoog',
	'Class:TechnicalRequest/Attribute:urgency/Value:2+' => 'hoog',
	'Class:TechnicalRequest/Attribute:urgency/Value:3' => 'gemiddeld',
	'Class:TechnicalRequest/Attribute:urgency/Value:3+' => 'normaal',
	'Class:TechnicalRequest/Attribute:urgency/Value:4' => 'laag',
	'Class:TechnicalRequest/Attribute:urgency/Value:4+' => 'laag',
	'Class:TechnicalRequest/Attribute:origin' => 'Oorsprong',
	'Class:TechnicalRequest/Attribute:origin+' => '',
	'Class:TechnicalRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:TechnicalRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:TechnicalRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:TechnicalRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:TechnicalRequest/Attribute:origin/Value:phone' => 'telefoon',
	'Class:TechnicalRequest/Attribute:origin/Value:phone+' => 'telefoon',
	'Class:TechnicalRequest/Attribute:origin/Value:portal' => 'portaal',
	'Class:TechnicalRequest/Attribute:origin/Value:portal+' => 'portaal',
	'Class:TechnicalRequest/Attribute:origin/Value:in_person' => 'in persoon',
    'Class:TechnicalRequest/Attribute:origin/Value:in_person+' => 'in persoon',
	'Class:TechnicalRequest/Attribute:approver_id' => 'Goedkeurder',
	'Class:TechnicalRequest/Attribute:approver_id+' => '',
	'Class:TechnicalRequest/Attribute:approver_email' => 'Goedkeurder Email',
	'Class:TechnicalRequest/Attribute:approver_email+' => '',
	'Class:TechnicalRequest/Attribute:service_id' => 'Domein',
	'Class:TechnicalRequest/Attribute:service_id+' => '',
	'Class:TechnicalRequest/Attribute:service_name' => 'Naam domein',
	'Class:TechnicalRequest/Attribute:service_name+' => '',
	'Class:TechnicalRequest/Attribute:servicesubcategory_id' => 'Categorie',
	'Class:TechnicalRequest/Attribute:servicesubcategory_id+' => '',
	'Class:TechnicalRequest/Attribute:servicesubcategory_name' => 'Naam categorie',
	'Class:TechnicalRequest/Attribute:servicesubcategory_name+' => '',
	'Class:TechnicalRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:TechnicalRequest/Attribute:escalation_flag+' => '',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:no' => 'Nee',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:no+' => 'Nee',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:yes' => 'Ja',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:yes+' => 'Ja',
	'Class:TechnicalRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:TechnicalRequest/Attribute:escalation_reason+' => '',
	'Class:TechnicalRequest/Attribute:assignment_date' => 'Datum toegewezen',
	'Class:TechnicalRequest/Attribute:assignment_date+' => '',
	'Class:TechnicalRequest/Attribute:resolution_date' => 'Datum opgelost',
	'Class:TechnicalRequest/Attribute:resolution_date+' => '',
	'Class:TechnicalRequest/Attribute:last_pending_date' => 'Laatste wachtend datum',
	'Class:TechnicalRequest/Attribute:last_pending_date+' => '',
	'Class:TechnicalRequest/Attribute:cumulatedpending' => 'samengeteld wachtend',
	'Class:TechnicalRequest/Attribute:cumulatedpending+' => '',
	'Class:TechnicalRequest/Attribute:tto' => 'TTO',
	'Class:TechnicalRequest/Attribute:tto+' => '',
	'Class:TechnicalRequest/Attribute:ttr' => 'TTR',
	'Class:TechnicalRequest/Attribute:ttr+' => '',
	'Class:TechnicalRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:TechnicalRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:TechnicalRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:TechnicalRequest/Attribute:sla_tto_passed+' => '',
	'Class:TechnicalRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:TechnicalRequest/Attribute:sla_tto_over+' => '',
	'Class:TechnicalRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:TechnicalRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:TechnicalRequest/Attribute:sla_ttr_passed' => 'SLA ttr gepasseerd',
	'Class:TechnicalRequest/Attribute:sla_ttr_passed+' => '',
	'Class:TechnicalRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:TechnicalRequest/Attribute:sla_ttr_over+' => '',
	'Class:TechnicalRequest/Attribute:time_spent' => 'Resolutie vertraging',
	'Class:TechnicalRequest/Attribute:time_spent+' => '',
	'Class:TechnicalRequest/Attribute:resolution_code' => 'Resolutie code',
	'Class:TechnicalRequest/Attribute:resolution_code+' => '',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:assistance' => 'assistentie',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:assistance+' => 'assistentie',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:bug fixed' => 'bug opgelost',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug ogelost',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware gerepareerd',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware gerepareerd',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:other' => 'andere',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:other+' => 'andere',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:system update' => 'systeem update',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:system update+' => 'systeem update',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:TechnicalRequest/Attribute:solution' => 'Oplossing',
	'Class:TechnicalRequest/Attribute:solution+' => '',
	'Class:TechnicalRequest/Attribute:pending_reason' => 'Reden waarom het in afwachting staat',
	'Class:TechnicalRequest/Attribute:pending_reason+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_id' => 'Hoofdticket',
	'Class:TechnicalRequest/Attribute:parent_request_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_incident_id' => 'Hoofdincident',
	'Class:TechnicalRequest/Attribute:parent_incident_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:TechnicalRequest/Attribute:parent_request_ref+' => '',
	'Class:TechnicalRequest/Attribute:parent_problem_id' => 'Hoofdprobleem',
	'Class:TechnicalRequest/Attribute:parent_problem_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_problem_ref' => 'Ref probleem',
	'Class:TechnicalRequest/Attribute:parent_problem_ref+' => '',
	'Class:TechnicalRequest/Attribute:parent_change_id' => 'Hoofdchange',
	'Class:TechnicalRequest/Attribute:parent_change_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:TechnicalRequest/Attribute:parent_change_ref+' => '',
	'Class:TechnicalRequest/Attribute:related_request_list' => 'Sub Tickets',
	'Class:TechnicalRequest/Attribute:related_request_list+' => 'Alle tickets die gelinkt zijn aan dit hoofdticket',
	'Class:TechnicalRequest/Attribute:public_log' => 'Publiek commentaar',
	'Class:TechnicalRequest/Attribute:public_log+' => '',
	'Class:TechnicalRequest/Attribute:private_log' => 'Privé commentaar',
	'Class:TechnicalRequest/Attribute:private_log+' => '',
	'Class:TechnicalRequest/Attribute:user_satisfaction' => 'Gebruikerstevredenheid',
	'Class:TechnicalRequest/Attribute:user_satisfaction+' => '',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:1' => 'Zeer tevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:1+' => 'Zeer tevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:2' => 'Tamelijk tevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:2+' => 'Takelijk tevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:3' => 'Tamelijk ontevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:3+' => 'Tamelijk ontevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:4' => 'Zeer ontevreden',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:4+' => 'Zeer ontevreden',
	'Class:TechnicalRequest/Attribute:user_comment' => 'Gebruikersreactie',
	'Class:TechnicalRequest/Attribute:user_comment+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:TechnicalRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:TechnicalRequest/Stimulus:ev_assign' => 'Wijs toe',
	'Class:TechnicalRequest/Stimulus:ev_assign+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reassign' => 'Wijs opnieuw toe',
	'Class:TechnicalRequest/Stimulus:ev_reassign+' => '',
	'Class:TechnicalRequest/Stimulus:ev_approve' => 'Keur goed',
	'Class:TechnicalRequest/Stimulus:ev_approve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reject' => 'Keur af',
	'Class:TechnicalRequest/Stimulus:ev_reject+' => '',
	'Class:TechnicalRequest/Stimulus:ev_pending' => 'In afwachting',
	'Class:TechnicalRequest/Stimulus:ev_pending+' => '',
	'Class:TechnicalRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:TechnicalRequest/Stimulus:ev_timeout+' => '',
	'Class:TechnicalRequest/Stimulus:ev_autoresolve' => 'Automatisch oplossen',
	'Class:TechnicalRequest/Stimulus:ev_autoresolve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_autoclose' => 'Automatisch sluiten',
	'Class:TechnicalRequest/Stimulus:ev_autoclose+' => '',
	'Class:TechnicalRequest/Stimulus:ev_resolve' => 'Markeren als opgelost',
	'Class:TechnicalRequest/Stimulus:ev_resolve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_close' => 'Sluit dit verzoek',
	'Class:TechnicalRequest/Stimulus:ev_close+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reopen' => 'Her-open',
	'Class:TechnicalRequest/Stimulus:ev_reopen+' => '',
	'Class:TechnicalRequest/Stimulus:ev_wait_for_approval' => 'Wacht op goedkeuring',
	'Class:TechnicalRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:TechnicalRequest/Error:CannotAssignParentRequestIdToSelf' => 'Kan niet toewijzen aan hoofdverzoek en aan het verzoek zelf',
	'Class:TechnicalRequest/Attribute:reminder' => 'Herinnering',
	'Class:TechnicalRequest/Attribute:reminder+' => 'Herinnering',	

	'Class:TechnicalRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:TechnicalRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
	 
	'Class:TechnicalRequest/Attribute:geom' => 'Kaart', 
	'Location:Geometry' => 'Kaart',
	'TechnicalRequest:Geometry' => 'Kaart',
	
	// Actions

	'UI:Geom:Clear' => 'Wissen', 
	
	// Geometry types
	'UI:Geom:Point' => 'Punt',
	'UI:Geom:LineString' => 'Lijn',
	'UI:Geom:Polygon' => 'Polygoon'
));
