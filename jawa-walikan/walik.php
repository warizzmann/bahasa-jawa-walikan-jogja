<?php
# created by warizzmann
# 2016

    $axara = array(
                    'h','n','c','r','k',
                    'd','t','s','w','l',
                    'p','dh','j','y','ny',
                    'm','g','b','th','ng',
                    ' '
                    );

    function njupuk_konsonan($opo){
        //remove the vowel
        $vowels = array('a','i','u','e','o','A','I','U','E','O');
        $consonant = str_replace($vowels,'',$opo);
        return $consonant;
    }

    function njupuk_vokal($opo){
        //remove the consonant
        $consonants = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z',
            'B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Y','Z');
        $vowel = str_replace($consonants,'',$opo);
        return $vowel;
    }

    function diwalik($opo)
    {
        global $axara;
        //strip spaces
        // $opo = str_replace(' ','',$opo);
        //separate the vowel from the consonant
        $consonant = njupuk_konsonan($opo);
        $vowel = njupuk_vokal($opo);

        ////flip the syllable
        //get syllable position
        $position = array_search(strtolower($consonant), $axara);
        //if the syllable position less than 9 (0-9)
        if ($position<11) {
            if ($position==10) {
                $new_position = $position - 10;
            }
            else{
                $new_position = $position + 10;
            }
        }
        //if the syllable position less than 10 (10-19)
        elseif ($position>10 && $position<20) {
            $new_position = $position - 10;
        }
        elseif ($position == 20) {
            $new_position = $position;
        }
        // echo $position.'-';
        // echo $new_position;
        $kewalik = $axara[$new_position];

        return $kewalik.$vowel;
    }
