<?php

use function PHPSTORM_META\map;

defined('BASEPATH') or exit('No direct script access allowed');

class ApiUser extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_driver', 'M_driver');
    }

    public function token($id)
    {
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        $payload = json_encode(['user_id' => $id]);

        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        return $jwt;
    }
    public function driver_login()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', [
            'required' => 'Email tidak boleh kosong',
            'valid_email' => 'Email harus sesuai dengan format yang ada'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => 'Password tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $check_email = $this->M_driver->find_data('rb_konsumen', 'email', $email)->row();
            $make_token = $this->token($check_email->id_konsumen);
            $update_token = $this->M_driver->update_token_driver($make_token, $check_email->id_konsumen);
            $response = [
                'success' => true,
                'data' => $check_email,
                'jwt_token' => $make_token,
            ];
        } else {
            $response = [
                'success' => false,
                'msg' => $this->form_validation->error_array(),
                'elapsed_time' => microtime(true) - $start,
            ];
        }
        echo json_encode($response);
    }
    public function driver_register()
    {
        $start = microtime(true);
        $validation_config = [
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'trim|required|valid_email|is_unique[rb_konsumen.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Format email tidak sesuai',
                    'is_unique' => 'Email sudah digunakan',
                ],
            ], [
                'field' => 'phone_number',
                'label' => 'phone_number',
                'rules' => 'trim|required|min_length[10]|max_length[15]|numeric|',
                'errors' => [
                    'required' => 'nomor hp tidak boleh kosong',
                    'min_length' => 'Minimal Nomor HP adalah 10 angka',
                    'max_length' => 'Maksimal Nomor HP adalah 15 angka',
                    'numeric' => 'Nomor HP Harus berupa angka'
                ],
            ], [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[6]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                    'min_length' => 'Password minimal 6 karakter',
                ],
            ], [
                'field' => 'referral_code',
                'label' => 'referral_code',
                'rules' => 'trim',
            ],

        ];
        $this->form_validation->set_rules($validation_config);
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $phone_number = $this->input->post('phone_number');
            $password = $this->input->post('password');
            $referral_code = $this->input->post('referral_code');
            // use for check referral code
            // end referral code

            // insert for register
            $register = [
                'username' => '-',
                'password' => hash("sha512", md5($password)),
                'nama_lengkap' => '-',
                'email' => $email,
                'jenis_kelamin' => 'Laki-laki',
                'tanggal_lahir' => '2000-01-01',
                'no_hp' => $phone_number,
                'tempat_lahir' => '-',
                'alamat_lengkap' => '-',
                'tanggal_daftar' => date('Y-m-d H:i:s'),
                'status_driver' => 1,
                'driver' => 1,
                'status_data_driver' => 1,
            ];
            $this->M_driver->store_data_driver($register);
            // use for email send
            // email send
            $response = [
                'success' => true,
                'msg' => 'Register success',
                'elapsed_time' => microtime(true) - $start,
            ];
        } else {
            $response = [
                'success' => false,
                'msg' => $this->form_validation->error_array(),
                'elapsed_time' => microtime(true) - $start,
            ];
        }
        echo json_encode($response);
    }
    public function driver_update_data()
    {
        $validation_config = [
            [
                'field' => 'full_name',
                'label' => 'full_name',
                'rules' => 'trim|required|regex_match[/^([a-z ])+$/i]',
                'errors' => [
                    'required' => 'Nama Lengkap tidak boleh kosong',
                    'regex_match' => 'Hanya boleh menggunakan huruf dan spasi',
                ],
            ], [
                'field' => 'birth_date',
                'label' => 'birth_data',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Tanggal lahir tidak boleh kosong',
                ],
            ], [
                'field' => 'address',
                'label' => 'address',
                'rules' => 'trim|required|max_length[15]|regex_match[/^([a-z ])+$/i]',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong',
                    'regex_match' => 'Alamat Mengandung Karakter yang di larang'
                ],
            ], [
                'field' => 'whatsapp_number',
                'label' => 'whatsapp_number',
                'rules' => 'trim|required|min_length[10]|numeric',
                'errors' => [
                    'required' => 'Nomor Whatsapp tidak boleh kosong',
                    'min_length' => 'Minimal Nomor Whatsapp adalah 10 angka',
                    'max_length' => 'Maksimal Nomor Whatsapp adalah 15 angka',
                    'numeric' => 'Nomor Whatsapp Harus berupa angka'
                ]
            ], [
                'field' => 'identity_card',
                'label' => 'identity_card',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'AD/KTP/Paspor tidak boleh kosong',
                ]
            ],
            [
                'field' => 'sim',
                'label' => 'sim',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'sim tidak boleh kosong',
                ]
            ],
            [
                'field' => 'stnk',
                'label' => 'stnk',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'stnk tidak boleh kosong',
                ]
            ],


        ];
        $this->form_validation->set_rules($validation_config);
        if ($this->form_validation->run() == TRUE) {
            $sim = $this->base64_convert('sim', 11, $this->input->post('sim'));
            $identity_card = $this->base64_convert('identity_card', 11, $this->input->post('identity_card'));
            $stnk = $this->base64_convert('stnk', 11, $this->input->post('stnk'));
            $response = [
                'success' => true,
                // 'data' => $this->input->post(),
                'msg' => [
                    'sim' => $sim,
                    'identity_card' => $identity_card,
                    'stnk' => $stnk,
                ],
            ];
        } else {
            $response = [
                'success' => false,
                'msg' => $this->form_validation->error_array(),
            ];
        }
        echo json_encode($response);
    }
    public function base64_convert($type, $id_driver, $data)
    {
        $extension = explode('/', mime_content_type($data))[1];
        // $image = base64_decode($data);
        // $inser = file_put_contents("asset/driver_dokumen/" . $type . "_" . $id_driver . "_" . "." . $extension, $image);
        $img = str_replace('data:image/' . $extension . ';base64,', '', $data);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file_name = $id_driver . "_" . $type . "_" . uniqid();
        $file = 'asset/driver_dokumen/' . $file_name . '.' . $extension;
        $success = file_put_contents($file, $data);
        return ['data' => $success];
    }
    // use for costumer
    function costumer_count_price()
    {
        function isTimeInRange($startTime, $endTime)
        {
            $currentTime = strtotime(date('H:i'));
            $startTimeInSeconds = strtotime($startTime);
            $endTimeInSeconds = strtotime($endTime);
            return $currentTime >= $startTimeInSeconds && $currentTime <= $endTimeInSeconds;
        }
        // costume time
        $startTime = "07:00";
        $endTime = "10:00";
        // end costume
        if (isTimeInRange($startTime, $endTime)) {
            $price = 3000;
        } else {
            $price = 4000;
        }

        $start = microtime(true);
        $validation_config = [
            [
                'field' => 'distance',
                'label' => 'istance',
                'rules' => 'trim|required|numeric',
                'errors' => [
                    'required' => 'Jarak tidak boleh kosong',
                    'numeric' => 'Jarak harus berupa angka'
                ]
            ]
        ];
        $this->form_validation->set_rules($validation_config);

        if ($this->form_validation->run() == FALSE) {
            $response = [
                'success' => false,
                'msg' => $this->form_validation->error_array(),
                'elapsed_time' => microtime(true) - $start,
            ];
        } else {

            $distance = $this->input->post('distance');
            $multiple = 500;
            $response = [
                'success' => true,
                'cost' => number_format(ceil(($distance * ($price / 1000) / $multiple)) * $multiple),
                'elapsed_time' => microtime(true) - $start,
            ];
        }
        echo json_encode($response);
    }
    // store order driver
    function FunctionName(): Returntype
    {
    }
}
        
    /* End of file  ApiUser.php */
