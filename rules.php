<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>
    <script src="js/slider.js"></script>

    <title>MLM!</title>
    <style media="all">
        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            background: #f5f6fa;
            font-family: 'Poppins', sans-serif;
        }

        footer {
            margin-top: auto;
        }

        .small-header {
            position:fixed;
            height:30px;
            z-index:100;
            width:100%;
            background:#2f9934;
            font-family: sans-serif;
            color:white!important;
            box-shadow: 1px 1px 3px 2px rgba(0, 0, 0, 0.2);
        }

        .left-ul {
            display: inline-block;
            list-style-type: none;
            position: absolute;
            left: 0;
        }

        .left-ul li {
            float: left;
            /*            margin-right: 20px;*/
            margin-top: 5px;
            font-size: 13px;
        }

        .right-ul {
            display: inline-block;
            list-style-type: none;
            position: absolute;
            right: 20px;
        }

        .right-ul li {
            float: left;
            margin-top: 5px;
            font-size: 13px;
        }

        .middle-header {
            position:relative;
            top:35px;
            z-index:1;
            background: #f5f6fa;
            display: grid;
            place-items: Center;
        }

        .menu-items ul {
            list-style-type: none;
            margin-bottom: 0;
        }

        .menu-items li {
            float: left;
            margin-right: 2em;
            margin-bottom: 1em;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /*            background-color: #f1f1f1;*/
            /*            background-color: #6c5ce7;*/
            background-color: #ddd;
            min-width: 160px;
            top: 40px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 12px;
        }

        .dropdown-content li {
            width: 100%;
        }

        .mit {
            display: none;
            width: 10px;
            height: 10px;
            position: absolute;
            top: 20px;
            left: 10px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid transparent;
            border-bottom: 10px solid #ddd;

        }

        .dropdown:hover .mit {
            display: block;
        }

        .dropdown-content a:hover {
            color: red;
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            transition: all .4s ease;
            -webkit-transition: all .4s ease;

        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .tri {
            width: 20px;
            height: 20px;
            background:#f5f6fa;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: 50%;
            left: 50%;
            bottom:-10px;
        }

        .product-catalog {
            background: white;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -webkit-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -moz-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
        }

        .product-catalog .col-md-2 {
            text-align: center;
        }

        .product-catalog h1 {
            font-weight: 300;
            color: #d63031;
            padding: 10px 0px;
        }

        .product-catalog h1::after {
            content: '';
            width: 40px;
            height: 5px;
            background: #55efc4;
            display: block;
            margin: auto;
        }

        .product-catalog i {
            color: #0984e3;
            padding: 5px;
        }

        .product-catalog .icon {
            display: inline-block;
            background: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3);
        }

        .careers .col-lg-4 {
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 20px 0px;
            background: white;
        }

        .careers h1 {
            font-weight: 300;
            color: #d63031;
            padding: 10px 0px;
        }

        .careers h1::after {
            content: '';
            width: 40px;
            height: 5px;
            background: #55efc4;
            display: block;
            margin: auto;
        }

        .careers .boxr {
            margin: 0px auto;
            width: 200px;
            height: 40px;
            background: #74b9ff;
            position: relative;
            display: table;
            text-align: center;
            margin-top: -20px;
        }

        .careers .tria {
            width: 10px;
            height: 10px;
            position: absolute;
            /*            background: #74b9ff;*/
            border-left: 10px solid transparent;
            border-right: 10px solid #0984e3;
            border-top: 10px solid transparent;
            border-bottom: 10px solid #0984e3;
            left: -20px;
            z-index: -1;
        }

        .careers .boxr p {
            display:table-cell;
            vertical-align: middle;
            font-size: 20px;
            color: white;
        }

        .boxr + p{
            margin-top:5px;
            font-family: sans-serif;
            font-weight: 250;
            font-size:13px;
        }

        .footer {
            background: white;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -webkit-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -moz-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
        }

        .footer p {
            font-size: 15px;
        }

        .footer .col-lg-4 {
            text-align: center;
            margin-top: 20px;
        }

        .footer .col-lg-4 form {
            display: inline-block;
        }

        .footer .col-lg-4 form .form-group input {
            outline: none;
            box-shadow: none;
            background: #00b894;
        }

        .footer .input-group-text {
            background: #d63031;
        }

        .footer input::placeholder {
            color: white;
        }

        .footer input:focus {
            color: white;
        }

        .footer .col-lg-4 form .form-group i {
            color: white;
        }

        .footer .col-lg-4 img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .footer ul {
            list-style-type: none;
        }

        .footer li {
            float: left;
            margin-right: 10px;
        }

        .footer li:nth-child(1) {
            padding-right: 10px;
            border-right: 1px solid black;
        }

        .footer li:nth-child(2) {
            padding-right: 10px;
            border-right: 1px solid black;
        }

        .footer li:nth-child(3) {
            padding-right: 10px;
            border-right: 1px solid black;
        }
        .footer li:last-child
        {
            margin-right:0px;
        }
        .footer .cws {
            display: grid;
            display: inline-block;
            place-items: Center;
            margin-top: 15px;
        }

        .footer .cws li {
            /*            border: 1px solid black;*/
            margin-right: 0px;
            padding-right: 0px;
            padding-left: 5px;
            border-right: 0px;
        }

        .footer .of {
            margin: auto 0px;
        }

        .footer .sf {
            margin: auto 0px;
        }
    </style>
