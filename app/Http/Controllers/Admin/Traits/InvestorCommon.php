<?php

namespace App\Http\Controllers\Admin\Traits;

use App\Models\Investor;
use Illuminate\Support\Str;
use App\Models\InvestorShare;
use App\Models\InvestorAddress;
use App\Models\InvestorNominee;
use App\Models\InvestorProfile;
use App\Models\OfficeUseOnly;
use App\Models\InvestorSharePayment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

trait InvestorCommon
{
    private function createIvestorBasicData($validatedInvestorBasicData)
    {
        $picture = $validatedInvestorBasicData['picture']->store('investors');

        //$validatedInvestorBasicData['investor_id'] =  $validatedInvestorBasicData['investorId'];

        $validatedInvestorBasicData['activate_by'] =  1;
        $validatedInvestorBasicData['picture']     =  $picture;
        $validatedInvestorBasicData['password']    =  Hash::make($validatedInvestorBasicData['password']);

        return Investor::create($validatedInvestorBasicData);
    }

    private function createIvestorProfileData($validatedInvestorProfileData)
    {
        return InvestorProfile::create($validatedInvestorProfileData);
    }

    private function createOfficialUseOnlyData($validatedOfficialUseOnlyData)
    {
        return OfficeUseOnly::create($validatedOfficialUseOnlyData);
    }

    private function createIvestorAddress($investorAddressData)
    {
        $addressInserted = false;

        foreach ($investorAddressData['address'] as $addressType => $addressValue) {

            $data = [];
            $data['investor_id'] = $investorAddressData['investor_id'];
            $data['type'] = $addressType;
            $data['country_id'] = $addressValue['country_id'];
            $data['division_id'] = $addressValue['division_id'];
            $data['district_id'] = $addressValue['district_id'];
            $data['thana_id'] = $addressValue['thana_id'];
            $data['area'] = $addressValue['area'];

            InvestorAddress::create($data);

            $addressInserted = true;
        }

        return $addressInserted;
    }

    private function createIvestorNominee($investorNomineeData)
    {
        return InvestorNominee::create($investorNomineeData);
    }

    private function createInvestorShare($investorShareData)
    {
        return InvestorShare::create($investorShareData);
    }

    private function createInvestorSharePayments($investorSharePaymentData)
    {
        // dd($investorSharePaymentData);
        $dataInserted = false;

        foreach ($investorSharePaymentData as $key => $value) {

            InvestorSharePayment::create($value);
            $dataInserted = true;
        }
        return $dataInserted;
    }

    private function updateInvestorBasicData($investorBasicUpateData, $id)
    {
        // echo $id;
        // dd($investorBasicUpateData);exit;
        // \DB::connection()->enableQueryLog();
        return Investor::find($id)->update($investorBasicUpateData);

        // $queries = \DB::getQueryLog();
        // return dd($queries);exit;
    }

    private function updateInvestorProfileData($investorProfileUpdateData, $id)
    {
        return  InvestorProfile::where('investor_id', $id)->first()->update($investorProfileUpdateData);;
    }

    private function updateInvestorAddressData($investorAddressUpdateData, $id)
    {
        $addressInserted = false;

        foreach ($investorAddressUpdateData['address'] as $addressType => $addressValue) {

            $data = [];
            $data['type'] = $addressType;
            $data['country_id'] = $addressValue['country_id'];
            $data['division_id'] = $addressValue['division_id'];
            $data['district_id'] = $addressValue['district_id'];
            $data['thana_id'] = $addressValue['thana_id'];
            $data['area'] = $addressValue['area'];

            InvestorAddress::where('investor_id', $id)->where('type', $addressType)->update($data);

            $addressInserted = true;
        }

        return $addressInserted;
    }

    private function updateInvestorNomineeData($investorNomineeUpdateData, $id)
    {
        // return InvestorNominee::find($id)->update($investorNomineeUpdateData);
        return  InvestorNominee::where('investor_id', $id)->first()->update($investorNomineeUpdateData);
    }

    private function updateOfficeUseOnlyData($investorOfficeUseOnlyData, $id)
    {
        return  OfficeUseOnly::where('investor_id', $id)->first()->update($investorOfficeUseOnlyData);

    }
    private function updateInvestorShareData($investorShareData, $id)
    {
        return  InvestorShare::where('id', $id)->first()->update($investorShareData);

    }
    private function updateInvestorSharePaymentData($investorSharePaymentData, $id)
    {
        return  InvestorSharePayment::where('id', $id)->first()->update($investorSharePaymentData);

    }
}
