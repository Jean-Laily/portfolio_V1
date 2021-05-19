<?php
    // renvoie la valeur vrai si le compte existe
    function ceCompteExiste($id, $pass)
    {
        $comptes = array
        (
            "admin" => "1234",
            "afpar" => "afpar"
        );

        foreach ($comptes as $identifiant => $motDePasse)
        {
            if ($id === $identifiant and $pass === $motDePasse)
            {
                return true;
            }
        }

        return false;
    }
?>