</head>

<body>

    <div class="small-header">

        <ul class="left-ul">
            <li class="mr-3"><i class="fa fa-mobile-phone"></i> +918106307498</li>
            <li><i class="fa fa-envelope"></i> swamy@lipidmarketingllp.com</li>
        </ul>

        <ul class="right-ul">
            <li class="mr-3"><i class="fa fa-user-circle"></i> <a href="memlogin.php" style="color:white;">Login</a></li>
            <li><i class="fa fa-user-circle"></i> <a href="index.php" style="color:white;">Register</a></li>
        </ul>

    </div>
    <div class="middle-header">
        <div class="logo">
            <img src="img/logo.png" alt="" width="230" height="60">
        </div>
        <div class="menu-items">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <div class="dropdown" style="">
                    <li><a href="">Business Model </a></li>
                    <div class="mit"></div>
                    <div class="dropdown-content">
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="rules.php">Rules of Conduct</a></li>
                    </div>
                </div>
                <li><a href="">Services</a></li>
                <li><a href="">How it works</a></li>
                <div class="dropdown">
                    <li><a href="">Join LIPID</a></li>
                    <div class="mit"></div>
                    <div class="dropdown-content">
                        <li><a href="admin.php">Admin Login</a></li>
                        <li><a href="memlogin.php">Login</a></li>
                        <li><a href="index.php">Register</a></li>
                    </div>
                </div>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="tri"></div>
    </div>

    <main class="">
        <div class="container mb-5" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
            <div class="row mt-4 mb-4 p-4 bg-white">
                <h1 class="">Rules of Conduct</h1>
                <p style="font-size:15px;font-weight:400;">We are very delighted that you have shown interest in our enterprise. Data protection is of a particularly high priority for the management of the Feedough. The use of the Internet pages of the Feedough is possible without any indication of personal data; however, if a data subject wants to use special enterprise services via our website, processing of personal data could become necessary. If the processing of personal data is necessary and there is no statutory basis for such processing, we generally obtain consent from the data subject.</p>
<p style="font-size:15px;font-weight:400;">The processing of personal data, such as the name, address, e-mail address, or telephone number of a data subject shall always be in line with the General Data Protection Regulation (GDPR), and in accordance with the country-specific data protection regulations applicable to the Feedough. By means of this data protection declaration, our enterprise would like to inform the general public of the nature, scope, and purpose of the personal data we collect, use and process. Furthermore, data subjects are informed, by means of this data protection declaration, of the rights to which they are entitled.</p>
<p style="font-size:15px;font-weight:400;">As the controller, the Feedough has implemented numerous technical and organizational measures to ensure the most complete protection of personal data processed through this website. However, Internet-based data transmissions may in principle have security gaps, so absolute protection may not be guaranteed. For this reason, every data subject is free to transfer personal data to us via alternative means, e.g. by telephone.</p>
<div class="">
    <ol>
    <li>Introduction</li>
    <li>Definitions</li>
    <li>Becoming an IBO</li>
    <li>Responsibilities and Obligations</li>
    <li>Presentation of the Plan, Sponsoring and Support</li>
    <li>Preservation of the Lines of Sponsorship</li>
    <li>Business Support Materials</li>
    <li>Marks and Copyrighted Works</li>
    <li>Complying With the IBO Contract (Remedies for Breach)</li>
    <li>Modification of the IBO Contract</li>
    <li>Dispute Resolution Procedures</li>
</ol>
</div>
<div class="">
    <p style="font-size:13px;text-justify:center;">1. Introduction

