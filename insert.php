<?php
header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8'); 
mb_http_output('UTF-8'); 
mb_http_input('UTF-8'); 
mb_regex_encoding('UTF-8'); 

define('DB_NAME', 'shghla');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
     die('Could not connect: ' . mysql_error());
     }

     $db_selected = mysql_select_db(DB_NAME, $link);

     if (!$db_selected) {
     die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
     }
	 $value63 = null;
	 $value64 = null;
	 $value70 = null;
	 $value24 = null;
	 $value25 = null;
		 
     $value1 = $_POST['fName'];
     $value2 = $_POST['mName'];
     $value3 = $_POST['lName'];
     $value4 = $_POST['dob'];
     $value5 = $_POST['height'];
     $value6 = $_POST['weight'];
	 $value7 = $_POST['mobile1'];
     $value8 = $_POST['mobile2'];
     $value9 = $_POST['job1'];
     $value10 = $_POST['job2'];
     $value11 = $_POST['location1'];
     $value12 = $_POST['location2'];
	 $value13 = $_POST['career'];
     $value14 = $_POST['industry1'];
     $value15 = $_POST['industry2'];
     $value16 = $_POST['status'];
     $value17 = $_POST['tMSC'];
     $value18 = $_POST['cLevel'];
	 $value19 = $_POST['cPeriod'];
     $value20 = $_POST['lSCu'];
     $value21 = $_POST['cNationality'];
     $value22 = $_POST['cMarital'];
     $value23 = $_POST['cLicense'];
     $value24 = $_POST['cField'];
	 $value25 = $_POST['cTravel'];
     $value26 = $_POST['cIssued'];
     $value27 = $_POST['cAddress'];
     $value28 = $_POST['cPresent'];
     $value29 = $_POST['cCountry'];
	 $value30 = $_POST['cInstitution2'];
     $value31 = $_POST['cDegree2'];
     $value32 = $_POST['cMajor2'];
     $value33 = $_POST['cGrade2'];
     $value34 = $_POST['cEDescription2'];
     $value35 = $_POST['cSDate2'];
	 $value36 = $_POST['cEDate2'];
     $value37 = $_POST['cLocation2'];
     $value38 = $_POST['cCompany2'];
     $value39 = $_POST['cIndustry2'];
     $value40 = $_POST['cRole2'];
     $value41 = $_POST['cPCompany2'];
	 $value42 = $_POST['cWCompany2'];
     $value43 = $_POST['cLReason2'];
     $value44 = $_POST['cWDescription2'];
     $value45 = $_POST['cLanguages2'];
     $value46 = $_POST['cLProficiency2'];
     $value47 = $_POST['cLExperience2'];
	 $value48 = $_POST['cLLUsed2'];
     $value49 = $_POST['cOrganization2'];
     $value50 = $_POST['cMSince2'];
     $value51 = $_POST['cMRole2'];
     $value52 = $_POST['cRName2'];
     $value53 = $_POST['cCName2'];
	 $value54 = $_POST['cJTitle2'];
     $value55 = $_POST['cRPhone2'];
     $value56 = $_POST['cREmail2'];
     $value57 = $_POST['cSkill2'];
     $value58 = $_POST['cProficiency2'];
     $value59 = $_POST['cExperience2'];
     $value60 = $_POST['cLUsed2'];
     $value61 = $_POST['cSDescription2'];
	 $value62 = $_POST['gender'];
     $value63 = $_POST['mobZip'];      
	 $value64 = $_POST['mobZip2'];    
	 $value65 = $_POST['BranchName'];
	 $value66 = $_POST['lSalary'];
	 $value67 = $_POST['cDependents'];
	 $value68 = $_POST['cDetail'];
	 $value69 = $_POST['cDetail2'];
	 $value70 = $_POST['mobZip3'];
	 $value71 = $_POST['cREmail1'];	 if (isset($_FILES['uploadCV'])){
    $cvExtension = pathinfo($_FILES['uploadCV']['name'])['extension'];
    $cvName = time().'.'.$cvExtension;
    $targetCV = "./cv/".$cvName;
    move_uploaded_file($_FILES['uploadCV']['tmp_name'], $targetCV);		$value72 = $targetCV;
}else {	$value72=null;}
    $transcriptExtension = pathinfo($_FILES['uploadTranscript']['name'])['extension'];
    $transcriptName = time().'.'.$transcriptExtension;
    $targetTranscript = "./transcripts/".$transcriptName;
    move_uploaded_file($_FILES['uploadTranscript']['tmp_name'], $targetTranscript);

    
    $value73 = $targetTranscript;

     //$value72 = $_POST['uploadCV'];
     //$value73 = $_FILES['uploadTranscript']['name'];
 	 
 

     $sql = "INSERT INTO details (FName, MName, LName, DoB, Height, Weight, Mob1, Mob2, FTJob, STJob, FTLocation, STLocation, CObj, FInd, SInd, EmpType, TMSalary, CLevel, NPeriod, 
	 LMSalary, AddNation, MStatus, DLicense, Limit1, Limit2, DLIssued, PAddress1, PAddress2, Country, Institution, Degree, Major, Grade, Description, Sdate, Edate, Location, CName, CInd, 
	 JRole, Position, Web, LReason, WDescrip, Lang, Prof, Years, LUsed, Org, Since, Role, RefName, ComName, JTitle, Phone, Email, Skill, SProf, SYears, SLUsed, SDescrip, Gender, MobZip1,
	 MobZip2, TMSalary2, LMSalary2, Ndepend, PAddDetails1, PAddDetails2, MobZip3, YrEmail, CV, Transcript) VALUES ('{$value1}', '{$value2}', '{$value3}', '{$value4}', '{$value5}', '{$value6}', '{$value7}', '{$value8}', '{$value9}', '{$value10}', '{$value11}',
	 '{$value12}', '{$value13}', '{$value14}', '{$value15}', '{$value16}', '{$value17}','{$value18}', '{$value19}', '{$value20}', '{$value21}', '{$value22}', '{$value23}','{$value24}', '{$value25}', '{$value26}', '{$value27}', '{$value28}', '{$value29}',
	 '{$value30}', '{$value31}', '{$value32}', '{$value33}', '{$value34}', '{$value35}','{$value36}', '{$value37}', '{$value38}', '{$value39}', '{$value40}', '{$value41}','{$value42}', '{$value43}', '{$value44}', '{$value45}', '{$value46}', '{$value47}',
	 '{$value48}', '{$value49}', '{$value50}', '{$value51}', '{$value52}', '{$value53}','{$value54}', '{$value55}', '{$value56}', '{$value57}', '{$value58}', '{$value59}','{$value60}', '{$value61}', '{$value62}', '{$value63}', '{$value64}', '{$value65}',
	 '{$value66}', '{$value67}', '{$value68}', '{$value69}', '{$value70}', '{$value71}', '{$value72}', '{$value73}')";

	 //$insert = $mysql->query($sql);
  
	if(mysql_query($sql, $link)){
		echo "Thank you, your information were added successfully.
         شكراً ،لقد تم أدخال معلوماتك بنجاح";
	} else{
		echo "ERROR: Unable to execute $sql.
         خطأ: لم يتم أدخال المعلومات" . mysql_error($link);
	}
 
	// close connection
	mysql_close($link);
     
?>


