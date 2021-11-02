<?php


namespace App\Models\Modules\QuestionBank;
use Illuminate\Database\Eloquent\Model;

class QuestionAttachment extends Model
{

    protected $table = 'question_attachment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id',
        'file',
        'questions_option_id',
    ];


    /**
     * Get the phone associated with the user.
     */
    public function questionAttachment()
    {
        return $this->belongsTo(Question::class);
    }

}
