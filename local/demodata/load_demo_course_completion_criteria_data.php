<?php
@raise_memory_limit('392M');
@ini_set('max_execution_time','3000');
print "Loading data for table 'course_completion_criteria'<br>";
$items = array(array('id' => '1','course' => '2','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '1',),
array('id' => '2','course' => '3','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '2',),
array('id' => '3','course' => '3','criteriatype' => '8','courseinstance' => '70',),
array('id' => '4','course' => '3','criteriatype' => '8','courseinstance' => '59',),
array('id' => '5','course' => '3','criteriatype' => '8','courseinstance' => '43',),
array('id' => '6','course' => '3','criteriatype' => '8','courseinstance' => '33',),
array('id' => '7','course' => '3','criteriatype' => '8','courseinstance' => '23',),
array('id' => '8','course' => '4','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '3',),
array('id' => '9','course' => '4','criteriatype' => '8','courseinstance' => '78',),
array('id' => '10','course' => '4','criteriatype' => '8','courseinstance' => '38',),
array('id' => '11','course' => '5','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '4',),
array('id' => '12','course' => '6','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '5',),
array('id' => '13','course' => '7','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '6',),
array('id' => '14','course' => '8','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '7',),
array('id' => '15','course' => '9','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '8',),
array('id' => '16','course' => '10','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '9',),
array('id' => '17','course' => '11','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '10',),
array('id' => '18','course' => '12','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '11',),
array('id' => '19','course' => '13','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '12',),
array('id' => '20','course' => '14','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '13',),
array('id' => '21','course' => '15','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '14',),
array('id' => '22','course' => '16','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '15',),
array('id' => '23','course' => '17','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '16',),
array('id' => '24','course' => '18','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '17',),
array('id' => '25','course' => '19','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '18',),
array('id' => '26','course' => '20','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '19',),
array('id' => '27','course' => '21','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '20',),
array('id' => '28','course' => '22','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '21',),
array('id' => '29','course' => '23','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '22',),
array('id' => '30','course' => '24','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '23',),
array('id' => '31','course' => '25','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '24',),
array('id' => '32','course' => '26','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '25',),
array('id' => '33','course' => '27','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '26',),
array('id' => '34','course' => '28','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '27',),
array('id' => '35','course' => '29','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '28',),
array('id' => '36','course' => '30','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '29',),
array('id' => '37','course' => '31','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '30',),
array('id' => '38','course' => '32','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '31',),
array('id' => '39','course' => '33','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '32',),
array('id' => '40','course' => '33','criteriatype' => '8','courseinstance' => '59',),
array('id' => '41','course' => '33','criteriatype' => '8','courseinstance' => '23',),
array('id' => '42','course' => '34','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '33',),
array('id' => '43','course' => '35','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '34',),
array('id' => '44','course' => '36','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '35',),
array('id' => '45','course' => '37','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '36',),
array('id' => '46','course' => '38','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '37',),
array('id' => '47','course' => '39','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '38',),
array('id' => '48','course' => '40','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '39',),
array('id' => '49','course' => '41','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '40',),
array('id' => '50','course' => '42','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '41',),
array('id' => '51','course' => '43','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '42',),
array('id' => '52','course' => '44','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '43',),
array('id' => '53','course' => '45','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '44',),
array('id' => '54','course' => '46','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '45',),
array('id' => '55','course' => '47','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '46',),
array('id' => '56','course' => '48','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '47',),
array('id' => '57','course' => '49','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '48',),
array('id' => '58','course' => '50','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '49',),
array('id' => '59','course' => '51','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '50',),
array('id' => '60','course' => '52','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '51',),
array('id' => '61','course' => '53','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '52',),
array('id' => '62','course' => '54','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '53',),
array('id' => '63','course' => '55','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '54',),
array('id' => '64','course' => '56','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '55',),
array('id' => '65','course' => '57','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '56',),
array('id' => '66','course' => '58','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '57',),
array('id' => '67','course' => '58','criteriatype' => '8','courseinstance' => '59',),
array('id' => '68','course' => '58','criteriatype' => '8','courseinstance' => '43',),
array('id' => '69','course' => '58','criteriatype' => '8','courseinstance' => '33',),
array('id' => '70','course' => '58','criteriatype' => '8','courseinstance' => '23',),
array('id' => '71','course' => '59','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '58',),
array('id' => '72','course' => '59','criteriatype' => '8','courseinstance' => '23',),
array('id' => '73','course' => '60','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '59',),
array('id' => '74','course' => '61','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '60',),
array('id' => '75','course' => '62','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '61',),
array('id' => '76','course' => '63','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '62',),
array('id' => '77','course' => '64','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '63',),
array('id' => '78','course' => '65','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '64',),
array('id' => '79','course' => '66','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '65',),
array('id' => '80','course' => '67','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '66',),
array('id' => '81','course' => '68','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '67',),
array('id' => '82','course' => '69','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '68',),
array('id' => '83','course' => '70','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '69',),
array('id' => '84','course' => '70','criteriatype' => '8','courseinstance' => '59',),
array('id' => '85','course' => '70','criteriatype' => '8','courseinstance' => '43',),
array('id' => '86','course' => '70','criteriatype' => '8','courseinstance' => '33',),
array('id' => '87','course' => '70','criteriatype' => '8','courseinstance' => '23',),
array('id' => '88','course' => '71','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '70',),
array('id' => '89','course' => '72','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '71',),
array('id' => '90','course' => '73','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '72',),
array('id' => '91','course' => '74','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '73',),
array('id' => '92','course' => '75','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '74',),
array('id' => '93','course' => '75','criteriatype' => '8','courseinstance' => '59',),
array('id' => '94','course' => '75','criteriatype' => '8','courseinstance' => '43',),
array('id' => '95','course' => '75','criteriatype' => '8','courseinstance' => '33',),
array('id' => '96','course' => '75','criteriatype' => '8','courseinstance' => '23',),
array('id' => '97','course' => '76','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '75',),
array('id' => '98','course' => '77','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '76',),
array('id' => '99','course' => '78','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '77',),
array('id' => '100','course' => '78','criteriatype' => '8','courseinstance' => '38',),
array('id' => '101','course' => '79','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '78',),
array('id' => '102','course' => '79','criteriatype' => '8','courseinstance' => '59',),
array('id' => '103','course' => '79','criteriatype' => '8','courseinstance' => '43',),
array('id' => '104','course' => '79','criteriatype' => '8','courseinstance' => '39',),
array('id' => '105','course' => '79','criteriatype' => '8','courseinstance' => '33',),
array('id' => '106','course' => '79','criteriatype' => '8','courseinstance' => '23',),
array('id' => '107','course' => '79','criteriatype' => '8','courseinstance' => '10',),
array('id' => '108','course' => '80','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '79',),
array('id' => '109','course' => '81','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '80',),
array('id' => '110','course' => '82','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '81',),
array('id' => '111','course' => '83','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '82',),
array('id' => '112','course' => '84','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '83',),
array('id' => '113','course' => '84','criteriatype' => '8','courseinstance' => '59',),
array('id' => '114','course' => '84','criteriatype' => '8','courseinstance' => '39',),
array('id' => '115','course' => '84','criteriatype' => '8','courseinstance' => '33',),
array('id' => '116','course' => '84','criteriatype' => '8','courseinstance' => '23',),
array('id' => '117','course' => '85','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '84',),
array('id' => '118','course' => '86','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '85',),
array('id' => '119','course' => '87','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '86',),
array('id' => '120','course' => '88','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '87',),
array('id' => '121','course' => '89','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '88',),
array('id' => '122','course' => '90','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '89',),
array('id' => '123','course' => '91','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '90',),
array('id' => '124','course' => '92','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '91',),
array('id' => '125','course' => '93','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '92',),
array('id' => '126','course' => '94','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '93',),
array('id' => '127','course' => '95','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '94',),
array('id' => '128','course' => '96','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '95',),
array('id' => '129','course' => '97','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '96',),
array('id' => '130','course' => '98','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '97',),
array('id' => '131','course' => '99','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '98',),
array('id' => '132','course' => '100','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '99',),
array('id' => '133','course' => '101','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '100',),
array('id' => '134','course' => '102','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '101',),
array('id' => '135','course' => '103','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '102',),
array('id' => '136','course' => '103','criteriatype' => '8','courseinstance' => '59',),
array('id' => '137','course' => '103','criteriatype' => '8','courseinstance' => '43',),
array('id' => '138','course' => '103','criteriatype' => '8','courseinstance' => '33',),
array('id' => '139','course' => '103','criteriatype' => '8','courseinstance' => '23',),
array('id' => '140','course' => '104','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '103',),
array('id' => '141','course' => '105','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '104',),
array('id' => '142','course' => '106','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '105',),
array('id' => '143','course' => '107','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '106',),
array('id' => '144','course' => '108','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '107',),
array('id' => '145','course' => '109','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '108',),
array('id' => '146','course' => '110','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '109',),
array('id' => '147','course' => '111','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '110',),
array('id' => '149','course' => '145','criteriatype' => '4','module' => 'forum','moduleinstance' => '830',),
array('id' => '150','course' => '145','criteriatype' => '4','module' => 'resource','moduleinstance' => '833',),
array('id' => '151','course' => '145','criteriatype' => '4','module' => 'quiz','moduleinstance' => '831',),
array('id' => '152','course' => '145','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '832',),
array('id' => '158','course' => '152','criteriatype' => '1',),
array('id' => '159','course' => '152','criteriatype' => '4','module' => 'resource','moduleinstance' => '963',),
array('id' => '160','course' => '152','criteriatype' => '6','gradepass' => '75.00000',),
array('id' => '161','course' => '152','criteriatype' => '7','role' => '3',),
array('id' => '166','course' => '153','criteriatype' => '4','module' => 'resource','moduleinstance' => '964',),
array('id' => '167','course' => '153','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '985',),
array('id' => '168','course' => '153','criteriatype' => '6','gradepass' => '50.00000',),
array('id' => '169','course' => '157','criteriatype' => '4','module' => 'resource','moduleinstance' => '960',),
array('id' => '170','course' => '157','criteriatype' => '4','module' => 'forum','moduleinstance' => '968',),
array('id' => '171','course' => '157','criteriatype' => '4','module' => 'quiz','moduleinstance' => '988',),
array('id' => '172','course' => '157','criteriatype' => '7','role' => '16',),
array('id' => '173','course' => '157','criteriatype' => '8','courseinstance' => '45',),
array('id' => '174','course' => '151','criteriatype' => '6','gradepass' => '98.00000',),
array('id' => '175','course' => '150','criteriatype' => '1',),
array('id' => '176','course' => '150','criteriatype' => '4','module' => 'forum','moduleinstance' => '922',),
array('id' => '177','course' => '150','criteriatype' => '4','module' => 'resource','moduleinstance' => '953',),
array('id' => '178','course' => '150','criteriatype' => '4','module' => 'resource','moduleinstance' => '976',),
array('id' => '179','course' => '161','criteriatype' => '4','module' => 'scorm','moduleinstance' => '995',),
array('id' => '180','course' => '162','criteriatype' => '4','module' => 'scorm','moduleinstance' => '997',),
array('id' => '181','course' => '217','criteriatype' => '4','module' => 'facetoface','moduleinstance' => '1154',),
array('id' => '182','course' => '217','criteriatype' => '6','gradepass' => '80.00000',),
array('id' => '183','course' => '217','criteriatype' => '7','role' => '3',),
array('id' => '184','course' => '217','criteriatype' => '8','courseinstance' => '45',),
);
print "\n";print "Inserting ".count($items)." records<br />\n";
$i=1;
foreach($items as $item) {
    if(get_field('course_completion_criteria', 'id', 'id', $item['id'])) {
        print "Record with id of {$item['id']} already exists!<br>\n";
        continue;
    }
    $newid = insert_record('course_completion_criteria',(object) $item);
    if($newid != $item['id']) {
        if(!set_field('course_completion_criteria', 'id', $item['id'], 'id', $newid)) {
            print "Could not change id from $newid to {$item['id']}<br>\n";
            continue;
        }
    }
    // record the highest id in the table
    $maxid = get_field_sql('SELECT '.sql_max('id').' FROM '.$CFG->prefix.'course_completion_criteria');
    // make sure sequence is higher than highest ID
    bump_sequence('course_completion_criteria', $CFG->prefix, $maxid);
    // print output
    // 1 dot per 10 inserts
    if($i%10==0) {
        print ".";
        flush();
    }
    // new line every 200 dots
    if($i%2000==0) {
        print $i." <br>";
    }
    $i++;
}
print "<br>";

set_config("guestloginbutton", 0);
set_config("langmenu", 0);
set_config("forcelogin", 1);