<?php

namespace App\Policies;

use App\User;
use App\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any Books.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the Book.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $Book
     * @return mixed
     */
    public function view(User $user, Book $book)
    {
        return $book->id % 2;
    }

    /**
     * Determine whether the user can create Books.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the Book.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $Book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can delete the Book.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $Book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        return !($book->id % 4);
    }

    /**
     * Determine whether the user can restore the Book.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $Book
     * @return mixed
     */
    public function restore(User $user, Book $book)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the Book.
     *
     * @param  \App\User  $user
     * @param  \App\Book  $Book
     * @return mixed
     */
    public function forceDelete(User $user, Book $book)
    {
        //
    }
}
