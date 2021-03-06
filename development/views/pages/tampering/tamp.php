<rn:meta title="Submit a Tampering Incident" template="oncor_tampandcutseal.php" clickstream="incident_create"  login_required="false" />

<div id="rn_PageTitle" class="rn_AskQuestion">
	<img src="images/logo_oncor.gif" /><h1>Tampering Incident</h1>
</div>
<div id="rn_PageContent" class="rn_Tampering rn_AskQuestion">
	<div class="rn_Padding">
		<form id="rn_QuestionSubmit" method="post" action="" onsubmit="return false;">
			<div id="rn_ErrorLocation"></div>
			<div class="rn_Hidden">
				<rn:widget path="input/PremiseSubject" name="Incident.Subject" required="true" default_value="Tampering - " />
				<rn:widget path="input/FormInput" name="Incident.Threads" default_value="Tampering Incident Submitted" />
			</div>
			<rn:condition logged_in="false">
				<div class="oncorTable">
					<h2>Contact Information</h2>
					<rn:widget path="input/FormInput" label_input="Email Address" name="Contact.Emails.PRIMARY.Address" required="true" initial_focus="true" />
					<div class="oncorColumn1">
						<rn:widget path="input/FormInput" name="Contact.Name.First" label_input="First Name" required="true" />
						<rn:widget path="input/FormInput" name="Contact.Name.Last" label_input="Last Name" required="true" />
						<rn:widget path="input/FormInput" name="Contact.CustomFields.c.racf_id" required="true" />
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/FormInput" name="Contact.CustomFields.c.job_title" required="true" />
						<rn:widget path="input/FormInput" name="Contact.CustomFields.c.district" required="true" />
					</div>
					<div class="oncorColumnClear"></div>
				</div>
			</rn:condition>

			<div class="oncorTable2">
				<h2>Premise Information</h2>
				<div class="oncorColumnA">

					<rn:widget path="input/PremiseNumber" name="Incident.CustomFields.c.premise" label_input="Premise" required="true" exact_length="7" numeric_only="true" always_show_mask="false" />
				</div>
				<div class="oncorColumnB">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.tenant" required="true" />
				</div>
				<div class="oncorColumnC">
					<rn:widget path="input/PremiseStatus" name="Incident.CustomFields.c.prem_stat" required="true" default_value="850" />
				</div>
				<div class="oncorColumnClear"></div>

				<div class="oncorColumnA">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.service_order" required="true" />
				</div>
				<div class="oncorColumnB">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.service_order_type" required="true" />
				</div>
				<div class="oncorColumnClear"></div>

				<div class="oncorColumnA">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.street_addr" required="true" />
				</div>
				<div class="oncorColumnB">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.city" required="true" />
				</div>
				<div class="oncorColumnC">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.zip" required="true" />
				</div>
				<div class="oncorColumnClear"></div>
			</div>

			<div class="oncorTable2">
				<h2>Meter Information</h2>
				<div class="oncorColumnA">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.prev_mtr_nbr" label_input="As Found Meter Number" always_show_mask="false" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.prev_mtr_type" label_input="As Found Meter Type" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.mtr_nbr" label_input="New Meter Number" always_show_mask="false"  />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.metering" label_input="New Meter Type" />
				</div>

				<div class="oncorColumnB">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.rdg_kwh_found" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.rdg_kw_found" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.rdg_kwh_left" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.rdg_kw_left" />
				</div>

				<div class="oncorColumnC">
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.prev_seal_nbr" required="true" label_input="As Found Seal Number" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.prev_seal_color" required="true" label_input="As Found Seal Color" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.seal_nbr" required="true" label_input="New Seal Number" />
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.seal_color" required="true" label_input="New Seal Color" />
				</div>
				<div class="oncorColumnClear"></div>
			</div>

			<div class="oncorTable">
				<fieldset id="fieldset0">
					<h2>Nature of Tampering (check all that apply)</h2>
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.service_status" required="true" />
					<div class="oncorColumn1">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.outer_seal_broken" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.inner_seal_broken" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.illegal_reconnect_same_meter"  display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.jumpers_installed" display_as_checkbox="true" hide_hint="true" />
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.potential_link_open" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.ams_meter_wires_unplugged" display_as_checkbox="true" hide_hint="true" />
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.ams_meter_run_backward_reverse" display_as_checkbox="true"  hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.ams_display_disabled"  display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.ct_reposition" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.other_nature_tamp" label_input="Other (comments required)" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.mechanical_register_damaged" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.non_ams_display_damaged" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.meter_upside_down" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.stolen_meter_install_premise" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.hole_in_canopy" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.object_in_meter_disk_bent" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.bypass_handle_engaged" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.direct_tap" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.resistor" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.jumper_and_sleeve" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumnClear"></div>
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.nature_tampering_remarks" label_input="Nature of Tampering Comments" />
				</fieldset>
			</div>

			<div class="oncorTable">
				<fieldset id="fieldset1">
					<h2>Field Corrections (check all that apply)</h2>
					<div class="oncorColumn1">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.lock_band_installed"  display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.locking_bar_installed" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.changed_out_damaged_meter" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.jumpers_removed" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.door_tag" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.other_field_corr" label_input="Other (comments required)" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.socket_lugs_removed" display_as_checkbox="true" hide_hint="true" />
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.wb_lock_installed" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.replaced_outer_seal" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.cut_at_pole" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.meter_removed_glassed_out" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumnClear"></div>

					<div class="oncorColumn1">
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.lock" />
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.lock_bar" />
					</div>
					<div class="oncorColumnClear"></div>
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.field_corrections_remarks" label_input="Field Corrections  Comments" />
				</fieldset>
			</div>

			<div class="oncorTable">
				<fieldset id="fieldset2">
					<h2>Physical Evidence Collected (check all that apply)</h2>
					<div class="oncorColumn1">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_seal" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_lock" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_meter" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_serv_wires" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_connectors" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_jumpers" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_other" label_input="Other (comments required)" display_as_checkbox="true" hide_hint="true"/>
						<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.evidence_none" label_input="None (comments required)" display_as_checkbox="true" hide_hint="true"/>
					</div>
					<div class="oncorColumnClear"></div>
					<rn:widget path="input/FormInput" name="Incident.CustomFields.c.evidence_comment" />
				</fieldset>
			</div>

			<div class="oncorTable">
				<h2>Photographs</h2>
				<div class="oncorColumn1">
					<p>
						<strong>Photographs are REQUIRED
						<br/>
						(minimum of 5, maximum of 20)</strong>
					</p>
					<rn:widget path="input/FileAttachmentUpload" label="Attach Photographs" min_required_attachments="5" max_attachments="20" label_min_required="You have not reached the minimum number of files that must be uploaded." />
					<?/*<rn:widget path="input/FormInput" name="incidents.c$photo_rmk" label_input="Photo Remarks" />*/ ?>
				</div>
				<div class="oncorColumn2">
					<p>
						The following photos are the minimum required:
					</p>
					<ol>
						<li>
							Meter and Base "as found" (Showing serial number, reading &amp; outer seal)
						</li>
						<li>
							Wide shot of meter attached to structure
						</li>
						<li>
							Close-up photo(s) of tampering evidence
						</li>
						<li>
							"As Left" photo of the site
						</li>
						<li>
							Wide shot of structure (showing address if available)
						</li>
					</ol>
					<br/>
				</div>
				<div class="oncorColumnClear"></div>
			</div>

			<div class="oncorTable">
				<h2>Officer Information (if applicable)</h2>
				<rn:widget path="input/DynamicCheckInput" name="Incident.CustomFields.c.law_enforcement" label_input="Law Enforcement Involved?" toggle_target="#LawEnforcementDynamicFields" display_as_checkbox="true" hide_hint="true"/>
				<div id="LawEnforcementDynamicFields" class="rn_Hidden">
					<div class="oncorColumn1">
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.officer_name" />
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.officer_badge_nbr" />
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.phone_number" />
					</div>
					<div class="oncorColumn2">
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.case_nbr" />
						<rn:widget path="input/FormInput" name="Incident.CustomFields.c.jurisdiction" />
					</div>
				</div>
			</div>

			<rn:widget path="input/TampSubmit" label_button="Submit" on_success_url="/app/tampering/tamp_confirm" error_location="rn_ErrorLocation" min_checked_boxes="1" />


		</form>
	</div>
</div>
