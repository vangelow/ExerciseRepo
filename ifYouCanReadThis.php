<?php
function to_nato($words)
{
	$words = strtolower($words);
    $arrayWords = [];
    for ($i = 0; $i < strlen($words); $i++) {
        switch ($words[$i]) {
         
            case 'a':
                $arrayWords[] = 'Alfa';

                break;
            case 'b':
                $arrayWords[] = 'Bravo';

                break;
            case 'c':
                $arrayWords[] = 'Charlie';

                break;
            case 'd':
                $arrayWords[] = 'Delta';

                break;
            case 'e':
                $arrayWords[] = 'Echo';

                break;
            case 'f':
                $arrayWords[] = 'Foxtrot';

                break;
            case 'g':
                $arrayWords[] = 'Golf';

                break;
            case 'h':
                $arrayWords[] = 'Hotel';

                break;
            case 'i':
                $arrayWords[] = 'India';

                break;
            case 'j':
                $arrayWords[] = 'Juliett';

                break;
            case 'k':
                $arrayWords[] = 'Kilo';

                break;
            case 'l':
                $arrayWords[] = 'Lima';

                break;
            case 'm':
                $arrayWords[] = 'Mike';

                break;
            case 'n':
                $arrayWords[] = 'November';

                break;
            case 'o':
                $arrayWords[] = 'Oscar';

                break;
            case 'p':
                $arrayWords[] = 'Papa';

                break;

            case 'q':
                $arrayWords[] = 'Quebec';

                break;

            case 'r':
                $arrayWords[] = 'Romeo';

                break;

            case 's':
                $arrayWords[] = 'Sierra';

                break;

            case 't':
                $arrayWords[] = 'Tango';

                break;

            case 'u':
                $arrayWords[] = 'Uniform';

                break;

            case 'v':
                $arrayWords[] = 'Victor';

                break;

            case 'w':
                $arrayWords[] = 'Whiskey';

                break;

            case 'x':
                $arrayWords[] = 'Xray';

                break;

            case 'y':
                $arrayWords[] = 'Yankee';

                break;

            case 'z':
                $arrayWords[] = 'Zulu';

                break;

            case ' ':
                $arrayWords[] = ' ';

                break;

            case ',':
                $arrayWords[] = ',';

                break;

            case '.':
                $arrayWords[] = '.';
                break;

            case '!':
                $arrayWords[] = '!';

                break;

            case '?':
                $arrayWords[] = '?';
                break;

        }
       $a = implode(' ' ,$arrayWords);
       
       
    }
    $a = str_replace(' ,', ',', $a);
       $a = str_replace('  !', ' !', $a);
       $a = str_replace('  ?', ' ?', $a);
       $a = str_replace('  .', ' .', $a);
      $a = str_replace('  ', '', $a);
    return $a;
}
echo to_nato('Did not see that coming!');