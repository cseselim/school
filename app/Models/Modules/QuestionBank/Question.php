<?php


namespace App\Models\Modules\QuestionBank;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject_id',
        'question_level_id',
        'title',
        'mark',
        'type',
        'user_id',
        'question_explanation',
        'correct_answer',
        'is_temp',
        'img_has'
    ];


    /**
     * Get the phone associated with the user.
     */
    public function questionAttachment()
    {
        return $this->hasOne(QuestionAttachment::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function questionOption()
    {
        return $this->hasMany(QuestionOption::class);
    }

}
