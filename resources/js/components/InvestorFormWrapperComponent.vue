<template>
	<form @submit.prevent="handleSubmit">
		<div class="invest-wrap d-flex flex-wrap">
		

			<div class="invest-step step-1" :disabled="step !=1">
				<h3 class="text-center">Your Identity</h3>
				<div class="invest-pic">
					<img src="images/profile.png" alt="">
				</div>
				
				<div class="invest-box">
					<input type="text" v-model="profile.name" id="name" name="name" :class="{ 'is-invalid': submitted && $v.profile.name.$error }" placeholder="Write Your Full Name">
					<div v-if="submitted && !$v.profile.name.required" class="invalid-feedback">Full Name is required</div>
				</div>

				<div class="invest-box">
					<input type="text" v-model="profile.phone" id="phone" name="phone" :class="{ 'is-invalid': submitted && $v.profile.phone.$error }" placeholder="Phone">
					<div v-if="submitted && !$v.profile.phone.required" class="invalid-feedback">Phone is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.mobile" id="mobile" name="mobile" :class="{ 'is-invalid': submitted && $v.profile.mobile.$error }" placeholder="Primary Mobile">
					<div v-if="submitted && !$v.profile.mobile.required" class="invalid-feedback">Mobile is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.emergency_contact" id="emergency_contact" name="emergency_contact" :class="{ 'is-invalid': submitted && $v.profile.emergency_contact.$error }" placeholder="Emergency Contact">
					<div v-if="submitted && !$v.profile.emergency_contact.required" class="invalid-feedback">Emergency Contact is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.email_primary" id="email_primary" name="email_primary" :class="{ 'is-invalid': submitted && $v.profile.email_primary.$error }" placeholder="Primary Email">
					<div v-if="submitted && !$v.profile.email_primary.required" class="invalid-feedback">Email Primary is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.email_secondary" id="email_secondary" name="email_secondary" :class="{ 'is-invalid': submitted && $v.profile.email_secondary.$error }" placeholder="Seondery Email">
					<div v-if="submitted && !$v.profile.email_secondary.required" class="invalid-feedback">Email Secondary is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.nationality" id="nationality" name="nationality" :class="{ 'is-invalid': submitted && $v.profile.nationality.$error }" placeholder="Natinality">
					<div v-if="submitted && !$v.profile.nationality.required" class="invalid-feedback">Nationality is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.date_of_birth" id="date_of_birth" name="date_of_birth" :class="{ 'is-invalid': submitted && $v.profile.date_of_birth.$error }" placeholder="Date of birth: DD/MM/YY">
					<div v-if="submitted && !$v.profile.date_of_birth.required" class="invalid-feedback">Date Of Birth is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.identification_number" id="identification_number" name="identification_number" :class="{ 'is-invalid': submitted && $v.profile.identification_number.$error }" placeholder="NID">
					<div v-if="submitted && !$v.profile.identification_number.required" class="invalid-feedback">Identification Number is required</div>
				</div>
				<div class="invest-box">
					<input type="text" v-model="profile.religion" id="religion" name="religion" :class="{ 'is-invalid': submitted && $v.profile.religion.$error }" placeholder="Religion">
					<div v-if="submitted && !$v.profile.religion.required" class="invalid-feedback">Religion is required</div>
				</div>
				<div class="save-btn">
					<button class="save-btn-in">
						<svg width="22.933" height="22.933" viewBox="0 0 22.933 22.933">
							<path id="Icon_awesome-save" data-name="Icon awesome-save" d="M22.214,7.264,17.92,2.97a2.457,2.457,0,0,0-1.737-.72H2.457A2.457,2.457,0,0,0,0,4.707V22.726a2.457,2.457,0,0,0,2.457,2.457H20.476a2.457,2.457,0,0,0,2.457-2.457V9a2.457,2.457,0,0,0-.72-1.737ZM11.467,21.907a3.276,3.276,0,1,1,3.276-3.276A3.276,3.276,0,0,1,11.467,21.907ZM16.381,6.319v5.146a.614.614,0,0,1-.614.614H3.89a.614.614,0,0,1-.614-.614V6.14a.614.614,0,0,1,.614-.614h11.7a.614.614,0,0,1,.434.18l.178.178a.614.614,0,0,1,.18.434Z" transform="translate(0 -2.25)" fill="#fff"/>
						</svg>
					</button>
				</div>
			</div>

			<div class="invest-step step-2">
				<h3 class="text-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path id="Icon_material-arrow_back" data-name="Icon material-arrow_back" d="M30,16.5H11.745L20.13,8.115,18,6,6,18,18,30l2.115-2.115L11.745,19.5H30Z" transform="translate(-6 -6)"/>
					</svg>
					Personal Information
				</h3>
				<div class="row">
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" v-model="personal.father_name" id="father_name" name="father_name" :class="{ 'is-invalid': submitted && $v.personal.father_name.$error }" placeholder="Father's Name">
							<div v-if="submitted && !$v.personal.father_name.required" class="invalid-feedback">Father Name is required</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Mother's Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Spouse Name">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Spouse Date of Birth: DD/MM/YY">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Nominee Name">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Nominee Relation">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Nominee Identity">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Nominee Mobile Number">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Your Occupation">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="invest-box">
							<input type="text" placeholder="Your Position">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="invest-box">
							<input type="text" placeholder="Company Name">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label>Office Address</label>
						<div class="invest-box">
							<div class="row">
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-12 mt-20">
									<input type="text" placeholder="Area">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<label>Present Address</label>
						<div class="invest-box">
							<div class="row">
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-12 mt-20">
									<input type="text" placeholder="Area">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<label>Parmanent Address</label>
						<div class="invest-box">
							<div class="row">
								<div class="col-lg-4">
									<!-- <input type="text" placeholder="Country"> -->
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control select2bs4" style="width: 100%">
										<option selected="selected">Bangladesh</option>
										<option>India</option>
										<option>USA</option>
									</select>
								</div>
								<div class="col-lg-12 mt-20">
									<input type="text" placeholder="Area">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="save-btn">
					<button class="save-btn-in">
						<svg width="22.933" height="22.933" viewBox="0 0 22.933 22.933">
							<path id="Icon_awesome-save" data-name="Icon awesome-save" d="M22.214,7.264,17.92,2.97a2.457,2.457,0,0,0-1.737-.72H2.457A2.457,2.457,0,0,0,0,4.707V22.726a2.457,2.457,0,0,0,2.457,2.457H20.476a2.457,2.457,0,0,0,2.457-2.457V9a2.457,2.457,0,0,0-.72-1.737ZM11.467,21.907a3.276,3.276,0,1,1,3.276-3.276A3.276,3.276,0,0,1,11.467,21.907ZM16.381,6.319v5.146a.614.614,0,0,1-.614.614H3.89a.614.614,0,0,1-.614-.614V6.14a.614.614,0,0,1,.614-.614h11.7a.614.614,0,0,1,.434.18l.178.178a.614.614,0,0,1,.18.434Z" transform="translate(0 -2.25)" fill="#fff"/>
						</svg>
					</button>
				</div>
			</div>

			<div class="invest-step step-3">
				<h3 class="text-center">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
						<path id="Icon_material-arrow_back" data-name="Icon material-arrow_back" d="M30,16.5H11.745L20.13,8.115,18,6,6,18,18,30l2.115-2.115L11.745,19.5H30Z" transform="translate(-6 -6)"/>
					</svg>
					Share Holder Information
				</h3>

				<div class="row">
					<div class="col-lg-12">
						<div class="invest-box">
							<select class="custom-select">
								<option id="projectname">Select Project Name</option>
								<option id="projectname">Mangrove Eco Resort Kuakata (MERK)</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label for="exampleInputEmail1">Grand Total Price <span class="small">Including utility & operational Charges</span></label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">BDT</span>
								</div>
								<input type="text" class="form-control" placeholder="200000">
								<div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="invest-box">
							<input type="text" class="form-control" id="inword" placeholder="In Words">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label for="inputName">Payment Selection</label>
						<div class="invest-radio">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio1" name="Cash">
								<label class="custom-control-label" for="customRadio1">Cash</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio2" name="Bank">
								<label class="custom-control-label" for="customRadio2">Bank</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" class="custom-control-input" id="customRadio3" name="Online">
								<label class="custom-control-label" for="customRadio3">Online</label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="invest-box">
							<label for="exampleInputEmail1">Booking Payment</label>
							<div class="invest-box">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">BDT</span>
										</div>
										<input type="text" class="form-control" placeholder="5000">
										<div class="input-group-append">
											<span class="input-group-text">.00</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="save-btn">
					<a class="save-btn-in" href="#">
						<svg width="22.933" height="22.933" viewBox="0 0 22.933 22.933">
							<path id="Icon_awesome-save" data-name="Icon awesome-save" d="M22.214,7.264,17.92,2.97a2.457,2.457,0,0,0-1.737-.72H2.457A2.457,2.457,0,0,0,0,4.707V22.726a2.457,2.457,0,0,0,2.457,2.457H20.476a2.457,2.457,0,0,0,2.457-2.457V9a2.457,2.457,0,0,0-.72-1.737ZM11.467,21.907a3.276,3.276,0,1,1,3.276-3.276A3.276,3.276,0,0,1,11.467,21.907ZM16.381,6.319v5.146a.614.614,0,0,1-.614.614H3.89a.614.614,0,0,1-.614-.614V6.14a.614.614,0,0,1,.614-.614h11.7a.614.614,0,0,1,.434.18l.178.178a.614.614,0,0,1,.18.434Z" transform="translate(0 -2.25)" fill="#fff"/>
						</svg>
					</a>
				</div>
			</div>
			
				
		</div>
	</form>
