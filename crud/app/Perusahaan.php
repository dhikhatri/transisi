<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Perusahaan extends Model{

    protected $fillable = ['namaPerusahaan','emailPerusahaan','logoPerusahaan','websitePerusahaan'];
}
