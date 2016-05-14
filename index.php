<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Employment Form - أستمارة توظيف</title>
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.ltr.css"/>
    <link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="js/select/css/bootstrap-select.css"/>
    <link rel="stylesheet" type="text/css" href="js/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css"/>
    <link rel="stylesheet" type="text/css" href="js/dp/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/animation.css"/>
    <link rel="stylesheet" type="text/css" href="css/cal-iconz.css"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.ltr.css"/>
	<link rel="shortcut icon" type="img/x-icon" href="img/ras.ico"  />
	
	<script src = "http://maps.googleapis.com/maps/api/js?language=en"></script>
    <script>
         function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(33.28563000637936, 44.39920260833618), 
               zoom:15, 
               mapTypeId:google.maps.MapTypeId.HYBRID,
			   disableDefaultUI: false
            };
				
            var map = new google.maps.Map(document.getElementById("googlemap"),mapOptions);
			
			var marker = new google.maps.Marker({
               position: new google.maps.LatLng(33.28563000637936, 44.39920260833618),
               map: map,
               draggable:false,
               icon:'img/RAS.jpg'
            });
			 marker.setMap(map);
			
			var infowindow = new google.maps.InfoWindow({
               content:"<p>"+"Raban Al Safina General Contracting" +"<br />"+
			   "District 913, Street 28, building 27"+"<br />"+
			   "Al Jadiriyia, Baghdad-Iraq"+"<br />"+
			   "<br />"+
			   "contact@rabanalsafina.com"+"<br/>"+
			   "+964 7711119082"+"<br/>"+
			   "http://rabanalsafina.com/"+"</p>"
			});
            
            google.maps.event.addListener(marker, 'click', function() {
               infowindow.open(map,marker);
            });
         }			
         //google.maps.event.addDomListener(window, 'load', loadMap);
    </script>

	
<script type="text/javascript" charset= "utf-8">

function validate_form ( )
{
    valid = true;

    if ( document.form1.fName.value == "")
    {
        alert ( "Please enter your first name...يرجى أدخال الأسم الأول" );
	document.form1.fName.focus();
        return false;
    }
	
	if ( document.form1.lName.value == "")
    {
        alert ( "Please enter your last name...يرجى أدخال الأسم الثالث" );
	document.form1.lName.focus();
        return false;
    }
	
	if ( document.form1.gender.value == "")
    {
        alert ( "Please enter your gender...يرجى أدخال الجنس" );
	document.form1.gender.focus();
        return false;
    }

	if ( document.form1.dob.value == "")
    {
        alert ( "Please enter your Date of Birth...يرجى أدخال تاريخ ميلادك" );
	document.form1.dob.focus();
        return false;
    }

	if ( (document.form1.mobZip.value == "") || (document.form1.mobile1.value == ""))
    {
        alert ( "Please enter your First Mobile no....يرجى أدخال رقم الموبايل الأول" );
	document.form1.mobZip.focus();
	document.form1.mobile1.focus();
        return false;
    }	

	if ( document.form1.cREmail1.value == "")
    {
        alert ( "Please enter your Email Address...يرجى أدخال أيميلك" );
	document.form1.cREmail1.focus();
        return false;
    }	
	
	if ( document.form1.status.value == "")
    {
        alert ( "Please enter the employment type ...يرجى أدخال نظام العمل" );
	document.form1.status.focus();
        return false;
    }

	if ( document.form1.cMarital.value == "")
    {
        alert ( "Please enter your marital status ...يرجى أدخال حالتك الزوجية" );
	document.form1.cMarital.focus();
        return false;
    }
	
	if ( document.form1.cAddress.value == "")
    {
        alert ( "Please enter your permanent address ...يرجى أدخال عنوانك الدائم" );
	document.form1.cAddress.focus();
        return false;
    }

	if ( document.form1.cField.value == "")    {        alert ( "Any limitations on your ability to perform your work? ...هل يوجد قيود على اداء عملك؟" );	document.form1.cField.focus();        return false;    }	if ( document.form1.cTravel.value == "")    {        alert ( "ِAny limitations on your ability to engage in travel? ...هل يوجد قيود على اشتراكك في سفر؟" );	document.form1.cTravel.focus();        return false;    }	if ( document.form1.uploadTranscript.value == "")    {        alert ( "Please enter your Transcript ...يرجى تحميل شهادة الدرجات" );	document.form1.uploadTranscript.focus();        return false;    }	
	if ((document.form1.cInstitution2.value == "")||(document.form1.cCountry.value == "")||(document.form1.cDegree2.value == "")||(document.form1.cMajor2.value == "")||(document.form1.cGrade2.value == ""))
    {
        alert ( "Please enter Your full education info...يرجى أدخال معلومات تعليمك كاملة");
	document.form1.cInstitution2.focus();
	document.form1.cCountry.focus();
	document.form1.cDegree2.focus();
	document.form1.cMajor2.focus();
	document.form1.cGrade2.focus();
        return false;
    }
	
    alert ( "All info are available and checking is successful...جميع المدخلات موجودة تم التدقيق بنجاح!" );
    document.getElementById("xx").disabled = false;
}

function personalDetails(){
	document.getElementById("job_details").style.display = 'none';
	document.getElementById("personal_details").style.display = 'inline-block';

}

function jobDetails(){
	document.getElementById("personal_details").style.display = 'none';
	document.getElementById("job_details").style.display = 'inline-block';
	document.getElementById("experiences").style.display = 'none';
}

function experiences(){
	document.getElementById("job_details").style.display = 'none';
	document.getElementById("experiences").style.display = 'inline-block';
	document.getElementById("education").style.display = 'none';
}

function education(){
	document.getElementById("experiences").style.display = 'none';
	document.getElementById("education").style.display = 'inline-block';
	document.getElementById("other_info").style.display = 'none';
}

function otherInfo(){
	document.getElementById("education").style.display = 'none';
	document.getElementById("other_info").style.display = 'inline-block';
	document.getElementById("references").style.display = 'none';
}

function references(){
	document.getElementById("other_info").style.display = 'none';
	document.getElementById("references").style.display = 'inline-block';
	document.getElementById("uploads").style.display = 'none';
}

function uploads(){
	document.getElementById("references").style.display = 'none';
	document.getElementById("uploads").style.display = 'inline-block';
}

function validateNumber(evt) {
    
    var theEvent = evt || window.event;
	var key = theEvent.keyCode || theEvent.which;
	key = String.fromCharCode( key );
	var regex = /[0-9]/;
	if( !regex.test(key) ) {
	theEvent.returnValue = false;
	if(theEvent.preventDefault) theEvent.preventDefault();
	}
}

</script>

</head>
<body onload = "loadMap()">
<div class="container center-block">
	 <!-- Logo -->
            <a class="logo">
                <img class="fadeInDown  animated" src="img/logo.png" alt="Logo">
            </a>
     <!-- End Logo -->

    <div class="row">
        <div class="text-center">
            <div>
                <h1>Employment Form</h1>
                <h1 dir="auto">أستمارة توظيف</h1>
            </div>
        </div>
        <div class="text-center">
            <div>
                <h3>Registration Information</h3>
                <h3 dir="auto">معلومات التسجيل </h3>
            </div>
        </div>