The Rules of Conduct (“Rules”) form an important part of the contract between Amway and the IBO (the “IBO Contract”). The Rules have been carefully developed in consultation with the IBOAI Board, and have been implemented following notice to IBOs and review of their comments. IBOs own and operate their own Independent Businesses (“IBs”). Amway recognizes the value of the contributions that IBOs who have achieved business goals can make to the development of other IBOs whom they sponsor and support under the Rules. As IBOs develop into established leaders, they play an increasingly important role in mentoring, teaching and training other IBOs about the Amway business. Among other things, the Rules are designed to ensure that all IBOs have the support that they need to continue to develop their IBs with Amway. Under the IBO Contract, IBOs receive substantial benefits, including: the right to purchase products through Amway at IBO cost for resale; the right to sponsor others to become IBOs and sell products offered at www.amway.com; the right to qualify for bonuses under the Amway IBO Compensation Plan (“Plan”); use of Amway’s intellectual property in accordance with the Rules; and a variety of support for IBOs and their Customers. As part of its commitment to support the opportunity made available to IBOs, Amway invests substantial resources in goodwill, in the Line of Sponsorship (“LOS”) and in LOS Information to provide Amway and IBOs with a competitive advantage. All IBOs and Amway share a competitive business interest in maintaining and protecting these assets and interests. The Rules provide important safeguards for IBOs and Amway in this regard, as well as contractual rights and obligations. 1.1. Contractual Relationship: Amway Corp. (“Amway”) has a contract with each IBO that includes all of the terms in the IBO Registration Agreement form executed by the IBO, the renewal form(s) executed or authorized by the IBO, the Plan and the Rules in effect at the time the IBO executed the IBO Registration Agreement, and any Entity Agreement for Independent Business Owners (IBOs) (“Entity Agreement”) or modifications to the Plan or Rules that become effective during the term of the contract (the “IBO Contract”). The current version of the Plan and Rules can be found at www.amway.com. As part of the IBO Contract, IBOs have an obligation to comply with the Rules. 1.2. Choice of Law: Except to the extent that the Federal Arbitration Act applies to Rule 11, the formation, construction, interpretation, and enforceability of the IBO Contract, and all claims arising from or relating to the IBO Contract, shall be governed by Michigan law, without giving effect to any choice of law or conflicts of law rules or provisions (whether of the State of Michigan or any other jurisdiction) that would cause the application of the laws of any jurisdiction other than the State of Michigan. The place where the IBO Contract is made is Michigan. 1.3. Severability: If an arbitrator or court of competent jurisdiction determines any portion of the Rules of Conduct is unenforceable in any respect, then it shall enforce the rest of the Rules of Conduct to the fullest extent permitted by law without affecting the enforceability of all remaining Rules of Conduct.</p>
<p style="font-size:13px;text-justify:center;">
2. Definitions

2.1. Amway IBO Compensation Plan (or Plan) means the business arrangement through which IBOs receive certain income or other compensation as described in Section A of the Business Reference Guide. 2.2. Copyrighted Works means works protectable by copyrights that are owned by, created by or licensed to Amway. 2.3. Customer means a non-IBO who is an end user of products and services offered through or by Amway. 2.4. Independent Business (IB) means an Amway independent business operated by an IBO(s) pursuant to the IBO Contract. 2.5. Independent Business Owner (IBO) means an individual(s) or entity operating an IB pursuant to the IBO Contract. 2.6. IBOAI Board shall refer to the Independent Business Owners Association International, Inc. Board of Directors. 2.7. Line of Sponsorship (LOS) means the structural arrangement of IBOs established by the contractual relationship that each IBO has with Amway. 2.8. LOS Information includes all information that discloses or relates to all or part of the Line of Sponsorship, including but not limited to IBO numbers and other IBO business identification data, IBO personal contact information, IBO business performance information, and all information generated or derived therefrom, in its past, present or future forms. 2.9. Marks means the trademarks, service marks, trade dress and trade names adopted or used by Amway and/or otherwise the subject of pending or existing trademark rights owned by or licensed to Amway, regardless of whether the trademarks, service marks, trade dress or trade names are the subject of trademark applications or registrations. 2.10. Prospect means a prospective IBO. 2.11. Region means the United States, Canada, Dominican Republic, Puerto Rico, U.S. Virgin Islands, Guam, Jamaica, the Pacific Islands of American Samoa, Federated States of Micronesia, Marshall Islands, Northern Mariana Islands, Palau, Wake Island and all authorized Atlantic & Caribbean islands operating under the Plan. 2.12. Use means: (a) with reference to Marks, directly or indirectly placing, affixing or displaying one or more Marks on or in connection with goods or services, in a manner that tends to create the impression of an affiliation, connection, or association between Amway and the IBO or Approved Provider; and (b) with reference to Copyrighted Works, to reproduce, distribute and/or display copies of the Copyrighted Works, in whole or in part, including by means of digital audio transmissions, and to create any derivative works.</p>
<p style="font-size:13px;text-justify:center;">
3. Becoming an IBO

