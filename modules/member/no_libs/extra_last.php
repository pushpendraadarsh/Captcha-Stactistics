<!--=====================================transaction password===================================-->
  <div class="payout_otp_form" >
      <div class="modal fade modal-newspaper" id="otp_transaction_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="text-align: center;margin-top: 10px;color: white;font-size: 18px">Enter Your Transaction Password.</h4>
          <button class="close close_box" style="top: 5PX !important;padding: 0px 0px !important;" data-dismiss="modal" aria-label="Close"><img src="images/cross.png" width="30px"></button>
        </div>
         
        <div class="modal-body" style="">
          <div class="row" style="margin-top: 15px;">
          <div class="col-sm-9">
              <div class="form-group">
                  <form method="POST" enctype="multipart/form-data">

<input class="form-control" type="password" required="" placeholder="Enter Your Transaction Password" name="tpassword" style="border:2px solid #3E4095">

<!--<input type="password" class="form-control" id="otp_transaction_password_id" name="otp_epanelist" placeholder="Enter Your Transaction Password " style="border:2px solid #3E4095" required="">-->

<span style="display:none;color:red;margin-top: 10px;" class="otp_error_mess">Please enter valid Transaction Password.</span>
              </div>
          </div>
          <div class="lasttransaction_password">
          </div>
          <div class="col-sm-3">
              <button type="submit" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white; width: 100%; "> SUBMIT</button>
              </form>
          </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color: #3E4095"></div>
      </div>
      </div>
      </div>
    </div>
<!--===============================end transaction password=============================================-->







<script>
  function notification_popup(id){
    $.ajax({
            type: "POST",
            url: "https://www.oxiinc.com/newcustomerdashborad/getnotificationById",
            data: {'id':id},
            dataType: "json",
            success: function(result){
              $('#home_content').html(result['home_content']);
              $('#notification_content').html(result['content']);
              $('#exampleNiftyNewspaper').modal('show');
            }
          });
        }
        function share_linke($id){
        var position = $("#position").val();
        var sponsor_id = $("#sponsor_id").val();
        var link_href = 'https://www.oxiinc.com/customers/register?sponsor_id='+sponsor_id+'&position='+position;
        var base_url = 'https://www.oxiinc.com/';
        var subject = 'Reference Link';
        var number_ck = '7710929568d';

         if(position != ''){
          
          if($id==1){
            var facebook_href = 'https://www.facebook.com/sharer.php?u='+encodeURIComponent(link_href);
            $('#facebookLink').attr('href', facebook_href).attr('target','_blank');
          }
          if($id==2){
            var twitter_href = 'https://twitter.com/share?url='+encodeURIComponent(link_href)+'&text='+subject;
            $('#twitterLink').attr('href', twitter_href).attr('target','_blank');
          }
          if($id==3){
            var linkedin_href = 'https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(link_href)+'&title='+subject+'&summary=&source='+base_url;
            $('#linkedinLink').attr('href', linkedin_href).attr('target','_blank');
          }
          if($id==4){
            var email_href = 'mailto:?subject='+subject+'&amp;body='+encodeURIComponent(link_href);
            $('#emailLink').attr('href', email_href);

          }
          if($id==5){
            $('#Social_link_text').css('display','block');
            $('#oxiinc_link').val(link_href);

          }
          if ($id==6) {
            var facebook_href = 'https://api.whatsapp.com/send?phone='+number_ck+'&text='+encodeURIComponent(link_href);
            $('#whatsappLink').attr('href', facebook_href).attr('target','_blank');
          }
         }else{
          $('#Social_error').css('display','block');
         }
      }
      </script>
      <div class="" >
      <div class="modal fade modal-newspaper" id="offer_of_the_month_50_4l" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="margin:0 auto;margin-top: 10px;color: white;font-size: 18px">2st Rank (Opportunity for Champions.....)</h4>
          <button class="close close_box" style="top:-5px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
          <div class="modal-body" style="padding-bottom: 0px;">
            <h3 style="text-align: center; font-size: 18px;">!!Good News Good News & Only Good News. !!</h3>

                <p style="text-align: center; font-size: 12px; margin:20px 0px">This Special Offer For All E-Panelist 50K To U4LTTBE Validity - 10 September 2020 To 10 October 2020</p>

                <h3 style="text-align: center; font-size: 18px;">"Oxiinc Group Will Always Remain Best In Our Town"</h3>
                <ul class="bold_li" style="margin:20px 10px;">
                  
                <li><p>Offers Applicable only for 50K To U4LTTBE</p></li>
                

                <li><p>Creating 30 mobile / tablet / laptop winners from your team is mandatory</p>
                <p>अपनी टीम से 30 मोबाइल / टैबलेट / लैपटॉप विजेता बनाना अनिवार्य है!
                <p style="text-align: left; font-size: 12px; margin:5px 0px;font-size: 15px;"><b>Benefit:-</b></p>

                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important">Laptop (Upto 40K)</p>

                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Business Kit</b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Business Suit</b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc T-Shirt</b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Diary</b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Pen </b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Id Card</b></p>
                <p style="font-weight: 800;text-align: left; font-size: 12px; margin:5px 0px; color: #3e4095 !important"><b>Oxiinc Pen</b> </p>
                </li>

                <li>
                   <p style="text-align: left; font-size: 12px; margin:15px 0px"> Within 90 days it will be mandatory to link the reseller of two products with oxiinc.in
