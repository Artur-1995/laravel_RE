<?php

namespace App\Decorators;

class SkillDecorator
{
    public function getDescription($user)
    {
        // Логика добавления навыков к пользователю
        $skills = ['PHP', 'JavaScript', 'Golang', 'Java'];
        $user->description = implode(', ', $skills);  
        return $user; 
    }
}