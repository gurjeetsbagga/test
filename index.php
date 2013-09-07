<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script>
            $(document).ready(function() {

                $('dd:not(:first)').hide();
                //hello
                $('dt:not(:first)').hide();
                //now
                $('.required').click(function() {
                    var el = $('.first');
                    var next = el.next('dt');
                    $('.error').text('');
                    if ($(this).is(':checked')) {
                        el.css('display', 'none').removeClass('first');
                        next.css('display', 'block').addClass('first');
                        next.next('dd').css('display', 'block').addClass('first');
                    }
                });

                $('.back').click(function() {
                    var el = $('.first');
                    var prev = el.prev('dd');
                    el.css('display', 'none').removeClass('first');
                    prev.css('display', 'block').addClass('first');
                    prev.prev('dt').css('display', 'block').addClass('first');
                });
                $('.continue').click(function() {
                    var el = $('.first');
                    var next = el.next('dt');
                    if (next.find('.required')) {
                        if (next.find('.required').is(':checked')) {
                            $('.error').text('');
                            el.css('display', 'none').removeClass('first');
                            next.css('display', 'block').addClass('first');
                            next.next('dd').css('display', 'block').addClass('first');
                        } else {
                            $('.error').text('Select one answere');
                        }
                    } else {
                        $('.error').text('');
                        el.css('display', 'none').removeClass('first');
                        next.css('display', 'block').addClass('first');
                        next.next('dd').css('display', 'block').addClass('first');
                    }
                });


            });
        </script>
        <title></title>
    </head>
    <body>
        <div>
            <form>
                <div class="error"></div>
                <dl>
                    <dt class="first" style="display: ">
                    <span class="q_number">1.</span>
                    Do you want a new or used forklift?
                    <span class="required_status">*</span>
                    </dt>
                    <dd style="display: " class="questionBody noSlide first">
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="1" id="bz_7d6d4853-a0a7-2bfb-30cc-376bcaa647e5" name="__match__3371026d-ff8a-9bb2-f4ce-6553d4877bcb" value="7d6d4853-a0a7-2bfb-30cc-376bcaa647e5" class="required valid" type="radio"><label for="bz_7d6d4853-a0a7-2bfb-30cc-376bcaa647e5"> New </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="2" id="bz_946904d4-0955-88b1-bfbb-48fd3425e351" name="__match__3371026d-ff8a-9bb2-f4ce-6553d4877bcb" value="946904d4-0955-88b1-bfbb-48fd3425e351" class="required valid" type="radio"><label for="bz_946904d4-0955-88b1-bfbb-48fd3425e351"> Used </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="3" id="bz_f06365d5-4e9c-0f60-9184-3c23e9bb9e8a" name="__match__3371026d-ff8a-9bb2-f4ce-6553d4877bcb" value="f06365d5-4e9c-0f60-9184-3c23e9bb9e8a" class="required valid" type="radio"><label for="bz_f06365d5-4e9c-0f60-9184-3c23e9bb9e8a"> Not sure </label>
                            </li>
                        </ul>
                    </dd>
                    <dt class="">
                    <span class="q_number">2.</span>
                    What type of forklift do you need?
                    <span class="required_status">*</span>
                    </dt>
                    <dd  class="questionBody noSlide">
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="1" id="bz_f971f046-4134-09ec-40e4-85ba517bf198" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="f971f046-4134-09ec-40e4-85ba517bf198" class="required valid" type="radio"><label for="bz_f971f046-4134-09ec-40e4-85ba517bf198"> Sit-down rider truck </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="2" id="bz_8eec37bf-7e8d-957d-bcf6-2524a7218566" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="8eec37bf-7e8d-957d-bcf6-2524a7218566" class="required valid" type="radio"><label for="bz_8eec37bf-7e8d-957d-bcf6-2524a7218566"> Reach truck </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="3" id="bz_c71f1523-467b-e55a-39fb-47c199cea016" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="c71f1523-467b-e55a-39fb-47c199cea016" class="required valid" type="radio"><label for="bz_c71f1523-467b-e55a-39fb-47c199cea016"> Order picker </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="4" id="bz_a0bb7c53-fae4-9d3f-2323-7147f3a6ff86" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="a0bb7c53-fae4-9d3f-2323-7147f3a6ff86" class="required valid" type="radio"><label for="bz_a0bb7c53-fae4-9d3f-2323-7147f3a6ff86"> Pallet jack </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="5" id="bz_4ce894b0-bc2e-e760-ca5f-593e8b767724" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="4ce894b0-bc2e-e760-ca5f-593e8b767724" class="required valid" type="radio"><label for="bz_4ce894b0-bc2e-e760-ca5f-593e8b767724"> Rough terrain </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="6" id="bz_c09aa79e-60da-dd92-4952-3065b2fbfc25" name="__match__8784aeda-d416-477c-275b-4fbc3e3c5ffc" value="c09aa79e-60da-dd92-4952-3065b2fbfc25" class="required valid" type="radio"><label for="bz_c09aa79e-60da-dd92-4952-3065b2fbfc25"> Other </label>
                            </li>
                        </ul>
                    </dd>

                    <dt class="" >
                    <span class="q_number">3.</span>
                    What type of engine do you prefer?
                    <span class="required_status">*</span>
                    <span  style='display: none;' class="error" generated="true" for="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a">* This information is required.</span></dt>
                    <dd  class="questionBody noSlide">
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="1" id="bz_7fe35de4-01a1-8890-d41f-45d34fdf43f1" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="7fe35de4-01a1-8890-d41f-45d34fdf43f1" class="required error" type="radio"><label for="bz_7fe35de4-01a1-8890-d41f-45d34fdf43f1"> Liquid Propane Gas (LPG) </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="2" id="bz_65cc0166-d672-28fb-e992-cbbd74a6f744" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="65cc0166-d672-28fb-e992-cbbd74a6f744" class="required error" type="radio"><label for="bz_65cc0166-d672-28fb-e992-cbbd74a6f744"> Electric </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="3" id="bz_6e96f3a4-f5e0-e0f8-1ef4-f5ad91414430" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="6e96f3a4-f5e0-e0f8-1ef4-f5ad91414430" class="required error" type="radio"><label for="bz_6e96f3a4-f5e0-e0f8-1ef4-f5ad91414430"> Diesel </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="4" id="bz_83ed74ed-0e56-1104-9e2a-de904371f99c" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="83ed74ed-0e56-1104-9e2a-de904371f99c" class="required error" type="radio"><label for="bz_83ed74ed-0e56-1104-9e2a-de904371f99c"> Gasoline </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="5" id="bz_0cb018b2-f052-21dc-6f64-792dce346473" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="0cb018b2-f052-21dc-6f64-792dce346473" class="required error" type="radio"><label for="bz_0cb018b2-f052-21dc-6f64-792dce346473"> Dual fuel (Gas/LPG) </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="6" id="bz_2c526555-0c80-6b6e-c106-67d15794ca91" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="2c526555-0c80-6b6e-c106-67d15794ca91" class="required error" type="radio"><label for="bz_2c526555-0c80-6b6e-c106-67d15794ca91"> Not sure </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input tabindex="7" id="bz_d39e3df9-f580-0213-4982-5a837a9cd085" name="__match__016efd30-7f9b-cdc3-63f3-66b52fbe501a" value="d39e3df9-f580-0213-4982-5a837a9cd085" class="required error" type="radio"><label for="bz_d39e3df9-f580-0213-4982-5a837a9cd085"> Other </label>
                            </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">4.</span>
                    How much weight do you need to lift?
                    <span class="required_status">*</span>
                    <a href="#dialog4" class="help" tabindex="-1">?</a>
                    </dt>
                    <dd   class="questionBody noSlide">
                        <div id="dialog4" title="Please note:" class="diag help_text">
                            <div> Forklifts are rated according to how much weight they can lift, starting at 3,000 lbs and going up to 35,000 lbs and much more. 3,000-, 5,000-, and 8,000-lb forklifts make up the bulk of the market. Since load sizes typically change over time, you may want to buy a forklift with more capacity than you need currently to make sure it gets the job done now and in the future. </div>
                        </div>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_db417098-fec5-eab9-2fc9-3cc7a7c8dcda" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="db417098-fec5-eab9-2fc9-3cc7a7c8dcda" class="required" type="radio"><label for="bz_db417098-fec5-eab9-2fc9-3cc7a7c8dcda"> 3,000 - 4,999 lbs. </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_137b8d2e-9c80-2bf4-a4bf-d920fd6a2a9d" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="137b8d2e-9c80-2bf4-a4bf-d920fd6a2a9d" class="required" type="radio"><label for="bz_137b8d2e-9c80-2bf4-a4bf-d920fd6a2a9d"> 5,000 - 7,999 lbs. </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_4e899ba6-be82-7047-c533-e68e6a304409" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="4e899ba6-be82-7047-c533-e68e6a304409" class="required" type="radio"><label for="bz_4e899ba6-be82-7047-c533-e68e6a304409"> 8,000 - 9,999 lbs. </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_13ee5c08-042d-d9ed-c71e-76e73ce75c2f" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="13ee5c08-042d-d9ed-c71e-76e73ce75c2f" class="required" type="radio"><label for="bz_13ee5c08-042d-d9ed-c71e-76e73ce75c2f"> 10,000 - 14,999 lbs. </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_aa501e18-f41a-d1ec-029f-dbe45faed51d" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="aa501e18-f41a-d1ec-029f-dbe45faed51d" class="required" type="radio"><label for="bz_aa501e18-f41a-d1ec-029f-dbe45faed51d"> 15,000+ lbs </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_a8b5b604-0a14-b1ee-e7c5-8fad41a3f9ba" name="__match__749f99f1-e9ca-ac97-ad91-6c82c740069b" value="a8b5b604-0a14-b1ee-e7c5-8fad41a3f9ba" class="required" type="radio"><label for="bz_a8b5b604-0a14-b1ee-e7c5-8fad41a3f9ba"> Not sure </label>
                            </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">5.</span>
                    Are you looking to buy, lease, or rent a lift?
                    <span class="required_status">*</span>
                    </dt>
                    <dd style='display: none;' class="questionBody noSlide">
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_d6966868-f030-ee37-e666-1ebcb3f8ae58" name="__match__e7decd64-0772-1750-d7c2-a85d7bcff6ff" value="d6966868-f030-ee37-e666-1ebcb3f8ae58" class="required" type="radio"><label for="bz_d6966868-f030-ee37-e666-1ebcb3f8ae58"> No preference </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_127ed4db-6be6-5704-dc2b-aeff309eb6cb" name="__match__e7decd64-0772-1750-d7c2-a85d7bcff6ff" value="127ed4db-6be6-5704-dc2b-aeff309eb6cb" class="required" type="radio"><label for="bz_127ed4db-6be6-5704-dc2b-aeff309eb6cb"> Purchase </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_49a49950-5516-02f6-b414-2c8e9ddb8c33" name="__match__e7decd64-0772-1750-d7c2-a85d7bcff6ff" value="49a49950-5516-02f6-b414-2c8e9ddb8c33" class="required" type="radio"><label for="bz_49a49950-5516-02f6-b414-2c8e9ddb8c33"> Lease </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_6bd69b29-1080-1e3f-4c4a-e3f468a3a8e1" name="__match__e7decd64-0772-1750-d7c2-a85d7bcff6ff" value="6bd69b29-1080-1e3f-4c4a-e3f468a3a8e1" class="required" type="radio"><label for="bz_6bd69b29-1080-1e3f-4c4a-e3f468a3a8e1"> Rent </label>
                            </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">6.</span>
                    How soon are you planning to buy?
                    <span class="required_status">*</span>
                    </dt>
                    <dd style='display: none;' class="questionBody noSlide">
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_9d4da979-2068-ede4-b8c9-a9e8dcc224b4" name="62e63be6-ae63-88ba-df6b-9c98603746d3" value="9d4da979-2068-ede4-b8c9-a9e8dcc224b4" class="required" type="radio"><label for="bz_9d4da979-2068-ede4-b8c9-a9e8dcc224b4"> ASAP </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_cc352a9c-f525-1522-a47d-f51cfc10c7a0" name="62e63be6-ae63-88ba-df6b-9c98603746d3" value="cc352a9c-f525-1522-a47d-f51cfc10c7a0" class="required" type="radio"><label for="bz_cc352a9c-f525-1522-a47d-f51cfc10c7a0"> In one month </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_75e4702e-4a50-0342-dc6d-286fc570f2a5" name="62e63be6-ae63-88ba-df6b-9c98603746d3" value="75e4702e-4a50-0342-dc6d-286fc570f2a5" class="required" type="radio"><label for="bz_75e4702e-4a50-0342-dc6d-286fc570f2a5"> In two months </label>
                            </li>
                        </ul>
                        <ul>
                            <li class="frm_input radio">
                                <input id="bz_3d913492-e690-c646-7328-64e245ba4d16" name="62e63be6-ae63-88ba-df6b-9c98603746d3" value="3d913492-e690-c646-7328-64e245ba4d16" class="required" type="radio"><label for="bz_3d913492-e690-c646-7328-64e245ba4d16"> 3+ months </label>
                            </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">7.</span>
                    What is your zip code?
                    <span class="required_status">*</span>
                    <span class="note"> (We only serve <strong>U.S. businesses</strong> at this time.) </span>
                    </dt>
                    <dd style='display: none;' class="questionBody noSlide">
                        <ul>
                            <li class="frm_input text postal_code">
                                <input id="_zipcodeQuestion_" name="_zipcodeQuestion_" class="postalcode_input required zipUS" size="20" title="Enter a valid postal code" value="" type="text">
                                <input id="bz__zipcodeQuestion_" name="_zipcodeQuestion__isrequired" value="true" type="hidden">
                                <a href="#cityList" class="zipCode" tabindex="-1">zip lookup for major cities</a> </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">8.</span>
                    What is your email address?
                    <span class="required_status">*</span><div class="note emailHint" id="emailHint">
                        <a href="#whyWeNeedYourInfo" class="popUnder" tabindex="-1">[?]</a>
                    </div>
                    <span class="note"> (e.g. john@example.com) </span>
                    </dt>
                    <dd style='display: none;' class="questionBody noSlide">
                        <ul>
                            <li class="frm_input text email">
                                <input id="_emailQuestion_" name="_emailQuestion_" class="email_input required email exampleEmail" size="40" title="Enter a valid email address" value="" type="text">
                                <input id="bzisrequired__emailQuestion_" name="_emailQuestion__isrequired" value="true" type="hidden">
                                <input id="bzistypeemail__emailQuestion_" name="_emailQuestion__istypeemail" value="true" type="hidden">

                                <div id="whyWeNeedYourInfo" class="diag" title="Why We Need Your E-mail Address">
                                    <p>We require an email address so our suppliers can contact you to provide price quotes. For more information, please consult our <a href="/pages/corporate/privacy.html" title="Privacy Policy" class="openCustomWindow">Privacy Policy</a>.</p>
                                </div>
                            </li>
                        </ul>
                    </dd>

                    <dt class='' style='display: none;'>
                    <span class="q_number">9.</span>
                    Please describe any special features or additional information about your request.
                    <span class="optional_status">[Optional]</span>
                    </dt>
                    <dd style='display: none;' class="questionBody noSlide">
                        <ul>
                            <li class="frm_input textarea additional">
                                <textarea id="_additionalRequirementsQuestion_" name="_additionalRequirementsQuestion_" class="" cols="100" rows="5"></textarea> </li>
                        </ul>
                        <div class="note"> NOTE: There is a 1,000 character limit for this answer. </div>
                        <div class="note">
                            <span class="addReqs">(<a href="#addReqsExample" class="exampleAnswers" tabindex="-1">example answers</a>)</span>
                            <div id="addReqsExample" class="diag" title="Example Answers"> <ul>
                                    <li>We are looking for a used fork lift to lift power boats to about 30 foot.( 12,000#-15,000#s) need all terrain tires and 4 wheel drive. We?re looking to spend 25-30 K (or less) located in R.I. </li>
                                    <li>We need 1 each of the following: 4k lift truck indoor tires, LP Gas 1ea 15k lift truck indoor outdoor tires and LP Gas. </li>
                                    <li>I want a lift that is 2 - 3 years old with approximately 1000 - 1500 hours. I really like the TCM warehouse tires.</li>
                                    <li>I need a 3-stage, 4-way valve, squeeze attachment if available, less than 3000 hours. </li>
                                    <li>Please include a 4 ways paper roll clamp lift.3 wheels,sit down &amp; electric.3500-4000 cap. </li>
                                    <li>We require 400 lbs capacity and a 4-5 foot lift height. </li>
                                    <li>The forlift should have 48" stainless steel forks or standard 48" forks. </li>
                                    <li>I need 60" forks. </li>
                                    <li>I want 72" forks, side shifting forks are a plus. </li>
                                    <li>I want 8' Forks and a side shifter. It can be used with between 2k-6k hours of use. </li>
                                    <li>I need an 8,000 to 10,000 pound lift, LPG, 4' forks, and a short mast. It needs to fit inside of a box trailer. It is for warehouse use only. </li>
                                    <li>I want an 8,000 pound propane powered lift with a 188" mast height and pneumatic tires. It should be year 2000 or newer </li>
                                    <li>The lift should be rated for 9000 to 10000 Lbs, 3 mast and can go inside a container. </li>
                                    <li>I want 96" FORKS </li>
                                    <li>We also need information on the battery charging systems. Please send recommendations. </li>
                                    <li>We also need one (1) 12,000 lb capacity and four (4) 5,000 lb capacity </li>
                                    <li>The lift should have at least 100 lb load tires, back tilt 6 degrees and needs to lift 4,000 pound. The tires need to be for indoor nad outdoor use. </li>
                                    <li>This should be a container handling vehicle with a 50,000 lb capability. I prefer Linde Model Super Stacker/HVT .</li>
                                    <li>Complete service manauals for motor and chassis are required.</li>
                                    <li>I do not want a "man-up" style. Our aisles are 8 ft in width.</li>
                                    <li>We have fairly tight aisles and need to service about 250 inch height. Typical weight is less than 1000 pounds. The unit would be located in Northern KY close to the Cincinnati Airport for warehouse use. </li>
                                    <li>I want a flashing beacon light, mirrors, front &amp; rear work lights and a backup alarm.</li>
                                    <li>This fork lift is for a carpet store. I?ll need forks and pole. </li>
                                    <li>I am looking for a forklift that can unload 40 foot containers from ship. </li>
                                    <li>I need a 4X4 forklift with a telescoping boom. Certain brands I have seen are LULL, Gradall. I am interested in something along those lines. Thank You. </li>
                                    <li>I need a forklift for my outdoor salvage yard to lift automobiles and pick up trucks. </li>
                                    <li>I need a heavy duty forklift with LONF Heavy Duty Forks to lift 40 ISO Shipping Containers onto trailers and to stack them two high. </li>
                                    <li>I need a walk behind model with a counter weight. Aproximate weight to lift is under 1200lbs. The height should be 8 to 10 feet. Maneuvring space is 9 feet. </li>
                                    <li>I need the height to be about 83 inches and lifting capaicity of at least 4,000 lbs.</li>
                                    <li>I need to buy manual stacker, weight for lifting is 1000 lbs.</li>
                                    <li>I really need pallet jack type lifts which can lift 1000 pound loads over 2 feet. I?d like to have them powered by gas if possible so we don?t have to go through the expenses of charging stations and all that. </li>
                                    <li>I will also need a carpet pole for lifting rolls of carpet. I will be changing from lifting pallets of ceramic tile to carpet so I need them to be changable. </li>
                                    <li>I will be using this forklift mainly to load/unload oil field tubing and some pallets/crates.</li>
                                    <li>I would also be interested in 8,000 lb lifts. </li>
                                    <li>I would like to quote each with triple mast, sideshifts, strobe lights, back-up alarms, mirror, fan, non-marking tires, standard pallet forks. Depending on quote, may be looking to change out 8 forklifts in the facility. </li>
                                    <li>I?m interested in a 2004 or newer Toyota 7FBEU15 with a new battery, matching used charger, backup chime 2 headlights and yellow strobe light. </li>
                                    <li>It may have cargo/loader lights as an option. </li>
                                    <li>I just need 2 walkie pallet trucks. </li>
                                    <li>I?m looking for an 8000 pound rough terrain forklift. LP is preferred but will go with Diesel if I have to. I am looking to purchase very soon. </li>
                                    <li>We?re looking for Clark PWX30 Electric Pallet Jacks. </li>
                                    <li>My company is looking for a 2002 and above model. </li>
                                    <li>I am looking for a versatile walk behind fork lift to handle pallets with up to 2 tons and also with extended reach to load 800 lb iron blanks into a cnc machine using either a magnetic pickup or an eye bolt with a lift hook. We also need a short wheelbase. </li>
                                    <li>I will be looking to purchase a truck w/mofit for wood pelllet sales and delivery. </li>
                                    <li>We require low headroom. The door height is 83.5" Forklift rack and mast must be less than 83". </li>
                                    <li>I want a Model 02sfgu30, Double mast, 6000lb capacity, with a decent lift height. </li>
                                    <li>The lift must be rough terrain, possilby 4WD. It may be a true 2WD if it has rough terrain type tires. </li>
                                    <li>This unit must have spark arrestors, turning signals, safety belt, backup warning signal, mirror, fire extinguisher % mounting bracket and a repair contract from 1 to 5 year. </li>
                                    <li>We need 4 used forklifts, either Mitsubishi or Toyota with maximum hours of 2000. In the future we could purchase up to 20 units. </li>
                                    <li>I need a side shift machine rated for 4000 lbs. It must be US manufactured. </li>
                                    <li>The lift needs lights on the front. </li>
                                    <li>This will be used for oil field loading and unloading of flatbeds. </li>
                                    <li>I prefer a komatsu with side shift. </li>
                                    <li>We need rotating forks, AKA bin-dumper included. </li>
                                    <li>Our requirements include side shift forks, hyd. slide forks, hyd. rotation forks, 36 volt or battery charger included in price. </li>
                                    <li>We want a unit similar to a Hyster H700F with a 70,000 lb capacity. </li>
                                    <li>This should be a slip sheet operation with wide blades, and grab and pull attachment .</li>
                                    <li>This will be a stand on style counterbalance no reach required, less than 10 years old. </li>
                                    <li>The only extra feature we need is the ability to rotate the forks to dump. </li>
                                    <li>These lifts will be used in a fully racked 50,000 sq foot warehouse. Size of lift due to space requirements is a consideration. </li>
                                    <li>This forklift will operate in a small warehouse and will need a short turn radius. </li>
                                    <li>This is mainly for moving carpet around. </li>
                                    <li>Tires don't have to be pneumatic, but need to be big enough to use on well packed gravel. Actual loads will be 1000-2000 pds. Could be stand-up if they make one with big tires. </li>
                                    <li>The lift is to Include a carpet pole. </li>
                                    <li>This will be used at a winery to move barrels and stock. </li>
                                    <li>We?d like a warranty, side to side movement as well as fork movement. It should have a 6000 pound capacity. </li>
                                    <li>We are a machine shop and we will be using it to move pallets and moving hoppers. </li>
                                    <li>We are in need of leasing three 3000 pound riders and service agreement/ fleet management program that would have a replacement value every three to five years. We currently have electrics to replace, but would prefer LP. Also in quote need 2 stand-up lifts in addition. </li>
                                    <li>We are looking for a heavy duty forklift with 8' forks that would be able to lift and stack ocean cargo containers. Paul is your sales rep that I have spoke to. Thank you, Joe </li>
                                    <li>We need industrial use pallet jacks. We need to fix lights and for them to have a full metal screen for support and prevent any cases damaging the operating area. We?d like very easy to find parts as they will be shipped to Mexico and if repairs need to be made, we need to ship those very quickly. </li>
                                    <li>We need to rent a 60,000lb fork lift propane with a boom. </li>
                                    <li>We need two new lifts that can lift 5000 lbs to a max height of 8'. We would need the 12-14' height for loads up to 2500 lbs. We want as compact a lift as we can get for narrow aisle travel and also want to have outside travel capabilities in semi-rough terrain (gravel). Propane or electric is OK. </li>
                                    <li>We would want side shift on the forks, reach needs to be 180", we need to be able to lift 5000 lbs. </li>
                                    <li>We need a machine with a side shift assembly. We would also like quotes on propane units with the same capacities and with side shift assembly. </li>
                                    <li>It would be nice for it to have 6' forks. </li>
                                    <li>We want a good conditioned,fork lift. It can be gas or electric. </li>
                                    <li>We require the ability to maneuver in 6-8 ft isles. </li>
                                    <li>I want a hole in the fork for mounting a tow ball to push trailers. </li>
                                    <li>I need a counterbalance electric pallet stacker. </li>
                                    <li>I need a fork lift that is compact and has side shift. Thank you, John. </li>
                                    <li>We just need to move pallets indoor warehouse. </li>
                                    <li>The lift should be large enough to lift 20ft. containers. </li>
                                    <li>This machine should have less than 6,000 hours; 188" mast or higher; short turning radius; wheel base 65 inches. </li>
                                    <li>We will be lifting furniture to warehouse racks. </li>
                                    <li>My company is looking for a side loader. The style must fit a 84" isle. 6,000 lift, 36"reach outward, 204" height. I need tilt wheels on opposite end of steering wheels for sharp turns We currently have a Raymond 070-Sl60TN which meets our needs but is a 1972 yr. We need something 10yrs or newer. </li>
                                    <li>I may require an aluminum dock plate rental or purchase. </li>
                                    <li>We need minimum 10 ft long forks or fork extensions. </li>
                                    <li>We will use this for moving a garbage bin. </li>
                                    <li>I must be able to maneuver in narrow spaces, in and outside of warehouse. </li>
                                    <li>This must have at least 8 foot forks. </li>
                                    <li>I need a used 36 volt battery! </li>
                                    <li>We need a cab with heater,side shift,and 6 48" block forks. </li>
                                    <li>We?ll also need a grapple hook-up. </li>
                                    <li>Please provide a per day rental priceas well as pick up and drop off fee. We will likely need for single day use on several occasions. Thanks. </li>
                                    <li>I need price on a international 7000 allterain forklift w/gas motor 2/wheel drive. </li>
                                    <li>We need quote on electric pallet jack. </li>
                                    <li>We want a side shifter, prefer a Toyota. With about 6500 hours. </li>
                                    <li>I?ll need to lift some doors and windows to a second floor as stairs are not in yet. </li>
                                    <li>I need two lifts for short term rental. They should have 60" forks, a side shift and a 5 or 6k rating. </li>
                                    <li>We?ll need two telehandlers with trax instead of tires-20 ft reach. We also need 5 20 ft gooseneck dump trailer that holds a minimum of 30 yards, and trucks to pull them. </li>
                                    <li>The machine needs a side shift, to be rated for 3000 pounds and air tires of 42". It should have forks and a 3 stage mast for unloading double stacked vans. </li>
                                    <li>I?m interested in a Nissan 80, three stage lift. It should have a fork positioner, solid pneumatic tires and have 3000 or less hours. </li>
                                    <li>I want powered adjustable forks. </li>
                                    <li>We prefer a caterpillar. </li>
                                    <li>This should be a rear mounted lift for construction material deliveries. </li>
                                    <li>We?d like a reversing signal and a flashing beacon. </li>
                                    <li>Can you provide a side arm? I might also consider a purchase rather then lease depending on the economics. </li>
                                    <li>We?ll need a side shift and a backup alarm. I?m looking at a HD50. </li>
                                    <li>Stability is important. </li>
                                    <li>We want a standard mast, 118" max fork height and 78" overall height when lowered. It will be an 8" free lift, 1.75" thick x 4"w x 42" long pallet forks. Should also have a 42" high load backrest, transistor control, horn key switch, emergency power disconnect and a safety reversing switch. I want wet disc brakes and a 6 month or more warranty. </li>
                                    <li>Tight turning radius is important. </li>
                                    <li>We want a triple mast. </li>
                                    <li>We have very narrow aisle and need a turret. </li>
                                    <li>I want a walkie pallet. </li>
                                    <li>We require trucks with tilt &amp; side shift prefer diesel - but can use propane - tires either cushion or pneumatic.. </li>
                                    <li>We will be lifting bundles of bar stock 12' to 16' long in 1'or 2' diam bundles. We may be interested in attachment options for securing the loads during travel with the fork truck. </li>
                                    <li>We?ll be working inside but would like to be able to store outside and also charge outside. Does an electric forklift come in the size i requested? </li>
                                    <li>We would like the forks to turn over (turnstail). </li></ul> </div>
                        </div>
                    </dd>
                </dl>
            </form>
        </div>
        <div>
            <ul>
                <li><button class='back'>back</button></li>
                <li><button class='continue'>continue</button></li>
                <li>
                    <div class="progress-text">Amount Complete: <span>25</span>%</div>
                    <div class="progress-bar"><span style="width: 29%;"></span></div>
                </li>
            </ul>

        </div>

    </body>
</html>
