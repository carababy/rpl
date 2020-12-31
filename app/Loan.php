<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable =[
        'lid',
        'lproduct',
        'borrower',
        'loan_amount',
        'income',
        'pay_date',
        'repayment_source',
        'employment_status',
        'duration',
        'salary_acc_no',
        'bvn',
        'employer',
        'employer_address',
        'borrower_photo',
        'identification',
        'existing_loan',
        'existing_loan_balance',
        'monthly_rental',
        'tenure_end_date',
        'g_name',
        'g_rel',
        'g_phone',
        'g_address',
        'g_gender',
        'g_identification',
        'emi',
        'repay_1',
        'repay_2',
        'repay_3',
        'repay_date_1',
        'repay_date_2',
        'repay_date_3',
        'loan_status',
        'remarks',
        

    ];
    public function customers()
    {
        return $this->belongsTo(User::class, 'borrower');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'lproduct');
    }

    public function durations()
    {
        return $this->belongsTo(Duration::class, 'duration');
    }

    public function empstatus()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_status');
    }
}