3.1. Registration Agreement:To become an authorized IBO capable of merchandising products and services offered through or by Amway and registering other IBOs, an applicant must be 18 years of age, complete and sign the IBO Registration Agreement, and pay the Business Services and Support fee specified in the IBO Registration Agreement. An IBO Registration Agreement may be completed and signed in one of the following ways: (a) the applicant may complete, sign and submit an electronic version of the IBO Registration Agreement in accordance with the procedures on the Amway website; or (b) the applicant may complete, sign and return a paper version of the IBO Registration Agreement. 3.2. Acceptance or Rejection of IBO Registration Agreement: Amway reserves the right to accept or reject any IBO Registration Agreement. A registration shall be considered accepted by Amway when it receives a completed and signed IBO Registration Agreementin accordance with Rule 3.1, its contents are verified with Amway’s IBO records database, and the registration does not violate any Rule of Conduct. Pending receipt of a completed, signed IBO Registration Agreement, Amway may temporarily authorize an IBO to conduct business subject to the Rules of Conduct for up to 90 days. 3.3. Legal Entities as IBOs: IBs shall be formed initially by and in the name(s) of the individual applicant(s). After receiving an IBO number, an IBO who wishes to operate his/her IB as a corporation, limited liability company (LLC), formal partnership, limited partnership, limited liability partnership (LLP) or trust must complete the appropriate Entity Agreement for Independent Business Owners (IBOs) and submit it to Amway, which may accept or reject it. Existing IBOs as of September 2012 that are operating through a legal entity under an existing Entity Agreement approved by Amway may continue to operate under that agreement, but the IBO and entity must sign the currently applicable Entity Agreement upon request or in the event of a change in ownership or control in the entity. 3.4. Husband and Wife IBOs: If both husband and wife wish to become IBOs, they must register together as a single IB. Husbands and wives may not sponsor each other. If one spouse is already an IBO, the other spouse, upon electing to become an IBO, must join his or her spouse’s IB. An IBO will be held accountable for the actions of a spouse, whether or not the spouse is an IBO, so far as the Rules of Conduct are concerned. 3.5. Minors as Independent Business Owners: Minors who are at least 16 years of age may become IBOs only for the single purpose of merchandising products and services offered through or by Amway. A minor who desires to become an IBO must: (a) obtain a parent’s or guardian’s signature on the IBO Registration Agreement; (b) be sponsored by or added to his or her parent’s or guardian’s IB if the parent or guardian of the minor is an IBO; and (c) must not be a signatory in any IB other than a parent’s or guardian’s IB. 3.6. Term: The term of the IBO Contract shall expire at the end of each calendar year, with the exception of initial registrations accepted by Amway between September 1 and December 31, in which case such initial term shall expire at the end of the subsequent calendar year. 3.7. Annual Renewal: In order to renew the IBO Contract, an IBO must annually file a request to renew the IBO Contract, along with the required annual business renewal fee, by December 31 of the year preceding the year for which the IBO is renewing. Amway reserves the right to reject anyrenewal request, or revoke any IBO’s renewal agreement, if the IBO is not in compliance with all provisions of the IBO Contract. An annual renewal agreement may be completed and signed in one of the following ways: (a) an IBO may complete, sign and submit an electronic version of the renewal agreement and pay the required annual business fee in accordance with the procedures on the Amway website; (b) an IBO may renew and pay the required annual business fee by telephone at 1-800-253-6500; (c) an IBO may sign an automatic renewal agreement with Amway; unless they instruct Amway otherwise, IBOs who have reached the level of Silver Producer or above will be automatically renewed in order to avoid an inadvertent interruption of their business; or (d) an IBO may complete, sign and return a paper version of the Renewal Agreement (SA-469), along with the required annual business renewal fee; if sent by mail, the envelope must be postmarked by December 31. 3.8. Late Renewal: In the event that Amway accepts an IBO’s renewal agreement that was not filed in compliance with Rule 3.7, Amway is not required to restore that IBO’s sponsoring relationship(s) with downline IBOs. 3.9. IBO Contract Termination: An IBO may terminate his or her IBO Contract at any time prior to expiration by written communication to the Amway Business Conduct and Rules Department. A person who terminates his or her IBO Contract may immediately become a Customer. 3.10. Death and Inheritance: An IB can be passed on to a deceased IBO’s spouse, heirs, or other beneficiary. 3.10.1. In cases where the IB is owned jointly, such as a husband and wife or partnership, and one spouse or partner dies, unless they have previously arranged otherwise, Amway will recognize the surviving spouse or partner(s) as the owner(s) of the IB. The survivor(s) must forward a certified copy of the death certificate in order for Amway to change its records. 3.10.2. In cases where the IB is operated as an entity under Rule 3.3, and one of the owners of the entity dies, the entity will continue to operate the IB, provided the entity remains in compliance with Rule 3.3 and the successor of the deceased owner is an IBO in full compliance with the Rules. The entity shall notify Amway of the change in ownership or control of the entity by submitting the currently applicable Entity Agreement reflecting the proposed changes, and any proposed changes in the ownership or control of the entity require the express approval of Amway in writing. 3.10.3. In cases where an IBO disposes of an IB in a will, Amway will recognize the terms of the transfer, provided the beneficiary is an IBO who is in compliance with the Rules. 3.10.4. If there is no qualified IBO in a position to operate an IB due to probate or other court procedures, Amway will have the option of entering into a servicing agreement with another IBO, preferably upline in the LOS, to manage the IB until the proceedings are complete.</p>
<p style="font-size:13px;text-justify:center;">
4. Responsibilities and Obligations

