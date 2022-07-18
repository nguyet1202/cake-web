<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BillDetail;
class BillDetail extends Model
{
    use HasFactory;
    protected $table = 'bill_detail';
}
