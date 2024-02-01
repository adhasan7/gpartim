<?php
/*
-- ---------------------------------------------------------------
-- TAJALAPAK MARKETPLACE PRO MULTI BUYER MULTI SELLER + SUPPORT RESELLER SYSTEM
-- CREATED BY : ROBBY PRIHANDAYA (0812-6777-1344)
-- COPYRIGHT  : Copyright (c) 2018 - 2021, PHPMU.COM. (https://phpmu.com/)
-- LICENSE    : Commercial Software, (Hanya untuk 1 domain)
-- CREATED ON : 2019-03-26
-- UPDATED ON : 2021-02-09
-- ---------------------------------------------------------------
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Ojekers extends CI_Controller {

function ojk(){
        $this->template->load(template().'/template',template().'/ojekonline/ojek',$data);
}
}
?>
