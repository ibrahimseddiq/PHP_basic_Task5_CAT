<?php
function prime_number_checker($num) {
    if($num > 1) {
        if($num === 2) return true;
        for($i = 2; $i <= sqrt($num); $i++) {
            if($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
    return false;
    /*
        O(n)طبعا وانا عامل الكود ده كنت محبط عشان انه 
        وانا بتضايق لما الحل ال أوصله يكون وحش كده وبتضايق اكتر لما ما أعرفش أوصل لحل احسن من كده بسبب ضيق أفقي 
        بس لما راجعت مع جي بي تي طلعلي حل أحسن بكتير وهو اني اللوب بتاعتي تلف لحد
        $i <= sqrt($num)
        =>
        for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
        واهو أدينا بنتعلم 🙄
    */
}

var_dump(prime_number_checker(1567928343920394874));
var_dump(prime_number_checker(59));