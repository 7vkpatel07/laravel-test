<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	public function childrenMenu()
	{
	    return $this->hasMany($this, 'id', 'parent_id');
	}

	public function allChildrenMenu()
	{
	    return $this->childrenMenu()->with('allChildrenMenu');
	}

	public function childs() {
        return $this->hasMany($this,'parent_id','id') ;
    }
}
