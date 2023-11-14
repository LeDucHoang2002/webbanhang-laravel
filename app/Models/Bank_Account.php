<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank_Account extends Model
{
    use HasFactory;
    protected $table = 'bank_account'; // Tên của bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id'; // Khóa chính của bảng
    protected $fillable = ['username','bank','account_number','beneficiary_name','created_at','updated_at'];
}
