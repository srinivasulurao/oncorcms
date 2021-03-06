<rn:meta title="Live Agent Chat" template="chat.php" clickstream="chat_request"/> <!-- Modified title= (tab when chat launches) - mwh 7/14/2015-->
<!-- <rn:meta title="#rn:msg:LIVE_CHAT_LBL#" template="chat.php" clickstream="chat_request"/> --> <!-- Original line 1 -->


<div id="rn_oncorlogo">
	<img src="/euf/assets/images/Oncor_2color_RGB.jpg" alt="Oncor" title="Oncor" width="185px"/>
</div>

<div id="rn_PageTitle" class="rn_LiveHelp">
    <h1>Live Agent Chat</h1>	<!-- Modified mwh 7/14/2015 -->
<!--   <h1>#rn:msg:LIVE_HELP_HDG#</h1> | Original line -->
</div>

<rn:widget path="custom/input/AnchorDisplayAskOncor" />

<div id="rn_PageContent" class="rn_Live">
    <div class="rn_Padding" >
        <div class="rn_ChatForm">
          <!--  <rn:widget path="chat/ChatLaunchFormOpen" label_form_header="Chat with a member of our AskOncor Team"/>--><!-- modified label_form_header mwh 7/14/2015 -->
<!--<rn:widget path="chat/ChatLaunchFormOpen" label_form_header="#rn:msg:CHAT_MEMBER_OUR_SUPPORT_TEAM_LBL#"/>-->
            <span class="rn_ChatLaunchFormHeader">Chat with a member of our AskOncor Team</span>
             <form id="rn_ChatLaunchForm" method="post" action="/app/chat/askoncor_chat_landing">
			 <br /><br /> 
            <div id="rn_ErrorLocation"></div>
                <!--<rn:widget path="custom/input/ContactNameInput" required="true" />-->
				<!-- rn:widget path="custom/input/ChatFormInput" name="contacts.first_name" required="true" default_value="" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.last_name" required="true" default_value="" />
                <rn:widget path="custom/input/ChatFormInput" name="contacts.email" required="true" default_value="" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.c$phone_number" required="true" default_value="" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.c$cr_affiliation" required="false" default_value="#rn:php:$afil#" disabled_bool="true" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_category" required="true" default_value="" />
				<rn:widget path="custom/input/ChatFormInput" label_input="Question" name="incidents.subject" required="true" />
				<div style = "display:none">
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_login" required="false" default_value="#rn:php:$id#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_fname" required="false" default_value="#rn:php:$fname#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_lname" required="false" default_value="#rn:php:$lname#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_email" required="false" default_value="#rn:php:$email#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$phone_number" required="false" default_value="#rn:php:$phone#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_timestamp" required="false" default_value="#rn:php:$date_ts#" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.login" required="false" default_value="#rn:php:$id#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$cr_affiliation" required="false" default_value="#rn:php:$afil#" disabled_bool="true" /-->
		 		   
				
				<rn:widget path="custom/input/ChatFormInput" name="contacts.first_name" required="true" label_input="First Name" default_value="#rn:php:$chat_fname#" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.last_name" required="true" label_input="Last Name" default_value="#rn:php:$chat_lname#" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.email" required="true" label_input="Email" default_value="#rn:php:$chat_email#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$phone_number" required="true" default_value="#rn:php:$phone_number#" />  <!--add between "" for default value #rn:php:$phone_number# -->
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$street_addr" required="false" />
				 <rn:widget path="custom/input/ChatFormInput" name="incidents.c$esi_id" required="false" always_show_mask="false" />
				 <rn:widget path="custom/input/ChatFormInput" label_input="Question" name="incidents.subject" required="true" />
			 	 
	 
				<!-- <rn:widget path="custom/input/ChatFormInput" name="contacts.c$cr_affiliation" required="false" default_value="#rn:php:$afil#" disabled_bool="true" />
				 <rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_category" required="true" default_value="" /> -->
				<div style = "display:none">
			  <rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_session" required="true" default_value="3155" />		 <!-- Update ID from Chat Session Incident Custom Field -->
        <!--<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_session" required="true" default_value="2946" />	-->					 	 	
				<!--<rn:widget path="custom/input/ChatFormInput" name="contacts.login" required="false" default_value="#rn:php:$id#" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.first_name" required="false" default_value="#rn:php:$fname#" />
				<rn:widget path="custom/input/ChatFormInput" name="contacts.last_name" required="false" default_value="#rn:php:$lname#" />
                                <rn:widget path="custom/input/ChatFormInput" name="contacts.email" required="false" default_value="#rn:php:$email#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_timestamp" required="false" default_value="#rn:php:$date_ts#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$contact_phone_number" required="false" default_value="#rn:php:$phone#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$chat_login" required="false" default_value="#rn:php:$id#" />
				<rn:widget path="custom/input/ChatFormInput" name="incidents.c$cr_affiliation" required="false" default_value="#rn:php:$afil#" disabled_bool="true" /> -->
				</div>
                <!-- optional fields -->
                <!--<rn:widget path="input/CustomAllInput" table="incidents" chat_visible_only="true" />-->
            <br />
            <rn:widget path="chat/ChatLaunchButton" error_location="rn_ErrorLocation" launch_height="625" label_button="Submit Request" />
            <br /><br />
            </form>
       </div>
       <rn:widget path="chat/ChatStatus"/>
       <rn:widget path="chat/ChatHours"/>
    </div>
</div>

