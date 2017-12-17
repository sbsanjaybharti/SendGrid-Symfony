<?php
namespace CRS\SendgridBundle\Model;
use SendGrid\Attachment;
use SendGrid\Content;
use SendGrid\Email;
use SendGrid\Mail;

/**
 * Created by CRS-SANJAY-BHARTI.
 * User: sbsanjaybharti
 * Date: 10/12/2017
 * Time: 12:21 PM
 */
class crs_mail extends BaseSendGrid
{
    public $key;
    private $status = 'live';
    public function __construct()
    {

        global $kernel;
        $this->status = $kernel->getContainer()->getParameter('send_grid.status');
        $this->key = $kernel->getContainer()->getParameter('send_grid.key');

    }

    public function sendByTemplateId($type = 'text/html'){

        $from = new Email(null, $this->getFrom());

        $to = new Email(null, $this->getTo());
        $content = new Content($type, $this->getBody());
        $mail = new Mail($from, $this->getSubject(), $to, $content);
        foreach ($this->getSubsitute() as $key => $substitute){
            $mail->personalization[0]->addSubstitution('%'.$key.'%', $substitute);
        }
        if($this->getAttachment())
            foreach ($this->getAttachment() as $attachment){
                $mail->addAttachment($attachment);
            }

        $mail->setTemplateId($this->getTemplate());
        if($this->status == True)
            $apiKey = getenv($this->key);
        else
            $apiKey = $this->key;

        $sg = new \SendGrid($apiKey);
        return $response = $sg->client->mail()->send()->post($mail);
    }

}