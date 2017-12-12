<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class SweetAlertController extends Controller
{
    public function index($alertType = null)
    {
        switch ($alertType) {
            case 'info':
                Alert::info('Info Message', 'You are logged in!');
                break;
            case 'success':
                Alert::success('Welcome', 'EXample Success Alert');
                break;
            case 'error':
                Alert::error('Welcome', 'Example error alert');
                break;
            case 'warning':
                Alert::warning('Welcome', 'Example warning alert');
                break;
            case 'success-autoclose':
                Alert::success('Welcome', 'Example success alert')->autoclose(5000);
                break;

            default:
                // Alert::message('Robots are working');
                break;
        }


        return view('SweetAlert');
    }
}
