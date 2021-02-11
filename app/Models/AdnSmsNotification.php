<?php
namespace App\Models;


class AdnSmsNotification extends AbstractAdnSms
{
    /**
     * AdnSmsNotification constructor.
     */
    public function __construct()
    {
        $this->config =[
            'domain' => 'https://portal.adnsms.com',
            'apiCredentials' => [
                'api_key' => 'KEY-r2y2w5q3044312qzmktvp8tywtztw7vh',
                'api_secret' =>'qKaRG5sw7!Zfq@nD',
            ],
            'apiUrl' => [
                'check_balance' => "/api/v1/secure/check-balance",
                'send_sms' => "/api/v1/secure/send-sms",
                'check_campaign_status' => "/api/v1/secure/campaign-status",
                'check_sms_status' => "/api/v1/secure/sms-status",
            ],
        ];

        $this->setApiKey($this->config['apiCredentials']['api_key']);
        $this->setApiSecret($this->config['apiCredentials']['api_secret']);
        parent::__construct();
    }

    public function checkBalance()
    {
        $this->setApiUrl($this->config['apiUrl']['check_balance']);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret()
        ];

        $response = $this->callToApi($data);
        print_r($response);
    }

    public function sendSms($requestType, $message, $recipient, $messageType, $campaignTitle = null)
    {
        $this->setApiUrl($this->config['apiUrl']['send_sms']);
        $this->setRequestType($requestType);
        $this->setMessageBody($message);
        $this->setRecipient($recipient);
        $this->setMessageType($messageType);
        $this->setCampaignTitle($campaignTitle);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret(),
            'request_type' => $this->getRequestType(),
            'message_type' => $this->getMessageType(),
            'mobile' => $this->getRecipient(),
            'message_body' => $this->getMessageBody()
        ];

        if ($this->getRequestType() == 'GENERAL_CAMPAIGN') {
            if ($campaignTitle == null) {
                throw new \Exception('Campaign Title is required for bulk campaign');
            }
            $data['campaign_title'] = $this->getCampaignTitle();
        }

        $response = $this->callToApi($data);
        print_r($response);
    }

    public function sendBulkSms($message, $recipient, $messageType, $campaignTitle)
    {
        $this->setApiUrl($this->config['apiUrl']['send_sms']);
        $this->setRequestType('GENERAL_CAMPAIGN');
        $this->setMessageBody($message);
        $this->setRecipient($recipient);
        $this->setMessageType($messageType);
        $this->setCampaignTitle($campaignTitle);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret(),
            'request_type' => $this->getRequestType(),
            'message_type' => $this->getMessageType(),
            'mobile' => $this->getRecipient(),
            'message_body' => $this->getMessageBody()
        ];

        if ($campaignTitle == null) {
            throw new \Exception('Campaign Title is required for bulk campaign');
        }
        $data['campaign_title'] = $this->getCampaignTitle();

        $response = $this->callToApi($data);
        print_r($response);
    }

    public function multibodyCampaign($smsArray, $messageType, $campaignTitle = null)
    {
        $this->setApiUrl($this->config['apiUrl']['send_sms']);
        $this->setRequestType('MULTIBODY_CAMPAIGN');
        $this->setMessageType($messageType);
        $this->setCampaignTitle($campaignTitle);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret(),
            'request_type' => $this->getRequestType(),
            'message_type' => $this->getMessageType(),
        ];

        if ($campaignTitle != null) {
            $data['campaign_title'] = $this->getCampaignTitle();
        }

        foreach ($smsArray as $key => $sms) {
            if (!(isset($sms['mobile']) && isset($sms['message_body']))) {
                throw new \Exception('SMS Array format is not correct.');
            }
            $data["sms[$key][mobile]"] = $sms['mobile'];
            $data["sms[$key][message_body]"] = $sms['message_body'];
        }

        $response = $this->callToApi($data);
        print_r($response);
    }

    /**
     * @param $campaignUid
     */
    public function checkCampaignStatus($campaignUid)
    {
        $this->setApiUrl($this->config['apiUrl']['check_campaign_status']);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret(),
            'campaign_uid' => $campaignUid
        ];


        $response = $this->callToApi($data);
        print_r($response);
    }

    /**
     * @param $smsUid
     */
    public function checkSmsStatus($smsUid)
    {
        $this->setApiUrl($this->config['apiUrl']['check_sms_status']);

        $data = [
            'api_key' => $this->getApiKey(),
            'api_secret' => $this->getApiSecret(),
            'sms_uid' => $smsUid
        ];

        $response = $this->callToApi($data);
        print_r($response);
    }
}
