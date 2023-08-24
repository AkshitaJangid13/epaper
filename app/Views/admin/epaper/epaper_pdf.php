<!DOCTYPE html>
<html>

<head>
    <title>Multiple Page PDF</title>
</head>
<style>
  

    .has-warning .help-block,
    .has-warning .control-label,
    .has-warning .radio,
    .has-warning .checkbox,
    .has-warning .radio-inline,
    .has-warning .checkbox-inline,
    .has-warning.radio label,
    .has-warning.checkbox label,
    .has-warning.radio-inline label,
    .has-warning.checkbox-inline label {
        color: #8a6d3b;
    }

    .has-warning .form-control {
        border-color: #8a6d3b;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }

    .has-warning .form-control:focus {
        border-color: #66512c;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
    }

    .has-warning .input-group-addon {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #8a6d3b;
    }

    .has-warning .form-control-feedback {
        color: #8a6d3b;
    }

    .has-error .help-block,
    .has-error .control-label,
    .has-error .radio,
    .has-error .checkbox,
    .has-error .radio-inline,
    .has-error .checkbox-inline,
    .has-error.radio label,
    .has-error.checkbox label,
    .has-error.radio-inline label,
    .has-error.checkbox-inline label {
        color: #a94442;
    }

    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }

    .has-error .form-control:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
    }

    .has-error .input-group-addon {
        color: #a94442;
        background-color: #f2dede;
        border-color: #a94442;
    }

    .has-error .form-control-feedback {
        color: #a94442;
    }

    .has-feedback label~.form-control-feedback {
        top: 25px;
    }

    .has-feedback label.sr-only~.form-control-feedback {
        top: 0;
    }

    .help-block {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
        color: #737373;
    }

    @media (min-width: 768px) {
        .form-inline .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .form-inline .form-control-static {
            display: inline-block;
        }

        .form-inline .input-group {
            display: inline-table;
            vertical-align: middle;
        }

        .form-inline .input-group .input-group-addon,
        .form-inline .input-group .input-group-btn,
        .form-inline .input-group .form-control {
            width: auto;
        }

        .form-inline .input-group>.form-control {
            width: 100%;
        }

        .form-inline .control-label {
            margin-bottom: 0;
            vertical-align: middle;
        }

        .form-inline .radio,
        .form-inline .checkbox {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .form-inline .radio label,
        .form-inline .checkbox label {
            padding-left: 0;
        }

        .form-inline .radio input[type="radio"],
        .form-inline .checkbox input[type="checkbox"] {
            position: relative;
            margin-left: 0;
        }

        .form-inline .has-feedback .form-control-feedback {
            top: 0;
        }
    }

    .form-horizontal .radio,
    .form-horizontal .checkbox,
    .form-horizontal .radio-inline,
    .form-horizontal .checkbox-inline {
        padding-top: 7px;
        margin-top: 0;
        margin-bottom: 0;
    }

    .form-horizontal .radio,
    .form-horizontal .checkbox {
        min-height: 27px;
    }

    .form-horizontal .form-group {
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width: 768px) {
        .form-horizontal .control-label {
            padding-top: 7px;
            margin-bottom: 0;
            text-align: right;
        }
    }

    .form-horizontal .has-feedback .form-control-feedback {
        right: 15px;
    }

    @media (min-width: 768px) {
        .form-horizontal .form-group-lg .control-label {
            padding-top: 11px;
            font-size: 18px;
        }
    }

    @media (min-width: 768px) {
        .form-horizontal .form-group-sm .control-label {
            padding-top: 6px;
            font-size: 12px;
        }
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn:focus,
    .btn:active:focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn.active.focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    .btn:hover,
    .btn:focus,
    .btn.focus {
        color: #333;
        text-decoration: none;
    }

    .btn:active,
    .btn.active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
        cursor: not-allowed;
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: .65;
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
        pointer-events: none;
    }

    .btn-default {
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }

    .btn-default:focus,
    .btn-default.focus {
        color: #333;
        background-color: #e6e6e6;
        border-color: #8c8c8c;
    }

    .btn-default:hover {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad;
    }

    .btn-default:active,
    .btn-default.active,
    .open>.dropdown-toggle.btn-default {
        color: #333;
        background-color: #e6e6e6;
        border-color: #adadad;
    }

    .btn-default:active:hover,
    .btn-default.active:hover,
    .open>.dropdown-toggle.btn-default:hover,
    .btn-default:active:focus,
    .btn-default.active:focus,
    .open>.dropdown-toggle.btn-default:focus,
    .btn-default:active.focus,
    .btn-default.active.focus,
    .open>.dropdown-toggle.btn-default.focus {
        color: #333;
        background-color: #d4d4d4;
        border-color: #8c8c8c;
    }

    .btn-default:active,
    .btn-default.active,
    .open>.dropdown-toggle.btn-default {
        background-image: none;
    }

    .btn-default.disabled:hover,
    .btn-default[disabled]:hover,
    fieldset[disabled] .btn-default:hover,
    .btn-default.disabled:focus,
    .btn-default[disabled]:focus,
    fieldset[disabled] .btn-default:focus,
    .btn-default.disabled.focus,
    .btn-default[disabled].focus,
    fieldset[disabled] .btn-default.focus {
        background-color: #fff;
        border-color: #ccc;
    }

    .btn-default .badge {
        color: #fff;
        background-color: #333;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
    }

    .btn-primary:active:hover,
    .btn-primary.active:hover,
    .open>.dropdown-toggle.btn-primary:hover,
    .btn-primary:active:focus,
    .btn-primary.active:focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .btn-primary:active.focus,
    .btn-primary.active.focus,
    .open>.dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40;
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        background-image: none;
    }

    .btn-primary.disabled:hover,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary:hover,
    .btn-primary.disabled:focus,
    .btn-primary[disabled]:focus,
    fieldset[disabled] .btn-primary:focus,
    .btn-primary.disabled.focus,
    .btn-primary[disabled].focus,
    fieldset[disabled] .btn-primary.focus {
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-primary .badge {
        color: #337ab7;
        background-color: #fff;
    }

    .btn-success {
        color: #fff;
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .btn-success:focus,
    .btn-success.focus {
        color: #fff;
        background-color: #449d44;
        border-color: #255625;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
    }

    .btn-success:active,
    .btn-success.active,
    .open>.dropdown-toggle.btn-success {
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
    }

    .btn-success:active:hover,
    .btn-success.active:hover,
    .open>.dropdown-toggle.btn-success:hover,
    .btn-success:active:focus,
    .btn-success.active:focus,
    .open>.dropdown-toggle.btn-success:focus,
    .btn-success:active.focus,
    .btn-success.active.focus,
    .open>.dropdown-toggle.btn-success.focus {
        color: #fff;
        background-color: #398439;
        border-color: #255625;
    }

    .btn-success:active,
    .btn-success.active,
    .open>.dropdown-toggle.btn-success {
        background-image: none;
    }

    .btn-success.disabled:hover,
    .btn-success[disabled]:hover,
    fieldset[disabled] .btn-success:hover,
    .btn-success.disabled:focus,
    .btn-success[disabled]:focus,
    fieldset[disabled] .btn-success:focus,
    .btn-success.disabled.focus,
    .btn-success[disabled].focus,
    fieldset[disabled] .btn-success.focus {
        background-color: #5cb85c;
        border-color: #4cae4c;
    }

    .btn-success .badge {
        color: #5cb85c;
        background-color: #fff;
    }

    .btn-info {
        color: #fff;
        background-color: #5bc0de;
        border-color: #46b8da;
    }

    .btn-info:focus,
    .btn-info.focus {
        color: #fff;
        background-color: #31b0d5;
        border-color: #1b6d85;
    }

    .btn-info:hover {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc;
    }

    .btn-info:active,
    .btn-info.active,
    .open>.dropdown-toggle.btn-info {
        color: #fff;
        background-color: #31b0d5;
        border-color: #269abc;
    }

    .btn-info:active:hover,
    .btn-info.active:hover,
    .open>.dropdown-toggle.btn-info:hover,
    .btn-info:active:focus,
    .btn-info.active:focus,
    .open>.dropdown-toggle.btn-info:focus,
    .btn-info:active.focus,
    .btn-info.active.focus,
    .open>.dropdown-toggle.btn-info.focus {
        color: #fff;
        background-color: #269abc;
        border-color: #1b6d85;
    }

    .btn-info:active,
    .btn-info.active,
    .open>.dropdown-toggle.btn-info {
        background-image: none;
    }

    .btn-info.disabled:hover,
    .btn-info[disabled]:hover,
    fieldset[disabled] .btn-info:hover,
    .btn-info.disabled:focus,
    .btn-info[disabled]:focus,
    fieldset[disabled] .btn-info:focus,
    .btn-info.disabled.focus,
    .btn-info[disabled].focus,
    fieldset[disabled] .btn-info.focus {
        background-color: #5bc0de;
        border-color: #46b8da;
    }

    .btn-info .badge {
        color: #5bc0de;
        background-color: #fff;
    }

    .btn-warning {
        color: #fff;
        background-color: #f0ad4e;
        border-color: #eea236;
    }

    .btn-warning:focus,
    .btn-warning.focus {
        color: #fff;
        background-color: #ec971f;
        border-color: #985f0d;
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512;
    }

    .btn-warning:active,
    .btn-warning.active,
    .open>.dropdown-toggle.btn-warning {
        color: #fff;
        background-color: #ec971f;
        border-color: #d58512;
    }

    .btn-warning:active:hover,
    .btn-warning.active:hover,
    .open>.dropdown-toggle.btn-warning:hover,
    .btn-warning:active:focus,
    .btn-warning.active:focus,
    .open>.dropdown-toggle.btn-warning:focus,
    .btn-warning:active.focus,
    .btn-warning.active.focus,
    .open>.dropdown-toggle.btn-warning.focus {
        color: #fff;
        background-color: #d58512;
        border-color: #985f0d;
    }

    .btn-warning:active,
    .btn-warning.active,
    .open>.dropdown-toggle.btn-warning {
        background-image: none;
    }

    .btn-warning.disabled:hover,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn-warning:hover,
    .btn-warning.disabled:focus,
    .btn-warning[disabled]:focus,
    fieldset[disabled] .btn-warning:focus,
    .btn-warning.disabled.focus,
    .btn-warning[disabled].focus,
    fieldset[disabled] .btn-warning.focus {
        background-color: #f0ad4e;
        border-color: #eea236;
    }

    .btn-warning .badge {
        color: #f0ad4e;
        background-color: #fff;
    }

    .btn-danger {
        color: #fff;
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .btn-danger:focus,
    .btn-danger.focus {
        color: #fff;
        background-color: #c9302c;
        border-color: #761c19;
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925;
    }

    .btn-danger:active,
    .btn-danger.active,
    .open>.dropdown-toggle.btn-danger {
        color: #fff;
        background-color: #c9302c;
        border-color: #ac2925;
    }

    .btn-danger:active:hover,
    .btn-danger.active:hover,
    .open>.dropdown-toggle.btn-danger:hover,
    .btn-danger:active:focus,
    .btn-danger.active:focus,
    .open>.dropdown-toggle.btn-danger:focus,
    .btn-danger:active.focus,
    .btn-danger.active.focus,
    .open>.dropdown-toggle.btn-danger.focus {
        color: #fff;
        background-color: #ac2925;
        border-color: #761c19;
    }

    .btn-danger:active,
    .btn-danger.active,
    .open>.dropdown-toggle.btn-danger {
        background-image: none;
    }

    .btn-danger.disabled:hover,
    .btn-danger[disabled]:hover,
    fieldset[disabled] .btn-danger:hover,
    .btn-danger.disabled:focus,
    .btn-danger[disabled]:focus,
    fieldset[disabled] .btn-danger:focus,
    .btn-danger.disabled.focus,
    .btn-danger[disabled].focus,
    fieldset[disabled] .btn-danger.focus {
        background-color: #d9534f;
        border-color: #d43f3a;
    }

    .btn-danger .badge {
        color: #d9534f;
        background-color: #fff;
    }

    .btn-link {
        font-weight: normal;
        color: #337ab7;
        border-radius: 0;
    }

    .btn-link,
    .btn-link:active,
    .btn-link.active,
    .btn-link[disabled],
    fieldset[disabled] .btn-link {
        background-color: transparent;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn-link,
    .btn-link:hover,
    .btn-link:focus,
    .btn-link:active {
        border-color: transparent;
    }

    .btn-link:hover,
    .btn-link:focus {
        color: #23527c;
        text-decoration: underline;
        background-color: transparent;
    }

    .btn-link[disabled]:hover,
    fieldset[disabled] .btn-link:hover,
    .btn-link[disabled]:focus,
    fieldset[disabled] .btn-link:focus {
        color: #777;
        text-decoration: none;
    }

    .btn-lg,
    .btn-group-lg>.btn {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }

    .btn-xs,
    .btn-group-xs>.btn {
        padding: 1px 5px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }

    .btn-block {
        display: block;
        width: 100%;
    }

    .btn-block+.btn-block {
        margin-top: 5px;
    }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%;
    }

    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear;
    }

    .fade.in {
        opacity: 1;
    }

    .collapse {
        display: none;
    }

    .collapse.in {
        display: block;
    }

    tr.collapse.in {
        display: table-row;
    }

    tbody.collapse.in {
        display: table-row-group;
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition-timing-function: ease;
        -o-transition-timing-function: ease;
        transition-timing-function: ease;
        -webkit-transition-duration: .35s;
        -o-transition-duration: .35s;
        transition-duration: .35s;
        -webkit-transition-property: height, visibility;
        -o-transition-property: height, visibility;
        transition-property: height, visibility;
    }

    .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid \9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
    }

    .dropup,
    .dropdown {
        position: relative;
    }

    .dropdown-toggle:focus {
        outline: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .dropdown-menu.pull-right {
        right: 0;
        left: auto;
    }

    .dropdown-menu .divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5;
    }

    .dropdown-menu>li>a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
    }

    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5;
    }

    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus {
        color: #fff;
        text-decoration: none;
        background-color: #337ab7;
        outline: 0;
    }

    .dropdown-menu>.disabled>a,
    .dropdown-menu>.disabled>a:hover,
    .dropdown-menu>.disabled>a:focus {
        color: #777;
    }

    .dropdown-menu>.disabled>a:hover,
    .dropdown-menu>.disabled>a:focus {
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent;
        background-image: none;
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
    }

    .open>.dropdown-menu {
        display: block;
    }

    .open>a {
        outline: 0;
    }

    .dropdown-menu-right {
        right: 0;
        left: auto;
    }

    .dropdown-menu-left {
        right: auto;
        left: 0;
    }

    .dropdown-header {
        display: block;
        padding: 3px 20px;
        font-size: 12px;
        line-height: 1.42857143;
        color: #777;
        white-space: nowrap;
    }

    .dropdown-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 990;
    }

    .pull-right>.dropdown-menu {
        right: 0;
        left: auto;
    }

    .dropup .caret,
    .navbar-fixed-bottom .dropdown .caret {
        content: "";
        border-top: 0;
        border-bottom: 4px dashed;
        border-bottom: 4px solid \9;
    }

    .dropup .dropdown-menu,
    .navbar-fixed-bottom .dropdown .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-bottom: 2px;
    }

    @media (min-width: 768px) {
        .navbar-right .dropdown-menu {
            right: 0;
            left: auto;
        }

        .navbar-right .dropdown-menu-left {
            right: auto;
            left: 0;
        }
    }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .btn-group>.btn,
    .btn-group-vertical>.btn {
        position: relative;
        float: left;
    }

    .btn-group>.btn:hover,
    .btn-group-vertical>.btn:hover,
    .btn-group>.btn:focus,
    .btn-group-vertical>.btn:focus,
    .btn-group>.btn:active,
    .btn-group-vertical>.btn:active,
    .btn-group>.btn.active,
    .btn-group-vertical>.btn.active {
        z-index: 2;
    }

    .btn-group .btn+.btn,
    .btn-group .btn+.btn-group,
    .btn-group .btn-group+.btn,
    .btn-group .btn-group+.btn-group {
        margin-left: -1px;
    }

    .btn-toolbar {
        margin-left: -5px;
    }

    .btn-toolbar .btn,
    .btn-toolbar .btn-group,
    .btn-toolbar .input-group {
        float: left;
    }

    .btn-toolbar>.btn,
    .btn-toolbar>.btn-group,
    .btn-toolbar>.input-group {
        margin-left: 5px;
    }

    .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
        border-radius: 0;
    }

    .btn-group>.btn:first-child {
        margin-left: 0;
    }

    .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group>.btn:last-child:not(:first-child),
    .btn-group>.dropdown-toggle:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group>.btn-group {
        float: left;
    }

    .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0;
    }

    .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group .dropdown-toggle:active,
    .btn-group.open .dropdown-toggle {
        outline: 0;
    }

    .btn-group>.btn+.dropdown-toggle {
        padding-right: 8px;
        padding-left: 8px;
    }

    .btn-group>.btn-lg+.dropdown-toggle {
        padding-right: 12px;
        padding-left: 12px;
    }

    .btn-group.open .dropdown-toggle {
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
    }

    .btn-group.open .dropdown-toggle.btn-link {
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .btn .caret {
        margin-left: 0;
    }

    .btn-lg .caret {
        border-width: 5px 5px 0;
        border-bottom-width: 0;
    }

    .dropup .btn-lg .caret {
        border-width: 0 5px 5px;
    }

    .btn-group-vertical>.btn,
    .btn-group-vertical>.btn-group,
    .btn-group-vertical>.btn-group>.btn {
        display: block;
        float: none;
        width: 100%;
        max-width: 100%;
    }

    .btn-group-vertical>.btn-group>.btn {
        float: none;
    }

    .btn-group-vertical>.btn+.btn,
    .btn-group-vertical>.btn+.btn-group,
    .btn-group-vertical>.btn-group+.btn,
    .btn-group-vertical>.btn-group+.btn-group {
        margin-top: -1px;
        margin-left: 0;
    }

    .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
        border-radius: 0;
    }

    .btn-group-vertical>.btn:first-child:not(:last-child) {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn:last-child:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
        border-radius: 0;
    }

    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
    .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .btn-group-justified {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: separate;
    }

    .btn-group-justified>.btn,
    .btn-group-justified>.btn-group {
        display: table-cell;
        float: none;
        width: 1%;
    }

    .btn-group-justified>.btn-group .btn {
        width: 100%;
    }

    .btn-group-justified>.btn-group .dropdown-menu {
        left: auto;
    }

    [data-toggle="buttons"]>.btn input[type="radio"],
    [data-toggle="buttons"]>.btn-group>.btn input[type="radio"],
    [data-toggle="buttons"]>.btn input[type="checkbox"],
    [data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none;
    }

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }

    .input-group[class*="col-"] {
        float: none;
        padding-right: 0;
        padding-left: 0;
    }

    .input-group .form-control {
        position: relative;
        z-index: 2;
        float: left;
        width: 100%;
        margin-bottom: 0;
    }

    .input-group .form-control:focus {
        z-index: 3;
    }

    .input-group-lg>.form-control,
    .input-group-lg>.input-group-addon,
    .input-group-lg>.input-group-btn>.btn {
        height: 46px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
    }

    select.input-group-lg>.form-control,
    select.input-group-lg>.input-group-addon,
    select.input-group-lg>.input-group-btn>.btn {
        height: 46px;
        line-height: 46px;
    }

    textarea.input-group-lg>.form-control,
    textarea.input-group-lg>.input-group-addon,
    textarea.input-group-lg>.input-group-btn>.btn,
    select[multiple].input-group-lg>.form-control,
    select[multiple].input-group-lg>.input-group-addon,
    select[multiple].input-group-lg>.input-group-btn>.btn {
        height: auto;
    }

    .input-group-sm>.form-control,
    .input-group-sm>.input-group-addon,
    .input-group-sm>.input-group-btn>.btn {
        height: 30px;
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
        border-radius: 3px;
    }

    select.input-group-sm>.form-control,
    select.input-group-sm>.input-group-addon,
    select.input-group-sm>.input-group-btn>.btn {
        height: 30px;
        line-height: 30px;
    }

    textarea.input-group-sm>.form-control,
    textarea.input-group-sm>.input-group-addon,
    textarea.input-group-sm>.input-group-btn>.btn,
    select[multiple].input-group-sm>.form-control,
    select[multiple].input-group-sm>.input-group-addon,
    select[multiple].input-group-sm>.input-group-btn>.btn {
        height: auto;
    }

    .input-group-addon,
    .input-group-btn,
    .input-group .form-control {
        display: table-cell;
    }

    .input-group-addon:not(:first-child):not(:last-child),
    .input-group-btn:not(:first-child):not(:last-child),
    .input-group .form-control:not(:first-child):not(:last-child) {
        border-radius: 0;
    }

    .input-group-addon,
    .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle;
    }

    .input-group-addon {
        padding: 6px 12px;
        font-size: 14px;
        font-weight: normal;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .input-group-addon.input-sm {
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 3px;
    }

    .input-group-addon.input-lg {
        padding: 10px 16px;
        font-size: 18px;
        border-radius: 6px;
    }

    .input-group-addon input[type="radio"],
    .input-group-addon input[type="checkbox"] {
        margin-top: 0;
    }

    .input-group .form-control:first-child,
    .input-group-addon:first-child,
    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group>.btn,
    .input-group-btn:first-child>.dropdown-toggle,
    .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),
    .input-group-btn:last-child>.btn-group:not(:last-child)>.btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group-addon:first-child {
        border-right: 0;
    }

    .input-group .form-control:last-child,
    .input-group-addon:last-child,
    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group>.btn,
    .input-group-btn:last-child>.dropdown-toggle,
    .input-group-btn:first-child>.btn:not(:first-child),
    .input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .input-group-addon:last-child {
        border-left: 0;
    }

    .input-group-btn {
        position: relative;
        font-size: 0;
        white-space: nowrap;
    }

    .input-group-btn>.btn {
        position: relative;
    }

    .input-group-btn>.btn+.btn {
        margin-left: -1px;
    }

    .input-group-btn>.btn:hover,
    .input-group-btn>.btn:focus,
    .input-group-btn>.btn:active {
        z-index: 2;
    }

    .input-group-btn:first-child>.btn,
    .input-group-btn:first-child>.btn-group {
        margin-right: -1px;
    }

    .input-group-btn:last-child>.btn,
    .input-group-btn:last-child>.btn-group {
        z-index: 2;
        margin-left: -1px;
    }

    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav>li {
        position: relative;
        display: block;
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px;
    }

    .nav>li>a:hover,
    .nav>li>a:focus {
        text-decoration: none;
        background-color: #eee;
    }

    .nav>li.disabled>a {
        color: #777;
    }

    .nav>li.disabled>a:hover,
    .nav>li.disabled>a:focus {
        color: #777;
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent;
    }

    .nav .open>a,
    .nav .open>a:hover,
    .nav .open>a:focus {
        background-color: #eee;
        border-color: #337ab7;
    }

    .nav .nav-divider {
        height: 1px;
        margin: 9px 0;
        overflow: hidden;
        background-color: #e5e5e5;
    }

    .nav>li>a>img {
        max-width: none;
    }

    .nav-tabs {
        border-bottom: 1px solid #ddd;
    }

    .nav-tabs>li {
        float: left;
        margin-bottom: -1px;
    }

    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0;
    }

    .nav-tabs>li>a:hover {
        border-color: #eee #eee #ddd;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
    }

    .nav-tabs.nav-justified {
        width: 100%;
        border-bottom: 0;
    }

    .nav-tabs.nav-justified>li {
        float: none;
    }

    .nav-tabs.nav-justified>li>a {
        margin-bottom: 5px;
        text-align: center;
    }

    .nav-tabs.nav-justified>.dropdown .dropdown-menu {
        top: auto;
        left: auto;
    }

    @media (min-width: 768px) {
        .nav-tabs.nav-justified>li {
            display: table-cell;
            width: 1%;
        }

        .nav-tabs.nav-justified>li>a {
            margin-bottom: 0;
        }
    }

    .nav-tabs.nav-justified>li>a {
        margin-right: 0;
        border-radius: 4px;
    }

    .nav-tabs.nav-justified>.active>a,
    .nav-tabs.nav-justified>.active>a:hover,
    .nav-tabs.nav-justified>.active>a:focus {
        border: 1px solid #ddd;
    }

    @media (min-width: 768px) {
        .nav-tabs.nav-justified>li>a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0;
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:hover,
        .nav-tabs.nav-justified>.active>a:focus {
            border-bottom-color: #fff;
        }
    }

    .nav-pills>li {
        float: left;
    }

    .nav-pills>li>a {
        border-radius: 4px;
    }

    .nav-pills>li+li {
        margin-left: 2px;
    }

    .nav-pills>li.active>a,
    .nav-pills>li.active>a:hover,
    .nav-pills>li.active>a:focus {
        color: #fff;
        background-color: #337ab7;
    }

    .nav-stacked>li {
        float: none;
    }

    .nav-stacked>li+li {
        margin-top: 2px;
        margin-left: 0;
    }

    .nav-justified {
        width: 100%;
    }

    .nav-justified>li {
        float: none;
    }

    .nav-justified>li>a {
        margin-bottom: 5px;
        text-align: center;
    }

    .nav-justified>.dropdown .dropdown-menu {
        top: auto;
        left: auto;
    }

    @media (min-width: 768px) {
        .nav-justified>li {
            display: table-cell;
            width: 1%;
        }

        .nav-justified>li>a {
            margin-bottom: 0;
        }
    }

    .nav-tabs-justified {
        border-bottom: 0;
    }

    .nav-tabs-justified>li>a {
        margin-right: 0;
        border-radius: 4px;
    }

    .nav-tabs-justified>.active>a,
    .nav-tabs-justified>.active>a:hover,
    .nav-tabs-justified>.active>a:focus {
        border: 1px solid #ddd;
    }

    @media (min-width: 768px) {
        .nav-tabs-justified>li>a {
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0;
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:hover,
        .nav-tabs-justified>.active>a:focus {
            border-bottom-color: #fff;
        }
    }

    .tab-content>.tab-pane {
        display: none;
    }

    .tab-content>.active {
        display: block;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 20px;
        border: 1px solid transparent;
    }

    @media (min-width: 768px) {
        .navbar {
            border-radius: 4px;
        }
    }

    @media (min-width: 768px) {
        .navbar-header {
            float: left;
        }
    }

    .navbar-collapse {
        padding-right: 15px;
        padding-left: 15px;
        overflow-x: visible;
        -webkit-overflow-scrolling: touch;
        border-top: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
    }

    .navbar-collapse.in {
        overflow-y: auto;
    }

    @media (min-width: 768px) {
        .navbar-collapse {
            width: auto;
            border-top: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .navbar-collapse.collapse {
            display: block !important;
            height: auto !important;
            padding-bottom: 0;
            overflow: visible !important;
        }

        .navbar-collapse.in {
            overflow-y: visible;
        }

        .navbar-fixed-top .navbar-collapse,
        .navbar-static-top .navbar-collapse,
        .navbar-fixed-bottom .navbar-collapse {
            padding-right: 0;
            padding-left: 0;
        }
    }

    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
        max-height: 340px;
    }

    @media (max-device-width: 480px) and (orientation: landscape) {

        .navbar-fixed-top .navbar-collapse,
        .navbar-fixed-bottom .navbar-collapse {
            max-height: 200px;
        }
    }

    .container>.navbar-header,
    .container-fluid>.navbar-header,
    .container>.navbar-collapse,
    .container-fluid>.navbar-collapse {
        margin-right: -15px;
        margin-left: -15px;
    }

    @media (min-width: 768px) {

        .container>.navbar-header,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container-fluid>.navbar-collapse {
            margin-right: 0;
            margin-left: 0;
        }
    }

    .navbar-static-top {
        z-index: 1000;
        border-width: 0 0 1px;
    }

    @media (min-width: 768px) {
        .navbar-static-top {
            border-radius: 0;
        }
    }

    .navbar-fixed-top,
    .navbar-fixed-bottom {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 1030;
    }

    @media (min-width: 768px) {

        .navbar-fixed-top,
        .navbar-fixed-bottom {
            border-radius: 0;
        }
    }

    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }

    .navbar-fixed-bottom {
        bottom: 0;
        margin-bottom: 0;
        border-width: 1px 0 0;
    }

    .navbar-brand {
        float: left;
        height: 50px;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px;
    }

    .navbar-brand:hover,
    .navbar-brand:focus {
        text-decoration: none;
    }

    .navbar-brand>img {
        display: block;
    }

    @media (min-width: 768px) {

        .navbar>.container .navbar-brand,
        .navbar>.container-fluid .navbar-brand {
            margin-left: -15px;
        }
    }

    .navbar-toggle {
        position: relative;
        float: right;
        padding: 9px 10px;
        margin-top: 8px;
        margin-right: 15px;
        margin-bottom: 8px;
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .navbar-toggle:focus {
        outline: 0;
    }

    .navbar-toggle .icon-bar {
        display: block;
        width: 22px;
        height: 2px;
        border-radius: 1px;
    }

    .navbar-toggle .icon-bar+.icon-bar {
        margin-top: 4px;
    }

    @media (min-width: 768px) {
        .navbar-toggle {
            display: none;
        }
    }

    .navbar-nav {
        margin: 7.5px -15px;
    }

    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px;
    }

    @media (max-width: 767px) {
        .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .navbar-nav .open .dropdown-menu>li>a,
        .navbar-nav .open .dropdown-menu .dropdown-header {
            padding: 5px 15px 5px 25px;
        }

        .navbar-nav .open .dropdown-menu>li>a {
            line-height: 20px;
        }

        .navbar-nav .open .dropdown-menu>li>a:hover,
        .navbar-nav .open .dropdown-menu>li>a:focus {
            background-image: none;
        }
    }

    @media (min-width: 768px) {
        .navbar-nav {
            float: left;
            margin: 0;
        }

        .navbar-nav>li {
            float: left;
        }

        .navbar-nav>li>a {
            padding-top: 15px;
            padding-bottom: 15px;
        }
    }

    .navbar-form {
        padding: 10px 15px;
        margin-top: 8px;
        margin-right: -15px;
        margin-bottom: 8px;
        margin-left: -15px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
    }

    @media (min-width: 768px) {
        .navbar-form .form-group {
            display: inline-block;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .navbar-form .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle;
        }

        .navbar-form .form-control-static {
            display: inline-block;
        }

        .navbar-form .input-group {
            display: inline-table;
            vertical-align: middle;
        }

        .navbar-form .input-group .input-group-addon,
        .navbar-form .input-group .input-group-btn,
        .navbar-form .input-group .form-control {
            width: auto;
        }

        .navbar-form .input-group>.form-control {
            width: 100%;
        }

        .navbar-form .control-label {
            margin-bottom: 0;
            vertical-align: middle;
        }

        .navbar-form .radio,
        .navbar-form .checkbox {
            display: inline-block;
            margin-top: 0;
            margin-bottom: 0;
            vertical-align: middle;
        }

        .navbar-form .radio label,
        .navbar-form .checkbox label {
            padding-left: 0;
        }

        .navbar-form .radio input[type="radio"],
        .navbar-form .checkbox input[type="checkbox"] {
            position: relative;
            margin-left: 0;
        }

        .navbar-form .has-feedback .form-control-feedback {
            top: 0;
        }
    }

    @media (max-width: 767px) {
        .navbar-form .form-group {
            margin-bottom: 5px;
        }

        .navbar-form .form-group:last-child {
            margin-bottom: 0;
        }
    }

    @media (min-width: 768px) {
        .navbar-form {
            width: auto;
            padding-top: 0;
            padding-bottom: 0;
            margin-right: 0;
            margin-left: 0;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    }

    .navbar-nav>li>.dropdown-menu {
        margin-top: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
        margin-bottom: 0;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .navbar-btn {
        margin-top: 8px;
        margin-bottom: 8px;
    }

    .navbar-btn.btn-sm {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .navbar-btn.btn-xs {
        margin-top: 14px;
        margin-bottom: 14px;
    }

    .navbar-text {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    @media (min-width: 768px) {
        .navbar-text {
            float: left;
            margin-right: 15px;
            margin-left: 15px;
        }
    }

    @media (min-width: 768px) {
        .navbar-left {
            float: left !important;
        }

        .navbar-right {
            float: right !important;
            margin-right: -15px;
        }

        .navbar-right~.navbar-right {
            margin-right: 0;
        }
    }

    .navbar-default {
        background-color: #f8f8f8;
        border-color: #e7e7e7;
    }

    .navbar-default .navbar-brand {
        color: #777;
    }

    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: #5e5e5e;
        background-color: transparent;
    }

    .navbar-default .navbar-text {
        color: #777;
    }

    .navbar-default .navbar-nav>li>a {
        color: #777;
    }

    .navbar-default .navbar-nav>li>a:hover,
    .navbar-default .navbar-nav>li>a:focus {
        color: #333;
        background-color: transparent;
    }

    .navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:hover,
    .navbar-default .navbar-nav>.active>a:focus {
        color: #555;
        background-color: #e7e7e7;
    }

    .navbar-default .navbar-nav>.disabled>a,
    .navbar-default .navbar-nav>.disabled>a:hover,
    .navbar-default .navbar-nav>.disabled>a:focus {
        color: #ccc;
        background-color: transparent;
    }

    .navbar-default .navbar-toggle {
        border-color: #ddd;
    }

    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #ddd;
    }

    .navbar-default .navbar-toggle .icon-bar {
        background-color: #888;
    }

    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #e7e7e7;
    }

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:hover,
    .navbar-default .navbar-nav>.open>a:focus {
        color: #555;
        background-color: #e7e7e7;
    }

    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
            color: #333;
            background-color: transparent;
        }

        .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
            color: #555;
            background-color: #e7e7e7;
        }

        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus {
            color: #ccc;
            background-color: transparent;
        }
    }

    .navbar-default .navbar-link {
        color: #777;
    }

    .navbar-default .navbar-link:hover {
        color: #333;
    }

    .navbar-default .btn-link {
        color: #777;
    }

    .navbar-default .btn-link:hover,
    .navbar-default .btn-link:focus {
        color: #333;
    }

    .navbar-default .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-default .btn-link:hover,
    .navbar-default .btn-link[disabled]:focus,
    fieldset[disabled] .navbar-default .btn-link:focus {
        color: #ccc;
    }

    .navbar-inverse {
        background-color: #222;
        border-color: #080808;
    }

    .navbar-inverse .navbar-brand {
        color: #9d9d9d;
    }

    .navbar-inverse .navbar-brand:hover,
    .navbar-inverse .navbar-brand:focus {
        color: #fff;
        background-color: transparent;
    }

    .navbar-inverse .navbar-text {
        color: #9d9d9d;
    }

    .navbar-inverse .navbar-nav>li>a {
        color: #9d9d9d;
    }

    .navbar-inverse .navbar-nav>li>a:hover,
    .navbar-inverse .navbar-nav>li>a:focus {
        color: #fff;
        background-color: transparent;
    }

    .navbar-inverse .navbar-nav>.active>a,
    .navbar-inverse .navbar-nav>.active>a:hover,
    .navbar-inverse .navbar-nav>.active>a:focus {
        color: #fff;
        background-color: #080808;
    }

    .navbar-inverse .navbar-nav>.disabled>a,
    .navbar-inverse .navbar-nav>.disabled>a:hover,
    .navbar-inverse .navbar-nav>.disabled>a:focus {
        color: #444;
        background-color: transparent;
    }

    .navbar-inverse .navbar-toggle {
        border-color: #333;
    }

    .navbar-inverse .navbar-toggle:hover,
    .navbar-inverse .navbar-toggle:focus {
        background-color: #333;
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: #fff;
    }

    .navbar-inverse .navbar-collapse,
    .navbar-inverse .navbar-form {
        border-color: #101010;
    }

    .navbar-inverse .navbar-nav>.open>a,
    .navbar-inverse .navbar-nav>.open>a:hover,
    .navbar-inverse .navbar-nav>.open>a:focus {
        color: #fff;
        background-color: #080808;
    }

    @media (max-width: 767px) {
        .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
            border-color: #080808;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
            background-color: #080808;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #9d9d9d;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus {
            color: #fff;
            background-color: transparent;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus {
            color: #fff;
            background-color: #080808;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,
        .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus {
            color: #444;
            background-color: transparent;
        }
    }

    .navbar-inverse .navbar-link {
        color: #9d9d9d;
    }

    .navbar-inverse .navbar-link:hover {
        color: #fff;
    }

    .navbar-inverse .btn-link {
        color: #9d9d9d;
    }

    .navbar-inverse .btn-link:hover,
    .navbar-inverse .btn-link:focus {
        color: #fff;
    }

    .navbar-inverse .btn-link[disabled]:hover,
    fieldset[disabled] .navbar-inverse .btn-link:hover,
    .navbar-inverse .btn-link[disabled]:focus,
    fieldset[disabled] .navbar-inverse .btn-link:focus {
        color: #444;
    }

    .breadcrumb {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }

    .breadcrumb>li {
        display: inline-block;
    }

    .breadcrumb>li+li:before {
        padding: 0 5px;
        color: #ccc;
        content: "/\00a0";
    }

    .breadcrumb>.active {
        color: #777;
    }

    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px;
    }

    .pagination>li {
        display: inline;
    }

    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
        margin-left: 0;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .pagination>li:last-child>a,
    .pagination>li:last-child>span {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus {
        z-index: 2;
        color: #23527c;
        background-color: #eee;
        border-color: #ddd;
    }

    .pagination>.active>a,
    .pagination>.active>span,
    .pagination>.active>a:hover,
    .pagination>.active>span:hover,
    .pagination>.active>a:focus,
    .pagination>.active>span:focus {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #337ab7;
        border-color: #337ab7;
    }

    .pagination>.disabled>span,
    .pagination>.disabled>span:hover,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>a,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>a:focus {
        color: #777;
        cursor: not-allowed;
        background-color: #fff;
        border-color: #ddd;
    }

    .pagination-lg>li>a,
    .pagination-lg>li>span {
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:first-child>span {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
    }

    .pagination-lg>li:last-child>a,
    .pagination-lg>li:last-child>span {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    .pagination-sm>li>a,
    .pagination-sm>li>span {
        padding: 5px 10px;
        font-size: 12px;
        line-height: 1.5;
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:first-child>span {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .pagination-sm>li:last-child>a,
    .pagination-sm>li:last-child>span {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    .pager {
        padding-left: 0;
        margin: 20px 0;
        text-align: center;
        list-style: none;
    }

    .pager li {
        display: inline;
    }

    .pager li>a,
    .pager li>span {
        display: inline-block;
        padding: 5px 14px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 15px;
    }

    .pager li>a:hover,
    .pager li>a:focus {
        text-decoration: none;
        background-color: #eee;
    }

    .pager .next>a,
    .pager .next>span {
        float: right;
    }

    .pager .previous>a,
    .pager .previous>span {
        float: left;
    }

    .pager .disabled>a,
    .pager .disabled>a:hover,
    .pager .disabled>a:focus,
    .pager .disabled>span {
        color: #777;
        cursor: not-allowed;
        background-color: #fff;
    }

    .label {
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
    }

    a.label:hover,
    a.label:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .label:empty {
        display: none;
    }

    .btn .label {
        position: relative;
        top: -1px;
    }

    .label-default {
        background-color: #777;
    }

    .label-default[href]:hover,
    .label-default[href]:focus {
        background-color: #5e5e5e;
    }

    .label-primary {
        background-color: #337ab7;
    }

    .label-primary[href]:hover,
    .label-primary[href]:focus {
        background-color: #286090;
    }

    .label-success {
        background-color: #5cb85c;
    }

    .label-success[href]:hover,
    .label-success[href]:focus {
        background-color: #449d44;
    }

    .label-info {
        background-color: #5bc0de;
    }

    .label-info[href]:hover,
    .label-info[href]:focus {
        background-color: #31b0d5;
    }

    .label-warning {
        background-color: #f0ad4e;
    }

    .label-warning[href]:hover,
    .label-warning[href]:focus {
        background-color: #ec971f;
    }

    .label-danger {
        background-color: #d9534f;
    }

    .label-danger[href]:hover,
    .label-danger[href]:focus {
        background-color: #c9302c;
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: bold;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        background-color: #777;
        border-radius: 10px;
    }

    .badge:empty {
        display: none;
    }

    .btn .badge {
        position: relative;
        top: -1px;
    }

    .btn-xs .badge,
    .btn-group-xs>.btn .badge {
        top: 0;
        padding: 1px 5px;
    }

    a.badge:hover,
    a.badge:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
    }

    .list-group-item.active>.badge,
    .nav-pills>.active>a>.badge {
        color: #337ab7;
        background-color: #fff;
    }

    .list-group-item>.badge {
        float: right;
    }

    .list-group-item>.badge+.badge {
        margin-right: 5px;
    }

    .nav-pills>li>a>.badge {
        margin-left: 3px;
    }

    .jumbotron {
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 30px;
        color: inherit;
        background-color: #eee;
    }

    .jumbotron h1,
    .jumbotron .h1 {
        color: inherit;
    }

    .jumbotron p {
        margin-bottom: 15px;
        font-size: 21px;
        font-weight: 200;
    }

    .jumbotron>hr {
        border-top-color: #d5d5d5;
    }

    .container .jumbotron,
    .container-fluid .jumbotron {
        padding-right: 15px;
        padding-left: 15px;
        border-radius: 6px;
    }

    .jumbotron .container {
        max-width: 100%;
    }

    @media screen and (min-width: 768px) {
        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px;
        }

        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-right: 60px;
            padding-left: 60px;
        }

        .jumbotron h1,
        .jumbotron .h1 {
            font-size: 63px;
        }
    }

    .thumbnail {
        display: block;
        padding: 4px;
        margin-bottom: 20px;
        line-height: 1.42857143;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;
        -webkit-transition: border .2s ease-in-out;
        -o-transition: border .2s ease-in-out;
        transition: border .2s ease-in-out;
    }

    .thumbnail>img,
    .thumbnail a>img {
        margin-right: auto;
        margin-left: auto;
    }

    a.thumbnail:hover,
    a.thumbnail:focus,
    a.thumbnail.active {
        border-color: #337ab7;
    }

    .thumbnail .caption {
        padding: 9px;
        color: #333;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert h4 {
        margin-top: 0;
        color: inherit;
    }

    .alert .alert-link {
        font-weight: bold;
    }

    .alert>p,
    .alert>ul {
        margin-bottom: 0;
    }

    .alert>p+p {
        margin-top: 5px;
    }

    .alert-dismissable,
    .alert-dismissible {
        padding-right: 35px;
    }

    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: -2px;
        right: -21px;
        color: inherit;
    }

    .alert-success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .alert-success hr {
        border-top-color: #c9e2b3;
    }

    .alert-success .alert-link {
        color: #2b542c;
    }

    .alert-info {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }

    .alert-info hr {
        border-top-color: #a6e1ec;
    }

    .alert-info .alert-link {
        color: #245269;
    }

    .alert-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }

    .alert-warning hr {
        border-top-color: #f7e1b5;
    }

    .alert-warning .alert-link {
        color: #66512c;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .alert-danger hr {
        border-top-color: #e4b9c0;
    }

    .alert-danger .alert-link {
        color: #843534;
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .progress {
        height: 20px;
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #f5f5f5;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
    }

    .progress-bar {
        float: left;
        width: 0;
        height: 100%;
        font-size: 12px;
        line-height: 20px;
        color: #fff;
        text-align: center;
        background-color: #337ab7;
        -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
        -webkit-transition: width .6s ease;
        -o-transition: width .6s ease;
        transition: width .6s ease;
    }

    .progress-striped .progress-bar,
    .progress-bar-striped {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        -webkit-background-size: 40px 40px;
        background-size: 40px 40px;
    }

    .progress.active .progress-bar,
    .progress-bar.active {
        -webkit-animation: progress-bar-stripes 2s linear infinite;
        -o-animation: progress-bar-stripes 2s linear infinite;
        animation: progress-bar-stripes 2s linear infinite;
    }

    .progress-bar-success {
        background-color: #5cb85c;
    }

    .progress-striped .progress-bar-success {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    }

    .progress-bar-info {
        background-color: #5bc0de;
    }

    .progress-striped .progress-bar-info {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    }

    .progress-bar-warning {
        background-color: #f0ad4e;
    }

    .progress-striped .progress-bar-warning {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    }

    .progress-bar-danger {
        background-color: #d9534f;
    }

    .progress-striped .progress-bar-danger {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    }

    .media {
        margin-top: 15px;
    }

    .media:first-child {
        margin-top: 0;
    }

    .media,
    .media-body {
        overflow: hidden;
        zoom: 1;
    }

    .media-body {
        width: 10000px;
    }

    .media-object {
        display: block;
    }

    .media-object.img-thumbnail {
        max-width: none;
    }

    .media-right,
    .media>.pull-right {
        padding-left: 10px;
    }

    .media-left,
    .media>.pull-left {
        padding-right: 10px;
    }

    .media-left,
    .media-right,
    .media-body {
        display: table-cell;
        vertical-align: top;
    }

    .media-middle {
        vertical-align: middle;
    }

    .media-bottom {
        vertical-align: bottom;
    }

    .media-heading {
        margin-top: 0;
        margin-bottom: 5px;
    }

    .media-list {
        padding-left: 0;
        list-style: none;
    }

    .list-group {
        padding-left: 0;
        margin-bottom: 20px;
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: 10px 15px;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid #ddd;
    }

    .list-group-item:first-child {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    a.list-group-item,
    button.list-group-item {
        color: #555;
    }

    a.list-group-item .list-group-item-heading,
    button.list-group-item .list-group-item-heading {
        color: #333;
    }

    a.list-group-item:hover,
    button.list-group-item:hover,
    a.list-group-item:focus,
    button.list-group-item:focus {
        color: #555;
        text-decoration: none;
        background-color: #f5f5f5;
    }

    button.list-group-item {
        width: 100%;
        text-align: left;
    }

    .list-group-item.disabled,
    .list-group-item.disabled:hover,
    .list-group-item.disabled:focus {
        color: #777;
        cursor: not-allowed;
        background-color: #eee;
    }

    .list-group-item.disabled .list-group-item-heading,
    .list-group-item.disabled:hover .list-group-item-heading,
    .list-group-item.disabled:focus .list-group-item-heading {
        color: inherit;
    }

    .list-group-item.disabled .list-group-item-text,
    .list-group-item.disabled:hover .list-group-item-text,
    .list-group-item.disabled:focus .list-group-item-text {
        color: #777;
    }

    .list-group-item.active,
    .list-group-item.active:hover,
    .list-group-item.active:focus {
        z-index: 2;
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7;
    }

    .list-group-item.active .list-group-item-heading,
    .list-group-item.active:hover .list-group-item-heading,
    .list-group-item.active:focus .list-group-item-heading,
    .list-group-item.active .list-group-item-heading>small,
    .list-group-item.active:hover .list-group-item-heading>small,
    .list-group-item.active:focus .list-group-item-heading>small,
    .list-group-item.active .list-group-item-heading>.small,
    .list-group-item.active:hover .list-group-item-heading>.small,
    .list-group-item.active:focus .list-group-item-heading>.small {
        color: inherit;
    }

    .list-group-item.active .list-group-item-text,
    .list-group-item.active:hover .list-group-item-text,
    .list-group-item.active:focus .list-group-item-text {
        color: #c7ddef;
    }

    .list-group-item-success {
        color: #3c763d;
        background-color: #dff0d8;
    }

    a.list-group-item-success,
    button.list-group-item-success {
        color: #3c763d;
    }

    a.list-group-item-success .list-group-item-heading,
    button.list-group-item-success .list-group-item-heading {
        color: inherit;
    }

    a.list-group-item-success:hover,
    button.list-group-item-success:hover,
    a.list-group-item-success:focus,
    button.list-group-item-success:focus {
        color: #3c763d;
        background-color: #d0e9c6;
    }

    a.list-group-item-success.active,
    button.list-group-item-success.active,
    a.list-group-item-success.active:hover,
    button.list-group-item-success.active:hover,
    a.list-group-item-success.active:focus,
    button.list-group-item-success.active:focus {
        color: #fff;
        background-color: #3c763d;
        border-color: #3c763d;
    }

    .list-group-item-info {
        color: #31708f;
        background-color: #d9edf7;
    }

    a.list-group-item-info,
    button.list-group-item-info {
        color: #31708f;
    }

    a.list-group-item-info .list-group-item-heading,
    button.list-group-item-info .list-group-item-heading {
        color: inherit;
    }

    a.list-group-item-info:hover,
    button.list-group-item-info:hover,
    a.list-group-item-info:focus,
    button.list-group-item-info:focus {
        color: #31708f;
        background-color: #c4e3f3;
    }

    a.list-group-item-info.active,
    button.list-group-item-info.active,
    a.list-group-item-info.active:hover,
    button.list-group-item-info.active:hover,
    a.list-group-item-info.active:focus,
    button.list-group-item-info.active:focus {
        color: #fff;
        background-color: #31708f;
        border-color: #31708f;
    }

    .list-group-item-warning {
        color: #8a6d3b;
        background-color: #fcf8e3;
    }

    a.list-group-item-warning,
    button.list-group-item-warning {
        color: #8a6d3b;
    }

    a.list-group-item-warning .list-group-item-heading,
    button.list-group-item-warning .list-group-item-heading {
        color: inherit;
    }

    a.list-group-item-warning:hover,
    button.list-group-item-warning:hover,
    a.list-group-item-warning:focus,
    button.list-group-item-warning:focus {
        color: #8a6d3b;
        background-color: #faf2cc;
    }

    a.list-group-item-warning.active,
    button.list-group-item-warning.active,
    a.list-group-item-warning.active:hover,
    button.list-group-item-warning.active:hover,
    a.list-group-item-warning.active:focus,
    button.list-group-item-warning.active:focus {
        color: #fff;
        background-color: #8a6d3b;
        border-color: #8a6d3b;
    }

    .list-group-item-danger {
        color: #a94442;
        background-color: #f2dede;
    }

    a.list-group-item-danger,
    button.list-group-item-danger {
        color: #a94442;
    }

    a.list-group-item-danger .list-group-item-heading,
    button.list-group-item-danger .list-group-item-heading {
        color: inherit;
    }

    a.list-group-item-danger:hover,
    button.list-group-item-danger:hover,
    a.list-group-item-danger:focus,
    button.list-group-item-danger:focus {
        color: #a94442;
        background-color: #ebcccc;
    }

    a.list-group-item-danger.active,
    button.list-group-item-danger.active,
    a.list-group-item-danger.active:hover,
    button.list-group-item-danger.active:hover,
    a.list-group-item-danger.active:focus,
    button.list-group-item-danger.active:focus {
        color: #fff;
        background-color: #a94442;
        border-color: #a94442;
    }

    .list-group-item-heading {
        margin-top: 0;
        margin-bottom: 5px;
    }

    .list-group-item-text {
        margin-bottom: 0;
        line-height: 1.3;
    }

    .panel {
        margin-bottom: 20px;
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .panel-body {
        padding: 15px;
    }

    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-heading>.dropdown .dropdown-toggle {
        color: inherit;
    }

    .panel-title {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 16px;
        color: inherit;
    }

    .panel-title>a,
    .panel-title>small,
    .panel-title>.small,
    .panel-title>small>a,
    .panel-title>.small>a {
        color: inherit;
    }

    .panel-footer {
        padding: 10px 15px;
        background-color: #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .panel>.list-group,
    .panel>.panel-collapse>.list-group {
        margin-bottom: 0;
    }

    .panel>.list-group .list-group-item,
    .panel>.panel-collapse>.list-group .list-group-item {
        border-width: 1px 0;
        border-radius: 0;
    }

    .panel>.list-group:first-child .list-group-item:first-child,
    .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
        border-top: 0;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel>.list-group:last-child .list-group-item:last-child,
    .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
        border-bottom: 0;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .panel-heading+.list-group .list-group-item:first-child {
        border-top-width: 0;
    }

    .list-group+.panel-footer {
        border-top-width: 0;
    }

    .panel>.table,
    .panel>.table-responsive>.table,
    .panel>.panel-collapse>.table {
        margin-bottom: 0;
    }

    .panel>.table caption,
    .panel>.table-responsive>.table caption,
    .panel>.panel-collapse>.table caption {
        padding-right: 15px;
        padding-left: 15px;
    }

    .panel>.table:first-child,
    .panel>.table-responsive:first-child>.table:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
        border-top-left-radius: 3px;
    }

    .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
    .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
    .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
    .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
        border-top-right-radius: 3px;
    }

    .panel>.table:last-child,
    .panel>.table-responsive:last-child>.table:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
        border-bottom-left-radius: 3px;
    }

    .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
    .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
    .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
    .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
        border-bottom-right-radius: 3px;
    }

    .panel>.panel-body+.table,
    .panel>.panel-body+.table-responsive,
    .panel>.table+.panel-body,
    .panel>.table-responsive+.panel-body {
        border-top: 1px solid #ddd;
    }

    .panel>.table>tbody:first-child>tr:first-child th,
    .panel>.table>tbody:first-child>tr:first-child td {
        border-top: 0;
    }

    .panel>.table-bordered,
    .panel>.table-responsive>.table-bordered {
        border: 0;
    }

    .panel>.table-bordered>thead>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
    .panel>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
    .panel>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
    .panel>.table-bordered>thead>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
    .panel>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
    .panel>.table-bordered>tfoot>tr>td:first-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
        border-left: 0;
    }

    .panel>.table-bordered>thead>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
    .panel>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
    .panel>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
    .panel>.table-bordered>thead>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
    .panel>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
    .panel>.table-bordered>tfoot>tr>td:last-child,
    .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
        border-right: 0;
    }

    .panel>.table-bordered>thead>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
    .panel>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
    .panel>.table-bordered>thead>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
    .panel>.table-bordered>tbody>tr:first-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
        border-bottom: 0;
    }

    .panel>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
    .panel>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
    .panel>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
    .panel>.table-bordered>tfoot>tr:last-child>th,
    .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
        border-bottom: 0;
    }

    .panel>.table-responsive {
        margin-bottom: 0;
        border: 0;
    }

    .panel-group {
        margin-bottom: 20px;
    }

    .panel-group .panel {
        margin-bottom: 0;
        border-radius: 4px;
    }

    .panel-group .panel+.panel {
        margin-top: 5px;
    }

    .panel-group .panel-heading {
        border-bottom: 0;
    }

    .panel-group .panel-heading+.panel-collapse>.panel-body,
    .panel-group .panel-heading+.panel-collapse>.list-group {
        border-top: 1px solid #ddd;
    }

    .panel-group .panel-footer {
        border-top: 0;
    }

    .panel-group .panel-footer+.panel-collapse .panel-body {
        border-bottom: 1px solid #ddd;
    }

    .panel-default {
        border-color: #ddd;
    }

    .panel-default>.panel-heading {
        color: #333;
        background-color: #f5f5f5;
        border-color: #ddd;
    }

    .panel-default>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ddd;
    }

    .panel-default>.panel-heading .badge {
        color: #f5f5f5;
        background-color: #333;
    }

    .panel-default>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ddd;
    }

    .panel-primary {
        border-color: #337ab7;
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #337ab7;
        border-color: #337ab7;
    }

    .panel-primary>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #337ab7;
    }

    .panel-primary>.panel-heading .badge {
        color: #337ab7;
        background-color: #fff;
    }

    .panel-primary>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #337ab7;
    }

    .panel-success {
        border-color: #d6e9c6;
    }

    .panel-success>.panel-heading {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .panel-success>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #d6e9c6;
    }

    .panel-success>.panel-heading .badge {
        color: #dff0d8;
        background-color: #3c763d;
    }

    .panel-success>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #d6e9c6;
    }

    .panel-info {
        border-color: #bce8f1;
    }

    .panel-info>.panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }

    .panel-info>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #bce8f1;
    }

    .panel-info>.panel-heading .badge {
        color: #d9edf7;
        background-color: #31708f;
    }

    .panel-info>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #bce8f1;
    }

    .panel-warning {
        border-color: #faebcc;
    }

    .panel-warning>.panel-heading {
        color: #8a6d3b;
        background-color: #fcf8e3;
        border-color: #faebcc;
    }

    .panel-warning>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #faebcc;
    }

    .panel-warning>.panel-heading .badge {
        color: #fcf8e3;
        background-color: #8a6d3b;
    }

    .panel-warning>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #faebcc;
    }

    .panel-danger {
        border-color: #ebccd1;
    }

    .panel-danger>.panel-heading {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .panel-danger>.panel-heading+.panel-collapse>.panel-body {
        border-top-color: #ebccd1;
    }

    .panel-danger>.panel-heading .badge {
        color: #f2dede;
        background-color: #a94442;
    }

    .panel-danger>.panel-footer+.panel-collapse>.panel-body {
        border-bottom-color: #ebccd1;
    }

    .embed-responsive {
        position: relative;
        display: block;
        height: 0;
        padding: 0;
        overflow: hidden;
    }

    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .embed-responsive-16by9 {
        padding-bottom: 56.25%;
    }

    .embed-responsive-4by3 {
        padding-bottom: 75%;
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }

    .well blockquote {
        border-color: #ddd;
        border-color: rgba(0, 0, 0, .15);
    }

    .well-lg {
        padding: 24px;
        border-radius: 6px;
    }

    .well-sm {
        padding: 9px;
        border-radius: 3px;
    }

    .close {
        float: right;
        font-size: 21px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        filter: alpha(opacity=20);
        opacity: .2;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
        filter: alpha(opacity=50);
        opacity: .5;
    }

    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0;
    }

    .modal-open {
        overflow: hidden;
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0;
    }

    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform .3s ease-out;
        -o-transition: -o-transform .3s ease-out;
        transition: transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        -ms-transform: translate(0, -25%);
        -o-transform: translate(0, -25%);
        transform: translate(0, -25%);
    }

    .modal.in .modal-dialog {
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 10px;
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000;
    }

    .modal-backdrop.fade {
        filter: alpha(opacity=0);
        opacity: 0;
    }

    .modal-backdrop.in {
        filter: alpha(opacity=50);
        opacity: .5;
    }

    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
    }

    .modal-header .close {
        margin-top: -2px;
    }

    .modal-title {
        margin: 0;
        line-height: 1.42857143;
    }

    .modal-body {
        position: relative;
        padding: 15px;
    }

    .modal-footer {
        padding: 15px;
        text-align: right;
        border-top: 1px solid #e5e5e5;
    }

    .modal-footer .btn+.btn {
        margin-bottom: 0;
        margin-left: 5px;
    }

    .modal-footer .btn-group .btn+.btn {
        margin-left: -1px;
    }

    .modal-footer .btn-block+.btn-block {
        margin-left: 0;
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
    }

    @media (min-width: 768px) {
        .modal-dialog {
            width: 600px;
            margin: 30px auto;
        }

        .modal-content {
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        }

        .modal-sm {
            width: 300px;
        }
    }

    @media (min-width: 992px) {
        .modal-lg {
            width: 900px;
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 12px;
        font-style: normal;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        filter: alpha(opacity=0);
        opacity: 0;

        line-break: auto;
    }

    .tooltip.in {
        filter: alpha(opacity=90);
        opacity: .9;
    }

    .tooltip.top {
        padding: 5px 0;
        margin-top: -3px;
    }

    .tooltip.right {
        padding: 0 5px;
        margin-left: 3px;
    }

    .tooltip.bottom {
        padding: 5px 0;
        margin-top: 3px;
    }

    .tooltip.left {
        padding: 0 5px;
        margin-left: -3px;
    }

    .tooltip-inner {
        max-width: 200px;
        padding: 3px 8px;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 4px;
    }

    .tooltip-arrow {
        position: absolute;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
    }

    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000;
    }

    .tooltip.top-left .tooltip-arrow {
        right: 5px;
        bottom: 0;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000;
    }

    .tooltip.top-right .tooltip-arrow {
        bottom: 0;
        left: 5px;
        margin-bottom: -5px;
        border-width: 5px 5px 0;
        border-top-color: #000;
    }

    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #000;
    }

    .tooltip.left .tooltip-arrow {
        top: 50%;
        right: 0;
        margin-top: -5px;
        border-width: 5px 0 5px 5px;
        border-left-color: #000;
    }

    .tooltip.bottom .tooltip-arrow {
        top: 0;
        left: 50%;
        margin-left: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000;
    }

    .tooltip.bottom-left .tooltip-arrow {
        top: 0;
        right: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000;
    }

    .tooltip.bottom-right .tooltip-arrow {
        top: 0;
        left: 5px;
        margin-top: -5px;
        border-width: 0 5px 5px;
        border-bottom-color: #000;
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: none;
        max-width: 276px;
        padding: 1px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        word-wrap: normal;
        white-space: normal;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

        line-break: auto;
    }

    .popover.top {
        margin-top: -10px;
    }

    .popover.right {
        margin-left: 10px;
    }

    .popover.bottom {
        margin-top: 10px;
    }

    .popover.left {
        margin-left: -10px;
    }

    .popover-title {
        padding: 8px 14px;
        margin: 0;
        font-size: 14px;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-radius: 5px 5px 0 0;
    }

    .popover-content {
        padding: 9px 14px;
    }

    .popover>.arrow,
    .popover>.arrow:after {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
    }

    .popover>.arrow {
        border-width: 11px;
    }

    .popover>.arrow:after {
        content: "";
        border-width: 10px;
    }

    .popover.top>.arrow {
        bottom: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-color: #999;
        border-top-color: rgba(0, 0, 0, .25);
        border-bottom-width: 0;
    }

    .popover.top>.arrow:after {
        bottom: 1px;
        margin-left: -10px;
        content: " ";
        border-top-color: #fff;
        border-bottom-width: 0;
    }

    .popover.right>.arrow {
        top: 50%;
        left: -11px;
        margin-top: -11px;
        border-right-color: #999;
        border-right-color: rgba(0, 0, 0, .25);
        border-left-width: 0;
    }

    .popover.right>.arrow:after {
        bottom: -10px;
        left: 1px;
        content: " ";
        border-right-color: #fff;
        border-left-width: 0;
    }

    .popover.bottom>.arrow {
        top: -11px;
        left: 50%;
        margin-left: -11px;
        border-top-width: 0;
        border-bottom-color: #999;
        border-bottom-color: rgba(0, 0, 0, .25);
    }

    .popover.bottom>.arrow:after {
        top: 1px;
        margin-left: -10px;
        content: " ";
        border-top-width: 0;
        border-bottom-color: #fff;
    }

    .popover.left>.arrow {
        top: 50%;
        right: -11px;
        margin-top: -11px;
        border-right-width: 0;
        border-left-color: #999;
        border-left-color: rgba(0, 0, 0, .25);
    }

    .popover.left>.arrow:after {
        right: 1px;
        bottom: -10px;
        content: " ";
        border-right-width: 0;
        border-left-color: #fff;
    }

    .carousel {
        position: relative;
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .carousel-inner>.item {
        position: relative;
        display: none;
        -webkit-transition: .6s ease-in-out left;
        -o-transition: .6s ease-in-out left;
        transition: .6s ease-in-out left;
    }

    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        line-height: 1;
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {
        .carousel-inner>.item {
            -webkit-transition: -webkit-transform .6s ease-in-out;
            -o-transition: -o-transform .6s ease-in-out;
            transition: transform .6s ease-in-out;

            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        .carousel-inner>.item.next,
        .carousel-inner>.item.active.right {
            left: 0;
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
        }

        .carousel-inner>.item.prev,
        .carousel-inner>.item.active.left {
            left: 0;
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
        }

        .carousel-inner>.item.next.left,
        .carousel-inner>.item.prev.right,
        .carousel-inner>.item.active {
            left: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .carousel-inner>.active,
    .carousel-inner>.next,
    .carousel-inner>.prev {
        display: block;
    }

    .carousel-inner>.active {
        left: 0;
    }

    .carousel-inner>.next,
    .carousel-inner>.prev {
        position: absolute;
        top: 0;
        width: 100%;
    }

    .carousel-inner>.next {
        left: 100%;
    }

    .carousel-inner>.prev {
        left: -100%;
    }

    .carousel-inner>.next.left,
    .carousel-inner>.prev.right {
        left: 0;
    }

    .carousel-inner>.active.left {
        left: -100%;
    }

    .carousel-inner>.active.right {
        left: 100%;
    }

    .carousel-control {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 15%;
        font-size: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
        background-color: rgba(0, 0, 0, 0);
        filter: alpha(opacity=50);
        opacity: .5;
    }

    .carousel-control.left {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        background-repeat: repeat-x;
    }

    .carousel-control.right {
        right: 0;
        left: auto;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
        background-repeat: repeat-x;
    }

    .carousel-control:hover,
    .carousel-control:focus {
        color: #fff;
        text-decoration: none;
        filter: alpha(opacity=90);
        outline: 0;
        opacity: .9;
    }

    .carousel-control .icon-prev,
    .carousel-control .icon-next,
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right {
        position: absolute;
        top: 50%;
        z-index: 5;
        display: inline-block;
        margin-top: -10px;
    }

    .carousel-control .icon-prev,
    .carousel-control .glyphicon-chevron-left {
        left: 50%;
        margin-left: -10px;
    }

    .carousel-control .icon-next,
    .carousel-control .glyphicon-chevron-right {
        right: 50%;
        margin-right: -10px;
    }

    .carousel-control .icon-prev,
    .carousel-control .icon-next {
        width: 20px;
        height: 20px;
        font-family: serif;
        line-height: 1;
    }

    .carousel-control .icon-prev:before {
        content: '\2039';
    }

    .carousel-control .icon-next:before {
        content: '\203a';
    }

    .carousel-indicators {
        position: absolute;
        bottom: 10px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none;
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000 \9;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #fff;
        border-radius: 10px;
    }

    .carousel-indicators .active {
        width: 12px;
        height: 12px;
        margin: 0;
        background-color: #fff;
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    }

    .carousel-caption .btn {
        text-shadow: none;
    }

    @media screen and (min-width: 768px) {

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            width: 30px;
            height: 30px;
            margin-top: -10px;
            font-size: 30px;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            margin-left: -10px;
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            margin-right: -10px;
        }

        .carousel-caption {
            right: 20%;
            left: 20%;
            padding-bottom: 30px;
        }

        .carousel-indicators {
            bottom: 20px;
        }
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        display: table;
        content: " ";
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-header:after,
    .modal-footer:after {
        clear: both;
    }

    .center-block {
        display: block;
        margin-right: auto;
        margin-left: auto;
    }

    .pull-right {
        float: right !important;
    }

    .pull-left {
        float: left !important;
    }

    .hide {
        display: none !important;
    }

    .show {
        display: block !important;
    }

    .invisible {
        visibility: hidden;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    .hidden {
        display: none !important;
    }

    .affix {
        position: fixed;
    }

    @-ms-viewport {
        width: device-width;
    }

    .visible-xs,
    .visible-sm,
    .visible-md,
    .visible-lg {
        display: none !important;
    }

    .visible-xs-block,
    .visible-xs-inline,
    .visible-xs-inline-block,
    .visible-sm-block,
    .visible-sm-inline,
    .visible-sm-inline-block,
    .visible-md-block,
    .visible-md-inline,
    .visible-md-inline-block,
    .visible-lg-block,
    .visible-lg-inline,
    .visible-lg-inline-block {
        display: none !important;
    }

    @media (max-width: 767px) {
        .visible-xs {
            display: block !important;
        }

        table.visible-xs {
            display: table !important;
        }

        tr.visible-xs {
            display: table-row !important;
        }

        th.visible-xs,
        td.visible-xs {
            display: table-cell !important;
        }
    }

    @media (max-width: 767px) {
        .visible-xs-block {
            display: block !important;
        }
    }

    @media (max-width: 767px) {
        .visible-xs-inline {
            display: inline !important;
        }
    }

    @media (max-width: 767px) {
        .visible-xs-inline-block {
            display: inline-block !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm {
            display: block !important;
        }

        table.visible-sm {
            display: table !important;
        }

        tr.visible-sm {
            display: table-row !important;
        }

        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-block {
            display: block !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline {
            display: inline !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .visible-sm-inline-block {
            display: inline-block !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md {
            display: block !important;
        }

        table.visible-md {
            display: table !important;
        }

        tr.visible-md {
            display: table-row !important;
        }

        th.visible-md,
        td.visible-md {
            display: table-cell !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-block {
            display: block !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline {
            display: inline !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .visible-md-inline-block {
            display: inline-block !important;
        }
    }

    @media (min-width: 1200px) {
        .visible-lg {
            display: block !important;
        }

        table.visible-lg {
            display: table !important;
        }

        tr.visible-lg {
            display: table-row !important;
        }

        th.visible-lg,
        td.visible-lg {
            display: table-cell !important;
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-block {
            display: block !important;
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-inline {
            display: inline !important;
        }
    }

    @media (min-width: 1200px) {
        .visible-lg-inline-block {
            display: inline-block !important;
        }
    }

    @media (max-width: 767px) {
        .hidden-xs {
            display: none !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .hidden-sm {
            display: none !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {
        .hidden-md {
            display: none !important;
        }
    }

    @media (min-width: 1200px) {
        .hidden-lg {
            display: none !important;
        }
    }

    .visible-print {
        display: none !important;
    }

    @media print {
        .visible-print {
            display: block !important;
        }

        table.visible-print {
            display: table !important;
        }

        tr.visible-print {
            display: table-row !important;
        }

        th.visible-print,
        td.visible-print {
            display: table-cell !important;
        }
    }

    .visible-print-block {
        display: none !important;
    }

    @media print {
        .visible-print-block {
            display: block !important;
        }
    }

    .visible-print-inline {
        display: none !important;
    }

    @media print {
        .visible-print-inline {
            display: inline !important;
        }
    }

    .visible-print-inline-block {
        display: none !important;
    }

    @media print {
        .visible-print-inline-block {
            display: inline-block !important;
        }
    }

    @media print {
        .hidden-print {
            display: none !important;
        }
    }

    /*# sourceMappingURL=bootstrap.css.map */
    #page-feature {
        padding-left: 40px;
        padding-top: 30px;
    }

    #paper_card .container {
        max-width: 700px;
    }

    #paper_card .card-body i {
        color: red;
        font-size: xx-large;
    }

    #next .row button {
        font-size: xx-large;
    }

    #paper-design {
        border: 2px dotted black;
        margin: 10px;
        padding: 5px;
    }

    #paper-new {
        height: 943px;
        max-width: 700px;
        margin: auto;
        background-color: white;
    }

    .hidden {
        display: none !important;
    }

    /*!
 * Bootstrap Icons v1.10.5 (https://icons.getbootstrap.com/)
 * Copyright 2019-2023 The Bootstrap Authors
 * Licensed under MIT (https://github.com/twbs/icons/blob/main/LICENSE)
 */

    @font-face {
        font-display: block;
        font-family: "bootstrap-icons";
        src: url("./fonts/bootstrap-icons.woff2?1fa40e8900654d2863d011707b9fb6f2") format("woff2"),
            url("./fonts/bootstrap-icons.woff?1fa40e8900654d2863d011707b9fb6f2") format("woff");
    }

    .bi::before,
    [class^="bi-"]::before,
    [class*=" bi-"]::before {
        display: inline-block;
        font-family: bootstrap-icons !important;
        font-style: normal;
        font-weight: normal !important;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        vertical-align: -.125em;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .bi-123::before {
        content: "\f67f";
    }

    .bi-alarm-fill::before {
        content: "\f101";
    }

    .bi-alarm::before {
        content: "\f102";
    }

    .bi-align-bottom::before {
        content: "\f103";
    }

    .bi-align-center::before {
        content: "\f104";
    }

    .bi-align-end::before {
        content: "\f105";
    }

    .bi-align-middle::before {
        content: "\f106";
    }

    .bi-align-start::before {
        content: "\f107";
    }

    .bi-align-top::before {
        content: "\f108";
    }

    .bi-alt::before {
        content: "\f109";
    }

    .bi-app-indicator::before {
        content: "\f10a";
    }

    .bi-app::before {
        content: "\f10b";
    }

    .bi-archive-fill::before {
        content: "\f10c";
    }

    .bi-archive::before {
        content: "\f10d";
    }

    .bi-arrow-90deg-down::before {
        content: "\f10e";
    }

    .bi-arrow-90deg-left::before {
        content: "\f10f";
    }

    .bi-arrow-90deg-right::before {
        content: "\f110";
    }

    .bi-arrow-90deg-up::before {
        content: "\f111";
    }

    .bi-arrow-bar-down::before {
        content: "\f112";
    }

    .bi-arrow-bar-left::before {
        content: "\f113";
    }

    .bi-arrow-bar-right::before {
        content: "\f114";
    }

    .bi-arrow-bar-up::before {
        content: "\f115";
    }

    .bi-arrow-clockwise::before {
        content: "\f116";
    }

    .bi-arrow-counterclockwise::before {
        content: "\f117";
    }

    .bi-arrow-down-circle-fill::before {
        content: "\f118";
    }

    .bi-arrow-down-circle::before {
        content: "\f119";
    }

    .bi-arrow-down-left-circle-fill::before {
        content: "\f11a";
    }

    .bi-arrow-down-left-circle::before {
        content: "\f11b";
    }

    .bi-arrow-down-left-square-fill::before {
        content: "\f11c";
    }

    .bi-arrow-down-left-square::before {
        content: "\f11d";
    }

    .bi-arrow-down-left::before {
        content: "\f11e";
    }

    .bi-arrow-down-right-circle-fill::before {
        content: "\f11f";
    }

    .bi-arrow-down-right-circle::before {
        content: "\f120";
    }

    .bi-arrow-down-right-square-fill::before {
        content: "\f121";
    }

    .bi-arrow-down-right-square::before {
        content: "\f122";
    }

    .bi-arrow-down-right::before {
        content: "\f123";
    }

    .bi-arrow-down-short::before {
        content: "\f124";
    }

    .bi-arrow-down-square-fill::before {
        content: "\f125";
    }

    .bi-arrow-down-square::before {
        content: "\f126";
    }

    .bi-arrow-down-up::before {
        content: "\f127";
    }

    .bi-arrow-down::before {
        content: "\f128";
    }

    .bi-arrow-left-circle-fill::before {
        content: "\f129";
    }

    .bi-arrow-left-circle::before {
        content: "\f12a";
    }

    .bi-arrow-left-right::before {
        content: "\f12b";
    }

    .bi-arrow-left-short::before {
        content: "\f12c";
    }

    .bi-arrow-left-square-fill::before {
        content: "\f12d";
    }

    .bi-arrow-left-square::before {
        content: "\f12e";
    }

    .bi-arrow-left::before {
        content: "\f12f";
    }

    .bi-arrow-repeat::before {
        content: "\f130";
    }

    .bi-arrow-return-left::before {
        content: "\f131";
    }

    .bi-arrow-return-right::before {
        content: "\f132";
    }

    .bi-arrow-right-circle-fill::before {
        content: "\f133";
    }

    .bi-arrow-right-circle::before {
        content: "\f134";
    }

    .bi-arrow-right-short::before {
        content: "\f135";
    }

    .bi-arrow-right-square-fill::before {
        content: "\f136";
    }

    .bi-arrow-right-square::before {
        content: "\f137";
    }

    .bi-arrow-right::before {
        content: "\f138";
    }

    .bi-arrow-up-circle-fill::before {
        content: "\f139";
    }

    .bi-arrow-up-circle::before {
        content: "\f13a";
    }

    .bi-arrow-up-left-circle-fill::before {
        content: "\f13b";
    }

    .bi-arrow-up-left-circle::before {
        content: "\f13c";
    }

    .bi-arrow-up-left-square-fill::before {
        content: "\f13d";
    }

    .bi-arrow-up-left-square::before {
        content: "\f13e";
    }

    .bi-arrow-up-left::before {
        content: "\f13f";
    }

    .bi-arrow-up-right-circle-fill::before {
        content: "\f140";
    }

    .bi-arrow-up-right-circle::before {
        content: "\f141";
    }

    .bi-arrow-up-right-square-fill::before {
        content: "\f142";
    }

    .bi-arrow-up-right-square::before {
        content: "\f143";
    }

    .bi-arrow-up-right::before {
        content: "\f144";
    }

    .bi-arrow-up-short::before {
        content: "\f145";
    }

    .bi-arrow-up-square-fill::before {
        content: "\f146";
    }

    .bi-arrow-up-square::before {
        content: "\f147";
    }

    .bi-arrow-up::before {
        content: "\f148";
    }

    .bi-arrows-angle-contract::before {
        content: "\f149";
    }

    .bi-arrows-angle-expand::before {
        content: "\f14a";
    }

    .bi-arrows-collapse::before {
        content: "\f14b";
    }

    .bi-arrows-expand::before {
        content: "\f14c";
    }

    .bi-arrows-fullscreen::before {
        content: "\f14d";
    }

    .bi-arrows-move::before {
        content: "\f14e";
    }

    .bi-aspect-ratio-fill::before {
        content: "\f14f";
    }

    .bi-aspect-ratio::before {
        content: "\f150";
    }

    .bi-asterisk::before {
        content: "\f151";
    }

    .bi-at::before {
        content: "\f152";
    }

    .bi-award-fill::before {
        content: "\f153";
    }

    .bi-award::before {
        content: "\f154";
    }

    .bi-back::before {
        content: "\f155";
    }

    .bi-backspace-fill::before {
        content: "\f156";
    }

    .bi-backspace-reverse-fill::before {
        content: "\f157";
    }

    .bi-backspace-reverse::before {
        content: "\f158";
    }

    .bi-backspace::before {
        content: "\f159";
    }

    .bi-badge-3d-fill::before {
        content: "\f15a";
    }

    .bi-badge-3d::before {
        content: "\f15b";
    }

    .bi-badge-4k-fill::before {
        content: "\f15c";
    }

    .bi-badge-4k::before {
        content: "\f15d";
    }

    .bi-badge-8k-fill::before {
        content: "\f15e";
    }

    .bi-badge-8k::before {
        content: "\f15f";
    }

    .bi-badge-ad-fill::before {
        content: "\f160";
    }

    .bi-badge-ad::before {
        content: "\f161";
    }

    .bi-badge-ar-fill::before {
        content: "\f162";
    }

    .bi-badge-ar::before {
        content: "\f163";
    }

    .bi-badge-cc-fill::before {
        content: "\f164";
    }

    .bi-badge-cc::before {
        content: "\f165";
    }

    .bi-badge-hd-fill::before {
        content: "\f166";
    }

    .bi-badge-hd::before {
        content: "\f167";
    }

    .bi-badge-tm-fill::before {
        content: "\f168";
    }

    .bi-badge-tm::before {
        content: "\f169";
    }

    .bi-badge-vo-fill::before {
        content: "\f16a";
    }

    .bi-badge-vo::before {
        content: "\f16b";
    }

    .bi-badge-vr-fill::before {
        content: "\f16c";
    }

    .bi-badge-vr::before {
        content: "\f16d";
    }

    .bi-badge-wc-fill::before {
        content: "\f16e";
    }

    .bi-badge-wc::before {
        content: "\f16f";
    }

    .bi-bag-check-fill::before {
        content: "\f170";
    }

    .bi-bag-check::before {
        content: "\f171";
    }

    .bi-bag-dash-fill::before {
        content: "\f172";
    }

    .bi-bag-dash::before {
        content: "\f173";
    }

    .bi-bag-fill::before {
        content: "\f174";
    }

    .bi-bag-plus-fill::before {
        content: "\f175";
    }

    .bi-bag-plus::before {
        content: "\f176";
    }

    .bi-bag-x-fill::before {
        content: "\f177";
    }

    .bi-bag-x::before {
        content: "\f178";
    }

    .bi-bag::before {
        content: "\f179";
    }

    .bi-bar-chart-fill::before {
        content: "\f17a";
    }

    .bi-bar-chart-line-fill::before {
        content: "\f17b";
    }

    .bi-bar-chart-line::before {
        content: "\f17c";
    }

    .bi-bar-chart-steps::before {
        content: "\f17d";
    }

    .bi-bar-chart::before {
        content: "\f17e";
    }

    .bi-basket-fill::before {
        content: "\f17f";
    }

    .bi-basket::before {
        content: "\f180";
    }

    .bi-basket2-fill::before {
        content: "\f181";
    }

    .bi-basket2::before {
        content: "\f182";
    }

    .bi-basket3-fill::before {
        content: "\f183";
    }

    .bi-basket3::before {
        content: "\f184";
    }

    .bi-battery-charging::before {
        content: "\f185";
    }

    .bi-battery-full::before {
        content: "\f186";
    }

    .bi-battery-half::before {
        content: "\f187";
    }

    .bi-battery::before {
        content: "\f188";
    }

    .bi-bell-fill::before {
        content: "\f189";
    }

    .bi-bell::before {
        content: "\f18a";
    }

    .bi-bezier::before {
        content: "\f18b";
    }

    .bi-bezier2::before {
        content: "\f18c";
    }

    .bi-bicycle::before {
        content: "\f18d";
    }

    .bi-binoculars-fill::before {
        content: "\f18e";
    }

    .bi-binoculars::before {
        content: "\f18f";
    }

    .bi-blockquote-left::before {
        content: "\f190";
    }

    .bi-blockquote-right::before {
        content: "\f191";
    }

    .bi-book-fill::before {
        content: "\f192";
    }

    .bi-book-half::before {
        content: "\f193";
    }

    .bi-book::before {
        content: "\f194";
    }

    .bi-bookmark-check-fill::before {
        content: "\f195";
    }

    .bi-bookmark-check::before {
        content: "\f196";
    }

    .bi-bookmark-dash-fill::before {
        content: "\f197";
    }

    .bi-bookmark-dash::before {
        content: "\f198";
    }

    .bi-bookmark-fill::before {
        content: "\f199";
    }

    .bi-bookmark-heart-fill::before {
        content: "\f19a";
    }

    .bi-bookmark-heart::before {
        content: "\f19b";
    }

    .bi-bookmark-plus-fill::before {
        content: "\f19c";
    }

    .bi-bookmark-plus::before {
        content: "\f19d";
    }

    .bi-bookmark-star-fill::before {
        content: "\f19e";
    }

    .bi-bookmark-star::before {
        content: "\f19f";
    }

    .bi-bookmark-x-fill::before {
        content: "\f1a0";
    }

    .bi-bookmark-x::before {
        content: "\f1a1";
    }

    .bi-bookmark::before {
        content: "\f1a2";
    }

    .bi-bookmarks-fill::before {
        content: "\f1a3";
    }

    .bi-bookmarks::before {
        content: "\f1a4";
    }

    .bi-bookshelf::before {
        content: "\f1a5";
    }

    .bi-bootstrap-fill::before {
        content: "\f1a6";
    }

    .bi-bootstrap-reboot::before {
        content: "\f1a7";
    }

    .bi-bootstrap::before {
        content: "\f1a8";
    }

    .bi-border-all::before {
        content: "\f1a9";
    }

    .bi-border-bottom::before {
        content: "\f1aa";
    }

    .bi-border-center::before {
        content: "\f1ab";
    }

    .bi-border-inner::before {
        content: "\f1ac";
    }

    .bi-border-left::before {
        content: "\f1ad";
    }

    .bi-border-middle::before {
        content: "\f1ae";
    }

    .bi-border-outer::before {
        content: "\f1af";
    }

    .bi-border-right::before {
        content: "\f1b0";
    }

    .bi-border-style::before {
        content: "\f1b1";
    }

    .bi-border-top::before {
        content: "\f1b2";
    }

    .bi-border-width::before {
        content: "\f1b3";
    }

    .bi-border::before {
        content: "\f1b4";
    }

    .bi-bounding-box-circles::before {
        content: "\f1b5";
    }

    .bi-bounding-box::before {
        content: "\f1b6";
    }

    .bi-box-arrow-down-left::before {
        content: "\f1b7";
    }

    .bi-box-arrow-down-right::before {
        content: "\f1b8";
    }

    .bi-box-arrow-down::before {
        content: "\f1b9";
    }

    .bi-box-arrow-in-down-left::before {
        content: "\f1ba";
    }

    .bi-box-arrow-in-down-right::before {
        content: "\f1bb";
    }

    .bi-box-arrow-in-down::before {
        content: "\f1bc";
    }

    .bi-box-arrow-in-left::before {
        content: "\f1bd";
    }

    .bi-box-arrow-in-right::before {
        content: "\f1be";
    }

    .bi-box-arrow-in-up-left::before {
        content: "\f1bf";
    }

    .bi-box-arrow-in-up-right::before {
        content: "\f1c0";
    }

    .bi-box-arrow-in-up::before {
        content: "\f1c1";
    }

    .bi-box-arrow-left::before {
        content: "\f1c2";
    }

    .bi-box-arrow-right::before {
        content: "\f1c3";
    }

    .bi-box-arrow-up-left::before {
        content: "\f1c4";
    }

    .bi-box-arrow-up-right::before {
        content: "\f1c5";
    }

    .bi-box-arrow-up::before {
        content: "\f1c6";
    }

    .bi-box-seam::before {
        content: "\f1c7";
    }

    .bi-box::before {
        content: "\f1c8";
    }

    .bi-braces::before {
        content: "\f1c9";
    }

    .bi-bricks::before {
        content: "\f1ca";
    }

    .bi-briefcase-fill::before {
        content: "\f1cb";
    }

    .bi-briefcase::before {
        content: "\f1cc";
    }

    .bi-brightness-alt-high-fill::before {
        content: "\f1cd";
    }

    .bi-brightness-alt-high::before {
        content: "\f1ce";
    }

    .bi-brightness-alt-low-fill::before {
        content: "\f1cf";
    }

    .bi-brightness-alt-low::before {
        content: "\f1d0";
    }

    .bi-brightness-high-fill::before {
        content: "\f1d1";
    }

    .bi-brightness-high::before {
        content: "\f1d2";
    }

    .bi-brightness-low-fill::before {
        content: "\f1d3";
    }

    .bi-brightness-low::before {
        content: "\f1d4";
    }

    .bi-broadcast-pin::before {
        content: "\f1d5";
    }

    .bi-broadcast::before {
        content: "\f1d6";
    }

    .bi-brush-fill::before {
        content: "\f1d7";
    }

    .bi-brush::before {
        content: "\f1d8";
    }

    .bi-bucket-fill::before {
        content: "\f1d9";
    }

    .bi-bucket::before {
        content: "\f1da";
    }

    .bi-bug-fill::before {
        content: "\f1db";
    }

    .bi-bug::before {
        content: "\f1dc";
    }

    .bi-building::before {
        content: "\f1dd";
    }

    .bi-bullseye::before {
        content: "\f1de";
    }

    .bi-calculator-fill::before {
        content: "\f1df";
    }

    .bi-calculator::before {
        content: "\f1e0";
    }

    .bi-calendar-check-fill::before {
        content: "\f1e1";
    }

    .bi-calendar-check::before {
        content: "\f1e2";
    }

    .bi-calendar-date-fill::before {
        content: "\f1e3";
    }

    .bi-calendar-date::before {
        content: "\f1e4";
    }

    .bi-calendar-day-fill::before {
        content: "\f1e5";
    }

    .bi-calendar-day::before {
        content: "\f1e6";
    }

    .bi-calendar-event-fill::before {
        content: "\f1e7";
    }

    .bi-calendar-event::before {
        content: "\f1e8";
    }

    .bi-calendar-fill::before {
        content: "\f1e9";
    }

    .bi-calendar-minus-fill::before {
        content: "\f1ea";
    }

    .bi-calendar-minus::before {
        content: "\f1eb";
    }

    .bi-calendar-month-fill::before {
        content: "\f1ec";
    }

    .bi-calendar-month::before {
        content: "\f1ed";
    }

    .bi-calendar-plus-fill::before {
        content: "\f1ee";
    }

    .bi-calendar-plus::before {
        content: "\f1ef";
    }

    .bi-calendar-range-fill::before {
        content: "\f1f0";
    }

    .bi-calendar-range::before {
        content: "\f1f1";
    }

    .bi-calendar-week-fill::before {
        content: "\f1f2";
    }

    .bi-calendar-week::before {
        content: "\f1f3";
    }

    .bi-calendar-x-fill::before {
        content: "\f1f4";
    }

    .bi-calendar-x::before {
        content: "\f1f5";
    }

    .bi-calendar::before {
        content: "\f1f6";
    }

    .bi-calendar2-check-fill::before {
        content: "\f1f7";
    }

    .bi-calendar2-check::before {
        content: "\f1f8";
    }

    .bi-calendar2-date-fill::before {
        content: "\f1f9";
    }

    .bi-calendar2-date::before {
        content: "\f1fa";
    }

    .bi-calendar2-day-fill::before {
        content: "\f1fb";
    }

    .bi-calendar2-day::before {
        content: "\f1fc";
    }

    .bi-calendar2-event-fill::before {
        content: "\f1fd";
    }

    .bi-calendar2-event::before {
        content: "\f1fe";
    }

    .bi-calendar2-fill::before {
        content: "\f1ff";
    }

    .bi-calendar2-minus-fill::before {
        content: "\f200";
    }

    .bi-calendar2-minus::before {
        content: "\f201";
    }

    .bi-calendar2-month-fill::before {
        content: "\f202";
    }

    .bi-calendar2-month::before {
        content: "\f203";
    }

    .bi-calendar2-plus-fill::before {
        content: "\f204";
    }

    .bi-calendar2-plus::before {
        content: "\f205";
    }

    .bi-calendar2-range-fill::before {
        content: "\f206";
    }

    .bi-calendar2-range::before {
        content: "\f207";
    }

    .bi-calendar2-week-fill::before {
        content: "\f208";
    }

    .bi-calendar2-week::before {
        content: "\f209";
    }

    .bi-calendar2-x-fill::before {
        content: "\f20a";
    }

    .bi-calendar2-x::before {
        content: "\f20b";
    }

    .bi-calendar2::before {
        content: "\f20c";
    }

    .bi-calendar3-event-fill::before {
        content: "\f20d";
    }

    .bi-calendar3-event::before {
        content: "\f20e";
    }

    .bi-calendar3-fill::before {
        content: "\f20f";
    }

    .bi-calendar3-range-fill::before {
        content: "\f210";
    }

    .bi-calendar3-range::before {
        content: "\f211";
    }

    .bi-calendar3-week-fill::before {
        content: "\f212";
    }

    .bi-calendar3-week::before {
        content: "\f213";
    }

    .bi-calendar3::before {
        content: "\f214";
    }

    .bi-calendar4-event::before {
        content: "\f215";
    }

    .bi-calendar4-range::before {
        content: "\f216";
    }

    .bi-calendar4-week::before {
        content: "\f217";
    }

    .bi-calendar4::before {
        content: "\f218";
    }

    .bi-camera-fill::before {
        content: "\f219";
    }

    .bi-camera-reels-fill::before {
        content: "\f21a";
    }

    .bi-camera-reels::before {
        content: "\f21b";
    }

    .bi-camera-video-fill::before {
        content: "\f21c";
    }

    .bi-camera-video-off-fill::before {
        content: "\f21d";
    }

    .bi-camera-video-off::before {
        content: "\f21e";
    }

    .bi-camera-video::before {
        content: "\f21f";
    }

    .bi-camera::before {
        content: "\f220";
    }

    .bi-camera2::before {
        content: "\f221";
    }

    .bi-capslock-fill::before {
        content: "\f222";
    }

    .bi-capslock::before {
        content: "\f223";
    }

    .bi-card-checklist::before {
        content: "\f224";
    }

    .bi-card-heading::before {
        content: "\f225";
    }

    .bi-card-image::before {
        content: "\f226";
    }

    .bi-card-list::before {
        content: "\f227";
    }

    .bi-card-text::before {
        content: "\f228";
    }

    .bi-caret-down-fill::before {
        content: "\f229";
    }

    .bi-caret-down-square-fill::before {
        content: "\f22a";
    }

    .bi-caret-down-square::before {
        content: "\f22b";
    }

    .bi-caret-down::before {
        content: "\f22c";
    }

    .bi-caret-left-fill::before {
        content: "\f22d";
    }

    .bi-caret-left-square-fill::before {
        content: "\f22e";
    }

    .bi-caret-left-square::before {
        content: "\f22f";
    }

    .bi-caret-left::before {
        content: "\f230";
    }

    .bi-caret-right-fill::before {
        content: "\f231";
    }

    .bi-caret-right-square-fill::before {
        content: "\f232";
    }

    .bi-caret-right-square::before {
        content: "\f233";
    }

    .bi-caret-right::before {
        content: "\f234";
    }

    .bi-caret-up-fill::before {
        content: "\f235";
    }

    .bi-caret-up-square-fill::before {
        content: "\f236";
    }

    .bi-caret-up-square::before {
        content: "\f237";
    }

    .bi-caret-up::before {
        content: "\f238";
    }

    .bi-cart-check-fill::before {
        content: "\f239";
    }

    .bi-cart-check::before {
        content: "\f23a";
    }

    .bi-cart-dash-fill::before {
        content: "\f23b";
    }

    .bi-cart-dash::before {
        content: "\f23c";
    }

    .bi-cart-fill::before {
        content: "\f23d";
    }

    .bi-cart-plus-fill::before {
        content: "\f23e";
    }

    .bi-cart-plus::before {
        content: "\f23f";
    }

    .bi-cart-x-fill::before {
        content: "\f240";
    }

    .bi-cart-x::before {
        content: "\f241";
    }

    .bi-cart::before {
        content: "\f242";
    }

    .bi-cart2::before {
        content: "\f243";
    }

    .bi-cart3::before {
        content: "\f244";
    }

    .bi-cart4::before {
        content: "\f245";
    }

    .bi-cash-stack::before {
        content: "\f246";
    }

    .bi-cash::before {
        content: "\f247";
    }

    .bi-cast::before {
        content: "\f248";
    }

    .bi-chat-dots-fill::before {
        content: "\f249";
    }

    .bi-chat-dots::before {
        content: "\f24a";
    }

    .bi-chat-fill::before {
        content: "\f24b";
    }

    .bi-chat-left-dots-fill::before {
        content: "\f24c";
    }

    .bi-chat-left-dots::before {
        content: "\f24d";
    }

    .bi-chat-left-fill::before {
        content: "\f24e";
    }

    .bi-chat-left-quote-fill::before {
        content: "\f24f";
    }

    .bi-chat-left-quote::before {
        content: "\f250";
    }

    .bi-chat-left-text-fill::before {
        content: "\f251";
    }

    .bi-chat-left-text::before {
        content: "\f252";
    }

    .bi-chat-left::before {
        content: "\f253";
    }

    .bi-chat-quote-fill::before {
        content: "\f254";
    }

    .bi-chat-quote::before {
        content: "\f255";
    }

    .bi-chat-right-dots-fill::before {
        content: "\f256";
    }

    .bi-chat-right-dots::before {
        content: "\f257";
    }

    .bi-chat-right-fill::before {
        content: "\f258";
    }

    .bi-chat-right-quote-fill::before {
        content: "\f259";
    }

    .bi-chat-right-quote::before {
        content: "\f25a";
    }

    .bi-chat-right-text-fill::before {
        content: "\f25b";
    }

    .bi-chat-right-text::before {
        content: "\f25c";
    }

    .bi-chat-right::before {
        content: "\f25d";
    }

    .bi-chat-square-dots-fill::before {
        content: "\f25e";
    }

    .bi-chat-square-dots::before {
        content: "\f25f";
    }

    .bi-chat-square-fill::before {
        content: "\f260";
    }

    .bi-chat-square-quote-fill::before {
        content: "\f261";
    }

    .bi-chat-square-quote::before {
        content: "\f262";
    }

    .bi-chat-square-text-fill::before {
        content: "\f263";
    }

    .bi-chat-square-text::before {
        content: "\f264";
    }

    .bi-chat-square::before {
        content: "\f265";
    }

    .bi-chat-text-fill::before {
        content: "\f266";
    }

    .bi-chat-text::before {
        content: "\f267";
    }

    .bi-chat::before {
        content: "\f268";
    }

    .bi-check-all::before {
        content: "\f269";
    }

    .bi-check-circle-fill::before {
        content: "\f26a";
    }

    .bi-check-circle::before {
        content: "\f26b";
    }

    .bi-check-square-fill::before {
        content: "\f26c";
    }

    .bi-check-square::before {
        content: "\f26d";
    }

    .bi-check::before {
        content: "\f26e";
    }

    .bi-check2-all::before {
        content: "\f26f";
    }

    .bi-check2-circle::before {
        content: "\f270";
    }

    .bi-check2-square::before {
        content: "\f271";
    }

    .bi-check2::before {
        content: "\f272";
    }

    .bi-chevron-bar-contract::before {
        content: "\f273";
    }

    .bi-chevron-bar-down::before {
        content: "\f274";
    }

    .bi-chevron-bar-expand::before {
        content: "\f275";
    }

    .bi-chevron-bar-left::before {
        content: "\f276";
    }

    .bi-chevron-bar-right::before {
        content: "\f277";
    }

    .bi-chevron-bar-up::before {
        content: "\f278";
    }

    .bi-chevron-compact-down::before {
        content: "\f279";
    }

    .bi-chevron-compact-left::before {
        content: "\f27a";
    }

    .bi-chevron-compact-right::before {
        content: "\f27b";
    }

    .bi-chevron-compact-up::before {
        content: "\f27c";
    }

    .bi-chevron-contract::before {
        content: "\f27d";
    }

    .bi-chevron-double-down::before {
        content: "\f27e";
    }

    .bi-chevron-double-left::before {
        content: "\f27f";
    }

    .bi-chevron-double-right::before {
        content: "\f280";
    }

    .bi-chevron-double-up::before {
        content: "\f281";
    }

    .bi-chevron-down::before {
        content: "\f282";
    }

    .bi-chevron-expand::before {
        content: "\f283";
    }

    .bi-chevron-left::before {
        content: "\f284";
    }

    .bi-chevron-right::before {
        content: "\f285";
    }

    .bi-chevron-up::before {
        content: "\f286";
    }

    .bi-circle-fill::before {
        content: "\f287";
    }

    .bi-circle-half::before {
        content: "\f288";
    }

    .bi-circle-square::before {
        content: "\f289";
    }

    .bi-circle::before {
        content: "\f28a";
    }

    .bi-clipboard-check::before {
        content: "\f28b";
    }

    .bi-clipboard-data::before {
        content: "\f28c";
    }

    .bi-clipboard-minus::before {
        content: "\f28d";
    }

    .bi-clipboard-plus::before {
        content: "\f28e";
    }

    .bi-clipboard-x::before {
        content: "\f28f";
    }

    .bi-clipboard::before {
        content: "\f290";
    }

    .bi-clock-fill::before {
        content: "\f291";
    }

    .bi-clock-history::before {
        content: "\f292";
    }

    .bi-clock::before {
        content: "\f293";
    }

    .bi-cloud-arrow-down-fill::before {
        content: "\f294";
    }

    .bi-cloud-arrow-down::before {
        content: "\f295";
    }

    .bi-cloud-arrow-up-fill::before {
        content: "\f296";
    }

    .bi-cloud-arrow-up::before {
        content: "\f297";
    }

    .bi-cloud-check-fill::before {
        content: "\f298";
    }

    .bi-cloud-check::before {
        content: "\f299";
    }

    .bi-cloud-download-fill::before {
        content: "\f29a";
    }

    .bi-cloud-download::before {
        content: "\f29b";
    }

    .bi-cloud-drizzle-fill::before {
        content: "\f29c";
    }

    .bi-cloud-drizzle::before {
        content: "\f29d";
    }

    .bi-cloud-fill::before {
        content: "\f29e";
    }

    .bi-cloud-fog-fill::before {
        content: "\f29f";
    }

    .bi-cloud-fog::before {
        content: "\f2a0";
    }

    .bi-cloud-fog2-fill::before {
        content: "\f2a1";
    }

    .bi-cloud-fog2::before {
        content: "\f2a2";
    }

    .bi-cloud-hail-fill::before {
        content: "\f2a3";
    }

    .bi-cloud-hail::before {
        content: "\f2a4";
    }

    .bi-cloud-haze-fill::before {
        content: "\f2a6";
    }

    .bi-cloud-haze::before {
        content: "\f2a7";
    }

    .bi-cloud-haze2-fill::before {
        content: "\f2a8";
    }

    .bi-cloud-lightning-fill::before {
        content: "\f2a9";
    }

    .bi-cloud-lightning-rain-fill::before {
        content: "\f2aa";
    }

    .bi-cloud-lightning-rain::before {
        content: "\f2ab";
    }

    .bi-cloud-lightning::before {
        content: "\f2ac";
    }

    .bi-cloud-minus-fill::before {
        content: "\f2ad";
    }

    .bi-cloud-minus::before {
        content: "\f2ae";
    }

    .bi-cloud-moon-fill::before {
        content: "\f2af";
    }

    .bi-cloud-moon::before {
        content: "\f2b0";
    }

    .bi-cloud-plus-fill::before {
        content: "\f2b1";
    }

    .bi-cloud-plus::before {
        content: "\f2b2";
    }

    .bi-cloud-rain-fill::before {
        content: "\f2b3";
    }

    .bi-cloud-rain-heavy-fill::before {
        content: "\f2b4";
    }

    .bi-cloud-rain-heavy::before {
        content: "\f2b5";
    }

    .bi-cloud-rain::before {
        content: "\f2b6";
    }

    .bi-cloud-slash-fill::before {
        content: "\f2b7";
    }

    .bi-cloud-slash::before {
        content: "\f2b8";
    }

    .bi-cloud-sleet-fill::before {
        content: "\f2b9";
    }

    .bi-cloud-sleet::before {
        content: "\f2ba";
    }

    .bi-cloud-snow-fill::before {
        content: "\f2bb";
    }

    .bi-cloud-snow::before {
        content: "\f2bc";
    }

    .bi-cloud-sun-fill::before {
        content: "\f2bd";
    }

    .bi-cloud-sun::before {
        content: "\f2be";
    }

    .bi-cloud-upload-fill::before {
        content: "\f2bf";
    }

    .bi-cloud-upload::before {
        content: "\f2c0";
    }

    .bi-cloud::before {
        content: "\f2c1";
    }

    .bi-clouds-fill::before {
        content: "\f2c2";
    }

    .bi-clouds::before {
        content: "\f2c3";
    }

    .bi-cloudy-fill::before {
        content: "\f2c4";
    }

    .bi-cloudy::before {
        content: "\f2c5";
    }

    .bi-code-slash::before {
        content: "\f2c6";
    }

    .bi-code-square::before {
        content: "\f2c7";
    }

    .bi-code::before {
        content: "\f2c8";
    }

    .bi-collection-fill::before {
        content: "\f2c9";
    }

    .bi-collection-play-fill::before {
        content: "\f2ca";
    }

    .bi-collection-play::before {
        content: "\f2cb";
    }

    .bi-collection::before {
        content: "\f2cc";
    }

    .bi-columns-gap::before {
        content: "\f2cd";
    }

    .bi-columns::before {
        content: "\f2ce";
    }

    .bi-command::before {
        content: "\f2cf";
    }

    .bi-compass-fill::before {
        content: "\f2d0";
    }

    .bi-compass::before {
        content: "\f2d1";
    }

    .bi-cone-striped::before {
        content: "\f2d2";
    }

    .bi-cone::before {
        content: "\f2d3";
    }

    .bi-controller::before {
        content: "\f2d4";
    }

    .bi-cpu-fill::before {
        content: "\f2d5";
    }

    .bi-cpu::before {
        content: "\f2d6";
    }

    .bi-credit-card-2-back-fill::before {
        content: "\f2d7";
    }

    .bi-credit-card-2-back::before {
        content: "\f2d8";
    }

    .bi-credit-card-2-front-fill::before {
        content: "\f2d9";
    }

    .bi-credit-card-2-front::before {
        content: "\f2da";
    }

    .bi-credit-card-fill::before {
        content: "\f2db";
    }

    .bi-credit-card::before {
        content: "\f2dc";
    }

    .bi-crop::before {
        content: "\f2dd";
    }

    .bi-cup-fill::before {
        content: "\f2de";
    }

    .bi-cup-straw::before {
        content: "\f2df";
    }

    .bi-cup::before {
        content: "\f2e0";
    }

    .bi-cursor-fill::before {
        content: "\f2e1";
    }

    .bi-cursor-text::before {
        content: "\f2e2";
    }

    .bi-cursor::before {
        content: "\f2e3";
    }

    .bi-dash-circle-dotted::before {
        content: "\f2e4";
    }

    .bi-dash-circle-fill::before {
        content: "\f2e5";
    }

    .bi-dash-circle::before {
        content: "\f2e6";
    }

    .bi-dash-square-dotted::before {
        content: "\f2e7";
    }

    .bi-dash-square-fill::before {
        content: "\f2e8";
    }

    .bi-dash-square::before {
        content: "\f2e9";
    }

    .bi-dash::before {
        content: "\f2ea";
    }

    .bi-diagram-2-fill::before {
        content: "\f2eb";
    }

    .bi-diagram-2::before {
        content: "\f2ec";
    }

    .bi-diagram-3-fill::before {
        content: "\f2ed";
    }

    .bi-diagram-3::before {
        content: "\f2ee";
    }

    .bi-diamond-fill::before {
        content: "\f2ef";
    }

    .bi-diamond-half::before {
        content: "\f2f0";
    }

    .bi-diamond::before {
        content: "\f2f1";
    }

    .bi-dice-1-fill::before {
        content: "\f2f2";
    }

    .bi-dice-1::before {
        content: "\f2f3";
    }

    .bi-dice-2-fill::before {
        content: "\f2f4";
    }

    .bi-dice-2::before {
        content: "\f2f5";
    }

    .bi-dice-3-fill::before {
        content: "\f2f6";
    }

    .bi-dice-3::before {
        content: "\f2f7";
    }

    .bi-dice-4-fill::before {
        content: "\f2f8";
    }

    .bi-dice-4::before {
        content: "\f2f9";
    }

    .bi-dice-5-fill::before {
        content: "\f2fa";
    }

    .bi-dice-5::before {
        content: "\f2fb";
    }

    .bi-dice-6-fill::before {
        content: "\f2fc";
    }

    .bi-dice-6::before {
        content: "\f2fd";
    }

    .bi-disc-fill::before {
        content: "\f2fe";
    }

    .bi-disc::before {
        content: "\f2ff";
    }

    .bi-discord::before {
        content: "\f300";
    }

    .bi-display-fill::before {
        content: "\f301";
    }

    .bi-display::before {
        content: "\f302";
    }

    .bi-distribute-horizontal::before {
        content: "\f303";
    }

    .bi-distribute-vertical::before {
        content: "\f304";
    }

    .bi-door-closed-fill::before {
        content: "\f305";
    }

    .bi-door-closed::before {
        content: "\f306";
    }

    .bi-door-open-fill::before {
        content: "\f307";
    }

    .bi-door-open::before {
        content: "\f308";
    }

    .bi-dot::before {
        content: "\f309";
    }

    .bi-download::before {
        content: "\f30a";
    }

    .bi-droplet-fill::before {
        content: "\f30b";
    }

    .bi-droplet-half::before {
        content: "\f30c";
    }

    .bi-droplet::before {
        content: "\f30d";
    }

    .bi-earbuds::before {
        content: "\f30e";
    }

    .bi-easel-fill::before {
        content: "\f30f";
    }

    .bi-easel::before {
        content: "\f310";
    }

    .bi-egg-fill::before {
        content: "\f311";
    }

    .bi-egg-fried::before {
        content: "\f312";
    }

    .bi-egg::before {
        content: "\f313";
    }

    .bi-eject-fill::before {
        content: "\f314";
    }

    .bi-eject::before {
        content: "\f315";
    }

    .bi-emoji-angry-fill::before {
        content: "\f316";
    }

    .bi-emoji-angry::before {
        content: "\f317";
    }

    .bi-emoji-dizzy-fill::before {
        content: "\f318";
    }

    .bi-emoji-dizzy::before {
        content: "\f319";
    }

    .bi-emoji-expressionless-fill::before {
        content: "\f31a";
    }

    .bi-emoji-expressionless::before {
        content: "\f31b";
    }

    .bi-emoji-frown-fill::before {
        content: "\f31c";
    }

    .bi-emoji-frown::before {
        content: "\f31d";
    }

    .bi-emoji-heart-eyes-fill::before {
        content: "\f31e";
    }

    .bi-emoji-heart-eyes::before {
        content: "\f31f";
    }

    .bi-emoji-laughing-fill::before {
        content: "\f320";
    }

    .bi-emoji-laughing::before {
        content: "\f321";
    }

    .bi-emoji-neutral-fill::before {
        content: "\f322";
    }

    .bi-emoji-neutral::before {
        content: "\f323";
    }

    .bi-emoji-smile-fill::before {
        content: "\f324";
    }

    .bi-emoji-smile-upside-down-fill::before {
        content: "\f325";
    }

    .bi-emoji-smile-upside-down::before {
        content: "\f326";
    }

    .bi-emoji-smile::before {
        content: "\f327";
    }

    .bi-emoji-sunglasses-fill::before {
        content: "\f328";
    }

    .bi-emoji-sunglasses::before {
        content: "\f329";
    }

    .bi-emoji-wink-fill::before {
        content: "\f32a";
    }

    .bi-emoji-wink::before {
        content: "\f32b";
    }

    .bi-envelope-fill::before {
        content: "\f32c";
    }

    .bi-envelope-open-fill::before {
        content: "\f32d";
    }

    .bi-envelope-open::before {
        content: "\f32e";
    }

    .bi-envelope::before {
        content: "\f32f";
    }

    .bi-eraser-fill::before {
        content: "\f330";
    }

    .bi-eraser::before {
        content: "\f331";
    }

    .bi-exclamation-circle-fill::before {
        content: "\f332";
    }

    .bi-exclamation-circle::before {
        content: "\f333";
    }

    .bi-exclamation-diamond-fill::before {
        content: "\f334";
    }

    .bi-exclamation-diamond::before {
        content: "\f335";
    }

    .bi-exclamation-octagon-fill::before {
        content: "\f336";
    }

    .bi-exclamation-octagon::before {
        content: "\f337";
    }

    .bi-exclamation-square-fill::before {
        content: "\f338";
    }

    .bi-exclamation-square::before {
        content: "\f339";
    }

    .bi-exclamation-triangle-fill::before {
        content: "\f33a";
    }

    .bi-exclamation-triangle::before {
        content: "\f33b";
    }

    .bi-exclamation::before {
        content: "\f33c";
    }

    .bi-exclude::before {
        content: "\f33d";
    }

    .bi-eye-fill::before {
        content: "\f33e";
    }

    .bi-eye-slash-fill::before {
        content: "\f33f";
    }

    .bi-eye-slash::before {
        content: "\f340";
    }

    .bi-eye::before {
        content: "\f341";
    }

    .bi-eyedropper::before {
        content: "\f342";
    }

    .bi-eyeglasses::before {
        content: "\f343";
    }

    .bi-facebook::before {
        content: "\f344";
    }

    .bi-file-arrow-down-fill::before {
        content: "\f345";
    }

    .bi-file-arrow-down::before {
        content: "\f346";
    }

    .bi-file-arrow-up-fill::before {
        content: "\f347";
    }

    .bi-file-arrow-up::before {
        content: "\f348";
    }

    .bi-file-bar-graph-fill::before {
        content: "\f349";
    }

    .bi-file-bar-graph::before {
        content: "\f34a";
    }

    .bi-file-binary-fill::before {
        content: "\f34b";
    }

    .bi-file-binary::before {
        content: "\f34c";
    }

    .bi-file-break-fill::before {
        content: "\f34d";
    }

    .bi-file-break::before {
        content: "\f34e";
    }

    .bi-file-check-fill::before {
        content: "\f34f";
    }

    .bi-file-check::before {
        content: "\f350";
    }

    .bi-file-code-fill::before {
        content: "\f351";
    }

    .bi-file-code::before {
        content: "\f352";
    }

    .bi-file-diff-fill::before {
        content: "\f353";
    }

    .bi-file-diff::before {
        content: "\f354";
    }

    .bi-file-earmark-arrow-down-fill::before {
        content: "\f355";
    }

    .bi-file-earmark-arrow-down::before {
        content: "\f356";
    }

    .bi-file-earmark-arrow-up-fill::before {
        content: "\f357";
    }

    .bi-file-earmark-arrow-up::before {
        content: "\f358";
    }

    .bi-file-earmark-bar-graph-fill::before {
        content: "\f359";
    }

    .bi-file-earmark-bar-graph::before {
        content: "\f35a";
    }

    .bi-file-earmark-binary-fill::before {
        content: "\f35b";
    }

    .bi-file-earmark-binary::before {
        content: "\f35c";
    }

    .bi-file-earmark-break-fill::before {
        content: "\f35d";
    }

    .bi-file-earmark-break::before {
        content: "\f35e";
    }

    .bi-file-earmark-check-fill::before {
        content: "\f35f";
    }

    .bi-file-earmark-check::before {
        content: "\f360";
    }

    .bi-file-earmark-code-fill::before {
        content: "\f361";
    }

    .bi-file-earmark-code::before {
        content: "\f362";
    }

    .bi-file-earmark-diff-fill::before {
        content: "\f363";
    }

    .bi-file-earmark-diff::before {
        content: "\f364";
    }

    .bi-file-earmark-easel-fill::before {
        content: "\f365";
    }

    .bi-file-earmark-easel::before {
        content: "\f366";
    }

    .bi-file-earmark-excel-fill::before {
        content: "\f367";
    }

    .bi-file-earmark-excel::before {
        content: "\f368";
    }

    .bi-file-earmark-fill::before {
        content: "\f369";
    }

    .bi-file-earmark-font-fill::before {
        content: "\f36a";
    }

    .bi-file-earmark-font::before {
        content: "\f36b";
    }

    .bi-file-earmark-image-fill::before {
        content: "\f36c";
    }

    .bi-file-earmark-image::before {
        content: "\f36d";
    }

    .bi-file-earmark-lock-fill::before {
        content: "\f36e";
    }

    .bi-file-earmark-lock::before {
        content: "\f36f";
    }

    .bi-file-earmark-lock2-fill::before {
        content: "\f370";
    }

    .bi-file-earmark-lock2::before {
        content: "\f371";
    }

    .bi-file-earmark-medical-fill::before {
        content: "\f372";
    }

    .bi-file-earmark-medical::before {
        content: "\f373";
    }

    .bi-file-earmark-minus-fill::before {
        content: "\f374";
    }

    .bi-file-earmark-minus::before {
        content: "\f375";
    }

    .bi-file-earmark-music-fill::before {
        content: "\f376";
    }

    .bi-file-earmark-music::before {
        content: "\f377";
    }

    .bi-file-earmark-person-fill::before {
        content: "\f378";
    }

    .bi-file-earmark-person::before {
        content: "\f379";
    }

    .bi-file-earmark-play-fill::before {
        content: "\f37a";
    }

    .bi-file-earmark-play::before {
        content: "\f37b";
    }

    .bi-file-earmark-plus-fill::before {
        content: "\f37c";
    }

    .bi-file-earmark-plus::before {
        content: "\f37d";
    }

    .bi-file-earmark-post-fill::before {
        content: "\f37e";
    }

    .bi-file-earmark-post::before {
        content: "\f37f";
    }

    .bi-file-earmark-ppt-fill::before {
        content: "\f380";
    }

    .bi-file-earmark-ppt::before {
        content: "\f381";
    }

    .bi-file-earmark-richtext-fill::before {
        content: "\f382";
    }

    .bi-file-earmark-richtext::before {
        content: "\f383";
    }

    .bi-file-earmark-ruled-fill::before {
        content: "\f384";
    }

    .bi-file-earmark-ruled::before {
        content: "\f385";
    }

    .bi-file-earmark-slides-fill::before {
        content: "\f386";
    }

    .bi-file-earmark-slides::before {
        content: "\f387";
    }

    .bi-file-earmark-spreadsheet-fill::before {
        content: "\f388";
    }

    .bi-file-earmark-spreadsheet::before {
        content: "\f389";
    }

    .bi-file-earmark-text-fill::before {
        content: "\f38a";
    }

    .bi-file-earmark-text::before {
        content: "\f38b";
    }

    .bi-file-earmark-word-fill::before {
        content: "\f38c";
    }

    .bi-file-earmark-word::before {
        content: "\f38d";
    }

    .bi-file-earmark-x-fill::before {
        content: "\f38e";
    }

    .bi-file-earmark-x::before {
        content: "\f38f";
    }

    .bi-file-earmark-zip-fill::before {
        content: "\f390";
    }

    .bi-file-earmark-zip::before {
        content: "\f391";
    }

    .bi-file-earmark::before {
        content: "\f392";
    }

    .bi-file-easel-fill::before {
        content: "\f393";
    }

    .bi-file-easel::before {
        content: "\f394";
    }

    .bi-file-excel-fill::before {
        content: "\f395";
    }

    .bi-file-excel::before {
        content: "\f396";
    }

    .bi-file-fill::before {
        content: "\f397";
    }

    .bi-file-font-fill::before {
        content: "\f398";
    }

    .bi-file-font::before {
        content: "\f399";
    }

    .bi-file-image-fill::before {
        content: "\f39a";
    }

    .bi-file-image::before {
        content: "\f39b";
    }

    .bi-file-lock-fill::before {
        content: "\f39c";
    }

    .bi-file-lock::before {
        content: "\f39d";
    }

    .bi-file-lock2-fill::before {
        content: "\f39e";
    }

    .bi-file-lock2::before {
        content: "\f39f";
    }

    .bi-file-medical-fill::before {
        content: "\f3a0";
    }

    .bi-file-medical::before {
        content: "\f3a1";
    }

    .bi-file-minus-fill::before {
        content: "\f3a2";
    }

    .bi-file-minus::before {
        content: "\f3a3";
    }

    .bi-file-music-fill::before {
        content: "\f3a4";
    }

    .bi-file-music::before {
        content: "\f3a5";
    }

    .bi-file-person-fill::before {
        content: "\f3a6";
    }

    .bi-file-person::before {
        content: "\f3a7";
    }

    .bi-file-play-fill::before {
        content: "\f3a8";
    }

    .bi-file-play::before {
        content: "\f3a9";
    }

    .bi-file-plus-fill::before {
        content: "\f3aa";
    }

    .bi-file-plus::before {
        content: "\f3ab";
    }

    .bi-file-post-fill::before {
        content: "\f3ac";
    }

    .bi-file-post::before {
        content: "\f3ad";
    }

    .bi-file-ppt-fill::before {
        content: "\f3ae";
    }

    .bi-file-ppt::before {
        content: "\f3af";
    }

    .bi-file-richtext-fill::before {
        content: "\f3b0";
    }

    .bi-file-richtext::before {
        content: "\f3b1";
    }

    .bi-file-ruled-fill::before {
        content: "\f3b2";
    }

    .bi-file-ruled::before {
        content: "\f3b3";
    }

    .bi-file-slides-fill::before {
        content: "\f3b4";
    }

    .bi-file-slides::before {
        content: "\f3b5";
    }

    .bi-file-spreadsheet-fill::before {
        content: "\f3b6";
    }

    .bi-file-spreadsheet::before {
        content: "\f3b7";
    }

    .bi-file-text-fill::before {
        content: "\f3b8";
    }

    .bi-file-text::before {
        content: "\f3b9";
    }

    .bi-file-word-fill::before {
        content: "\f3ba";
    }

    .bi-file-word::before {
        content: "\f3bb";
    }

    .bi-file-x-fill::before {
        content: "\f3bc";
    }

    .bi-file-x::before {
        content: "\f3bd";
    }

    .bi-file-zip-fill::before {
        content: "\f3be";
    }

    .bi-file-zip::before {
        content: "\f3bf";
    }

    .bi-file::before {
        content: "\f3c0";
    }

    .bi-files-alt::before {
        content: "\f3c1";
    }

    .bi-files::before {
        content: "\f3c2";
    }

    .bi-film::before {
        content: "\f3c3";
    }

    .bi-filter-circle-fill::before {
        content: "\f3c4";
    }

    .bi-filter-circle::before {
        content: "\f3c5";
    }

    .bi-filter-left::before {
        content: "\f3c6";
    }

    .bi-filter-right::before {
        content: "\f3c7";
    }

    .bi-filter-square-fill::before {
        content: "\f3c8";
    }

    .bi-filter-square::before {
        content: "\f3c9";
    }

    .bi-filter::before {
        content: "\f3ca";
    }

    .bi-flag-fill::before {
        content: "\f3cb";
    }

    .bi-flag::before {
        content: "\f3cc";
    }

    .bi-flower1::before {
        content: "\f3cd";
    }

    .bi-flower2::before {
        content: "\f3ce";
    }

    .bi-flower3::before {
        content: "\f3cf";
    }

    .bi-folder-check::before {
        content: "\f3d0";
    }

    .bi-folder-fill::before {
        content: "\f3d1";
    }

    .bi-folder-minus::before {
        content: "\f3d2";
    }

    .bi-folder-plus::before {
        content: "\f3d3";
    }

    .bi-folder-symlink-fill::before {
        content: "\f3d4";
    }

    .bi-folder-symlink::before {
        content: "\f3d5";
    }

    .bi-folder-x::before {
        content: "\f3d6";
    }

    .bi-folder::before {
        content: "\f3d7";
    }

    .bi-folder2-open::before {
        content: "\f3d8";
    }

    .bi-folder2::before {
        content: "\f3d9";
    }

    .bi-fonts::before {
        content: "\f3da";
    }

    .bi-forward-fill::before {
        content: "\f3db";
    }

    .bi-forward::before {
        content: "\f3dc";
    }

    .bi-front::before {
        content: "\f3dd";
    }

    .bi-fullscreen-exit::before {
        content: "\f3de";
    }

    .bi-fullscreen::before {
        content: "\f3df";
    }

    .bi-funnel-fill::before {
        content: "\f3e0";
    }

    .bi-funnel::before {
        content: "\f3e1";
    }

    .bi-gear-fill::before {
        content: "\f3e2";
    }

    .bi-gear-wide-connected::before {
        content: "\f3e3";
    }

    .bi-gear-wide::before {
        content: "\f3e4";
    }

    .bi-gear::before {
        content: "\f3e5";
    }

    .bi-gem::before {
        content: "\f3e6";
    }

    .bi-geo-alt-fill::before {
        content: "\f3e7";
    }

    .bi-geo-alt::before {
        content: "\f3e8";
    }

    .bi-geo-fill::before {
        content: "\f3e9";
    }

    .bi-geo::before {
        content: "\f3ea";
    }

    .bi-gift-fill::before {
        content: "\f3eb";
    }

    .bi-gift::before {
        content: "\f3ec";
    }

    .bi-github::before {
        content: "\f3ed";
    }

    .bi-globe::before {
        content: "\f3ee";
    }

    .bi-globe2::before {
        content: "\f3ef";
    }

    .bi-google::before {
        content: "\f3f0";
    }

    .bi-graph-down::before {
        content: "\f3f1";
    }

    .bi-graph-up::before {
        content: "\f3f2";
    }

    .bi-grid-1x2-fill::before {
        content: "\f3f3";
    }

    .bi-grid-1x2::before {
        content: "\f3f4";
    }

    .bi-grid-3x2-gap-fill::before {
        content: "\f3f5";
    }

    .bi-grid-3x2-gap::before {
        content: "\f3f6";
    }

    .bi-grid-3x2::before {
        content: "\f3f7";
    }

    .bi-grid-3x3-gap-fill::before {
        content: "\f3f8";
    }

    .bi-grid-3x3-gap::before {
        content: "\f3f9";
    }

    .bi-grid-3x3::before {
        content: "\f3fa";
    }

    .bi-grid-fill::before {
        content: "\f3fb";
    }

    .bi-grid::before {
        content: "\f3fc";
    }

    .bi-grip-horizontal::before {
        content: "\f3fd";
    }

    .bi-grip-vertical::before {
        content: "\f3fe";
    }

    .bi-hammer::before {
        content: "\f3ff";
    }

    .bi-hand-index-fill::before {
        content: "\f400";
    }

    .bi-hand-index-thumb-fill::before {
        content: "\f401";
    }

    .bi-hand-index-thumb::before {
        content: "\f402";
    }

    .bi-hand-index::before {
        content: "\f403";
    }

    .bi-hand-thumbs-down-fill::before {
        content: "\f404";
    }

    .bi-hand-thumbs-down::before {
        content: "\f405";
    }

    .bi-hand-thumbs-up-fill::before {
        content: "\f406";
    }

    .bi-hand-thumbs-up::before {
        content: "\f407";
    }

    .bi-handbag-fill::before {
        content: "\f408";
    }

    .bi-handbag::before {
        content: "\f409";
    }

    .bi-hash::before {
        content: "\f40a";
    }

    .bi-hdd-fill::before {
        content: "\f40b";
    }

    .bi-hdd-network-fill::before {
        content: "\f40c";
    }

    .bi-hdd-network::before {
        content: "\f40d";
    }

    .bi-hdd-rack-fill::before {
        content: "\f40e";
    }

    .bi-hdd-rack::before {
        content: "\f40f";
    }

    .bi-hdd-stack-fill::before {
        content: "\f410";
    }

    .bi-hdd-stack::before {
        content: "\f411";
    }

    .bi-hdd::before {
        content: "\f412";
    }

    .bi-headphones::before {
        content: "\f413";
    }

    .bi-headset::before {
        content: "\f414";
    }

    .bi-heart-fill::before {
        content: "\f415";
    }

    .bi-heart-half::before {
        content: "\f416";
    }

    .bi-heart::before {
        content: "\f417";
    }

    .bi-heptagon-fill::before {
        content: "\f418";
    }

    .bi-heptagon-half::before {
        content: "\f419";
    }

    .bi-heptagon::before {
        content: "\f41a";
    }

    .bi-hexagon-fill::before {
        content: "\f41b";
    }

    .bi-hexagon-half::before {
        content: "\f41c";
    }

    .bi-hexagon::before {
        content: "\f41d";
    }

    .bi-hourglass-bottom::before {
        content: "\f41e";
    }

    .bi-hourglass-split::before {
        content: "\f41f";
    }

    .bi-hourglass-top::before {
        content: "\f420";
    }

    .bi-hourglass::before {
        content: "\f421";
    }

    .bi-house-door-fill::before {
        content: "\f422";
    }

    .bi-house-door::before {
        content: "\f423";
    }

    .bi-house-fill::before {
        content: "\f424";
    }

    .bi-house::before {
        content: "\f425";
    }

    .bi-hr::before {
        content: "\f426";
    }

    .bi-hurricane::before {
        content: "\f427";
    }

    .bi-image-alt::before {
        content: "\f428";
    }

    .bi-image-fill::before {
        content: "\f429";
    }

    .bi-image::before {
        content: "\f42a";
    }

    .bi-images::before {
        content: "\f42b";
    }

    .bi-inbox-fill::before {
        content: "\f42c";
    }

    .bi-inbox::before {
        content: "\f42d";
    }

    .bi-inboxes-fill::before {
        content: "\f42e";
    }

    .bi-inboxes::before {
        content: "\f42f";
    }

    .bi-info-circle-fill::before {
        content: "\f430";
    }

    .bi-info-circle::before {
        content: "\f431";
    }

    .bi-info-square-fill::before {
        content: "\f432";
    }

    .bi-info-square::before {
        content: "\f433";
    }

    .bi-info::before {
        content: "\f434";
    }

    .bi-input-cursor-text::before {
        content: "\f435";
    }

    .bi-input-cursor::before {
        content: "\f436";
    }

    .bi-instagram::before {
        content: "\f437";
    }

    .bi-intersect::before {
        content: "\f438";
    }

    .bi-journal-album::before {
        content: "\f439";
    }

    .bi-journal-arrow-down::before {
        content: "\f43a";
    }

    .bi-journal-arrow-up::before {
        content: "\f43b";
    }

    .bi-journal-bookmark-fill::before {
        content: "\f43c";
    }

    .bi-journal-bookmark::before {
        content: "\f43d";
    }

    .bi-journal-check::before {
        content: "\f43e";
    }

    .bi-journal-code::before {
        content: "\f43f";
    }

    .bi-journal-medical::before {
        content: "\f440";
    }

    .bi-journal-minus::before {
        content: "\f441";
    }

    .bi-journal-plus::before {
        content: "\f442";
    }

    .bi-journal-richtext::before {
        content: "\f443";
    }

    .bi-journal-text::before {
        content: "\f444";
    }

    .bi-journal-x::before {
        content: "\f445";
    }

    .bi-journal::before {
        content: "\f446";
    }

    .bi-journals::before {
        content: "\f447";
    }

    .bi-joystick::before {
        content: "\f448";
    }

    .bi-justify-left::before {
        content: "\f449";
    }

    .bi-justify-right::before {
        content: "\f44a";
    }

    .bi-justify::before {
        content: "\f44b";
    }

    .bi-kanban-fill::before {
        content: "\f44c";
    }

    .bi-kanban::before {
        content: "\f44d";
    }

    .bi-key-fill::before {
        content: "\f44e";
    }

    .bi-key::before {
        content: "\f44f";
    }

    .bi-keyboard-fill::before {
        content: "\f450";
    }

    .bi-keyboard::before {
        content: "\f451";
    }

    .bi-ladder::before {
        content: "\f452";
    }

    .bi-lamp-fill::before {
        content: "\f453";
    }

    .bi-lamp::before {
        content: "\f454";
    }

    .bi-laptop-fill::before {
        content: "\f455";
    }

    .bi-laptop::before {
        content: "\f456";
    }

    .bi-layer-backward::before {
        content: "\f457";
    }

    .bi-layer-forward::before {
        content: "\f458";
    }

    .bi-layers-fill::before {
        content: "\f459";
    }

    .bi-layers-half::before {
        content: "\f45a";
    }

    .bi-layers::before {
        content: "\f45b";
    }

    .bi-layout-sidebar-inset-reverse::before {
        content: "\f45c";
    }

    .bi-layout-sidebar-inset::before {
        content: "\f45d";
    }

    .bi-layout-sidebar-reverse::before {
        content: "\f45e";
    }

    .bi-layout-sidebar::before {
        content: "\f45f";
    }

    .bi-layout-split::before {
        content: "\f460";
    }

    .bi-layout-text-sidebar-reverse::before {
        content: "\f461";
    }

    .bi-layout-text-sidebar::before {
        content: "\f462";
    }

    .bi-layout-text-window-reverse::before {
        content: "\f463";
    }

    .bi-layout-text-window::before {
        content: "\f464";
    }

    .bi-layout-three-columns::before {
        content: "\f465";
    }

    .bi-layout-wtf::before {
        content: "\f466";
    }

    .bi-life-preserver::before {
        content: "\f467";
    }

    .bi-lightbulb-fill::before {
        content: "\f468";
    }

    .bi-lightbulb-off-fill::before {
        content: "\f469";
    }

    .bi-lightbulb-off::before {
        content: "\f46a";
    }

    .bi-lightbulb::before {
        content: "\f46b";
    }

    .bi-lightning-charge-fill::before {
        content: "\f46c";
    }

    .bi-lightning-charge::before {
        content: "\f46d";
    }

    .bi-lightning-fill::before {
        content: "\f46e";
    }

    .bi-lightning::before {
        content: "\f46f";
    }

    .bi-link-45deg::before {
        content: "\f470";
    }

    .bi-link::before {
        content: "\f471";
    }

    .bi-linkedin::before {
        content: "\f472";
    }

    .bi-list-check::before {
        content: "\f473";
    }

    .bi-list-nested::before {
        content: "\f474";
    }

    .bi-list-ol::before {
        content: "\f475";
    }

    .bi-list-stars::before {
        content: "\f476";
    }

    .bi-list-task::before {
        content: "\f477";
    }

    .bi-list-ul::before {
        content: "\f478";
    }

    .bi-list::before {
        content: "\f479";
    }

    .bi-lock-fill::before {
        content: "\f47a";
    }

    .bi-lock::before {
        content: "\f47b";
    }

    .bi-mailbox::before {
        content: "\f47c";
    }

    .bi-mailbox2::before {
        content: "\f47d";
    }

    .bi-map-fill::before {
        content: "\f47e";
    }

    .bi-map::before {
        content: "\f47f";
    }

<body>


    <section id="main_section">
        <div id="containEpaper">
            <?php
            for ($i = 1; $i <= count($dataArray); $i++) {
                echo $dataArray[$i];
            } ?>
        </div>
    </section>
</body>

</html>