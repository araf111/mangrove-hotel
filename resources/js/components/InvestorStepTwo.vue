<template>
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
</template>

<script>
    export default {
		data() {
			return {
				personal: data.personal,
				step: data.step,
		
				submitted: data.submitted
			};
		},
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