4.1. Duty of Good Faith:Under the terms of the IBO Contract, Amway and all IBOs agree to perform their obligations in accordance with the duty of good faith and fair dealing. An IBO will be held accountable for the actions of a partner, family member or third party acting or purporting to act on behalf of the IBO or IB, so far as the Rules of Conduct are concerned. An IBO shall not aid and abet another IBO to violate the Rules of Conduct. IBOs shall not conduct any activity that could jeopardize the reputation of Amway or IBOs. 4.2. Cross-Group Buying or Selling: No IBO shall engage in cross-group buying or selling. Cross-group buying and selling occurs when an IBO sells products and services offered through or by Amway to another IBO he or she did not personally sponsor, except (a) as may be permitted under a servicing agreement pursuant to Rule 5.5.4 or (b) when an IBO purchases from or through his or her upline Platinum products and services offered through or by Amway. 4.3. Unsolicited Electronic Messages: No IBO shall send, transmit, or otherwise communicate any unsolicited electronic messages relating to Amway, its business opportunity, products or services to persons with whom the IBO does not have a pre-existing personal or business relationship. (This includes, but is not limited to, sending messages through newsgroups, purchased mailing lists, “safe lists,” or other lists of individuals or entities with whom or which the IBO does not have a preexisting relationship.) 4.4. Advertising: IBOs may advertise only with the express approval of Amway in writing. 4.5. Retail Establishments: An IBO who works in or owns a retail establishment must operate his or her IB separate and apart from the retail establishment. No IBO shall permit products, services or literature offered through or by Amway to be sold or displayed in retail establishments, including, but not limited to, places like schools, fairs, kiosks, vending machines, unauthorized internet websites, military stores, salons or professional offices. 4.5.1. Event Sales: The sale of authorized product categories by IBOs are permitted only at temporary (no more than 10 days) events whose themes are consistent with the products being sold, and only with the express approval of Amway in writing. To allow Amway sufficient time to grant approval, the IBO must submit a completed Event Sales Application Form to Amway 30 days prior to the event. A copy of the Event Sales Application form may be obtained at www.amway.com. 4.5.2. Display Booths: The display only (no sales) of products and approved literature by IBOs is permitted only at temporary (no more than 10 days) events, and only with the express approval of Amway in writing. To allow Amway sufficient time to grant approval, the IBO must submit a completed Display Booth Application Form to Amway 30 days prior to the event. A copy of the Display Booth Application form may be obtained at www.amway.com. 4.6. Statements About Products, Services, and the Opportunity: An IBO shall make only truthful and accurate statements about the business opportunity, products and services offered through or by Amway. IBOs shall not make any claims about products or services offered through or by Amway other than those claims found in Amway authorized literature and at www.amway.com. 4.7. Repackaging: Products offered through or by Amway are to be sold only in their original packages and in their original formulations. IBOs may not repackage products or otherwise change or alter any of the packaging, labels or materials of products offered through or by Amway. 4.8. Written Sales Receipt: An IBO who takes and/or delivers an order in person for over $25 shall deliver to the customer at the time of sale a written and dated order or receipt which shall: (a) describe the product(s) sold; (b) state the price charged; (c) give the name, address, and telephone number of the selling IBO; and (d) include Amway’s Satisfaction Guarantee. 4.9. Satisfaction Guarantee: When a Customer requests Satisfaction Guarantee service within the stated guarantee period for a product purchased directly from an IBO, the IBO shall immediately offer the individual his or her choice of: (a) a full refund; (b) an exchange for a like product; or (c) full credit toward the purchase of another product. If a product is shipped directly to the Customer by Amway, the Customer should follow the return instructions on the packing slip. In the case of IBO purchases, only those that the IBO makes for personal, family or household use may be returned under the Satisfaction Guarantee. Whenever an IBO requests Satisfaction Guarantee service within the stated guarantee period, an IBO has the choice of a: (a) full refund; (b) exchange for the same or like product; or (c) full credit toward the purchase of another product. The current Satisfaction Guarantee can be found at www.amway.com. 4.10. Buy-Back Rule: IBOs leaving the Amway business have a right to return Amway products. A departing IBO may choose to sell inventory of currently marketable Amway products to an upline IBO at a mutually agreeable price. If a departing IBO is unable to secure the buy-back of inventory through an upline IBO, Amway shall repurchase the departing IBO’s unused currently marketable Amway products subject to the following: (a) Amway will make all appropriate Performance Bonus differential and Leadership Bonus charge backs to those IBs who originally received them; and (b) Amway will charge freight costs incurred by the IBO leaving the Amway business if the net reimbursement includes same, and a service charge equal to 10% of the IBO cost of the products being returned to cover handling and processing charges. 4.11. Other Returns: An IBO who is not leaving the Amway business may ask Amway to buy back Amway products where he or she may be experiencing financial hardship or other exceptional circumstances as explained by the IBO. Return requests are reviewed on a case-by-case basis. Amway reserves the right to repurchase only unused currently marketable Amway products subject to Rule 4.9. 4.12. Seventy Percent Rule: In order for an IBO to receive Performance Bonus or recognition due on all the products purchased, an average of seventy percent of the IBO’s personal Business Volume (BV) per month must come from products sold at a commercially reasonable price; if the IBO fails to meet this requirement, then such IBO may be paid that percentage of Performance Bonus measured by the amount of products that can be shown to have been actually sold, rather than the amount of products purchased, and recognized accordingly. For purposes of this Rule, a reasonable amount of products used for personal or family consumption or given out as samples can contribute to the 70% average. 4.13. Customer Volume: In order to obtain the right to earn a Performance Bonus on downline volume during a given month, an IBO must: (a) make not less than one sale to each of 10 different Customers; or (b) have at least 50 PV of sales to any number of Customers. For purposes of obtaining the rights referred to in this Rule, sales must be to Customers who either: (a) place an order directly with Amway; or (b) place an order with the IBO that the IBO reports to Amway through a system established by Amway for tracking such sales. 4.13.1. In producing proof of such sales, the IBO is not required to disclose the prices at which he or she made the Customer sales. 4.13.2. If such an IBO fails in any month to make said Customer sales and/or to produce proof of making such sales, then he or she will be denied his or her Performance Bonus that month on downline volume. It is the obligation of the IBO to ensure compliance by the official deadlines published by Amway, in order to qualify for his or her Performance Bonus. This Rule shall apply unless the IBO is currently a qualified Platinum or above. 4.14. Compliance with Applicable Laws, Regulations, and Codes: IBOs shall comply with all laws, regulations, and codes that apply to the operation of their IB wherever said business may be conducted. IBOs shall not directly or indirectly encourage, or aid and abet any person to violate any laws, regulations, codes, or term of the IBO Contract. No IBO may operate any illegal or unlawful business enterprise, or engage or participate in any deceptive, illegal or unlawful trade practices. 4.15. IBO Relationship: IBOs are independent contractors. IBOs shall not state or imply that they are employees, agents or legal representatives of Amway, its affiliates, and/or other IBOs. IBOs shall not represent or imply, either directly or indirectly, that registration creates an employment relationship between themselves and the IBOs whom they have sponsored or who have sponsored them. 4.16. Franchises and Territories: IBOs shall not represent to anyone that there are franchises or exclusive territories available under the Plan. 4.17. Enticement to Change Position in the Line of Sponsorship: Under no circumstances shall an IBO, directly or indirectly, solicit, assist, attempt to induce, or encourage, another IBO to request a change in position in the Line of Sponsorship. 4.18. Exporting and Importing: IBOs shall not export or import products or services offered through or by Amway, or sell to others they have reason to believe will import or export such products or services, to or from the United States or its possessions or territories or any other country, regardless of whether or not Amway or its affiliates have established operations or are doing business in that country. Nothing in this Rule prohibits IBOs from personal use or resale within the Region in accordance with the IBO Contract. 4.19. Activity Outside The Region or Activity Outside The Market Where The IBO Is Registered: IBOs who engage, directly or indirectly, in any activity related to the Amway business in a jurisdiction outside of the Region must do so in a manner that complies with the letter and spirit of the applicable laws, regulations, rules, policies and procedures of the Amway affiliate in that jurisdiction, regardless of whether they are registered IBOs in that jurisdiction. Failure to do so shall be a breach of the IBO Contract. 4.20. Sound Business Practices: IBOs shall operate their IB in a financially responsible and solvent manner. Amway reserves the right to offset bonus payments for amounts an IBO owes to Amway. If an IBO or any member partner in his or her IB files a petition for bankruptcy or has bankruptcy proceedings commenced against him or her, or has any assets seized by court order or taken in execution of an unsatisfied judgment debt, the IBO must immediately inform Amway. 4.21. Fund-raising: No IBO shall use Amway products or services in conjunction with any type of fund-raising activity. Fund-raising includes the solicitation for the donation of funds or for the purchase of Amway products or services based on the representation that all, or some, of the gains, proceeds, donations, bonuses, or profits generated by such sale will benefit a particular group, organization, or cause. 4.22. IBO Plan Manipulation: IBOs shall not manipulate the Plan, point value (PV) or business volume (BV), in any way which results in the payment of bonuses or other awards and recognition that have not been earned in accordance with the terms of the IBO Contract. 4.23. Personal/Business Information Update: All IBOs are responsible for communicating any updates or changes to their personal information (e.g., name, address, email address and telephone numbers, etc.) or business information (e.g., business name, address, email address, telephone numbers, addition/deletion of partner, change of business status, etc.) to Amway. 4.24. Amway Contact: When the Rules require an IBO to contact Amway for notice, permission or approval, the IBO shall contact the Amway Business Conduct and Rules Department by mail at 7575 Fulton Street East, Ada, Michigan, 49355, by fax at 616-787-7896 or by email at BCR@amway.com. For questions or concerns please call 616-787-6712.</p>
<p style="font-size:13px;text-justify:center;">
5. Presentation of the Plan, Sponsoring and Support

