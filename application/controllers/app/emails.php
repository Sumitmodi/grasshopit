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

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users/UserModel', 'model');
    }

    public function email()
    {
        $this->mailer();
        $data['header'] = $this->header - 500;
        $data['message'] = $this->message;
        $data['title'] = 'Contact :: Grasshopit';
        $this->load->view('_layouts/header', $data);
        $this->load->view('responses/contact', $data);
        $this->load->view('_layouts/footer_index', $data);
    }

    public function mailer()
    {
        try
        {

            $data = $this->input->post(NULL, TRUE);

            if (empty($data['name']))
            {
                throw new Exception('Please provide your name', '900');
            }

            if (empty($data['email']))
            {
                throw new Exception('Please provide your email.', '900');
            }

            if (empty($data['message']))
            {
                throw new Exception('Please write a small message.', '900');
            }

            $insert = $this->model->insert('app_email', array('name' => $data['name'], 'email' => $data['email'], 'message' => $data['message']));


            if ($insert == false)
            {
                throw new Exception('Sorry there was problem during communication.', '900');
            }


            if (!$this->mail($data))
            {
                throw new Exception('You email could not be received. Sorry!', '900');
            }

            $this->header = 200;
            $this->message = 'Thank you for your query. We will contact you soon.';
        } catch (Exception $e)
        {
            $this->header = $e->getCode();
            $this->message = $e->getMessage();
        }
    }

    private function mail($post)
    {
        $d = $this->input->post(NULL, TRUE);

        $this->load->library('mailer');

        $fileDir = VIEWDIR . DS . 'fragments' . DS . 'mails';

        $this->mailer->set('error', false);

        $headers = $this->mailer->activate('headers');

        $headers->
                from($d['email'])->
                to('info@grasshopit.com')->
                subject('Contact Email')->
                mime()->
                charset()->
                content()->
                reply($d['email'])->
                xmailer('Grasshopit Mailer')->
                process();

        $message = $this->mailer->activate('message');

        $message->
                vars($d)->
                read($fileDir, 'contact')->
                process();

        $sent = $this->mailer->mail();

        return $sent;
    }

}
