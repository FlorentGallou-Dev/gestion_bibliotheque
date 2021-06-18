<?php

// Classe représetant les utilisateurs stockés en base de données
class User {
    protected int $bw_id;
    protected string $bw_firstname;
    protected string $bw_lastname;
    protected string $bw_birthdate;
    protected string $bw_address;
    protected string $bw_phone;

    public function __construct(?array $datas = null)
    {
        $this->hydrateBorrower($datas);
    }

    public function setBw_id(int $id)
    {
        $this->bw_id = $id;
    }
    public function getBw_id(): int
    {
        return $this->bw_id;
    }

    public function setBw_firstname(string $firstname)
    {
        $this->bw_firstname = $firstname;
    }
    public function getBw_firstname(): string
    {
        return $this->bw_firstname;
    }

    public function setBw_lastname(string $lastname)
    {
        $this->bw_lastname = $lastname;
    }
    public function getBw_lastname(): string
    {
        return $this->bw_lastname;
    }

    public function setBw_birthdate(string $birthdate)
    {
        $this->bw_birthdate = $birthdate;
    }
    public function getBw_birthdate(): string
    {
        $today = date("Y-m-d");// get the actual date
        $diff = date_diff(date_create($this->bw_birthdate), date_create($today));//gets difference between birthdate and actual date

        return $diff->format('%y') . " ans";//sends back only the year with formated response to fit readable datas for user
    }

    public function setBw_address(string $address)
    {
        $this->bw_address = $address;
    }
    public function getBw_address(): string
    {
        return $this->bw_address;
    }
    
    public function setBw_phone(string $phone)
    {
        $this->bw_phone = $phone;
    }
    public function getBw_phone(): string
    {
        return $this->bw_phone;
    }

    private function hydrateBorrower(?array $datas = null)
    {
        if ($datas) {
            foreach ($datas as $key => $value) {
                $setter = "set" . ucfirst($key);
                if (method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }
}
