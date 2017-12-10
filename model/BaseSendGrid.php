<?php

/**
 * Created by CRS-SANJAY-BHARTI.
 * User: sbsanjaybharti
 * Date: 10/12/2017
 * Time: 11:21 AM
 */
class BaseSendGrid
{

    /**
     * @var string
     */
    private $to;
    /**
     * @var string
     */
    private $from;
    /**
     * @var string
     */
    private $subject;
    /**
     * @var string
     */
    private $body;
    /**
     * @var string
     */
    private $template;
    /**
     * @var array
     */
    private $subsitute;

    /**
     * Get string
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return string
     */
    public function setTo($value)
    {
        $this->to = $value;

        return $this;
    }

    /**
     * Get string
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set from
     *
     * @param string $from
     *
     * @return string
     */
    public function setFrom($value)
    {
        $this->to = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return string
     */
    public function setSubject($value)
    {
        $this->subject = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return string
     */
    public function setBody($value)
    {
        $this->body = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return string
     */
    public function setTemplate($value)
    {
        $this->template = $value;

        return $this;
    }
    /**
     * Get string
     *
     * @return string
     */
    public function getSubsitute()
    {
        return $this->subsitute;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return string
     */
    public function setSubsitute($value)
    {
        $this->subsitute = $value;

        return $this;
    }
}