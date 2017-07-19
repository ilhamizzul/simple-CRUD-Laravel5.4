<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    public function setNamaAttribute($value)
    {
    	return $this->attributes['nama'] = ucfirst($value);
    }
    public function setNopegAttribute($value)
    {
    	return $this->attributes['nopeg'] = ucfirst($value);
    }
    public function setAlamatAttribute($value)
    {
    	return $this->attributes['alamat'] = ucfirst($value);
    }
}
