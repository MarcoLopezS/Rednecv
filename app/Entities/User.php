<?php namespace Rednecv\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public function category()
    {
        return $this->hasMany('Rednecv\Entities\Category');
    }

    public function post()
    {
        return $this->hasMany('Rednecv\Entities\Post');
    }

    public function postPublicar()
    {
        return $this->hasMany('Rednecv\Entities\Post')->wherePublicar(1)->count();
    }

    public function page()
    {
        return $this->hasMany('Rednecv\Entities\Page');
    }

    public function tag()
    {
        return $this->hasMany('Rednecv\Entities\Tag');
    }

    public function profile()
    {
        return $this->hasOne('Rednecv\Entities\UserProfile', 'user_id', 'id');
    }

    protected $hidden = ['password'];

    protected $fillable = ['email', 'password', 'type'];

    public function setPasswordAttribute($value)
    {
        if (!empty ($value)) {
            $this->attributes['password'] = \Hash::make($value);
        }
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }

    //SCOPES
    public function scopeEmail($query, $value)
    {
        $query->where('email', 'LIKE', "%$value%");
    }
}