<p><span class="error">&nbsp;&nbsp;&nbsp; * required field.</span></p>	
<form name="form1" action="insert.php" method="post" enctype="multipart/form-data">
	

	<div id="personal_details">&nbsp;&nbsp;&nbsp; Personal Details - المعلومات الشخصية <br>	<p><br></p>
        <div class="col-lg-12 center-block">
            <div class="col-lg-4">
                <span>First Name : * </span>
                <span><input dir="auto" placeholder="الاسم" class="form-control" type="text" name="fName"
                             id="fName"></span>
            </div>
            <div class="col-lg-4">
                <span>Mid Name :</span>
                <span><input dir="auto" placeholder="الاب" class="form-control" type="text" name="mName"
                             id="mName"></span>
            </div>
            <div class="col-lg-4">
                <span>Last Name : *</span>
                <span><input dir="auto" placeholder="الجد" class="form-control" type="text" name="lName"
                             id="lName"></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Gender :*</span>
                    <span>
                        <select title="Gender / الجنس" class="form-control" name="gender" id="gender">
                            <option>Male / ذكر</option>
                            <option>Female / أنثى</option>
                        </select>
                    </span>
            </div>
            <div class="col-lg-6">
                <span>Date of Birth :*</span>
                <span><input dir="auto" placeholder="تأريخ الميلاد" class="form-control" type="text" name="dob"
                             id="dob"></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Height :</span>
                <span><input dir="auto" placeholder="الطول" class="form-control" type="text" name="height" id="height"></span>
            </div>
            <div class="col-lg-6">
                <span>Weight :</span>
                <span><input dir="auto" placeholder="الوزن" class="form-control" type="text" name="weight" id="weight"></span>
            </div>
        </div>
        <div class="col-lg-12">

        <div class="col-lg-6">
            <span>Mobile 1*:</span>  
            	<div class="row">
                	<div class="col-lg-3">                       
                		<select title="Int.Code" class="mobZip" name= "mobZip" id="mobZip" data-live-search="true">
								<option data-countryCode="DZ" value="+213">Algeria (+213)</option>
								<option data-countryCode="AD" value="+376">Andorra (+376)</option>
								<option data-countryCode="AO" value="+244">Angola (+244)</option>
								<option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
								<option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
								<option data-countryCode="AR" value="+54">Argentina (+54)</option>
								<option data-countryCode="AM" value="+374">Armenia (+374)</option>
								<option data-countryCode="AW" value="+297">Aruba (+297)</option>
								<option data-countryCode="AU" value="+61">Australia (+61)</option>
								<option data-countryCode="AT" value="+43">Austria (+43)</option>
								<option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
								<option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
								<option data-countryCode="BH" value="+973">Bahrain (+973)</option>
								<option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
								<option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
								<option data-countryCode="BY" value="+375">Belarus (+375)</option>
								<option data-countryCode="BE" value="+32">Belgium (+32)</option>
								<option data-countryCode="BZ" value="+501">Belize (+501)</option>
								<option data-countryCode="BJ" value="+229">Benin (+229)</option>
								<option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
								<option data-countryCode="BT" value="+975">Bhutan (+975)</option>
								<option data-countryCode="BO" value="+591">Bolivia (+591)</option>
								<option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
								<option data-countryCode="BW" value="+267">Botswana (+267)</option>
								<option data-countryCode="BR" value="+55">Brazil (+55)</option>
								<option data-countryCode="BN" value="+673">Brunei (+673)</option>
								<option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
								<option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
								<option data-countryCode="BI" value="+257">Burundi (+257)</option>
								<option data-countryCode="KH" value="+855">Cambodia (+855)</option>
								<option data-countryCode="CM" value="+237">Cameroon (+237)</option>
								<option data-countryCode="CA" value="+1">Canada (+1)</option>
								<option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
								<option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
								<option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
								<option data-countryCode="CL" value="+56">Chile (+56)</option>
								<option data-countryCode="CN" value="+86">China (+86)</option>
								<option data-countryCode="CO" value="+57">Colombia (+57)</option>
								<option data-countryCode="KM" value="+269">Comoros (+269)</option>
								<option data-countryCode="CG" value="+242">Congo (+242)</option>
								<option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
								<option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
								<option data-countryCode="HR" value="+385">Croatia (+385)</option>
								<option data-countryCode="CU" value="+53">Cuba (+53)</option>
								<option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
								<option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
								<option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
								<option data-countryCode="DK" value="+45">Denmark (+45)</option>
								<option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
								<option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
								<option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
								<option data-countryCode="EC" value="+593">Ecuador (+593)</option>
								<option data-countryCode="EG" value="+20">Egypt (+20)</option>
								<option data-countryCode="SV" value="+503">El Salvador (+503)</option>
								<option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
								<option data-countryCode="ER" value="+291">Eritrea (+291)</option>
								<option data-countryCode="EE" value="+372">Estonia (+372)</option>
								<option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
								<option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
								<option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
								<option data-countryCode="FJ" value="+679">Fiji (+679)</option>
								<option data-countryCode="FI" value="+358">Finland (+358)</option>
								<option data-countryCode="FR" value="+33">France (+33)</option>
								<option data-countryCode="GF" value="+594">French Guiana (+594)</option>
								<option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
								<option data-countryCode="GA" value="+241">Gabon (+241)</option>
								<option data-countryCode="GM" value="+220">Gambia (+220)</option>
								<option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
								<option data-countryCode="DE" value="+49">Germany (+49)</option>
								<option data-countryCode="GH" value="+233">Ghana (+233)</option>
								<option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
								<option data-countryCode="GR" value="+30">Greece (+30)</option>
								<option data-countryCode="GL" value="+299">Greenland (+299)</option>
								<option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
								<option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
								<option data-countryCode="GU" value="+671">Guam (+671)</option>
								<option data-countryCode="GT" value="+502">Guatemala (+502)</option>
								<option data-countryCode="GN" value="+224">Guinea (+224)</option>
								<option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
								<option data-countryCode="GY" value="+592">Guyana (+592)</option>
								<option data-countryCode="HT" value="+509">Haiti (+509)</option>
								<option data-countryCode="HN" value="+504">Honduras (+504)</option>
								<option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
								<option data-countryCode="HU" value="+36">Hungary (+36)</option>
								<option data-countryCode="IS" value="+354">Iceland (+354)</option>
								<option data-countryCode="IN" value="+91">India (+91)</option>
								<option data-countryCode="ID" value="+62">Indonesia (+62)</option>
								<option data-countryCode="IR" value="+98">Iran (+98)</option>
								<option data-countryCode="IQ" value="+964">Iraq (+964)</option>
								<option data-countryCode="IE" value="+353">Ireland (+353)</option>
								<option data-countryCode="IL" value="+972">Israel (+972)</option>
								<option data-countryCode="IT" value="+39">Italy (+39)</option>
								<option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
								<option data-countryCode="JP" value="+81">Japan (+81)</option>
								<option data-countryCode="JO" value="+962">Jordan (+962)</option>
								<option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
								<option data-countryCode="KE" value="+254">Kenya (+254)</option>
								<option data-countryCode="KI" value="+686">Kiribati (+686)</option>
								<option data-countryCode="KP" value="+850">Korea North (+850)</option>
								<option data-countryCode="KR" value="+82">Korea South (+82)</option>
								<option data-countryCode="KW" value="+965">Kuwait (+965)</option>
								<option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
								<option data-countryCode="LA" value="+856">Laos (+856)</option>
								<option data-countryCode="LV" value="+371">Latvia (+371)</option>
								<option data-countryCode="LB" value="+961">Lebanon (+961)</option>
								<option data-countryCode="LS" value="+266">Lesotho (+266)</option>
								<option data-countryCode="LR" value="+231">Liberia (+231)</option>
								<option data-countryCode="LY" value="+218">Libya (+218)</option>
								<option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
								<option data-countryCode="LT" value="+370">Lithuania (+370)</option>
								<option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
								<option data-countryCode="MO" value="+853">Macao (+853)</option>
								<option data-countryCode="MK" value="+389">Macedonia (+389)</option>
								<option data-countryCode="MG" value="+261">Madagascar (+261)</option>
								<option data-countryCode="MW" value="+265">Malawi (+265)</option>
								<option data-countryCode="MY" value="+60">Malaysia (+60)</option>
								<option data-countryCode="MV" value="+960">Maldives (+960)</option>
								<option data-countryCode="ML" value="+223">Mali (+223)</option>
								<option data-countryCode="MT" value="+356">Malta (+356)</option>
								<option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
								<option data-countryCode="MQ" value="+596">Martinique (+596)</option>
								<option data-countryCode="MR" value="+222">Mauritania (+222)</option>
								<option data-countryCode="YT" value="+269">Mayotte (+269)</option>
								<option data-countryCode="MX" value="+52">Mexico (+52)</option>
								<option data-countryCode="FM" value="+691">Micronesia (+691)</option>
								<option data-countryCode="MD" value="+373">Moldova (+373)</option>
								<option data-countryCode="MC" value="+377">Monaco (+377)</option>
								<option data-countryCode="MN" value="+976">Mongolia (+976)</option>
								<option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
								<option data-countryCode="MA" value="+212">Morocco (+212)</option>
								<option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
								<option data-countryCode="MN" value="+95">Myanmar (+95)</option>
								<option data-countryCode="NA" value="+264">Namibia (+264)</option>
								<option data-countryCode="NR" value="+674">Nauru (+674)</option>
								<option data-countryCode="NP" value="+977">Nepal (+977)</option>
								<option data-countryCode="NL" value="+31">Netherlands (+31)</option>
								<option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
								<option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
								<option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
								<option data-countryCode="NE" value="+227">Niger (+227)</option>
								<option data-countryCode="NG" value="+234">Nigeria (+234)</option>
								<option data-countryCode="NU" value="+683">Niue (+683)</option>
								<option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
								<option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
								<option data-countryCode="NO" value="+47">Norway (+47)</option>
								<option data-countryCode="OM" value="+968">Oman (+968)</option>
								<option data-countryCode="PW" value="+680">Palau (+680)</option>
								<option data-countryCode="PA" value="+507">Panama (+507)</option>
								<option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
								<option data-countryCode="PY" value="+595">Paraguay (+595)</option>
								<option data-countryCode="PE" value="+51">Peru (+51)</option>
								<option data-countryCode="PH" value="+63">Philippines (+63)</option>
								<option data-countryCode="PL" value="+48">Poland (+48)</option>
								<option data-countryCode="PT" value="+351">Portugal (+351)</option>
								<option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
								<option data-countryCode="QA" value="+974">Qatar (+974)</option>
								<option data-countryCode="RE" value="+262">Reunion (+262)</option>
								<option data-countryCode="RO" value="+40">Romania (+40)</option>
								<option data-countryCode="RU" value="+7">Russia (+7)</option>
								<option data-countryCode="RW" value="+250">Rwanda (+250)</option>
								<option data-countryCode="SM" value="+378">San Marino (+378)</option>
								<option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
								<option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
								<option data-countryCode="SN" value="+221">Senegal (+221)</option>
								<option data-countryCode="CS" value="+381">Serbia (+381)</option>
								<option data-countryCode="SC" value="+248">Seychelles (+248)</option>
								<option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
								<option data-countryCode="SG" value="+65">Singapore (+65)</option>
								<option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
								<option data-countryCode="SI" value="+386">Slovenia (+386)</option>
								<option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
								<option data-countryCode="SO" value="+252">Somalia (+252)</option>
								<option data-countryCode="ZA" value="+27">South Africa (+27)</option>
								<option data-countryCode="ES" value="+34">Spain (+34)</option>
								<option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
								<option data-countryCode="SH" value="+290">St. Helena (+290)</option>
								<option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
								<option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
								<option data-countryCode="SD" value="+249">Sudan (+249)</option>
								<option data-countryCode="SR" value="+597">Suriname (+597)</option>
								<option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
								<option data-countryCode="SE" value="+46">Sweden (+46)</option>
								<option data-countryCode="CH" value="+41">Switzerland (+41)</option>
								<option data-countryCode="SI" value="+963">Syria (+963)</option>
								<option data-countryCode="TW" value="+886">Taiwan (+886)</option>
								<option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
								<option data-countryCode="TH" value="+66">Thailand (+66)</option>
								<option data-countryCode="TG" value="+228">Togo (+228)</option>
								<option data-countryCode="TO" value="+676">Tonga (+676)</option>
								<option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
								<option data-countryCode="TN" value="+216">Tunisia (+216)</option>
								<option data-countryCode="TR" value="+90">Turkey (+90)</option>
								<option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
								<option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
								<option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
								<option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
								<option data-countryCode="UG" value="+256">Uganda (+256)</option>
								<option data-countryCode="GB" value="+44">UK (+44)</option>
								<option data-countryCode="UA" value="+380">Ukraine (+380)</option>
								<option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
								<option data-countryCode="UY" value="+598">Uruguay (+598)</option>
								<option data-countryCode="US" value="+1">USA (+1)</option>
								<option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
								<option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
								<option data-countryCode="VA" value="+379">Vatican City (+379)</option>
								<option data-countryCode="VE" value="+58">Venezuela (+58)</option>
								<option data-countryCode="VN" value="+84">Vietnam (+84)</option>
								<option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
								<option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
								<option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
								<option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
								<option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
								<option data-countryCode="ZM" value="+260">Zambia (+260)</option>
								<option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>                            </select>
					</div>
					<div class="col-lg-9">
					<input dir="auto" placeholder="رقم الهاتف" class="form-control" type="text" name="mobile1" id="mobile1" onkeypress="validateNumber(event)"></div>
					</div>
            </div>
            <div class="col-lg-6">
            <span>Mobile 2:</span>  
            	<div class="row">
                	<div class="col-lg-3">                       
                		<select title="Int.Code" class="mobZip" name= "mobZip2" id="mobZip2" data-live-search="true">
								<option data-countryCode="DZ" value="+213">Algeria (+213)</option>
								<option data-countryCode="AD" value="+376">Andorra (+376)</option>
								<option data-countryCode="AO" value="+244">Angola (+244)</option>
								<option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
								<option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
								<option data-countryCode="AR" value="+54">Argentina (+54)</option>
								<option data-countryCode="AM" value="+374">Armenia (+374)</option>
								<option data-countryCode="AW" value="+297">Aruba (+297)</option>
								<option data-countryCode="AU" value="+61">Australia (+61)</option>
								<option data-countryCode="AT" value="+43">Austria (+43)</option>
								<option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
								<option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
								<option data-countryCode="BH" value="+973">Bahrain (+973)</option>
								<option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
								<option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
								<option data-countryCode="BY" value="+375">Belarus (+375)</option>
								<option data-countryCode="BE" value="+32">Belgium (+32)</option>
								<option data-countryCode="BZ" value="+501">Belize (+501)</option>
								<option data-countryCode="BJ" value="+229">Benin (+229)</option>
								<option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
								<option data-countryCode="BT" value="+975">Bhutan (+975)</option>
								<option data-countryCode="BO" value="+591">Bolivia (+591)</option>
								<option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
								<option data-countryCode="BW" value="+267">Botswana (+267)</option>
								<option data-countryCode="BR" value="+55">Brazil (+55)</option>
								<option data-countryCode="BN" value="+673">Brunei (+673)</option>
								<option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
								<option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
								<option data-countryCode="BI" value="+257">Burundi (+257)</option>
								<option data-countryCode="KH" value="+855">Cambodia (+855)</option>
								<option data-countryCode="CM" value="+237">Cameroon (+237)</option>
								<option data-countryCode="CA" value="+1">Canada (+1)</option>
								<option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
								<option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
								<option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
								<option data-countryCode="CL" value="+56">Chile (+56)</option>
								<option data-countryCode="CN" value="+86">China (+86)</option>
								<option data-countryCode="CO" value="+57">Colombia (+57)</option>
								<option data-countryCode="KM" value="+269">Comoros (+269)</option>
								<option data-countryCode="CG" value="+242">Congo (+242)</option>
								<option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
								<option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
								<option data-countryCode="HR" value="+385">Croatia (+385)</option>
								<option data-countryCode="CU" value="+53">Cuba (+53)</option>
								<option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
								<option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
								<option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
								<option data-countryCode="DK" value="+45">Denmark (+45)</option>
								<option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
								<option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
								<option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
								<option data-countryCode="EC" value="+593">Ecuador (+593)</option>
								<option data-countryCode="EG" value="+20">Egypt (+20)</option>
								<option data-countryCode="SV" value="+503">El Salvador (+503)</option>
								<option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
								<option data-countryCode="ER" value="+291">Eritrea (+291)</option>
								<option data-countryCode="EE" value="+372">Estonia (+372)</option>
								<option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
								<option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
								<option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
								<option data-countryCode="FJ" value="+679">Fiji (+679)</option>
								<option data-countryCode="FI" value="+358">Finland (+358)</option>
								<option data-countryCode="FR" value="+33">France (+33)</option>
								<option data-countryCode="GF" value="+594">French Guiana (+594)</option>
								<option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
								<option data-countryCode="GA" value="+241">Gabon (+241)</option>
								<option data-countryCode="GM" value="+220">Gambia (+220)</option>
								<option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
								<option data-countryCode="DE" value="+49">Germany (+49)</option>
								<option data-countryCode="GH" value="+233">Ghana (+233)</option>
								<option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
								<option data-countryCode="GR" value="+30">Greece (+30)</option>
								<option data-countryCode="GL" value="+299">Greenland (+299)</option>
								<option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
								<option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
								<option data-countryCode="GU" value="+671">Guam (+671)</option>
								<option data-countryCode="GT" value="+502">Guatemala (+502)</option>
								<option data-countryCode="GN" value="+224">Guinea (+224)</option>
								<option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
								<option data-countryCode="GY" value="+592">Guyana (+592)</option>
								<option data-countryCode="HT" value="+509">Haiti (+509)</option>
								<option data-countryCode="HN" value="+504">Honduras (+504)</option>
								<option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
								<option data-countryCode="HU" value="+36">Hungary (+36)</option>
								<option data-countryCode="IS" value="+354">Iceland (+354)</option>
								<option data-countryCode="IN" value="+91">India (+91)</option>
								<option data-countryCode="ID" value="+62">Indonesia (+62)</option>
								<option data-countryCode="IR" value="+98">Iran (+98)</option>
								<option data-countryCode="IQ" value="+964">Iraq (+964)</option>
								<option data-countryCode="IE" value="+353">Ireland (+353)</option>
								<option data-countryCode="IL" value="+972">Israel (+972)</option>
								<option data-countryCode="IT" value="+39">Italy (+39)</option>
								<option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
								<option data-countryCode="JP" value="+81">Japan (+81)</option>
								<option data-countryCode="JO" value="+962">Jordan (+962)</option>
								<option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
								<option data-countryCode="KE" value="+254">Kenya (+254)</option>
								<option data-countryCode="KI" value="+686">Kiribati (+686)</option>
								<option data-countryCode="KP" value="+850">Korea North (+850)</option>
								<option data-countryCode="KR" value="+82">Korea South (+82)</option>
								<option data-countryCode="KW" value="+965">Kuwait (+965)</option>
								<option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
								<option data-countryCode="LA" value="+856">Laos (+856)</option>
								<option data-countryCode="LV" value="+371">Latvia (+371)</option>
								<option data-countryCode="LB" value="+961">Lebanon (+961)</option>
								<option data-countryCode="LS" value="+266">Lesotho (+266)</option>
								<option data-countryCode="LR" value="+231">Liberia (+231)</option>
								<option data-countryCode="LY" value="+218">Libya (+218)</option>
								<option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
								<option data-countryCode="LT" value="+370">Lithuania (+370)</option>
								<option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
								<option data-countryCode="MO" value="+853">Macao (+853)</option>
								<option data-countryCode="MK" value="+389">Macedonia (+389)</option>
								<option data-countryCode="MG" value="+261">Madagascar (+261)</option>
								<option data-countryCode="MW" value="+265">Malawi (+265)</option>
								<option data-countryCode="MY" value="+60">Malaysia (+60)</option>
								<option data-countryCode="MV" value="+960">Maldives (+960)</option>
								<option data-countryCode="ML" value="+223">Mali (+223)</option>
								<option data-countryCode="MT" value="+356">Malta (+356)</option>
								<option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
								<option data-countryCode="MQ" value="+596">Martinique (+596)</option>
								<option data-countryCode="MR" value="+222">Mauritania (+222)</option>
								<option data-countryCode="YT" value="+269">Mayotte (+269)</option>
								<option data-countryCode="MX" value="+52">Mexico (+52)</option>
								<option data-countryCode="FM" value="+691">Micronesia (+691)</option>
								<option data-countryCode="MD" value="+373">Moldova (+373)</option>
								<option data-countryCode="MC" value="+377">Monaco (+377)</option>
								<option data-countryCode="MN" value="+976">Mongolia (+976)</option>
								<option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
								<option data-countryCode="MA" value="+212">Morocco (+212)</option>
								<option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
								<option data-countryCode="MN" value="+95">Myanmar (+95)</option>
								<option data-countryCode="NA" value="+264">Namibia (+264)</option>
								<option data-countryCode="NR" value="+674">Nauru (+674)</option>
								<option data-countryCode="NP" value="+977">Nepal (+977)</option>
								<option data-countryCode="NL" value="+31">Netherlands (+31)</option>
								<option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
								<option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
								<option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
								<option data-countryCode="NE" value="+227">Niger (+227)</option>
								<option data-countryCode="NG" value="+234">Nigeria (+234)</option>
								<option data-countryCode="NU" value="+683">Niue (+683)</option>
								<option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
								<option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
								<option data-countryCode="NO" value="+47">Norway (+47)</option>
								<option data-countryCode="OM" value="+968">Oman (+968)</option>
								<option data-countryCode="PW" value="+680">Palau (+680)</option>
								<option data-countryCode="PA" value="+507">Panama (+507)</option>
								<option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
								<option data-countryCode="PY" value="+595">Paraguay (+595)</option>
								<option data-countryCode="PE" value="+51">Peru (+51)</option>
								<option data-countryCode="PH" value="+63">Philippines (+63)</option>
								<option data-countryCode="PL" value="+48">Poland (+48)</option>
								<option data-countryCode="PT" value="+351">Portugal (+351)</option>
								<option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
								<option data-countryCode="QA" value="+974">Qatar (+974)</option>
								<option data-countryCode="RE" value="+262">Reunion (+262)</option>
								<option data-countryCode="RO" value="+40">Romania (+40)</option>
								<option data-countryCode="RU" value="+7">Russia (+7)</option>
								<option data-countryCode="RW" value="+250">Rwanda (+250)</option>
								<option data-countryCode="SM" value="+378">San Marino (+378)</option>
								<option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
								<option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
								<option data-countryCode="SN" value="+221">Senegal (+221)</option>
								<option data-countryCode="CS" value="+381">Serbia (+381)</option>
								<option data-countryCode="SC" value="+248">Seychelles (+248)</option>
								<option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
								<option data-countryCode="SG" value="+65">Singapore (+65)</option>
								<option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
								<option data-countryCode="SI" value="+386">Slovenia (+386)</option>
								<option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
								<option data-countryCode="SO" value="+252">Somalia (+252)</option>
								<option data-countryCode="ZA" value="+27">South Africa (+27)</option>
								<option data-countryCode="ES" value="+34">Spain (+34)</option>
								<option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
								<option data-countryCode="SH" value="+290">St. Helena (+290)</option>
								<option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
								<option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
								<option data-countryCode="SD" value="+249">Sudan (+249)</option>
								<option data-countryCode="SR" value="+597">Suriname (+597)</option>
								<option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
								<option data-countryCode="SE" value="+46">Sweden (+46)</option>
								<option data-countryCode="CH" value="+41">Switzerland (+41)</option>
								<option data-countryCode="SI" value="+963">Syria (+963)</option>
								<option data-countryCode="TW" value="+886">Taiwan (+886)</option>
								<option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
								<option data-countryCode="TH" value="+66">Thailand (+66)</option>
								<option data-countryCode="TG" value="+228">Togo (+228)</option>
								<option data-countryCode="TO" value="+676">Tonga (+676)</option>
								<option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
								<option data-countryCode="TN" value="+216">Tunisia (+216)</option>
								<option data-countryCode="TR" value="+90">Turkey (+90)</option>
								<option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
								<option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
								<option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
								<option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
								<option data-countryCode="UG" value="+256">Uganda (+256)</option>
								<option data-countryCode="GB" value="+44">UK (+44)</option>
								<option data-countryCode="UA" value="+380">Ukraine (+380)</option>
								<option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
								<option data-countryCode="UY" value="+598">Uruguay (+598)</option>
								<option data-countryCode="US" value="+1">USA (+1)</option>
								<option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
								<option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
								<option data-countryCode="VA" value="+379">Vatican City (+379)</option>
								<option data-countryCode="VE" value="+58">Venezuela (+58)</option>
								<option data-countryCode="VN" value="+84">Vietnam (+84)</option>
								<option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
								<option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
								<option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
								<option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
								<option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
								<option data-countryCode="ZM" value="+260">Zambia (+260)</option>
								<option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>                            </select>
					</div>
					<div class="col-lg-9">
					<input dir="auto" placeholder="رقم الهاتف" class="form-control" type="text" name="mobile2" id="mobile2" onkeypress="validateNumber(event)"></div>
					</div>
            </div>

			<div class="col-lg-6">
                <span>Your Email Address :*</span>
                <input dir="auto" placeholder="بريدك الالكتروني" class="form-control" type="text" name="cREmail1"
                       id="cREmail1">
			</div>
        </div>
        <p align="right">تفاصيل العمل &nbsp;&nbsp;</p>
		<div class="col-lg-12" align="right">
			<div class="col-lg-offset-9"><button type="button" class="btn btn-default" onclick="jobDetails()"> Job Application Details >> </button></div>
		</div>
    </div>

    <div id="job_details" style="display: none;">
		<div class="col-lg-6"><p></p></div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>1st Target Job Title :</span>
                <span><input dir="auto" placeholder="عنوان الوظيفي المطلوب" class="form-control" type="text" name="job1"
                             id="job1"></span>
            </div>
            <div class="col-lg-6">
                <span>2nd Target Job Title :</span>
                <span><input dir="auto" placeholder="عنوان الوظيفي المطلوب" class="form-control" type="text" name="job2"
                             id="job2"></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>1st Target Job Location :</span>
                <select title="موقع العمل المطلوب - الاول" id="location1" name="location1" class="location form-control">
                    <option>Iraq</option>
                    <option>Iraq-Al-Anbar</option>
                    <option>Iraq-Al-Basrah</option>
                    <option>Iraq-Al-Muthanna</option>
                    <option>Iraq-Al-Qadisiyah</option>
                    <option>Iraq-Al-Najaf</option>
                    <option>Iraq-Erbil</option>
                    <option>Iraq-Al-Sulaymaniyah</option>
                    <option>Iraq-Karkuk</option>
                    <option>Iraq-Babil</option>
                    <option>Iraq-Baghdad</option>
                    <option>Iraq-Dahuk</option>
                    <option>Iraq-Dhi Qar</option>
                    <option>Iraq-Diyala</option>
                    <option>Iraq-Karbala</option>
                    <option>Iraq-Maysan</option>
                    <option>Iraq-Ninawa</option>
                    <option>Iraq-Salah ad-Din</option>
                    <option>Iraq-Wasit</option>
                    <option>Dubai</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>2nd Target Job Location :</span>
                <select title="موقع العمل المطلوب - الثاني" id="location2" name="location2"
                        class="location form-control">
                    <option>Iraq</option>
                    <option>Iraq-Al-Anbar</option>
                    <option>Iraq-Al-Basrah</option>
                    <option>Iraq-Al-Muthanna</option>
                    <option>Iraq-Al-Qadisiyah</option>
                    <option>Iraq-Al-Najaf</option>
                    <option>Iraq-Erbil</option>
                    <option>Iraq-Al-Sulaymaniyah</option>
                    <option>Iraq-Karkuk</option>
                    <option>Iraq-Babil</option>
                    <option>Iraq-Baghdad</option>
                    <option>Iraq-Dahuk</option>
                    <option>Iraq-Dhi Qar</option>
                    <option>Iraq-Diyala</option>
                    <option>Iraq-Karbala</option>
                    <option>Iraq-Maysan</option>
                    <option>Iraq-Ninawa</option>
                    <option>Iraq-Salah ad-Din</option>
                    <option>Iraq-Wasit</option>
                    <option>Dubai</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <span>Career Objective :</span>

                <span><textarea dir="auto" placeholder="الغاية من التقديم لهذه الوظيفة" class="form-control no-resize" name="career"
                                id="career"></textarea></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>1st Target Industry :</span>
                <select title="مجال العمل الذي ترغب به - الاولى" id="industry1" name="industry1"
                        class="industry form-control" data-live-search="true">
                    <option>Accounting/Auditing</option>
                    <option>Administration</option>
                    <option>Advertising</option>
                    <option>Aerospace</option>
                    <option>Agriculture</option>
                    <option>Airlines</option>
                    <option>Arts</option>
                    <option>Automotive</option>
                    <option>Banking</option>
                    <option>Business Support</option>
                    <option>Food Services</option>
                    <option>Social Services/ Nonprofit</option>
                    <option>Computer/Hardware</option>
                    <option>Computer/Software</option>
                    <option>Construction</option>
                    <option>Civil Engineering</option>
                    <option>Consulting Services</option>
                    <option>Contracts/ Purchasing</option>
                    <option>Control and Automation</option>
                    <option>Customer Service</option>
                    <option>Disterbutions and Logistics</option>
                    <option>Education/ Training</option>
                    <option>Recruiting</option>
                    <option>Energy</option>
                    <option>Engineering</option>
                    <option>Facilities Management</option>
                    <option>Fashion Desgin</option>
                    <option>Finance/Economics</option>
                    <option>Finacial Services</option>
                    <option>Graphic Desgin</option>
                    <option>Healthcare</option>
                    <option>Tourism/Travel</option>
                    <option>Human Resources</option>
                    <option>Industrial</option>
                    <option>Infomration Technology</option>
                    <option>Installation/ Maintenance</option>
                    <option>Interior Desgin</option>
                    <option>Internet/ E-commerce</option>
                    <option>IT and Networking</option>
                    <option>Journalism</option>
                    <option>Laboratory</option>
                    <option>Security Services</option>
                    <option>Legal</option>
                    <option>Management</option>
                    <option>Manufacturing</option>
                    <option>Production</option>
                    <option>Marketing</option>
                    <option>Mechanical Desgin</option>
                    <option>Medical/Hospital</option>
                    <option>Nursing</option>
                    <option>Oil/Gas</option>
                    <option>Petrochemicals</option>
                    <option>Pharmaceutical</option>
                    <option>Photography</option>
                    <option>Planning</option>
                    <option>Power Engineering</option>
                    <option>Public Relation</option>
                    <option>Publishing</option>
                    <option>Quantity Survey</option>
                    <option>Retail/Wholesale</option>
                    <option>Safety/Enviroment</option>
                    <option>Sales</option>
                    <option>Science</option>
                    <option>Secretarial</option>
                    <option>Shipping/ Loading & Unloading</option>
                    <option>Software development</option>
                    <option>Sports</option>
                    <option>Technical/ Maintenance</option>
                    <option>Telecommunication</option>
                    <option>Telemarketing</option>
                    <option>Textiles</option>
                    <option>Translation</option>
                    <option>Utilities</option>
                    <option>Vehicles Inspection</option>
                    <option>Warehousing</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>2nd Target Industry :</span>
                <select title="مجال العمل الذي ترغب به - الثانية" id="industry2" name="industry2"
                        class="industry form-control" data-live-search="true">
                    <option>Accounting/Auditing</option>
                    <option>Administration</option>
                    <option>Advertising</option>
                    <option>Aerospace</option>
                    <option>Agriculture</option>
                    <option>Airlines</option>
                    <option>Arts</option>
                    <option>Automotive</option>
                    <option>Banking</option>
                    <option>Business Support</option>
                    <option>Food Services</option>
                    <option>Social Services/ Nonprofit</option>
                    <option>Computer/Hardware</option>
                    <option>Computer/Software</option>
                    <option>Construction</option>
                    <option>Civil Engineering</option>
                    <option>Consulting Services</option>
                    <option>Contracts/ Purchasing</option>
                    <option>Control and Automation</option>
                    <option>Customer Service</option>
                    <option>Disterbutions and Logistics</option>
                    <option>Education/ Training</option>
                    <option>Recruiting</option>
                    <option>Energy</option>
                    <option>Engineering</option>
                    <option>Facilities Management</option>
                    <option>Fashion Desgin</option>
                    <option>Finance/Economics</option>
                    <option>Finacial Services</option>
                    <option>Graphic Desgin</option>
                    <option>Healthcare</option>
                    <option>Tourism/Travel</option>
                    <option>Human Resources</option>
                    <option>Industrial</option>
                    <option>Infomration Technology</option>
                    <option>Installation/ Maintenance</option>
                    <option>Interior Desgin</option>
                    <option>Internet/ E-commerce</option>
                    <option>IT and Networking</option>
                    <option>Journalism</option>
                    <option>Laboratory</option>
                    <option>Security Services</option>
                    <option>Legal</option>
                    <option>Management</option>
                    <option>Manufacturing</option>
                    <option>Production</option>
                    <option>Marketing</option>
                    <option>Mechanical Desgin</option>
                    <option>Medical/Hospital</option>
                    <option>Nursing</option>
                    <option>Oil/Gas</option>
                    <option>Petrochemicals</option>
                    <option>Pharmaceutical</option>
                    <option>Photography</option>
                    <option>Planning</option>
                    <option>Power Engineering</option>
                    <option>Public Relation</option>
                    <option>Publishing</option>
                    <option>Quantity Survey</option>
                    <option>Retail/Wholesale</option>
                    <option>Safety/Enviroment</option>
                    <option>Sales</option>
                    <option>Science</option>
                    <option>Secretarial</option>
                    <option>Shipping/ Loading & Unloading</option>
                    <option>Software development</option>
                    <option>Sports</option>
                    <option>Technical/ Maintenance</option>
                    <option>Telecommunication</option>
                    <option>Telemarketing</option>
                    <option>Textiles</option>
                    <option>Translation</option>
                    <option>Utilities</option>
                    <option>Vehicles Inspection</option>
                    <option>Warehousing</option>
                    <option>Other</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Employment Type :*</span>
                <select title="نظام العمل" id="status" name="status" class="status form-control">
                    <option>Part Time / دوام جزئي</option>
                    <option>Full Time / دوام كلي</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Target Monthly Salary :</span>
                <table class="myTable">
                    <tr>
                        <td>
                            <select title="Currency" class="payD" id="tMSC" name="tMSC">
                                <option>USD</option>
                                <option>IQD</option>
                            </select>
                        </td>
                        <td><input dir="auto" type="text" id="BranchName" name="BranchName"
                                   class="form-control" dir="auto" placeholder="الراتب الشهري المطلوب"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Career Level :</span>
                <select title="المستوى المهني" id="cLevel" name="cLevel" class="cLevel form-control">
                    <option>Entry Level</option>
                    <option>Student/Internship</option>
                    <option>Mid Career</option>
                    <option>Management</option>
                    <option>Executive/Director</option>
                    <option>Senior Executive</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Notice Period :</span>
                <select title="وقت المباشرة" id="cPeriod" name="cPeriod" class="cPeriod form-control">
                    <option>Immediately</option>
                    <option>Two weeks</option>
                    <option>One Month</option>
                    <option>Less than 3 Months</option>
                    <option>Less than 6 Months</option>
                    <option>Less than one Year</option>
                    <option>More than one Year</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Last Month Salary :</span>
                <table class="myTable">
                    <tr>
                        <td>
                            <select title="Currency" class="payD" id="lSCu" name="lSCu">
                                <option>USD</option>
                                <option>IQD</option>
                            </select>
                        </td>
                        <td>
                            <input dir="auto" placeholder="مقدار اخر راتب" class="form-control" type="text"
                                   name="lSalary"
                                   id="lSalary">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6">
                <span>Additional Nationality :</span>
                <select title="حملة الجنسية الاخرى" id="cNationality" name="cNationality" class="cNationality form-control" data-live-search="true">
                    <option>Afghan</option>
                    <option>Albanian</option>
                    <option>Algerian</option>
                    <option>American</option>
                    <option>Andorran</option>
                    <option>Angolan</option>
                    <option>Antiguans</option>
                    <option>Argentinean</option>
                    <option>Armenian</option>
                    <option>Australian</option>
                    <option>Austrian</option>
                    <option>Azerbaijani</option>
                    <option>Bahamian</option>
                    <option>Bahraini</option>
                    <option>Bangladeshi</option>
                    <option>Barbadian</option>
                    <option>Barbudans</option>
                    <option>Batswana</option>
                    <option>Belarusian</option>
                    <option>Belgian</option>
                    <option>Belizean</option>
                    <option>Beninese</option>
                    <option>Bhutanese</option>
                    <option>Bolivian</option>
                    <option>Bosnian</option>
                    <option>Brazilian</option>
                    <option>British</option>
                    <option>Bruneian</option>
                    <option>Bulgarian</option>
                    <option>Burkinabe</option>
                    <option>Burmese</option>
                    <option>Burundian</option>
                    <option>Cambodian</option>
                    <option>Cameroonian</option>
                    <option>Canadian</option>
                    <option>Cape Verdean</option>
                    <option>Central African</option>
                    <option>Chadian</option>
                    <option>Chilean</option>
                    <option>Chinese</option>
                    <option>Colombian</option>
                    <option>Comoran</option>
                    <option>Congolese</option>
                    <option>Congolese</option>
                    <option>Costa Rican</option>
                    <option>Croatian</option>
                    <option>Cuban</option>
                    <option>Cypriot</option>
                    <option>Czech</option>
                    <option>Danish</option>
                    <option>Djibouti</option>
                    <option>Dominican</option>
                    <option>Dominican</option>
                    <option>Dutch</option>
                    <option>Dutchman</option>
                    <option>Dutchwoman</option>
                    <option>East Timorese</option>
                    <option>Ecuadorean</option>
                    <option>Egyptian</option>
                    <option>Emirian</option>
                    <option>Equatorial Guinean</option>
                    <option>Eritrean</option>
                    <option>Estonian</option>
                    <option>Ethiopian</option>
                    <option>Fijian</option>
                    <option>Filipino</option>
                    <option>Finnish</option>
                    <option>French</option>
                    <option>Gabonese</option>
                    <option>Gambian</option>
                    <option>Georgian</option>
                    <option>German</option>
                    <option>Ghanaian</option>
                    <option>Greek</option>
                    <option>Grenadian</option>
                    <option>Guatemalan</option>
                    <option>Guinea-Bissauan</option>
                    <option>Guinean</option>
                    <option>Guyanese</option>
                    <option>Haitian</option>
                    <option>Herzegovinian</option>
                    <option>Honduran</option>
                    <option>Hungarian</option>
                    <option>I-Kiribati</option>
                    <option>Icelander</option>
                    <option>Indian</option>
                    <option>Indonesian</option>
                    <option>Iranian</option>
                    <option>Iraqi</option>
                    <option>Irish</option>
                    <option>Israeli</option>
                    <option>Italian</option>
                    <option>Ivorian</option>
                    <option>Jamaican</option>
                    <option>Japanese</option>
                    <option>Jordanian</option>
                    <option>Kazakhstani</option>
                    <option>Kenyan</option>
                    <option>Kittian and Nevisian</option>
                    <option>Kuwaiti</option>
                    <option>Kyrgyz</option>
                    <option>Laotian</option>
                    <option>Latvian</option>
                    <option>Lebanese</option>
                    <option>Liberian</option>
                    <option>Libyan</option>
                    <option>Liechtensteiner</option>
                    <option>Lithuanian</option>
                    <option>Luxembourger</option>
                    <option>Macedonian</option>
                    <option>Malagasy</option>
                    <option>Malawian</option>
                    <option>Malaysian</option>
                    <option>Maldivan</option>
                    <option>Malian</option>
                    <option>Maltese</option>
                    <option>Marshallese</option>
                    <option>Mauritanian</option>
                    <option>Mauritian</option>
                    <option>Mexican</option>
                    <option>Micronesian</option>
                    <option>Moldovan</option>
                    <option>Monacan</option>
                    <option>Mongolian</option>
                    <option>Moroccan</option>
                    <option>Mosotho</option>
                    <option>Motswana</option>
                    <option>Mozambican</option>
                    <option>Namibian</option>
                    <option>Nauruan</option>
                    <option>Nepalese</option>
                    <option>Netherlander</option>
                    <option>New Zealander</option>
                    <option>Ni-Vanuatu</option>
                    <option>Nicaraguan</option>
                    <option>Nigerian</option>
                    <option>Nigerien</option>
                    <option>North Korean</option>
                    <option>Northern Irish</option>
                    <option>Norwegian</option>
                    <option>Omani</option>
                    <option>Pakistani</option>
                    <option>Palauan</option>
                    <option>Panamanian</option>
                    <option>Papua New Guinean</option>
                    <option>Paraguayan</option>
                    <option>Peruvian</option>
                    <option>Polish</option>
                    <option>Portuguese</option>
                    <option>Qatari</option>
                    <option>Romanian</option>
                    <option>Russian</option>
                    <option>Rwandan</option>
                    <option>Saint Lucian</option>
                    <option>Salvadoran</option>
                    <option>Samoan</option>
                    <option>San Marinese</option>
                    <option>Sao Tomean</option>
                    <option>Saudi</option>
                    <option>Scottish</option>
                    <option>Senegalese</option>
                    <option>Serbian</option>
                    <option>Seychellois</option>
                    <option>Sierra Leonean</option>
                    <option>Singaporean</option>
                    <option>Slovakian</option>
                    <option>Slovenian</option>
                    <option>Solomon Islander</option>
                    <option>Somali</option>
                    <option>South African</option>
                    <option>South Korean</option>
                    <option>Spanish</option>
                    <option>Sri Lankan</option>
                    <option>Sudanese</option>
                    <option>Surinamer</option>
                    <option>Swazi</option>
                    <option>Swedish</option>
                    <option>Swiss</option>
                    <option>Syrian</option>
                    <option>Taiwanese</option>
                    <option>Tajik</option>
                    <option>Tanzanian</option>
                    <option>Thai</option>
                    <option>Togolese</option>
                    <option>Tongan</option>
                    <option>Trinidadian or Tobagonian</option>
                    <option>Tunisian</option>
                    <option>Turkish</option>
                    <option>Tuvaluan</option>
                    <option>Ugandan</option>
                    <option>Ukrainian</option>
                    <option>Uruguayan</option>
                    <option>Uzbekistani</option>
                    <option>Venezuelan</option>
                    <option>Vietnamese</option>
                    <option>Welsh</option>
                    <option>Welsh</option>
                    <option>Yemenite</option>
                    <option>Zambian</option>
                    <option>Zimbabwean</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Marital Status :*</span>
                <select title="الحالة الزوجية" class="cMarital form-control" id="cMarital" name="cMarital">
                    <option>Single / أعزب</option>
                    <option>Married / متزوج</option>
                    <option>Widow / أرمل</option>
                    <option>divorced / مطلق</option>
                    <option>Unspecified / غير محدد</option>
                </select>

            </div>
            <div class="col-lg-6">
                <span>Number of Dependents :</span>
                <select title="عدد المعالين" id="cDependents" name="cDependents" class="cNationality form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Have Driving License :</span>
                <select title="لديك رخصة قيادة" class="cLicense form-control" id="cLicense" name="cLicense">
                    <option>Yes / نعم</option>
                    <option>No / كلا</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Driving License Issued from :</span>
                <select title="رخصة القيادة من" id="cIssued" name="cIssued" class="cIssued form-control" data-live-search="true">
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas, The</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Is.</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burma</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Rep.</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Dem. Rep.</option>
                    <option>Congo, Repub. of the</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Faroe Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia, The</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia, Fed. St.</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>N. Mariana Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts & Nevis</option>
                    <option>Saint Lucia</option>
                    <option>St Pierre & Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks & Caicos Is</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Wallis and Futuna</option>
                    <option>West Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>
        </div>
			<div class="col-lg-6"><p><br/></p></div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="pull-left">Are there any limitations on your ability to perform in your respective field of work? *
                </div>
                <div dir="rtl" class="pull-right">هل هنالك اي قيود على قدرتك في أداء عملك المطلوب؟
                </div>
            </div>
			<div> 
			Yes/نعم
			<input type="radio" name="cField" value="Yes/نعم">
			&nbsp;
			No/كلا
			<input type="radio"name="cField" value="No/كلا" checked>
			</div>
            <!--<div class="col-lg-6">
                <input dir="auto" title="" type="checkbox" class="cField form-control bootstrap-select" id="cField"
                       name="cField"/>
           </div>-->
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <div class="pull-left">Are there any limitations on your ability to engage in travel? *</div>
                <div dir="rtl" class="pull-right">هل هناك أي قيود على قدرتك على المشاركة في السفر؟</div>
            </div>
		<div> 
			Yes/نعم
			<input type="radio" name="cTravel" value="Yes/نعم">
			&nbsp;
			No/كلا
			<input type="radio"name="cTravel" value="No/كلا" checked>
		</div>
            <!--<div class="col-lg-6">
                <input dir="auto" title="" type="checkbox" class="cTravel form-control bootstrap-select" id="cTravel"
                       name="cTravel"/>
            </div>-->
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Permanent address : *</span>
                <select title="العنوان الدائمي" id="cAddress" name="cAddress" class="cAddress form-control" data-live-search="true">
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas, The</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Is.</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burma</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Rep.</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Dem. Rep.</option>
                    <option>Congo, Repub. of the</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Faroe Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia, The</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia, Fed. St.</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>N. Mariana Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts & Nevis</option>
                    <option>Saint Lucia</option>
                    <option>St Pierre & Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks & Caicos Is</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Wallis and Futuna</option>
                    <option>West Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Detail address :</span>
                <span><input dir="auto" placeholder="تفاصيل العنوان" class="form-control" type="text" name="cDetail" id="cDetail"></span>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Present address :</span>
                <select title="العنوان الحالي" id="cPresent" name="cPresent" class="cPresent form-control" data-live-search="true">
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas, The</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Is.</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burma</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Rep.</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Dem. Rep.</option>
                    <option>Congo, Repub. of the</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Faroe Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia, The</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia, Fed. St.</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>N. Mariana Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts & Nevis</option>
                    <option>Saint Lucia</option>
                    <option>St Pierre & Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks & Caicos Is</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Wallis and Futuna</option>
                    <option>West Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Detail address :</span>
                <span><input dir="auto" placeholder="تفاصيل العنوان" class="form-control" type="text" name="cDetail2"
                             id="cDetail2"></span>
            </div>
        </div>
		<div class="col-lg-12">					<p><br/><br/><br/></p>					<p align="right">الخبرات السابقة&nbsp;&nbsp;</p>					<div class="col-lg-3"><button type="button" class="btn btn-default" onclick="personalDetails()"> << Personal Details</button></div>						
			<div class="col-sm-offset-9" align="right"><button type="button" class="btn btn-default" onclick="experiences()"> Experience >> </button></div>
		</div>
	</div>