90 दिनों के भीतर दो उत्पादों के पुनर्विक्रेता को oxiinc.in के साथ जोड़ना अनिवार्य होगा</p>
                </li>

                <li>
                  <p style="text-align: left; font-size: 12px; margin:15px 0px">You’ll be getting 1% benefit on the resellers sales of products for life time until you will be managing the resellers and those resellers would be selling products from oxiinc.in</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px"> उत्पादों के पुनर्विक्रेता के सेल पे 1% बेनिफिट लाइफ टाइम तक आता रहेगा जबतक आप उस पुनर्विक्रेता को मैनेज करते रहेंगे और पुनर्विक्रेता oxiinc.in से उत्पादों को सेल करेंगे</p>
                </li>

                <li>
                  <p>If the reseller referred by the E-Panelist buys a business package then that E-Panelist shall get 5% of benefit for reference.</p>
                  <p>उत्पादों के पुनर्विक्रेता के द्वारा बिज़नेस पैकेज खरीदे जाने पर रेफर करने वाले E-Panelist को 5% का बेनिफिट मिलेगा</p>
                </li>
                </ul>
                <br>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">Terms And Conditions Apply : -</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">Offers Applicable on new Business Only</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">The winner will be selected for annual day celebration. 1 January 2021</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">Only Denso Panel/SubPanel Will be counted</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">Digital Business or Bmkoin Business Will be counted</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">If the leaders do not achieve the offer then their 50% TTBE will be distributed amongst their life line team members who will achieve the offer.</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">अगर लीडर्स ऑफर अचीवे नहीं करते है तो आपका 50% TTBE आपके लाइफ लाइन टीम में जो लोग अचीवे करेंगे उनको डिस्ट्रीब्यूट कर दिया जायेगा</p>
                <p style="text-align: left; font-size: 12px; margin:5px 0px">Prize Distribution Date 15 October 2020 To 30 October 2020</p>
                <br>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉🏼 *We Proud To Be Oxiinc Group E-Panelist. *🤝</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">🇮🇳 Jai Hind, Jai Oxiinc 🙏🏻</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">✊🏼 "Taiyari Jeet Or Digital Kranti Ki"👍🏼</p>
                <br>
                <p><b>Team</b></p>
                <p>Oxiinc Group Mumbai</p>
                <p>www.oxiinc.in</p>
                <p>For more info,</p>
                <p>Contact: - 022 68732700</p>
                
                  
                
          </div>
        <div class="modal-footer" style="text-align: center; margin:10px auto;">
          <!-- <button type="submit" class="btn btn-default" style="background:#3d3c97; color:#fff;">Continue</button> -->
        </div>
        
      </div>
      </div>
      </div>
    </div>


    <div class="" >
      <div class="modal fade modal-newspaper" id="offer_of_the_month_4l" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="margin:0 auto;margin-top: 10px;color: white;font-size: 18px">1st Rank (BE ON TOP!!! Opportunity for Leaders…)</h4>
          <button class="close close_box" style="top:-5px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
          <div class="modal-body" style="padding-bottom: 0px;">
            <h3 style="text-align: center; font-size: 18px;">!!Good News Good News & Only Good News. !!</h3>

                <p style="text-align: center; font-size: 12px; margin:20px 0px">This Special Offer For All Top Leaders Validity - 10 September 2020 To 10 October 2020</p>

                <h3 style="text-align: center; font-size: 18px;">"Oxiinc Group Will Always Remain Best In Our Town"</h3>
                <p>1) Offers Applicable only for 4 Lakh To 2CR.TTBE</p>
                <p>अपनी टीम से 75 मोबाइल / टैबलेट / लैपटॉप विजेता बनाना अनिवार्य है!</p>
                <p>Creating 75 mobile / tablet / laptop winners from your team is mandatory</p><br>

                <p>Benefit :</p>
                <p>TOP FASTEST 100 WINNERS ROYAL ENFIELD CLASSIC 350</p>
                <p>SECOND WINNERS TVS APACHE RTR 160</p>
                <br>

                <p>RESELLER :</p>

                <p>It is mandatory for all leaders to introduce 5 resellers to Oxiinc.in with in the period of 90 days.</p>

                <p>सभी लीडर्स को 90 दिनों के भीतर पांच रिसेलर को oxiinc.in के साथ जोड़ना अनिवार्य होगा</p>

                 <p>You’ll be getting 1% benefit on the resellers sales of products for life time until you will be managing the resellers and those resellers would be selling products from oxiinc.in</p>

                <p>रिसेलर के सेल पे 1% बेनिफिट लाइफ टाइम तक आता रहेगा जबतक आप उस रिसेलर को मैनेज करते रहेंगे और रिसेलर oxiinc.in से उत्पादों को सेल करेंगे</p>

                <p>If the reseller referred by the E-Panelist buys a business package then that E-Panelist shall get 5% of benefit for reference.</p>

                <p>रिसेलर के  द्वारा बिज़नेस पैकेज खरीदे जाने पर रेफर करने वाले E-Panelist को 5% का बेनिफिट मिलेगा</p>
                <br>

                <p>Terms And Conditions Apply : -</p>
                <p>👉🏼Offers Applicable on new Business Only</p>
                <p>👉🏼The winner will be selected for annual day celebration. 1 January 2021</p>
                <p>👉🏼Only Denso Panel/SubPanel Will be counted</p>
                <p>👉🏼Digital Business or Bmkoin Business Will be counted</p>

                <p>If the leaders do not achieve the offer then their 50% TTB will be distributed amongst their life line team members who will achieve the offer.</p>

                <p>👉🏼अगर लीडर्स ऑफर अचीवे नहीं करते है तो आपका 50% TTB आपके लाइफ लाइन टीम में जो लोग अचीवे करेंगे उनको डिस्ट्रीब्यूट कर दिया जायेगा</p>

                <p>Prize Distribution Date 15 Octuber To 30 October</p>
                <br>
                <p>Dear Leaders</p>

                <ul class="bold_li" style="margin:20px 10px;">
                  
                <li><p>All leaders are known to the fact that the company has worked on all the projects full fledge and also in few upcoming months it will start 75% of projects applications and services. Therefore company has selected top 1000+ leaders from pan India also it should be in our knowledge that through our combined efforts company have successfully acquired 90% of consumer empowerment, and now only few of our services are left to be launched in the market and that is why company is prepared “Top Earners” list, those who will given the target of making winners for 75 mobiles/tablets/laptops. As much as this target is important and beneficial for the leaders the same way it is important and beneficial for the company too.All leaders are known to the fact that the company has worked on all the projects full fledge and also in few upcoming months it will start 75% of projects applications and services. Therefore company has selected top 1000+ leaders from pan India also it should be in our knowledge that through our combined efforts company have successfully acquired 90% of consumer empowerment, and now only few of our services are left to be launched in the market and that is why company is prepared “Top Earners” list, those who will given the target of making winners for 75 mobiles/tablets/laptops. As much as this target is important and beneficial for the leaders the same way it is important and beneficial for the company too.</p><p>सभी  लीडर्स को यह पता है कि कम्पनी अपने सभी प्रॉजेक्ट्स को लेकर काफ़ी काम कर चुकी है और आनेवाले कुछ महीनो में 75% प्राजेक्ट्स के ऐप्लिकेशन और सेरविसेस को शुरू करने जा रही है इसलिए पूरे भारत से टॉप 1000+ लीडर्स का चुनाव किया गया है जैसा की आप सभी जानते है की कम्पनी हम सभी के मेहनत के बदौलत 90% उपभोक्ता शसक्तिकरण में सफल हो चुकी है, और सिर्फ़ अपने कुछ सर्विसेस को मार्केट तक पहुँचाना बाक़ी रह गया है  इसलिए कम्पनी ने टॉप अर्नर की सूची तैयार की है,जिन्हें 75 मोबाइल/टैब्लेट/लैप्टॉप विजेता बनाने का टार्गेट दिया जा रहा है इस टार्गेट को हासिल करना जितना लीडर्स के लिए आवश्यक है उतना ही कम्पनी ले लिए भी आवश्यक और फ़ायदेमंद है !</p></li>
                

                <li><p>All the leader know that many lifeline teams from the market have complains of not getting proper training and help from their up lines always and it has created lot of problems also. So we all together will solve this issue forever and after obtaining this offer none of the team shall complain henceforth, also the seriousness for company projects by leaders will also be revealed.</p>
                <p>आप सभी लीडर्स जानते है कि मार्केट से काफ़ी लाइफ़लाइन टीम को शिकायत हमेशा से रही है कि उनके अपलाइन से उन्हें ट्रेनिंग और मदद नहीं मिलती इस बात को लेकर कई बार समस्या उत्पन्न हुई है, इसलिए हमेशा के लिए हम सभी मिलकर इस समस्या को हल कर लेंगे इस ऑफ़र को हासिल करने से टीम में किसी की भी शिकायत नहीं रहेगी और इस से ये भी मालूम हो जाएगा की कौन से लीडर्स कम्पनी के प्रोजेक्ट को लेकर कितना गंभीर है !</p></li>
                

                <li>
                  <p>You all know that company have selected 1000+ leaders, who have got for an opportunity to achieve name, fame and offers through oxiinc, now those leaders are getting one more opportunity to achieve the target and it is mandatory to do so for all the leaders.</p>
                <p>आप सभी को पता है कम्पनी ने टॉप 1000+ लीडर्स का चुनाव किया है,जिन्हें ओकसिंक के द्वारा नाम, प्रसिद्धि और कई ऑफ़र्स हासिल करने का मौक़ा मिला आज फिर से उन लोगों को एक छोटा सा टार्गेट हासिल करने का मौक़ा दिया जा रहा है जो हासिल करना अनिवार्य होगा</p>
                </li>

                <li>
                  <p>Please note that if we achieve this small target now together, we all will be successful and unstoppable. Company hopes a positive approach and true enthusiasm from all the leaders to achieve this target and create a milestone for new comers.</p>
                  <p>आप सभी को बता दें की इस छोटे से टारगेट को अचीव करते है तो हम सभी पूरी तरह से सफल होजाएंगे और अब हमें कोई रोक नहीं पायेगा आप सभी लेडर्स से कंपनी आसा करती है की इस टारगेट को अचीव कर के एक नई इतिहास लिखेंगे </p>
                </li>
                <li>
                  <p>As till now all the leaders have given their best for the company, the same way it is expected to show the efforts again to reach the peak.</p>
                  <p>समय समय पे सभी लीडर्स ने कंपनी का साथ दिया है कंपनी आसा करती है की सभी लीडर्स मिल कर एक नई इतिहास बनाने में कंपनी के साथ खड़े है !</p>
                </li>

                <li>
                  <p>Company will support all the leaders in all the possible ways to achieve this target.</p>
                  <p>कंपनी इस टारगेट को पूरा करने के लिए पूरी तरह से आपके साथ है</p>
                </li>

                <li>
                  <p>Company have also made a self target list which will be achieved in few months.</p>
                  <p>कंपनी ने आपके साथ साथ अपना भी टारगेट लिस्ट तैयार किया है जिससे आने वाले कुछ महीनो में अचीव करेंगे</p>
                </li>

                </ul>
                <br>
                <p style="text-align: center">
                  🎯🎯🎯*Target *🎯🎯🎯
                  Let us know what the Oxiinc Group is going to do for the development of Company and E-Panelist in 2020.
                </p>
                <br>
                <p>✅🗓 September, October 2020</p>
                <p>👉State Wise Training Program (General Seminar )</p>
                <p>👉Appoint State Aggregator</p>
                <p>👉www.help2all.org Appoint Management in Top 1000 Leaders</p>
                <p>👉www.epanelist.com Appoint Management Top 1000 Leaders</p>
                <br>
                <p>✅🗓November, December 2020</p>
                <p>🏘Housing offers</p>
                <p>💎Jewellery offers</p>
                <p>🛍10 Product Package</p>
                <p>🛍Appoint 5000+ Reseller </p>
                <p>🇧🇩Bangladesh and 🇳🇵Nepal Permanent Establishment with Banking</p>
                <br>
                <p>✅🗓December 2020
                The company has planned that all these 📲mobile Applications will be started by December.</p>
                <p>📲www.oxiinc.com (Started from May 2020)</p>
                <p>📲www.Bmkoin.org ( Will start from 5 October 2020)</p>
                <p>📲www.oxiinc.in ( Will start from November 2020)</p>
                <p>📲www.entube.in ( Will start from December 2020)</p>
                <p>📲www.Trendu.co.in ( Will start from December 2020)</p>
                <p>📲www.enexpress.in ( Will start from December 2020)</p>
                <p>📲www.enewsmedia.in ( Will start from December 2020)</p>
                <p>📲www.enkisaan.com ( Will start from December 2020)</p>
                <p>📲www.enpay.in ( Will start from December 2020)</p>
                <p>📲www.enchat.in ( Will start from December 2020)</p>
                <p>👉Application Launch Program in 🏟 Stadium</p>
                <br>
                
                <br>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉🏼 *We Proud To Be Oxiinc Group E-Panelist. *🤝</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">🇮🇳 Jai Hind, Jai Oxiinc 🙏🏻</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">✊🏼 "Taiyari Jeet Or Digital Kranti Ki"👍🏼</p>
                <br>
                <p><b>Team</b></p>
                <p>Oxiinc Group Mumbai</p>
                <p>www.oxiinc.in</p>
                <p>For more info,</p>
                <p>📞Customer Care - 022 68732700.</p>
                <p>Timings.10am to 1.30pm & 2.15pm Till 7pm👍</p>
                
                  
                
          </div>
        <div class="modal-footer" style="text-align: center; margin:10px auto;">
          <!-- <button type="submit" class="btn btn-default" style="background:#3d3c97; color:#fff;">Continue</button> -->
        </div>
        
      </div>
      </div>
      </div>
    </div> 


    <div class="" >
      <div class="modal fade modal-newspaper" id="offer_of_the_month_4l" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="margin:0 auto;margin-top: 10px;color: white;font-size: 18px">BE ON TOP!!! Opportunity for Leaders…</h4>
          <button class="close close_box" style="top:-5px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
          <div class="modal-body" style="padding-bottom: 0px;">
            <h3 style="text-align: center; font-size: 18px;">!!Good News Good News & Only Good News. !!</h3>

                <p style="text-align: center; font-size: 12px; margin:20px 0px">This Special Offer For All Top Leaders Validity - 10 September 2020 To 10 October 2020</p>

                <h3 style="text-align: center; font-size: 18px;">"Oxiinc Group Will Always Remain Best In Our Town"</h3>
                <p>Offers Applicable only for 4 Lakh To 2CR.TTBE</p>
                <p>अपनी टीम से 75 मोबाइल / टैबलेट / लैपटॉप विजेता बनाना अनिवार्य है!</p>
                <p>Creating 75 mobile / tablet / laptop winners from your team is mandatory</p><br>

                <p>Benefit :</p>
                <p>TOP FASTEST 100 WINNERS ROYAL ENFIELD CLASSIC 350</p>
                <p>SECOND WINNERS TVS APACHE RTR 160</p>
                <br>

                <p>RESELLER :</p>

                <p>It is mandatory for all leaders to introduce 5 resellers to Oxiinc.in with in the period of 90 days.</p>

                <p>सभी लीडर्स को 90 दिनों के भीतर पांच रिसेलर को oxiinc.in के साथ जोड़ना अनिवार्य होगा</p>

                 <p>You’ll be getting 1% benefit on the resellers sales of products for life time until you will be managing the resellers and those resellers would be selling products from oxiinc.in</p>

                <p>रिसेलर के सेल पे 1% बेनिफिट लाइफ टाइम तक आता रहेगा जबतक आप उस रिसेलर को मैनेज करते रहेंगे और रिसेलर oxiinc.in से उत्पादों को सेल करेंगे</p>

                <p>If the reseller referred by the E-Panelist buys a business package then that E-Panelist shall get 5% of benefit for reference.</p>

                <p>रिसेलर के  द्वारा बिज़नेस पैकेज खरीदे जाने पर रेफर करने वाले E-Panelist को 5% का बेनिफिट मिलेगा</p>
                <br>

                <p>Terms And Conditions Apply : -</p>
                <p>👉🏼Offers Applicable on new Business Only</p>
                <p>👉🏼The winner will be selected for annual day celebration. 1 January 2021</p>
                <p>👉🏼Only Denso Panel/SubPanel Will be counted</p>
                <p>👉🏼Digital Business or Bmkoin Business Will be counted</p>

                <p>If the leaders do not achieve the offer then their 50% TTB will be distributed amongst their life line team members who will achieve the offer.</p>

                <p>👉🏼अगर लीडर्स ऑफर अचीवे नहीं करते है तो आपका 50% TTB आपके लाइफ लाइन टीम में जो लोग अचीवे करेंगे उनको डिस्ट्रीब्यूट कर दिया जायेगा</p>

                <p>Prize Distribution Date 15 Octuber To 30 October</p>
                <br>
                <p>Dear Leaders</p>

                <ul class="bold_li" style="margin:20px 10px;">
                  
                <li><p>All leaders are known to the fact that the company has worked on all the projects full fledge and also in few upcoming months it will start 75% of projects applications and services. Therefore company has selected top 1000+ leaders from pan India also it should be in our knowledge that through our combined efforts company have successfully acquired 90% of consumer empowerment, and now only few of our services are left to be launched in the market and that is why company is prepared “Top Earners” list, those who will given the target of making winners for 75 mobiles/tablets/laptops. As much as this target is important and beneficial for the leaders the same way it is important and beneficial for the company too.All leaders are known to the fact that the company has worked on all the projects full fledge and also in few upcoming months it will start 75% of projects applications and services. Therefore company has selected top 1000+ leaders from pan India also it should be in our knowledge that through our combined efforts company have successfully acquired 90% of consumer empowerment, and now only few of our services are left to be launched in the market and that is why company is prepared “Top Earners” list, those who will given the target of making winners for 75 mobiles/tablets/laptops. As much as this target is important and beneficial for the leaders the same way it is important and beneficial for the company too.</p><p>सभी  लीडर्स को यह पता है कि कम्पनी अपने सभी प्रॉजेक्ट्स को लेकर काफ़ी काम कर चुकी है और आनेवाले कुछ महीनो में 75% प्राजेक्ट्स के ऐप्लिकेशन और सेरविसेस को शुरू करने जा रही है इसलिए पूरे भारत से टॉप 1000+ लीडर्स का चुनाव किया गया है जैसा की आप सभी जानते है की कम्पनी हम सभी के मेहनत के बदौलत 90% उपभोक्ता शसक्तिकरण में सफल हो चुकी है, और सिर्फ़ अपने कुछ सर्विसेस को मार्केट तक पहुँचाना बाक़ी रह गया है  इसलिए कम्पनी ने टॉप अर्नर की सूची तैयार की है,जिन्हें 75 मोबाइल/टैब्लेट/लैप्टॉप विजेता बनाने का टार्गेट दिया जा रहा है इस टार्गेट को हासिल करना जितना लीडर्स के लिए आवश्यक है उतना ही कम्पनी ले लिए भी आवश्यक और फ़ायदेमंद है !</p></li>
                

                <li><p>All the leader know that many lifeline teams from the market have complains of not getting proper training and help from their up lines always and it has created lot of problems also. So we all together will solve this issue forever and after obtaining this offer none of the team shall complain henceforth, also the seriousness for company projects by leaders will also be revealed.</p>
                <p>आप सभी लीडर्स जानते है कि मार्केट से काफ़ी लाइफ़लाइन टीम को शिकायत हमेशा से रही है कि उनके अपलाइन से उन्हें ट्रेनिंग और मदद नहीं मिलती इस बात को लेकर कई बार समस्या उत्पन्न हुई है, इसलिए हमेशा के लिए हम सभी मिलकर इस समस्या को हल कर लेंगे इस ऑफ़र को हासिल करने से टीम में किसी की भी शिकायत नहीं रहेगी और इस से ये भी मालूम हो जाएगा की कौन से लीडर्स कम्पनी के प्रोजेक्ट को लेकर कितना गंभीर है !</p></li>
                <li>
                   <p style="text-align: left; font-size: 12px; margin:15px 0px"> Within 90 days it will be mandatory to link the reseller of two products with oxiinc.in
