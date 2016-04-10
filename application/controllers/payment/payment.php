<?php

/*
 * Project : <Project name>
 * 
 * Author : <Sandeep Giri>
 * 
 * Contact : <ioesandeep@gmail.com>
 */

/*
 *   <one line to give the program's name and a brief idea of what it does.>
 *   Copyright (C) <2014>  <Sandeep Giri>

 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.

 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.

 *   You should have received a copy of the GNU General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.

 *   This program comes with ABSOLUTELY NO WARRANTY.
 *   This is free software, and you are welcome to redistribute it.
 *   However do not expect any help or support from the author.
 */

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function cancel()
    {
        $data['title'] = 'Payment Cancelled';
        $this->load->view('_layouts/header', $data);
        $this->load->view('payment/cancel', $data);
    }

    public function success()
    {
        $this->load->model('business/businessmodel', 'model', true);

        $data = $this->session->userdata('bizId');
      
        $index = false;

        $id = false;
        
        @list($index, $id) = explode('_', $data);

        if (false == $index || false == $id)
        {
            $index = $this->session->userdata('bus');

            $id = $this->session->userdata('bus_id');

            $reason = 'Registration';
        } else
        {
            $reason = 'Upgrade';
        }

        $pkg = $this->session->userdata('package');

        $package = $this->packageId();

        $this->updateExpiry($index, $id, $package);

        $this->model->updatePackage($index, $id, $package);

        $insert = array(
            'payment_method' => 'paypal',
            'bid' => is_numeric($index) ? 'numeric' : $index . '_' . $id,
            'gross_amount' => $this->pkgInfo()->price,
            'package_id' => $this->pkgInfo()->sno,
            'received_amount' => $this->pkgInfo()->price,
            'payment_status' => 'R',
            'reason' => $reason
        );

        $this->model->insert('transaction_info', $insert);

        if ($this->session->userdata('logged_in') == false)
        {
            $this->session->sess_destroy();
        } else
        {
            $this->session->unset_userdata('bus');

            $this->session->unset_userdata('bus_id');

            $this->session->unset_userdata('package');
        }

        $message = "Successfully Subscribed to new Package " . strtoupper($pkg) . ".Thankyou for choosing Grasshopit. Please Login.";

        $this->session->set_flashdata('pkg_changed', $message);

        $this->header("login?type=business");
    }

    private function pkgInfo()
    {
        return $this->model->select('business_packages', '*', array('nickname' => $this->session->userdata('package')), NULL, 1);
    }

    private function packageId()
    {
        $pkg = $this->model->select('business_packages', 'sno', array('nickname' => $this->session->userdata('package')), NULL, 1);

        return $pkg == false ? 1 : $pkg->sno;
    }

    private function updateExpiry($index, $id, $pkg)
    {
        try
        {
            $bizid = $index . '_' . $id;

            $user = $this->model->select('business_login', '*', array('business_id' => $bizid), NULL, 1);

            if (false == $user)
            {
                throw new Exception('Business not found.', '404');
            }

            $start = $user->package_start;

            $end = $user->package_end;

            if ($this->expired($end))
            {
                $start = date('Y/m/d');

                $end = date('Y/m/d', strtotime('+1 month'));
            } else
            {
                $start = is_null($start) ? date('Y/m/d') : $start;

                $end = is_null($end) ? date('Y/m/d') : $end;

                $next = new DateTime(date('Y/m/d', strtotime($end)));

                $end = $new->add(new DateInterval('P1M'))->format('Y/m/d');
            }

            $update = array(
                'package_start' => $start,
                'package_end' => $end
            );

            return $this->model->update('business_login', $update, array('username' => $user->username));
        } catch (Exception $e)
        {
            show_error($e->getMessage(), $e->getCode());
        }
    }

    private function expired($end)
    {
        if (is_null($end))
        {
            return true;
        }

        $now = new DateTime(date('Y/m/d'));

        $end = new DateTime(date('Y/m/d', strtotime($end)));

        $diff = date_diff($end, $now, false);

        /*
         * End date has passed
         */
        if ($diff->invert == 1)
        {
            return true;
        }

        return false;
    }

}
