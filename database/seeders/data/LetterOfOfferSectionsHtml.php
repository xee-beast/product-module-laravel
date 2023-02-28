<?php

return [
  'greeting' => '<h2 ><span>Letter of Offer/Student Agreement</span></h2>
<p><span>{{date.current}}</span></p>
<p><strong><span> Dear {{student.first_name}} {{student.last_name}}</span></strong></span></p>
<p><span>Thank you for your application to Imagine Education Australia (IEA). I am pleased to advise you that your Application for Enrolment has been approved and to offer you a place in the following program.</span></p>

<div>
<table>
    <tbody>
    <tr>
        <td valign="top" style="width: 20%;">
            <strong>Student Name</strong>
        </td>

        <td valign="top">
            <span>{{student.first_name}} {{student.last_name}} (ID Number: {{student.id}}</span>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <strong>Date of Birth</strong>
        </td>
        <td  valign="top">
            <span>{{student.dob}}</span>
        </td>
    </tr>
    <tr>
        <td  valign="top">
            <strong>Orientation Date</strong>
        </td>
        <td  valign="top">
           <span>{{offer.orientation_date}}</span>
        </td>
    </tr>

    <tr>
        <td colspan="2" valign="top">
            <strong>Program(s)</strong>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            {{offer.programs}}
        </td>
    </tr>



    <tr>
        <td  valign="top">
           <strong>Arrival in Australia</strong>
        </td>
        <td  valign="top">
           <span>1 week prior to course commencement</span>
        </td>
    </tr>
    <tr>
        <td  valign="top">
            <strong>Holidays</strong>
        </td>
        <td  valign="top">
            <span>If this offer contains more than one (1) course, a six (6) week break has been placed between each, unless requested otherwise.</span>
        </td>
    </tr>
    <tr>
        <td  valign="top">
            <strong><span>Orientation/Study Location</span></strong>
        </td>
        <td  valign="top">
            <span >{{offer.orientation_address}}</span>
        </td>
    </tr>
    <tr>
        <td  valign="top">

        </td>
        <td  valign="top">
            <p><span>Courses in Child care, Aged care and Cookery include a work based learning placement as part of the qualification. Refer to your course on our website for further details&nbsp;</span><span><a href="http://www.imagineeducation.com.au/"><span style=" color: #0563c1;">www.imagineeducation.com.au</span></a></span></p>
        </td>
    </tr>
    </tbody>
</table>
</div>


<p><strong><span>Total program cost (in AUD) is listed on the student invoice page and is payable in advance by instalments.</span></strong></p>
<p><span>If you are currently studying or enrolled at another school, and have had CoEs issued, then a release from your previous Provider is required.</span></p>
<p><span>Students who wish to commence studies in a VET course may be asked to undertake an English language test to determine their English language proficiency is sufficient to study at VET level.</span></p>
<p><span>All applicants to Vocational program must meet the minimum English entry requirement of:<br /><strong>IELTS Overall Band Score of 5.5 or equivalent, with no single band below 5</strong>.</span></p>
<p><span>Students will be advised if they require more English prior to commencement of their VET course.<br />Please make sure you have read and understood the enrolment conditions on your Dept of Home Affairs (DHA) student visa and what is expected of you when you study in Australia, using this visa.</span></p>
<p><span>Also, we ask that before you sign the Student Agreement to study at Imagine Education Australia, you visit our website at&nbsp;</span><span><a href="http://www.imagineeducation.com.au/"><span style=" color: blue;">http://www.imagineeducation.com.au&nbsp;</span></a></span><span>and access our online Student Handbook. More pre-enrolment information about Imagine Education is attached and all this should be read and understood prior to paying your tuition fees.</span></p>
<p><span>We at Imagine are here to assist you in achieving your goals and we hope your time with us is both beneficial and enjoyable. If you have any questions please do not hesitate to contact us on: +61755520900 or email us at&nbsp;</span><u><span style=" color: blue;">admissions@imagineeducation.com.au</span></u></p>
<p><span>Now please carefully read the steps you must take to complete your enrolment on the following pages.</span></p>
<p><span>Yours sincerely,</span></p>
<p><span><img src="data:image/png;base64,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" width="133" height="37" /></span></p>
<p><span>William C. Adler</span> <br />
    <span>Principal Executive Officer</span> <br/>
    <span>Imagine Education Australia Pty Ltd</span>
</p>

<p><span><strong>PLEASE NOTE:</strong>&nbsp;This offer supersedes any previous offers made by, or on behalf of Imagine Education Australia. The offer does not guarantee your enrolment until you accept the offer, payment has been made and a Confirmation of Offer (CoE) is issued. To accept this offer and receive your visa documentation you must complete the following steps:</span></p>
<h3><strong><span>Steps you must take to complete your Enrolment:</span></strong></h3>
<p><strong><span>Step 1:</span></strong><span> </span><span>Complete and return your international student Application for Enrolment form (done).</span></p>
<p><strong><span>Step 2:</span></strong><span> </span><span>You will receive a Letter of Offer with a written agreement (done).</span></p>
<p><strong><span>Step 3:</span></strong><span> </span><span>Read this letter of offer thoroughly, <strong>sign </strong>and <strong>return </strong>your &ldquo;<em>Acceptance of Offer and<br />Acknowledgement</em>&rdquo; page <u>and keep a copy for yourself</u>. <strong>If we do not receive the original of this<br />signed page, your enrolment cannot proceed. </strong><u>Note:</u> Offers for students under 18 years of age must be signed by their parent or legal guardian.</span></p>
<p><strong><span>Step 4:</span></strong><span> </span><span>You will receive an <strong>Invoice </strong>for fees payable from Imagine Education.</span></p>
<p><strong><span>Step 5:</span></strong><span> </span><strong><span>Pay Tuition Fees</span></strong><span> as shown on the invoice, including Overseas Student Health Cover fees. Students must keep receipts for any payments for tuition fees or non tuition fees.</span></p>
<p><strong><span>Step 6:</span></strong><span> </span><span>You will receive a <strong>Confirmation of Enrolment (CoE)</strong> from Imagine Education</span></p>
<p><strong><span>Step 7:</span></strong><span> </span><span>Take the CoE to the nearest Australian Embassy or Consulate, (or apply online if available in your country), for your Australian Student Visa.</span></p>
',

'orientation_detail' => '<h3 style="text-align: center;">PLEASE READ THE IMPORTANT INFORMATION BELOW</h3>
<p>
    <strong><span>ON YOUR FIRST DAY</span></strong><br/>
    <span>(Before you can start classes you must attend an orientation session)</span>
</p>
<p><strong><u><span>Orientation day for all courses</span></u></strong></p>
<p><strong><span>DAY:</span></strong><span>&nbsp;The first Monday of your course (unless it is a public holiday)</span></p>
<p><strong><span>ARRIVE:</span></strong><span>&nbsp;8:00am - 8:30am</span></p>
<p><strong><span>START:</span></strong><span>&nbsp;9:00am</span></p>
<p><strong><span>WHERE:</span></strong><span> {{offer.orientation_address}}</span><br /><span>Phone: +617 5552 0900, Email: info@imagineeducation.com.au</span></p>
<p><strong><span>BRING:</span></strong><br/>
    <span>Passport, pen, contact details in Australia (including an emergency contact person in Australia)</span>
</p>
<p><strong><span>Note:&nbsp;</span></strong><span>At orientation all new students must provide Imagine Education with details of who to contact in emergency situations by competing the &ldquo;Contact details for New students&rdquo; form</span></p>
<p><strong><span>YOUR TIMETABLE:&nbsp;</span></strong><u><span>Your class days may not be a Monday. You will be advised of your class timetable in your orientation. A sample timetable can be downloaded from the course pages on our website.</span></u></p>
<p><strong><span style=" color: red;">Attendance at the College for this orientation session is compulsory. It is important that you come on time as orientation starts at 9:00am sharp.</span></strong></p>
',

'student_invoice' => '<h3  style="  text-align: center;" "><strong><u><span>Student Invoice</span></u></strong></h3>
<p>
    <strong><span>Offer Number:</span></strong> <span> {{offer.number}}</span><br/>
    <strong><span>Date:</span></strong> <span>{{date.current}}</span><br/>
    <strong><span>Agent name:</span></strong> <span>{{agent.name}}</span><br/>
    <strong><span>Agent address:</span></strong> <span>{{agent.address}}</span><br/>
    <strong><span>Student name:</span></strong> <span>{{student.first_name}}&nbsp;{{student.last_name}}</span><br/>
    <strong><span>Student number:</span></strong> <span>{{student.id}}</span><span>&nbsp;</span><span><i>(please quote student number when remitting payment)</i></span><br/>
    <strong><span>Date of birth:</span></strong> <span>{{student.dob}}</span>
</p>

<div>{{offer.fees}}</div>
',

'deposit_details' => '<h3><strong><u><span>Deposit required to receive eCoE</span></u></strong></h3>
<div>{{offer.deposit}}</div>
<div style="text-align: right; margin-top:10px;">See complete payment schedule on the following page</div>
',

'payment_schedule' => '<h3 ><strong><u><span>Payment Schedule &ndash; Student Invoice {{offer.number}}</span></u></strong></h3>
<div>{{offer.instalments}}</div>
',

'payment_information' => '<p><span>Any unforeseen shortfalls due to bank transfer fees will be payable on orientation.</span></p>

<p><strong><u><span>How to pay:</span></u></strong></p>
<p><strong><span>Preferred payment method:</span></strong></p>
<p>
    <strong><span>BANK TRANSFER</span></strong><br/>
    <span>Banking details:</span><br/>
    <span>Bank Name: Westpac</span><br/>
    <span>Branch: 19 Scarborough Street Southport QLD 4215</span><br/>
    <span>Branch Number (BSB): 034-215</span><br/>
    <span>Account Number: 504201</span><br/>
    <span>Swift Number: WPACAU2S</span><br/>
    <span>Account Name: Imagine Education Australia Pty Ltd</span><br/>
<span>Transfer Description: Your Full Name and DOB or Student ID number</span>
</p>

<p><span>Please indicate your preferred method of payment:</span></p>
<p>
    [ ] Payment Upfront
</p>
<p>
    [ ] Monthly Payment Plan*
</p>

<p><span>Alternative arrangements may be made on application at orientation.</span></p>
<p><strong><span>*Ongoing Monthly payments &ndash; Payment Plan: EZIDEBIT</span></strong></p>
<p><span>Your ongoing payments or payment plan will be automatically deducted via Ezidebit Direct Debit facility. You will receive an email containing a link to sign up to Ezidebit and enter your preferred payment method prior to Orientation Day.
</span></p>

<p><span>Ezidebit Fees and charges (subject to change by Ezidebit from time to time):</span></p>

<p><span>Where a payment is returned by your financial institution as unpaid, a failed payment fee is payable by you to Ezidebit <strong>for each failed payment.</strong></span></p>

<table style="border: none;" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr >
    <td style="width: 25%;">
        <span>Administration Fee (once only) up to:</span>
    </td>
    <td style="width: 25%;">
        <span>Sign up with Bank Account - Fee per Transaction</span>
    </td>
    <td style="width: 25%;">
        <span>Sign up with Mastercard/Visa &ndash; Fee per Transaction</span>
    </td>
    <td>
        <span>Failed Payment Fee for each Failed Payment</span>
    </td>
</tr>
<tr>
<td style="" >
<p  style="text-align: center;" ><strong><span>$5.50</span></strong></p>
</td>
<td style="" >
<p  style="   text-align: center;"><strong><span>$1.42</span></strong></p>
</td>
<td style="">
<p  style=" text-align: center;"><strong><span>2.7% (min $1.06)</span></strong></p>
</td>
<td style="">
<p  style="text-align: center;" ><strong><span>$21.90</span></strong></p>
</td>
</tr>
</tbody>
</table>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>All Fees and charges advertised by Imagine Education Australia are current at the time of printing and may be varied at any time by Imagine Education Australia.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Non-Payment of Fees is a breach of the Code of Conduct and will result in the cancellation of the CoE.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Other Administration fees and charges which student may incur </span><span><a style="color: #0563c1;" href="http://www.imagineeducation.com.au/documents/pricesandapply"><span style=" color: black;">are listed below</span></a></span><span>.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Other Administration fees and charges which student may incur </span><span>Students may choose to pay more than 50 per cent of their tuition fees before their course commences. </span></p>

<table>
<tbody>
<tr>
<td style=" " colspan="2">
<strong><span>Other ADMINISTRATION fees and charges</span></strong>
</td>
</tr>
<tr>
<td style="width:60%">
<strong><span>Service Type</span></strong>
</td>
<td>
<strong><span>Fee</span></strong>
</td>
</tr>
<tr>
<td>
<span>Enrolment fee (non-refundable)</span>
</td>
<td>
<span>$250</span>
</td>
</tr>
<tr>
<td>
<span>Re-enrolment fee (non-refundable)</span>
</td>
<td>
<span>$250</span>
</td>
</tr>
<tr>
<td>
<span>Materials fee</span>
</td>
<td>
<span>$75</span>
</td>
</tr>
<tr>
<td>
<span>Guardianship Placement Inspection Fee</span>
</td>
<td>
<span>$150</span>
</td>
</tr>
<tr>
<td>
<span>Change of enrolments including:</span>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><span style=" ">&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Change of Date</span></p>
<p style="margin: 0cm 0cm 0.0001pt 36pt; "><span style=" ">&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Change of Session</span></p>
<p style="margin: 0cm 0cm 0.0001pt 36pt; "><span style=" ">&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Suspension</span></p>
<p style="margin: 0cm 0cm 0.0001pt 36pt; "><span style=" ">&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Change of Course</span></p>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><span style=" ">&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Change of Payment Plan</span></p>
</td>
<td>
<span>$75</span>
</td>
</tr>
<tr>
<td>
<span>Late payment fee</span>
</td>
<td>
<span>$100</span>
</td>
</tr>
<tr>
<td>
<span>Payment plan Instalment fee</span>
</td>
<td>
<span>$10 (per instalment)</span>
</td>
</tr>
<tr>
<td>
<span>ID card replacement fee (Non-Refundable)</span>
</td>
<td>
<span>$50</span>
</td>
</tr>
<tr>
<td>
<span>Replacement of:<br />Transcript, Statement of Attainment, or Certificate</span>
</td>
<td>
<p><span>$75 each</span></p>
</td>
</tr>
</tbody>
</table>',

'student_agreement' => '<p><strong><span>Acceptance of Offer and Acknowledgement</span></strong></p>

<p><span>As an applicant for enrolment into Imagine Education&rsquo;s courses, I hereby accept this offer of place and agree to abide by the following:</span></p>
<ul>
<li  style="  text-align: left;"><span ><span >&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span>I have read and understood Imagine Education&rsquo;s Refund Policy, Complaints and Appeals Policy and the Student Code of Conduct and understand what is required of me in this respect. I have also read and understood other pre-enrolment information supplied to me and agree to abide by the rules of the College.</span></li>
<li  style="  text-align: left;"><span ><span ><span>&nbsp;</span><span>&nbsp;</span>&nbsp; &nbsp; &nbsp; </span></span><span>I understand that Vocational Education courses and some English language Courses require a pre-requisite level of English for entry.</span></li>
<li  style="text-indent: -18pt; text-align: left;"><span><span ><span >&nbsp;&nbsp;</span></span>&nbsp; &nbsp;</span><span>I understand that I will be formally assessed and tested by the College during the progress of my course. I also understand that if I hold an Australian Student Visa, I will be required to demonstrate satisfactory progress throughout my course under the terms and conditions of my visa.</span></li>
<li  style="text-indent: -18pt; text-align: left;"><span><span ><span >&nbsp;</span></span> &nbsp; &nbsp;</span><span>I understand that on arrival and during my course, the College has a duty to check that my visa details are correct and may need to notify any changes to the Australian Immigration Department if necessary.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;</span></span>&nbsp; &nbsp; </span><span>I understand that if I hold an Australian Student Visa, I must maintain at least 80% attendance during my ELICOS course. I also understand that the College has a duty to report me to the Immigration authorities if my attendance is less than 80% at any time during my ELICOS course.</span></li>
<li  style="  text-indent: -17.85pt; text-align: left;"><span ><span >&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span>I understand that if I hold an Australian Student Visa, I cannot transfer to another registered provider for at least six months after the commencement of my <strong>Principal Course of Study</strong>, without the written permission of Imagine Education.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;</span></span> &nbsp; &nbsp;</span><span>I understand that a full week&rsquo;s tuition is payable in a week that contains public holidays.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;</span></span> &nbsp; &nbsp;</span><span>I have been made aware of the full cost of my course and approximate costs of living in Australia and I am able to meet these costs.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;</span></span> &nbsp; &nbsp;</span><span>I undertake to notify the College within 7 days of any changes to my address or telephone contact details in Australia (Immigration requirement for Australian Student Visa holders.)</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp; </span></span>&nbsp; &nbsp;</span><span>I understand that any school-age children who accompany me to Australia will be required to enrol in an Australian private or government school and pay full tuition fees.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;</span></span> &nbsp; &nbsp;</span><span>I understand that the College is required to share personal information about its students with the Australian Government and other Government Authorities, including the ESOS Assurance Fund Manager.</span></li>
<li  style="  text-indent: -17.85pt; text-align: left;"><span ><span >&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span>I understand that I have the right to appeal any decision of the College under the terms and conditions of the College&rsquo;s Complaints and Appeals resolution Policy. I also understand that this agreement and the availability of complaints and appeals processes does not remove the right of students to take action under Australia&rsquo;s Consumer Protection Laws.</span></li>
<li  style="text-indent: -17.85pt; text-align: left;"><span><span ><span >&nbsp;&nbsp;</span></span> &nbsp; </span><span>I accept the payment plan where applicable.</span></li>
<li  style="  text-indent: -17.85pt; text-align: left;"><span ><span >&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span>I understand that while every effort will be made to accommodate my preferred start date, the exact start date will be confirmed at my orientation. I understand that my orientation date is deemed to be the commencement of my enrolment at Imagine Education Australia.</span></li>
<li  style="  text-indent: -17.85pt; text-align: left;"><span ><span >&nbsp; &nbsp; &nbsp; &nbsp; </span></span><span>From 1 January 2015, Imagine Education can be prevented from issuing you with a nationally recognised VET qualification or statement of attainment when you complete your course if you do not have a Unique Student Identifier (USI).&nbsp; If you have not yet obtained a USI you can apply for it directly at http://www.usi.gov.au/create-your-USI/.<br />&nbsp;<br />If you would like Imagine Education to apply for a USI on your behalf you must authorise us to do so and declare that you have read the privacy information </span><span><a style="color: blue;" href="https://www.usi.gov.au/system/files/documents/usi_privacy_notice_0.docx"><span>https://www.usi.gov.au/system/files/documents/usi_privacy_notice_0.docx</span></a></span></li>
</ul>



<p><strong><em><span>I have read and understood the policies, terms and conditions of enrolment and agree to abide by these terms and conditions and accept the College&rsquo;s rules and policies.</span></em></strong></p>

<p><strong><em><span>*Signed ___________________________ &nbsp; Date ___/___/___&nbsp; <br/>
&nbsp;&nbsp; Print Name ____________________________________
</span></em></strong></p>
<br/>

<p  style="margin: 6pt 0cm 0.0001pt;  "><strong><em><span>StudyOffer: {{offer.number}} &nbsp;&nbsp;&nbsp;   ID Number: </span></em></strong><span>{{student.id}}</span></p>

<p><strong><em><span>*Parent or Legal Guardian&rsquo;s signature if the Student is under 18 Years of Age.</span></em></strong></p>

<p><strong><span>International Students only:</span></strong></p>
<p><span>Will you be lodging your Visa application in Australia?&nbsp; </span><span> [&nbsp;] </span><span> YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span> [&nbsp;] </span><span> NO</span></p>

<p  style="margin: 0cm 0cm 6pt;  "><strong><span>For VET Program Students only:</span></strong></p>
<p  style="margin: 0cm 0cm 6pt;  "><span>Would you like Imagine Education to apply for a USI on your behalf? </span><span> [&nbsp;] </span><span> YES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span> [&nbsp;] </span><span> NO</span></p>

<p  style="   text-align: center;" align="center"><strong><em><span style=" color: red;">Please read the below terms and conditions, sign above to show that you agree with each point.</span></em></strong></p>
<p>&nbsp;</p>

<p>&nbsp;</p>
',

'refund_policy' => '<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><strong><span style=" ">A.<span >&nbsp;&nbsp; </span></span></strong><strong><u><span>Imagine Education Australia - Refund Policy</span></u></strong></p>
<p><strong><span>An enrolment is defined as a course or courses of study commenced by a student at Imagine Education Australia. The enrolment date is the date of commencement of the student&rsquo;s first course at Imagine.</span></strong></p>
<p  style="margin: 0cm 0cm 0.0001pt 54pt;  text-indent: -36pt;"><em><span>(i)<span style="font-style: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></em><span>in the case where a student is enrolled in a single course, the allocated starting date for that course, as set out in the letter of offer to the student;</span></p>
<p  style="margin: 0cm 0cm 0.0001pt 54pt;  text-indent: -36pt;"><em><span>(ii)<span style="font-style: normal; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></em><span>in the case where a student is enrolled in a package of courses at any given time, the allocated starting date for the first course in that package of courses, as set out in the letter of offer to the student</span></p>

<br/>
<p  style="margin: 0cm 0cm 0.0001pt 36pt;">
    <strong><span>1.</span></strong><strong><span>Full Refund of Tuition Fees if Visa is refused by Immigration Prior to Date of Commencement:</span></strong> <br/>
    <span>A full refund of tuition fees will be made where a student&rsquo;s visa application is refused by Immigration Department and the student has not commenced their course. In this case, written proof of refusal must accompany the request for refund. The Enrolment Fee will not be refunded, nor will the Homestay Arrangement Fee if homestay has already been arranged. Homestay accommodation and airport greeting fees will be refunded in full. The refund will be made within 28 days of receipt of the notification (with proof).</span>
</p>
<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>2.</span></strong> <strong><span>Unused Tuition fees refund if Visa is refused by Immigration after Date of Commencement:</span></strong><br/>
    <span>A full refund of unused tuition fees will be made where a student&rsquo;s visa application is refused by Immigration Department. Imagine Education Australia will calculate this fee by using the legislative instrument under subsection of 47(E) (4) of the ESOS Act. In this case, written proof of refusal must accompany the request for refund. The Enrolment Fee will not be refunded, nor will the Homestay Arrangement Fee if homestay has already been arranged. Unused Homestay accommodation will be refunded in full. The refund will be made within 28 days of receipt of the notification (with proof).</span>
</p>
<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>3.</span></strong><strong><span>Student Defers Course prior to the Date of Course Commencement:</span></strong><br/>
    <span>Students must start their course on their allocated starting date except in exceptional circumstances.&nbsp; Students who wish to defer their course start date must give at least one week&rsquo;s written notice. If less than one week&rsquo;s notice is given, Imagine will charge the student one week&rsquo;s tuition fee. Students who do not arrive on the designated start date and have not given notice, will automatically be charged one week&rsquo;s tuition fee.</span> <br/>
    <span>Students who do not commence on their designated start date, are cancelled and then wish to re-enrol will be charged a re-enrolment fee of $250 and also will be charged course fees as per the current course fee schedule. Any previous discount will not be applied.</span>
    <span>Students who submit an application to defer their start date and then withdraw from the course, there will be no refund.</span>
</p>
<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt; "><strong><span>4.<span >&nbsp;&nbsp;&nbsp; </span></span></strong><strong><span>Student Cancels an Enrolment prior to the Date of Commencement:</span></strong></p>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ><span>Where a student cancels his/her enrolment prior to the date of commencement, the following policy will apply:</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 72pt;  text-indent: -36pt;"><span>i.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Written notice at least 4 weeks prior to the Date of Commencement on the Imagine Education withdrawal form - Full Refund of Tuition fees.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 72pt;  text-indent: -36pt;"><span>ii.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Written notice less than four weeks prior to the Date of Commencement on the Imagine Education withdrawal form - Cancellation charge equal to 4 weeks tuition applies.</span></p>

<br/>
<p><span>Enrolment Fee and Homestay Arrangement Fees will not be refunded if course is cancelled.&nbsp; The balance of Tuition Fees, plus any homestay accommodation and Airport Greeting fee paid in advance will be refunded within 28 days of the written request.</span></p>
<p><span>For the avoidance of doubt, except in the case of compassionate or compelling circumstances (in Imagine Education Australia&rsquo;s discretion), in the case where a student is enrolled in a package of courses, no refund of any kind (including without limitation deposits or fees paid in connection subsequent courses in the package of courses) will be given where a student withdraws or cancels their enrolment without giving at least 4 weeks&rsquo; written notice prior to the Date of Commencement.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>5.</span></strong> <strong><span>Cancellations/Withdrawals after the Date of Commencement:</span></strong> <br/>
    <span>No refunds of any kind will be made after the date of commencement, unless the participant has a legitimate complaint against the College that can be substantiated under the Consumer Protection Laws of the Commonwealth of Australia, or the State of Queensland. If students on a payment plan withdraw once their enrolment has commenced, they will be liable for all tuition fees due as per signed payment plan agreement. If students on a payment plan withdraw once their enrolment has commenced, they will be liable to pay for the uniform and kit fee in full, as per the letter of offer.</span>
</p>
<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>6.</span></strong><strong><span> Transfers of Course fees between courses at Imagine:</span></strong><br/>
    <span>Course funds are transferable to other courses within Imagine Education at the discretion of the Principal. Imagine Education Australia will use the legislative instrument under subsection of 47(E)(4) of the ESOS act to determine fees transferable.</span>
</p>
<br/>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><strong><span>7.<span >&nbsp;&nbsp;&nbsp; </span></span></strong><strong><span>Homestay Accommodation Cancellation.</span></strong></p>

<p  style="margin: 0cm 0cm 0.0001pt 70.9pt;  text-indent: -35.45pt;"><span>i.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><strong><span>Before Student arrives in Australia: </span></strong><span>If 4 weeks written notice is given&nbsp;&nbsp; &ndash;&nbsp;&nbsp; full refund.&nbsp; Less than 4 weeks&rsquo; notice &ndash; a cancellation charge equal to 2 weeks rent will apply.&nbsp; No refund of Homestay placement fee if homestay has already been booked.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 70.9pt;  text-indent: -35.45pt;"><span>ii.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><strong><span>After Course commencement:&nbsp; </span></strong><span>- at least 2 weeks&rsquo; notice must be given, or a cancellation charge equal to 2 weeks rent will apply.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><strong><span>8.</span></strong> <strong><span>Airport Greeting Fee Cancellation:</span></strong> <br/>
    <span>No refund of Airport Greeting fee if student fails to notify Imagine Education of their flight details, or makes any change to details 48 hours prior to their scheduled arrival time.</span>
</p>

<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>9.</span></strong><strong><span>Course Cancelled due to Student Misbehaviour or non-observance of Government Regulations:</span></strong><br/>
    <span>If a student is dismissed from a program for unsatisfactory attendance or behaviour, or the student&rsquo;s studies are terminated as a result of a breach of Government (visa etc) regulations, no refund of fees will be made.</span>
</p>

<br/>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>10.</span></strong><strong><span>Exceptional Circumstances: Deferment of a Course of Study for an Existing Student:</span></strong> <br/>
    <span>Where a student is unable to continue his or her studies for reasons deemed by the College to be to be &ldquo;exceptional circumstances,&rdquo; (eg. illness or death of a close relative, backed up by documentary proof), the student will not be entitled to a refund but may apply for a deferment. Course deferments can be scheduled for any date in the future so that students are able to resume their studies at a time convenient to them.</span>
</p>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
<strong>Note:</strong>
</p>
<p  style="margin: 0cm 0cm 0.0001pt 72pt;  text-indent: -36pt;"><span>iii.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Course deferments cannot be converted to cash refunds under any circumstances.</span></p>
<p  style="margin: 0cm 0cm 0.0001pt 72pt;  text-indent: -36pt;"><span>iv.<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>The College does not offer a deferment, or transfer pre-paid fees to another person.</span></p>

<br/>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>11.</span></strong><strong><span>Requests for a Refund:</span></strong> <br/>
    <span>Requests for refund should be made in writing and forwarded to Student Services. An acknowledgement of the request will be sent immediately to the email address nominated in the request, or the last known address held on file for that student.&nbsp; If the refund request is approved, payment will be made either in the form of a cheque made out in Australian dollars (AUD) to the enrolled Student, or by overseas transfer. If the payment was made by credit card the payment will be refunded to the credit card payment was made. The refund will be paid directly to the person who entered into the contract with the College, unless that person gives a written direction to the College to pay someone else except in the case of credit card refunds. Refund cheques will be posted to the nominated address, or made available for collection from Administration. All refunds will be processed and paid within four (4) weeks (28 days) of the receipt of the written request.&nbsp; Note: If the refund payment requires an international bank transfer, a $40 transfer fee will apply.</span>
</p>

<br/>
<p style="margin: 0cm 0cm 0.0001pt 36pt;">
    <strong><span>12.</span></strong><strong><span>Corporate Clients:</span></strong><br/>
    <span>Where a Corporate Client has enrolled a student to study as part of their employment, no refund of fees will be granted where a student leaves his/her employment and/or does not complete, or fails to attend the course.</span>
</p>
<br/>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>13.</span></strong><strong><span>Rights of International Students in Refund Disputes:</span></strong> <br/>
    <span>In the case of a dispute over a refund, international students may access the College&rsquo;s Disputes and Appeals process and nominate a support person to accompany them at any stage of the dispute resolution process. If necessary, the College can also arrange an external mediator to help settle the dispute. This agreement and the availability of complaints and appeals processes, does not remove the right of the student to take action under Australia&rsquo;s consumer protection laws.</span>
</p>
<br/>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>14.</span></strong><strong><span>Provider Default:</span></strong><br/>
    <span>In the unlikely event of Imagine Education not being able to provide a course for an enrolled student, all fees, including the Enrolment Fee, Airport Greeting Fee and Homestay Arrangement fee as determined by the legislative instrument under subsection of 47 (E) (4) ESOS Act will be refunded to the student within 14 days.</span><span><br style="break-before: page;" clear="all" /></span>
</p>
<br/>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>15.</span></strong><strong><span>Payments to Agents Representing the College:</span></strong><br/>
    <span>The college cannot be responsible for the refund of any consultation etc. payments made by the student to Education or Travel Agents. This is a separate contract between the student and the Agent.</span> <br/><br/>
    <span>Payments made by credit card will only be refunded to the same credit card. The student / agent is responsible for providing payment details. Under no circumstances is Imagine Education Australia refunding a bank account when payment was made using a credit card.</span><br/><br/>
    <span>Notwithstanding any other provision of this policy, refunds shall at all times be subject to the governing provisions of the Education Services for Overseas Students Act 2000 (Cth) and Education Services for Overseas Students (Calculation of Refund) Specification 2014 (Cth) as amended.</span>
</p>

<br/><br/>
<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span style=" ">B.<span >&nbsp;&nbsp; </span></span></strong><strong><u><span>Imagine Education Australia &ndash; Student Complaints and Appeals Policy</span></u></strong>
</p>
<br/>
<p>
    <span>Imagine Education has a fair and just grievance resolution policy designed to settle any disputes with students.</span><br/>
    <span>The procedures for grievance resolution shown below, are circulated as part of the Orientation handout on a students&rsquo; first day and posted on classroom notice boards and other notice boards around the school.</span>
</p>

<br/>
<p  style="text-indent: 18pt;"><strong><span>STUDENT GRIEVANCE RESOLUTION PROCESS</span></strong></p>

<p>
    <span>At<strong> Imagine Education Australia</strong>, we always try to give you top quality teaching and personal care. If you are not happy with any aspect of your course, or the care you are receiving, we want to know. Don&rsquo;t worry if your English is not so good. We will give you every help with your enquiry.</span>
</p>
<p><span>Imagine Education Australia normally resolves matters within 7 to 14 days which falls within the 60 day period mandated by the Standards for Registered Training Providers (RTOs) 2015, Standard 6 Clause 6.4</span></p>

<p><strong><span>What to do if you have a problem:</span></strong></p>
<p><strong><span></span></strong><span>If you have a problem (grievance) about the College, or any aspect of your course, or the accommodation that the College has arranged for you, you should in the first instance tell the Student Services Officer at the front desk.&nbsp; Alternatively, you may wish to make an appointment with the Campus General Manager. If these people cannot help you with your problem, they will arrange for you to see the College Principal.&nbsp;</span></p>

<p><strong><span>Your right to Appeal (Internal Appeals)</span></strong></p>
<p><strong><span></span></strong><span>If you are not happy with the College&rsquo;s decision, or the help you have received, you can lodge a formal appeal with the General Manager. This formal appeal should be in writing.</span></p>

<p><strong><span>Your Right to Access an External Complaints and Appeals Body</span></strong></p>
<p><strong><span></span></strong><span>If your grievance still cannot be resolved by the above process, within 10 working days of concluding the internal review, the College will advise the student of the external complaints and appeals body. This service is available through the Dispute Resolution Centre of the Department of Justice and the Attorney-General.</span></p>
<p><span>The Brisbane Dispute Resolution Centre is located on Brisbane Magistrate Court, Level 1, 363 George St, Brisbane 4000.&nbsp; Contact details are: Tel: Brisbane +61 7 3239 6007; Fax: +61 7 3239 6284.&nbsp;</span></p>
<p><span>All complaints must be made in writing.</span></p>

<p><strong><span>For International Students on Student Visas:</span></strong></p>
<p><span>If you wish to lodge an external appeal or complain about this decision, you can contact the Overseas Students Ombudsman. The Overseas Students Ombudsman offers a free and independent service for overseas students who have a complaint or want to lodge an external appeal about a decision made by their private education or training provider. See the Overseas Students Ombudsman website www.oso.gov.au or phone 1300 362 072 for more information.</span></p>
<p><strong><span>For Other Students:</span></strong></p>
<p><span>If you are concerned about the conduct of Imagine Education Australia you may contact the Australia Skills Quality Authority (ASQA).&nbsp; Complaints must be submitted online at http://www.asqa.gov.au/complaints/making-a-complaint.html. Information about how to make an online complaint is available at this site.</span></p>
<p><strong><span>Nominating a support person:</span></strong></p>
<p><strong><span></span></strong><span>International students may nominate a support person to accompany them at any stage of the dispute resolution process. Regardless of the procedures shown above, if you are still dissatisfied, you have the right to seek other legal remedies under Australian and Queensland Common Law. But we hope the problem will never get this serious and we will always do our best to help.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; "><strong><span style=" ">C.<span >&nbsp;&nbsp; </span></span></strong><strong><u><span>Imagine Education Australia - Student Code of Conduct</span></u></strong></p>
<p><span><br />Imagine Education respects the rights of its students to study their chosen course without interruption and also expects that students will respect the College rules in turn. The College deplores bad behaviour, bad language, rudeness and bullying of any kind and aims to maintain a harmonious relationship among the student body. In cases where a student has been found guilty of serious misbehaviour, the College may take action to cancel the student&rsquo;s course and report him/her to the Australian Immigration Authorities. In these cases, it is likely that the student&rsquo;s fees will not be refunded. Any action by the College to report a student is subject to the College&rsquo;s Complaints and Appeals process, described elsewhere in this document.</span></p>

<p><strong><span>Below is the College&rsquo;s Code of Conduct and we ask you to read these carefully before you sign the Student Agreement.</span></strong></p>

<p  style="   text-indent: 18pt;"><strong><span>IMAGINE EDUCATION AUSTRALIA&rsquo;S CODE OF CONDUCT</span></strong></p>
<p  style="margin: 0cm 0cm 6pt 18pt;"><span>Imagine Education Australia respects the rights of its students and understands the pressures that students may face, living and studying in a new country.<br />Our staff are always ready to help and we want to fix any problems before they become too serious.<br />In return, we expect our students to behave properly in the school and respect the wishes of College staff and their classmates at all times.<br />In particular, we ask you to refrain from doing any of the following:</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Deliberately disobeying a directive by a teacher or staff member.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Being rude or continually disruptive in class.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Assaulting another student, or bullying, or making threats against another student</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Making sexist or racist comments.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Harassment of another student or staff member</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Stealing from the school or from another student.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Deliberately damaging equipment, including computer programs and computer equipment.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Placing themselves or another student or staff member of the College in danger, by committing a dangerous, thoughtless, or negligent act.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Falsifying any documents issued by the College (eg. Attendance Certificate, or Class roll.)</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Failure to pay tuition and course related fees</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Failure to maintain satisfactory course progression</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Failure to maintain satisfactory course attendance (ELICOS Courses)</span></p>
<p><span>Any of the above could result in your suspension from class and the cancellation of your course without refund. In addition, if you are found guilty of a serious criminal offence in Australia, such as stealing or assault, you may also be asked to leave the College.</span></p>

<p><strong><span>The College Counsellors</span></strong><span><br />The College provides a number of School Counsellors to help overseas students with any course-related, further<br />education or personal problems and inquiries they may have during their course. We encourage our students to ask questions and seek help, firstly from their teacher and if they don&rsquo;t get the answer they require, from the Academic Head, Student Services Officers and Welfare Counsellor. Counselling appointments should be arranged in advance if possible, at the front desk.</span></p>

<p  style="margin: 0cm 0cm 0.0001pt 36pt; ">
    <strong><span>D. </span></strong><strong><u><span>The Australian Student Visa and the Australian Government ESOS Act</span></u></strong> <br/>
    <strong><u><span>Providing Quality Education and Protecting your Rights and your Fees.</span></u></strong>
</p>
<p><span>If you hold an Australian Student Visa, you must study with an education provider that is listed in the <strong>Commonwealth Register of Institutions and Courses for Overseas Students (CRICOS Register).</strong> Imagine Education Australia, Southport is on this list of registered institutions, which can be found at </span><u><span style=" color: blue;">http://cricos.education.gov.au/</span></u><span>. CRICOS registration guarantees that the course and the education provider meet the high standards necessary for Australia&rsquo;s overseas students&rsquo;program. Please check carefully that the details of your course, including its location, match the information shown on the CRICOS site.</span></p>

<p><span>The Australian Government wants Australia to be a safe, enjoyable and rewarding place to study. Australia&rsquo;s laws promote quality education and consumer protection for overseas students. These laws are known as the ESOS (Education Services for Overseas Students) framework and they include the (ESOS) Act 2000 and the National Code of Practice.</span></p>


<p  style="margin: 0cm 0cm 0.0001pt 21.3pt;   text-indent: -7.1pt;"><strong><span>Your Rights under the ESOS Act</span></strong></p>

<p  style="   text-indent: 14.2pt;"><span>The ESOS Act protects your rights, including:</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Your right to receive, before enrolling, current and accurate information about the courses, fees, modes of study and other information from your provider and your provider&rsquo;s agent. If you are under 18, to ensure your safety, you will be granted a visa only if there are arrangements in place for your accommodation, support and welfare; your right to sign a written agreement with your provider before or as you pay fees, setting out the services to be provided, fees payable and information about refunds of course money. You should keep a copy of this written agreement in your possession.</span></p>
<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><u><span>Safety for your Tuition fees:</span></u><span> The ESOS Act includes consumer protection that enables you to receive a refund or to be placed in another course if your provider is unable to teach your course for any reason. This is something unique to Australia.</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Your right to know:</span></p>
<p  style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>how to use your provider&rsquo;s support services;</span></p>
<p style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>when, or if your enrolment can be deferred, suspended or cancelled;</span></p>
<p style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>what your provider&rsquo;s requirements are for satisfactory progress in the courses you study;</span></p>
<p style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>your obligations regarding course attendance;</span></p>
<p style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>what will happen if you want to change providers; and</span></p>
<p  style="margin: 0cm 0cm 0.0001pt 54pt; "><span style=" font-family: "Courier New";">o<span >&nbsp;&nbsp; </span></span><span>how to use your provider&rsquo;s complaints and appeals process.</span></p>

<p><strong><span>Your Responsibilities under the ESOS Act</span></strong></p>

<p  style="   text-indent: 14.2pt;"><span>As a student on an Australian Student Visa, you have a responsibility to:</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Satisfy your student visa conditions;</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Maintain your Overseas Student Health Cover (OSHC) for the period of your stay (Australian Student Visas only);</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Meet the terms of the written agreement with the College;</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Inform the College if you change your address in Australia;</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Maintain satisfactory course progress;</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Follow the College&rsquo;s attendance policy (80% attendance required);</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>If you are under 18, maintain your approved accommodation, support and general welfare arrangements;</span></p>
<p  style="margin: 12pt 0cm 0.0001pt 36pt;  "><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Very Important: While you are in Australia, you must advise the College if you change your local address and/or telephone number at any time. Immigration Department may wish to contact you directly for an interview and if you do not attend this interview, your visa may be cancelled and you may be deported from Australia.</span></p>
<p  style="margin-bottom: 6pt;"><span>&nbsp;</span></p>
<br>

<div align="center">
    <table>
        <tbody>
        <tr>
            <td colspan="3">
                <strong><span>Contact Details</span></strong>
            </td>
        </tr>
        <tr>
            <td style="width: 30%">
                <strong><span>WHO ?</span></strong>
            </td>
            <td style="width: 30%">
                <strong><span>WHY ?</span></strong>
            </td>
            <td style="">
                <strong><span>HOW ?</span></strong>
            </td>
        </tr>
        <tr>
            <td>
                <span>Imagine Education Australia</span>
            </td>
            <td>
                <span>For policies and<br />procedures that affect you.</span>
            </td>
            <td>
                <span>Email us at </span><u><span style=" color: blue;">admissions@imagineeducation.com.au</span></u><u><span><br /></span></u><span>or visit our website at </span><u><span style=" color: blue;">www.imagineeducation.com.au</span></u>
            </td>
        </tr>
        <tr>
            <td>
                <span>Department of Education,<br />Employment and Workplace<br />Relations (DEEWR)</span>
            </td>
            <td>
                <span>For your ESOS rights and<br />responsibilities</span>
            </td>
            <td>
                <u><span style=" color: blue;">www.deewr.gov.au/esos<br />www.aei.deewr.gov.au/esos</span></u><span><br />ESOS Helpline: +61 2 6240 5069<br />Email Helpline: </span><u><span style=" color: blue;">esosmailbox@deewr.gov.au</span></u>
            </td>
        </tr>
        <tr>
            <td>
                <span>Dept of Home Affairs (DHA)</span>
            </td>
            <td>
                <span>For visa matters</span>
            </td>
            <td>
                <u><span style=" color: blue;">www.immi.gov.au</span></u><span><br />Phone 131 881 in Australia<br />Contact the DHA office in your country.</span>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<p  style="margin-bottom: 6pt;"><span>&nbsp;</span></p>
<p><strong><u><span>Important Note for Australian Student Visa Holders:</span></u></strong><span> Please note that school-age dependents of Student Visa holders who accompany them to Australia will be required to attend school here and may incur full school fees. English language entry requirements will also apply.</span></p>

<p><strong><span>What Happens if Imagine Education Cannot Deliver the Course in which you have enrolled?</span></strong><span><br />In the unlikely event that Imagine cannot provide the course which you have enrolled in and paid for, the College will refund <u>all</u> fees paid, (including the Enrolment Fee and Homestay Arrangement Fee), within 2 weeks of the day that the course ceased. Under the provisions of the ESOS Act, Imagine Education is also registered with Tuition Protection Service (TPS). This means that if Imagine is at any time unable to refund course money, or offer you a place in an alternative course, the TPS Fund Manager will place you in a suitable course with another registered provider first and pay refunds as a last resort. This means that if you are studying on an Australian Student Visa, your course money is safe and, in all circumstances, you are assured of either getting the course you paid for, or a refund of your fees.</span></p>

<p><strong><span>Provision of Language Assistance to Students who are falling behind in their Studies.</span></strong><span><br />While Imagine has strict English language entry requirements for Vocational courses, it recognises the possibility of differences in the English competence of individual students. Students&rsquo; needs are determined at the initial student interview and reviewed throughout the length of the program of study. If you feel you need additional help with English at any time during your vocational course, please tell your teacher or Director of Education who will then arrange appropriate support. This may consist of additional self-learning programs using our English Language resources, or English coaching. English coaching may attract additional fees depending on how much help is required. Vocational students who are found to have seriously inadequate English skills and who can&rsquo;t be helped in this way, may not be allowed to continue in the program and may have to undertake a full-time refresher English course at Imagine Education.<br />This will of course, attract additional fees.</span></p>

<p><strong><span>Course Deferments, Suspensions and Cancellations<br /></span></strong><span>Under the terms and conditions of the Australian Student Visa, there are limited ways in which Imagine Education can agree to a deferment resulting in a suspension or prolongation of the student&rsquo;s enrolled course. &ldquo;Compassionate or compelling circumstances&rdquo; could be one reason for the deferment. Compassionate or compelling circumstances could include, (but are not limited to):</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Serious illness or injury, supported by a medical certificate</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Bereavement of a close family member (where possible, supported by a death certificate)</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Major disaster or political upheaval in home country</span></p>

<p><span >&middot;<span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span>Traumatic incident - eg. the victim of a serious crime etc. (where possible, supported by a Police etc. report)</span></p>

<p><span>In every case, written proof of the reason should be submitted to the College. Students requesting a deferment on the above grounds should submit their request in writing to the Student Services Officer. Any decision of the College to refuse the request is subject to Imagine&rsquo;s Student Complaints and Appeals Policy (see <strong>B. Student Complaints and Appeals Policy</strong>)</span></p>
<p><span><strong>Students wishing to Defer their Course Start to a Later date:</strong></span></p>
<p><span>Unless sufficient notice is given, this deferment will result in a financial penalty (see the appropriate section of the<strong> A. College&rsquo;s Refund Policy.</strong>)</span></p>

<p><strong><span>Course Cancellations at Student&rsquo;s request:</span></strong><span><br />This is also covered by the<strong> College&rsquo;s Refund Policy</strong> (see previously). If a course is cancelled by the student, the College must report the fact to Australian Immigration Authorities and this will affect your student visa. Usually, no refund is given once the student has commenced his/her enrolment but this is also subject to the College&rsquo;s Complaints and Appeals process.</span></p>

<p><strong><span>Cancellation of a Student&rsquo;s course by the College as a Result of a Student&rsquo;s misbehaviour.</span></strong><span><br />Again this is covered in previous sections of this document <strong>(see College Code of Conduct and Refund Policy) </strong>and is subject to the provisions of the College&rsquo;s Complaints and appeals process.</span></p>

<p><strong><span>Deferment where the College finds itself unable to offer the Enrolled Course.</span></strong><span><br />Again, this topic is discussed elsewhere in this document and in the College&rsquo;s Refund Policy.</span></p>

<p><span>This written agreement, and the right to make complaints and seek appeals of decisions and action under various processes, does not affect the rights of the student to take action under the Australian Consumer Law if the Australian Consumer Law applies.</span></p>

<p><strong><span>Privacy Notice</span></strong></p>
<p><span>Under the Data Provision Requirements 2012, Imagine Education Australia is required to collect personal information about you and to disclose that personal information to the National Centre for Vocational Education Research Ltd (NCVER).</span></p>
<p><span>Your personal information (including the personal information contained on this enrolment form), may be used or disclosed by Imagine Education Australia for statistical, administrative, regulatory and research purposes. Imagine Education Australia may disclose your personal information for these purposes to:</span></p>
<p><span>&bull; Commonwealth and State or Territory government departments and authorised agencies; and<br />&bull; NCVER.</span></p>
<p><span>Personal information that has been disclosed to NCVER may be used or disclosed by NCVER for the following purposes:<br />&bull; populating authenticated VET transcripts;<br />&bull; facilitating statistics and research relating to education, including surveys and data linkage;<br />&bull; pre-populating RTO student enrolment forms;<br />&bull; understanding how the VET market operates, for policy, workforce planning and consumer information; and<br />&bull; administering VET, including program administration, regulation, monitoring and evaluation.</span></p>

<p><span>You may receive a student survey which may be administered by a government department or NCVER employee, agent or third party contractor or other authorised agencies. Please note you may opt out of the survey at the time of being contacted.</span></p>
<p  style="margin: 0cm 0cm 6pt 14.2pt;"><span><br />NCVER will collect, hold, use and disclose your personal information in accordance with the Privacy Act 1988 (Cth), the National VET Data Policy and all NCVER policies and protocols (including those published on NCVER\'s website at </span><span><a style="color: #0563c1;" href="http://www.ncver.edu.au"><span>www.ncver.edu.au</span></a></span><span>).</span></p>'
];