5.1. Inviting:When inviting a Prospect to hear a presentation of the Plan, an IBO must make it clear that what is being described or offered is the Plan. 5.2. Describing the Plan: When describing the Plan: (a) an IBO’s statements must be truthful, accurate and not misleading; (b) the roles of a balanced business (retail sales, personal use and sponsoring) must be accurately described; and (c) all income representations must be limited to income from the Plan, based on actual experience or from Amway-authorized materials, and provide realistic income potential. 5.3. Required Disclosures: In seeking participation of a Prospect in the Plan, an IBO: 5.3.1. Must give each Prospect a copy of a brochure authorized by Amway for use with Prospects that contains the average profits, earnings, and sales figures and percentages as published by Amway, and orally inform the Prospect that the brochure contains the average profits, earnings, and sales figures and percentages as published by Amway. 5.3.2. Must use only Amway-authorized materials or Business Support Materials authorized for use with Prospects under Rule 7 (Business Support Materials). 5.4. Prohibited Sponsoring Practices: In seeking participation of a Prospect in the Plan, an IBO: 5.4.1. Must not cite lifestyle examples, e.g., travel, automobile, homes of successful IBOs, and contributions to charitable causes, unless such benefits were actually accrued as the result of building a successful IB. 5.4.2. Must not say or imply that a successful IB can be built in the form of a wholesale buying club. 5.4.3. Must not say or imply that there is no requirement for the retail sale or marketing of products by IBOs. 5.4.4. Must not promote potential tax benefits of the Plan. 5.4.5. Must not encourage or require a Prospect to purchase anything not included with the Business Services and Support fee specified in the IBO Registration Agreement and must not encourage the purchase of a product or service not identified on the IBO Registration Agreement. The only requirements which an IBO can impose upon a Prospect whom he or she is willing to register is that the Prospect shall pay the Business Services and Support fee and sign a completed IBO Registration Agreement and submit it to Amway. 5.4.6. Must not register or sponsor new IBOs in a way that manipulates the new IBO’s position in the LOS. 5.5. Sponsor’s Responsibilities: A sponsor must comply with the following obligations: 5.5.1. Rules Compliance: The sponsor must be an IBO in full compliance with the Rules of Conduct. 5.5.2. Access to the IBO Contract: The sponsor must ensure that all IBOs whom he or she sponsors have access to and the opportunity to read the IBO Contract. 5.5.3. Training and Motivation: The sponsor must be able to train and motivate the IBOs whom he or she has sponsored with a minimum of assistance from his or her first upline Platinum or above. IBOs may fulfill this obligation by use of Business Support Materials approved under Rule 7. 5.5.4. Servicing Arrangements: If an IBO is unable or unwilling to service IBOs whom he or she has sponsored with the proper training or motivation, he or she must make arrangements, in writing, with his or her first upline qualified Platinum to provide this service. Platinum level or above IBOs who wish to make arrangements with another Platinum level or above IBO to provide product fulfillment services to IBOs downline to the next qualified Platinum, must do so in writing. In either case, he or she must be willing to compensate for these services, and full PV/BV for products purchased must always be transferred to the serviced IBO so that bonuses are paid correctly. 5.5.5. Distribution of Performance Bonuses: Some IBOs receive a Performance Bonus from Amway, a part of which may be payable to downline IBOs. The IBO cannot retain any portion which may be payable to a downline IBO, even where the downline IBO owes a private debt to the upline IBO, unless there is a written agreement between the parties permitting such retention. Even with such a written agreement, the upline IBO may retain only the net portion of the Performance Bonus due that IBO, and not any portion that may be payable to other downline IBOs. 5.6. Platinum Responsibilities: IBOs who qualify as a Platinum or above have the following additional responsibilities: 5.6.1. Conduct or provide access to periodic sales meetings for the purpose of training and inspiring IBOs downline to the next qualified Platinum and maintain frequent contact with all of them. 5.6.2. Assure compliance with the Rules of Conduct by IBOs downline to the next qualified Platinum. 5.7. Prohibited Support Practices: Sponsors and upline IBOs shall not encourage or require downline IBOs, as a condition of receiving assistance in building their IB after registration, to (a) purchase any specified amount of Amway or non-Amway products or services, or (b) maintain a specified inventory of Amway or non-Amway products or services.</p>
<p style="font-size:13px;text-justify:center;">
6. Preservation of the Line of Sponsorship

