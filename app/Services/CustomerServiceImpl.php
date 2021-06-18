<?php


namespace App\Services;

use App\Repositories\CustomerRepository;

class CustomerServiceImpl extends Service implements CustomerService
{
    public $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
}