<br>
	
    <div id="experiences" style="display: none">
        <div class="col-lg-12" >
		<p><br/></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>Experiences</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>الخبرة</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6">
                <span>Start Date :</span>
                <span><input dir="auto" placeholder="تاريخ البدء" class="form-control cSDate" type="text" name="cSDate2"
                             id="cSDate2"></span>
            </div>
            <div class="col-lg-6">
                <span>End Date :</span>
                <span><input dir="auto" placeholder="تاريخ الانتهاء" class="form-control cEDate" type="text"
                             name="cEDate2" id="cEDate2"></span>
            </div>
        </div>
		<br>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Location :</span>
                <select title="الموقع" id="cLocation2" name="cLocation2" class="cLocation form-control" data-live-search="true">
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas, The</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Is.</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burma</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Rep.</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Dem. Rep.</option>
                    <option>Congo, Repub. of the</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Faroe Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia, The</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia, Fed. St.</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>N. Mariana Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts & Nevis</option>
                    <option>Saint Lucia</option>
                    <option>St Pierre & Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks & Caicos Is</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Wallis and Futuna</option>
                    <option>West Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Company Name :</span>
                <span><input dir="auto" placeholder="أسم الشركة" class="form-control cCompany" type="text"
                             name="cCompany2" id="cCompany2"></span>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Company Industry :</span>
                <select title="قطاع الشركة" id="cIndustry2" name="cIndustry2" class="cIndustry form-control" data-live-search="true">
                    <option>Accounting/Auditing</option>
                    <option>Administration</option>
                    <option>Advertising</option>
                    <option>Aerospace</option>
                    <option>Agriculture</option>
                    <option>Airlines</option>
                    <option>Arts</option>
                    <option>Automotive</option>
                    <option>Banking</option>
                    <option>Business Support</option>
                    <option>Food Services</option>
                    <option>Social Services/ Nonprofit</option>
                    <option>Computer/Hardware</option>
                    <option>Computer/Software</option>
                    <option>Construction</option>
                    <option>Civil Engineering</option>
                    <option>Consulting Services</option>
                    <option>Contracts/ Purchasing</option>
                    <option>Control and Automation</option>
                    <option>Customer Service</option>
                    <option>Disterbutions and Logistics</option>
                    <option>Education/ Training</option>
                    <option>Recruiting</option>
                    <option>Energy</option>
                    <option>Engineering</option>
                    <option>Facilities Management</option>
                    <option>Fashion Desgin</option>
                    <option>Finance/Economics</option>
                    <option>Finacial Services</option>
                    <option>Graphic Desgin</option>
                    <option>Healthcare</option>
                    <option>Tourism/Travel</option>
                    <option>Human Resources</option>
                    <option>Industrial</option>
                    <option>Infomration Technology</option>
                    <option>Installation/ Maintenance</option>
                    <option>Interior Desgin</option>
                    <option>Internet/ E-commerce</option>
                    <option>IT and Networking</option>
                    <option>Journalism</option>
                    <option>Laboratory</option>
                    <option>Security Services</option>
                    <option>Legal</option>
                    <option>Management</option>
                    <option>Manufacturing</option>
                    <option>Production</option>
                    <option>Marketing</option>
                    <option>Mechanical Desgin</option>
                    <option>Medical/Hospital</option>
                    <option>Nursing</option>
                    <option>Oil/Gas</option>
                    <option>Petrochemicals</option>
                    <option>Pharmaceutical</option>
                    <option>Photography</option>
                    <option>Planning</option>
                    <option>Power Engineering</option>
                    <option>Public Relation</option>
                    <option>Publishing</option>
                    <option>Quantity Survey</option>
                    <option>Retail/Wholesale</option>
                    <option>Safety/Enviroment</option>
                    <option>Sales</option>
                    <option>Science</option>
                    <option>Secretarial</option>
                    <option>Shipping/ Loading & Unloading</option>
                    <option>Software development</option>
                    <option>Sports</option>
                    <option>Technical/ Maintenance</option>
                    <option>Telecommunication</option>
                    <option>Telemarketing</option>
                    <option>Textiles</option>
                    <option>Translation</option>
                    <option>Utilities</option>
                    <option>Vehicles Inspection</option>
                    <option>Warehousing</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Job Role :</span>
                <select title="الدور الوظيفي" id="cRole2" name="cRole2" class="cRole form-control" data-live-search="true">
                    <option>Accounting/Banking/Finance</option>
                    <option>Administration</option>
                    <option>Archiving</option>
                    <option>Art/Desgin/Creative</option>
                    <option>Customer Service</option>
                    <option>Education/ Trainning</option>
                    <option>Engineering</option>
                    <option>Healthcare/ Medical</option>
                    <option>Hospitality-Food & Beverage Services</option>
                    <option>Hospitality-Food production (Chef)</option>
                    <option>Hospitality- Front Office</option>
                    <option>Hospitality - Housekeeping</option>
                    <option>Human Resourses/ Personnel</option>
                    <option>Law/ Legal</option>
                    <option>Logistics</option>
                    <option>Management</option>
                    <option>Markting/PR</option>
                    <option>Other</option>
                    <option>Purchasing/ Procurment</option>
                    <option>Quality Control</option>
                    <option>Research</option>
                    <option>Retail</option>
                    <option>Safety</option>
                    <option>Sales</option>
                    <option>Secretarial</option>
                    <option>Security</option>
                    <option>Support Services</option>
                    <option>Technology/ IT</option>
                    <option>Writing/ Editing</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Position In Company :</span>
                <input placeholder="المنصب في الشركة" title="" id="cPCompany2" name="cPCompany2"
                       class="form-control cPCompany"/>
            </div>
            <div class="col-lg-6">
                <span>Company Website :</span>
                <input placeholder="ويب سايت الشركة" title="" id="cWCompany2" name="cWCompany2"
                       class="form-control cWCompany"/>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <span>Leave Reason :</span>
                <textarea placeholder="سبب ترك العمل" title="" id="cLReason2" name="cLReason2"
                          class="form-control no-resize cLReason"></textarea>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <span>Work Description :</span>
                <textarea placeholder="وصف العمل" title="" id="cWDescription2" name="cWDescription2"
                          class="form-control no-resize cWDescription"></textarea>
            </div>
        </div>
		<div class="col-lg-12">					<p><br/><br/><br/></p>					<p align="right">التعليم&nbsp;&nbsp;</p>
			<div class="col-lg-3"><button type="button" class="btn btn-default" onclick="jobDetails()"> << Job Details</button></div>
			<div class="col-sm-offset-9" align="right"><button type="button" class="btn btn-default" onclick="education()"> Education >> </button></div>
		</div>

    </div>
    <div id="education" style="display: none">
        <div class="col-lg-12">
			<p><br></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>Education *</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>التعليم</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6">
                <span>Institution : *</span>
                <span><input dir="auto" placeholder="مؤسسة" class="form-control cInstitution" type="text"
                             name="cInstitution2" id="cInstitution2"></span>
            </div>
            <div class="col-lg-6">
                <span>Country : *</span>
                <select title="الدولة" id="cCountry" name="cCountry" class="cCountry form-control" data-live-search="true">
                    <option>Afghanistan</option>
                    <option>Albania</option>
                    <option>Algeria</option>
                    <option>American Samoa</option>
                    <option>Andorra</option>
                    <option>Angola</option>
                    <option>Anguilla</option>
                    <option>Antigua & Barbuda</option>
                    <option>Argentina</option>
                    <option>Armenia</option>
                    <option>Aruba</option>
                    <option>Australia</option>
                    <option>Austria</option>
                    <option>Azerbaijan</option>
                    <option>Bahamas, The</option>
                    <option>Bahrain</option>
                    <option>Bangladesh</option>
                    <option>Barbados</option>
                    <option>Belarus</option>
                    <option>Belgium</option>
                    <option>Belize</option>
                    <option>Benin</option>
                    <option>Bermuda</option>
                    <option>Bhutan</option>
                    <option>Bolivia</option>
                    <option>Bosnia & Herzegovina</option>
                    <option>Botswana</option>
                    <option>Brazil</option>
                    <option>British Virgin Is.</option>
                    <option>Brunei</option>
                    <option>Bulgaria</option>
                    <option>Burkina Faso</option>
                    <option>Burma</option>
                    <option>Burundi</option>
                    <option>Cambodia</option>
                    <option>Cameroon</option>
                    <option>Canada</option>
                    <option>Cape Verde</option>
                    <option>Cayman Islands</option>
                    <option>Central African Rep.</option>
                    <option>Chad</option>
                    <option>Chile</option>
                    <option>China</option>
                    <option>Colombia</option>
                    <option>Comoros</option>
                    <option>Congo, Dem. Rep.</option>
                    <option>Congo, Repub. of the</option>
                    <option>Cook Islands</option>
                    <option>Costa Rica</option>
                    <option>Cote d'Ivoire</option>
                    <option>Croatia</option>
                    <option>Cuba</option>
                    <option>Cyprus</option>
                    <option>Czech Republic</option>
                    <option>Denmark</option>
                    <option>Djibouti</option>
                    <option>Dominica</option>
                    <option>Dominican Republic</option>
                    <option>East Timor</option>
                    <option>Ecuador</option>
                    <option>Egypt</option>
                    <option>El Salvador</option>
                    <option>Equatorial Guinea</option>
                    <option>Eritrea</option>
                    <option>Estonia</option>
                    <option>Ethiopia</option>
                    <option>Faroe Islands</option>
                    <option>Fiji</option>
                    <option>Finland</option>
                    <option>France</option>
                    <option>French Guiana</option>
                    <option>French Polynesia</option>
                    <option>Gabon</option>
                    <option>Gambia, The</option>
                    <option>Gaza Strip</option>
                    <option>Georgia</option>
                    <option>Germany</option>
                    <option>Ghana</option>
                    <option>Gibraltar</option>
                    <option>Greece</option>
                    <option>Greenland</option>
                    <option>Grenada</option>
                    <option>Guadeloupe</option>
                    <option>Guam</option>
                    <option>Guatemala</option>
                    <option>Guernsey</option>
                    <option>Guinea</option>
                    <option>Guinea-Bissau</option>
                    <option>Guyana</option>
                    <option>Haiti</option>
                    <option>Honduras</option>
                    <option>Hong Kong</option>
                    <option>Hungary</option>
                    <option>Iceland</option>
                    <option>India</option>
                    <option>Indonesia</option>
                    <option>Iran</option>
                    <option>Iraq</option>
                    <option>Ireland</option>
                    <option>Isle of Man</option>
                    <option>Israel</option>
                    <option>Italy</option>
                    <option>Jamaica</option>
                    <option>Japan</option>
                    <option>Jersey</option>
                    <option>Jordan</option>
                    <option>Kazakhstan</option>
                    <option>Kenya</option>
                    <option>Kiribati</option>
                    <option>Korea, North</option>
                    <option>Korea, South</option>
                    <option>Kuwait</option>
                    <option>Kyrgyzstan</option>
                    <option>Laos</option>
                    <option>Latvia</option>
                    <option>Lebanon</option>
                    <option>Lesotho</option>
                    <option>Liberia</option>
                    <option>Libya</option>
                    <option>Liechtenstein</option>
                    <option>Lithuania</option>
                    <option>Luxembourg</option>
                    <option>Macau</option>
                    <option>Macedonia</option>
                    <option>Madagascar</option>
                    <option>Malawi</option>
                    <option>Malaysia</option>
                    <option>Maldives</option>
                    <option>Mali</option>
                    <option>Malta</option>
                    <option>Marshall Islands</option>
                    <option>Martinique</option>
                    <option>Mauritania</option>
                    <option>Mauritius</option>
                    <option>Mayotte</option>
                    <option>Mexico</option>
                    <option>Micronesia, Fed. St.</option>
                    <option>Moldova</option>
                    <option>Monaco</option>
                    <option>Mongolia</option>
                    <option>Montserrat</option>
                    <option>Morocco</option>
                    <option>Mozambique</option>
                    <option>Namibia</option>
                    <option>Nauru</option>
                    <option>Nepal</option>
                    <option>Netherlands</option>
                    <option>Netherlands Antilles</option>
                    <option>New Caledonia</option>
                    <option>New Zealand</option>
                    <option>Nicaragua</option>
                    <option>Niger</option>
                    <option>Nigeria</option>
                    <option>N. Mariana Islands</option>
                    <option>Norway</option>
                    <option>Oman</option>
                    <option>Pakistan</option>
                    <option>Palau</option>
                    <option>Panama</option>
                    <option>Papua New Guinea</option>
                    <option>Paraguay</option>
                    <option>Peru</option>
                    <option>Philippines</option>
                    <option>Poland</option>
                    <option>Portugal</option>
                    <option>Puerto Rico</option>
                    <option>Qatar</option>
                    <option>Reunion</option>
                    <option>Romania</option>
                    <option>Russia</option>
                    <option>Rwanda</option>
                    <option>Saint Helena</option>
                    <option>Saint Kitts & Nevis</option>
                    <option>Saint Lucia</option>
                    <option>St Pierre & Miquelon</option>
                    <option>Saint Vincent and the Grenadines</option>
                    <option>Samoa</option>
                    <option>San Marino</option>
                    <option>Sao Tome & Principe</option>
                    <option>Saudi Arabia</option>
                    <option>Senegal</option>
                    <option>Serbia</option>
                    <option>Seychelles</option>
                    <option>Sierra Leone</option>
                    <option>Singapore</option>
                    <option>Slovakia</option>
                    <option>Slovenia</option>
                    <option>Solomon Islands</option>
                    <option>Somalia</option>
                    <option>South Africa</option>
                    <option>Spain</option>
                    <option>Sri Lanka</option>
                    <option>Sudan</option>
                    <option>Suriname</option>
                    <option>Swaziland</option>
                    <option>Sweden</option>
                    <option>Switzerland</option>
                    <option>Syria</option>
                    <option>Taiwan</option>
                    <option>Tajikistan</option>
                    <option>Tanzania</option>
                    <option>Thailand</option>
                    <option>Togo</option>
                    <option>Tonga</option>
                    <option>Trinidad & Tobago</option>
                    <option>Tunisia</option>
                    <option>Turkey</option>
                    <option>Turkmenistan</option>
                    <option>Turks & Caicos Is</option>
                    <option>Tuvalu</option>
                    <option>Uganda</option>
                    <option>Ukraine</option>
                    <option>United Arab Emirates</option>
                    <option>United Kingdom</option>
                    <option>United States</option>
                    <option>Uruguay</option>
                    <option>Uzbekistan</option>
                    <option>Vanuatu</option>
                    <option>Venezuela</option>
                    <option>Vietnam</option>
                    <option>Virgin Islands</option>
                    <option>Wallis and Futuna</option>
                    <option>West Bank</option>
                    <option>Western Sahara</option>
                    <option>Yemen</option>
                    <option>Zambia</option>
                    <option>Zimbabwe</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Degree : *</span>
                <select title="الدرجة العلمية" id="cDegree2" name="cDegree2" class="cDegree form-control">
                    <option>Training course</option>
                    <option>High school or equivalent</option>
                    <option>Diploma</option>
                    <option>Bashelor's Degree</option>
                    <option>Higher Diploma</option>
                    <option>Master's Degree</option>
                    <option>Dectorate</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Major : *</span>
                <span><input dir="auto" placeholder="التخصص" class="form-control cMajor" type="text" name="cMajor2"
                             id="cMajor2"></span>

            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Grade : *</span>
                <select title="الدرجة" id="cGrade2" name="cGrade2" class="cGrade form-control">
                    <option>50-60%</option>
                    <option>60-70%</option>
                    <option>70-80%</option>
                    <option>80-90%</option>
                    <option>90-100%</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Description :</span>
                <textarea placeholder="تفاصيل" id="cEDescription2" name="cEDescription2" class="no-resize form-control"
                          data-live-search="true"></textarea>
            </div>
        </div>
		<div class="col-lg-12">					<p><br/><br/><br/></p>					<p align="right">المهارات و الهوايات&nbsp;&nbsp;</p>
			<div class="col-lg-3"><button type="button" class="btn btn-default" onclick="experiences()"> << Experience</button></div>
			<div class="col-sm-offset-9" align="right"><button type="button" class="btn btn-default" onclick="otherInfo()"> Skills and Hobbies >> </button></div>
		</div>
    </div>
        
    <div id="other_info" style="display: none">
        <div class="col-lg-12">
			<p><br></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>Skills</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>المهارة</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6">
                <span>Skill :</span>
            <span><input dir="auto" placeholder="مهارة" class="form-control cSkill" type="text" name="cSkill2"
                         id="cSkill2"></span>
            </div>
            <div class="col-lg-6">
                <span>Proficiency :</span>
                <select title="البراعة" id="cProficiency2" name="cProficiency2" class="cProficiency form-control">
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Expert</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Years of Experience :</span>
                <select title="سنوات الخبرة" id="cExperience2" name="cExperience2" class="cExperience form-control">
                    <option>Less than 3 Months</option>
                    <option>Less than 6 Months</option>
                    <option>Less than one Year</option>
                    <option>More than one Year</option>
                    <option>3 years or less</option>
                    <option>5 years or less</option>
                    <option>10 years or less</option>
                    <option>more than 10 years</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Last Used :</span>
                <select title="أخر استخدام" id="cLUsed2" name="cLUsed2" class="cLUsed form-control">
                    <option>Less than 3 Months</option>
                    <option>Less than 6 Months</option>
                    <option>Less than one Year</option>
                    <option>More than one Year</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-12">
                <span>Description :</span>
            <textarea placeholder="تفاصيل" id="cSDescription2" name="cSDescription2"
                      class="no-resize form-control"></textarea>
            </div>
        </div>


        <div class="col-lg-12">
			<p><br/></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>Languages</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>اللغة</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6">
                <span>Languages :</span>
                <select title="اللغات" id="cLanguages2" name="cLanguages2" class="cLanguages form-control"
                        data-live-search="true">
						<option>Abkhazian</option>
						<option>Afar</option>
						<option>Afrikaans</option>
						<option>Albanian</option>
						<option>Amharic</option>
						<option>Arabic</option>
						<option>Armenian</option>
						<option>Assamese</option>
						<option>Aymara</option>
						<option>Azerbaijani</option>
						<option>Bashkir</option>
						<option>Basque</option>
						<option>Bengali, Bangla</option>
						<option>Bhutani</option>
						<option>Bihari</option>
						<option>Bislama</option>
						<option>Breton</option>
						<option>Bulgarian</option>
						<option>Burmese</option>
						<option>Byelorussian</option>
						<option>Cambodian</option>
						<option>Catalan</option>
						<option>Chinese</option>
						<option>Corsican</option>
						<option>Croatian</option>
						<option>Czech</option>
						<option>Danish</option>
						<option>Dutch</option>
						<option>English, American</option>
						<option>Esperanto</option>
						<option>Estonian</option>
						<option>Faeroese</option>
						<option>Fiji</option>
						<option>Finnish</option>
						<option>French</option>
						<option>Frisian</option>
						<option>Gaelic (Scots Gaelic)</option>
						<option>Galician</option>
						<option>Georgian</option>
						<option>German</option>
						<option>Greek</option>
						<option>Greenlandic</option>
						<option>Guarani</option>
						<option>Gujarati</option>
						<option>Hausa</option>
						<option>Hebrew</option>
						<option>Hindi</option>
						<option>Hungarian</option>
						<option>Icelandic</option>
						<option>Indonesian</option>
						<option>Interlingua</option>
						<option>Interlingue</option>
						<option>Inupiak</option>
						<option>Irish</option>
						<option>Italian</option>
						<option>Japanese</option>
						<option>Javanese</option>
						<option>Kannada</option>
						<option>Kashmiri</option>
						<option>Kazakh</option>
						<option>Kinyarwanda</option>
						<option>Kirghiz</option>
						<option>Kirundi</option>
						<option>Korean</option>
						<option>Kurdish</option>
						<option>Laothian</option>
						<option>Latin</option>
						<option>Latvian, Lettish</option>
						<option>Lingala</option>
						<option>Lithuanian</option>
						<option>Macedonian</option>
						<option>Malagasy</option>
						<option>Malay</option>
						<option>Malayalam</option>
						<option>Maltese</option>
						<option>Maori</option>
						<option>Marathi</option>
						<option>Moldavian</option>
						<option>Mongolian</option>
						<option>Nauru</option>
						<option>Nepali</option>
						<option>Norwegian</option>
						<option>Occitan</option>
						<option>Oriya</option>
						<option>Oromo, Afan</option>
						<option>Pashto, Pushto</option>
						<option>Persian</option>
						<option>Polish</option>
						<option>Portuguese</option>
						<option>Punjabi</option>
						<option>Quechua</option>
						<option>Rhaeto-Romance</option>
						<option>Romanian</option>
						<option>Russian</option>
						<option>Samoan</option>
						<option>Sangro</option>
						<option>Sanskrit</option>
						<option>Serbian</option>
						<option>Serbo-Croatian</option>
						<option>Sesotho</option>
						<option>Setswana</option>
						<option>Shona</option>
						<option>Sindhi</option>
						<option>Singhalese</option>
						<option>Siswati</option>
						<option>Slovak</option>
						<option>Slovenian</option>
						<option>Somali</option>
						<option>Spanish</option>
						<option>Sudanese</option>
						<option>Swahili</option>
						<option>Swedish</option>
						<option>Tagalog</option>
						<option>Tajik</option>
						<option>Tamil</option>
						<option>Tatar</option>
						<option>Tegulu</option>
						<option>Thai</option>
						<option>Tibetan</option>
						<option>Tigrinya</option>
						<option>Tonga</option>
						<option>Tsonga</option>
						<option>Turkish</option>
						<option>Turkmen</option>
						<option>Twi</option>
						<option>Ukrainian</option>
						<option>Urdu</option>
						<option>Uzbek</option>
						<option>Vietnamese</option>
						<option>Volapuk</option>
						<option>Welsh</option>
						<option>Wolof</option>
						<option>Xhosa</option>
						<option>Yiddish</option>
						<option>Yoruba</option>
						<option>Zulu</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Proficiency :</span>
                <select title="البراعة" id="cLProficiency2" name="cLProficiency2" class="cProficiency form-control">
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Expert</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Years of Experience :</span>
                <select title="سنوات الخبرة" id="cLExperience2" name="cLExperience2" class="cExperience form-control">
                    <option>Less than 3 Months</option>
                    <option>Less than 6 Months</option>
                    <option>Less than one Year</option>
                    <option>More than one Year</option>
                    <option>3 years or less</option>
                    <option>5 years or less</option>
                    <option>10 years or less</option>
                    <option>more than 10 years</option>
                </select>
            </div>
            <div class="col-lg-6">
                <span>Last Used :</span>
                <select title="أخر استخدام" id="cLLUsed2" name="cLLUsed2" class="cLUsed form-control">
                    <option>Less than 3 Months</option>
                    <option>Less than 6 Months</option>
                    <option>Less than one Year</option>
                    <option>More than one Year</option>
                </select>
            </div>
        </div>
	    <div class="col-lg-12">
				<p><br/></p>
	            <div class="well well-sm">
	                <div class="col-sm-6">
	                    <h4>Membership</h4>
	                </div>
	                <div class="col-sm-6 text-right">
	                    <h4>العضوية</h4>
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="col-lg-4">
	                <span>Organization :</span>
	                <input type="text" placeholder="منظمة" id="cOrganization2" name="cOrganization2" class="form-control"/>
	            </div>
	            <div class="col-lg-4">
	                <span>Membership Since :</span>
	                <input type="text" placeholder="تأريخ العضوية" id="cMSince2" name="cMSince2" class="form-control cMSince"/>
	            </div>
	            <div class="col-lg-4">
	                <span>Membership/Role :</span>
	                <input type="text" placeholder="درجة العضوية" id="cMRole2" name="cMRole2" class="form-control"/>
	            </div>
	    </div>
		<div class="col-lg-12">					<p><br/><br/><br/></p>					<p align="right">المراجع&nbsp;&nbsp;</p>
			<div class="col-lg-3"><button type="button" class="btn btn-default" onclick="education()"> << Education</button></div>
			<div class="col-sm-offset-9" align="right"><button type="button" class="btn btn-default" onclick="references()"> References >> </button></div>
		</div>
    </div>

    <div id="references" style="display: none">
        <div class="col-lg-12">
			<p><br/></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>References</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>المراجع</h4>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-6">
                <span>Name :</span>
                <input type="text" placeholder="اسم" id="cRName2" name="cRName2" class="form-control"/>
            </div>
            <div class="col-lg-6">
                <span>Job Title :</span>
                <input type="text" placeholder="عنوان وظيفي" id="cJTitle2" name="cJTitle2" class="form-control"/>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6">
                <span>Company Name :</span>
                <input type="text" placeholder="أسم الشركة" id="cCName2" name="cCName2" class="form-control"/>
            </div>						<div class="col-lg-6">                <span>Email Address :</span>                <input dir="auto" type="text" placeholder="البريد الالكتروني" class="form-control" name="cREmail2" id="cREmail2">            </div>
            <div class="col-lg-6">
                <span>Phone Number :</span>
                <table class="myTable">
                    <tr>
                        <td>
                            <select title="Int.Code" class="mobZip" name="mobZip3" id="mobZip3" data-live-search="true">
								<option data-countryCode="DZ" value="+213">Algeria (+213)</option>
								<option data-countryCode="AD" value="+376">Andorra (+376)</option>
								<option data-countryCode="AO" value="+244">Angola (+244)</option>
								<option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
								<option data-countryCode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
								<option data-countryCode="AR" value="+54">Argentina (+54)</option>
								<option data-countryCode="AM" value="+374">Armenia (+374)</option>
								<option data-countryCode="AW" value="+297">Aruba (+297)</option>
								<option data-countryCode="AU" value="+61">Australia (+61)</option>
								<option data-countryCode="AT" value="+43">Austria (+43)</option>
								<option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
								<option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
								<option data-countryCode="BH" value="+973">Bahrain (+973)</option>
								<option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
								<option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
								<option data-countryCode="BY" value="+375">Belarus (+375)</option>
								<option data-countryCode="BE" value="+32">Belgium (+32)</option>
								<option data-countryCode="BZ" value="+501">Belize (+501)</option>
								<option data-countryCode="BJ" value="+229">Benin (+229)</option>
								<option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
								<option data-countryCode="BT" value="+975">Bhutan (+975)</option>
								<option data-countryCode="BO" value="+591">Bolivia (+591)</option>
								<option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
								<option data-countryCode="BW" value="+267">Botswana (+267)</option>
								<option data-countryCode="BR" value="+55">Brazil (+55)</option>
								<option data-countryCode="BN" value="+673">Brunei (+673)</option>
								<option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
								<option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
								<option data-countryCode="BI" value="+257">Burundi (+257)</option>
								<option data-countryCode="KH" value="+855">Cambodia (+855)</option>
								<option data-countryCode="CM" value="+237">Cameroon (+237)</option>
								<option data-countryCode="CA" value="+1">Canada (+1)</option>
								<option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
								<option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
								<option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
								<option data-countryCode="CL" value="+56">Chile (+56)</option>
								<option data-countryCode="CN" value="+86">China (+86)</option>
								<option data-countryCode="CO" value="+57">Colombia (+57)</option>
								<option data-countryCode="KM" value="+269">Comoros (+269)</option>
								<option data-countryCode="CG" value="+242">Congo (+242)</option>
								<option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
								<option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
								<option data-countryCode="HR" value="+385">Croatia (+385)</option>
								<option data-countryCode="CU" value="+53">Cuba (+53)</option>
								<option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
								<option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
								<option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
								<option data-countryCode="DK" value="+45">Denmark (+45)</option>
								<option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
								<option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
								<option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
								<option data-countryCode="EC" value="+593">Ecuador (+593)</option>
								<option data-countryCode="EG" value="+20">Egypt (+20)</option>
								<option data-countryCode="SV" value="+503">El Salvador (+503)</option>
								<option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
								<option data-countryCode="ER" value="+291">Eritrea (+291)</option>
								<option data-countryCode="EE" value="+372">Estonia (+372)</option>
								<option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
								<option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
								<option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
								<option data-countryCode="FJ" value="+679">Fiji (+679)</option>
								<option data-countryCode="FI" value="+358">Finland (+358)</option>
								<option data-countryCode="FR" value="+33">France (+33)</option>
								<option data-countryCode="GF" value="+594">French Guiana (+594)</option>
								<option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
								<option data-countryCode="GA" value="+241">Gabon (+241)</option>
								<option data-countryCode="GM" value="+220">Gambia (+220)</option>
								<option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
								<option data-countryCode="DE" value="+49">Germany (+49)</option>
								<option data-countryCode="GH" value="+233">Ghana (+233)</option>
								<option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
								<option data-countryCode="GR" value="+30">Greece (+30)</option>
								<option data-countryCode="GL" value="+299">Greenland (+299)</option>
								<option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
								<option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
								<option data-countryCode="GU" value="+671">Guam (+671)</option>
								<option data-countryCode="GT" value="+502">Guatemala (+502)</option>
								<option data-countryCode="GN" value="+224">Guinea (+224)</option>
								<option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
								<option data-countryCode="GY" value="+592">Guyana (+592)</option>
								<option data-countryCode="HT" value="+509">Haiti (+509)</option>
								<option data-countryCode="HN" value="+504">Honduras (+504)</option>
								<option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
								<option data-countryCode="HU" value="+36">Hungary (+36)</option>
								<option data-countryCode="IS" value="+354">Iceland (+354)</option>
								<option data-countryCode="IN" value="+91">India (+91)</option>
								<option data-countryCode="ID" value="+62">Indonesia (+62)</option>
								<option data-countryCode="IR" value="+98">Iran (+98)</option>
								<option data-countryCode="IQ" value="+964">Iraq (+964)</option>
								<option data-countryCode="IE" value="+353">Ireland (+353)</option>
								<option data-countryCode="IL" value="+972">Israel (+972)</option>
								<option data-countryCode="IT" value="+39">Italy (+39)</option>
								<option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
								<option data-countryCode="JP" value="+81">Japan (+81)</option>
								<option data-countryCode="JO" value="+962">Jordan (+962)</option>
								<option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
								<option data-countryCode="KE" value="+254">Kenya (+254)</option>
								<option data-countryCode="KI" value="+686">Kiribati (+686)</option>
								<option data-countryCode="KP" value="+850">Korea North (+850)</option>
								<option data-countryCode="KR" value="+82">Korea South (+82)</option>
								<option data-countryCode="KW" value="+965">Kuwait (+965)</option>
								<option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
								<option data-countryCode="LA" value="+856">Laos (+856)</option>
								<option data-countryCode="LV" value="+371">Latvia (+371)</option>
								<option data-countryCode="LB" value="+961">Lebanon (+961)</option>
								<option data-countryCode="LS" value="+266">Lesotho (+266)</option>
								<option data-countryCode="LR" value="+231">Liberia (+231)</option>
								<option data-countryCode="LY" value="+218">Libya (+218)</option>
								<option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
								<option data-countryCode="LT" value="+370">Lithuania (+370)</option>
								<option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
								<option data-countryCode="MO" value="+853">Macao (+853)</option>
								<option data-countryCode="MK" value="+389">Macedonia (+389)</option>
								<option data-countryCode="MG" value="+261">Madagascar (+261)</option>
								<option data-countryCode="MW" value="+265">Malawi (+265)</option>
								<option data-countryCode="MY" value="+60">Malaysia (+60)</option>
								<option data-countryCode="MV" value="+960">Maldives (+960)</option>
								<option data-countryCode="ML" value="+223">Mali (+223)</option>
								<option data-countryCode="MT" value="+356">Malta (+356)</option>
								<option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
								<option data-countryCode="MQ" value="+596">Martinique (+596)</option>
								<option data-countryCode="MR" value="+222">Mauritania (+222)</option>
								<option data-countryCode="YT" value="+269">Mayotte (+269)</option>
								<option data-countryCode="MX" value="+52">Mexico (+52)</option>
								<option data-countryCode="FM" value="+691">Micronesia (+691)</option>
								<option data-countryCode="MD" value="+373">Moldova (+373)</option>
								<option data-countryCode="MC" value="+377">Monaco (+377)</option>
								<option data-countryCode="MN" value="+976">Mongolia (+976)</option>
								<option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
								<option data-countryCode="MA" value="+212">Morocco (+212)</option>
								<option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
								<option data-countryCode="MN" value="+95">Myanmar (+95)</option>
								<option data-countryCode="NA" value="+264">Namibia (+264)</option>
								<option data-countryCode="NR" value="+674">Nauru (+674)</option>
								<option data-countryCode="NP" value="+977">Nepal (+977)</option>
								<option data-countryCode="NL" value="+31">Netherlands (+31)</option>
								<option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
								<option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
								<option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
								<option data-countryCode="NE" value="+227">Niger (+227)</option>
								<option data-countryCode="NG" value="+234">Nigeria (+234)</option>
								<option data-countryCode="NU" value="+683">Niue (+683)</option>
								<option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
								<option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
								<option data-countryCode="NO" value="+47">Norway (+47)</option>
								<option data-countryCode="OM" value="+968">Oman (+968)</option>
								<option data-countryCode="PW" value="+680">Palau (+680)</option>
								<option data-countryCode="PA" value="+507">Panama (+507)</option>
								<option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
								<option data-countryCode="PY" value="+595">Paraguay (+595)</option>
								<option data-countryCode="PE" value="+51">Peru (+51)</option>
								<option data-countryCode="PH" value="+63">Philippines (+63)</option>
								<option data-countryCode="PL" value="+48">Poland (+48)</option>
								<option data-countryCode="PT" value="+351">Portugal (+351)</option>
								<option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
								<option data-countryCode="QA" value="+974">Qatar (+974)</option>
								<option data-countryCode="RE" value="+262">Reunion (+262)</option>
								<option data-countryCode="RO" value="+40">Romania (+40)</option>
								<option data-countryCode="RU" value="+7">Russia (+7)</option>
								<option data-countryCode="RW" value="+250">Rwanda (+250)</option>
								<option data-countryCode="SM" value="+378">San Marino (+378)</option>
								<option data-countryCode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
								<option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
								<option data-countryCode="SN" value="+221">Senegal (+221)</option>
								<option data-countryCode="CS" value="+381">Serbia (+381)</option>
								<option data-countryCode="SC" value="+248">Seychelles (+248)</option>
								<option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
								<option data-countryCode="SG" value="+65">Singapore (+65)</option>
								<option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
								<option data-countryCode="SI" value="+386">Slovenia (+386)</option>
								<option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
								<option data-countryCode="SO" value="+252">Somalia (+252)</option>
								<option data-countryCode="ZA" value="+27">South Africa (+27)</option>
								<option data-countryCode="ES" value="+34">Spain (+34)</option>
								<option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
								<option data-countryCode="SH" value="+290">St. Helena (+290)</option>
								<option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
								<option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
								<option data-countryCode="SD" value="+249">Sudan (+249)</option>
								<option data-countryCode="SR" value="+597">Suriname (+597)</option>
								<option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
								<option data-countryCode="SE" value="+46">Sweden (+46)</option>
								<option data-countryCode="CH" value="+41">Switzerland (+41)</option>
								<option data-countryCode="SI" value="+963">Syria (+963)</option>
								<option data-countryCode="TW" value="+886">Taiwan (+886)</option>
								<option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
								<option data-countryCode="TH" value="+66">Thailand (+66)</option>
								<option data-countryCode="TG" value="+228">Togo (+228)</option>
								<option data-countryCode="TO" value="+676">Tonga (+676)</option>
								<option data-countryCode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
								<option data-countryCode="TN" value="+216">Tunisia (+216)</option>
								<option data-countryCode="TR" value="+90">Turkey (+90)</option>
								<option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
								<option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
								<option data-countryCode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
								<option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
								<option data-countryCode="UG" value="+256">Uganda (+256)</option>
								<option data-countryCode="GB" value="+44">UK (+44)</option>
								<option data-countryCode="UA" value="+380">Ukraine (+380)</option>
								<option data-countryCode="AE" value="+971">United Arab Emirates (+971)</option>
								<option data-countryCode="UY" value="+598">Uruguay (+598)</option>
								<option data-countryCode="US" value="+1">USA (+1)</option>
								<option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
								<option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
								<option data-countryCode="VA" value="+379">Vatican City (+379)</option>
								<option data-countryCode="VE" value="+58">Venezuela (+58)</option>
								<option data-countryCode="VN" value="+84">Vietnam (+84)</option>
								<option data-countryCode="VG" value="+84">Virgin Islands - British (+1284)</option>
								<option data-countryCode="VI" value="+84">Virgin Islands - US (+1340)</option>
								<option data-countryCode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
								<option data-countryCode="YE" value="+969">Yemen (North)(+969)</option>
								<option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
								<option data-countryCode="ZM" value="+260">Zambia (+260)</option>
								<option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>
                            </select>
                        </td>
                        <td>
                            <input dir="auto" placeholder="رقم الهاتف" class="form-control" type="text" name="cRPhone2"
                                   id="cRPhone2">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-12">
 
        </div>
		<div class="col-lg-12">					<p><br/><br/><br/></p>					<p align="right">المرفقات&nbsp;&nbsp;</p>
			<div class="col-lg-3"><button type="button" class="btn btn-default" onclick="otherInfo()"> << Skills and Hobbies</button></div>
			<div class="col-lg-offset-9" align="right"><button type="button" class="btn btn-default" onclick="uploads()"> Uploads >> </button></div>
		</div>
    </div>

    <div id="uploads" style="display:none">
        <div class="col-lg-12">
			<p><br/></p>
            <div class="well well-sm">
                <div class="col-sm-6">
                    <h4>Uploads</h4>
                </div>
                <div class="col-sm-6 text-right">
                    <h4>تحميل المرفقات</h4>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-lg-12">
                <span>Upload CV - تحميل السيرة الذاتية:</span>
                <input type="file" id="uploadCV" name="uploadCV" class="form-control" accept=".pdf , .docx , .doc"/>
            </div>			<p><br/><br/><br/></p>
            <div class="col-lg-12">
                <span>Upload Transcript of Results - تحميل شهادة الدرجات: *</span>
                <input type="file" id="uploadTranscript" name="uploadTranscript" class="form-control" accept=".pdf , .docx , .doc"/>
            </div>			<p><br/><br/><br/><br/></p>			</div>						<p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; المراجع</p>		
		<div class="col-lg-12" align="left">
			<div class="col-lg-3" align="left"><button type="button" class="btn btn-default" onclick="references()"> << References</button></div>
		</div>
    </div>

	<p><br/><br/><br/></p>	
	<center>
	<p align=center>    يرجى أدخال الحقول المطلوبة رجاءاً	<p></p>
	<input type="button"  value="Check the required fields" onclick="validate_form();"></p>
		<h1>Submit Your Form</h1>
		<input type="submit" name="submit" value="Submit" id="xx" disabled= true>
	</center>
	