90 दिनों के भीतर दो उत्पादों के पुनर्विक्रेता को oxiinc.in के साथ जोड़ना अनिवार्य होगा</p>
                </li>

                <li>
                  <p>You all know that company have selected 1000+ leaders, who have got for an opportunity to achieve name, fame and offers through oxiinc, now those leaders are getting one more opportunity to achieve the target and it is mandatory to do so for all the leaders.</p>
                <p>आप सभी को पता है कम्पनी ने टॉप 1000+ लीडर्स का चुनाव किया है,जिन्हें ओकसिंक के द्वारा नाम, प्रसिद्धि और कई ऑफ़र्स हासिल करने का मौक़ा मिला आज फिर से उन लोगों को एक छोटा सा टार्गेट हासिल करने का मौक़ा दिया जा रहा है जो हासिल करना अनिवार्य होगा</p>
                </li>

                <li>
                  <p>Please note that if we achieve this small target now together, we all will be successful and unstoppable. Company hopes a positive approach and true enthusiasm from all the leaders to achieve this target and create a milestone for new comers.</p>
                  <p>आप सभी को बता दें की इस छोटे से टारगेट को अचीव करते है तो हम सभी पूरी तरह से सफल होजाएंगे और अब हमें कोई रोक नहीं पायेगा आप सभी लेडर्स से कंपनी आसा करती है की इस टारगेट को अचीव कर के एक नई इतिहास लिखेंगे </p>
                </li>
                <li>
                  <p>As till now all the leaders have given their best for the company, the same way it is expected to show the efforts again to reach the peak.</p>
                  <p>समय समय पे सभी लीडर्स ने कंपनी का साथ दिया है कंपनी आसा करती है की सभी लीडर्स मिल कर एक नई इतिहास बनाने में कंपनी के साथ खड़े है !</p>
                </li>

                <li>
                  <p>Company will support all the leaders in all the possible ways to achieve this target.</p>
                  <p>कंपनी इस टारगेट को पूरा करने के लिए पूरी तरह से आपके साथ है</p>
                </li>

                <li>
                  <p>Company have also made a self target list which will be achieved in few months.</p>
                  <p>कंपनी ने आपके साथ साथ अपना भी टारगेट लिस्ट तैयार किया है जिससे आने वाले कुछ महीनो में अचीव करेंगे</p>
                </li>

                </ul>
                <br>
                <p style="text-align: center">
                  🎯🎯🎯*Target *🎯🎯🎯
                  Let us know what the Oxiinc Group is going to do for the development of Company and E-Panelist in 2020.
                </p>
                <br>
                <p>✅🗓 September, October 2020</p>
                <p>👉State Wise Training Program (General Seminar )</p>
                <p>👉Appoint State Aggregator</p>
                <p>👉www.help2all.org Appoint Management in Top 1000 Leaders</p>
                <p>👉www.epanelist.com Appoint Management Top 1000 Leaders</p>
                <br>
                <p>✅🗓November, December 2020</p>
                <p>🏘Housing offers</p>
                <p>💎Jewellery offers</p>
                <p>🛍10 Product Package</p>
                <p>🛍Appoint 5000+ Reseller </p>
                <p>🇧🇩Bangladesh and 🇳🇵Nepal Permanent Establishment with Banking</p>
                <br>
                <p>✅🗓December 2020
                The company has planned that all these 📲mobile Applications will be started by December.</p>
                <p>📲www.oxiinc.com (Started from May 2020)</p>
                <p>📲www.Bmkoin.org ( Will start from 5 October 2020)</p>
                <p>📲www.oxiinc.in ( Will start from November 2020)</p>
                <p>📲www.entube.in ( Will start from December 2020)</p>
                <p>📲www.Trendu.co.in ( Will start from December 2020)</p>
                <p>📲www.enexpress.in ( Will start from December 2020)</p>
                <p>📲www.enewsmedia.in ( Will start from December 2020)</p>
                <p>📲www.enkisaan.com ( Will start from December 2020)</p>
                <p>📲www.enpay.in ( Will start from December 2020)</p>
                <p>📲www.enchat.in ( Will start from December 2020)</p>
                <p>👉Application Launch Program in 🏟 Stadium</p>
                <br>
                
                <br>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉🏼 *We Proud To Be Oxiinc Group E-Panelist. *🤝</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">🇮🇳 Jai Hind, Jai Oxiinc 🙏🏻</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">✊🏼 "Taiyari Jeet Or Digital Kranti Ki"👍🏼</p>
                <br>
                <p><b>Team</b></p>
                <p>Oxiinc Group Mumbai</p>
                <p>www.oxiinc.in</p>
                <p>For more info,</p>
                <p>📞Customer Care - 022 68732700.</p>
                <p>Timings.10am to 1.30pm & 2.15pm Till 7pm👍</p>
                
                  
                
          </div>
        <div class="modal-footer" style="text-align: center; margin:10px auto;">
          <!-- <button type="submit" class="btn btn-default" style="background:#3d3c97; color:#fff;">Continue</button> -->
        </div>
        
      </div>
      </div>
      </div>
    </div>  

    <div class="" >
      <div class="modal fade modal-newspaper" id="offer_of_the_month" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="margin:0 auto;margin-top: 10px;color: white;font-size: 18px">3th Rank (UNLOCK INDIA SPECIAL OFFER)</h4>
          <button class="close close_box" style="top:-5px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
          <div class="modal-body" style="padding-bottom: 0px;">
            <h3 style="text-align: center; font-size: 18px;">!!Good News Good News & Only Good News. !!</h3>

                <p style="text-align: center; font-size: 12px; margin:20px 0px">This Special Offer For All E-Panelist
                Validity - 10 September 2020 To 10 October 2020</p>

                <h3 style="text-align: center; font-size: 18px;">"Oxiinc Group Will Always Remain Best In Our Town"</h3>
                <ul class="bold_li" style="margin:20px 10px;">
                  
                <p style="text-align: center; font-size: 12px; margin:5px 0px">Prize Distribution Date 15 October To 30 October</p>

                <p style="text-align: center; font-size: 12px; margin:5px 0px">Terms And Conditions Apply : -<p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉 Offers Applicable on new Business Only</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉 The winner will be selected for annual day celebration. 1 January 2021</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉 Only Denso Panel/SubPanel Will be counted</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉 Digital Business or Bmkoin Business Will be counted for both businesses</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉 After the offer ends Charge of Rs.1000 will be applicable if the target is not achieved </p>
                <br>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">👉🏼 We Proud To Be Oxiinc Group E-Panelist. 🤝</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">🇮🇳 Jai Hind, Jai Oxiinc 🙏🏻</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">✊🏼 "Taiyari Jeet Or Digital Kranti Ki"👍🏼</p>

                <p style="text-align: center; font-size: 12px; margin:5px 0px">Team</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">Oxiinc Group Mumbai</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">www.oxiinc.in</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">For more info,</p>
                <p style="text-align: center; font-size: 12px; margin:5px 0px">Contact: - 022 68732700</p>
                <form action="https://www.oxiinc.com/customers/offer_of_the_month" method="post" >
                  <div style="margin-top:20px">
                    <select class="form-control" name="offer" required="">
                      <option value="">Select Options</option>
                        
                      <option value="1"> U10KTTBE Mobile</option>
                       
                    </select>
                  </div>
                <div class="checkbox" style="text-align: center; margin-top:20px">
                  <label style="color:red">
                    <input type="checkbox" value="1" name="T_C" required="">&nbsp; I accept Tems & Conditions
                  </label>
                </div>
          </div>
        <div class="modal-footer" style="text-align: center; margin:10px auto;">
          <button type="submit" class="btn btn-default" style="background:#3d3c97; color:#fff;">Continue</button>
        </div>
        </form>
      </div>
      </div>
      </div>
    </div> 

    <div class="" >
      <div class="modal fade modal-newspaper" id="credit_card_bitcoin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="text-align: center;margin-top: 10px;color: white;font-size: 18px">Credit Card / Bitcoin / BTCMAX Accepted Here</h4>
          <button class="close close_box" style="top: 5PX !important;padding: 0px 0px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
        <div class="modal-body" style="">
          <div class="row" style="margin-top: 15px;">
          <div class="col-sm-12">
              <p>

                Bitcoin ID - 3N7N2zF2yQPmFMegXN7AukT5spQG8SguWT<br><br>

                Only Credit Card Payment - Whatsapp for Payment Link on<br> <a href="https://wa.me/919702464238" target="_blank" style="color: blue"><u> Click Here</u> </a><br><br>

                BMKOIN ID - <span style="font-size: 11px">j7i7bc2r0nfqvwwabalsivy1wgy12kgcjqziqzav8azncebv4fsfy1gr_vqzd6et</span><br>
              </p>
          </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color: #3E4095"></div>
      </div>
      </div>
      </div>
    </div>

     
  

  <div class="modal fade" id="sa_pending_from_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">State Aggregator Application is Pending</h5>
       <button class="close close_box" style="" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your State Aggregator Application is Pending</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="sa_rejected_from_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">State Aggregator Application is Rejected</h5>
       <button class="close close_box" style="" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your State Aggregator Application is Rejected</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>


 <div class="modal fade" id="sa_open_from_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <!-- <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">State Aggregator Application</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> -->
    <div class="modal-header" style="background-color: #3E4095">
           <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">State Aggregator Application</h5>
        <button class="close close_box" style="top: 5PX !important;padding: 0px 40px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
      </div>
    <div class="modal-body" id="sa_model_form">
  <form  id="frmadminlogin_sa" novalidate="true" method="post" onsubmit="return sa_request_form(this);" autocomplete="on">
    <div class="alert alert-success validate_user_login_alert_success_sa" id="validate_user_login_alert_success_sa" style="display:none;"></div>
      <div class="alert alert-danger validate_user_login_alert_danger_sa" id="validate_user_login_alert_danger_sa" style="display:none;"></div>
    <input type="hidden" name="user_id" id="user_id_sa" value="19893">
    <input type="hidden" name="employee_id" id="employee_id_sa" value="19910">
    <input type="hidden" name="username"  id="username_sa" value="lata02vns">
    
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company Name <span style="color: red;font-size: 20px">*</span></label>
      <input type="text" class="form-control" id="company_name_sa" name="company_name" required="">
      <span style="color: red;display: none" id="company_name_sa_danger"><strong>Sorry!</strong> Please Enter Company Name</span>
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company Director Name <span style="color: red;font-size: 20px">*</span></label>
      <input type="text" class="form-control" id="company_director_name_sa" name="company_director_name" required="">
      <span style="color: red;display: none" id="company_director_name_sa_danger"><strong>Sorry!</strong> Please Enter Company Director Name</span>
    </div>
    
     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company Address <span style="color: red;font-size: 20px">*</span></label>
      <textarea class="form-control" name="company_address" id="company_address_sa" required=""></textarea>
      <span style="color: red;display: none" id="company_address_sa_danger"><strong>Sorry!</strong> Please Enter Company Address</span>
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company Number <span style="color: red;font-size: 20px">*</span></label>
      <input type="Number" class="form-control" id="company_no_sa" name="company_no" required="">
      <span style="color: red;display: none" id="company_no_sa_danger"><strong>Sorry!</strong> Please Enter Company Number</span>
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company Email-id <span style="color: red;font-size: 20px">*</span></label>
      <input type="email" class="form-control" id="company_emailid_sa" name="company_emailid" required="">
      <span style="color: red;display: none" id="company_emailid_sa_danger"><strong>Sorry!</strong> Please Enter Company Email-id</span>
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Company GST no(Optional)</label>
      <input type="text" class="form-control" id="company_gst_sa" name="company_gst" >
    </div>
<div class="form-group">
  <label for="exampleInputEmail1" class="ddc">Name</label>
  <input type="text" class="form-control" id="full_name_sa" name="full_name" value="PUSHPLATA  PANDEY" readonly=''>

</div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="ddc">UserName</label>
  <input type="text" class="form-control" id="UserName_1_sa" name="UserName_1" value="lata02vns" readonly=''>
 
</div>
<div class="form-group">
  <label for="exampleInputPassword1" class="ddc">Email-ID</label>
  <input type="text" class="form-control" id="email_id_sa" name="email_id" value="lata02vns@gmail.com" readonly=''>
</div>
<div class="form-group">
  <label for="exampleInputPassword1" class="ddc">Contact Number</label>
  <input type="text" class="form-control" id="contact_no_sa" name="contact_no" value="9473528832" readonly=''>
</div>
 <div class="form-group">
    <label for="inputState" class="ddc">Business Capital</label>
    <input type="text" class="form-control" id="initial_business_amount_sa" name="initial_business_amount" value="1 Cr." readonly=''>
    <span style="color: red;display: none" id="initial_business_amount_danger_sa"><strong>Sorry!</strong> Please Select Initial Business Amount</span>
   
    </div>
    <div class="form-check ddc">
    <input type="checkbox" name="T&C" id="T_C_sa" class="form-check-input"  required="">
    <label class="form-check-label " style="color: black" for="exampleCheck1">I Agree Terms of Services, <a href="https://www.oxiinc.com/ddc_model">Please Register <span style="background: #615760;color: white">Terms & conditions</span></a></label><br>
    <span style="color: red;display: none" id="T_C_danger_sa">Sorry! Please Select Team and Conditions</span>
    </div>
    <br>
        <center><br><button type="submit" class="btn btn-primary">Submit</button></center>
      </form>
  </div>
    <div class="modal-footer" style="background-color: #3E4095">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  function change_login_password() {
             $('#change_login_password').modal('show');
  } 
  function checkotp_transaction_password(user_id,employee_id){
    var transaction_password = $('#otp_transaction_password_id').val();
    var type='t';
    $.ajax({
        url : 'https://www.oxiinc.com/customers/verify_transaction_password_otp',
        data: {"type":type,"user_id":user_id,"employee_id": employee_id,"transaction_password":transaction_password},
        type: "POST",
        success : function(response) {
          if(response == 1){
            window.location.href="https://www.oxiinc.com/customers/myaccount";
          }else{
            $('#otp_error_mess_transaction_password').css('display','block');
          }
        },
        error : function() {
          alert("try again.");
          $('#otp_error_mess_transaction_password').css('display','block');
        }
      });    
  }
</script>
<script type="text/javascript">
  function sa_request_form(ele){
    var hasError=0;
    
    var user_id= jQuery("#user_id_sa").val();
    var employee_id= jQuery("#employee_id_sa").val();
    var username= jQuery("#username_sa").val();

    var company_director_name = jQuery("#company_director_name_sa").val();
    var company_name = jQuery("#company_name_sa").val();
    var company_address = jQuery("#company_address_sa").val();
    var company_no_ddc = jQuery("#company_no_sa").val();
    var company_emailid = jQuery("#company_emailid_sa").val();
    var company_gst = jQuery("#company_gst_sa").val();

    var full_name= jQuery("#full_name_sa").val();
    var UserName_1= jQuery("#UserName_1_sa").val();
    var email_id= jQuery("#email_id_sa").val();
    var contact_no= jQuery("#contact_no_sa").val();
    var initial_business_amount= jQuery("#initial_business_amount_sa").val();
    var T_C= jQuery("#T_C_sa").val();
    

    if (company_name=='') {
       jQuery(ele).find('#company_name_sa_danger').css('display','block');
      return false;
    }
    if (company_name!='') {
       jQuery(ele).find('#company_name_sa_danger').css('display','none');
    }
    if (company_director_name=='') {
       jQuery(ele).find('#company_director_name_sa_danger').css('display','block');
      return false;
    }
    if (company_director_name!='') {
       jQuery(ele).find('#company_director_name_sa_danger').css('display','none');
    }

    if (company_address=='') {
       jQuery(ele).find('#company_address_sa_danger').css('display','block');
      return false;
    }
    if (company_address!='') {
       jQuery(ele).find('#company_address_sa_danger').css('display','none');
    }

    if (company_no_ddc=='') {
       jQuery(ele).find('#company_no_sa_danger').css('display','block');
      return false;
    }
    if (company_no_ddc!='') {
       jQuery(ele).find('#company_no_sa_danger').css('display','none');
    }

    if (company_emailid=='') {
       jQuery(ele).find('#company_emailid_sa_danger').css('display','block');
      return false;
    }
    if (company_emailid!='') {
       jQuery(ele).find('#company_emailid_sa_danger').css('display','none');
    }

   



    if(!$('#T_C_sa:checkbox:checked').length > 0){
          jQuery(ele).find('#T_C_danger_sa').css('display','block');
      return false;
       }
    if(!$('#T_C_sa:checkbox:checked').length > 0){
          jQuery(ele).find('#T_C_danger_sa').css('display','none');
       }   
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.user_id = jQuery("#user_id_sa").val();
        account.forget.employee_id = jQuery("#employee_id_sa").val();
        account.forget.username = jQuery("#username_sa").val();

        account.forget.company_director_name = jQuery("#company_director_name_sa").val();
        account.forget.company_name = jQuery("#company_name_sa").val();
        account.forget.company_address = jQuery("#company_address_sa").val();
        account.forget.company_no_ddc = jQuery("#company_no_sa").val();
        account.forget.company_emailid = jQuery("#company_emailid_sa").val();
        account.forget.company_gst = jQuery("#company_gst_sa").val();

        account.forget.full_name = jQuery("#full_name_sa").val();
        account.forget.UserName_1 = jQuery("#UserName_1_sa").val();
        account.forget.email_id = jQuery("#email_id_sa").val();
        account.forget.contact_no = jQuery("#contact_no_sa").val();
        account.forget.initial_business_amount = jQuery("#initial_business_amount_sa").val();
        account.forget.T_C = jQuery("#T_C_sa").val();
        var q = JSON.stringify(account);

         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/add_sa_request_form",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Submit').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.validate_user_login_alert_success_sa').css('display','block').html(res.msg); 
                    jQuery(ele).find('.validate_user_login_alert_danger_sa').css('display','none'); 
                    document.getElementById('frmadminlogin_sa').reset();  
                    // window.location.href="admin";
                }else if (res.status=='2') {
                  jQuery(ele).find('.validate_user_login_alert_success_sa').css('display','none'); 
                  jQuery(ele).find('.validate_user_login_alert_danger_sa').css('display','block').html(res.msg);
                }else if(res.status=='1')
                {
                   jQuery(ele).find('.validate_user_login_alert_success_sa').css('display','block').html(res.msg); 
                    jQuery(ele).find('.validate_user_login_alert_danger_sa').css('display','none'); 
                    document.getElementById('frmadminlogin_sa').reset();  
                }else if(res.status=='3')
                {
                  jQuery("#sa_model_form").html("");
                  jQuery("#sa_model_form").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.validate_user_login_alert_success_sa').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger_sa').css('display','block').html(res.msg); 
                }
            }
        });



    }
    return false;
}
</script>

