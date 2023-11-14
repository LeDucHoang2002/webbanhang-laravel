<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback_Images extends Model
{
    use HasFactory;
    protected $table = 'feedback_images'; // Tên của bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id'; // Khóa chính của bảng
    protected $fillable = ['id_feedback','id_image','created_at','updated_at'];
}