</form>

<p><br/><br/><br/></p>
<div id = "googlemap" style = "width:900px; height:400px;"></div>
	<p><br /></p>
</div>

<br><br><br><br>  


<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="js/select/js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="js/dp/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.mobZip').selectpicker({width: '95px'});
        $('#gender').selectpicker();
        $('.cAddress').selectpicker();
        $('.cPresent').selectpicker();
        $('.cRole').selectpicker();
        $('.cIndustry').selectpicker();
        $('.cDegree').selectpicker();
        $('.cCountry').selectpicker();
        $('.cGrade').selectpicker();
        $('.cCDate').selectpicker();
        $('.cProficiency').selectpicker();
        $('.cExperience').selectpicker();
        $('.cLUsed').selectpicker();
        $('.cLanguages').selectpicker();
		
        $('#cField').bootstrapSwitch(
                {
                    'offText': 'No / كلا',
                    'onText': 'Yes / نعم',
                    'onColor': 'warning'
					
                });
        $('#cTravel').bootstrapSwitch(
                {
                    'offText': 'No / كلا',
                    'onText': 'Yes / نعم',
                    'onColor': 'warning'
                });
	    $('.cField').selectpicker();
        $('.status').selectpicker();
        $('.cIssued').selectpicker();
        $('.location').selectpicker();
        $('.industry').selectpicker();
        $('.cNationality').selectpicker();
        $('.cLevel').selectpicker();
        $('.cPeriod').selectpicker();
        $('.cMarital').selectpicker();
        $('.cLicense').selectpicker();
        $('.payD').selectpicker();
        $('.cLocation').selectpicker();
        $('#dob').datetimepicker({
            pickTime: false,
            format: 'YYYY-MM-DD',
            dayViewHeaderFormat: 'M YYY',
            viewMode: 'years'
        });
        $('.cSDate').datetimepicker({
            pickTime: false,
            format: 'YYYY-MM-DD',
            dayViewHeaderFormat: 'M YYY',
            viewMode: 'years'
        });
        $('.cEDate').datetimepicker({
            pickTime: false,
            format: 'YYYY-MM-DD',
            dayViewHeaderFormat: 'M YYY',
            viewMode: 'years'
        });
        $('.cMSince').datetimepicker({
            pickTime: false,
            format: 'YYYY-MM-DD',
            dayViewHeaderFormat: 'M YYY',
            viewMode: 'years'
        });
    });
</script>
</body>
</html>