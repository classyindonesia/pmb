<?php 

namespace App\Models\Mst;

use App\Models\Mst\Pendaftaran;
use App\Models\Ref\UserLevel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mst_users';
    protected $appends = ['tgl'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'email', 'password', 'ref_user_level_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }


    public function mst_pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class, 'alamat_email', 'email');
    }

 
    public function getTglAttribute()
    {
        $created_at = $this->attributes['created_at'];
        $tgl = \Fungsi::date_to_tgl(date('Y-m-d', strtotime($created_at)));
        return $tgl;
    }


    public function ref_user_level()
    {
        return $this->belongsTo(UserLevel::class, 'ref_user_level_id');
    }
}