<script type="text/javascript">
  function otp_transaction_password_ddc() {
   $('#otp_transaction_password_ddc').modal('show');
  }
   function checkotp_transaction_password_ddc(user_id,employee_id){
      var transaction_password = $('#otp_transaction_password_id_ddc').val();
      var type='t';
      $.ajax({
          url : 'https://www.oxiinc.com/customers/verify_transaction_password_otp_ddc',
          data: {"type":type,"user_id":user_id,"employee_id": employee_id,"transaction_password":transaction_password},
          type: "POST",
          success : function(response) {
            if(response == 1){
              window.location.href="https://www.oxiinc.com/customers/myaccount";
            }else{
              $('#otp_error_mess_transaction_password_ddc').css('display','block');
            }
          },
          error : function() {
            alert("try again.");
            $('#otp_error_mess_transaction_password_ddc').css('display','block');
          }
        });    
    }
</script>

 <div class="payout_otp_form" >
    <div class="modal fade " id="otp_transaction_password_ddc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
      <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E4095">
           <h4 style="text-align: center;margin-top: 10px;color: white;font-size: 18px">Enter Your Transaction Password.</h4>
        <button class="close close_box" style="top: 5PX !important;padding: 0px 0px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
      </div>
       
      <div class="modal-body" style="">
        <div class="row" style="margin-top: 15px;">
        <div class="col-sm-9">
            <div class="form-group">
                <input type="password" class="form-control" id="otp_transaction_password_id_ddc" name="otp_epanelist" placeholder="Enter Your Transaction Password " style="border:2px solid #3E4095" required="">
                <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_transaction_password_ddc" class="otp_error_mess">Please enter valid Transaction Password.</span>
            </div>
        </div>
        <div class="lasttransaction_password">
          
        </div>
        <div class="col-sm-3">
            <button type="submit" onclick="checkotp_transaction_password_ddc('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
        </div>
        </div>
      </div>
      <div class="modal-footer" style="background-color: #3E4095"></div>
    </div>
    </div>
    </div>
  </div>

    <div class="payout_otp_form" >
      <div class="modal fade modal-newspaper" id="otp_transaction_password_offer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E4095">
             <h4 style="text-align: center;margin-top: 10px;color: white;font-size: 18px">Enter Your Transaction Password.</h4>
          <button class="close close_box" style="top: 5PX !important;padding: 0px 0px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
        </div>
         
        <div class="modal-body" style="">
          <div class="row" style="margin-top: 15px;">
          <div class="col-sm-9">
              <div class="form-group">
                  <input type="password" class="form-control" id="otp_transaction_password_id_offer" name="otp_epanelist" placeholder="Enter Your Transaction Password " style="border:2px solid #3E4095" required="">
                  <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_transaction_password_offer" class="otp_error_mess">Please enter valid Transaction Password.</span>
              </div>
          </div>
          <div class="lasttransaction_password">
            
          </div>
          <div class="col-sm-3">
              <button type="submit" onclick="checkotp_transaction_password_offer('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
          </div>
          </div>
        </div>
        <div class="modal-footer" style="background-color: #3E4095"></div>
      </div>
      </div>
      </div>
    </div>

    <script type="text/javascript">
  function checkotp_transaction_password_offer(user_id,employee_id){
    var transaction_password = $('#otp_transaction_password_id_offer').val();
    var type='t';
    $.ajax({
        url : 'https://www.oxiinc.com/customers/verify_transaction_password_otp',
        data: {"type":type,"user_id":user_id,"employee_id": employee_id,"transaction_password":transaction_password},
        type: "POST",
        success : function(response) {
          if(response == 1){
            $('#champions_limited_offer').submit();
          }else{
            $('#otp_error_mess_transaction_password_offer').css('display','block');
          }
        },
        error : function() {
          alert("try again.");
          $('#otp_error_mess_transaction_password_offer').css('display','block');
        }
      });    
  }
</script>

    <div class="modal fade" id="change_login_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E4095">
         <h4 style="text-align: center;margin-top: 10px;color: white;">Change Login Password</h4>
      <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
      <div class="modal-body">
        <div id="change_password_div">
          
        </div>
        <div>
        <form id="change_password_from" onsubmit="return change_password_fun(this);">
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Your OTP</label>
            <input type="text" class="form-control" name="change_otp" id="change_otp" placeholder="Enter Your OTP " style="border:2px solid #3E4095" required="">
            <span id="enter_otp_change"  style="display:none;color: red;font-weight: 600;font-size: 12px">Please Enter OTP</span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Old Password</label>
            <input type="text" class="form-control" name="old_password" id="change_old_password" placeholder="Old Password" style="border:2px solid #3E4095" required="">
            <span id="old_password_change"  style="display:none;color: red;font-weight: 600;font-size: 12px">Please Enter Old Password</span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="text" class="form-control" name="new_password" id="change_new_password" placeholder="New Password" style="border:2px solid #3E4095" required="">
            <span id="new_password_change"  style="display:none;color: red;font-weight: 600;font-size: 12px">Please Enter New Password</span>
          </div>
          <center><button type="submit" id="change_password_submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button></center>
        </form>
        </div>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function change_password_fun(ele) {
    var hasError=0;
    var change_otp= jQuery("#change_otp").val()
    var change_old_password= jQuery("#change_old_password").val()
    var change_new_password= jQuery("#change_new_password").val()

    if (change_otp =='') {
      $("#enter_otp_change").css("display","block");
      return false;
    }
    $("#enter_otp_change").css("display","none");

    if (change_old_password =='') {
      $("#old_password_change").css("display","block");
      return false;
    }
    $("#old_password_change").css("display","none");

    if (change_new_password =='') {
      $("#change_new_password").css("display","block");
      return false;
    }
    $("#change_new_password").css("display","none");

    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.change_otp = jQuery("#change_otp").val();
        account.forget.change_old_password = jQuery("#change_old_password").val();
        account.forget.change_new_password = jQuery("#change_new_password").val();

        var q = JSON.stringify(account);
        // alert(q);
        jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/newlogin/change_login_password_ox",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery("#change_password_submit").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery("#change_password_submit").text('Submit').prop('disabled', false);
                if(res.status=='3'){ // Success
                  jQuery("#account_block_div_ddc").html("");
                  jQuery("#account_block_div_ddc").html(res.msg);
                }
                else if(res.status=='2')
                {
                   jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','block').html(res.msg);
                }else if(res.status=='1')
                {
                  jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_success').css('display','block').html(res.msg);
                   window.location.href="https://www.oxiinc.com/customers/myaccount";
                }else if (res.status=='4') {
                  jQuery("#account_block_div_ddc").html("");
                  jQuery("#account_block_div_ddc").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','none'); 
                    jQuery(ele).find('.validate_user_login_alert_danger').css('display','block').html(res.msg); 
                }
            }
        });
    }
    return false;
      }
</script>

<div class="modal fade modal-super-scaled" id="gogoa_wise_merage" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Go Goa Meet Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>



        <div class="row" id="hide_go_merage_div">
          <div class="col-sm-12" id="go_merage_id">
            <div class="row">
              <div class="col-sm-6">
                <center>
                  
                  <button type="button" class="btn btn-primary" onclick="hide_go_merage_div();" style="width: 50%" > Merge </button>
                </center>
              </div>
              <div class="col-sm-6" id="qr_code_go">
                <center>
                  <button type="button" class="btn btn-primary" onclick="skip_go_merage_id();" style="width: 50%" > Skip </button>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-12" id="skip_go_merage_id" style="display:none; ">
            <div class="row">
              <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/go_goa_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6" id="qr_code_go"><center>
                          </center></div>
            </div>
          </div>
        </div>

        <div class="row" id="show_go_merage_div" style="display: none">
          <div class="col-sm-12" >
            <div class="row">
              <div class="col-sm-12">
                <form action="https://www.oxiinc.com/customers/go_merage_username_ticket" method="post">
                  <input type="hidden" name="merage_employee_id" id="go_merage_employee_id" required="">
                  <label>Enter Username</label>
                  <input type="text" name="username" class="form-control go_merage_username" required="">
                  <label>Full Name</label>
                  <input type="text" name="fullname" class="form-control" id="go_merage_fullname" required="" readonly="">
                  <br><button type="submit" class="btn btn-primary">submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>
<div class="modal fade modal-super-scaled" id="go_goa_meet_merage_approval_pending" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Go Goa Meet Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
        <div class="row">

          <div class="col-sm-12" id="go_merage_id_12">
            <div class="row">
              <div class="col-sm-12">
                <center>
                  <P>Sorry! Merage User Is not approved your request application</P>
                </center>
              </div><br>
              <div class="col-sm-12">
                <center>
                  <button type="button" class="btn btn-primary" onclick="skip_go_merage_id_2();" style="width: 50%" > Skip </button>
                </center>
              </div>
            </div>
          </div>

        <div class="col-sm-12" id="skip_go_merage_id_2" style="display:none; ">
          <div class="row">
            <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/go_goa_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6"><center>
                          </center>
          </div>
        </div>
      </div>

        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>
<div class="modal fade modal-super-scaled" id="gpo_goa_merage_request_pending" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
        <div class="row">

          <div class="col-sm-12" id="go_merage_id_request">
            <div class="row">
              <div class="col-sm-12">
                <center>
                  <P>The  was send request for merage a ticket</P>
                </center>
              </div><br>
              <div class="col-sm-6">
                <center>
                  <button type="button" class="btn btn-primary" onclick="approved_request_go_merage();" style="width: 50%;background-color: green" > Approved </button>
                </center>
              </div>
              <div class="col-sm-6">
                <center>
                  <button type="button" class="btn btn-primary" onclick="rejected_request_go_merage();" style="width: 50%;background-color: red" > Rejected </button>
                </center>
              </div>
            </div>
          </div>

        <div class="col-sm-12" id="skip_go_merage_id_request" style="display:none; ">
          <div class="row">
            <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/go_goa_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6"><center>
                          </center>
          </div>
        </div>
      </div>

        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>
<script type="text/javascript">
$(".go_merage_username").keyup(function() {
        $(this).val($(this).val().replace(/[_\W]+/g, "").toLowerCase());
    });
$(document).on("blur", ".go_merage_username", function(){
        var username = $(this).val();
        var base_url = 'https://www.oxiinc.com/';
        if(username != "")
        {
            $.ajax({
                type: "POST",
                url: base_url+"subscriptions/get_username_based_customer_data_go_goa",
                dataType: "json",
                data: {username : username, return : "no"},
                success:function(response) {
                    if(response.error != undefined && response.error == "0")
                    {
                        $("#go_merage_fullname").val(response.fullname);
                        $("#go_merage_employee_id").val(response.employee_id);
                    }else if (response.error != undefined && response.error == "1") {
                        alert("Sorry!! Your not Eligible");
                        $(".go_merage_username").val("");
                    }else if (response.error != undefined && response.error == "2") {
                      alert("Sorry! This User is not Eligible");
                        $(".go_merage_username").val("");
                    }else if (response.error != undefined && response.error == "3") {
                        alert("No User Found");
                        $(".go_merage_username").val("");
                    }
                    else
                    {
                        alert("No User Found");
                        $(".go_merage_username").val("");
                    }
                }
            });
        }
        else
        {
            alert("Please enter username");
        }
    });
 </script>
 <script type="text/javascript">
    function skip_go_merage_id() {
     var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/skip_go_merage_id",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_go_merage_id').css('display','block'); 
                    $('#go_merage_id').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }
    function hide_go_merage_div() {
    $('#show_go_merage_div').css('display','block'); 
    $('#hide_go_merage_div').css('display','none'); 
  }
</script>
<script type="text/javascript">
    function skip_go_merage_id_2() {
    var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/skip_go_merage_id_2",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_go_merage_id_2').css('display','block'); 
                    $('#go_merage_id_12').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }
</script>
<script type="text/javascript">
      function approved_request_go_merage() {
    var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/approved_request_go_merage",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_go_merage_id_request').css('display','block'); 
                    $('#go_merage_id_request').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }

    function rejected_request_go_merage() {
     var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/rejected_request_go_merage",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_go_merage_id_request').css('display','block'); 
                    $('#go_merage_id_request').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }

</script>

  

<div class="modal fade" id="Champions_open_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Territory Head Application Form (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body" id="leader_submit_form">
  <form  id="frmadminlogin" novalidate="true" method="post" onsubmit="return " autocomplete="on">
    <input type="hidden" name="user_id" id="user_id_Champion" value="19893">
    <input type="hidden" name="employee_id" id="employee_id_Champion" value="19910">
    <input type="hidden" name="username"  id="username_Champion" value="lata02vns">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Name</label>
      <input type="text" class="form-control" id="leader_full_name" name="leader_full_name" value="PUSHPLATAPANDEY" readonly required="">
      
    </div>
     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Email-id</label>
      <input type="text" class="form-control" id="leader_email_id" name="leader_email_id" value="lata02vns@gmail.com" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> contact Number</label>
      <input type="Number" class="form-control" id="leader_contact_number" name="leader_contact_number" value="9473528832" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Pan No</label>
      <input type="email" class="form-control" id="leader_pan_no" name="leader_pan_no" value="BNXPP2834G" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Adhaar No</label>
      <input type="text" class="form-control" id="leader_adhaar_no" name="leader_adhaar_no" value="852643704794" readonly >
    </div>
<div class="form-group">
  <label for="exampleInputEmail1" class="ddc"> User Name</label>
  <input type="text" class="form-control" id="leader_user_name" name="leader_user_name" value="lata02vns" readonly='' readonly>

</div>
 <div class="form-group">
    <label for="inputState" class="ddc">Select Number of Panels</label>
    <select id="No_of_panel" class="form-control" required="" name="No_of_panel">
      <option value="">Choose...</option>
      <option value="1000">1,000</option>
    </select>
    <span style="color: red;display: none" id="No_of_panel_danger"><strong>Sorry!</strong> Please Select Number of Panels</span>
   
    </div>
    <div class="form-group">
  <label for="exampleInputEmail1" class="ddc">Remark's (optional)</label>
  <input type="text" class="form-control" id="leader_remark" name="leader_remark" >

