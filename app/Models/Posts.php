<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'img',
        'user_id'
    ];


        /**

     * Get the user that owns the post.

     */

     public function user(): BelongsTo
     {
 
         return $this->belongsTo(User::class);
        // quando chiamiamo questo metodo user, ci viene restituito l'users-utente associato a questo post
     }
}
