<?php


class CaesarCipher
{
    private $spots;
    private $alphabetArr;

    public function __construct($spots)
    {
        $this->spots = $spots;
        $this->alphabetArr = range('A', 'Z');

    }

    public function encode($cipher)
    {
        $result = '';
        $this->alphabetArr = array_merge($this->alphabetArr, range('A', 'Z'));
        for ($i = 0; $i < strlen($cipher); $i++) {
            $cipher = strtoupper($cipher);
            if (in_array($cipher[$i], $this->alphabetArr)) {
                if (array_keys($this->alphabetArr, $cipher[$i])) {
                    $newChar = array_keys($this->alphabetArr, $cipher[$i]);
                    $cipher[$i] = $this->alphabetArr[$newChar[0] + $this->spots];
                    $result .= $cipher[$i];

                }

            } else {
                $result .= $cipher[$i];
            }
        }
        return $result;
    }

    public function decode($cipher)
    {
        $result = '';


        var_dump($this->alphabetArr);
        for ($i = 0; $i < strlen($cipher); $i++) {
            $cipher = strtoupper($cipher);
            if (in_array($cipher[$i], $this->alphabetArr)) {
                if (array_keys($this->alphabetArr, $cipher[$i])) {
                    $newChar = array_keys($this->alphabetArr, $cipher[$i]);
                    if ($newChar[0] - $this->spots < 0) {
                        $newChar[0] += count($this->alphabetArr);
                    }


                    $cipher[$i] = $this->alphabetArr[$newChar[0] - $this->spots];
                    $result .= $cipher[$i];

                }

            } else {
                $result .= $cipher[$i];
            }
        }
        return $result;
    }

}

$a = new CaesarCipher(5);
echo $a->decode('Htijbfwx'); // result -> CODEWARS