</template>

<script>
	import { required, email, minLength, sameAs } from "vuelidate/lib/validators";

	export default {
		
		data() {
            return {
				profile: {
					name: "",
					phone: "",
					mobile: "",
					emergency_contact: "",
					email_primary: "",
					email_secondary: "",
					nationality: "",
					date_of_birth: "",
					identification_number: "",
					religion: "",
				},
				personal:{
					father_name: "",
				},
				step: 1,
		
				submitted: false
			};
		},
		validations: {

            profile: {
				name: { required },
				phone: { required },
				mobile: { required },
				emergency_contact: { required },
				email_primary: { required },
				email_secondary: { required },
				nationality: { required },
				date_of_birth: { required },
				identification_number: { required },
				religion: { required },
			},
			personal:{
               father_name:  { required },
			},
        },
        mounted() {
            console.log('Component mounted.')
		},
		methods: {
            handleSubmit(e) {

				if(this.step == 1){
					this.submitted = true;
					this.$v.profile.$touch();

					if (this.$v.profile.$invalid) {
						return;
					}
				}

				if(this.step == 2){
					this.$v.personal.$touch();
					if (this.$v.personal.$invalid) {
						return;
					}
				}

				if (!this.$v.profile.$invalid){
					this.step = 2;
				}

				

                //this.submitted = true;
                // this.$v.user.$touch();
                // if (this.$v.user.$invalid) {
                //     return;
                // }else{
                //     this.$v.post.$touch();
                //     if(this.$v.$invalid){
                //         return;
                //     }
                // }
                //alert("SUCCESS!! :-)\n\n" + JSON.stringify(this.user));
            }
        }
    }
</script>


<style scoped>
    .invalid-feedback{
        color: red;
    }
	
</style>