</div>
    <div class="form-check ddc">
    <input type="checkbox" name="T&C" id="T_C_leader" class="form-check-input"  required="">
    <label class="form-check-label " style="color: black" for="exampleCheck1">i accept all the terms and conditions</label><br><span style="color: red;display: none" id="T_C_leader_danger">Sorry! Please Select Team and Conditions</span>
    </div>
    <br>
    
    <center><br><button type="button" id="leader_subnit_form" onclick="leader_submit_form()" class="btn btn-primary">Submit</button></center>
    
     <!--  --> 
  </form>
  </div>
    <div class="modal-footer" style="background-color: #3E4095">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="Champions_pending_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Leader Request From is Pending (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your Territory Head Request Form is Pending</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Champions_reject_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Leader Request From is Rejected (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your Territory Head Request Form is Rejected</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="goodwill_extension" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Goodwill Extension</h5>
       <button class="close close_box" style="top: -5PX !important;padding: 0px 5px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      
    </div>
    </div>
  </div>
</div>

<div class="modal fade modal-super-scaled" id="zona_wise_pending" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program</h3>
        </div>
        <div class="modal-body">
              <p> <br>Your request is under process, We will notify you at the earliest. Thank You! </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>

<div class="modal fade modal-super-scaled" id="not_elgiable_gogoa" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Let's Go Goa</h3>
        </div>
        <div class="modal-body">
              <p> <br>Sorry!! Your are Not legible </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade modal-super-scaled" id="zona_wise_rejected" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Rejected</h3>
        </div>
        <div class="modal-body">
              <p>  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
          <a href="https://www.oxiinc.com/customers/digital_champions_meet">
          <button type="button" style="background-color: #3E8EF7;color: #FFFFFF" class="btn btn-default btn-pure">Resubmit</button>
          </a>
        </div>
      </div>
  </div>
</div>


<div class="modal fade modal-super-scaled" id="learn_lead_offer_ticket" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" style="font-size: 18px">Lean & Lead Is Approved</h3>
        </div>
        <div class="modal-body"><br>
          <div class="row">
            <div class="col-sm-6"><center><a href="https://www.oxiinc.com/customers/lean_lead_ticket" target="_blank" ><button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button></a></center></div>
            <div class="col-sm-6" id="qr_code"><center>
                          </center></div>
          </div>
           <!--    <p> <button type="button" class="btn btn-default btn-pure" >Close</button>  <button type="button" class="btn btn-default btn-pure" >Close</button>  </p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade modal-super-scaled" id="learn_lead_offer_amount_insufficient" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" style="font-size: 18px">Lean & Lead </h3>
        </div>
        <div class="modal-body"><br>
          <div class="row">
            <div class="col-sm-12"><center><p style="color: red;font-size: 16px;font-weight: 600">Sorry!! Amount is Insufficient</p></center></div>
            
          </div>
           <!--    <p> <button type="button" class="btn btn-default btn-pure" >Close</button>  <button type="button" class="btn btn-default btn-pure" >Close</button>  </p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


  <div class="modal fade modal-super-scaled" id="zona_wise_appproval" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
          <div class="row">
            <div class="col-sm-6"><center><a href="https://www.oxiinc.com/customers/Digital_champ_ticket" target="_blank" ><button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button></a></center></div>
            <div class="col-sm-6" id="qr_code"><center>
                          </center></div>
          </div>
           <!--    <p> <button type="button" class="btn btn-default btn-pure" >Close</button>  <button type="button" class="btn btn-default btn-pure" >Close</button>  </p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>



<div class="modal fade modal-super-scaled" id="go_goa_wise_appproval" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Go Goa Meet Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
          <div class="row">
            <div class="col-sm-6"><center><a href="https://www.oxiinc.com/customers/go_goa_ticket" target="_blank" ><button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button></a></center></div>
            <div class="col-sm-6" id="qr_code"><center>
                          </center></div>
          </div>
           <!--    <p> <button type="button" class="btn btn-default btn-pure" >Close</button>  <button type="button" class="btn btn-default btn-pure" >Close</button>  </p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade" id="zonal_head_request_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Zonal Head Request From (T&C)</h5>
       <button class="close close_box" style="top: 3PX !important;padding: 0px 38px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body" id="zonal_head_submit_form">
  <form  id="frmadminlogin_1" novalidate="true" method="post" onsubmit="return " autocomplete="on" style="display: none">
    <input type="hidden" name="user_id" id="user_id_zonal_head" value="19893">
    <input type="hidden" name="employee_id" id="employee_id_zonal_head" value="19910">
    <input type="hidden" name="username"  id="username_zonal_head" value="lata02vns">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Name</label>
      <input type="text" class="form-control" id="zonal_head_full_name" name="zonal_head_full_name" value="PUSHPLATAPANDEY" readonly required="">
      
    </div>
     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Email-id</label>
      <input type="text" class="form-control" id="zonal_head_email_id" name="zonal_head_email_id" value="lata02vns@gmail.com" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> contact Number</label>
      <input type="Number" class="form-control" id="zonal_head_contact_number" name="zonal_head_contact_number" value="9473528832" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Pan No</label>
      <input type="email" class="form-control" id="zonal_head_pan_no" name="zonal_head_pan_no" value="BNXPP2834G" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Adhaar No</label>
      <input type="text" class="form-control" id="zonal_head_adhaar_no" name="zonal_head_adhaar_no" value="852643704794" readonly >
    </div>
<div class="form-group">
  <label for="exampleInputEmail1" class="ddc"> User Name</label>
  <input type="text" class="form-control" id="zonal_head_user_name" name="zonal_head_user_name" value="lata02vns" readonly='' readonly>

</div>
 <div class="form-group">
    <label for="inputState" class="ddc">Select Number of Panels</label>
    <select id="No_of_panel_zonal_head" class="form-control" required="" name="No_of_panel">
      <option value="">Choose...</option>
      <option value="10000">10,000</option>
    </select>
    <span style="color: red;display: none" id="No_of_panel_danger_zonal_head"><strong>Sorry!</strong> Please Select Number of Panels</span>
   
    </div>
    <div class="form-group">
  <label for="exampleInputEmail1" class="ddc">Remark's (optional)</label>
  <input type="text" class="form-control" id="zonal_head_remark" name="zonal_head_remark" >

</div>
    <div class="form-check ddc">
    <input type="checkbox" name="T&C" id="T_C_zonal_head" class="form-check-input"  required="">
    <label class="form-check-label " style="color: black" for="exampleCheck1">I Accept all the terms and conditions</label><br><span style="color: red;display: none" id="T_C_zonal_head_danger">Sorry! Please Select Team and Conditions</span>
    </div>
    <br>
        <center><br><button type="button" id="zonal_head_subnit_form" onclick="zonal_head_submit_form()" class="btn btn-primary">Submit</button></center>
      </form>
<style type="text/css">
  @media only screen and (max-width: 768px){
    #gogoa {
         margin-top: 10px;
    }
    }
</style>


  <div class="row" id="advertisement_zonal_head">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-6">
        <center> <img src="https://www.oxiinc.com/assets/img/333.png" class="img-responsive" style="width: 100%"></center> 
      </div>
      <div class="col-sm-6" id="gogoa">
        <center>   <img src="https://www.oxiinc.com/assets/img/thayland222.jpg" class="img-responsive" style="width: 100%"></center> 
      </div>
    </div>
   
  </div>
  <div class="col-sm-12"><br><br>
    <p style="color:black">
     <b> Dear E-PANELIST & DDC (Digital Delivery Centre).</b><br><br>

 <b>❗❗Chance to become a Champion❗❗</b> <br><br>

 <b>It's the time to change your lifestyle with OXIINC GROUP Digital Revolutionary offers!!! <br><br>
 Bumper Chance To Achieve!!!.</b><br><br>


👉 Sabhi <b> E-Panelist </b> ke liye sunehra mauka, <b>Champions</b> me samil hone ka or Achive karne wale E-Panelist ko milega <b>Variable pay income</b> for one year. Unke team ke account <b>EPD</b> renewal pe adhik jankari ke liye niche diyegye details ko padhe.👇<br><br>


👉 <b>"Champions Program Designation Benefits and Nomination fees".*</b> <br>

 1) <b>-Zonal Head  -</b> RP. 12000/- fees*.<br>

 2) <b>-Territory Head -</b> RP. 6000/- fees*.<br>

 3) <b>-Digital Manager -</b> RP. 3000/- fees*.<br><br>


👉 <b>Zonal Head :- </b><br><br>

 1. <b>Champions</b> tab click karne ke bad <b>Zonal Head</b> tab me nomination karna hai or verify hone k baad company approve karegi. <b>Zonal Head</b> approvel milne ke bad aap apne team se <b>Territory Head</b> ka Nomination kar payenge.<br>

 2. Target <b>10,000/- Panels</b> from the nominated <b>Zonal Head</b>.*<br>

 3. Minimum <b>10 Territory Head</b> nomination mandatory*.
<br><br>

👉 <b>Territory Head :-</b> <br><br>

 1. <b>Territory Head</b> ka nomination <b>Zonal Head ke dwara kiya jayega Territory Head Champions</b> tab pe click karne ke bad apne account se nomination ko accept karenge.<br>

 2. <b>Target 1000/- Panels each</b> from the nominated <b>Territory Head</b>.*<br> 

3. Minimum <b>10 Digital Manager</b> nomination mandatory*.<br><br>


👉 <b>Digital Manager :-</b> <br><br>

 <b>Territory Head</b> ke dwara <b>Digital Manager</b> ko nomination kiya jayega <b>Digital Manager</b> ko apne account me <b>Champions</b> tab pe click karne ke bad apne account se <b>nomination</b> ko accept karna hoga.<br><br>

🤝 Target <b>100/- Panels each</b> with reference confirmation by the <b>E-Panelist</b>.*<br><br>


👉 <b>"Champions Program Benefits"</b> <br><br>

👉 <b>Thailand Tour for 3 Nights 4 Days,</b> minimum <b>30 Zonal Head</b> nomination is compulsory*.<br>

👉 <b>This Offer is only for the Zonal Head and Territory Manager.</b><br>

👉 <b>Fully Sponsored Invitation</b> in company's <b>Annual day program on 25th March 2020 in Goa</b>.* <br>

👉 <b>RNR Celebration</b> on 25th March 2020*.<br>

👉 <b>Roles & profits</b> in E-Panelist Association*.<br>

👉 <b>Opportunity</b> to lead on State or Company Level*.<br>

👉 <b>Company Representative</b> Visiting Card, ID Card, Dairy & Certification will be given*.<br>

👉 <b>Variable pay income</b> On Team account renewal*.<br>

👉 <b>DTS Reimbursement</b> for Training Program*.<br><br>


👉 <b>"Terms and Conditions Apply"</b><br> <br>

👉 <b>The benefits of champions program are valid for 24 months.* <br>

👉 E-Panelist can achieve all rewards as per the given schedule.* <br>

👉 In no case, whatsoever, the award amount can not be refunded, encashed or partly encashed.* <br>

👉Only paid E-Panelist of denso panel are calculated.* <br>

 👉 Sub panels are not applicable for this program.* <br>

👉 Cannot be clubbed with any other E-Panelist account.* <br>

👉 Company can terminate or modify the award anytime without prior notice.* 
<br>
👉 In the event of any misuse or abuse of the award by the E-Panelist, the company can reserves rights to deny offer & cancel the award.* <br>

👉 If found the E-Panelist is not deserving company reserves the right to deny the offer & cancel the award.* <br>

👉 Company reserves the right, at any time, without prior notice & liability & without assigning any reason whatsoever, to change / modify / add / delete or vary all of these terms & conditions or to replace, wholly or in part, this award by another offer, whether similar to this offer or not, or to extend or withdraw it altogether.* <br><br>


👉 🕺 All can achieve till 20th March 2020 (1st January 2020 to 20th March 2020).* <br><br>


 Feel free to communicate with your helpline for further details.* <br><br>

 Taiyari Jeet ki !!!* <br><br>

 Team <br>
 Oxiinc Group Mumbai <br>
 Customer Service Number 022-68732700<br></b>
    </p><br>
    <p style="color: red;font-weight: 600">Note - Click below button for Zonal Head application form... </p>

    <!-- <center><p>   <button type="button" class="btn btn-primary" onclick="zonal_head_request_model_showtest();" >Sorry!! Date is over</button> </p></center> -->


    <center><p>   <button type="button" class="btn btn-primary" onclick="zonal_head_request_model_show();" >Submit</button> </p></center>

  </div>
  </div>

  </div>
    <!-- <div class="modal-footer" style="background-color: #3E4095">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
  </div>
</div>
</div>

