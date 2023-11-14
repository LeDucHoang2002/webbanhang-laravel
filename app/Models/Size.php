<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = 'size'; // Tên của bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id_size'; // Khóa chính của bảng
    protected $fillable = ['size_name','created_at','updated_at'];
}
