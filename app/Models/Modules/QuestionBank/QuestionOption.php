<?php


namespace App\Models\Modules\QuestionBank;
use Illuminate\Database\Eloquent\Model;


class QuestionOption extends Model
{
    protected $table = 'questions_options';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id',
        'options',
        'is_correct',
        'img_has',
    ];


    /**
     * Get the phone associated with the user.
     */
    public function questionOption()
    {
        return $this->belongsTo(Question::class);
    }
}