<div class="modal fade" id="zonal_head_pending_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Zonal Head Request From is Pending (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your Zonal Head Request Form is Pending</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="zonal_head_rejected_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Zonal Head Request From is Rejected (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your Zonal Head Request Form is Rejected</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="shareholder_champions_not_allow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Champions (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry!</strong> You already Appointed as a shareholder</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="zonal_head_winner_champions_not_allow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Champions (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry!</strong> You already Winner as a Zonal Head</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="leader_winner_champions_not_allow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Champions (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry!</strong> You already Winner as a Territory Head</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="proposer_winner_champions_not_allow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Champions (T&C)</h5>
       <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry!</strong> You already Winner as a Digital Manager</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>



<div class="modal fade modal-super-scaled" id="zona_wise_merage" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>



        <div class="row" id="hide_merage_div">
          <div class="col-sm-12" id="merage_id">
            <div class="row">
              <div class="col-sm-6">
                <center>
                  
                  <button type="button" class="btn btn-primary" onclick="hide_merage_div();" style="width: 50%" > Merge </button>
                </center>
              </div>
              <div class="col-sm-6" id="qr_code">
                <center>
                  <button type="button" class="btn btn-primary" onclick="skip_merage_id();" style="width: 50%" > Skip </button>
                </center>
              </div>
            </div>
          </div>
          <div class="col-sm-12" id="skip_merage_id" style="display:none; ">
            <div class="row">
              <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/Digital_champ_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6" id="qr_code"><center>
                          </center></div>
            </div>
          </div>
        </div>

        <div class="row" id="show_merage_div" style="display: none">
          <div class="col-sm-12" >
            <div class="row">
              <div class="col-sm-12">
                <form action="https://www.oxiinc.com/customers/merage_username_ticket" method="post">
                  <input type="hidden" name="merage_employee_id" id="merage_employee_id" required="">
                  <label>Enter Username</label>
                  <input type="text" name="username" class="form-control merage_username" required="">
                  <label>Full Name</label>
                  <input type="text" name="fullname" class="form-control" id="merage_fullname" required="" readonly="">
                  <br><button type="submit" class="btn btn-primary">submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>

<div class="payout_otp_form" >
  <div class="modal fade" id="otp_ddc_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
    <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header" style="background-color: #3E4095">
      <h4 style="text-align: center;margin-top: 10px;color: white;">Enter OTP verify your D.D.C</h4>
      <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
      
    <div class="modal-body" style="">
      <div class="row" style="margin-top: 15px;">
      <div class="col-sm-9">
          <div class="form-group">
              <input type="text" class="form-control" id="otp_epanelist_ddc" name="otp_epanelist" placeholder="Enter Your OTP " style="border:2px solid #3E4095" required="">
              <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_ddc" class="otp_error_mess">Please enter valid OTP.</span>
          </div>
      </div>
      <div class="lastInsertId">
        <input type="hidden" value="" id="lastInsertId_ddc">
      </div>
      <div class="col-sm-3">
          <button type="submit" onclick="checkotp_ddc123123('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
      </div>
      </div>
    </div>
    <div class="modal-footer" style="background-color: #3E4095"></div>
  </div>
  </div>
  </div>
</div>


<div class="payout_otp_form" >
  <div class="modal fade" id="otp_bank_withdrawl" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
    <div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header" style="background-color: #3E4095">
       <h4 style="text-align: center;margin-top: 10px;color: white;">Enter OTP verify your Payout Request.</h4>
      <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
     
    <div class="modal-body" style="">
      <div class="row" style="margin-top: 15px;">
      <div class="col-sm-9">
          <div class="form-group">
              <input type="text" class="form-control" id="otp_epanelist_bank" name="otp_epanelist" placeholder="Enter Your OTP " style="border:2px solid #3E4095" required="">
              <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_bank" class="otp_error_mess">Please enter valid OTP.</span>
          </div>
      </div>
      <div class="lastInsertId">
        <input type="hidden" value="" id="lastInsertId_bank">
      </div>
      <div class="col-sm-3">
          <button type="submit" onclick="checkotp_bank_withdrawl('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
      </div>
      </div>
    </div>
    <div class="modal-footer" style="background-color: #3E4095"></div>
  </div>
  </div>
  </div>
</div>
<!-- payouy End -->


<!-- //@ popup start ddc request from -->
<div class="modal fade" id="exampleMcascodalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Online Sewa Request From (T&C)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" id="ddc_model_form">
  <form method="post" action="main">
    <div class="alert alert-success alert-dismissible" id="SUCESS" style="display: none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Work Title</label>
      <input type="text" class="form-control" name="work_title" required="">
    </div>

     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Work Detail</label>
      <textarea class="form-control" name="work_detail" required="">
      </textarea>

    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">Work Type</label>
      <input type="text" class="form-control" name="work_type" required="">
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Work Purpose</label>
      <input type="text" class="form-control" name="work_purpose" required="">
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">GST no(Optional)</label>
      <input type="text" class="form-control" id="gst_ddc" name="company_gst" >
    </div>
<div class="form-group">
  <label for="exampleInputEmail1" class="ddc">Name</label>
  <input type="text" class="form-control" name="full_name" value="<?php echo $fname; ?> <?php echo $lname; ?>" readonly=''>

</div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="ddc">UserName</label>
  <input type="text" class="form-control" name="sewa_eid" value="<?php echo $eid; ?>" readonly=''>
 
</div>
<div class="form-group">
  <label for="exampleInputPassword1" class="ddc">Email-ID</label>
  <input type="text" class="form-control" name="email_id" value="<?php echo $email; ?>" readonly=''>
</div>
<div class="form-group">
  <label for="exampleInputPassword1" class="ddc">Contact Number</label>
  <input type="text" class="form-control" name="contact_no" value="<?php echo $phone; ?>" readonly=''>
</div>
 <div class="form-group">
    <label for="inputState" class="ddc">Initial Amount</label>
    <select class="form-control" required="" name="initial_amount">
      <option value="">Choose...</option>
      <option value="10">₹ 10</option>
      <option value="100">₹ 1 hundred</option>
      <option value="150 lakh">₹ 1 hundred fifty</option>
      <option value="15000">₹ 15K</option>
      <option value="20000">₹ 20K</option>
    </select>
    <span style="color: red;display: none" id="initial_business_amount_danger"><strong>Sorry!</strong> Please Select Initial Amount</span>
   
    </div>
    <div class="form-check ddc">
    <input type="checkbox" name="terms" class="form-check-input" value="agree" required="">
    <label class="form-check-label" style="color: black" for="exampleCheck1">i accept all the terms and conditions</label>
    </div>
    <br>
        <center><br><button type="submit" class="btn btn-primary" name="submit_sewa">Submit</button></center>
      </form>
  </div>
    <div class="modal-footer" style="background-color: #3E4095">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
  </div>
</div>
</div>
<!--==============================================================================================-->
<?php 
  if (isset($_POST['submit_sewa'])) {
    $work_title = $_POST['work_title'];
    $work_detail = $_POST['work_detail'];
    $work_type = $_POST['work_type'];
    $work_purpose = $_POST['work_purpose'];
    $full_name = $_POST['full_name'];
    $sewa_eid = $_POST['sewa_eid'];
    $email_id = $_POST['email_id'];
    $contact_no = $_POST['contact_no'];
    $initial_amount = $_POST['initial_amount'];
    $terms = $_POST['terms'];
    $time_stamp = $ydate;

$query = "INSERT INTO online_seva(work_title,work_detail,work_type,work_purpose,full_name,eid,email_id,contact_no,initial_amount,terms,time_stamp) VALUES ('$work_title','$work_detail','$work_type','$work_purpose','$full_name','$sewa_eid','$email_id','$contact_no','$initial_amount','$terms','$time_stamp')";
$query_check = mysqli_query($conn,$query);
if ($query_check) {
  //echo '<script></script>';
   echo '<script>
var a = "Your Request Successfully Inserted!!";
document.getElementById("SUCESS").innerHTML = a ;
</script>';
} else {
   echo '<script>location.href="main"</script>';
}
          
           exit();
    }
?>

<!--=================================================================================================-->


<div class="modal fade" id="pendingMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">D.D.C Request From Pending (T&C)</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <p style="color:red;font-size:20px"><strong>Sorry</strong> Your D.D.C Request Form is Already in Pending</p>
    </div>
    <div class="modal-footer" style="background-color: #3E4095">
    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="rejectMOdel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #3E4095">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">D.D.C Request From Rejected </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:red;font-size:20px"><strong></strong></p>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">
      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        <a href="https://www.oxiinc.com/customers/Rejected_request_again_ddc">
          <button type="button" class="btn btn-primary">Send Request Again</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="block_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header"  style="background-color: #3E4095">
        <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">D.D.C Block</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <p style="color:red;font-size:20px"><strong></strong></p>
      </div>
      <div class="modal-footer" style="background-color: #3E4095">

      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-super-scaled" id="zona_wise_appproval" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
       <!--  <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
          <div class="row">
            <div class="col-sm-6"><center><a href="https://www.oxiinc.com/customers/Digital_champ_ticket" target="_blank" ><button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button></a></center></div>
            <div class="col-sm-6" id="qr_code"><center>
                          </center></div>
          </div>
           <!--    <p> <button type="button" class="btn btn-default btn-pure" >Close</button>  <button type="button" class="btn btn-default btn-pure" >Close</button>  </p> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade modal-super-scaled" id="zona_wise_merage_approval_pending" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
        <div class="row">

          <div class="col-sm-12" id="merage_id_12">
            <div class="row">
              <div class="col-sm-12">
                <center>
                  <P>Sorry! Merage User Is not approved your request application</P>
                </center>
              </div><br>
              <div class="col-sm-12">
                <center>
                  <button type="button" class="btn btn-primary" onclick="skip_merage_id_2();" style="width: 50%" > Skip </button>
                </center>
              </div>
            </div>
          </div>

        <div class="col-sm-12" id="skip_merage_id_2" style="display:none; ">
          <div class="row">
            <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/Digital_champ_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6"><center>
                          </center>
          </div>
        </div>
      </div>

        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade modal-super-scaled" id="zona_wise_merage_request_pending" aria-hidden="true" aria-labelledby="exampleModalTitle" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-simple">
    <div class="modal-content">
        <div class="modal-header">
        <!-- <button type="button" class="close modal_closs_oxiinc" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px" ></span>
        </button> -->
          <h3 class="modal-title" style="font-size: 18px">Zone Wise Training Program Is Approved</h3>
        </div>
        <div class="modal-body"><br>
        <div class="row">

          <div class="col-sm-12" id="merage_id_request">
            <div class="row">
              <div class="col-sm-12">
                <center>
                  <P>The  was send request for merage a ticket</P>
                </center>
              </div><br>
              <div class="col-sm-6">
                <center>
                  <button type="button" class="btn btn-primary" onclick="approved_request_merage();" style="width: 50%;background-color: green" > Approved </button>
                </center>
              </div>
              <div class="col-sm-6">
                <center>
                  <button type="button" class="btn btn-primary" onclick="rejected_request_merage();" style="width: 50%;background-color: red" > Rejected </button>
                </center>
              </div>
            </div>
          </div>

        <div class="col-sm-12" id="skip_merage_id_request" style="display:none; ">
          <div class="row">
            <div class="col-sm-6">
              <center>
                <a href="https://www.oxiinc.com/customers/Digital_champ_ticket" target="_blank" >
                  <button type="button" class="btn btn-primary" style="width: 50%" > Ticket </button>
                </a>
              </center>
            </div>
            <div class="col-sm-6"><center>
                          </center>
          </div>
        </div>
      </div>

        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Close</button>
        
        </div>
      </div>
  </div>
</div>


<div class="modal fade" id="digital_manager_request_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Digital Manager Request From (T&C)</h5>
       <button class="close close_box" style="top: 3PX !important;padding: 0px 38px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body" id="digital_manager_submit_form">
  <form  id="frmadminlogin_2" novalidate="true" method="post" onsubmit="return " autocomplete="on" style="display: none">
    <input type="hidden" name="user_id" id="user_id_digital_manager" value="19893">
    <input type="hidden" name="employee_id" id="employee_id_digital_manager" value="19910">
    <input type="hidden" name="username"  id="username_digital_manager" value="lata02vns">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Name</label>
      <input type="text" class="form-control" id="digital_manager_full_name" name="digital_manager_full_name" value="PUSHPLATAPANDEY" readonly required="">
      
    </div>
     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Email-id</label>
      <input type="text" class="form-control" id="digital_manager_email_id" name="digital_manager_email_id" value="lata02vns@gmail.com" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> contact Number</label>
      <input type="Number" class="form-control" id="digital_manager_contact_number" name="digital_manager_contact_number" value="9473528832" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Pan No</label>
      <input type="email" class="form-control" id="digital_manager_pan_no" name="digital_manager_pan_no" value="BNXPP2834G" readonly required="">
      
    </div>
    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc"> Adhaar No</label>
      <input type="text" class="form-control" id="digital_manager_adhaar_no" name="digital_manager_adhaar_no" value="852643704794" readonly >
    </div>
<div class="form-group">
  <label for="exampleInputEmail1" class="ddc"> User Name</label>
  <input type="text" class="form-control" id="digital_manager_user_name" name="digital_manager_user_name" value="lata02vns" readonly='' readonly>

</div>
 <div class="form-group">
    <label for="inputState" class="ddc">Select Number of Panels</label>
    <select id="No_of_panel_digital_manager" class="form-control" required="" name="No_of_panel">
      <option value="">Choose...</option>
      <option value="100">100</option>
    </select>
    <span style="color: red;display: none" id="No_of_panel_danger_digital_manager"><strong>Sorry!</strong> Please Select Number of Panels</span>
   
    </div>
    <div class="form-group">
  <label for="exampleInputEmail1" class="ddc">Remark's (optional)</label>
  <input type="text" class="form-control" id="digital_manager_remark" name="digital_manager_remark" >

</div>
    <div class="form-check ddc">
    <input type="checkbox" name="T&C" id="T_C_digital_manager" class="form-check-input"  required="">
    <label class="form-check-label " style="color: black" for="exampleCheck1">I Accept all the terms and conditions</label><br><span style="color: red;display: none" id="T_C_digital_manager_danger">Sorry! Please Select Team and Conditions</span>
    </div>
    <br>
        <center><br><button type="button" id="digital_manager_subnit_form" onclick="digital_manager_submit_form()" class="btn btn-primary">Submit</button></center>
      </form>
<style type="text/css">
  @media only screen and (max-width: 768px){
    #gogoa {
         margin-top: 10px;
    }
    }
</style>
  <div class="row" id="advertisement_digital_manager">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-6">
        <center> <img src="https://www.oxiinc.com/assets/img/333.png" class="img-responsive" style="width: 100%"></center> 
      </div>
      <div class="col-sm-6" id="gogoa">
        <center>   <img src="https://www.oxiinc.com/assets/img/thayland222.jpg" class="img-responsive" style="width: 100%"></center> 
      </div>
    </div>
  </div>
  <div class="col-sm-12"><br><br>
    <p style="color:black">
     <b> Dear E-PANELIST & DDC (Digital Delivery Centre).</b><br><br>
 <b>❗❗Chance to become a Champion❗❗</b> <br><br>
 <b>It's the time to change your lifestyle with OXIINC GROUP Digital Revolutionary offers!!! <br><br>
 Bumper Chance To Achieve!!!.</b><br><br>
👉 Sabhi <b> E-Panelist </b> ke liye sunehra mauka, <b>Champions</b> me samil hone ka or Achive karne wale E-Panelist ko milega <b>Variable pay income</b> for one year. Unke team ke account <b>EPD</b> renewal pe adhik jankari ke liye niche diyegye details ko padhe.👇<br><br>
👉 <b>"Champions Program Designation Benefits and Nomination fees".*</b> <br>
 1) <b>-Zonal Head  -</b> RP. 12000/- fees*.<br>
 2) <b>-Territory Head -</b> RP. 6000/- fees*.<br>
 3) <b>-Digital Manager -</b> RP. 3000/- fees*.<br><br>
