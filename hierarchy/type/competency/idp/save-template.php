<?php

require_once('../../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once($CFG->dirroot.'/hierarchy/type/competency/lib.php');
require_once($CFG->dirroot.'/idp/lib.php');


///
/// Setup / loading data
///

// Revision id
$revisionid = required_param('id', PARAM_INT);

// Courses to add
$rowcount = required_param('rowcount', PARAM_SEQUENCE);

// Competency templates to add
$add = required_param('add', PARAM_SEQUENCE);

// Check permissions
$sitecontext = get_context_instance(CONTEXT_SYSTEM);
$plan = get_plan_for_revision($revisionid);
if ( !$plan ){
    error('Plan ID is incorrect');
}

// Users can only edit their own IDP
require_capability('moodle/local:editownplan', $sitecontext);
if ( $plan->userid != $USER->id ){
    error(get_string('error:revisionnotvisible', 'idp'));
}

// Setup hierarchy object
$hierarchy = new competency();
$str_remove = get_string('remove');

///
/// Add competencies
///

// Parse input
$add = explode(',', $add);
$time = time();

foreach ($add as $addition) {
    // Check id
    if (!is_numeric($addition)) {
        error('Supplied bad data - non numeric id');
    }

    // Load competency
    $template = $hierarchy->get_template($addition);

    // Load framework
    $framework = $hierarchy->get_framework($template->frameworkid);

    // Load depths
    $depths = $hierarchy->get_depths();

    // Add idp competency
    $idpcompetency = new Object();
    $idpcompetency->revision = $revisionid;
    $idpcompetency->competencytemplate = $template->id;
    $idpcompetency->ctime = time();

    insert_record('idp_revision_competencytemplate', $idpcompetency);

    // Return html
    echo '<tr class=r'.$rowcount.'>';
    echo "<td><a href=\"{$CFG->wwwroot}/hierarchy/framework/index.php?type={$hierarchy->prefix}&id={$framework->id}\">{$framework->fullname}</a></td>";
    echo "<td><a href=\"{$CFG->wwwroot}/hierarchy/type/competency/template/view.php?id={$template->id}\">{$template->fullname}</a></td>";
    echo '<td></td>';
    echo '<td width="25%"><input size="10" maxlength="10" type="text" name="comptempduedate['.$template->id.']" id="comptempduedate'.$template->id.'"/></td>';

//    if ($editingon) {

        echo "<td style=\"text-align: center;\">";

        echo "<a href=\"{$CFG->wwwroot}/hierarchy/type/competency/template/idp/remove.php?id={$template->id}&revision={$revisionid}\" title=\"$str_remove\">".
             "<img src=\"{$CFG->pixpath}/t/delete.gif\" class=\"iconsmall\" alt=\"$str_remove\" /></a>";

        echo "</td>";

//    }

    echo '</tr>';
    echo '<script type="text/javascript"> $(function() { $(\'[id^=comptempduedate]\').datepicker( ';
    echo '{ dateFormat: \'dd/mm/yy\', showOn: \'button\', buttonImage: \'../local/js/images/calendar.gif\',';
    echo 'buttonImageOnly: true } ); }); </script>'.PHP_EOL;
    $rowcount = ($rowcount + 1) % 2;
}
add_to_log(SITEID, 'idp', 'add IDP competency templates', "revision.php?id={$plan->id}", $plan->id);