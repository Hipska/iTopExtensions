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

Dict::Add('EN US', 'English', 'English', array(
	'Menu:TechnicalRequestManagement' => 'Technical ticketing system',
	'Menu:TechnicalRequestManagement+' => 'Technical ticketing system',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:TechnicalRequest:Provider' => 'Open request transfered to provider',
	'Menu:TechnicalRequest:Provider+' => 'Open request transfered to provider',
	'Menu:TechnicalRequest:Overview' => 'TechnicalRequest Overview',
	'Menu:TechnicalRequest:Overview+' => 'TechnicalRequest Overview',
	'Menu:NewTechnicalRequest' => 'New Technical Request',
	'Menu:NewTechnicalRequest+' => 'Create a new technical request ticket',
	'Menu:SearchTechnicalRequests' => 'Search for technical requests',
	'Menu:SearchTechnicalRequests+' => 'Search for technical request tickets',
	'Menu:TechnicalRequest:Shortcuts' => 'Shortcuts',
	'Menu:TechnicalRequest:Shortcuts+' => '',
	'Menu:TechnicalRequest:MyRequests' => 'Technical Requests assigned to me',
	'Menu:TechnicalRequest:MyRequests+' => 'Technical Requests assigned to me (as Agent)',
	'Menu:TechnicalRequest:MySupportRequests' => "My support calls",
	'Menu:TechnicalRequest:MySupportRequests+' => "My support calls",
	'Menu:TechnicalRequest:EscalatedRequests' => 'Hot Technical Requests',
	'Menu:TechnicalRequest:EscalatedRequests+' => 'Hot Technical Requests',
	'Menu:TechnicalRequest:OpenRequests' => 'All open Technical requests',
	'Menu:TechnicalRequest:OpenRequests+' => 'All open Technical requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Technical Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:TechnicalRequest:KnownErrorList' => 'Known Errors',
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
// Class: lnkContactToTechnicalTicket
//
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkContactToTechnicalTicket' => 'Link staff member to ticket',
	'Class:lnkContactToTechnicalTicket+' => 'Link staff member to technical ticket', 		
	'Class:lnkContactToTechnicalTicket/Attribute:start' => 'Start',
	'Class:lnkContactToTechnicalTicket/Attribute:start+' => 'Start', 
	'Class:lnkContactToTechnicalTicket/Attribute:stop' => 'Stop',
	'Class:lnkContactToTechnicalTicket/Attribute:stop+' => 'Stop', 
	'Class:lnkContactToTechnicalTicket/Attribute:contact_id' => 'Staff members',
	'Class:lnkContactToTechnicalTicket/Attribute:contact_id+' => 'Staff members', 


//
// Class: TechnicalRequest
//

	'Class:TechnicalRequest' => 'Technical Request',
	'Class:TechnicalRequest+' => '',
	'Class:TechnicalRequest/Attribute:staff_list' => 'Staff',
	'Class:TechnicalRequest/Attribute:staff_list+' => 'Staff', 	
	'Class:TechnicalRequest/Attribute:crab_address_id' => 'CRAB Address',
	'Class:TechnicalRequest/Attribute:crab_address_id+' => 'CRAB Address', 
	'Class:TechnicalRequest/Attribute:crab_address_street_id_friendlyname' => 'Streetname',
	'Class:TechnicalRequest/Attribute:crab_address_street_id_friendlyname+' => 'Streetname as found in CRAB', 
	'Class:TechnicalRequest/Attribute:status' => 'Status',
	'Class:TechnicalRequest/Attribute:status+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:new' => 'New',
	'Class:TechnicalRequest/Attribute:status/Value:new+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:TechnicalRequest/Attribute:status/Value:assigned+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:TechnicalRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:TechnicalRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:TechnicalRequest/Attribute:status/Value:approved+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:TechnicalRequest/Attribute:status/Value:rejected+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:TechnicalRequest/Attribute:status/Value:pending+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:TechnicalRequest/Attribute:status/Value:resolved+' => '',
	'Class:TechnicalRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:TechnicalRequest/Attribute:status/Value:closed+' => '',
	'Class:TechnicalRequest/Attribute:request_type' => 'Request Type',
	'Class:TechnicalRequest/Attribute:request_type+' => '',
	'Class:TechnicalRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:TechnicalRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:TechnicalRequest/Attribute:impact' => 'Impact',
	'Class:TechnicalRequest/Attribute:impact+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:1' => 'A department',
	'Class:TechnicalRequest/Attribute:impact/Value:1+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:2' => 'A service',
	'Class:TechnicalRequest/Attribute:impact/Value:2+' => '',
	'Class:TechnicalRequest/Attribute:impact/Value:3' => 'A person',
	'Class:TechnicalRequest/Attribute:impact/Value:3+' => '',
	'Class:TechnicalRequest/Attribute:priority' => 'Priority',
	'Class:TechnicalRequest/Attribute:priority+' => '',
	'Class:TechnicalRequest/Attribute:priority/Value:1' => 'critical',
	'Class:TechnicalRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:TechnicalRequest/Attribute:priority/Value:2' => 'high',
	'Class:TechnicalRequest/Attribute:priority/Value:2+' => 'high',
	'Class:TechnicalRequest/Attribute:priority/Value:3' => 'medium',
	'Class:TechnicalRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:TechnicalRequest/Attribute:priority/Value:4' => 'low',
	'Class:TechnicalRequest/Attribute:priority/Value:4+' => 'low',
	'Class:TechnicalRequest/Attribute:status_detail' => 'Status',
	'Class:TechnicalRequest/Attribute:status_detail+' => '',
	'Class:TechnicalRequest/Attribute:status_detail/Value:additional_information_requested' => 'Additional information requested',
	'Class:TechnicalRequest/Attribute:status_detail/Value:additional_information_requested+' => 'Additional information requested',
	'Class:TechnicalRequest/Attribute:status_detail/Value:not_yet_started' => 'Not yet started',
	'Class:TechnicalRequest/Attribute:status_detail/Value:not_yet_started+' => 'Not yet started',
	'Class:TechnicalRequest/Attribute:status_detail/Value:passed_for_execution' => 'Passed for execution',
	'Class:TechnicalRequest/Attribute:status_detail/Value:passed_for_execution+' => 'Passed for execution',
	'Class:TechnicalRequest/Attribute:status_detail/Value:planned' => 'Planned',
	'Class:TechnicalRequest/Attribute:status_detail/Value:planned+' => 'Planned',
	'Class:TechnicalRequest/Attribute:urgency' => 'Urgency',
	'Class:TechnicalRequest/Attribute:urgency+' => '',
	'Class:TechnicalRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:TechnicalRequest/Attribute:urgency/Value:1+' => 'critical',	
	'Class:TechnicalRequest/Attribute:urgency/Value:2' => 'high',
	'Class:TechnicalRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:TechnicalRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:TechnicalRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:TechnicalRequest/Attribute:urgency/Value:4' => 'low',
	'Class:TechnicalRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:TechnicalRequest/Attribute:origin' => 'Origin',
	'Class:TechnicalRequest/Attribute:origin+' => '',
	'Class:TechnicalRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:TechnicalRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:TechnicalRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:TechnicalRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:TechnicalRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:TechnicalRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:TechnicalRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:TechnicalRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:TechnicalRequest/Attribute:approver_id' => 'Approver',
	'Class:TechnicalRequest/Attribute:approver_id+' => '',
	'Class:TechnicalRequest/Attribute:approver_email' => 'Approver Email',
	'Class:TechnicalRequest/Attribute:approver_email+' => '',
	'Class:TechnicalRequest/Attribute:service_id' => 'Service',
	'Class:TechnicalRequest/Attribute:service_id+' => '',
	'Class:TechnicalRequest/Attribute:service_name' => 'Service name',
	'Class:TechnicalRequest/Attribute:service_name+' => '',
	'Class:TechnicalRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:TechnicalRequest/Attribute:servicesubcategory_id+' => '',
	'Class:TechnicalRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:TechnicalRequest/Attribute:servicesubcategory_name+' => '',
	'Class:TechnicalRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:TechnicalRequest/Attribute:escalation_flag+' => '',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:TechnicalRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:TechnicalRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:TechnicalRequest/Attribute:escalation_reason+' => '',
	'Class:TechnicalRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:TechnicalRequest/Attribute:assignment_date+' => '',
	'Class:TechnicalRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:TechnicalRequest/Attribute:resolution_date+' => '',
	'Class:TechnicalRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:TechnicalRequest/Attribute:last_pending_date+' => '',
	'Class:TechnicalRequest/Attribute:cumulatedpending' => 'cumulatedpending',
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
	'Class:TechnicalRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:TechnicalRequest/Attribute:sla_ttr_passed+' => '',
	'Class:TechnicalRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:TechnicalRequest/Attribute:sla_ttr_over+' => '',
	'Class:TechnicalRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:TechnicalRequest/Attribute:time_spent+' => '',
	'Class:TechnicalRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:TechnicalRequest/Attribute:resolution_code+' => '',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:TechnicalRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:TechnicalRequest/Attribute:solution' => 'Solution',
	'Class:TechnicalRequest/Attribute:solution+' => '',
	'Class:TechnicalRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:TechnicalRequest/Attribute:pending_reason+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:TechnicalRequest/Attribute:parent_request_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:TechnicalRequest/Attribute:parent_incident_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:TechnicalRequest/Attribute:parent_request_ref+' => '',
	'Class:TechnicalRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:TechnicalRequest/Attribute:parent_problem_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:TechnicalRequest/Attribute:parent_problem_ref+' => '',
	'Class:TechnicalRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:TechnicalRequest/Attribute:parent_change_id+' => '',
	'Class:TechnicalRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:TechnicalRequest/Attribute:parent_change_ref+' => '',
	'Class:TechnicalRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:TechnicalRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:TechnicalRequest/Attribute:public_log' => 'Public log',
	'Class:TechnicalRequest/Attribute:public_log+' => '',
	'Class:TechnicalRequest/Attribute:orders_log' => 'Orders log',
	'Class:TechnicalRequest/Attribute:orders_log+' => '',
	'Class:TechnicalRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:TechnicalRequest/Attribute:user_satisfaction+' => '',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:TechnicalRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:TechnicalRequest/Attribute:user_comment' => 'User comment',
	'Class:TechnicalRequest/Attribute:user_comment+' => '',
	'Class:TechnicalRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:TechnicalRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:TechnicalRequest/Stimulus:ev_assign' => 'Assign',
	'Class:TechnicalRequest/Stimulus:ev_assign+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:TechnicalRequest/Stimulus:ev_reassign+' => '',
	'Class:TechnicalRequest/Stimulus:ev_approve' => 'Approve',
	'Class:TechnicalRequest/Stimulus:ev_approve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reject' => 'Reject',
	'Class:TechnicalRequest/Stimulus:ev_reject+' => '',
	'Class:TechnicalRequest/Stimulus:ev_pending' => 'Pending',
	'Class:TechnicalRequest/Stimulus:ev_pending+' => '',
	'Class:TechnicalRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:TechnicalRequest/Stimulus:ev_timeout+' => '',
	'Class:TechnicalRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:TechnicalRequest/Stimulus:ev_autoresolve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:TechnicalRequest/Stimulus:ev_autoclose+' => '',
	'Class:TechnicalRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:TechnicalRequest/Stimulus:ev_resolve+' => '',
	'Class:TechnicalRequest/Stimulus:ev_close' => 'Close this request',
	'Class:TechnicalRequest/Stimulus:ev_close+' => '',
	'Class:TechnicalRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:TechnicalRequest/Stimulus:ev_reopen+' => '',
	'Class:TechnicalRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:TechnicalRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:TechnicalRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:TechnicalRequest/Attribute:reminder' => 'Reminder',
	'Class:TechnicalRequest/Attribute:reminder+' => 'Reminder',	

	'Class:TechnicalRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:TechnicalRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
	
	'Class:TechnicalRequest/Attribute:geom' => 'Geometry', 
	'Location:Geometry' => 'Geometry',
	'TechnicalRequest:Geometry' => 'Geometry',
	
	// Actions
	'UI:Geom:Clear' => 'Clear geometry', 
	
	// Geometry types
	'UI:Geom:Point' => 'Point',
	'UI:Geom:LineString' => 'LineString',
	'UI:Geom:Polygon' => 'Polygon'
	
));
