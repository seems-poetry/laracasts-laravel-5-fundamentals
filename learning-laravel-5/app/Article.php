<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	//which attributes may be ok to mass assign
	protected $fillable = [
		'title' ,
		'body',
		'published_at'
	];


	/**
	 * Additional fields to treat as Carbon instances
	 * @var array
	 */
	protected $dates = ['published_at']; // facem asta ca sa i-a coloana published_at si sa o trateze ca o instanta de Carbon


	/**
	 * Scope queries to articles that have ben published
	 * @param  [type] $query [description]
	 * @return [type]        [description]
	 */
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}



	/**
	 * Set the published_at attribute
	 * @param [type] $date [description]
	 */
	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}

	/**
	 * An article is owned by a user
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
