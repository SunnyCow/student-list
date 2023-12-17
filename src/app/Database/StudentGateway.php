<?php

declare(strict_types=1);

namespace App\Database;

use App\DB;

class StudentGateway
{
    private DB $db;
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    public function findById(int $studentId): array
    {
        $stmt = $this->db->prepare(
            'SELECT * FROM students
              WHERE students.id = ?'
        );

        $stmt->execute([$studentId]);

        $student = $stmt->fetch();

        return $student ?: [];
    }

    public function findAll(): false|array
    {
        $query = 'SELECT * FROM students';

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insert(string $email, string $firstName, string $surname, string $sex, string $groupCode, int $examScore, string $birthYear, string $residency): int
    {
        $stmt = $this->db->prepare(
            'INSERT INTO students (email, first_name, surname, sex, group_code, exam_score, birth_year, residency)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)'
        );

        $stmt->execute([$email, $firstName, $surname, $sex, $groupCode, $examScore, $birthYear, $residency]);

        return (int) $this->db->lastInsertId();
    }
}