6.1. Confidentiality of the LOS:Amway protects the LOS and LOS Information for the benefit of Amway and of all IBOs. Amway keeps LOS Information proprietary and confidential and treats it as a trade secret. Amway is the exclusive owner of all LOS Information, which is derived, compiled, configured, and maintained through the expenditure of considerable time, effort, and resources by Amway and its IBOs. IBOs can use Amway’s goodwill and LOS Information only for the purposes permitted under the IBO Contract.</p>
</div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid footer">
            <div class="row">
                <div class="col-lg-4 of">
                    <img src="img/logo.png" alt="" width="200" height="100" class="img-fluid">
                    <p>One of the world's largest direct selling business.</p>
                </div>
                <div class="col-lg-4 sf">
                    <h6 style="color: #d63031;">Links</h6>
                    <ul>
                        <li>Services</li>
                        <li>How it Works</li>
                        <li>Pricing</li>
                        <li>Contact</li>
                    </ul>
                    <div class="text-center cws">
                        <h6 style="color: #d63031;">Connect with us</h6>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" style="color: darkblue;"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram" style="color: deeppink;"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" style="color: deepskyblue;"></i></a></li>
                            <li><a href=""><i class="fa fa-google" style="color: red;"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p style="color: #d63031;">Subscribe Us</p>
                    <form action="">
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-circle"></i></span></div>
                                <input type="text" name="" class="form-control" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                <input type="email" name="" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-danger">Subscribe ></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-3">
                <h6 class="text-center" style="font-size: 15px;font-family: sans-serif;">All copyrights reserved © 2018 - Designed & Developed by <a href="http://www.teckscape.com" target="_blank">Teckscape</a></h6>

            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>