<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2014 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


$fields =
    array(
        'id' => array(
            'name' => 'id',
            'type' => 'id',
            'source' => 'non-db',
        ),
        'name' => array(
            'name' => 'name',
            'type' => 'varchar',
            'source' => 'non-db',
            'unified_search' => true,
            'vname' => 'LBL_NAME',
        ),
        /*'logo' => array(
            'name' => 'logo',
            'type' => 'varchar',
            'source' => 'non-db',
        ), */
        'picture' => array(
            'name' => 'picture',
            'vname' => 'LBL_PICTURE_FILE',
            'source' => 'non-db',
            'type' => 'varchar',
            /*'len' => '255',
            'width' => '42',
            'height' => '42',
            'border' => '', */
        ),
        'role' => array(
            'name' => 'role',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'url' => array(
            'name' => 'role',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'community_id' => array(
            'name' => 'community_id',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'member_id' => array(
            'name' => 'member_id',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'total_todos' => array(
            'name' => 'total_todos',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'completed_todos' => array(
            'name' => 'completed_todos',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
        'completion' => array(
            'name' => 'completion',
            'type' => 'varchar',
            'source' => 'non-db',
        ),
    );

$dictionary['ibm_connectionsMembers'] =
    array(
        'fields' => $fields,
        'mergedFields' => array('id', 'name'),
        'activity_enabled' => false,
        'unified_search' => false,
        'favorites' => false,
    );

VardefManager::createVardef('ibm_connectionsMembers', 'ibm_connectionsMembers');
