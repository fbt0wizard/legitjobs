<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user_name'] ?> | Dashboard</title>
    <link rel="stylesheet" href="./css/posted_job.css" />
    <link rel="stylesheet" href="./css/loader.css" />
    <link rel="stylesheet" href="./css/widgEditor.css" />
    <!-- <link rel="stylesheet" href="./css/info.css" /> -->
    <!-- <link rel="stylesheet" href="./css/main.css" /> -->
    <link rel="stylesheet" href="./css/widgContent.css" />
    <link rel="stylesheet" href="css/chosen.css">
    <!-- <link rel="stylesheet" href="./css/richtext.min.css" /> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="stylesheet" href="./css/backend_side_nav.css" />
  </head>

  <body>
    <div class="sticky-side-nav">
      <div class="side-nav">
        <div class="site-logo">
          <a href="dashboard.php"><img src="/legitjobs/images/Group 1.png" alt=""></a>
          <p class="close-nav">
            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
          </p>
        </div>
        <div class="nav-links">
          <a id="postJob"><i class="fa fa-home" aria-hidden="true"></i>Post Job</a>
          <a id="manageJob"><i class="fa fa-wrench" aria-hidden="true"></i>Manage Jobs</a>
          <a id="postBlog"><i class="fa fa-briefcase" aria-hidden="true"></i>Post Blog</a>
          <a id="manageBlog"><i class="fa fa-envelope" aria-hidden="true"></i>Manage Blog</a>
          <a href=""><i class="fa fa-info-circle" aria-hidden="true"></i>About Us</a>

        </div>
      </div>
      <div class="burger">
        <div class="l1"></div>
        <div class="l2"></div>
        <div class="l3"></div>
      </div>
    </div>

    <div class="main">
      <div class="sticky-top-nav">

      </div>
      <div class="top-nav">
        <div class="mobile-menu">
          <div class="left-side">

          </div>
          <div class="right-nav-link">
            <div class="right-link-container">
              <div class="right-link-links">
                <a href="/legitjobs/engine/logout.php">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="job-post">
        <h3 class="head">Job Post Section</h3>
        <form action="">
          <fieldset>
            <legend>Post Job</legend>
            <br>
            <div class="position-tittle">
              <label for="position">Position tittle:</label> <br>
              <input type="text" id="tittle">
            </div>
            <div class="field">
              <label for="job_field">Job Field:</label> <br>
              <select name="job_field" id="jobField" class="chosen-select" data-placeholder="Choose job field" multiple style="width: 100%;">
                <option value=""></option>
                <option value="Administration / Secretarial / Personal Assistant (PA) / Clerical / Office Assistant">Administration / Secretarial / Personal Assistant (PA) / Clerical / Office Assistant</option>
                <option value="Advertising / Branding / Public Relation (PR)">Advertising / Branding / Public Relation (PR) </option>
                <option value="Agriculture / Agro-Allied / Farming">Agriculture / Agro-Allied / Farming </option>
                <option value="Architectural / Designing / Surveying / Estate Management">Architectural / Designing / Surveying / Estate Management </option>
                <option value="Artisan / Labour / Factory Work / Craftsmen / Vocational / Semi-Skilled">Artisan / Labour / Factory Work / Craftsmen / Vocational / Semi-Skilled </option>
                <option value="Arts / Craft / Creatives">Arts / Craft / Creatives </option>
                <option value="Automobile Services">Automobile Services </option>
                <option value="Aviation / Airline Services / Air Hostess / Pilot / Captain / Aircraft Engineer">Aviation / Airline Services / Air Hostess / Pilot / Captain / Aircraft Engineer </option>
                <option value="Caregiver / Nanny / Domestic Help">Caregiver / Nanny / Domestic Help </option>
                <option value="Cashiers / Tellers / Ticketing ">Cashiers / Tellers / Ticketing </option>
                <option value="Chaplain / Pastor">Chaplain / Pastor </option>
                <option value="Cleaning / Janitorial / Laundry Attendant">Cleaning / Janitorial / Laundry Attendant </option>
                <option value="Computer - Database Support / Database Administration / Development / Oracle / MySQL">Computer - Database Support / Database Administration / Development / Oracle / MySQL </option>
                <option value="Computer - Frontend Design &amp; Development / UI / UX Design / Frontend Scripting">Computer - Frontend Design &amp; Development / UI / UX Design / Frontend Scripting</option>
                <option value="Computer - Full Stack Software Development / Frontend &amp; Backend Developer / Web Design &amp; Development">Computer - Full Stack Software Development / Frontend &amp; Backend Developer / Web Design &amp; Development</option>
                <option value="Computer - Graphics Design / Artist">Computer - Graphics Design / Artist </option>
                <option value="Computer - Mobile Development / Android / IOS / Games">Computer - Mobile Development / Android / IOS / Games </option>
                <option value="Computer - Network &amp; Hardware Support / Network Design and Security">Computer - Network &amp; Hardware Support / Network Design and Security</option>
                <option value="Computer - Software Support / Linux System Admin / Windows Admin">Computer - Software Support / Linux System Admin / Windows Admin </option>
                <option value="Computer / ICT / Software / Hardware / Cloud Computing">Computer / ICT / Software / Hardware / Cloud Computing</option>
                <option value="Consulting / Strategy">Consulting / Strategy </option>
                <option value="Cook / Chef / Baker / Pastry Chef / Steward">Cook / Chef / Baker / Pastry Chef / Steward </option>
                <option value="Customer Service / Call Centre / Front Desk / Receptionist">Customer Service / Call Centre / Front Desk / Receptionist </option>
                <option value="Data Entry / Analysis">Data Entry / Analysis</option>
                <option value="Digital Marketing / Social Media Mgt &amp; Influencing">Digital Marketing / Social Media Mgt &amp; Influencing </option>
                <option value="Driving / Haulage / Dispatch Rider / Bike Rider / Chauffeur">Driving / Haulage / Dispatch Rider / Bike Rider / Chauffeur </option>
                <option value="Economics / Statistics / Data Science">Economics / Statistics / Data Science</option>
                <option value="Education - Higher Institution / Teaching / Lecturing / Training">Education - Higher Institution / Teaching / Lecturing / Training </option>
                <option value="Education - Non Academic / Registrar / Bursary / Admin / Librarian">Education - Non Academic / Registrar / Bursary / Admin / Librarian </option>
                <option value="Education - Sec/Pri/Creche / Teaching / Tutoring / Creche Services">Education - Sec/Pri/Creche / Teaching / Tutoring / Creche Services </option>
                <option value="Engineering - Chemical / Petroleum">Engineering - Chemical / Petroleum </option>
                <option value="Engineering - Civil / Construction / Building">Engineering - Civil / Construction / Building </option>
                <option value="Engineering - Electrical / Electronics / Telecom">Engineering - Electrical / Electronics / Telecom </option>
                <option value="Engineering - Mechanical / Metallurgical">Engineering - Mechanical / Metallurgical </option>
                <option value="Executive / Top Management">Executive / Top Management </option>
                <option value="Facility Management / Maintenance">Facility Management / Maintenance </option>
                <option value="Fashion Design / Beauty Care / Make-up / Tailoring / Hair Stylist">Fashion Design / Beauty Care / Make-up / Tailoring / Hair Stylist </option>
                <option value="Finance / Accounting / Audit / Tax">Finance / Accounting / Audit / Tax </option>
                <option value="Furniture Design / Carpentery">Furniture Design / Carpentery </option>
                <option value="Graduate Trainee / Fresh Graduate / Graduate Internship">Graduate Trainee / Fresh Graduate / Graduate Internship </option>
                <option value="Hospitality and Tourism Mgt &amp; Services - Hotel / Restuarant / Catering / Museum / Club / Bar">Hospitality and Tourism Mgt &amp; Services - Hotel / Restuarant / Catering / Museum / Club / Bar </option>
                <option value="HSE / Safety &amp; Risk Management / Compliance">HSE / Safety &amp; Risk Management / Compliance </option>
                <option value="Human Resources / Recruitment">Human Resources / Recruitment </option>
                <option value="Internship / SIWES / Industrial Training">Internship / SIWES / Industrial Training </option>
                <option value="Law / Legal">Law / Legal </option>
                <option value="Logistics / Procurement / Purchasing / Supply Chain">Logistics / Procurement / Purchasing / Supply Chain </option>
                <option value="Maritime Services / Shipping / Clearing &amp; Forwarding / Marine Officer / Seamen">Maritime Services / Shipping / Clearing &amp; Forwarding / Marine Officer / Seamen </option>
                <option value="Media / Broadcasting / Journalism / Content Writing / Editing">Media / Broadcasting / Journalism / Content Writing / Editing </option>
                <option value="Medical - Dental / ENT">Medical - Dental / ENT </option>
                <option value="Medical - Nursing &amp; Midwifery">Medical - Nursing &amp; Midwifery </option>
                <option value="Medical - Optometrist / Ophtalmologist">Medical - Optometrist / Ophtalmologist </option>
                <option value="Medical - Pharmaceutical">Medical - Pharmaceutical </option>
                <option value="Medical - Physician / Medical Officer / Doctor / Consultants / Medical Internship">Medical - Physician / Medical Officer / Doctor / Consultants / Medical Internship </option>
                <option value="Medical - Physiotherapist / Massage Therapy / Masseuse / Masseur">Medical - Physiotherapist / Massage Therapy / Masseuse / Masseur </option>
                <option value="Medical Laboratory / Radiography / Sonography">Medical Laboratory / Radiography / Sonography </option>
                <option value="Monitoring and Evaluation">Monitoring and Evaluation </option>
                <option value="Multimedia / Film Production / Photograhpy / Cinematography / Video &amp; Audio Edtiting">Multimedia / Film Production / Photograhpy / Cinematography / Video &amp; Audio Edtiting </option>
                <option value="Operations / Project Management">Operations / Project Management </option>
                <option value="Quality Assurance (QA) / Quality Control (QC)">Quality Assurance (QA) / Quality Control (QC) </option>
                <option value="Remote / Freelance / Work at home">Remote / Freelance / Work at home</option>
                <option value="Research / Survey">Research / Survey </option>
                <option value="Security - Guard / Gateman">Security - Guard / Gateman</option>
                <option value="Security - Military / Police / Civil Defence / Para-Military">Security - Military / Police / Civil Defence / Para-Military </option>
                <option value="Security - Professional / Public / Corporate Security management">Security - Professional / Public / Corporate Security management</option>
                <option value="Sports / Fitness / Gym Instructor">Sports / Fitness / Gym Instructor </option>
                <option value="Store-Keeping &amp; Warehousing">Store-Keeping &amp; Warehousing </option>
                <option value="Technician - Electrical / Electrician">Technician - Electrical / Electrician </option>
                <option value="Technician - Fitter / Plumber / Welder / Panel Beater / Scaffolder">Technician - Fitter / Plumber / Welder / Panel Beater / Scaffolder </option>
                <option value="Technician - Mechanical / Mechanic / Generator Technician">Technician - Mechanical / Mechanic / Generator Technician </option>
                <option value="Waiter / Waitress / Concierge / Room Attendant">Waiter / Waitress / Concierge / Room Attendant </option>
              </select>
            </div>
            <div class="qualification">
              <label for="qualification">Qualification:</label> <br>
              <select class="chosen-select" id="qualification" multiple="true" style="width: 100%;" data-placeholder="Choose expected qualification">
                <optgroup label="General Qualification">
                  <option value="First Degree (Bachelor) - BSc / BA / B.Eng / LL.B / MBBS / B.Pharm">First Degree (Bachelor) - BSc / BA / B.Eng / LL.B / MBBS / B.Pharm</option>
                  <option value="First School Leaving Cert (FSLC)">First School Leaving Cert (FSLC) </option>
                  <option value="HND">HND</option>
                  <option value="Master Degree - MA / MSc / MBA">Master Degree - MA / MSc / MBA </option>
                  <option value="NCE">NCE</option>
                  <option value="OND">OND</option>
                  <option value="PhDs / Doctorates - PhD / DPhil">PhDs / Doctorates - PhD / DPhil </option>
                  <option value="SSCE / GCE / NECO">SSCE / GCE / NECO </option>
                </optgroup>
                <optgroup label="Specific Qualification">
                  <option value="Bachelor of Agriculture (B.Agric)">Bachelor of Agriculture (B.Agric) </option>
                  <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch) </option>
                  <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA) </option>
                  <option value="Bachelor of Education (BEd)">Bachelor of Education (BEd) </option>
                  <option value="Bachelor of Engineering (B.Eng)">Bachelor of Engineering (B.Eng) </option>
                  <option value="Bachelor of Law (BL / LLB / JD)">Bachelor of Law (BL / LLB / JD) </option>
                  <option value="Bachelor of Medicine &amp; Surgery (MBBS / MBChB)">Bachelor of Medicine &amp; Surgery (MBBS / MBChB) </option>
                  <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm) </option>
                  <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc) </option>
                  <option value="Bachelor of Technology (B.Tech)">Bachelor of Technology (B.Tech) </option>
                  <option value="Doctor of Philosophy (PhD/DPhil)">Doctor of Philosophy (PhD/DPhil) </option>
                  <option value="First School Leaving Cert (FSLC)">First School Leaving Cert (FSLC) </option>
                  <option value="General Certificate of Education (GCE)">General Certificate of Education (GCE) </option>
                  <option value="Graduate Diploma in Law (GDL)">Graduate Diploma in Law (GDL) </option>
                  <option value="Higher National Diploma (HND)">Higher National Diploma (HND) </option>
                  <option value="Legal Practice Course (LPC)">Legal Practice Course (LPC) </option>
                  <option value="Master of Agriculture (M.Agric)">Master of Agriculture (M.Agric)</option>
                  <option value="Master of Architecture (M.Arch)">Master of Architecture (M.Arch) </option>
                  <option value="Master of Arts (MA)">Master of Arts (MA) </option>
                  <option value="Master of Business Administration (MBA)">Master of Business Administration (MBA) </option>
                  <option value="Master of Engineering (MEng)">Master of Engineering (MEng) </option>
                  <option value="Master of Fine Arts (MFA)">Master of Fine Arts (MFA) </option>
                  <option value="Master of Laws (LLM)">Master of Laws (LLM) </option>
                  <option value="Master of Letters (MLitt)">Master of Letters (MLitt) </option>
                  <option value="Master of Pharmacy (M.Pharm)">Master of Pharmacy (M.Pharm)</option>
                  <option value="Master of Philosophy (MPhil)">Master of Philosophy (MPhil) </option>
                  <option value="Master of Research (MRes)">Master of Research (MRes) </option>
                  <option value="Master of Science (MSc)">Master of Science (MSc) </option>
                  <option value="Master of Social Work (MSW)">Master of Social Work (MSW) </option>
                  <option value="Masters in Management (MiM)">Masters in Management (MiM) </option>
                  <option value="National Certificate of Education (NCE)">National Certificate of Education (NCE) </option>
                  <option value="National Examinations Council (NECO)">National Examinations Council (NECO) </option>
                  <option value="Ordinary National Diploma (OND)">Ordinary National Diploma (OND)</option>
                  <option value="Postgraduate Certificate in Education (PGCE)">Postgraduate Certificate in Education (PGCE) </option>
                  <option value="Professional Graduate Diploma in Education (PGDE)">Professional Graduate Diploma in Education (PGDE) </option>
                  <option value="Senior Seconday School Certificate (SSCE)">Senior Seconday School Certificate (SSCE) </option>
                </optgroup>
              </select>
            </div>
            <div class="location">
              <label for="location">Job Location:</label> <br>
              <select class="chosen-select" id="state" multiple="true" data-placeholder="Choose State locations" style="width: 100%;">
                <option value="Outside Nigeria">Outside Nigeria</option>
                <option value="Nation Wide">Nation Wide</option>
                <option value="Abia">Abia</option>
                <option value="Abuja (FCT)">Abuja (FCT) </option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom </option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River </option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jagawa">Jagawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="907">Kwara </option>
                <option value="Kwara">Lagos</option>
                <option value="Nassarawa">Nassarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>
              </select>
            </div>
            <div class="city-town">
              <div class="city">
                <label for="city">City / Town:</label> <br>
                <input type="text" name="city" id="city">
              </div>
              <div class="employment-type">
                <label for="employment-type">Employment Type:</label> <br>
                <select name="employment-type" id="employmentType">
                  <option value="" selected=""> </option>
                  <option value="Full-time">Full-time</option>
                  <option value="Part-time">Part-time</option>
                  <option value="Contract">Contract</option>
                  <option value="Internship">Internship</option>
                  <option value="NYSC">NYSC</option>
                  <option value="Temporary">Temporary</option>
                  <option value="Volunteer">Volunteer</option>
                </select>
              </div>
            </div>
            <div class="country">
              <label for="country">Country:</label> <br>
              <select name="country" id="country">
                <option value=""></option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American-samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape
                  Verde</option>
                <option value="Cayman Islands">Cayman
                  Islands</option>
                <option value="Central African Republic">Central
                  African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Ivory Coast">Ivory Coast</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El
                  Salvador</option>
                <option value="Equatorial Guinea">Equatorial
                  Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea Bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao">Lao</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="North Korea">North Korea</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Vincent">Saint Vincent </option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South
                  Africa</option>
                <option value="South Korea">South Korea</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri
                  Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Ukraine">Ukraine</option>
                <option value="Uganda">Uganda</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands">Virgin Islands</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Yugoslavia">Yugoslavia</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            <div class="experience">
              <div class="min-exp">
                <label for="min-experience">Minimum Experience:</label> <br>
                <select name="min-experience" id="minExp">
                  <option value="" selected=""> </option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">Above 30</option>
                </select>
              </div>
              <div class="max-exp">
                <label for="max-exp">Maximum Experience:</label> <br>
                <select name="maximum-experience" id="maxExp">
                  <option value="" selected=""> </option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">Above 30</option>
                </select>
              </div>
            </div>
            <div class="salary">
              <div class="salary-currency">
                <label for="salary-currency">salary currency:</label> <br>
                <select name="salary-currency" id="salaryCurrency">
                  <option value="" selected=""></option>
                  <option value="Naira">Naira</option>
                  <option value="Dollar">US Dollar</option>
                  <option value="Pounds">UK Pounds</option>
                  <option value="Euro">Euro</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <div class="term">
                <label for="term">Salary Term:</label> <br>
                <select name="term" id="term" class="sal-term">
                  <option value="" selected=""></option>
                  <option value="Annually">Annually</option>
                  <option value="Monthly">Monthly</option>
                </select>
              </div>
              <div class="min-salary">
                <label for="min">Minimum Salary:</label> <br>
                <input type="text" name="min" id="min">
              </div>
              <div class="max-salary">
                <label for="max">Maximum Salary:</label> <br>
                <input type="text" name="max" id="max">
                </select>
              </div>
            </div>
            <div class="deadline">
              <label for="deadline">Application Deadline:</label> <br>
              <input type="date" id="deadLine" name="deadline">
            </div>
            <div class="job-describtion">
              <label for="job-description">
                Job Description / Responsibilities / Skills / Education / Experience / Remunerations / Other Requirements: * <br>
                <span class="warning">Note: Do not use right-click to paste into this space, pls use 'Ctrl V'. </span>
              </label>
              <textarea id="jobDescription" name="jobdescription" class="widgEditor nothing">Enter Job Description...</textarea>
            </div>
            <div class="application-method">
              <label for="method">
                Method Of Application:
              </label>
              <textarea id="jobMethod" name="method" class="widgEditor nothing">Enter Method Of Application...</textarea>
            </div>
          </fieldset>

          <fieldset class="company-section">
            <legend>Company Details</legend>
            <div class="company-name">
              <label for="company-name">Company Name:</label> <br>
              <input type="text" name="company-name" id="companyName">
            </div>
            <div class="company-industry">
              <label for="company-industry">Company Industry:</label> <br>
              <select name="company-industry" id="companyIndustry" data-placeholder="Choose company industry" class="chosen-select" multiple style="width: 100%;">
                <option value="Advertising / Branding / PR">Advertising / Branding / PR</option>
                <option value="Agriculture / Agro-Allied">Agriculture / Agro-Allied </option>
                <option value="Automotive / Car Services">Automotive / Car Services</option>
                <option value="Aviation">Aviation</option>
                <option value="Banking / Financial Services">Banking / Financial Services </option>
                <option value="Construction / Real Estate">Construction / Real Estate </option>
                <option value="Consulting / Recruitment / HR Services">Consulting / Recruitment / HR Services </option>
                <option value="Creative Arts / Crafts">Creative Arts / Crafts </option>
                <option value="Digital Marketing / Social Media">Digital Marketing / Social Media </option>
                <option value="Ecommerce / Retail / Wholesales">Ecommerce / Retail / Wholesales </option>
                <option value="Education / Teaching / Training">Education / Teaching / Training </option>
                <option value="Energy / Power">Energy / Power </option>
                <option value="Engineering / Technical">Engineering / Technical </option>
                <option value="Environment / Cleaning Services">Environment / Cleaning Services </option>
                <option value="Fashion / Clothing / Design">Fashion / Clothing / Design </option>
                <option value="General">General</option>
                <option value="Government Agencies / Ministries / Public Sector">Government Agencies / Ministries / Public Sector </option>
                <option value="Hospitality / Hotels / Restuarant / Food Services">Hospitality / Hotels / Restuarant / Food Services </option>
                <option value="ICT / Computer / IT Services / Software">ICT / Computer / IT Services / Software </option>
                <option value="Insurance">Insurance</option>
                <option value="Law / Legal">Law / Legal </option>
                <option value="Logistics and Transportation">Logistics and Transportation </option>
                <option value="Manufacturing / Production / FMCG">Manufacturing / Production / FMCG </option>
                <option value="Media / Radio / TV / Publishing / Entertainment">Media / Radio / TV / Publishing / Entertainment </option>
                <option value="Medical / Healthcare">Medical / Healthcare </option>
                <option value="Mining / Geology">Mining / Geology </option>
                <option value="NGO / International Agency">NGO / International Agency </option>
                <option value="Oil &amp; Gas">Oil &amp; Gas </option>
                <option value="Pharmaceutical">Pharmaceutical</option>
                <option value="Professional Body / Social Association">Professional Body / Social Association</option>
                <option value="Religious">Religious</option>
                <option value="Security Services">Security Services </option>
                <option value="Shipping / Maritime">Shipping / Maritime </option>
                <option value="Sports / Gaming">Sports / Gaming </option>
                <option value="Telecommunication">Telecommunication</option>
                <option value="Travels and Tourism">Travels and Tourism </option>
              </select>
            </div>
            <div class="cac">
              <label for="cac">CAC Reg No:</label> <br>
              <input type="text" name="cac" id="cac">
            </div>
            <div class="website">
              <label for="website">Website:</label> <br>
              <input type="text" name="website" id="website">
            </div>
            <div class="email">
              <label for="email">Email Address:</label> <br>
              <input type="email" name="email" id="email">
            </div>
            <div class="phone">
              <label for="phone">Phone:</label> <br>
              <input type="text" name="phone" id="phone">
            </div>
            <div class="company-add">
              <label for="company-add">
                Company Address:
              </label> <br>
              <textarea id="companyAddress" name="company-add" class="address-input" placeholder="Enter Company Address..."></textarea>
            </div>
            <div class="company-details">
              <label for="company-details">
                Company Details:
              </label>
              <textarea id="companyDetails" name="company-details" class="widgEditor nothing">Enter Company Details...</textarea>
            </div>
          </fieldset>
          <div class="send-btn">
            <button class="submit-btn" id="postBtn" type="submit">Submit</button>
          </div>
        </form>
      </div>
      <div class="manage-jobs">
        <div class="sub-manage">
          <div class="manage-btn">
            <button id="approvedJobs">Already posted Jobs</button>
            <button id="pendingJobs">Pending Approval</button>
          </div>
          <div id="seeJobs">
            <div class="approved">
              <button onclick='home()' id='backBtn'>Back <i class='fa fa-chevron-circle-left' aria-hidden='true'></i></button>
              <div class="content"></div>
            </div>
            <div class="pending">
            <button onclick='home()' id='backBtn'>Back <i class='fa fa-chevron-circle-left' aria-hidden='true'></i></button>
              <div class="pending-content"></div>
            </div>
            <div class="manage-details">
              <div class='nav-btn'><button onclick='back()' id='backBtn'>Back <i class='fa fa-chevron-circle-left' aria-hidden='true'></i></button>
                <button id='deleteBtn'>Delete <i class='fa fa-trash-o' aria-hidden='true'></i></button>
              </div>
              <div class="more-content"></div>
            </div>
            <div class="manage-pending-details">
              <div class='nav-btn'><button onclick='backPending()' id='backBtn'>Back <i class='fa fa-chevron-circle-left' aria-hidden='true'></i></button>
                <button id='deleteBtn'>Delete <i class='fa fa-trash-o' aria-hidden='true'></i></button>
              </div>
              <div class="more-content2">
                
              </div>
            </div>
            <div class="main-home">
              <div class="mini-report">
                <div class="report1">
                  <p class="head-text">Total Jobs</p> <br>
                  <h1>25</h1>
                </div>
                <div class="report2">
                  <p class="head-text">Last 30 Days</p> <br>
                  <h1>10</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="loading-man" id="loadingMan">
          <div class="loader">
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
            <div class="bubble"></div>
          </div>
        </div>
      </div>
      <div class="loading-bar" id="loadingBar">
        <div class="loader">
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
          <div class="bubble"></div>
        </div>
      </div>


      <script src="/legitjobs/js/jquery-3.6.0.min.js"></script>
      <script src="/legitjobs/js/chosen.jquery.js" type="text/javascript"></script>
      <script src="/legitjobs/js/init.js" type="text/javascript" charset="utf-8"></script>
      <!-- <script src="/legitjobs/js/jquery.richtext.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
      <script src="/legitjobs/js/dashboard.js"></script>
      <script src="/legitjobs/js/widgEditor.js"></script>
      <script src="/legitjobs/js/post_ajax.js"></script>
  </body>

  </html>


<?php
} else {
  header("Location: backend.php");
  exit();
}
?>