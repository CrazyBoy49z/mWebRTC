<?php

class mWebRTCQueueGetProcessor extends modObjectGetProcessor
{
    public $objectType = 'WebrtcQueue';
    public $classKey = 'WebrtcQueue';
    public $languageTopics = ['mwebrtc:default'];
    //public $permission = 'view';


    /**
     * We doing special check of permission
     * because of our objects is not an instances of modAccessibleObject
     *
     * @return mixed
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        return parent::process();
    }

}

return 'mWebRTCQueueGetProcessor';