<?php

namespace Ids\Andreani\Model\Source;

use Ids\Andreani\Helper\Data as AndreaniHelper;


/**
 * Class TransEmails
 *
 * @description Arma el array con los mails configurados en el admin. De esta forma
 * se puede elegir a cuál se enviará el mail una vez las guías hayan sido generadas.
 * @author Jhonattan Campo <jcampo@ids.net.ar>
 * @package Ids\Andreani\Model\Source
 */
class TransEmails implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var AndreaniHelper
     */
    protected $_andreaniHelper;

    public function __construct(
        AndreaniHelper $andreaniHelper
    ) {
        $this->_andreaniHelper = $andreaniHelper;
    }
    public function toOptionArray()
    {
        $helper             = $this->_andreaniHelper;
        $transEmailsData    = $helper->getTransEmails();
        $transEmails        = [];

        foreach ($transEmailsData AS $key =>$emailData)
        {
            $transEmails[$key] = $emailData['email'];
        }

        return $transEmails;
    }
}
