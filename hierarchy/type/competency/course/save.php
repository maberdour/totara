<?php

require_once('../../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->libdir.'/completionlib.php');
require_once($CFG->dirroot.'/hierarchy/type/competency/lib.php');
require_once('HTML/AJAX/JSON.php');


///
/// Setup / loading data
///

// Competency id
$id = required_param('competency', PARAM_INT);
// Evidence type
$type = required_param('type', PARAM_TEXT);
// Evidence instance id
$instance = required_param('instance', PARAM_INT);

// Check perms
admin_externalpage_setup('competencymanage', '', array(), '', $CFG->wwwroot.'/competency/edit.php');

$sitecontext = get_context_instance(CONTEXT_SYSTEM);
require_capability('moodle/local:editownplan', $sitecontext);

// Setup hierarchy object
$hierarchy = new competency();

// Load competency
if (!$competency = $hierarchy->get_item($id)) {
    error('Competency ID was incorrect');
}

// Load framework
if (!$framework = $hierarchy->get_framework($competency->frameworkid)) {
    error('Competency framework could not be found');
}

// Load depth
if (!$depth = $hierarchy->get_depth_by_id($competency->depthid)) {
    error('Competency framework depth could not be found');
}

// Check type is available
$avail_types = array('coursecompletion', 'coursegrade', 'activitycompletion');

if (!in_array($type, $avail_types)) {
    die('type unavailable');
}

$data = new object();
$data->itemtype = $type;
$evidence = competency_evidence_type::factory($data);
$evidence->iteminstance = $instance;

$evidence->add($competency);

echo '<tr>';
echo "<td><a href=\"{$CFG->wwwroot}/hierarchy/index.php?type=competency&frameworkid={$framework->id}\">{$framework->fullname}</a></td>";
echo '<td>'.$depth->fullname.'</td>';
echo "<td><a href=\"{$CFG->wwwroot}/hierarchy/item/view.php?type=competency&id={$competency->id}\">{$competency->fullname}</a></td>";

echo '<td>'.$evidence->get_type();

if ($evidence->itemtype == 'activitycompletion') {
    echo ' - '.$evidence->get_name();
}

echo '</td>';
echo '</tr>';