👉 <b>Zonal Head :- </b><br><br>
 1. <b>Champions</b> tab click karne ke bad <b>Zonal Head</b> tab me nomination karna hai or verify hone k baad company approve karegi. <b>Zonal Head</b> approvel milne ke bad aap apne team se <b>Territory Head</b> ka Nomination kar payenge.<br>
 2. Target <b>10,000/- Panels</b> from the nominated <b>Zonal Head</b>.*<br>
 3. Minimum <b>10 Territory Head</b> nomination mandatory*.
<br><br>
👉 <b>Territory Head :-</b> <br><br>
 1. <b>Territory Head</b> ka nomination <b>Zonal Head ke dwara kiya jayega Territory Head Champions</b> tab pe click karne ke bad apne account se nomination ko accept karenge.<br>
 2. <b>Target 1000/- Panels each</b> from the nominated <b>Territory Head</b>.*<br> 
3. Minimum <b>10 Digital Manager</b> nomination mandatory*.<br><br>
👉 <b>Digital Manager :-</b> <br><br>
 <b>Territory Head</b> ke dwara <b>Digital Manager</b> ko nomination kiya jayega <b>Digital Manager</b> ko apne account me <b>Champions</b> tab pe click karne ke bad apne account se <b>nomination</b> ko accept karna hoga.<br><br>
🤝 Target <b>100/- Panels each</b> with reference confirmation by the <b>E-Panelist</b>.*<br><br>
👉 <b>"Champions Program Benefits"</b> <br><br>
👉 <b>Thailand Tour for 3 Nights 4 Days,</b> minimum <b>30 Zonal Head</b> nomination is compulsory*.<br>
👉 <b>This Offer is only for the Zonal Head and Territory Manager.</b><br>
👉 <b>Fully Sponsored Invitation</b> in company's <b>Annual day program on 25th March 2020 in Goa</b>.* <br>
👉 <b>RNR Celebration</b> on 25th March 2020*.<br>
👉 <b>Roles & profits</b> in E-Panelist Association*.<br>
👉 <b>Opportunity</b> to lead on State or Company Level*.<br>
👉 <b>Company Representative</b> Visiting Card, ID Card, Dairy & Certification will be given*.<br>
👉 <b>Variable pay income</b> On Team account renewal*.<br>
👉 <b>DTS Reimbursement</b> for Training Program*.<br><br>
👉 <b>"Terms and Conditions Apply"</b><br> <br>
👉 <b>The benefits of champions program are valid for 24 months.* <br>
👉 E-Panelist can achieve all rewards as per the given schedule.* <br>
👉 In no case, whatsoever, the award amount can not be refunded, encashed or partly encashed.* <br>
👉Only paid E-Panelist of denso panel are calculated.* <br>
 👉 Sub panels are not applicable for this program.* <br>
👉 Cannot be clubbed with any other E-Panelist account.* <br>
👉 Company can terminate or modify the award anytime without prior notice.* 
<br>
👉 In the event of any misuse or abuse of the award by the E-Panelist, the company can reserves rights to deny offer & cancel the award.* <br>
👉 If found the E-Panelist is not deserving company reserves the right to deny the offer & cancel the award.* <br>
👉 Company reserves the right, at any time, without prior notice & liability & without assigning any reason whatsoever, to change / modify / add / delete or vary all of these terms & conditions or to replace, wholly or in part, this award by another offer, whether similar to this offer or not, or to extend or withdraw it altogether.* <br><br>
👉 🕺 All can achieve till 20th March 2020 (1st January 2020 to 20th March 2020).* <br><br>
 Feel free to communicate with your helpline for further details.* <br><br>
 Taiyari Jeet ki !!!* <br><br>
 Team <br>
 Oxiinc Group Mumbai <br>
 Customer Service Number 022-68732700<br></b>
    </p><br>
    <p style="color: red;font-weight: 600">Note - Click below button for Zonal Head application form... </p>
    <center>
      <!-- <p> 
      <button type="button" class="btn btn-primary" onclick="digital_manager_request_model_showtest();" >Sorry!! Date is over</button> 
      </p> -->
        <p> 
      <button type="button" class="btn btn-primary" onclick="digital_manager_request_model_show();" >Submit</button> 
      </p>
  </center>
  </div>
  </div>

  </div>
  </div>
</div>
</div>





  




<script type="text/javascript">
    function digital_manager_request_model_show() {
    $('#frmadminlogin_2').css('display','block'); 
    $('#advertisement_digital_manager').css('display','none'); 
  }

  function disaster_show_exit() {
    $('#disaster_from_exit').css('display','block'); 
    $('#disaster_info_exit').css('display','none'); 
  }

    function digital_manager_submit_form() {
    var hasError=0;
    var user_id= '2';
    var employee_id= '1';
    var proposer_username= jQuery("#username_digital_manager").val();
    var proposer_fullname = jQuery("#digital_manager_full_name").val();
    var proposer_mobile = jQuery("#digital_manager_contact_number").val();
    var proposer_email_id = jQuery("#digital_manager_email_id").val();
    var leader_username = 'oxiinctop';
    var No_of_panel= jQuery("#No_of_panel_digital_manager").val();
    var digital_manager_remark= jQuery("#digital_manager_remark").val();
    var T_C_digital_manager= jQuery("#T_C_zonal_head").val();

    if (No_of_panel=='') {
       $('#No_of_panel_danger_digital_manager').css('display','block');
      return false;
    }
    if (No_of_panel!='') {
       $('#No_of_panel_danger_digital_manager').css('display','none');
    }



    if(!$('#T_C_digital_manager:checkbox:checked').length > 0){
          $('#T_C_digital_manager_danger').css('display','block');
      return false;
       }
    if($('#T_C_digital_manager:checkbox:checked').length > 0){
          $('#T_C_digital_manager_danger').css('display','none');
       }   
       // $("#digital_manager_subnit_form").hide();
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.proposer_username = jQuery("#username_digital_manager").val();
        account.forget.proposer_fullname = jQuery("#digital_manager_full_name").val();
        account.forget.proposer_mobile = jQuery("#digital_manager_contact_number").val();
        account.forget.proposer_email_id = jQuery("#digital_manager_email_id").val();
        account.forget.No_of_panel_digital_manager = jQuery("#No_of_panel_digital_manager").val();
        account.forget.digital_manager_remark = jQuery("#digital_manager_remark").val();
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/add_digital_manager_submit_form",
            data: {'jsonObj' : q},
            cache: false,
            // beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin_2').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin_2').reset();  
                }else if(res.status=='3')
                {
                  jQuery("#digital_manager_submit_form").html("");
                  jQuery("#digital_manager_submit_form").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.alert-success').css('display','none'); 
                    jQuery(ele).find('.alert-danger').css('display','block').html(res.msg); 
                }
            }
        });



    }
    return false;
           }
</script>
<script type="text/javascript">
           function zonal_head_submit_form() {
            
            
    var hasError=0;
    
    var user_id_Champion= jQuery("#user_id_zonal_head").val();
    var employee_id_Champion= jQuery("#employee_id_zonal_head").val();
    var username_Champion= jQuery("#username_zonal_head").val();

    var leader_full_name = jQuery("#zonal_head_full_name").val();
    var leader_email_id = jQuery("#zonal_head_email_id").val();
    var leader_contact_number = jQuery("#zonal_head_contact_number").val();
    var leader_pan_no = jQuery("#zonal_head_pan_no").val();
    var leader_adhaar_no = jQuery("#zonal_head_adhaar_no").val();

    var leader_user_name= jQuery("#zonal_head_user_name").val();
    var No_of_panel= jQuery("#No_of_panel_zonal_head").val();
    var leader_remark= jQuery("#zonal_head_remark").val();
    var T_C_leader= jQuery("#T_C_zonal_head").val();

    if (No_of_panel=='') {
       $('#No_of_panel_danger_zonal_head').css('display','block');
      return false;
    }
    if (No_of_panel!='') {
       $('#No_of_panel_danger_zonal_head').css('display','none');
    }



    if(!$('#T_C_zonal_head:checkbox:checked').length > 0){
          $('#T_C_zonal_head_danger').css('display','block');
      return false;
       }
    if($('#T_C_zonal_head:checkbox:checked').length > 0){
          $('#T_C_zonal_head_danger').css('display','none');
       }   
       $("#zonal_head_subnit_form").hide();
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.user_id = jQuery("#user_id_zonal_head").val();
        account.forget.employee_id = jQuery("#employee_id_zonal_head").val();
        account.forget.username = jQuery("#username_zonal_head").val();

        account.forget.zonal_head_full_name = jQuery("#zonal_head_full_name").val();
        account.forget.zonal_head_email_id = jQuery("#zonal_head_email_id").val();
        account.forget.zonal_head_contact_number = jQuery("#zonal_head_contact_number").val();
        account.forget.zonal_head_pan_no = jQuery("#zonal_head_pan_no").val();
        account.forget.zonal_head_adhaar_no = jQuery("#zonal_head_adhaar_no").val();

        account.forget.zonal_head_user_name = jQuery("#zonal_head_user_name").val();
        account.forget.No_of_panel_zonal_head = jQuery("#No_of_panel_zonal_head").val();
        account.forget.zonal_head_remark = jQuery("#zonal_head_remark").val();
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/add_zonal_head_submit_form",
            data: {'jsonObj' : q},
            cache: false,
            // beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin_1').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin_1').reset();  
                }else if(res.status=='3')
                {
                  jQuery("#zonal_head_submit_form").html("");
                  jQuery("#zonal_head_submit_form").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.alert-success').css('display','none'); 
                    jQuery(ele).find('.alert-danger').css('display','block').html(res.msg); 
                }
            }
        });



    }
    return false;
           }
</script>
<script type="text/javascript">
  $(document).ready(function(){

  });

    $(".merage_username").keyup(function() {
        $(this).val($(this).val().replace(/[_\W]+/g, "").toLowerCase());
    });

    $(document).on("blur", ".merage_username", function(){
        var username = $(this).val();
        var base_url = 'https://www.oxiinc.com/';
        if(username != "")
        {
            $.ajax({
                type: "POST",
                url: base_url+"subscriptions/get_username_based_customer_data_champ_digital",
                dataType: "json",
                data: {username : username, return : "no"},
                success:function(response) {
                    if(response.error != undefined && response.error == "0")
                    {
                        $("#merage_fullname").val(response.fullname);
                        $("#merage_employee_id").val(response.employee_id);
                    }else if (response.error != undefined && response.error == "1") {
                        alert("Sorry!! Your not Eligible");
                        $(".merage_username").val("");
                    }else if (response.error != undefined && response.error == "2") {
                      alert("Sorry! This User is not Eligible");
                        $(".merage_username").val("");
                    }else if (response.error != undefined && response.error == "3") {
                        alert("No User Found");
                        $(".merage_username").val("");
                    }
                    else
                    {
                        alert("No User Found");
                        $(".merage_username").val("");
                    }
                }
            });
        }
        else
        {
            alert("Please enter username");
        }
    });

             

                    
                </script>
