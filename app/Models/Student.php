<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function createAndAssert($data)
    {
        $student = Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'dob' => $data['dob'],
        ]);

        // Example of assertion (this might vary based on your testing setup)
        if ($student->exists()) {
            return true;
        } else {
            return false;
        }
    }
}
