<?php

class Validator
{
    private $data;
    private $errors = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public static function make($data, $rules)
    {
        $validator = new self($data);
        $validator->validate($rules);
        return $validator;
    }

    private function validate($rules)
    {
        foreach ($rules as $field => $ruleString) {
            $rulesArray = explode('|', $ruleString);
            foreach ($rulesArray as $rule) {
                $params = [];
                if (strpos($rule, ':') !== false) {
                    list($rule, $paramStr) = explode(':', $rule);
                    $params = explode(',', $paramStr);
                }

                $method = 'validate' . ucfirst($rule);
                if (method_exists($this, $method)) {
                    $this->$method($field, $params);
                }
            }
        }
    }

    private function validateRequired($field)
    {
        if (empty($this->data[$field])) {
            $this->addError($field, ucfirst($field) . " is required.");
        }
    }

    private function validateEmail($field)
    {
        if (!empty($this->data[$field]) && !filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
            $this->addError($field, "Invalid email format.");
        }
    }

    private function validateMin($field, $params)
    {
        if (!empty($this->data[$field]) && strlen($this->data[$field]) < $params[0]) {
            $this->addError($field, ucfirst($field) . " must be at least {$params[0]} characters.");
        }
    }

    private function validateSame($field, $params)
    {
        if (!empty($this->data[$field]) && $this->data[$field] !== $this->data[$params[0]]) {
            $this->addError($field, ucfirst($field) . " must match " . $params[0] . ".");
        }
    }

    private function validateUnique($field, $params)
    {
        if (empty($this->data[$field])) {
            return;
        }
        
        $table = $params[0];
        $column = $params[1] ?? $field;
        
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("SELECT COUNT(*) FROM $table WHERE $column = :value");
        $stmt->execute(['value' => $this->data[$field]]);
        
        if ($stmt->fetchColumn() > 0) {
            $this->addError($field, ucfirst($field) . " has already been taken.");
        }
    }

    private function addError($field, $message)
    {
        if (!isset($this->errors[$field])) {
            $this->errors[$field] = $message;
        }
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }
}
