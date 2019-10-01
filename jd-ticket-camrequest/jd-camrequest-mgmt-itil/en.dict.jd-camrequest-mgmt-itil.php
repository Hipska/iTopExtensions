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
	'Menu:CamRequestManagement' => 'Camerarequest',
	'Menu:CamRequestManagement+' => 'Camerarequest',
	'Menu:RequestManagementProvider' => 'Helpdesk provider',
	'Menu:RequestManagementProvider+' => 'Helpdesk provider',
	'Menu:CamRequest:Provider' => 'Open request transfered to provider',
	'Menu:CamRequest:Provider+' => 'Open request transfered to provider',
	'Menu:CamRequest:Overview' => 'Camerarequest Overview',
	'Menu:CamRequest:Overview+' => 'Camerarequest Overview',
	'Menu:NewCamRequest' => 'New Camerarequest',
	'Menu:NewCamRequest+' => 'Create a new camerarequest ticket',
	'Menu:SearchCamRequests' => 'Search for camerarequests',
	'Menu:SearchCamRequests+' => 'Search for camerarequest tickets',
	'Menu:CamRequest:Shortcuts' => 'Shortcuts',
	'Menu:CamRequest:Shortcuts+' => '',
	'Menu:CamRequest:MyRequests' => 'Cam Requests assigned to me',
	'Menu:CamRequest:MyRequests+' => 'Cam Requests assigned to me (as Agent)',
	'Menu:CamRequest:MySupportRequests' => "My support calls",
	'Menu:CamRequest:MySupportRequests+' => "My support calls",
	'Menu:CamRequest:EscalatedRequests' => 'Hot Cam Requests',
	'Menu:CamRequest:EscalatedRequests+' => 'Hot Cam Requests',
	'Menu:CamRequest:OpenRequests' => 'All open Cam requests',
	'Menu:CamRequest:OpenRequests+' => 'All open Cam requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Cam Requests assigned to me',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Last 14 days request per type',
	'UI-RequestManagementOverview-Last-14-days' => 'Last 14 days number of requests',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Open requests by status',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Open requests by agent',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Open requests by type',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Open requests by customer',
	'Class:CamRequest:KnownErrorList' => 'Known Errors',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: CamRequest
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:CamRequest' => 'Cam Request',
	'Class:CamRequest+' => '',
	'Class:CamRequest/Attribute:status' => 'Status',
	'Class:CamRequest/Attribute:status+' => '',
	'Class:CamRequest/Attribute:status/Value:new' => 'New',
	'Class:CamRequest/Attribute:status/Value:new+' => '',
	'Class:CamRequest/Attribute:status/Value:escalated_tto' => 'Escalated TTO',
	'Class:CamRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:CamRequest/Attribute:status/Value:assigned' => 'Assigned',
	'Class:CamRequest/Attribute:status/Value:assigned+' => '',
	'Class:CamRequest/Attribute:status/Value:escalated_ttr' => 'Escalated TTR',
	'Class:CamRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:CamRequest/Attribute:status/Value:waiting_for_approval' => 'Waiting for approval',
	'Class:CamRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:CamRequest/Attribute:status/Value:approved' => 'Approved',
	'Class:CamRequest/Attribute:status/Value:approved+' => '',
	'Class:CamRequest/Attribute:status/Value:rejected' => 'Rejected',
	'Class:CamRequest/Attribute:status/Value:rejected+' => '',
	'Class:CamRequest/Attribute:status/Value:pending' => 'Pending',
	'Class:CamRequest/Attribute:status/Value:pending+' => '',
	'Class:CamRequest/Attribute:status/Value:resolved' => 'Resolved',
	'Class:CamRequest/Attribute:status/Value:resolved+' => '',
	'Class:CamRequest/Attribute:status/Value:closed' => 'Closed',
	'Class:CamRequest/Attribute:status/Value:closed+' => '',
	'Class:CamRequest/Attribute:request_type' => 'Request Type',
	'Class:CamRequest/Attribute:request_type+' => '',
	'Class:CamRequest/Attribute:request_type/Value:service_request' => 'Service request',
	'Class:CamRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:CamRequest/Attribute:impact' => 'Impact',
	'Class:CamRequest/Attribute:impact+' => '',
	'Class:CamRequest/Attribute:impact/Value:1' => 'A department',
	'Class:CamRequest/Attribute:impact/Value:1+' => '',
	'Class:CamRequest/Attribute:impact/Value:2' => 'A service',
	'Class:CamRequest/Attribute:impact/Value:2+' => '',
	'Class:CamRequest/Attribute:impact/Value:3' => 'A person',
	'Class:CamRequest/Attribute:impact/Value:3+' => '',
	'Class:CamRequest/Attribute:priority' => 'Priority',
	'Class:CamRequest/Attribute:priority+' => '',
	'Class:CamRequest/Attribute:priority/Value:1' => 'critical',
	'Class:CamRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:CamRequest/Attribute:priority/Value:2' => 'high',
	'Class:CamRequest/Attribute:priority/Value:2+' => 'high',
	'Class:CamRequest/Attribute:priority/Value:3' => 'medium',
	'Class:CamRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:CamRequest/Attribute:priority/Value:4' => 'low',
	'Class:CamRequest/Attribute:priority/Value:4+' => 'low',
	'Class:CamRequest/Attribute:urgency' => 'Urgency',
	'Class:CamRequest/Attribute:urgency+' => '',
	'Class:CamRequest/Attribute:urgency/Value:1' => 'critical',
	'Class:CamRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:CamRequest/Attribute:urgency/Value:2' => 'high',
	'Class:CamRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:CamRequest/Attribute:urgency/Value:3' => 'medium',
	'Class:CamRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:CamRequest/Attribute:urgency/Value:4' => 'low',
	'Class:CamRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:CamRequest/Attribute:origin' => 'Origin',
	'Class:CamRequest/Attribute:origin+' => '',
	'Class:CamRequest/Attribute:origin/Value:mail' => 'mail',
	'Class:CamRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:CamRequest/Attribute:origin/Value:monitoring' => 'monitoring',
	'Class:CamRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:CamRequest/Attribute:origin/Value:phone' => 'phone',
	'Class:CamRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:CamRequest/Attribute:origin/Value:portal' => 'portal',
	'Class:CamRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:CamRequest/Attribute:approver_id' => 'Approver',
	'Class:CamRequest/Attribute:approver_id+' => '',
	'Class:CamRequest/Attribute:approver_email' => 'Approver Email',
	'Class:CamRequest/Attribute:approver_email+' => '',
	'Class:CamRequest/Attribute:service_id' => 'Service',
	'Class:CamRequest/Attribute:service_id+' => '',
	'Class:CamRequest/Attribute:service_name' => 'Service name',
	'Class:CamRequest/Attribute:service_name+' => '',
	'Class:CamRequest/Attribute:servicesubcategory_id' => 'Service subcategory',
	'Class:CamRequest/Attribute:servicesubcategory_id+' => '',
	'Class:CamRequest/Attribute:servicesubcategory_name' => 'Service subcategory name',
	'Class:CamRequest/Attribute:servicesubcategory_name+' => '',
	'Class:CamRequest/Attribute:escalation_flag' => 'Hot Flag',
	'Class:CamRequest/Attribute:escalation_flag+' => '',
	'Class:CamRequest/Attribute:escalation_flag/Value:no' => 'No',
	'Class:CamRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:CamRequest/Attribute:escalation_flag/Value:yes' => 'Yes',
	'Class:CamRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:CamRequest/Attribute:escalation_reason' => 'Hot reason',
	'Class:CamRequest/Attribute:escalation_reason+' => '',
	'Class:CamRequest/Attribute:assignment_date' => 'Assignment date',
	'Class:CamRequest/Attribute:assignment_date+' => '',
	'Class:CamRequest/Attribute:resolution_date' => 'Resolution date',
	'Class:CamRequest/Attribute:resolution_date+' => '',
	'Class:CamRequest/Attribute:last_pending_date' => 'Last pending date',
	'Class:CamRequest/Attribute:last_pending_date+' => '',
	'Class:CamRequest/Attribute:cumulatedpending' => 'cumulatedpending',
	'Class:CamRequest/Attribute:cumulatedpending+' => '',
	'Class:CamRequest/Attribute:tto' => 'TTO',
	'Class:CamRequest/Attribute:tto+' => '',
	'Class:CamRequest/Attribute:ttr' => 'TTR',
	'Class:CamRequest/Attribute:ttr+' => '',
	'Class:CamRequest/Attribute:tto_escalation_deadline' => 'TTO Deadline',
	'Class:CamRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:CamRequest/Attribute:sla_tto_passed' => 'SLA tto passed',
	'Class:CamRequest/Attribute:sla_tto_passed+' => '',
	'Class:CamRequest/Attribute:sla_tto_over' => 'SLA tto over',
	'Class:CamRequest/Attribute:sla_tto_over+' => '',
	'Class:CamRequest/Attribute:ttr_escalation_deadline' => 'TTR Deadline',
	'Class:CamRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:CamRequest/Attribute:sla_ttr_passed' => 'SLA ttr passed',
	'Class:CamRequest/Attribute:sla_ttr_passed+' => '',
	'Class:CamRequest/Attribute:sla_ttr_over' => 'SLA ttr over',
	'Class:CamRequest/Attribute:sla_ttr_over+' => '',
	'Class:CamRequest/Attribute:time_spent' => 'Resolution delay',
	'Class:CamRequest/Attribute:time_spent+' => '',
	'Class:CamRequest/Attribute:resolution_code' => 'Resolution code',
	'Class:CamRequest/Attribute:resolution_code+' => '',
	'Class:CamRequest/Attribute:resolution_code/Value:assistance' => 'assistance',
	'Class:CamRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:CamRequest/Attribute:resolution_code/Value:bug fixed' => 'bug fixed',
	'Class:CamRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:CamRequest/Attribute:resolution_code/Value:hardware repair' => 'hardware repair',
	'Class:CamRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:CamRequest/Attribute:resolution_code/Value:other' => 'other',
	'Class:CamRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:CamRequest/Attribute:resolution_code/Value:software patch' => 'software patch',
	'Class:CamRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:CamRequest/Attribute:resolution_code/Value:system update' => 'system update',
	'Class:CamRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:CamRequest/Attribute:resolution_code/Value:training' => 'training',
	'Class:CamRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:CamRequest/Attribute:solution' => 'Solution',
	'Class:CamRequest/Attribute:solution+' => '',
	'Class:CamRequest/Attribute:pending_reason' => 'Pending reason',
	'Class:CamRequest/Attribute:pending_reason+' => '',
	'Class:CamRequest/Attribute:parent_request_id' => 'Parent request',
	'Class:CamRequest/Attribute:parent_request_id+' => '',
	'Class:CamRequest/Attribute:parent_incident_id' => 'Parent incident',
	'Class:CamRequest/Attribute:parent_incident_id+' => '',
	'Class:CamRequest/Attribute:parent_request_ref' => 'Ref request',
	'Class:CamRequest/Attribute:parent_request_ref+' => '',
	'Class:CamRequest/Attribute:parent_problem_id' => 'Parent problem',
	'Class:CamRequest/Attribute:parent_problem_id+' => '',
	'Class:CamRequest/Attribute:parent_problem_ref' => 'Ref problem',
	'Class:CamRequest/Attribute:parent_problem_ref+' => '',
	'Class:CamRequest/Attribute:parent_change_id' => 'Parent change',
	'Class:CamRequest/Attribute:parent_change_id+' => '',
	'Class:CamRequest/Attribute:parent_change_ref' => 'Ref change',
	'Class:CamRequest/Attribute:parent_change_ref+' => '',
	'Class:CamRequest/Attribute:related_request_list' => 'Child Requests',
	'Class:CamRequest/Attribute:related_request_list+' => 'All the requests that are linked to this parent request',
	'Class:CamRequest/Attribute:public_log' => 'Public log',
	'Class:CamRequest/Attribute:public_log+' => '',
	'Class:CamRequest/Attribute:user_satisfaction' => 'User satisfaction',
	'Class:CamRequest/Attribute:user_satisfaction+' => '',
	'Class:CamRequest/Attribute:user_satisfaction/Value:1' => 'Very satisfied',
	'Class:CamRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:CamRequest/Attribute:user_satisfaction/Value:2' => 'Fairly statisfied',
	'Class:CamRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:CamRequest/Attribute:user_satisfaction/Value:3' => 'Rather Dissatified',
	'Class:CamRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:CamRequest/Attribute:user_satisfaction/Value:4' => 'Very Dissatisfied',
	'Class:CamRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:CamRequest/Attribute:user_comment' => 'User comment',
	'Class:CamRequest/Attribute:user_comment+' => '',
	'Class:CamRequest/Attribute:parent_request_id_friendlyname' => 'parent_request_id_friendlyname',
	'Class:CamRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:CamRequest/Stimulus:ev_assign' => 'Assign',
	'Class:CamRequest/Stimulus:ev_assign+' => '',
	'Class:CamRequest/Stimulus:ev_reassign' => 'Re-assign',
	'Class:CamRequest/Stimulus:ev_reassign+' => '',
	'Class:CamRequest/Stimulus:ev_approve' => 'Approve',
	'Class:CamRequest/Stimulus:ev_approve+' => '',
	'Class:CamRequest/Stimulus:ev_reject' => 'Reject',
	'Class:CamRequest/Stimulus:ev_reject+' => '',
	'Class:CamRequest/Stimulus:ev_pending' => 'Pending',
	'Class:CamRequest/Stimulus:ev_pending+' => '',
	'Class:CamRequest/Stimulus:ev_timeout' => 'Timeout',
	'Class:CamRequest/Stimulus:ev_timeout+' => '',
	'Class:CamRequest/Stimulus:ev_autoresolve' => 'Automatic resolve',
	'Class:CamRequest/Stimulus:ev_autoresolve+' => '',
	'Class:CamRequest/Stimulus:ev_autoclose' => 'Automatic close',
	'Class:CamRequest/Stimulus:ev_autoclose+' => '',
	'Class:CamRequest/Stimulus:ev_resolve' => 'Mark as resolved',
	'Class:CamRequest/Stimulus:ev_resolve+' => '',
	'Class:CamRequest/Stimulus:ev_close' => 'Close this request',
	'Class:CamRequest/Stimulus:ev_close+' => '',
	'Class:CamRequest/Stimulus:ev_reopen' => 'Re-open',
	'Class:CamRequest/Stimulus:ev_reopen+' => '',
	'Class:CamRequest/Stimulus:ev_wait_for_approval' => 'Wait for approval',
	'Class:CamRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:CamRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
	'Class:CamRequest/Attribute:whenstart' => 'Start recording',
	'Class:CamRequest/Attribute:whenstart+' => 'From what time do they need the recording',	
	'Class:CamRequest/Attribute:whenstop' => 'Stop recording',
	'Class:CamRequest/Attribute:whenstop+' => 'Until what time do they need the recording',	
	'Class:CamRequest/Attribute:whendelivered' => 'Delivered at',
	'Class:CamRequest/Attribute:whendelivered+' => 'When did we give the recordings',
	'Class:CamRequest/Attribute:requeststatus' => 'Status',
	'Class:CamRequest/Attribute:requeststatus+' => 'Status of the recordingdelivery',	
	'Class:CamRequest/Attribute:location_id' => 'Location',
	'Class:CamRequest/Attribute:location_id+' => 'Location',	
	'Class:CamRequest/Attribute:refnumber' => 'Referencenumber',
	'Class:CamRequest/Attribute:refnumber+' => 'Referencenumber (e.g. number from the policestatement)',	
	'Class:CamRequest/Attribute:requeststatus/Value:delivered' => 'Delivered',
	'Class:CamRequest/Attribute:requeststatus/Value:delivered+' => 'Delivered',
	'Class:CamRequest/Attribute:requeststatus/Value:todo' => 'To do',
	'Class:CamRequest/Attribute:requeststatus/Value:todo+' => 'To do',
	'Class:CamRequest/Attribute:requeststatus/Value:refused' => 'Refused',
	'Class:CamRequest/Attribute:requeststatus/Value:refused+' => 'Refused',	
	'Class:CamRequest/Attribute:requeststatus/Value:not_admissable' => 'Not admissable',
	'Class:CamRequest/Attribute:requeststatus/Value:not_admissable+' => 'Not admissable',

	'Class:CamRequest/Method:ResolveChildTickets' => 'ResolveChildTickets',
	'Class:CamRequest/Method:ResolveChildTickets+' => 'Cascade the resolution to child requests (ev_autoresolve), and align the following characteristics of the request: service, team, agent, resolution info',
));
