<?php
    
    namespace Waithira\Kicksfootware\Templates;
    
    class Fields
    {
        public const TEXT = "text";
        public const PASSWORD = "password";
        public const EMAIL = "email";
        public const NUMBER = "number";
        public const FILE = "file";
    
        public const MULTIPLE = "multiple";
        public const HIDDEN = "hidden";
    
        public string $multiple;
        public string $hidden;
        public string $type;
        public string $placeholder;
        public string $id;
        public string $value;
        public string $class;
        public string $inputclass;
    
        /**
         * @param $attribute
         */
        public string $attribute;
    
        public function __construct(string $attribute)
        {
            $this->attribute = $attribute;
            $this->type = self::TEXT;
            $this->multiple = "";
            $this->hidden = "";
            $this->placeholder = $this->attribute;
            $this->id = $this->attribute;
            $this->value = "";
            $this->class = "";
            $this->inputclass = "";
        }
        public function __toString(): string
        {
            return sprintf(
                '<div class="b-one p-3-15 m-t-4 %s">
                <input type="%s" name="%s" id="%s" placeholder="%s" value ="%s" %s %s
                    class="f-s-17 b-n outline-none p-10-15 w-p-100 %s">
            </div>
            ',
                $this->class,
                $this->type,
                $this->attribute,
                str_replace(
                    '[]',
                    '',
                    $this->id
                ),
            
                str_replace(
                    $this->placeholder[0],
                    strtoupper($this->placeholder[0]),
                    $this->placeholder
                ),
                $this->value,
                $this->multiple,
                $this->hidden,
                $this->inputclass
            );
        }
    
        public function file(): static
        {
            $this->type = self::FILE;
            return $this;
        }
    
        public function number(): static
        {
            $this->type = self::NUMBER;
            return $this;
        }
        public function email(): static
        {
            $this->type = self::EMAIL;
            return $this;
        }
        public function password(): static
        {
            $this->type = self::PASSWORD;
            return $this;
        }
    
        public function class($additionalClass) : static
        {
            $this->class = $additionalClass;
            return $this;
        }
    
        public function inputclass($additionalClass) : static
        {
            $this->inputclass = $additionalClass;
            return $this;
        }
        public function multiple(): static
        {
            $this->multiple = self::MULTIPLE;
            return $this;
        }
    
        public function hidden(): static
        {
            $this->multiple = self::HIDDEN;
            return $this;
        }
    
        /**
         * @param $customPlacehoder
         * @return $this
         */
        public function placeholder($customPlacehoder): static
        {
            $this->placeholder = $customPlacehoder;
            return $this;
        }
        public function id($string): static
        {
            $this->id = $string;
            return $this;
        }
        public function value($string): static
        {
            $this->value = $string;
            return $this;
        }
        public function textarea($name)
        {
            $this->textarea = $name;
            return $this;
        }
    }