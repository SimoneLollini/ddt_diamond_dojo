<?php


class Diamonds
{

    /**
     * @param string $char
     * @return string[]
     */
    public function create(string $lastChar): array
    {
        $chars = range("A", strtoupper($lastChar));
        //caso in cui array ["A"]
        if (sizeof($chars) === 1) {
            return $chars;
        }

        $upperDiamond = [];
        $nOfSpaces = 0;
        foreach ($chars as $index => $char) {
            $string = "";
            if ($char === "A") {
                $string = $char;
                $nOfSpaces = 1;
            } else {
                $spacesBetween = str_repeat(" ", $nOfSpaces);
                $nOfSpaces += 2;
                $string = $char . $spacesBetween . $char;
            }
            $nInitialSpaces = (count($chars) - $index) - 1;
            $initialSpaces = str_repeat(" ", $nInitialSpaces);

            $upperDiamond[] = $initialSpaces . $string;
        }

        $middleDiamondElement = array_pop($upperDiamond);

        $lowerDiamond = array_reverse($upperDiamond);

        $upperDiamond[] = $middleDiamondElement;

        $diamond = array_merge($upperDiamond, $lowerDiamond);

        var_dump("diamond '$lastChar' ", $diamond);

        return $diamond;
    }
}
