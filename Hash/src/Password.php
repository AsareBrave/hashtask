<?php

use Hash\Hash;

class Password extends Hash
{
    /**
     * This properties are used dynamically
     */
    private $uppercase;
    private $lowercase;
    private $numbers;
    private $special_chars;
    private $password;
    private $no_of_str;

    private $white_list = [
        'numbers',
        'special_chars',
    ];
    public function generate_password($password_length = 6, $options = []): string
    {
        if (is_array($options)) {
            foreach ($options as $key => $value) {
                $this->passwordOptions($key, $value);


                $this->no_of_str = $password_length / count($options);

                if (isset($options['numbers'])) {
                    $this->password = str_shuffle($this->generate_alphabets($this->no_of_str) . $this->generate_numbers($this->no_of_str));
                }

                if (isset($options['special_chars'])) {
                    $this->password = str_shuffle($this->generate_alphabets($this->no_of_str) . $this->generate_special_characters($this->no_of_str));
                }

                if (isset($options['numbers']) && isset($options['special_chars'])) {
                    $this->password = str_shuffle($this->generate_alphabets($this->no_of_str) . $this->generate_numbers($this->no_of_str) . $this->generate_special_characters($this->no_of_str));
                }

                if (!isset($options['numbers']) && !isset($options['special_chars'])) {
                    $this->password = str_shuffle($this->generate_characters($this->no_of_str));
                }
            }

            return $this->password;
        } else {
            return 'Expected an array!';
        }
    }


    private function passwordOptions($key, $value): void
    {
        if (in_array($key, $this->white_list)) {
            $property = $key;
            $this->$property = $value;
        } else {
            die('Invalid password option');
        }
    }

    /**
     * returns all string characters
     * @todo you can add any I missed
     * @return string
     */
    private function generate_characters($length)
    {
        $data = ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', 'I' => 'I', 'J' => 'J', 'K' => 'K', 'L' => 'L', 'M' => 'M', 'N' => 'N', 'O' => 'O', 'P' => 'P', 'Q' => 'Q', 'R' => 'R', 'S' => 'S', 'T' => 'T', 'U' => 'U', 'V' => 'V', 'W' => 'W', 'Y' => 'Y', 'Z' => 'Z', 'a' => 'a', 'b' => 'b', 'c' => 'c', 'd' => 'd', 'e' => 'e', 'f' => 'f', 'g' => 'g', 'h' => 'h', 'i' => 'i', 'j' => 'j', 'k' => 'k', 'l' => 'l', 'm' => 'm', 'n' => 'n', 'o' => 'o', 'p' => 'p', 'q' => 'q', 'r' => 'r', 's' => 's', 't' => 't', 'u' => 'u', 'v' => 'v', 'w' => 'w', 'y' => 'y', 'z' => 'z', '!' => '!', '@' => '@', '#' => '#', '$' => '$', '%' => '%', '^' => '^', '*' => '*', '(' => '(', ')' => ')', '+' => '+', '<' => '<', '>' => '>', '?' => '?', '/' => '/', '[' => '[', ']' => ']', '{' => '{', '}' => '}', 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 0 => 0];

        if ($length > count($data)) {
            $length = count($data);
        }

        for ($i = 0; $i <= count($data); $i++) {
            $str_arr = array_rand($data, $length);
        }
        $generated_string = (array)$str_arr;

        return implode('', $generated_string);
    }

    /**
     * returns all alphabets
     * 
     * @return string
     */
    private function generate_alphabets($length)
    {
        $data = ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'F' => 'F', 'G' => 'G', 'H' => 'H', 'I' => 'I', 'J' => 'J', 'K' => 'K', 'L' => 'L', 'M' => 'M', 'N' => 'N', 'O' => 'O', 'P' => 'P', 'Q' => 'Q', 'R' => 'R', 'S' => 'S', 'T' => 'T', 'U' => 'U', 'V' => 'V', 'W' => 'W', 'Y' => 'Y', 'Z' => 'Z', 'a' => 'a', 'b' => 'b', 'c' => 'c', 'd' => 'd', 'e' => 'e', 'f' => 'f', 'g' => 'g', 'h' => 'h', 'i' => 'i', 'j' => 'j', 'k' => 'k', 'l' => 'l', 'm' => 'm', 'n' => 'n', 'o' => 'o', 'p' => 'p', 'q' => 'q', 'r' => 'r', 's' => 's', 't' => 't', 'u' => 'u', 'v' => 'v', 'w' => 'w', 'y' => 'y', 'z' => 'z'];

        if ($length > count($data)) {
            $length = count($data);
        }

        for ($i = 0; $i <= count($data); $i++) {
            $str_arr = array_rand($data, $length);
        }
        $generated_string = (array)$str_arr;

        return implode('', $generated_string);
    }

    /**
     * returns all numbers
     * 
     * @return string
     */
    private function generate_numbers($length)
    {
        $data = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 0 => 0];

        if ($length > count($data)) {
            $length = count($data);
        }

        for ($i = 0; $i <= count($data); $i++) {
            $str_arr = array_rand($data, $length);
        }
        $generated_string = (array)$str_arr;

        return implode('', $generated_string);
    }

    /**
     * returns all special characters
     * @todo you can add any I missed
     * @return string
     */
    private function generate_special_characters($length)
    {
        $data = ['!' => '!', '@' => '@', '#' => '#', '$' => '$', '%' => '%', '^' => '^', '*' => '*', '(' => '(', ')' => ')', '+' => '+', '<' => '<', '>' => '>', '?' => '?', '/' => '/', '[' => '[', ']' => ']', '{' => '{', '}' => '}'];

        if ($length > count($data)) {
            $length = count($data);
        }

        for ($i = 0; $i <= count($data); $i++) {
            $str_arr = array_rand($data, $length);
        }
        $generated_string = (array)$str_arr;

        return implode('', $generated_string);
    }
}
