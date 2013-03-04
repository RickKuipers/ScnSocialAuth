<?php
namespace ScnSocialAuth\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class HybridAuthController extends AbstractActionController
{
    public function indexAction()
    {
        $error = $this->getRequest()->getQuery()->get('error');
        if (isset($error)) {
            return $this->_redirect()->toRoute('zfcuser/login');
        }
        \Hybrid_Endpoint::process();
    }
}
