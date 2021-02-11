<template>
    <div>
        <div class="form-group">
            <label for="Select Project">Select Project</label>
            <select class="custom-select" name="project_id">
                <option selected="selected" value="">Please select ...</option>
                <option value="1">kuakata</option>
            </select>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Grand Total Price 
                    <span class="small">Including utility
                        & operational Charges
                    </span>
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">BDT</span>
                    </div>
                    <input type="text" name="grand_total" class="form-control" id="grand_total" placeholder="" required>
                    
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="inword">In Words</label>
                <input type="text" class="form-control" id="inword" placeholder="Investor Full Name">
            </div>
            <div class="form-group">
                <label for="inputName">Payment Selection</label>
                <br>
                <input type="redio" name="payment_method" value="Cache" class="d-inline" id="" placeholder="" data-toggle-element=".radio-button-selections" required>
                    Cash
                <input type="redio" name="payment_method" value="Bank" class="d-inline" id="" placeholder="" data-toggle-element=".radio-button-selections" required>
                    Bank
                <input type="redio" name="payment_method" value="Online" class="d-inline" id="" placeholder="" data-toggle-element=".radio-button-selections" required>
                    Online
                <hr />
                <div class="radio-button-selections" data-toggle-element-value="cash">

                </div>
                <div class="radio-button-selections" data-toggle-element-value="po">
                    <div class="row">
                        <div class="col-md-6  mb-input-5">
                            <input type="text" class="form-control" placeholder="No. of PO">
                        </div>
                        <div class="col-md-6  mb-input-5">
                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false"
                                placeholder="31 March 2020" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="bank_name" value="" class="form-control" id="" placeholder="Bank Name" required>  
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="branch_name" value="" class="form-control" id="" placeholder="Bank Name" required>
                        </div>
                    </div>
                </div>
                <div class="radio-button-selections" data-toggle-element-value="dd">DD</div>
                <div class="radio-button-selections" data-toggle-element-value="cheque">Cheque</div>
                <div class="radio-button-selections" data-toggle-element-value="online">Online</div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Booking Payment</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">BDT</span>
                    </div>
                    <input type="text" name="booking_amount" value="" class="form-control" id="booking_amount" placeholder="Bank Name" required>

                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
            </div>
            <input type="hidden" name="share_id" id="share_id">
            <input type="hidden" name="installment_amount" id="installment_amount">
            <input type="hidden" name="installment_number" id="installment_number">
        </div>
        
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
