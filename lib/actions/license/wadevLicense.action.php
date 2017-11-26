<?php

/**
 * @author Serge Rodovnichenko <serge@syrnik.com>
 * @copyright Serge Rodovnichenko, 2017
 */
class wadevLicenseAction extends wadevViewAction
{
    public function execute()
    {
        $products = wadevProductModel::model()->findAll();

        $this->view->assign(compact('products'));
    }
}
