<?php

/*
 * This file is part of the yoeunes/toastr package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | Toastr options
    |--------------------------------------------------------------------------
    |
    | Here you can specify the options that will be passed to the toastr.js
    | library. For a full list of options, visit the documentation.
    |
    | Example:
    | 'options' => [
    |     'closeButton' => true,
    |     'debug' => false,
    |     'newestOnTop' => false,
    |     'progressBar' => true,
    | ],
    */

    'options' => [
        'closeButton' => false,
        'closeDuration' => 300,
        'closeEasing' => 'swing',
        'closeMethod' => 'fadeOut',
        'containerId' => 'toast-container',
        'debug' => false,
        'escapeHtml' => false,
        'extendedTimeOut' => 10000,
        'hideDuration' => 1000,
        'hideEasing' => 'linear',
        'hideMethod' => 'fadeOut',
        'iconClasses' => [
            'error' => 'toast-error',
            'info' => 'toast-info',
            'success' => 'toast-success',
            'warning' => 'toast-warning',
        ],
        'messageClass' => 'toast-message',
        'newestOnTop' => false,
        'onHidden' => null,
        'onShown' => null,
        'positionClass' => 'toast-bottom-right',
        'preventDuplicates' => true,
        'progressBar' => true,
        'progressClass' => 'toast-progress',
        'rtl' => true,
        'showDuration' => 300,
        'showEasing' => 'swing',
        'showMethod' => 'fadeIn',
        'tapToDismiss' => true,
        'target' => 'body',
        'timeOut' => 5000,
        'titleClass' => 'toast-title',
        'toastClass' => 'toast',
    ],
);
