<?php

namespace App\Entity;

class Student
{
    const SEX_MALE = "male";
    const SEX_FEMALE = "female";

    const RESIDENCY_RESIDENT = "resident";
    const RESIDENCY_NONRESIDENT = "nonresident";

    protected int $id;
    protected string $firstName;
    protected string $surname;
    protected string $sex;
    protected string $group;
    protected string $email;
    protected int $examScore;
    protected int $birthYear;
    protected string $residency;
    protected string $token;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getExamScore(): int
    {
        return $this->examScore;
    }

    /**
     * @param int $examScore
     */
    public function setExamScore(int $examScore): void
    {
        $this->examScore = $examScore;
    }

    /**
     * @return int
     */
    public function getBirthYear(): int
    {
        return $this->birthYear;
    }

    /**
     * @param int $birthYear
     */
    public function setBirthYear(int $birthYear): void
    {
        $this->birthYear = $birthYear;
    }

    /**
     * @return string
     */
    public function getResidency(): string
    {
        return $this->residency;
    }

    /**
     * @param string $residency
     */
    public function setResidency(string $residency): void
    {
        $this->residency= $residency;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}
