<h3>
    <?php
    $nom_produit = "t-shirt simple";
    echo 'Le nom du produit est ';
    echo $nom_produit;
    ?>
    <br/>
    <?php
    $quantité = "10";
    echo 'Il reste ';
    echo $quantité;
    echo " produits en stock"
    ?>
    <br/>
    <?php
    $couleur = "blanche";
    echo"Le produit ";
    echo$nom_produit;
    echo" est de couleur ";
    echo$couleur
    ?>
</h3>
<h4>
    <?php
    $prix = "10.50";
    $nombre = "3";
    echo "Acheter 3 produits couterait ";
    echo $prix*$nombre;
    ?>
    <br/>
    <?php
    echo "Acheter la totalité des produits disponibles couterait ";
    echo $prix*$quantité;
    ?>
    <br/>
    <?php
    echo "Si 3 produits sont vendus, il reste ";
    echo $quantité-$nombre;
    echo " en stock."
    ?>
</h4>
<p>
    <?php
    if ($quantité > 0)
    {
        echo "Le produit ";
        echo $nom_produit;
        echo " est disponible en ligne.";
        $disponible = "true";
    }
    
    else
    {
        echo "Le produit ";
        echo $nom_produit;
        echo " n'est malheureusement plus disponible.";
        $disponible = "false";
    }
    ?>
</p>
<p>
    <?php
    if ($quantité > 5)
    {
        echo "Il reste ";
        echo $quantité;
        echo " produits disponible en magasin.";
    }

    elseif ($quantité < 5)
    {
        echo "Il ne reste plus que ";
        echo $quantité;
        echo " produits en magasin.";
    }
    elseif ($quantité == 1)
    {
        echo "Il ne reste qu'un produit en magasin.";
    }
    elseif ($quantité == 0)
    {
        echo "Il ne reste plus de produit en magasin.";
    }
    ?>
</p>