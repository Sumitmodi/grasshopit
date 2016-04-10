<?php

/*
 * Author   :   Sandeep Giri
 * Email    :   sandeep@nurakanbpo.com
 * Date     :   2014/07/31 8:19:02 PM
 * File     :   function.php 
 * Project  :   sms
 * Copyright (c) Nurakan Technologies Pvt. Ltd.
 */

function formatTime($data) {
	$data = str_replace('AM','',$data);
	$data = str_replace('PM','',$data);
    if (date('Y', strtotime($data)) == date('Y')) {
        if (date('Y/m', strtotime($data)) == date('Y/m')) {
            $time = date('Y/m/d', strtotime($data));
            $diff = (int) date('d') - (int) date('d', strtotime($time));
            $diff = (int) $diff;
            switch ($diff) {
                case 0:
                    $one = new DateTime(date('h:i:s'));
                    $two = new DateTime(date('h:i:s', strtotime($data)));
                    $diff = date_diff($one, $two, false);
                    if ($diff->h == 0) {
                        if ($diff->i == 0) {
                            if ($diff->s <= 10) {
                                return 'Just now';
                            } else {
                                return $diff->s . ' seconds ago';
                            }
                        } else {
                            return $diff->i . ' minutes ago';
                        }
                    } else {
                        if ($diff->h == 1)
                            return $diff->h . ' hour ago';
                        if ($diff->h < 12)
                            return $diff->h . ' hours ago';
                        return 'Today ' . date('h:i A', strtotime($data));
                    }
                    break;
                case 1:
                    return 'Yesterday ' . date('h:i A', strtotime($data));
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    return $diff . ' days ago '; //.date('D, h:i A', strtotime($data));
                    break;
                case 7:
                    return 'Last week ' . date('D, h:i A', strtotime($data));
            }
            return date('M d, h:i A', strtotime($data));
        }
        return date('M d, h:i A', strtotime($data));
    }
    return date('Y/m/d h:i A', strtotime($data));
}

function cleanTags($s){
    $s = preg_replace('%(<p[^>]*>)%i','',$s);
    $s = str_replace('</p>','</p><p class="content">',$s);
    $s = preg_replace('%(<div[^>]*>)%i','',$s);
    $s = str_replace('</div>','',$s);
    return $s;
}

function getLoginUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/login';
    else
        return '/login';
}

function getInstallUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/install';
    else
        return '/install';
}
function getLogoutUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/logout';
    else
        return '/logout';
}
function getAppManagerUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=app';
    else
        return '/?tab=app';
}
function getTemplateManagerUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=template';
    else
        return '/?tab=app';
}
function getMessageManagerUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=message';
    else
        return '/?tab=app';
}
function getAccountManagerUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=account';
    else
        return '/?tab=app';
}
function getCampaignManagerUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=campaign';
    else
        return '/?tab=app';
}
function getDownloadUrl(){
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=download';
    else
        return '/?tab=download';
}
function getAboutUrl(){    
    global $config;
    if(isLocalhost())
        return '/'.$config['domain'].'/?tab=about';
    else
        return '/?tab=about';
}