<?php

use App\Models\Page;

function getPageId()
{
    $page_id = Page::orderBy('id', 'desc')->first(['page_id']);
    if (empty($page_id->page_id)) {
        return 100001;
    }
    return $page_id->page_id + 1;
}

function textToUrl($text)
{
    return str_replace(' ', '-', strtolower($text));
}

function status($status)
{
    switch ($status) {
        case 0:
            return 'Pending';
            break;
        case 1:
            return 'Active';
            break;
        case 2:
            return 'Rejected';
            break;
        case 3:
            return 'New';
            break;
        case 4:
            return 'Review List';
            break;
        case 5:
            return 'Review Complete';
            break;
        case 6:
            return 'Live';
            break;
        default:
            return 'Active';
    }
}

function journalStatus($status)
{
    switch ($status) {
        case 0:
            return 'Pending';
            break;
        case 1:
            return 'Submitted';
            break;
        case 2:
            return 'In Review';
            break;
        case 3:
            return 'Reviewed';
            break;
        case 4:
            return 'Modified';
            break;
        case 5:
            return 'Approved';
            break;
        case 6:
            return 'Rejected';
            break;
        case '-1':
            return 'initiated';
        default:
            return 'N/A';
    }
}

function reviewerStatus($status)
{
    switch ($status) {
        case 1:
            return 'Accept The Manuscript';
            break;
        case 2:
            return 'Accept with minor revision';
            break;
        case 3:
            return 'Manuscript need major revision';
            break;
        case 4:
            return 'Reject Manuscript';
            break;
        default:
            return 'N/A';
    }
}

function loginUrl()
{
    return env('APP_URL') . '/login';
}

function adminEmails()
{
    return \App\User::where('role', 'admin')->first()->email;
}

function set_active($route)
{
    if (is_array($route)) {
        return in_array(request()->path(), $route) ? 'active' : '';
    }
    return request()->path() == $route ? 'active' : '';
}

function subdomain($s)
{
    switch ($s) {
        case 'doc':
            return 'International Journal of Diabetes Obesity and Cancer';
            break;
        case 'ms':
            return 'International Journal of Medical Sciences';
            break;
        case 'ps':
            return 'International Journal of Pharmaceuticals Science';
            break;
        case 'ffn':
            return 'International Journal of Functional Foods & Nutraceuticals';
            break;
        case 'ppcp':
            return 'International Journal of Pharmacy Practice and Clinical Pharmacy';
            break;
        default:
            return 'International Journal of Diabetes Obesity and Cancer';
    }
}