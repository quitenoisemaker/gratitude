<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //

    protected $fillable=['category_id', 'question', 'option_a', 'option_b', 'option_c', 'option_d'];


    public function category()
    {
        return $this->belongsTo(Category::class); 
    }


    public static function createQuestion($request)
    {
        $question= new Question;
        $question->create($request);

    }

    public static function updateQuestion($request, $id)
    {
        $question=Question::find($id);
        $question->update($request->all());
        
    }
}