<script type="text/javascript">
    function approved_request_merage() {
    var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/approved_request_merage",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_merage_id_request').css('display','block'); 
                    $('#merage_id_request').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }
  function rejected_request_merage() {
     var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/rejected_request_merage",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_merage_id_request').css('display','block'); 
                    $('#merage_id_request').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }

  function skip_merage_id_2() {
    var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/skip_merage_id_2",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_merage_id_2').css('display','block'); 
                    $('#merage_id_12').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }


  function skip_merage_id() {
     var hasError=0;
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.username = 'lata02vns';
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/skip_merage_id",
            data: {'jsonObj' : q},
            cache: false,
            success: function(res){
                if(res.status=='1'){ 
                    $('#skip_merage_id').css('display','block'); 
                    $('#merage_id').css('display','none'); 
                }
                else
                { 
                    alert('Try again');
                }
            }
        });



    }
    return false;
  }
  function hide_merage_div() {
    $('#show_merage_div').css('display','block'); 
    $('#hide_merage_div').css('display','none'); 
  }
  function lets_go_goa_model() {
    $('#lets_go_goa_model').modal('show');
  }
  function digital_manager_request_model() {
    $('#digital_manager_request_model').modal('show');
  }
  function not_elgiable_gogoa() {
   $('#not_elgiable_gogoa').modal('show');
  }
  function shareholder_champions_not_allow() {
    $('#shareholder_champions_not_allow').modal('show');
  }
  function zonal_head_winner_champions_not_allow() {
    $('#zonal_head_winner_champions_not_allow').modal('show');
  }
  function leader_winner_champions_not_allow() {
    $('#leader_winner_champions_not_allow').modal('show');
  }
  function proposer_winner_champions_not_allow() {
    $('#proposer_winner_champions_not_allow').modal('show');
  }
    function zonal_head_request_model_show() {
    $('#frmadminlogin_1').css('display','block'); 
    $('#advertisement_zonal_head').css('display','none'); 
  }
  function zonal_head_request_model() {
     $('#zonal_head_request_model').modal('show');
    }
    function zonal_head_pending_model() {
     $('#zonal_head_pending_model').modal('show');
   }
   function zonal_head_rejected_model() {
     $('#zonal_head_rejected_model').modal('show');
   }
           function Champions_open_model() {
             $('#Champions_open_model').modal('show');
           }
           function Champions_pending_model() {
             $('#Champions_pending_model').modal('show');
           }
           function Champions_reject_model() {
             $('#Champions_reject_model').modal('show');
           } 
           function leader_submit_form() {
            
            
    var hasError=0;
    
    var user_id_Champion= jQuery("#user_id_Champion").val();
    var employee_id_Champion= jQuery("#employee_id_Champion").val();
    var username_Champion= jQuery("#username_Champion").val();

    var leader_full_name = jQuery("#leader_full_name").val();
    var leader_email_id = jQuery("#leader_email_id").val();
    var leader_contact_number = jQuery("#leader_contact_number").val();
    var leader_pan_no = jQuery("#leader_pan_no").val();
    var leader_adhaar_no = jQuery("#leader_adhaar_no").val();

    var leader_user_name= jQuery("#leader_user_name").val();
    var No_of_panel= jQuery("#No_of_panel").val();
    var leader_remark= jQuery("#leader_remark").val();
    var T_C_leader= jQuery("#T_C_leader").val();

    if (No_of_panel=='') {
       $('#No_of_panel_danger').css('display','block');
      return false;
    }
    if (No_of_panel!='') {
       $('#No_of_panel_danger').css('display','none');
    }



    if(!$('#T_C_leader:checkbox:checked').length > 0){
          $('#T_C_leader_danger').css('display','block');
      return false;
       }
    if($('#T_C_leader:checkbox:checked').length > 0){
          $('#T_C_leader_danger').css('display','none');
       }   
       $("#leader_subnit_form").hide();
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.user_id = jQuery("#user_id_Champion").val();
        account.forget.employee_id = jQuery("#employee_id_Champion").val();
        account.forget.username = jQuery("#username_Champion").val();

        account.forget.leader_full_name = jQuery("#leader_full_name").val();
        account.forget.leader_email_id = jQuery("#leader_email_id").val();
        account.forget.leader_contact_number = jQuery("#leader_contact_number").val();
        account.forget.leader_pan_no = jQuery("#leader_pan_no").val();
        account.forget.leader_adhaar_no = jQuery("#leader_adhaar_no").val();

        account.forget.leader_user_name = jQuery("#leader_user_name").val();
        account.forget.No_of_panel = jQuery("#No_of_panel").val();
        account.forget.leader_remark = jQuery("#leader_remark").val();
        var q = JSON.stringify(account);
         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/add_leader_submit_form",
            data: {'jsonObj' : q},
            cache: false,
            // beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                }else if(res.status=='3')
                {
                  jQuery("#leader_submit_form").html("");
                  jQuery("#leader_submit_form").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.alert-success').css('display','none'); 
                    jQuery(ele).find('.alert-danger').css('display','block').html(res.msg); 
                }
            }
        });



    }
    return false;
           }
         </script>

         <script type="text/javascript">
  function denso_customer_only_apply_ddc_1() {
          $('#denso_customer_only_apply_ddc_1').css('display','block');
       
    alert('Only Denso E-Panelist Can Apply.');
      return false;
    
  }
  function ddc_request_form(ele){
    var hasError=0;
    
    var user_id= jQuery("#user_id").val();
    var employee_id= jQuery("#employee_id").val();
    var username= jQuery("#username").val();

    var company_name = jQuery("#company_name_ddc").val();
    var company_address = jQuery("#company_address_ddc").val();
    var company_no_ddc = jQuery("#company_no_ddc").val();
    var company_emailid = jQuery("#company_emailid_ddc").val();
    var company_gst = jQuery("#company_gst_ddc").val();

    var full_name= jQuery("#full_name").val();
    var UserName_1= jQuery("#UserName_1").val();
    var email_id= jQuery("#email_id").val();
    var contact_no= jQuery("#contact_no").val();
    var initial_business_amount= jQuery("#initial_business_amount").val();
    var T_C= jQuery("#T_C").val();
    if (company_name=='') {
       jQuery(ele).find('#company_name_ddc_danger').css('display','block');
      return false;
    }
    if (company_name!='') {
       jQuery(ele).find('#company_name_ddc_danger').css('display','none');
    }

    if (company_address=='') {
       jQuery(ele).find('#company_address_ddc_danger').css('display','block');
      return false;
    }
    if (company_address!='') {
       jQuery(ele).find('#company_address_ddc_danger').css('display','none');
    }

    if (company_no_ddc=='') {
       jQuery(ele).find('#company_no_ddc_danger').css('display','block');
      return false;
    }
    if (company_no_ddc!='') {
       jQuery(ele).find('#company_no_ddc_danger').css('display','none');
    }

    if (company_emailid=='') {
       jQuery(ele).find('#company_emailid_ddc_danger').css('display','block');
      return false;
    }
    if (company_emailid!='') {
       jQuery(ele).find('#company_emailid_ddc_danger').css('display','none');
    }

      if (initial_business_amount=='') {
        jQuery(ele).find('#initial_business_amount_danger').css('display','block');
        return false;
      }
      if (initial_business_amount!='') {
        jQuery(ele).find('#initial_business_amount_danger').css('display','none');
      }



    if(!$('#T_C:checkbox:checked').length > 0){
          jQuery(ele).find('#T_C_danger').css('display','block');
      return false;
       }
    if(!$('#T_C:checkbox:checked').length > 0){
          jQuery(ele).find('#T_C_danger').css('display','none');
       }   
    if(hasError==1){
        return false;
    }else{
        var account = {};
        account.forget = {};
        account.forget.user_id = jQuery("#user_id").val();
        account.forget.employee_id = jQuery("#employee_id").val();
        account.forget.username = jQuery("#username").val();

        account.forget.company_name = jQuery("#company_name_ddc").val();
        account.forget.company_address = jQuery("#company_address_ddc").val();
        account.forget.company_no_ddc = jQuery("#company_no_ddc").val();
        account.forget.company_emailid = jQuery("#company_emailid_ddc").val();
        account.forget.company_gst = jQuery("#company_gst_ddc").val();

        account.forget.full_name = jQuery("#full_name").val();
        account.forget.UserName_1 = jQuery("#UserName_1").val();
        account.forget.email_id = jQuery("#email_id").val();
        account.forget.contact_no = jQuery("#contact_no").val();
        account.forget.initial_business_amount = jQuery("#initial_business_amount").val();
        account.forget.T_C = jQuery("#T_C").val();
        var q = JSON.stringify(account);

         jQuery.ajax({
            dataType: 'json',
            type: "POST",
            url: "https://www.oxiinc.com/customers/add_ddc_request_form_2",
            data: {'jsonObj' : q},
            cache: false,
            beforeSend: function(){ jQuery(".btn-quirk").text('Validating ...').prop('disabled', true);},
            success: function(res){
                jQuery(".btn-quirk").text('Sign In').prop('disabled', false);
                if(res.status=='1' && res.level=='2'){ // Success
                    jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                    window.location.href="admin";
                }
                else if(res.status=='1')
                {
                   jQuery(ele).find('.alert-success').css('display','block').html(res.msg); 
                    jQuery(ele).find('.alert-danger').css('display','none'); 
                    document.getElementById('frmadminlogin').reset();  
                }else if(res.status=='3')
                {
                  jQuery("#ddc_model_form").html("");
                  jQuery("#ddc_model_form").html(res.msg);
                }else
                { // Failed
                    jQuery(ele).find('.alert-success').css('display','none'); 
                    jQuery(ele).find('.alert-danger').css('display','block').html(res.msg); 
                }
            }
        });



    }
    return false;
}
</script>

<div class="payout_otp_form" >
                              <div class="modal fade modal-newspaper" id="otp_personal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 1111111 !important;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #3E4095">
                                     <h4 style="text-align: center;margin-top: 10px;color: white;">Enter your One Time Security Code.</h4>
                                  <button class="close close_box" style="top: -13PX !important;padding: 0px 4px !important;" data-dismiss="modal" aria-label="Close"><img src="https://www.oxiinc.com/version2assets/assets/images/cross.png" width="30px"></button>
                                </div>
                                 
                                <div class="modal-body" style="">
                                  <div class="row" style="margin-top: 15px;">
                                  <div class="col-sm-9">
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="otp_epanelist_personal" name="otp_epanelist" placeholder="Enter Your OTP " style="border:2px solid #3E4095" required="">
                                          <span style="display:none;color:red;margin-top: 10px;" id="otp_error_mess_personal" class="otp_error_mess">Please enter valid OTP.</span>
                                      </div>
                                  </div>
                                  <div class="lastInsertId">
                                    <input type="hidden" value="" id="lastInsertId_personal">
                                  </div>
                                  <div class="col-sm-3">
                                      <button type="submit" onclick="checkotp_personal('19893','19910');" class="btn btn-default" style="background-color:#3E4095;border: 1px solid #3E4095;color: white;    width: 100%; "> SUBMIT</button>
                                  </div>
                                  </div>
                                </div>
                                <div class="modal-footer" style="background-color: #3E4095"></div>
                              </div>
                              </div>
                              </div>
                            </div>
                             <script type="text/javascript">
                              function checkotp_ddc123123(user_id,employee_id){
                                var lastInsertId = $('#lastInsertId_ddc').val();
                                var otp = $('#otp_epanelist_ddc').val();
                                var type='d';
                                $.ajax({
                                    url : 'https://www.oxiinc.com/customers/verify_payout_request_otp',
                                    data: {"type":type,"user_id":user_id,"employee_id": employee_id,"lastInsertId":lastInsertId,"otp":otp},
                                    type: "POST",
                                    success : function(response) {
                                      if(response == 1){
                                        window.location.href="";
                                      }else{
                                        $('#otp_error_mess_ddc').css('display','block');
                                      }
                                    },
                                    error : function() {
                                      alert("try again.");
                                      $('#otp_error_mess_ddc').css('display','block');
                                    }
                                  });    
                              }
                            </script>
                            
                             <script>
  function notification_popup(id){
    $.ajax({
            type: "POST",
            url: "https://www.oxiinc.com/newcustomerdashborad/getnotificationById",
            data: {'id':id},
            dataType: "json",
            success: function(result){
              $('#home_content').html(result['home_content']);
              $('#notification_content').html(result['content']);
              $('#exampleNiftyNewspaper').modal('show');
            }
          });
  }
  function share_linke($id){
    var position = $("#position").val();
    var sponsor_id = $("#sponsor_id").val();
    var link_href = 'https://www.oxiinc.com/customers/register?sponsor_id='+sponsor_id+'&position='+position;
    var base_url = 'https://www.oxiinc.com/';
    var subject = 'Reference Link';
    var number_ck = '9473528832';

     if(position != ''){
        
        if($id==1){
          var facebook_href = 'https://www.facebook.com/sharer.php?u='+encodeURIComponent(link_href);
          $('#facebookLink').attr('href', facebook_href).attr('target','_blank');
        }
        if($id==2){
          var twitter_href = 'https://twitter.com/share?url='+encodeURIComponent(link_href)+'&text='+subject;
          $('#twitterLink').attr('href', twitter_href).attr('target','_blank');
        }
        if($id==3){
          var linkedin_href = 'https://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(link_href)+'&title='+subject+'&summary=&source='+base_url;
          $('#linkedinLink').attr('href', linkedin_href).attr('target','_blank');
        }
        if($id==4){
          var email_href = 'mailto:?subject='+subject+'&amp;body='+encodeURIComponent(link_href);
          $('#emailLink').attr('href', email_href);

        }
        if($id==5){
          $('#Social_link_text').css('display','block');
          $('#oxiinc_link').val(link_href);

        }
        if ($id==6) {
          var facebook_href = 'https://api.whatsapp.com/send?phone='+number_ck+'&text='+encodeURIComponent(link_href);
          $('#whatsappLink').attr('href', facebook_href).attr('target','_blank');
        }
     }else{
      $('#Social_error').css('display','block');
     }
}
</script>
<script type="text/javascript">
    function ddc_open_from_model() {
     $('#exampleMcascodalCenter').modal('show');
    }
    function sa_open_from_model() {
     $('#sa_open_from_model').modal('show');
    }

    function sa_pending_from_model() {
     $('#sa_pending_from_model').modal('show');
    }
    function sa_rejected_from_model() {
     $('#sa_rejected_from_model').modal('show');
    }

    function ddc_pending_model() {
     $('#pendingMOdel').modal('show');
    }

    function ddc_rejected_model() {
     $('#rejectMOdel').modal('show');
    }

    function ddc_block_model() {
     $('#block_model').modal('show');
    }
     function otp_transaction_password() {
     $('#otp_transaction_password').modal('show');
    }
    function otp_transaction_password_offer() {
     $('#otp_transaction_password_offer').modal('show');
     return false;
    }
    function free_trail_model_fun() {
     $('#free_trail').modal('show');
    }
    function otp_personal_info() {
      $.ajax({
      url : 'https://www.oxiinc.com/customers/send_bank_withdrawl_otp?type=personal',
      success : function(response) {
      console.log(response);
      $('#otp_personal_info').modal('show');
      $('#lastInsertId_personal').attr('value',response);

      },
      error : function() {
      alert("try again.");
      }
      });
    }
</script>
 <script type="text/javascript">
  function otp_bank_withdrawl() {
    $.ajax({
    url : 'https://www.oxiinc.com/customers/send_bank_withdrawl_otp?type=payout',
    success : function(response) {
    console.log(response);
    $('#otp_bank_withdrawl').modal('show');
    $('#lastInsertId_bank').attr('value',response);

    },
    error : function() {
    alert("try again.");
    }
    });
  }
</script>
<script type="text/javascript">
  function otp_ddc_info() {
  $.ajax({
    url : 'https://www.oxiinc.com/customers/send_bank_withdrawl_otp?type=ddc',
    success : function(response) {
    console.log(response);
    $('#otp_ddc_info').modal('show');
    $('#lastInsertId_ddc').attr('value',response);

    },
    error : function() {
    alert("try again.");
    }
    });
  }
</script>

<!--====================================================script detail add======================================-->



                <script>
                var<?php
                include("dp.php");$get_batch_information = "SELECT * FROM payout WHERE eid='$eid'";$get_batch_information_query = mysqli_query($dbcon,$get_batch_information);while($rwo = mysqli_fetch_assoc($get_batch_information_query)){?>
                x<?php echo ($rwo['id'])?> = <?php echo ($rwo['payout'])?>;
              <?php } ?>
              var result = <?php
                include("dp.php");$get_batch_information = "SELECT * FROM payout WHERE eid='$eid'";$get_batch_information_query = mysqli_query($dbcon,$get_batch_information);while($rwo =mysqli_fetch_assoc($get_batch_information_query)){?>x<?php echo ($rwo['id'])?> + <?php }?>0;
                document.getElementById("user_payout").innerHTML = "₹" + result;
               </script>

 <script>var<?php
                include("dp.php");$get_batch_information = "SELECT * FROM earning WHERE eid='$eid'";$get_batch_information_query = mysqli_query($dbcon,$get_batch_information);while($rwo = mysqli_fetch_assoc($get_batch_information_query)){?>
                x<?php echo ($rwo['id'])?> = <?php echo ($rwo['earning'])?>;
              <?php } ?>
              var result = <?php
                include("dp.php");$get_batch_information = "SELECT * FROM earning WHERE eid='$eid'";$get_batch_information_query = mysqli_query($dbcon,$get_batch_information);while($rwo =mysqli_fetch_assoc($get_batch_information_query)){?>x<?php echo ($rwo['id'])?> + <?php }?>0;
                var final = Math.round(result*<?php echo $rate_doller; ?>*100)/100;
                document.getElementById("user_earning").innerHTML = "₹" + final;
               </script>

 <script>var<?php
                include("dp.php");$get_batch_information = "SELECT * FROM earning WHERE eid='$eid' and date_u = '$date'";$get_batch_information_query = mysqli_query($dbcon,$get_batch_information);while($rwo = mysqli_fetch_assoc($get_batch_information_query)){?>
                x = <?php echo ($rwo['earning'])?>;
              <?php } ?>
                var final = Math.round(x*<?php echo $rate_doller; ?>*100)/100;
                document.getElementById("today_earning").innerHTML = "₹" + final;
               </script>

<!--===============================================================================================================-->