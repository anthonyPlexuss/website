<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
  
	protected $table = 'contact_us';

	protected $fillable = array( 'full_name', 'email', 'subject', 'body');
}
