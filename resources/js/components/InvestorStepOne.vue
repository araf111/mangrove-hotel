<template>
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
</template>

<script>
	import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
    export default {
		data() {
			return {
				profile: data.profile,
				personal: data.personal,
				step: data.step,
		
				submitted: data.submitted
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
			console.log(this.profile)
            console.log('Component mounted. step one')
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
